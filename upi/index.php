<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/upi">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Enterprise UPI Stack � Paisape</title>
<meta name="description" content="Deploy a high-performance UPI infrastructure for your enterprise. Support UPI Intent, collect requests, and dynamic QR codes with automated reconciliation " />
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
    // Disable right-click
    document.addEventListener('contextmenu', event => event.preventDefault());
    
    // Disable copy, cut, paste
    document.addEventListener('copy', event => event.preventDefault());
    document.addEventListener('cut', event => event.preventDefault());
    document.addEventListener('paste', event => event.preventDefault());
    
    // Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U (Inspect Element & View Source)
    document.onkeydown = function(e) {
      if(e.keyCode == 123) { return false; }
      if(e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74)) { return false; }
      if(e.ctrlKey && e.keyCode == 85) { return false; }
    };
  </script>

  <meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:title" content="Enterprise UPI Stack — Paisape" />
  <meta property="og:description" content="Build enterprise-grade UPI payment infrastructure with Paisape. Collect, disburse and reconcile UPI payments at scale." />
  <meta property="og:type" content="website" />
</head>

<body class="bg-white text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main">

<section class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-36 pb-14 md:pt-44 md:pb-20">
  <div class="pointer-events-none absolute right-0 top-24 hidden h-[300px] w-[46%] rounded-3xl bg-gradient-to-br from-brand/15 via-brand/5 to-transparent blur-2xl lg:block"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.06] blur-3xl"></div>

  <div class="relative mx-auto max-w-site px-5">
    <p data-reveal class="mb-4 text-[11px] font-bold uppercase tracking-[0.18em] text-brand">Payments &bull; UPI</p>

    <h1 class="max-w-3xl font-display text-[36px] font-extrabold leading-[1.14] tracking-tight text-ink sm:text-[44px]">
      <span data-reveal data-delay="80">Enterprise</span> <span data-reveal data-delay="180" class="text-brand">UPI Stack</span>
    </h1>

    <p data-reveal data-delay="300" class="mt-5 max-w-2xl text-[15.5px] leading-relaxed text-body">Deploy a high-performance UPI infrastructure for your enterprise. Support UPI Intent, collect requests, and dynamic QR codes with automated reconciliation and multi-bank routing.</p>

    <div data-reveal data-delay="420" class="mt-8 flex flex-wrap items-center gap-3">
      <a href="/contact" class="group inline-flex items-center gap-2 rounded-full bg-brand px-6 py-3 text-[14.5px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
        Talk to Sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="#features" class="inline-flex items-center gap-2 rounded-full border border-brand/25 bg-brandLt px-6 py-3 text-[14.5px] font-semibold text-brand transition hover:-translate-y-1 hover:border-brand">
        Read Documentation
      </a>
    </div>

    <div class="mt-8 flex flex-wrap gap-2.5">
        <span data-reveal data-delay="560" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Multi-Bank Routing</span>
        <span data-reveal data-delay="620" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>UPI Intent &amp; Collect</span>
        <span data-reveal data-delay="680" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Automated Refunds</span>
        <span data-reveal data-delay="740" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>AutoPay Mandates</span>
        <span data-reveal data-delay="800" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Virtual Accounts</span>
    </div>
  </div>
</section>

