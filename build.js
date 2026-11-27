const fs = require('fs');
const path = require('path');

const root = __dirname;
const dist = path.join(root, 'dist');

console.log('--- Starting Cloudflare Pages Build ---');

// 1. Clean and create dist directory
if (fs.existsSync(dist)) {
  fs.rmSync(dist, { recursive: true, force: true });
}
fs.mkdirSync(dist, { recursive: true });

// 2. Helper to get top blogs HTML for homepage
function getTopBlogsHtml(count = 3) {
  const blogsDataPath = path.join(root, 'includes', 'blogs_data.php');
  if (!fs.existsSync(blogsDataPath)) return '';
  const raw = fs.readFileSync(blogsDataPath, 'utf8');
  
  const blocks = raw.split(/\[\s*'slug'\s*=>/g).slice(1);
  const blogs = [];
  
  for (const block of blocks) {
    if (blogs.length >= count) break;
    const slug = block.match(/^\s*'([^']+)'/)?.[1] || block.match(/'slug'\s*=>\s*'([^']+)'/)?.[1] || '';
    const urlM = block.match(/'url'\s*=>\s*'([^']+)'/);
    const titleM = block.match(/'title'\s*=>\s*'([^']+)'/);
    const imgM = block.match(/'image'\s*=>\s*'([^']+)'/);
    const catM = block.match(/'category'\s*=>\s*'([^']+)'/);
    const readM = block.match(/'read_time'\s*=>\s*'([^']+)'/);
    const dateM = block.match(/'date'\s*=>\s*'([^']+)'/);
    const descM = block.match(/'description'\s*=>\s*["']([\s\S]*?)["']\s*(\]|,)/);

    if (slug && titleM) {
      blogs.push({
        url: urlM ? urlM[1] : `/blog/${slug}`,
        title: titleM[1],
        image: imgM ? imgM[1] : '/assets/paisape-og-banner.jpg',
        category: catM ? catM[1] : 'Engineering & Architecture',
        read_time: readM ? readM[1] : '10 min read',
        date: dateM ? dateM[1] : '04 Nov 2026',
        description: descM ? descM[1] : ''
      });
    }
  }

  return blogs.map(b => `
    <article class="card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
      <a href="${b.url}" class="block overflow-hidden h-44 bg-slate-100">
        <img src="${b.image}" alt="${b.title}" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
      </a>
      <div class="flex flex-1 flex-col p-6">
        <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
          <span class="text-brand">${b.category}</span>
          <span class="text-body/50">${b.read_time}</span>
        </div>
        <a href="${b.url}">
          <h3 class="mt-3 font-display text-[15px] font-bold leading-snug text-ink hover:text-brand">${b.title}</h3>
        </a>
        <p class="mt-2 text-[12.5px] leading-relaxed text-body line-clamp-3">${b.description}</p>
        <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
          <span class="text-[11px] text-body/70">${b.date}</span>
          <a href="${b.url}" class="inline-flex items-center gap-1.5 text-[12px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
        </div>
      </div>
    </article>
  `).join('\n');
}

