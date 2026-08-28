<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/blog">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Blog — Paisape</title>
<meta name="description" content="Field notes on routing strategy, UPI mechanics, settlement and reconciliation from the Paisape engineering team." />
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
  <meta property="og:title" content="Engineering Blog — Paisape" />
  <meta property="og:description" content="Deep-dive articles on fintech engineering, payments, DPDPA compliance, UPI, AEPS, KYC and more." />
  <meta property="og:type" content="website" />
</head>

<body class="bg-[#F8FCFF] text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main">

<section class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-36 pb-14 md:pt-44 md:pb-16">
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>

  <div class="relative mx-auto max-w-3xl px-5 text-center">
    <p data-reveal class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand/20 bg-white/70 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand backdrop-blur">
      <span class="relative flex h-2 w-2">
        <span class="absolute inline-flex h-full w-full rounded-full bg-brand animate-ring"></span>
        <span class="relative inline-flex h-2 w-2 rounded-full bg-brand"></span>
      </span>
      New post every Thursday
    </p>
    <h1 class="font-display text-[36px] font-extrabold leading-[1.12] tracking-tight text-ink sm:text-[46px]">
      <span data-reveal data-delay="60" class="block">Field notes from India's</span>
      <span data-reveal data-delay="160" class="block text-brand">payment rails.</span>
    </h1>
    <p data-reveal data-delay="260" class="mx-auto mt-6 max-w-xl text-[15.5px] leading-relaxed text-body">
      Routing strategy, UPI mechanics, settlement math and reconciliation war stories &mdash; written by the engineers who run the switch.
    </p>

    <div data-reveal data-delay="360" class="mx-auto mt-8 flex max-w-md items-center gap-2 rounded-full border border-slate-200 bg-white px-5 py-3 shadow-sm transition focus-within:border-brand focus-within:shadow-lg focus-within:shadow-brand/10">
      <svg class="h-4 w-4 shrink-0 text-body/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
      <label for="search" class="sr-only">Search articles</label>
      <input id="search" type="search" placeholder="Search articles" class="w-full bg-transparent text-[14px] text-ink placeholder:text-slate-400 focus:outline-none">
    </div>
  </div>
</section>