<section id="features" class="bg-white py-20 md:py-24">
  <div class="mx-auto max-w-site px-5">
    <p data-reveal class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
      <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Why Paisape
    </p>
    <h2 data-reveal data-delay="80" class="text-center font-display text-[27px] font-extrabold tracking-tight text-ink sm:text-[34px]">
      Built for real <span class="text-brand">operations.</span>
    </h2>

    <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M4 10h16M5 10V21M19 10V21M9 10V21M15 10V21M12 3l9 5H3z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Multi-Bank Routing</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">AI-driven dynamic routing across multiple sponsor banks ensures your payments never fail due to downtime.</p>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">UPI Intent &amp; Collect</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Offer seamless checkout experiences with UPI Intent flows for mobile apps and UPI Collect requests for web.</p>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Automated Refunds</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Process instant and automated refunds directly to the customer source bank account without manual intervention.</p>
      </article>
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="9" r="6"/><path d="m8.5 14-1.5 8 5-3 5 3-1.5-8"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">AutoPay Mandates</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Set up recurring payments easily with UPI AutoPay for subscriptions, EMI collections, and mutual fund SIPs.</p>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 8V5a2 2 0 0 1 2-2h3M16 3h3a2 2 0 0 1 2 2v3M21 16v3a2 2 0 0 1-2 2h-3M8 21H5a2 2 0 0 1-2-2v-3"/><path d="M8 12h8"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Virtual Accounts</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Create unlimited virtual payment addresses (VPAs) for your merchants to easily track incoming payments.</p>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6.5V12c0 5 3.4 8.2 8 9.5 4.6-1.3 8-4.5 8-9.5V6.5z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Fraud Management</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Real-time transaction monitoring and velocity checks to prevent fraudulent transactions before they settle.</p>
      </article>
    </div>
  </div>
</section>

<section class="bg-gradient-to-b from-[#F5FAFE] to-white py-20 md:py-24">
  <div class="mx-auto max-w-site px-5">
    <p data-reveal class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
      <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Specifications
    </p>
    <h2 data-reveal data-delay="80" class="text-center font-display text-[27px] font-extrabold tracking-tight text-ink sm:text-[34px]">
      What's <span class="text-brand">included.</span>
    </h2>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
      <li data-reveal data-delay="0" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Multi-Bank Routing</li>
      <li data-reveal data-delay="70" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>UPI Intent &amp; Collect</li>
      <li data-reveal data-delay="140" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Automated Refunds</li>
      <li data-reveal data-delay="0" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>AutoPay Mandates</li>
      <li data-reveal data-delay="70" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Virtual Accounts</li>
    </ul>
  </div>
</section>

<section class="bg-white py-12" aria-label="Other Paisape products">
  <p data-reveal class="mb-6 px-5 text-center text-[10.5px] font-bold uppercase tracking-[0.22em] text-brand/80">
    Explore the rest of the stack
  </p>
  <div class="marquee">
    <div class="track animate-marquee-l gap-3 pr-3">
      <div class="flex shrink-0 gap-3 pr-3" data-mq-group>
        <a href="/neobanking" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Neobanking Solution</a>
        <a href="/qr-code-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Dynamic QR Code Solution</a>
        <a href="/soundbox" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Instant Audio Soundbox</a>
        <a href="/bbps" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Bharat Bill Payment System (BBPS)</a>
        <a href="/aeps" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Aadhaar Enabled Payment System (AEPS)</a>
        <a href="/onboarding-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Digital Merchant Onboarding</a>
        <a href="/reconciliation-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Automated Reconciliation</a>
        <a href="/switching-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Intelligent Payment Switch</a>
        <a href="/pos-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">POS Solution</a>
      </div>
      <div class="flex shrink-0 gap-3 pr-3" data-mq-clone aria-hidden="true"></div>
    </div>
  </div>
</section>

<section class="relative overflow-hidden bg-deep py-20 md:py-24">
  <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-brand/20 blur-3xl"></div>
  <div class="pointer-events-none absolute -bottom-24 -left-24 h-80 w-80 rounded-full bg-mint/10 blur-3xl"></div>

  <div class="relative mx-auto max-w-3xl px-5 text-center">
    <h2 data-reveal class="font-display text-[30px] font-extrabold leading-tight tracking-tight text-white sm:text-[40px]">Ready to run UPI at enterprise scale?</h2>
    <p data-reveal data-delay="120" class="mx-auto mt-5 max-w-xl text-[15px] leading-relaxed text-slate-400">Talk to our team about sponsor banks, throughput targets and your go-live timeline.</p>
    <a href="/contact" data-reveal data-delay="240" class="group mt-9 inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
      Talk to sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
  </div>
</section>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
</body>
</html>





