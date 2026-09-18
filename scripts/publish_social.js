/**
 * Paisape Standalone Social Media Publisher
 * Posts blog updates to LinkedIn & Facebook via Buffer API.
 * Usage: node scripts/publish_social.js [optional-blog-slug]
 */

const fs = require('fs');
const path = require('path');

const TOKEN    = process.env.BUFFER_TOKEN;
const LINKEDIN = process.env.BUFFER_LINKEDIN_ID;
const FACEBOOK = process.env.BUFFER_FACEBOOK_ID;
const SITE_URL = 'https://paisape.in';
const GITHUB_RAW = 'https://raw.githubusercontent.com/Paisape/pweb/main';

const rootDir = path.join(__dirname, '..');

console.log('==================================================');
console.log('🤖 PAISAPE STANDALONE SOCIAL PUBLISHER');
console.log('==================================================');

if (!TOKEN) {
  console.log('⚠️ No BUFFER_TOKEN found in environment variables. Skipping social post.');
  process.exit(0);
}

// Determine target blog post
let targetSlug = process.argv[2] || process.env.MANUAL_SLUG || process.env.BLOG_SLUG;
let targetFilePath = '';

if (targetSlug && targetSlug.trim() !== '') {
  targetSlug = targetSlug.trim().replace(/^blog\//, '').replace(/\/index\.php$/, '');
  const candidate = path.join(rootDir, 'blog', targetSlug, 'index.php');
  if (fs.existsSync(candidate)) {
    targetFilePath = candidate;
  }
}

if (!targetFilePath) {
  console.log('ℹ️ Searching repository for the newest blog post...');
  const blogDir = path.join(rootDir, 'blog');
  if (fs.existsSync(blogDir)) {
    const allBlogs = fs.readdirSync(blogDir)
      .filter(f => fs.existsSync(path.join(blogDir, f, 'index.php')))
      .map(f => path.join(blogDir, f, 'index.php'))
      .sort((a, b) => {
        try { return fs.statSync(b).mtimeMs - fs.statSync(a).mtimeMs; } catch(e) { return 0; }
      });

    if (allBlogs.length > 0) {
      targetFilePath = allBlogs[0];
      targetSlug = path.basename(path.dirname(targetFilePath));
    }
  }
}

if (!targetFilePath || !fs.existsSync(targetFilePath)) {
  console.error('❌ No valid blog post found to publish.');
  process.exit(1);
}

console.log(`📌 Target Blog Post Identified: ${targetSlug} (${targetFilePath})`);

// Metadata Parser
function parseMeta(filePath) {
  const c = fs.readFileSync(filePath, 'utf8');

  const ogTitleM = c.match(/meta property="og:title" content="([^"]+)"/i);
  const titleM   = c.match(/<title>([^<]+)<\/title>/i);
  const descM    = c.match(/meta name="description" content="([^"]+)"/i);
  const imgM     = c.match(/og:image[^>]+content="([^"]+)"/i);

  let rawTitle = '';
  if (ogTitleM && ogTitleM[1]) {
    rawTitle = ogTitleM[1].trim();
  } else if (titleM && titleM[1]) {
    rawTitle = titleM[1].replace(/\s+[—\-]\s+Paisape.*$/i, '').trim();
  }

  const title = rawTitle.replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"').replace(/&#39;/g, "'");
  const rawDesc = descM ? descM[1].trim() : '';
  const desc  = rawDesc.replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"').replace(/&#39;/g, "'");

  let image = GITHUB_RAW + '/assets/paisape-og-banner.jpg';
  if (imgM) {
    const imgUrl = imgM[1].trim();
    image = imgUrl.replace(SITE_URL, GITHUB_RAW);
  }

  return { title, desc, image };
}

