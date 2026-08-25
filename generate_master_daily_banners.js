const { createCanvas, loadImage } = require('@napi-rs/canvas');
const fs = require('fs');
const path = require('path');

const samplePath = 'C:/Users/bmrjj/.gemini/antigravity/brain/b63b13e8-8b69-40d2-becb-d8b2d6fec214/.user_uploaded/media_1787657500383.png';
const outputDir = path.join(__dirname, 'assets', 'banners');

if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

const bannersConfig = [
  {
    day: 'monday',
    dayName: 'Monday',
    tag: 'MONDAY • WABA & MESSAGING SOLUTION',
    headline: 'WhatsApp Business API & Messaging',
    subhead: 'Automated payment alerts, broadcast marketing & AI chatbots on WhatsApp.',
    features: ['Official WABA API', 'Payment Alerts', 'DLT SMS Gateway', 'AI Chatbots']
  },
  {
    day: 'tuesday',
    dayName: 'Tuesday',
    tag: 'TUESDAY • PAYMENT GATEWAY & ACQUIRING',
    headline: 'High-Speed Enterprise Payment Gateway',
    subhead: 'Accept Net Banking, Credit/Debit Cards, Wallets & UPI with 99.99% uptime.',
    features: ['Instant Settlements', 'PCI-DSS v4.0', 'Card Tokenization', '100+ Pay Modes']
  },
  {
    day: 'wednesday',
    dayName: 'Wednesday',
    tag: 'WEDNESDAY • PAYMENT ORCHESTRATION',
    headline: 'Multi-PG Payment Orchestration Switch',
    subhead: 'Smart routing engine with instant failover, lower MDR & unified analytics.',
    features: ['Multi-PG Switch', 'Smart Failover', 'Lower MDR Costs', 'Unified Analytics']
  },
  {
    day: 'thursday',
    dayName: 'Thursday',
    tag: 'THURSDAY • FINTECH SAAS MODULES',
    headline: 'Automated Multi-Sheet Reconciliation SaaS',
    subhead: 'Reconcile up to 4 spreadsheets with dynamic field mapping & zero formula errors.',
    features: ['4-Sheet Multi-Join', 'Dynamic Mapping', 'String Protection', 'Audit Reports']
  },
  {
    day: 'friday',
    dayName: 'Friday',
    tag: 'FRIDAY • IN-STORE MERCHANT HARDWARE',
    headline: 'Dynamic QR Code & Audio Soundbox',
    subhead: 'Instant in-store voice alerts with loud dual-SIM Soundboxes and UPI QR standees.',
    features: ['Dynamic UPI QR', 'Voice Alerts', 'Dual-SIM Cellular', 'Zero MDR Acceptance']
  },
  {
    day: 'saturday',
    dayName: 'Saturday',
    tag: 'SATURDAY • AEPS & BBPS BANKING',
    headline: 'AEPS Rural Banking & BBPS Bill Payments',
    subhead: 'Empower retail merchants with Aadhaar cash withdrawal, micro-ATM and BBPS payments.',
    features: ['Aadhaar eKYC', 'Cash Withdrawal', 'Micro-ATM', 'BBPS Utility Pay']
  },
  {
    day: 'sunday',
    dayName: 'Sunday',
    tag: 'SUNDAY • DIGITAL PAYMENTS SUITE',
    headline: 'Building the Future of Digital Payments',
    subhead: 'End-to-end payment issuing, acquiring, orchestration, reconciliation & SaaS software.',
    features: ['Payment Gateway', 'Soundbox & POS', 'WABA & SMS', 'Multi-Sheet Recon']
  }
];

