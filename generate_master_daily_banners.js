const { createCanvas, loadImage } = require('@napi-rs/canvas');
const fs = require('fs');
const path = require('path');

const samplePath = 'C:/Users/bmrjj/.gemini/antigravity/brain/b63b13e8-8b69-40d2-becb-d8b2d6fec214/.user_uploaded/media_1787657500383.png';
const outputDir = path.join(__dirname, 'assets', 'banners');

if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

// 7 Service Banner Configurations (Clean Tags without Day Names)
const bannersConfig = [
  {
    day: 'monday',
    dayName: 'Monday',
    tag: 'WABA & MESSAGING SOLUTION',
    headline: 'WhatsApp Business API & Messaging',
    subhead: 'Automated payment alerts, broadcast marketing & AI chatbots on WhatsApp.',
    features: ['Official WABA API', 'Payment Alerts', 'DLT SMS Gateway', 'AI Chatbots'],
    themeColor: '#059669',
    accentColor: '#10B981',
    bgGrad: ['#ECFDF5', '#D1FAE5', '#A7F3D0'],
    bgType: 'waba'
  },
  {
    day: 'tuesday',
    dayName: 'Tuesday',
    tag: 'PAYMENT GATEWAY & ACQUIRING',
    headline: 'High-Speed Enterprise Payment Gateway',
    subhead: 'Accept Net Banking, Credit/Debit Cards, Wallets & UPI with 99.99% uptime.',
    features: ['Instant Settlements', 'PCI-DSS v4.0', 'Card Tokenization', '100+ Pay Modes'],
    themeColor: '#0284C7',
    accentColor: '#38BDF8',
    bgGrad: ['#F0F9FF', '#E0F2FE', '#BAE6FD'],
    bgType: 'gateway'
  },
  {
    day: 'wednesday',
    dayName: 'Wednesday',
    tag: 'PAYMENT ORCHESTRATION',
    headline: 'Multi-PG Payment Orchestration Switch',
    subhead: 'Smart routing engine with instant failover, lower MDR & unified analytics.',
    features: ['Multi-PG Switch', 'Smart Failover', 'Lower MDR Costs', 'Unified Analytics'],
    themeColor: '#6366F1',
    accentColor: '#818CF8',
    bgGrad: ['#EEF2FF', '#E0E7FF', '#C7D2FE'],
    bgType: 'orchestration'
  },
  {
    day: 'thursday',
    dayName: 'Thursday',
    tag: 'FINTECH SAAS MODULES',
    headline: 'Automated Multi-Sheet Reconciliation SaaS',
    subhead: 'Reconcile up to 4 spreadsheets with dynamic field mapping & zero formula errors.',
    features: ['4-Sheet Multi-Join', 'Dynamic Mapping', 'String Protection', 'Audit Reports'],
    themeColor: '#0F766E',
    accentColor: '#14B8A6',
    bgGrad: ['#F0FDFA', '#CCFBF1', '#99F6E4'],
    bgType: 'reconciliation'
  },
  {
    day: 'friday',
    dayName: 'Friday',
    tag: 'IN-STORE HARDWARE & QR',
    headline: 'Dynamic QR Code & Audio Soundbox',
    subhead: 'Instant in-store voice alerts with loud dual-SIM Soundboxes and UPI QR standees.',
    features: ['Dynamic UPI QR', 'Voice Alerts', 'Dual-SIM Cellular', 'Zero MDR Acceptance'],
    themeColor: '#D97706',
    accentColor: '#F59E0B',
    bgGrad: ['#FFFBEB', '#FEF3C7', '#FDE68A'],
    bgType: 'soundbox'
  },
  {
    day: 'saturday',
    dayName: 'Saturday',
    tag: 'AEPS & BBPS BANKING',
    headline: 'AEPS Rural Banking & BBPS Bill Payments',
    subhead: 'Empower retail merchants with Aadhaar cash withdrawal, micro-ATM and BBPS payments.',
    features: ['Aadhaar eKYC', 'Cash Withdrawal', 'Micro-ATM', 'BBPS Utility Pay'],
    themeColor: '#2563EB',
    accentColor: '#60A5FA',
    bgGrad: ['#EFF6FF', '#DBEAFE', '#BFDBFE'],
    bgType: 'aeps'
  },
  {
    day: 'sunday',
    dayName: 'Sunday',
    tag: 'DIGITAL PAYMENTS SUITE',
    headline: 'Building the Future of Digital Payments',
    subhead: 'End-to-end payment issuing, acquiring, orchestration, reconciliation & SaaS software.',
    features: ['Payment Gateway', 'Soundbox & POS', 'WABA & SMS', 'Multi-Sheet Recon'],
    themeColor: '#0891B2',
    accentColor: '#06B6D4',
    bgGrad: ['#F8FAFC', '#F0F9FF', '#E0F2FE'],
    bgType: 'master'
  }
];

