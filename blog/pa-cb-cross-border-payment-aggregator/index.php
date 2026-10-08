<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MKEB2EGGLG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MKEB2EGGLG');
</script>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/blog/pa-cb-cross-border-payment-aggregator">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PA-CB (Payment Aggregator Cross-Border): Inward &amp; Outward API Switch Architecture — Paisape Blog</title>
  <!-- Last Updated: 30 September 2026 11:30 AM IST -->
  <meta name="description" content="A technical breakdown of RBI's PA-CB (Payment Aggregator Cross-Border) framework — AD Category-1 bank escrow integration, LRS remittance reporting, real-time FX rate locks, and domestic merchant settlement." />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="PA-CB (Payment Aggregator Cross-Border): Inward &amp; Outward API Switch Architecture" />
  <meta property="og:description" content="Engineering guide to RBI PA-CB regulations — cross-border payment switch design, AD-Cat 1 escrow compliance, LRS limits, and FX rate locking mechanics." />
  <meta property="og:image" content="https://paisape.in/assets/blog/blog_pacb_cross_border_handwritten.jpg" />
  <meta property="og:url" content="https://paisape.in/blog/pa-cb-cross-border-payment-aggregator" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="PA-CB (Payment Aggregator Cross-Border): Inward &amp; Outward API Switch Architecture" />
  <meta name="twitter:description" content="A technical breakdown of RBI's PA-CB (Payment Aggregator Cross-Border) framework — AD Category-1 bank escrow integration, LRS remittance reporting, real-time FX rate locks, and domestic merchant settlement." />
  <meta name="twitter:image" content="https://paisape.in/assets/blog/blog_pacb_cross_border_handwritten.jpg" />

  <link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/js/tailwind.config.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <style>
    body {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
  </style>
  <script>
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('copy', event => event.preventDefault());
    document.addEventListener('cut', event => event.preventDefault());
    document.addEventListener('paste', event => event.preventDefault());
    document.onkeydown = function(e) {
      if(e.keyCode == 123) { return false; }
      if(e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74)) { return false; }
      if(e.ctrlKey && e.keyCode == 85) { return false; }
    };
  </script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TechArticle",
  "headline": "PA-CB (Payment Aggregator Cross-Border): Inward & Outward API Switch Architecture",
  "description": "A technical breakdown of RBI's PA-CB (Payment Aggregator Cross-Border) framework — AD Category-1 bank escrow integration, LRS remittance reporting, real-time FX rate locks, and domestic merchant settlement.",
  "image": ["https://paisape.in/assets/blog/blog_pacb_cross_border_handwritten.jpg"],
  "datePublished": "30 September 2026",
  "author": {
    "@type": "Organization",
    "name": "Paisape Engineering",
    "url": "https://paisape.in"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Paisape Techfin Private Limited",
    "logo": {
      "@type": "ImageObject",
      "url": "https://paisape.in/assets/paisape-logo.png"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://paisape.in/blog/pa-cb-cross-border-payment-aggregator"
  }
}
</script>
</head>

