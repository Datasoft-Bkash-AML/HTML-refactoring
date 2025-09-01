const fs = require('fs');
const path = require('path');
const { chromium } = require('playwright');
const url = process.argv[2] || 'https://demos.reytheme.com/san-francisco/';

const outDir = path.resolve(__dirname, '..', 'site', 'public', 'downloaded-assets');

async function ensureDir(dir) {
  if (!fs.existsSync(dir)) fs.mkdirSync(dir, { recursive: true });
}

async function saveBuffer(buffer, filepath) {
  await ensureDir(path.dirname(filepath));
  fs.writeFileSync(filepath, buffer);
}

(async () => {
  await ensureDir(outDir);
  const browser = await chromium.launch();
  const context = await browser.newContext();
  const page = await context.newPage();

  console.log('Navigating to', url);
  await page.goto(url, { waitUntil: 'networkidle' });

  // Collect asset urls from <img>, link rel=preload, link rel=stylesheet, @font-face in stylesheets, and css background-image
  const assetUrls = new Set();

  // imgs and source elements
  const imgSrcs = await page.$$eval('img, source', els => els.map(e => e.src || e.getAttribute('src') || e.getAttribute('data-src')).filter(Boolean));
  imgSrcs.forEach(u => assetUrls.add(u));

  // link tags (stylesheets, preload)
  const linkHrefs = await page.$$eval('link[rel], link[href]', els => els.map(l => ({rel: l.rel, href: l.href})).filter(Boolean));
  linkHrefs.forEach(o => { if (o.href) assetUrls.add(o.href); });

  // stylesheets: parse CSS for url(...) patterns and @font-face
  const cssContents = [];
  for (const link of await page.$$eval('link[rel="stylesheet"][href]', els => els.map(l => l.href))) {
    try {
      const resp = await page.request.get(link);
      if (resp.ok()) cssContents.push(await resp.text());
    } catch (e) { console.warn('Failed to fetch stylesheet', link, e.message); }
  }

  // inline styles
  const inlineStyles = await page.$$eval('style', els => els.map(s => s.textContent || ''));
  cssContents.push(...inlineStyles);

  // Collect url(...) from css
  const urlRegex = /url\((?:"|'|)(.*?)(?:"|'|)\)/g;
  for (const css of cssContents) {
    let m;
    while ((m = urlRegex.exec(css)) !== null) {
      if (m[1]) {
        const u = m[1].trim();
        if (!u.startsWith('data:')) assetUrls.add(u);
      }
    }
  }

  // Also check computed styles for background-image on elements
  const bgUrls = await page.$$eval('[style], *', els => {
    const urls = [];
    for (const el of els) {
      try {
        const cs = window.getComputedStyle(el);
        const bg = cs.getPropertyValue('background-image');
        if (bg && bg !== 'none') urls.push(bg);
      } catch(e) {}
    }
    return urls;
  });
  for (const bg of bgUrls) {
    let m;
    while ((m = urlRegex.exec(bg)) !== null) {
      if (m[1] && !m[1].startsWith('data:')) assetUrls.add(m[1]);
    }
  }

  console.log('Found', assetUrls.size, 'raw assets (some may be relative)');

  // Normalize and download
  for (const raw of assetUrls) {
    try {
      const resolved = new URL(raw, url).toString();
      const u = resolved;
      const pathname = new URL(u).pathname;
      const localPath = path.join(outDir, pathname.replace(/^\//, ''));

      // Avoid query strings in filenames
      const localPathClean = localPath.split('?')[0];

      if (fs.existsSync(localPathClean)) {
        console.log('Already have', localPathClean);
        continue;
      }

      console.log('Downloading', u);
      const res = await page.request.get(u);
      if (res && res.ok()) {
        const buffer = await res.body();
        await saveBuffer(buffer, localPathClean);
      } else {
        console.warn('Failed to download', u, res && res.status());
      }
    } catch (e) {
      console.warn('Skipping', raw, e.message);
    }
  }

  await browser.close();
  console.log('Done. Assets saved to', outDir);
})();