<section class="bg-white pb-4">
  <div class="mx-auto max-w-site px-5">
    <article data-reveal="zoom" class="card-lift overflow-hidden rounded-3xl border border-slate-100 bg-white shadow-[0_30px_70px_-40px_rgba(22,35,59,.35)]">
      <div class="grid lg:grid-cols-[1.05fr_.95fr]">
        <div class="order-2 p-8 sm:p-10 lg:order-1">
          <div class="flex flex-wrap items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="rounded-full bg-brand px-3 py-1 text-white">Featured</span>
            <span class="text-brand">Orchestration</span>
            <span class="text-body/60">12 min read</span>
          </div>
          <h2 class="mt-5 font-display text-[24px] font-extrabold leading-snug tracking-tight text-ink sm:text-[30px]">
            Why your UPI success rate drops at 9 PM &mdash; and what routing can do about it
          </h2>
          <p class="mt-4 max-w-xl text-[14.5px] leading-relaxed text-body">
            Peak-hour declines are rarely a customer problem. We pulled 40 million transactions across eight
            acquirers to show where the failures actually originate, how long each bank takes to recover, and the
            retry window that recovers the most revenue without annoying the payer.
          </p>
          <div class="mt-7 flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brandLt font-display text-[13px] font-bold text-brand">RK</span>
            <div>
              <p class="text-[13px] font-semibold text-ink">Rohit Kulkarni</p>
              <p class="text-[12px] text-body/70">Head of Payments Engineering &middot; 24 July 2026</p>
            </div>
          </div>
          <a href="/blog/upi-success-rate-drops" class="mt-7 inline-flex items-center gap-2 rounded-full bg-brand px-6 py-3 text-[14px] font-semibold text-white shadow-lg shadow-brand/25 transition hover:-translate-y-1 hover:bg-brandDk">
            Read article <span class="arrow">&rarr;</span>
          </a>
        </div>
        <div class="order-1 overflow-hidden bg-gradient-to-br from-[#0D1B2A] to-[#153B5C] lg:order-2">
          <svg class="thumb-art h-full min-h-[240px] w-full" viewBox="0 0 400 320" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Illustration of a payment routing fan-out">
            <defs><linearGradient id="fg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0E9BEE"/><stop offset="100%" stop-color="#2ECFB4"/></linearGradient></defs>
            <g stroke="url(#fg)" stroke-width="1.6" fill="none" opacity=".75">
              <path d="M60 160 C150 160 150 70 320 70"/><path d="M60 160 C150 160 150 120 320 120"/>
              <path d="M60 160 C150 160 150 200 320 200"/><path d="M60 160 C150 160 150 250 320 250"/>
            </g>
            <circle cx="60" cy="160" r="13" fill="#0E9BEE"/>
            <circle cx="60" cy="160" r="24" fill="none" stroke="#0E9BEE" stroke-width="1.2" opacity=".45"/>
            <g fill="#2ECFB4"><circle cx="320" cy="70" r="7"/><circle cx="320" cy="120" r="7"/><circle cx="320" cy="200" r="7"/><circle cx="320" cy="250" r="7" opacity=".35"/></g>
            <g font-family="JetBrains Mono, monospace" font-size="9" fill="#7FC7F0">
              <text x="336" y="74">PSP A</text><text x="336" y="124">PSP B</text>
              <text x="336" y="204">PSP C</text><text x="336" y="254" opacity=".5">DOWN</text><text x="24" y="196">payer</text>
            </g>
          </svg>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="bg-white py-8" aria-label="Topics we cover">
  <div class="marquee">
    <div class="track animate-marquee-l gap-3 pr-3">
      <div class="flex shrink-0 gap-3 pr-3" data-mq-group>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Smart routing</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; UPI mechanics</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Settlement cycles</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Reconciliation</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; NACH mandates</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Chargebacks</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; RBI compliance</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Tokenisation</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Payout rails</span>
        <span class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2">&rarr; Failover design</span>
      </div>
      <div class="flex shrink-0 gap-3 pr-3" data-mq-clone aria-hidden="true"></div>
    </div>
  </div>
</section>