// Buffer Post Dispatcher
async function postToBuffer(channelId, text, title, desc, blogUrl, imageUrl, isFacebook) {
  if (!channelId || channelId.trim() === '') {
    console.log(`  ⚠️ Missing channel ID for ${isFacebook ? 'Facebook' : 'LinkedIn'}. Skipping.`);
    return;
  }

  console.log(`  📤 Dispatching post to Buffer channel (${isFacebook ? 'Facebook' : 'LinkedIn'})...`);

  // Method 1: Buffer REST API v1
  try {
    const params = new URLSearchParams();
    params.append('access_token', TOKEN);
    params.append('profile_ids[]', channelId);
    params.append('text', text);
    params.append('now', 'true');
    params.append('media[link]', blogUrl);
    params.append('media[title]', title);
    params.append('media[description]', desc);
    params.append('media[picture]', imageUrl);

    const restRes = await fetch('https://api.bufferapp.com/1/updates/create.json', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: params.toString()
    });

    const restData = await restRes.json();
    if (restData.success) {
      console.log(`  ✅ Successfully published via Buffer REST API v1!`);
      return;
    } else {
      console.log(`  ℹ️ Buffer REST v1 note:`, JSON.stringify(restData));
    }
  } catch(e) {
    console.log(`  ℹ️ REST API v1 note: ${e.message}`);
  }

  // Method 2: Buffer GraphQL API
  try {
    const la = {
      url: blogUrl,
      title: title,
      description: desc,
      thumbnail: { url: imageUrl }
    };

    const laStr = `{
      url: ${JSON.stringify(la.url)},
      title: ${JSON.stringify(la.title)},
      description: ${JSON.stringify(la.description)},
      thumbnail: { url: ${JSON.stringify(la.thumbnail.url)} }
    }`;

    const metaField = isFacebook
      ? `metadata: { facebook: { type: post, linkAttachment: ${laStr} } }`
      : `metadata: { linkedin: { linkAttachment: ${laStr} } }`;

    const mutation = `
      mutation {
        createPost(input: {
          channelId: ${JSON.stringify(channelId)},
          text: ${JSON.stringify(text)},
          schedulingType: automatic,
          mode: shareNow,
          ${metaField}
        }) {
          ... on PostActionSuccess { post { id status } }
          ... on MutationError { message }
        }
      }
    `;

    const res = await fetch('https://api.buffer.com', {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + TOKEN,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ query: mutation })
    });

    const data = await res.json();
    if (data.errors) {
      console.error('  ❌ Buffer GraphQL API Error:', data.errors[0].message);
      return;
    }
    const result = data.data?.createPost;
    if (result?.post) {
      console.log(`  ✅ Posted via Buffer GraphQL API! ID: ${result.post.id}`);
    } else if (result?.message) {
      console.error('  ❌ Buffer GraphQL API Message:', result.message);
    }
  } catch(err) {
    console.error('  ❌ Buffer GraphQL API Error:', err.message);
  }
}

// Main Execution
(async () => {
  const blogUrl = `${SITE_URL}/blog/${targetSlug}`;
  const { title, desc, image } = parseMeta(targetFilePath);

  console.log(`\n==================================================`);
  console.log(`📝 Processing Blog Post: ${targetSlug}`);
  console.log(`   Title : ${title}`);
  console.log(`   Desc  : ${desc.substring(0, 90)}...`);
  console.log(`   Image : ${image}`);
  console.log(`   URL   : ${blogUrl}`);
  console.log(`==================================================\n`);

  const liText = `📰 New on Paisape Engineering Blog\n\n${title}\n\n${desc}\n\n👉 ${blogUrl}\n\n#Fintech #India #Payments #Engineering #Paisape`;
  const fbText = `🆕 New Blog Post!\n\n${title}\n\n${desc}\n\n${blogUrl}\n\n#Fintech #India #Payments`;

  console.log('🚀 Dispatching to LinkedIn...');
  await postToBuffer(LINKEDIN, liText, title, desc, blogUrl, image, false);

  console.log('\n🚀 Dispatching to Facebook...');
  await postToBuffer(FACEBOOK, fbText, title, desc, blogUrl, image, true);

  console.log('\n🎉 Standalone social publisher finished execution successfully!');
})();
