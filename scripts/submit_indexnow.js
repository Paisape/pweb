const https = require('https');
const fs = require('fs');
const path = require('path');

const sitemapPath = path.join(__dirname, '..', 'sitemap.xml');
const sitemap = fs.readFileSync(sitemapPath, 'utf8');

const key = 'c89a42f61e7845d09b3c582e01df7689';
const host = 'paisape.in';
const keyLocation = `https://${host}/${key}.txt`;

// Extract all URLs
const locRegex = /<loc>(https:\/\/paisape\.in[^<]*)<\/loc>/g;
const urlList = [];
let match;
while ((match = locRegex.exec(sitemap)) !== null) {
  urlList.push(match[1]);
}

console.log(`Found ${urlList.length} URLs in sitemap.xml to submit to IndexNow (Bing & AI Engines).`);

const payload = JSON.stringify({
  host: host,
  key: key,
  keyLocation: keyLocation,
  urlList: urlList
});

const req = https.request({
  hostname: 'api.indexnow.org',
  port: 443,
  path: '/indexnow',
  method: 'POST',
  headers: {
    'Content-Type': 'application/json; charset=utf-8',
    'Content-Length': Buffer.byteLength(payload)
  }
}, res => {
  let responseData = '';
  res.on('data', chunk => responseData += chunk);
  res.on('end', () => {
    console.log(`IndexNow Response: HTTP ${res.statusCode} ${res.statusMessage}`);
    if (res.statusCode === 200 || res.statusCode === 202) {
      console.log('Successfully submitted all URLs to Bing IndexNow!');
    } else {
      console.log('Response body:', responseData);
    }
  });
});

req.on('error', err => {
  console.error('IndexNow Request Error:', err.message);
});

req.write(payload);
req.end();
