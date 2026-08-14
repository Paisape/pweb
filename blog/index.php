<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
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
</head>

<body class="bg-white text-body antialiased">
<div class="h-1.5 w-full bg-gradient-to-r from-[#FF9933] via-white to-[#138808] z-[100] relative"></div>
<div id="progress" class="fixed top-0 left-0 z-[60] h-[3px] w-full bg-brand transition-transform duration-150"></div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
  <div class="mx-auto max-w-site px-5">
    <div id="navInner" class="mt-4 flex items-center justify-between rounded-2xl border border-transparent px-5 py-3 transition-all duration-500">

      <!-- LOGO -->
      <a href="/" class="flex items-center" aria-label="Paisape home">
        <img src="/assets/logo.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
      </a>

      <nav class="hidden md:flex items-center gap-8 text-[15px] font-medium text-ink2" aria-label="Main">
        <a href="/" class="nav-link hover:text-brand transition-colors">Home</a>

        <!-- Products Mega Menu -->
        <div class="relative mega-parent">
          <button id="megaTrigger" class="nav-link hover:text-brand transition-colors flex items-center gap-1" aria-haspopup="true" aria-expanded="false">
            Products
            <svg class="h-3.5 w-3.5 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="mega-wrap w-[720px] lg:w-[780px]">
            <div class="grid grid-cols-[250px_1fr] overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-[0_40px_80px_-30px_rgba(22,35,59,.35)]">
              <div class="space-y-1 bg-mintLt p-3" role="tablist" aria-label="Product categories">
                <button class="mega-cat" data-cat="issuing" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg><span>Issuing Solution</span></button>
                <button class="mega-cat" data-cat="acquiring" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span>Merchant Acquiring Solution</span></button>
                <button class="mega-cat" data-cat="banking" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M4 10h16M5 10V21M19 10V21M9 10V21M15 10V21M12 3l9 5H3z"/></svg><span>Transaction Banking Solution</span></button>
                <button class="mega-cat" data-cat="value" role="tab" aria-selected="true"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Value Added Solution</span></button>
              </div>
              <div class="p-5">
                <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="issuing">
                  <a class="mega-link" href="/neobanking"><span>Neobanking solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                </div>
                <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="acquiring">
                  <a class="mega-link" href="/qr-code-solution"><span>Dynamic QR Code solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/soundbox"><span>Instant Audio Soundbox</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/pos-solution"><span>POS Solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                </div>
                <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="banking">
                  <a class="mega-link" href="/bbps"><span>Bharat Bill Payment System (BBPS)</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/upi"><span>Enterprise UPI Stack</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/aeps"><span>Aadhaar Enabled Payment System</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                </div>
                <div class="mega-panel show grid-cols-1 gap-3 sm:grid-cols-2" data-panel="value">
                  <a class="mega-link" href="/onboarding-solution"><span>Digital Merchant Onboarding</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/reconciliation-solution"><span>Automated Reconciliation</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/switching-solution"><span>Intelligent Payment Switch</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/sms-solution"><span>SMS Solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                  <a class="mega-link" href="/waba-solution"><span>WABA Solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Free Tools Menu Dropdown -->
        <div class="relative dropdown-parent">
          <button class="nav-link hover:text-brand transition-colors flex items-center gap-1">
            Free Tools
            <svg class="h-3.5 w-3.5 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="dropdown-wrap w-64">
            <div class="rounded-2xl border border-slate-100 bg-white p-2.5 shadow-xl space-y-1">
              <a href="/upi-qr-generator" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                UPI QR Code Generator
              </a>
              <a href="/card-bin-lookup" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg>
                Card BIN Lookup Tool
              </a>
              <a href="/ifsc-finder" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M4 10h16M5 10V21M19 10V21M9 10V21M15 10V21M12 3l9 5H3z"/></svg>
                IFSC Code &amp; Branch Finder
              </a>
              <a href="/hsn-sac-finder" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 7h10M7 12h10M7 17h10"/><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
                HSN &amp; SAC GST Rate Finder
              </a>
              <a href="/gst-invoice-generator" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                Free GST Invoice Generator
              </a>
              <a href="/mcc-finder" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-medium text-ink hover:bg-mist hover:text-brand transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                Merchant Category (MCC) Finder
              </a>
            </div>
          </div>
        </div>

        <a href="/blog" class="nav-link hover:text-brand transition-colors">Blog</a>
        <a href="/contact" class="nav-link hover:text-brand transition-colors">Contact Us</a>
      </nav>

      <div class="flex items-center gap-3">
        <a href="/contact" class="hidden md:inline-flex rounded-full bg-brand px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand/30 transition hover:-translate-y-0.5 hover:bg-brandDk">Talk to Sales</a>
        <button id="burger" aria-label="Open menu" aria-expanded="false" class="md:hidden rounded-xl border border-slate-200 bg-white p-2.5 text-ink">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        </button>
      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobileMenu" class="md:hidden mt-2 hidden max-h-[75vh] overflow-y-auto rounded-2xl border border-slate-100 bg-white p-3 shadow-xl">
      <a href="/" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Home</a>

      <div class="rounded-xl bg-brand/5 p-2 my-1 space-y-1">
        <p class="px-3 py-1 text-[11px] font-bold uppercase tracking-[0.12em] text-brand">Products</p>
        <a href="/neobanking" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Neobanking</a>
        <a href="/qr-code-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Dynamic QR Code</a>
        <a href="/soundbox" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Audio Soundbox</a>
        <a href="/pos-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">POS Solution</a>
        <a href="/bbps" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">BBPS</a>
        <a href="/upi" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Enterprise UPI</a>
        <a href="/aeps" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">AEPS</a>
        <a href="/onboarding-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Merchant Onboarding</a>
        <a href="/reconciliation-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Reconciliation</a>
        <a href="/switching-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Payment Switch</a>
        <a href="/sms-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">SMS Solution</a>
        <a href="/waba-solution" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">WABA Solution</a>
      </div>

      <div class="rounded-xl bg-blue-50/60 p-2 my-1 space-y-1">
        <p class="px-3 py-1 text-[11px] font-bold uppercase tracking-[0.12em] text-brand">Free Tools</p>
        <a href="/upi-qr-generator" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">UPI QR Code Generator</a>
        <a href="/card-bin-lookup" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Card BIN Lookup Tool</a>
        <a href="/ifsc-finder" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">IFSC Code &amp; Branch Finder</a>
        <a href="/hsn-sac-finder" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">HSN &amp; SAC GST Rate Finder</a>
        <a href="/gst-invoice-generator" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Free GST Invoice Generator</a>
        <a href="/mcc-finder" class="block rounded-lg px-3 py-2 text-[13.5px] font-medium text-ink hover:bg-white transition">Merchant Category (MCC) Finder</a>
      </div>

      <a href="/blog" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Blog</a>
      <a href="/contact" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Contact Us</a>
    </div>
  </div>
