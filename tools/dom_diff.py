#!/usr/bin/env python3
"""
DOM-aware comparison script.

Usage: python3 tools/dom_diff.py

Reads:
 - /workspaces/HTML-refactoring/scripts/index.html (source canonical HTML)
 - /tmp/server.html (server-assembled HTML)

Produces:
 - /workspaces/HTML-refactoring/dom_diff_report.json

The script extracts key sections (hero slider, slides, promo block, product grids, product titles,
newsletter form, elementor headings) and reports counts, sample text, and small snippets to help
identify exact differences.
"""
from pathlib import Path
import json
import sys

try:
    from bs4 import BeautifulSoup
except Exception:
    print('BeautifulSoup4 not installed. Run: python3 -m pip install bs4 lxml')
    raise


WORKDIR = Path('/workspaces/HTML-refactoring')
SRC = WORKDIR / 'scripts' / 'index.html'
SRV = Path('/tmp/server.html')
OUT = WORKDIR / 'dom_diff_report.json'


def norm_text(el):
    return ' '.join(el.get_text(separator=' ', strip=True).split()) if el else ''


def sample_outer(el, maxlen=1200):
    if not el:
        return ''
    h = el.prettify()
    return h[:maxlen]


def ensure_files():
    if not SRC.exists():
        print('Source not found:', SRC)
        sys.exit(2)
    if not SRV.exists():
        print('Server HTML not found:', SRV)
        sys.exit(3)


def main():
    ensure_files()
    soup_src = BeautifulSoup(SRC.read_text(encoding='utf-8', errors='ignore'), 'lxml')
    soup_srv = BeautifulSoup(SRV.read_text(encoding='utf-8', errors='ignore'), 'lxml')

    checks = [
        {'id': 'hero_slider', 'label': 'Hero slider', 'selectors': ['.elementor-widget-reycore-basic-slider', '.rey-bSlider', '.splide']},
        {'id': 'hero_slides', 'label': 'Hero slides', 'selectors': ['.splide__slide', 'a.splide__slide', 'li.splide__slide']},
        {'id': 'promo_apple_watch', 'label': 'Promo: Apple watch', 'selectors': ['.promo-apple-watch', '.elementor-column.elementor-col-33'], 'text_matches': ['Apple watch 8 series', 'The future of health is on your wrist']},
        {'id': 'product_grids', 'label': 'Product grids', 'selectors': ['.reyEl-productGrid', '.woocommerce .products', '.products']},
        {'id': 'product_titles', 'label': 'Product titles', 'selectors': ['.woocommerce-loop-product__title', 'h2.woocommerce-loop-product__title', 'h2 a.woocommerce-LoopProduct-link']},
        {'id': 'newsletter_form', 'label': 'Newsletter form', 'selectors': ['form#mc4wp-form-1', 'form.mc4wp-form']},
        {'id': 'headings', 'label': 'Elementor headings', 'selectors': ['.elementor-heading-title']},
    ]

    report = {'meta': {'source': str(SRC), 'server': str(SRV)}, 'sections': {}}

    for c in checks:
        entry = {'label': c['label'], 'source': {}, 'server': {}}
        sels = c.get('selectors', [])
        for s in sels:
            src_nodes = soup_src.select(s)
            srv_nodes = soup_srv.select(s)
            entry['source'][s] = {'count': len(src_nodes), 'sample_text': norm_text(src_nodes[0]) if src_nodes else '', 'sample_html': sample_outer(src_nodes[0]) if src_nodes else ''}
            entry['server'][s] = {'count': len(srv_nodes), 'sample_text': norm_text(srv_nodes[0]) if srv_nodes else '', 'sample_html': sample_outer(srv_nodes[0]) if srv_nodes else ''}

        for t in c.get('text_matches', []):
            src_found = [el for el in soup_src.find_all(string=True) if t in el]
            srv_found = [el for el in soup_srv.find_all(string=True) if t in el]
            entry.setdefault('text_matches', {})[t] = {'source_count': len(src_found), 'server_count': len(srv_found)}

        def capture_closest(selector_list, soup, max_items=3):
            items = []
            for sel in selector_list:
                nodes = soup.select(sel)
                for n in nodes[:max_items]:
                    items.append({'selector': sel, 'text': norm_text(n), 'html_snippet': sample_outer(n)})
            return items

        entry['source']['samples'] = capture_closest(sels, soup_src)
        entry['server']['samples'] = capture_closest(sels, soup_srv)
        report['sections'][c['id']] = entry

    # additional diagnostics
    report['meta']['counts'] = {'splide__slide_source': len(soup_src.select('.splide__slide')), 'splide__slide_server': len(soup_srv.select('.splide__slide'))}
    report['meta']['promo_class_in_server'] = bool(soup_srv.find(class_='promo-apple-watch'))

    OUT.write_text(json.dumps(report, indent=2, ensure_ascii=False), encoding='utf-8')
    print('WROTE', OUT)


if __name__ == '__main__':
    main()