async function generateAllBanners() {
  const masterImg = await loadImage(samplePath);
  const width = 900;
  const height = 300;

  for (const config of bannersConfig) {
    const canvas = createCanvas(width, height);
    const ctx = canvas.getContext('2d');

    // 1. Draw Master Template Backdrop (scaled to 900x300)
    ctx.drawImage(masterImg, 0, 0, masterImg.width, masterImg.height, 0, -45, width, 380);

    // 2. Draw Soft Translucent Panel on Left to guarantee crisp text readability
    const panelGrad = ctx.createLinearGradient(0, 0, 580, 0);
    panelGrad.addColorStop(0, 'rgba(255, 255, 255, 0.96)');
    panelGrad.addColorStop(0.75, 'rgba(255, 255, 255, 0.90)');
    panelGrad.addColorStop(1, 'rgba(255, 255, 255, 0.0)');
    ctx.fillStyle = panelGrad;
    ctx.fillRect(0, 0, 600, height);

    // 3. Top Accent Line
    ctx.fillStyle = '#06B6D4';
    ctx.fillRect(40, 0, 140, 4);

    // 4. PAISAPE Logo text / branding
    ctx.fillStyle = '#0891B2';
    ctx.font = 'bold 28px sans-serif';
    ctx.fillText('PAISAPe', 40, 44);

    ctx.fillStyle = '#0891B2';
    ctx.font = 'bold 10.5px sans-serif';
    ctx.fillText('Payments. Everytime. Everywhere.', 40, 62);

    // 5. Category Day Badge Tag
    ctx.font = 'bold 10px sans-serif';
    const tagWidth = ctx.measureText(config.tag).width + 20;
    ctx.fillStyle = '#06B6D4';
    ctx.beginPath();
    ctx.roundRect(40, 75, tagWidth, 22, 11);
    ctx.fill();

    ctx.fillStyle = '#FFFFFF';
    ctx.fillText(config.tag, 50, 90);

    // 6. Main Headline (Dark Slate #0F172A)
    ctx.fillStyle = '#0F172A';
    ctx.font = 'bold 21px sans-serif';
    ctx.fillText(config.headline, 40, 132);

    // 7. Subtitle / Description (#334155)
    ctx.fillStyle = '#334155';
    ctx.font = '13px sans-serif';
    ctx.fillText(config.subhead, 40, 156);

    // 8. 4 Feature Pills Row
    const pillY = 184;
    let pillX = 40;

    config.features.forEach((feat) => {
      ctx.font = 'bold 11px sans-serif';
      const textWidth = ctx.measureText(feat).width;
      const pillWidth = textWidth + 26;

      // Pill Background
      ctx.fillStyle = '#FFFFFF';
      ctx.shadowColor = 'rgba(15, 23, 42, 0.08)';
      ctx.shadowBlur = 4;
      ctx.beginPath();
      ctx.roundRect(pillX, pillY, pillWidth, 28, 8);
      ctx.fill();
      ctx.shadowColor = 'transparent';

      // Pill Border
      ctx.strokeStyle = '#06B6D4';
      ctx.lineWidth = 1;
      ctx.stroke();

      // Bullet Dot
      ctx.fillStyle = '#06B6D4';
      ctx.beginPath();
      ctx.arc(pillX + 11, pillY + 14, 3.5, 0, Math.PI * 2);
      ctx.fill();

      // Text
      ctx.fillStyle = '#0F172A';
      ctx.fillText(feat, pillX + 20, pillY + 18);

      pillX += pillWidth + 8;
    });

    // 9. Footer Website Link & Slogan
    ctx.fillStyle = '#0891B2';
    ctx.font = 'bold 11.5px sans-serif';
    ctx.fillText('www.paisape.in', 40, 275);

    ctx.fillStyle = '#475569';
    ctx.font = '11px sans-serif';
    ctx.fillText('|   Powering Businesses. Connecting Lives.', 140, 275);

    // Save PNG File
    const buffer = canvas.toBuffer('image/png');
    const filePath = path.join(outputDir, `${config.day}.png`);
    fs.writeFileSync(filePath, buffer);

    if (config.day === 'sunday') {
      fs.writeFileSync(path.join(outputDir, 'default.png'), buffer);
    }

    console.log(`Generated ${config.day}.png - Size: ${Math.round(buffer.length / 1024)} KB (900x300px)`);
  }
}

generateAllBanners().catch(console.error);