function drawCustomBackgroundGraphics(ctx, type, width, height, themeColor, accentColor) {
  ctx.save();

  if (type === 'waba') {
    ctx.strokeStyle = 'rgba(16, 185, 129, 0.20)';
    ctx.fillStyle = 'rgba(16, 185, 129, 0.08)';
    const bubbles = [
      { x: 680, y: 70, r: 45 },
      { x: 790, y: 130, r: 35 },
      { x: 640, y: 190, r: 28 },
      { x: 750, y: 220, r: 40 }
    ];
    bubbles.forEach(b => {
      ctx.beginPath();
      ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
      ctx.fill();
      ctx.stroke();
    });
    ctx.beginPath();
    ctx.moveTo(550, 300);
    ctx.quadraticCurveTo(700, 150, 900, 240);
    ctx.stroke();
  } 
  else if (type === 'gateway') {
    ctx.strokeStyle = 'rgba(2, 132, 199, 0.20)';
    ctx.lineWidth = 1.5;
    for (let x = 550; x <= 900; x += 50) {
      ctx.beginPath();
      ctx.moveTo(x, 0);
      ctx.lineTo(x + 80, 300);
      ctx.stroke();
    }
    ctx.fillStyle = 'rgba(2, 132, 199, 0.08)';
    ctx.beginPath();
    ctx.roundRect(650, 70, 180, 110, 16);
    ctx.fill();
    ctx.stroke();
  } 
  else if (type === 'orchestration') {
    ctx.strokeStyle = 'rgba(99, 102, 241, 0.25)';
    ctx.fillStyle = 'rgba(99, 102, 241, 0.12)';
    const nodes = [
      { x: 620, y: 80 }, { x: 740, y: 60 }, { x: 840, y: 120 },
      { x: 680, y: 160 }, { x: 780, y: 210 }, { x: 860, y: 240 }
    ];
    ctx.lineWidth = 1.5;
    nodes.forEach((n1, i) => {
      nodes.forEach((n2, j) => {
        if (i < j && Math.hypot(n1.x - n2.x, n1.y - n2.y) < 160) {
          ctx.beginPath();
          ctx.moveTo(n1.x, n1.y);
          ctx.lineTo(n2.x, n2.y);
          ctx.stroke();
        }
      });
    });
    nodes.forEach(n => {
      ctx.beginPath();
      ctx.arc(n.x, n.y, 10, 0, Math.PI * 2);
      ctx.fill();
      ctx.stroke();
    });
  } 
  else if (type === 'reconciliation') {
    ctx.strokeStyle = 'rgba(15, 118, 110, 0.18)';
    ctx.lineWidth = 1.2;
    for (let x = 540; x <= 900; x += 40) {
      ctx.beginPath();
      ctx.moveTo(x, 0);
      ctx.lineTo(x, 300);
      ctx.stroke();
    }
    for (let y = 30; y <= 300; y += 40) {
      ctx.beginPath();
      ctx.moveTo(540, y);
      ctx.lineTo(900, y);
      ctx.stroke();
    }
  } 
  else if (type === 'soundbox') {
    ctx.fillStyle = 'rgba(217, 119, 6, 0.15)';
    const barHeights = [40, 70, 110, 140, 90, 130, 60, 100, 150, 80, 50];
    barHeights.forEach((h, i) => {
      ctx.fillRect(580 + i * 26, 220 - h, 16, h);
    });
  } 
  else if (type === 'aeps') {
    ctx.strokeStyle = 'rgba(37, 99, 235, 0.20)';
    ctx.lineWidth = 2;
    for (let r = 20; r <= 140; r += 20) {
      ctx.beginPath();
      ctx.arc(740, 150, r, 0, Math.PI * 2);
      ctx.stroke();
    }
  }

  ctx.restore();
}