// 3. Parser function to process PHP includes into static HTML
function renderPhpToHtml(content, filePath) {
  const headerPath = path.join(root, 'includes', 'header.php');
  const footerPath = path.join(root, 'includes', 'footer.php');

  let headerHtml = fs.existsSync(headerPath) ? fs.readFileSync(headerPath, 'utf8') : '';
  let footerHtml = fs.existsSync(footerPath) ? fs.readFileSync(footerPath, 'utf8') : '';

  // Clean PHP tags from header & footer
  headerHtml = headerHtml.replace(/<\?=([\s\S]*?)\?>/g, '').replace(/<\?php[\s\S]*?\?>/g, '');
  footerHtml = footerHtml.replace(/<\?=([\s\S]*?)\?>/g, '').replace(/<\?php[\s\S]*?\?>/g, '');

  // Handle 301 redirects
  const redirectMatch = content.match(/header\s*\(\s*["']Location:\s*([^"']+)["']/i);
  if (redirectMatch) {
    const target = redirectMatch[1];
    return `<!DOCTYPE html><html><head><meta http-equiv="refresh" content="0;url=${target}"><link rel="canonical" href="${target}"></head><body><script>window.location.href="${target}";</script></body></html>`;
  }

  // Replace Header & Footer includes
  content = content.replace(/<\?php\s*(include_once|include|require_once|require)\s+\$_SERVER\['DOCUMENT_ROOT'\]\s*\.\s*['"]\/includes\/header\.php['"]\s*;\s*\?>/gi, headerHtml);
  content = content.replace(/<\?php\s*(include_once|include|require_once|require)\s+\$_SERVER\['DOCUMENT_ROOT'\]\s*\.\s*['"]\/includes\/footer\.php['"]\s*;\s*\?>/gi, footerHtml);
  content = content.replace(/(include_once|include|require_once|require)\s+\$_SERVER\['DOCUMENT_ROOT'\]\s*\.\s*['"]\/includes\/header\.php['"]\s*;/gi, headerHtml);
  content = content.replace(/(include_once|include|require_once|require)\s+\$_SERVER\['DOCUMENT_ROOT'\]\s*\.\s*['"]\/includes\/footer\.php['"]\s*;/gi, footerHtml);

  // Replace Homepage blogs loop
  content = content.replace(/<\?php[\s\S]*?blogs_data\.php[\s\S]*?endforeach;\s*\?>/i, getTopBlogsHtml(3));

  // Strip core/db or auth checks
  content = content.replace(/<\?php\s*require_once[\s\S]*?\?>/gi, '');

  // Strip remaining standalone PHP tags
  content = content.replace(/<\?=([\s\S]*?)\?>/g, '');
  content = content.replace(/<\?php[\s\S]*?\?>/g, '');

  return content;
}

// 4. Copy static directories
const staticDirs = ['assets', 'css', 'js'];
staticDirs.forEach(dir => {
  const src = path.join(root, dir);
  const dest = path.join(dist, dir);
  if (fs.existsSync(src)) {
    fs.cpSync(src, dest, { recursive: true });
    console.log(`Copied static directory: ${dir}/`);
  }
});

// 5. Copy root static files (robots.txt, sitemap.xml, llms.txt, etc.)
const staticFiles = [
  'robots.txt',
  'sitemap.xml',
  'llms.txt',
  'llms-full.txt',
  'c89a42f61e7845d09b3c582e01df7689.txt',
  'favicon.ico',
  '_redirects',
  '_headers'
];
staticFiles.forEach(file => {
  const src = path.join(root, file);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, path.join(dist, file));
    console.log(`Copied root file: ${file}`);
  }
});

// 6. Walk and compile all PHP / HTML pages
function walkAndCompile(dir) {
  let count = 0;
  const list = fs.readdirSync(dir);
  for (const item of list) {
    if (['node_modules', '.git', 'dist', 'admin', 'includes', 'core', 'scripts', '.agents'].includes(item)) continue;
    const fullPath = path.join(dir, item);
    const stat = fs.statSync(fullPath);
    if (stat.isDirectory()) {
      count += walkAndCompile(fullPath);
    } else if (item.endsWith('.php') || item.endsWith('.html')) {
      const relPath = path.relative(root, fullPath);
      let outRelPath = relPath.replace(/\.php$/, '.html');
      const outPath = path.join(dist, outRelPath);
      fs.mkdirSync(path.dirname(outPath), { recursive: true });

      const raw = fs.readFileSync(fullPath, 'utf8');
      const compiled = renderPhpToHtml(raw, fullPath);
      fs.writeFileSync(outPath, compiled, 'utf8');
      count++;
    }
  }
  return count;
}

const pageCount = walkAndCompile(root);
console.log(`Compiled ${pageCount} pages into dist/ successfully!`);
console.log('--- Cloudflare Pages Build Complete ---');