<section id="articles" class="bg-gradient-to-b from-white via-[#F5FAFE] to-white py-16 md:py-20">
  <div class="mx-auto max-w-site px-5">
    <div class="flex flex-col items-start justify-between gap-5 sm:flex-row sm:items-center">
      <h2 data-reveal="left" class="font-display text-[22px] font-extrabold tracking-tight text-ink sm:text-[26px]">All articles</h2>
      <div data-reveal="right" class="flex flex-wrap gap-2" role="group" aria-label="Filter articles by topic">
        <button class="filter-btn rounded-full border border-slate-200 bg-white px-4 py-2 text-[13px] font-semibold text-ink2" data-filter="all" aria-pressed="true">All</button>
        <button class="filter-btn rounded-full border border-slate-200 bg-white px-4 py-2 text-[13px] font-semibold text-ink2" data-filter="orchestration" aria-pressed="false">Orchestration</button>
        <button class="filter-btn rounded-full border border-slate-200 bg-white px-4 py-2 text-[13px] font-semibold text-ink2" data-filter="upi" aria-pressed="false">UPI</button>
        <button class="filter-btn rounded-full border border-slate-200 bg-white px-4 py-2 text-[13px] font-semibold text-ink2" data-filter="engineering" aria-pressed="false">Engineering</button>
        <button class="filter-btn rounded-full border border-slate-200 bg-white px-4 py-2 text-[13px] font-semibold text-ink2" data-filter="compliance" aria-pressed="false">Compliance</button>
      </div>
    </div>

    <div id="grid" class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Payment Gateway Switch Failover Architecture -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/payment-gateway-failover-architecture" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_failover_architecture.jpg" alt="Payment Gateway Switch Failover System Whiteboard Architecture Diagram" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">Engineering &bull; Routing</span>
            <span class="text-body/50">9 min read</span>
          </div>
          <a href="/blog/payment-gateway-failover-architecture">
            <h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Payment Gateway Switch Failover Architecture: How Intelligent Routing Achieves 99.99% Uptime</h3>
          </a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">
            A complete technical guide to payment gateway failover architecture — sub-second health checks, automated switch rerouting, latency budgets, and 99.99% uptime strategy for Indian fintechs.
          </p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">28 Aug 2026</span>
            <a href="/blog/payment-gateway-failover-architecture" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a>
          </div>
        </div>
      </article>
      <!-- MID & TID Post -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/what-is-mid-and-tid" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_mid_tid.jpg" alt="What is MID and TID in Digital Payments?" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering &bull; payments</span><span class="text-body/50">8 min read</span>
          </div>
          <a href="/blog/what-is-mid-and-tid">
            <h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">What is MID and TID in Digital Payments? Merchant ID &amp; Terminal ID Explained</h3>
          </a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">
            A complete guide to MID and TID in payment processing: definitions, 15-digit vs 8-digit structure, acquiring bank routing, and settlement reconciliation.
          </p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">26 Aug 2026</span>
            <a href="/blog/what-is-mid-and-tid" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a>
          </div>
        </div>
      </article>

      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="upi" data-reveal data-delay="0">
        <a href="/blog/upi-lite-x-offline-payments" class="block overflow-hidden h-48 bg-slate-100"><img src="/assets/blog/blog_upi_lite_x.jpg" alt="UPI Lite X Offline Payments" class="h-full w-full object-cover transition duration-500 hover:scale-105" /></a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]"><span class="text-brand">upi · offline</span><span class="text-body/50">8 min read</span></div>
          <a href="/blog/upi-lite-x-offline-payments"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">UPI Lite X &amp; Offline Payments: Technical Mechanics, On-Device Wallets &amp; NFC Infrastructure</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Engineering guide to NPCI UPI Lite X — offline wallet architecture, Secure Element storage, NFC peer-to-peer data exchange, and batch sync settlement.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4"><span class="text-[12px] text-body/70">25 Aug 2026</span><a href="/blog/upi-lite-x-offline-payments" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a></div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="upi" data-reveal data-delay="0">
        <a href="/blog/credit-line-on-upi" class="block overflow-hidden h-48 bg-slate-100"><img src="/assets/blog/blog_credit_line_upi.jpg" alt="Credit Line on UPI API Architecture" class="h-full w-full object-cover transition duration-500 hover:scale-105" /></a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]"><span class="text-brand">upi · credit</span><span class="text-body/50">9 min read</span></div>
          <a href="/blog/credit-line-on-upi"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Credit Line on UPI: API Architecture &amp; Integration Guide for Indian Fintechs</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Technical and compliance guide to NPCI Credit Line on UPI — pre-approved credit linking, LAA systems, real-time transaction authorization, and MDR rules.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4"><span class="text-[12px] text-body/70">25 Aug 2026</span><a href="/blog/credit-line-on-upi" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a></div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/waba-business-api" class="block overflow-hidden h-48 bg-slate-100"><img src="/assets/blog/blog_waba_api.jpg" alt="WhatsApp Business API WABA Engineering Guide" class="h-full w-full object-cover transition duration-500 hover:scale-105" /></a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]"><span class="text-brand">engineering · whatsapp</span><span class="text-body/50">12 min read</span></div>
          <a href="/blog/waba-business-api"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">WhatsApp Business API (WABA): Complete Engineering Guide for Indian Fintechs</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Architecture, message templates, interactive buttons, webhooks, TRAI compliance, conversation billing, and real fintech use cases for WABA integration.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4"><span class="text-[12px] text-body/70">25 Aug 2026</span><a href="/blog/waba-business-api" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a></div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/aadhaar-ekyc-vs-ckyc-vcip" class="block overflow-hidden h-48 bg-slate-100"><img src="/assets/blog/blog_kyc_comparison.jpg" alt="Aadhaar eKYC vs CKYC vs V-CIP" class="h-full w-full object-cover transition duration-500 hover:scale-105" /></a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]"><span class="text-brand">compliance · kyc</span><span class="text-body/50">10 min read</span></div>
          <a href="/blog/aadhaar-ekyc-vs-ckyc-vcip"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Aadhaar eKYC vs CKYC vs V-CIP: Which KYC Method Should Your Fintech Choose?</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Engineering and compliance guide to India's three KYC methods with cost comparison, decision framework, and waterfall fallback architecture.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4"><span class="text-[12px] text-body/70">23 Aug 2026</span><a href="/blog/aadhaar-ekyc-vs-ckyc-vcip" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read &rarr;</a></div>
        </div>
      </article>

      <!-- DPDPA Post: Building DPDPA-Compliant Consent Engines & 22-Language Notices -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-consent-architecture" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa_consent.jpg" alt="Building DPDPA-Compliant Consent Engines & 22-Language Notices" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">9 min read</span>
          </div>
          <a href="/blog/dpdpa-consent-architecture"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Building DPDPA-Compliant Consent Engines &amp; 22-Language Notices</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">A deep engineering guide to building DPDPA-compliant consent collection UI, Consent Vault databases, and multilingual notice systems.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">19 Aug 2026</span>
            <a href="/blog/dpdpa-consent-architecture" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- DPDPA Post: Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-erasure-vs-pmla" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa_erasure.jpg" alt="Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">9 min read</span>
          </div>
          <a href="/blog/dpdpa-erasure-vs-pmla"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How DPDPA Section 8(7) resolves the conflict between a user's Right to Erasure and mandatory RBI/PMLA retention.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">19 Aug 2026</span>
            <a href="/blog/dpdpa-erasure-vs-pmla" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- DPDPA Post: Securing Data Processors: DPA Requirements for Cloud, SMS & WhatsApp APIs -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-vendor-dpa-apis" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa_vendor.jpg" alt="Securing Data Processors: DPA Requirements for Cloud, SMS & WhatsApp APIs" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min read</span>
          </div>
          <a href="/blog/dpdpa-vendor-dpa-apis"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Securing Data Processors: DPA Requirements for Cloud, SMS &amp; WhatsApp APIs</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How to legally bind cloud hosts, SMS gateways, WhatsApp WABA providers, and bank switch APIs under DPDPA-compliant Data Processing Agreements.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">19 Aug 2026</span>
            <a href="/blog/dpdpa-vendor-dpa-apis" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- DPDPA Post: Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-breach-response" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa_breach.jpg" alt="Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">10 min read</span>
          </div>
          <a href="/blog/dpdpa-breach-response"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">A step-by-step DPDPA incident response SOP for Indian fintechs to detect, assess, and report data breaches to the Data Protection Board within legal timeframes.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">19 Aug 2026</span>
            <a href="/blog/dpdpa-breach-response" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- DPDPA Post: Privacy by Design in Payment Devices: Soundboxes, POS and Cellular Telemetry -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-hardware-privacy" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa_hardware.jpg" alt="Privacy by Design in Payment Devices: Soundboxes, POS and Cellular Telemetry" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min read</span>
          </div>
          <a href="/blog/dpdpa-hardware-privacy"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Privacy by Design in Payment Devices: Soundboxes, POS and Cellular Telemetry</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How DPDPA applies to payment hardware including audio soundboxes, POS terminals, and cellular telemetry with engineering guidelines for privacy-by-design.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">19 Aug 2026</span>
            <a href="/blog/dpdpa-hardware-privacy" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- DPDPA Compliance Guide Post -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/dpdpa-guide" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_dpdpa.jpg" alt="The Complete DPDPA Guide" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min read</span>
          </div>
          <a href="/blog/dpdpa-guide"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">The Complete DPDPA Guide: Data Privacy for Indian Fintechs & Merchants</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">A deep dive into India's Digital Personal Data Protection Act (DPDPA), consent architectures, legal rights, statutory penalties, and compliance checklists.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">18 Aug 2026</span>
            <a href="/blog/dpdpa-guide" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>


      <!-- Neobanking API Architecture Post -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/neobanking-api-architecture" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_neobanking.jpg" alt="Building the Future of Finance" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">6 min read</span>
          </div>
          <a href="/blog/neobanking-api-architecture"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Building the Future of Finance: API-Driven Neobanking Architectures</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Explore how modern fintechs and enterprises launch prepaid cards, digital wallets, and virtual accounts using banking APIs.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">17 Aug 2026</span>
            <a href="/blog/neobanking-api-architecture" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>


