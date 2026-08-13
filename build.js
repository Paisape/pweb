const fs = require('fs');
const path = require('path');

const blogDir = path.join(__dirname, 'blog');
const rssPath = path.join(__dirname, 'rss.xml');
const sitemapPath = path.join(__dirname, 'sitemap.xml');

const folders = fs.readdirSync(blogDir, { withFileTypes: true })
  .filter(d => d.isDirectory() && d.name !== '.')
  .map(d => d.name);

const posts = [];

folders.forEach(folder => {
  const indexPath = path.join(blogDir, folder, 'index.php');
  if (!fs.existsSync(indexPath)) return;
  
  const content = fs.readFileSync(indexPath, 'utf8');
  
  let title = folder;
  const titleMatch = content.match(/<title>(.*?)<\/title>/i);
  if (titleMatch) {
    title = titleMatch[1].replace(' — Paisape Blog', '').trim();
  }
  
  let desc = '';
  const descMatch = content.match(/<meta\s+name="description"\s+content="([^"]+)"/i);
  if (descMatch) {
    desc = descMatch[1];
  }
  
  const stat = fs.statSync(indexPath);
  const pubDate = new Date(stat.mtime).toUTCString();
  const url = 'https://paisape.in/blog/' + folder;
  
  posts.push({ title, desc, url, pubDate, folder, date: stat.mtime });
});

// Generate RSS
let rss = '<?xml version="1.0" encoding="UTF-8" ?>\n';
rss += '<rss version="2.0">\n';
rss += '  <channel>\n';
rss += '    <title>Paisape Blog</title>\n';
rss += '    <link>https://paisape.in/blog</link>\n';
rss += '    <description>Latest updates, engineering notes, and news from Paisape.</description>\n';

posts.sort((a, b) => b.date - a.date).forEach(post => {
  rss += '    <item>\n';
  rss += '      <title>' + post.title.replace(/&/g, '&amp;') + '</title>\n';
  rss += '      <link>' + post.url + '</link>\n';
  rss += '      <description>' + post.desc.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;') + '</description>\n';
  rss += '      <pubDate>' + post.pubDate + '</pubDate>\n';
  rss += '    </item>\n';
});

rss += '  </channel>\n';
rss += '</rss>\n';

fs.writeFileSync(rssPath, rss, 'utf8');
console.log('? Generated rss.xml');

// Update Sitemap
if (fs.existsSync(sitemapPath)) {
  let sitemap = fs.readFileSync(sitemapPath, 'utf8');
  // Remove old blog post entries
  sitemap = sitemap.replace(/<url>\s*<loc>https:\/\/paisape\.in\/blog\/[^<]+<\/loc>[\s\S]*?<\/url>/g, '').trim();
  sitemap = sitemap.replace(/<\/urlset>/, '').trim();
  
  let newUrls = '';
  posts.forEach(post => {
    const dateStr = post.date.toISOString().split('T')[0];
    newUrls += '\n  <url>\n    <loc>' + post.url + '</loc>\n    <lastmod>' + dateStr + '</lastmod>\n    <changefreq>monthly</changefreq>\n    <priority>0.8</priority>\n  </url>';
  });
  
  sitemap += newUrls + '\n</urlset>\n';
  fs.writeFileSync(sitemapPath, sitemap, 'utf8');
  console.log('? Updated sitemap.xml');
}
