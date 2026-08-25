#!/usr/bin/env node
/**
 * publish-blog.js — Paisape Blog Publisher
 * ──────────────────────────────────────────
 * Usage:
 *   node publish-blog.js <slug> "<title>" "<description>"
 *
 * Example:
 *   node publish-blog.js dpdpa-guide "DPDPA Guide for Fintechs" "Complete guide to India's data privacy law"
 *
 * What it does:
 *   1. Git add + commit + push to GitHub
 *   2. Posts immediately to LinkedIn (paisapefin)
 *   3. Posts immediately to Facebook (Paisape)
 */

const { execSync } = require('child_process');
const fs = require('fs');
const path = require('path');

// ── Load .env ──────────────────────────────────────────────────────────────────
function loadEnv() {
  const envPath = path.join(__dirname, '.env');
  if (!fs.existsSync(envPath)) {
    console.error('❌ .env file not found. Create it with your Buffer credentials.');
    process.exit(1);
  }
  fs.readFileSync(envPath, 'utf8').split('\n').forEach(line => {
    const [key, ...rest] = line.split('=');
    if (key && !key.startsWith('#') && rest.length) {
      process.env[key.trim()] = rest.join('=').trim();
    }
  });
}
loadEnv();

const TOKEN      = process.env.BUFFER_TOKEN;
const LINKEDIN   = process.env.BUFFER_LINKEDIN_ID;
const FACEBOOK   = process.env.BUFFER_FACEBOOK_ID;
const SITE_URL   = process.env.SITE_URL || 'https://paisape.in';

// ── Args ───────────────────────────────────────────────────────────────────────
const [,, slug, title, description] = process.argv;
if (!slug || !title) {
  console.log('Usage: node publish-blog.js <slug> "<title>" "<description>"');
  console.log('Example: node publish-blog.js dpdpa-guide "DPDPA Guide" "India data privacy law explained"');
  process.exit(1);
}

const blogUrl = `${SITE_URL}/blog/${slug}`;

// ── Social post text ───────────────────────────────────────────────────────────
const linkedinText = `📰 New on Paisape Engineering Blog

${title}

${description || ''}

Read the full article 👇
${blogUrl}

#Fintech #India #Payments #Engineering #Paisape`;

const facebookText = `🆕 New Blog Post: ${title}

${description || ''}

${blogUrl}

#Fintech #India #Payments`;

// ── Buffer GraphQL post ────────────────────────────────────────────────────────
async function postToBuffer(channelId, text, channelName) {
  // Facebook requires metadata.facebook.type
  const facebookMetadata = channelId === process.env.BUFFER_FACEBOOK_ID
    ? ', metadata: { facebook: { type: post } }'
    : '';

  const mutation = `
    mutation {
      createPost(input: {
        channelId: "${channelId}",
        text: ${JSON.stringify(text)},
        schedulingType: automatic,
        mode: shareNow
        ${facebookMetadata}
      }) {
        ... on PostActionSuccess {
          post { id status }
        }
        ... on MutationError {
          message
        }
      }
    }
  `;

  const variables = {};

  const res = await fetch('https://api.buffer.com', {
    method: 'POST',
    headers: {
      'Authorization': `Bearer ${TOKEN}`,
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ query: mutation, variables })
  });

  const data = await res.json();

  if (data.errors) {
    console.error(`❌ ${channelName} error:`, data.errors[0].message);
    return false;
  }

  const result = data.data?.createPost;
  if (result?.post) {
    console.log(`✅ ${channelName} posted! Post ID: ${result.post.id}`);
    return true;
  } else if (result?.message) {
    console.error(`❌ ${channelName} failed:`, result.message);
    return false;
  }
}

// ── Git push ───────────────────────────────────────────────────────────────────
function gitPush() {
  try {
    console.log('📦 Pushing to GitHub...');
    execSync('git add .', { stdio: 'inherit' });
    execSync(`git commit -m "Publish blog: ${title}"`, { stdio: 'inherit' });
    execSync('git push origin main', { stdio: 'inherit' });
    console.log('✅ Pushed to GitHub');
    return true;
  } catch (e) {
    console.error('❌ Git push failed:', e.message);
    return false;
  }
}

// ── Main ───────────────────────────────────────────────────────────────────────
(async () => {
  console.log(`\n🚀 Publishing: "${title}"`);
  console.log(`   URL: ${blogUrl}\n`);

  // 1. Push to GitHub
  gitPush();

  // 2. Post to social media
  console.log('\n📣 Posting to social media...\n');
  await postToBuffer(LINKEDIN, linkedinText, 'LinkedIn (paisapefin)');
  await postToBuffer(FACEBOOK, facebookText, 'Facebook (Paisape)');

  console.log('\n✅ All done!');
  console.log(`   Blog live at: ${blogUrl}`);
})();