<!-- Independence Day Post -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/independence-day-2026" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_independence_day.jpg" alt="Celebrating Financial Independence" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">4 min</span>
          </div>
          <a href="/blog/independence-day-2026"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Celebrating Financial Independence: India's Digital Payment Revolution</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Reflecting on India's incredible journey towards true financial independence through Digital Public Infrastructure.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">15 Aug 2026</span>
            <a href="/blog/independence-day-2026" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- Soundbox Post -->
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="80">
        <a href="/blog/soundbox-retail-revolution" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_soundbox_retail.jpg" alt="The Rise of Soundbox Technology" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">5 min</span>
          </div>
          <a href="/blog/soundbox-retail-revolution"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">The Rise of Soundbox Technology: Why Every Retailer Needs Audio Alerts</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Exploring the psychology and security benefits of audio confirmations in busy retail environments.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">14 Aug 2026</span>
            <a href="/blog/soundbox-retail-revolution" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/textzi-sms-waba-notification-rails" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_textzi_waba.jpg" alt="SMS vs WhatsApp Business API: High-Throughput Payment & OTP Rails" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">10 min</span>
          </div>
          <a href="/blog/textzi-sms-waba-notification-rails"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">SMS vs WhatsApp Business API: High-Throughput Payment &amp; OTP Rails</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Technical comparison of DLT-compliant SMS vs WhatsApp Cloud API infrastructure for payment OTPs and customer alerts.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">11 Aug 2026</span>
            <a href="/blog/textzi-sms-waba-notification-rails" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="80">
        <a href="/blog/aeps-security-update-2026" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_aeps_security.jpg" alt="AePS 2.0 Security Mandates: Biometric L1 Upgrades & 2FA Agent Authentication" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min</span>
          </div>
          <a href="/blog/aeps-security-update-2026"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">AePS 2.0 Security Mandates: Biometric L1 Upgrades & 2FA Agent Authentication</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">NPCI & RBI's latest AePS security directives — mandatory L1 biometric devices, agent 2FA, and real-time fraud checks.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">09 Aug 2026</span>
            <a href="/blog/aeps-security-update-2026" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="80">
        <a href="/blog/soundbox-vs-pos-retail" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_soundbox_pos.jpg" alt="Soundbox vs POS Terminals: Acoustic Verification in High-Velocity Indian Retail" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">10 min</span>
          </div>
          <a href="/blog/soundbox-vs-pos-retail"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Soundbox vs POS Terminals: Acoustic Verification in High-Velocity Indian Retail</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Acoustic instant voice alerts vs traditional card terminals — analyzing network latency, merchant trust, and unit economics.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">07 Aug 2026</span>
            <a href="/blog/soundbox-vs-pos-retail" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="orchestration" data-reveal data-delay="160">
        <a href="/blog/zero-downtime-payment-switch" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_switch_scaling.jpg" alt="Designing Zero-Downtime Payment Switches for 50,000 TPS Flash Sales" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">orchestration</span><span class="text-body/50">11 min</span>
          </div>
          <a href="/blog/zero-downtime-payment-switch"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Designing Zero-Downtime Payment Switches for 50,000 TPS Flash Sales</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How multi-region active-active architectures handle high-concurrency payment spikes, circuit breakers, and idempotency.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">05 Aug 2026</span>
            <a href="/blog/zero-downtime-payment-switch" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="orchestration" data-reveal data-delay="0">
        <a href="/blog/payment-orchestration" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_orchestration.jpg" alt="The Ultimate Guide to Payment Orchestration in India" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">orchestration</span><span class="text-body/50">12 min</span>
          </div>
          <a href="/blog/payment-orchestration"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">The Ultimate Guide to Payment Orchestration in India</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How dynamic routing saves MDR, boosts success rates, and prevents massive revenue leaks during PSP downtimes.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">03 Aug 2026</span>
            <a href="/blog/payment-orchestration" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="80">
        <a href="/blog/aeps-mechanics" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_aeps.jpg" alt="Decoding AEPS: The Aadhaar Enabled Payment System" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">9 min</span>
          </div>
          <a href="/blog/aeps-mechanics"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Decoding AEPS: The Aadhaar Enabled Payment System</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Architecture, challenges, and implementation strategies for rural FinTechs utilizing biometric authentication.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">01 Aug 2026</span>
            <a href="/blog/aeps-mechanics" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="160">
        <a href="/blog/bbps-integration" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_bbps.jpg" alt="BBPS (Bharat Bill Payment System) Integration Guide" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">7 min</span>
          </div>
          <a href="/blog/bbps-integration"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">BBPS (Bharat Bill Payment System) Integration Guide</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How to integrate and earn commissions on utility payments through the centralized BBPS network.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">28 Jul 2026</span>
            <a href="/blog/bbps-integration" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="upi" data-reveal data-delay="0">
        <a href="/blog/upi-autopay" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_upi_autopay.jpg" alt="Mastering UPI Autopay for Recurring Subscriptions" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">upi</span><span class="text-body/50">11 min</span>
          </div>
          <a href="/blog/upi-autopay"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Mastering UPI Autopay for Recurring Subscriptions</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">The technical flow of mandates, pre-debit notifications, and subscription management.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">24 Jul 2026</span>
            <a href="/blog/upi-autopay" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="orchestration" data-reveal data-delay="80">
        <a href="/blog/automated-reconciliation" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_reconciliation.jpg" alt="Automated Reconciliation in Multi-Gateway Setups" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">orchestration</span><span class="text-body/50">14 min</span>
          </div>
          <a href="/blog/automated-reconciliation"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Automated Reconciliation in Multi-Gateway Setups</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Math and strategies for matching T+1 settlements across multiple payment aggregators.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">20 Jul 2026</span>
            <a href="/blog/automated-reconciliation" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="upi" data-reveal data-delay="160">
        <a href="/blog/upi-decline-codes" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_decline_codes.jpg" alt="Reading a UPI Decline Code Without Guessing" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">upi</span><span class="text-body/50">7 min</span>
          </div>
          <a href="/blog/upi-decline-codes"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Reading a UPI Decline Code Without Guessing</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">The 11 most common NPCI/bank decline codes and how to handle them gracefully.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">18 Jul 2026</span>
            <a href="/blog/upi-decline-codes" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="engineering" data-reveal data-delay="0">
        <a href="/blog/failover-design" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_failover.jpg" alt="Designing Failover That Doesn't Double-Charge" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">9 min</span>
          </div>
          <a href="/blog/failover-design"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Designing Failover That Doesn't Double-Charge</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Idempotency keys, settlement windows and the reconciliation checks that make automatic retries safe.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">11 Jul 2026</span>
            <a href="/blog/failover-design" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="80">
        <a href="/blog/nodal-accounts" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_nodal.jpg" alt="Nodal Accounts and Settlement Cycles" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min</span>
          </div>
          <a href="/blog/nodal-accounts"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Nodal Accounts and Settlement Cycles</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">Understanding the RBI guidelines on merchant payouts and money flow.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">08 Jul 2026</span>
            <a href="/blog/nodal-accounts" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="160">
        <a href="/blog/card-tokenisation" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_tokenisation.jpg" alt="Card Tokenisation (CoFT) Explained" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">10 min</span>
          </div>
          <a href="/blog/card-tokenisation"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Card Tokenisation (CoFT) Explained</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">How the RBI mandate changes saved card flows and secured the ecosystem.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">27 Jun 2026</span>
            <a href="/blog/card-tokenisation" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
      <article class="post card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm" data-cat="compliance" data-reveal data-delay="0">
        <a href="/blog/audit-trails" class="block overflow-hidden h-48 bg-slate-100">
          <img src="/assets/blog/blog_audit.jpg" alt="Audit Trails Your Regulator Will Actually Accept" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">compliance</span><span class="text-body/50">8 min</span>
          </div>
          <a href="/blog/audit-trails"><h3 class="mt-3 font-display text-[16px] font-bold leading-snug text-ink hover:text-brand">Audit Trails Your Regulator Will Actually Accept</h3></a>
          <p class="mt-2.5 flex-1 text-[13.5px] leading-relaxed text-body">What to log at each hop, how long to keep it, and the gaps that turn a routine inspection into a long quarter.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[12px] text-body/70">15 Jun 2026</span>
            <a href="/blog/audit-trails" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
    </div>

    <p id="empty" class="mt-14 hidden text-center text-[14px] text-body">
      No articles match that search yet. Try a different word, or clear the filter to see everything.
    </p>

    <div class="mt-12 text-center">
      <button id="loadMore" class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-7 py-3.5 text-[15px] font-semibold text-ink transition hover:-translate-y-1 hover:border-brand hover:text-brand">
        Load older posts
      </button>
    </div>
  </div>