</header>

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

<footer class="bg-night text-slate-300">
  <div class="mx-auto max-w-site px-5 py-16">
    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-5">

      <div class="sm:col-span-2 md:col-span-1">
        <img src="/assets/logo-white.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
        <p class="mt-5 max-w-xs text-[13px] leading-relaxed text-slate-400">
          Payments. Everytime. Everywhere. Paisape provides comprehensive payment solutions including issuing, acquiring, transaction banking, and payment orchestration.
        </p>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Company</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/about-us" class="transition hover:text-brand">About Us</a></li>
          <li><a href="/blog" class="transition hover:text-brand">Blog</a></li>
          <li><a href="/contact" class="transition hover:text-brand">Contact Us</a></li>
          <li><a href="/contact" class="transition hover:text-brand">Partnership</a></li>
        </ul>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Legal</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/privacy" class="transition hover:text-brand">Privacy Policy</a></li>
          <li><a href="/refund-policy" class="transition hover:text-brand">Refund Policy</a></li>
          <li><a href="/terms-and-conditions" class="transition hover:text-brand">Terms &amp; Conditions</a></li>
        </ul>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Free Tools</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/upi-qr-generator" class="transition hover:text-brand">UPI QR Code Generator</a></li>
          <li><a href="/card-bin-lookup" class="transition hover:text-brand">Card BIN Lookup Tool</a></li>
          <li><a href="/ifsc-finder" class="transition hover:text-brand">IFSC Code &amp; Branch Finder</a></li>
          <li><a href="/hsn-sac-finder" class="transition hover:text-brand">HSN &amp; SAC GST Rate Finder</a></li>
          <li><a href="/gst-invoice-generator" class="transition hover:text-brand">Free GST Invoice Generator</a></li>
          <li><a href="/mcc-finder" class="transition hover:text-brand">Merchant Category (MCC) Finder</a></li>
        </ul>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Products</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/neobanking" class="transition hover:text-brand">Issuing Solution</a></li>
          <li><a href="/qr-code-solution" class="transition hover:text-brand">Merchant Acquiring</a></li>
          <li><a href="/upi" class="transition hover:text-brand">Transaction Banking</a></li>
          <li><a href="/sms-solution" class="transition hover:text-brand">SMS Solution</a></li>
          <li><a href="/waba-solution" class="transition hover:text-brand">WABA Solution</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="border-t border-white/10 bg-night2">
    <div class="mx-auto flex max-w-site flex-col items-center justify-between gap-4 px-5 py-5 text-[12.5px] text-slate-400 sm:flex-row">
      <p>&copy; 2026, Paisape Techfin Private Limited. All rights reserved.</p>
    </div>
  </div>
</footer>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
</body>
</html>