<body class="bg-[#F8FCFF] text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main" class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-28 pb-20">
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>

  <article class="mx-auto max-w-4xl px-5 relative z-10">
    
    <!-- Article Header -->
    <header class="mb-8 text-left">
      <div class="flex items-center gap-3 mb-4">
        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-brand/10 text-brand">Cross-Border &bull; Forex</span>
        <span class="text-xs text-slate-400 font-medium">10 min read &bull; 30 September 2026</span>
      </div>
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink tracking-tight leading-tight mb-4">
        PA-CB (Payment Aggregator Cross-Border): Inward &amp; Outward API Switch Architecture
      </h1>
      <p class="text-lg text-body leading-relaxed font-normal">
        An engineering deep-dive into RBI's PA-CB regulatory framework — managing Authorised Dealer Category-1 bank escrow accounts, Liberalised Remittance Scheme (LRS) reporting, real-time FX rate locks, and domestic merchant settlement.
      </p>
    </header>

    <!-- Handwritten Blueprint Diagram Card -->
    <div class="my-8 overflow-hidden rounded-2xl border border-slate-200 bg-white p-2 shadow-md">
      <img src="/assets/blog/blog_pacb_cross_border_handwritten.jpg" alt="PA-CB (Payment Aggregator Cross-Border) API Switch Architecture Technical Whiteboard Diagram" class="w-full h-auto rounded-xl" />
    </div>

    <!-- Language Selector Bar -->
    <div class="my-8 flex items-center justify-between rounded-2xl bg-white p-3 border border-slate-200/80 shadow-sm">
      <div class="flex items-center gap-2">
        <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
        <span class="text-xs font-bold uppercase tracking-wider text-ink">Read Article In / भाषा चुनें:</span>
      </div>
      <div class="flex items-center gap-1 bg-slate-100 rounded-xl p-1 border border-slate-200">
        <button id="btn-lang-en" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm">English</button>
        <button id="btn-lang-hi" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition">हिन्दी (Hindi)</button>
      </div>
    </div>

    <!-- Prose Content -->
    <div class="prose prose-slate max-w-none space-y-6 text-[15.5px] leading-relaxed text-body">
      <!-- English Content -->
      <div id="dpdpa-en" class="space-y-8">
        <h2>1. Regulatory Landscape of Cross-Border Payments in India</h2>
        <p>Cross-border payments have historically suffered from multi-day delays, high foreign exchange spreads, and fragmented compliance frameworks. To regulate cross-border e-commerce transactions, the Reserve Bank of India (RBI) introduced mandatory licensing for <strong>Payment Aggregators – Cross Border (PA-CB)</strong> covering three authorization categories: Inward Only (PA-CB-I), Outward Only (PA-CB-O), and Both.</p>
        <p>Under the PA-CB Master Directions, all cross-border funds must pass through an <strong>Authorised Dealer Category-1 (AD Cat-1) Bank Escrow Account</strong>, enforcing anti-money laundering (AML) checks, OFAC sanctions screening, and FEMA compliance.</p>

        <h2>2. Technical Architecture of a PA-CB Switch</h2>
        <p>As detailed in the hand-drawn technical whiteboard blueprint above, a production-grade PA-CB processing switch executes across five stages:</p>

        <ol>
          <li><strong>International Payer &amp; PG Ingestion:</strong> Ingests foreign currency payment requests (USD, EUR, GBP) via global card schemes or international wallets.</li>
          <li><strong>PA-CB Escrow Account Handling:</strong> Holds funds in a designated AD Cat-1 escrow account, enforcing strict separation from proprietary corporate funds.</li>
          <li><strong>AD Category-1 Bank Switch &amp; FX Engine:</strong> Converts foreign currency into INR using real-time Treasury FX locks, generating Form A2 / e-FIRC remittance reports.</li>
          <li><strong>LRS &amp; TCS Compliance Engine:</strong> Verifies individual annual remittance limits under the Liberalised Remittance Scheme ($250,000/year cap) and calculates Tax Collected at Source (TCS).</li>
          <li><strong>Domestic Merchant Settlement:</strong> Settles INR net funds into the Indian exporter's bank account via NEFT/RTGS/IMPS within T+1 days.</li>
        </ol>

        <h2>3. Inward vs. Outward Remittance Limits</h2>
        <div class="my-4 overflow-x-auto">
          <table class="w-full text-left text-sm border-collapse border border-slate-200">
            <thead>
              <tr class="bg-slate-100 font-bold text-ink">
                <th class="p-3 border border-slate-200">Transaction Type</th>
                <th class="p-3 border border-slate-200">Max Per-Transaction Limit</th>
                <th class="p-3 border border-slate-200">Compliance Requirement</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Inward Cross-Border (PA-CB-I)</td>
                <td class="p-3 border border-slate-200 text-brand font-bold">₹25,00,000 (~$30,000)</td>
                <td class="p-3 border border-slate-200">e-FIRC generation + Exporter IEC code binding</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Outward Cross-Border (PA-CB-O)</td>
                <td class="p-3 border border-slate-200 text-brand font-bold">₹25,00,000 (~$30,000)</td>
                <td class="p-3 border border-slate-200">LRS $250k cap check + TCS calculation</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">Related Payment Switch Articles</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/multi-bank-reconciliation-engine" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">Multi-Bank Reconciliation Engine &rarr;</span>
              <span class="text-slate-400">Automated 3-way matching and ledger updates.</span>
            </a>
            <a href="/blog/nodal-accounts" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">Nodal &amp; Escrow Account Mechanics &rarr;</span>
              <span class="text-slate-400">RBI regulations for payment aggregator escrows.</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Hindi Content -->
      <div id="dpdpa-hi" class="hidden space-y-8">
        <h2>1. भारत में क्रॉस-बॉर्डर पेमेंट्स का नियामक परिदृश्य</h2>
        <p>भारतीय रिज़र्व बैंक (RBI) ने सीमा पार ई-कॉमर्स लेन-देन को नियंत्रित करने के लिए **Payment Aggregator – Cross Border (PA-CB)** लाइसेंस अनिवार्य किया है।</p>

        <h2>2. PA-CB स्विच का आर्किटेक्चर</h2>
        <p>PA-CB आर्किटेक्चर में सभी अंतरराष्ट्रीय भुगतान **AD Category-1 Bank Escrow** खाते से होकर गुजरते हैं, जहां FX दरें लॉक की जाती हैं और FEMA/LRS अनुपालन सुनिश्चित किया जाता है।</p>

        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">संबंधित लेख</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/multi-bank-reconciliation-engine" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">मल्टी-बैंक रीकंसीलिएशन इंजन &rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </article>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var btnEn = document.getElementById('btn-lang-en');
  var btnHi = document.getElementById('btn-lang-hi');
  var contentEn = document.getElementById('dpdpa-en');
  var contentHi = document.getElementById('dpdpa-hi');

  if (btnEn && btnHi && contentEn && contentHi) {
    btnEn.addEventListener('click', function () {
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      contentEn.classList.remove('hidden');
      contentHi.classList.add('hidden');
    });

    btnHi.addEventListener('click', function () {
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      contentHi.classList.remove('hidden');
      contentEn.classList.add('hidden');
    });
  }
});
</script>
</body>
</html>