</section>

<section class="bg-white pb-20 md:pb-24">
  <div class="mx-auto max-w-site px-5">
    <div data-reveal="zoom" class="relative overflow-hidden rounded-3xl bg-night px-8 py-14 text-center sm:px-14">
      <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-brand/20 blur-3xl"></div>
      <div class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-mint/10 blur-3xl"></div>
      <div class="relative">
        <p class="text-[11px] font-bold uppercase tracking-[0.24em] text-mint">The Thursday note</p>
        <h2 class="mx-auto mt-4 max-w-lg font-display text-[26px] font-extrabold leading-tight tracking-tight text-white sm:text-[32px]">
          One payments idea, every week.
        </h2>
        <p class="mx-auto mt-4 max-w-md text-[14.5px] leading-relaxed text-slate-400">
          Short, technical, no product pitch. Read by engineering and finance teams at 900+ Indian businesses.
        </p>
        <form id="subscribeForm" class="mx-auto mt-8 flex max-w-md flex-col gap-3 sm:flex-row" onsubmit="handleSubscribe(event)">
          <label for="nl" class="sr-only">Email address</label>
          <input id="nl" name="email" type="email" required placeholder="you@company.com" class="w-full rounded-full border border-white/15 bg-white/5 px-5 py-3.5 text-[14px] text-white placeholder:text-slate-500 focus:border-brand focus:outline-none">
          <button type="submit" id="subBtn" class="shrink-0 rounded-full bg-mint px-7 py-3.5 text-[14px] font-bold text-night transition hover:-translate-y-1 hover:bg-mint/90">Subscribe</button>
        </form>
        <p id="subMsg" class="mt-3 text-sm hidden font-medium"></p>
        <script>
        function handleSubscribe(e) {
          e.preventDefault();
          const input = document.getElementById('nl');
          const btn = document.getElementById('subBtn');
          const msg = document.getElementById('subMsg');
          if(!input.value) return;

          btn.disabled = true;
          btn.innerText = 'Subscribing...';
          
          fetch('/core/subscribe.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'email=' + encodeURIComponent(input.value) + '&source=blog'
          })
          .then(res => res.json())
          .then(data => {
            msg.classList.remove('hidden');
            if(data.status === 'success') {
              msg.className = 'mt-3 text-sm text-emerald-400 font-semibold';
              msg.innerText = data.message;
              input.value = '';
            } else {
              msg.className = 'mt-3 text-sm text-rose-400 font-semibold';
              msg.innerText = data.message;
            }
          })
          .catch(() => {
            msg.classList.remove('hidden');
            msg.className = 'mt-3 text-sm text-rose-400 font-semibold';
            msg.innerText = 'Something went wrong. Please try again.';
          })
          .finally(() => {
            btn.disabled = false;
            btn.innerText = 'Subscribe';
          });
        }
        </script>
      </div>
    </div>
  </div>
</section>

<section class="bg-white pb-10" aria-label="Industries we serve">
  <div class="marquee">
    <div class="track animate-marquee-r gap-8 pr-8">
      <div class="flex shrink-0 gap-8 pr-8" data-mq-group>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Healthcare</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ EdTech</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Travel &amp; Hospitality</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ NBFC &amp; Lending</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ SaaS &amp; Subscriptions</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Logistics</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Insurance</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Real Estate</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Automotive</span>
        <span class="whitespace-nowrap text-[12.5px] font-bold text-brand">+ Food Delivery</span>
      </div>
      <div class="flex shrink-0 gap-8 pr-8" data-mq-clone aria-hidden="true"></div>
    </div>
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









