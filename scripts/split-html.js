// split-html.js
const fs = require("fs");

const html = fs.readFileSync("index.html", "utf8");

// Match header, section, footer, and big div wrappers
const regex = /<(header|section|footer|div)[^>]*>[\s\S]*?<\/\1>/gi;
const matches = html.match(regex);

if (!matches) {
  console.error("No matches found.");
  process.exit(1);
}

matches.forEach((block, i) => {
  const filename = `chunk-${i + 1}.html`;
  fs.writeFileSync(filename, block);
  console.log(`Saved ${filename}`);
});