async function generateAllBanners() {
  const masterImg = await loadImage(samplePath);
  const width = 900;
  const height = 300;

  for (const config of bannersConfig) {
    const canvas = createCanvas(width, height);
    const ctx = canvas.getContext('2d');

    if (config.bgType === 'master') {
      ctx.drawImage(masterImg, 0, 0, masterImg.width, masterImg.height, 0, -45, width, 380);
    } else {
      const bgGradient = ctx.createLinearGradient(0, 0, width, height);
      bgGradient.addColorStop(0, config.bgGrad[0]);
      bgGradient.addColorStop(0.5, config.bgGrad[1]);
      bgGradient.addColorStop(1, config.bgGrad[2]);
      ctx.fillStyle = bgGradient;
      ctx.fillRect(0, 0, width, height);

      drawCustomBackgroundGraphics(ctx, config.bgType, width, height, config.themeColor, config.accentColor);

      ctx.save();
      ctx.globalAlpha = 0.35;
      ctx.drawImage(masterImg, 450, 0, 450, 507, 450, -40, 450, 360);
      ctx.restore();
    }

    // 2. Content Backdrop Panel (y >= 105)
    const contentGrad = ctx.createLinearGradient(0, 105, 560, 300);
    contentGrad.addColorStop(0, 'rgba(255, 255, 255, 0.95)');
    contentGrad.addColorStop(0.8, 'rgba(255, 255, 255, 0.90)');
    contentGrad.addColorStop(1, 'rgba(255, 255, 255, 0.0)');
    ctx.fillStyle = contentGrad;
    ctx.fillRect(0, 105, 580, 150);

    // 3. Clean Service Tag (No Day Names)
    ctx.font = 'bold 10px sans-serif';
    const tagWidth = ctx.measureText(config.tag).width + 20;
    ctx.fillStyle = config.themeColor;
    ctx.beginPath();
    ctx.roundRect(40, 114, tagWidth, 22, 11);
    ctx.fill();

    ctx.fillStyle = '#FFFFFF';
    ctx.fillText(config.tag, 50, 129);

    // 4. Main Headline (Dark Slate #0F172A)
    ctx.fillStyle = '#0F172A';
    ctx.font = 'bold 21px sans-serif';
    ctx.fillText(config.headline, 40, 164);

    // 5. Subtitle / Description (#334155)
    ctx.fillStyle = '#334155';
    ctx.font = '13px sans-serif';
    ctx.fillText(config.subhead, 40, 188);

    // 6. 4 Feature Pills Row
    const pillY = 212;
    let pillX = 40;

    config.features.forEach((feat) => {
      ctx.font = 'bold 11px sans-serif';
      const textWidth = ctx.measureText(feat).width;
      const pillWidth = textWidth + 26;

      ctx.fillStyle = '#FFFFFF';
      ctx.shadowColor = 'rgba(15, 23, 42, 0.08)';
      ctx.shadowBlur = 4;
      ctx.beginPath();
      ctx.roundRect(pillX, pillY, pillWidth, 28, 8);
      ctx.fill();
      ctx.shadowColor = 'transparent';

      ctx.strokeStyle = config.themeColor;
      ctx.lineWidth = 1;
      ctx.stroke();

      ctx.fillStyle = config.themeColor;
      ctx.beginPath();
      ctx.arc(pillX + 11, pillY + 14, 3.5, 0, Math.PI * 2);
      ctx.fill();

      ctx.fillStyle = '#0F172A';
      ctx.fillText(feat, pillX + 20, pillY + 18);

      pillX += pillWidth + 8;
    });

    const buffer = canvas.toBuffer('image/png');
    const filePath = path.join(outputDir, `${config.day}.png`);
    fs.writeFileSync(filePath, buffer);

    if (config.day === 'sunday') {
      fs.writeFileSync(path.join(outputDir, 'default.png'), buffer);
    }

    console.log(`Generated ${config.day}.png with clean tag "${config.tag}" - Size: ${Math.round(buffer.length / 1024)} KB (900x300px)`);
  }
}

generateAllBanners().catch(console.error);