#!/usr/bin/env python3
"""
DOM diff helper: parse `scripts/index.html` and `/tmp/server.html`, extract key sections and write a JSON report.
Produces: /workspaces/HTML-refactoring/dom_diff_report.json
"""
import sys, json, subprocess
from pathlib import Path

SRC = Path('/workspaces/HTML-refactoring/scripts/index.html')
SRV = Path('/tmp/server.html')
OUT = Path('/workspaces/HTML-refactoring/dom_diff_report.json')

# Ensure BeautifulSoup is available
try:
    from bs4 import BeautifulSoup
except Exception:
    subprocess.check_call([sys.executable, '-m', 'pip', 'install', '--quiet', 'beautifulsoup4'])
    from bs4 import BeautifulSoup

# Try lxml parser; fall back to built-in
parser = 'lxml'
try:
    import lxml  # noqa: F401
except Exception:
    parser = 'html.parser'

if not SRC.exists():
    print('Source file not found:', SRC)
    sys.exit(2)
if not SRV.exists():
    print('Server file not found:', SRV)
    sys.exit(3)

src_html = SRC.read_text(encoding='utf-8', errors='ignore')
srv_html = SRV.read_text(encoding='utf-8', errors='ignore')

soup_src = BeautifulSoup(src_html, parser)
soup_srv = BeautifulSoup(srv_html, parser)

def norm_text(el):
    if el is None:
        return ''
    return ' '.join(el.get_text(separator=' ', strip=True).split())

def sample_outer(el, max_len=1000):
    if el is None:
        return ''
    h = el.prettify()
    return h[:max_len]

report = {'meta': {'source': str(SRC), 'server': str(SRV), 'parser': parser}, 'sections': {}}

checks = [
    {'id': 'hero_slider', 'label': 'Hero slider', 'selectors': ['.elementor-widget-reycore-basic-slider', '.rey-bSlider', '.splide', '[data-slider-carousel-id]']},
    {'id': 'hero_slides', 'label': 'Hero slides', 'selectors': ['.splide__slide', 'a.splide__slide', 'li.splide__slide']},
    {'id': 'promo_apple_watch', 'label': 'Promo: Apple watch', 'selectors': ['.promo-apple-watch', '.elementor-column .elementor-heading-title'], 'text_matches': ['Apple watch 8 series', 'The future of health is on your wrist']},
    {'id': 'product_grids', 'label': 'Product grids', 'selectors': ['.reyEl-productGrid', '.woocommerce .products', '.products', '.pg-skin-proto', '.elementor-widget-reycore-product-grid']},
    {'id': 'product_titles', 'label': 'Product titles', 'selectors': ['.woocommerce-loop-product__title', 'h2.woocommerce-loop-product__title', 'h2 a.woocommerce-LoopProduct-link']},
    {'id': 'newsletter_form', 'label': 'Newsletter form', 'selectors': ['form#mc4wp-form-1', 'form.mc4wp-form', 'form[data-name]'], 'text_matches': ['JOIN', 'newsletter']},
    {'id': 'headings', 'label': 'Elementor headings', 'selectors': ['.elementor-heading-title', '.elementor-widget-heading .elementor-heading-title']},
]

for c in checks:
    entry = {'label': c['label'], 'source': {}, 'server': {}}
    sels = c.get('selectors', [])
    for s in sels:
        try:
            src_nodes = soup_src.select(s)
        except Exception:
            src_nodes = []
        try:
            srv_nodes = soup_srv.select(s)
        except Exception:
            srv_nodes = []
        entry['source'][s] = {'count': len(src_nodes), 'sample_text': norm_text(src_nodes[0]) if src_nodes else '', 'sample_html': sample_outer(src_nodes[0]) if src_nodes else ''}
        entry['server'][s] = {'count': len(srv_nodes), 'sample_text': norm_text(srv_nodes[0]) if srv_nodes else '', 'sample_html': sample_outer(srv_nodes[0]) if srv_nodes else ''}
    for t in c.get('text_matches', []):
        src_found = [el for el in soup_src.find_all(string=True) if t in el]
        srv_found = [el for el in soup_srv.find_all(string=True) if t in el]
        entry.setdefault('text_matches', {})[t] = {'source_count': len(src_found), 'server_count': len(srv_found)}
    # capture first few samples from broader selectors for context
    def capture_closest(selector_list, soup, max_items=3):
        items = []
        for sel in selector_list:
            try:
                nodes = soup.select(sel)
            except Exception:
                nodes = []
            for n in nodes[:max_items]:
                items.append({'selector': sel, 'text': norm_text(n), 'html_snippet': sample_outer(n)})
        return items
    entry['source']['samples'] = capture_closest(sels, soup_src)
    entry['server']['samples'] = capture_closest(sels, soup_srv)
    report['sections'][c['id']] = entry

# additional diagnostics
report['meta']['counts'] = {'splide__slide_source': len(soup_src.select('.splide__slide')), 'splide__slide_server': len(soup_srv.select('.splide__slide'))}
report['meta']['promo_class_in_server'] = bool(soup_srv.find(class_='promo-apple-watch'))

OUT.write_text(json.dumps(report, indent=2, ensure_ascii=False), encoding='utf-8')
print('WROTE', OUT)
