const { createCanvas, loadImage } = require('@napi-rs/canvas');
const fs = require('fs');
const path = require('path');

const brainDir = 'C:/Users/bmrjj/.gemini/antigravity/brain/b63b13e8-8b69-40d2-becb-d8b2d6fec214';
const userUploadedDir = path.join(brainDir, '.user_uploaded');
const outputDir = path.join(__dirname, 'assets', 'banners');

if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

function findFile(pattern) {
  // Search brainDir
  if (fs.existsSync(brainDir)) {
    const files = fs.readdirSync(brainDir).filter(f => f.includes(pattern));
    if (files.length > 0) return path.join(brainDir, files[0]);
  }
  // Search userUploadedDir
  if (fs.existsSync(userUploadedDir)) {
    const files = fs.readdirSync(userUploadedDir).filter(f => f.includes(pattern));
    if (files.length > 0) return path.join(userUploadedDir, files[0]);
  }
  return null;
}

const map = [
  { day: 'monday', pattern: 'waba_email_banner' },
  { day: 'tuesday', pattern: 'pg_email_banner' },
  { day: 'wednesday', pattern: 'orchestration_email_banner' },
  { day: 'thursday', pattern: 'recon_email_banner' },
  { day: 'friday', pattern: 'soundbox_email_banner' },
  { day: 'saturday', pattern: 'aeps_email_banner' },
  { day: 'sunday', pattern: 'media_1787657500383' }
];

async function processAll() {
  const width = 900;
  const height = 300;

  for (const item of map) {
    const srcFile = findFile(item.pattern);
    if (!srcFile) {
      console.error(`Missing file for ${item.day} with pattern ${item.pattern}`);
      continue;
    }

    const img = await loadImage(srcFile);
    const canvas = createCanvas(width, height);
    const ctx = canvas.getContext('2d');

    // Draw image to 900x300
    ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, width, height);

    const buffer = canvas.toBuffer('image/png');
    const destPath = path.join(outputDir, `${item.day}.png`);
    fs.writeFileSync(destPath, buffer);

    if (item.day === 'sunday') {
      fs.writeFileSync(path.join(outputDir, 'default.png'), buffer);
    }

    console.log(`Processed ${item.day}.png - Size: ${Math.round(buffer.length / 1024)} KB (${width}x${height}px)`);
  }
}

processAll().catch(console.error);
