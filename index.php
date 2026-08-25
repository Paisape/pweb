<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Paisape — Payment Orchestration Platform for India</title>
<meta name="description" content="A unified financial API layer for payments, payouts and reconciliation, with smart dynamic routing built in." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Paisape — Payment Orchestration Platform for India" />
<meta property="og:description" content="A unified financial API layer for payments, payouts and reconciliation, with smart dynamic routing built in." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.jpg" />
<meta property="og:url" content="https://paisape.in/" />
<meta name="twitter:card" content="summary_large_image" />
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
<div class="fixed top-0 left-0 z-[100] w-full px-4 py-2.5 text-center shadow-md border-b border-black/10" style="background-image: url('/assets/hand_painted_tricolor.jpg'); background-size: cover; background-position: center;">
  <div class="flex items-center justify-center gap-4">
    <div class="animate-[bounce_2s_infinite]">
      <svg class="h-6 w-9 rounded-sm shadow-sm drop-shadow-md" viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg">
        <rect width="900" height="200" fill="#FF9933"/>
        <rect y="200" width="900" height="200" fill="#FFFFFF"/>
        <rect y="400" width="900" height="200" fill="#138808"/>
        <circle cx="450" cy="300" r="80" fill="none" stroke="#000080" stroke-width="15"/>
        <circle cx="450" cy="300" r="16" fill="#000080"/>
        <path d="M450 220 L450 380 M370 300 L530 300 M393 243 L507 357 M393 357 L507 243" stroke="#000080" stroke-width="10"/>
      </svg>
    </div>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Happy Independence Day</p>
    <svg class="h-7 w-7 text-[#000080] animate-[spin_15s_linear_infinite]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93M7.76 3.05l8.48 17.9M3.05 7.76l17.9 8.48M3.05 16.24l17.9-8.48M7.76 20.95l8.48-17.9"/></svg>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Jai Hind!</p>
    <div class="animate-[bounce_2s_infinite]">
      <svg class="h-6 w-9 rounded-sm shadow-sm drop-shadow-md" viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg">
        <rect width="900" height="200" fill="#FF9933"/>
        <rect y="200" width="900" height="200" fill="#FFFFFF"/>
        <rect y="400" width="900" height="200" fill="#138808"/>
        <circle cx="450" cy="300" r="80" fill="none" stroke="#000080" stroke-width="15"/>
        <circle cx="450" cy="300" r="16" fill="#000080"/>
        <path d="M450 220 L450 380 M370 300 L530 300 M393 243 L507 357 M393 357 L507 243" stroke="#000080" stroke-width="10"/>
      </svg>
    </div>
  </div>
</div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-[48px] inset-x-0 z-50 transition-all duration-500">
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
              <a href="/excel-reconciliation-tool" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-bold text-brand hover:bg-mist transition">
                <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Multi-Sheet Excel Reconciliation Tool
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

<!-- ================= HERO ================= -->
<section class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-36 pb-16 md:pt-44 md:pb-24">
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>

  <div class="relative mx-auto grid max-w-site items-center gap-14 px-5 lg:grid-cols-[1.05fr_.95fr]">
    <div>
      <p data-reveal class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand/20 bg-white/70 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand backdrop-blur">
        <span class="relative flex h-2 w-2">
          <span class="absolute inline-flex h-full w-full rounded-full bg-brand animate-ring"></span>
          <span class="relative inline-flex h-2 w-2 rounded-full bg-brand"></span>
        </span>
        Live across 8+ gateways
      </p>

      <h1 class="font-display text-[38px] font-extrabold leading-[1.12] tracking-tight text-ink sm:text-[46px] lg:text-[52px]">
        <span data-reveal data-delay="60" class="block">Payment Orchestration Platform</span>
        <span data-reveal data-delay="160" class="block">for Every Payment Rail</span>
        <span data-reveal data-delay="260" class="block text-brand">Intelligent Routing for India.</span>
      </h1>

      <p data-reveal data-delay="360" class="mt-6 max-w-xl text-[15.5px] leading-relaxed text-body">
        A unified financial API layer that streamlines payments, payouts and complex cash flows &mdash; with smart
        dynamic routing, automated retries and real-time reconciliation built in. Stop losing revenue to false
        declines and single points of failure.
      </p>

      <div data-reveal data-delay="460" class="mt-8 flex flex-wrap items-center gap-4">
        <a href="/contact" class="group inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
          Talk to Sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="#developers" class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-7 py-3.5 text-[15px] font-semibold text-ink transition hover:-translate-y-1 hover:border-brand hover:text-brand">
          Read the docs
        </a>
      </div>
    </div>

    <div data-reveal="right" data-delay="240" class="relative">
      <div class="animate-float rounded-3xl border border-white bg-white/80 p-4 shadow-[0_30px_70px_-30px_rgba(22,35,59,.35)] backdrop-blur">
        
        <!-- Tabs Header -->
        <div class="flex border-b border-slate-100 mb-4 pb-2 text-center">
          <button id="tab-stats" class="flex-1 text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 hover:text-ink transition duration-300 outline-none">Live Stats</button>
          <button id="tab-sim" class="flex-1 text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 outline-none transition duration-300">Orchestrator Sim</button>
        </div>

        <!-- Panel 1: Live Stats -->
        <div id="panel-stats" class="hidden space-y-3">
          <div class="grid grid-cols-3 gap-3">
            <div class="rounded-xl border border-slate-100 bg-white px-3.5 py-3">
              <p class="text-[10px] font-medium uppercase tracking-wide text-body/70">Total Volume</p>
              <p class="mt-1 font-display text-[15px] font-bold text-ink" data-count="571351" data-prefix="&#8377;" data-format="in">&#8377;0</p>
            </div>
            <div class="rounded-xl border border-slate-100 bg-white px-3.5 py-3">
              <p class="text-[10px] font-medium uppercase tracking-wide text-body/70">Total Revenue</p>
              <p class="mt-1 font-display text-[15px] font-bold text-ink" data-count="1461.49" data-prefix="&#8377;" data-dec="2">&#8377;0</p>
            </div>
            <div class="rounded-xl border border-slate-100 bg-white px-3.5 py-3">
              <p class="text-[10px] font-medium uppercase tracking-wide text-body/70">Active Merchants</p>
              <p class="mt-1 font-display text-[15px] font-bold text-ink" data-count="20">0</p>
            </div>
          </div>

          <div class="mt-3 grid grid-cols-2 gap-3">
            <div class="donut flex items-center justify-center rounded-xl border border-slate-100 bg-white py-7">
              <svg viewBox="0 0 100 100" class="h-28 w-28 -rotate-90" aria-hidden="true">
                <circle cx="50" cy="50" r="35" fill="none" stroke="#EAF2F9" stroke-width="13"/>
                <circle class="val" cx="50" cy="50" r="35" fill="none" stroke="#1F5FE0" stroke-width="13" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex flex-col justify-center gap-3.5 rounded-xl border border-slate-100 bg-white px-5 py-7">
              <span class="bar h-2 w-[92%] rounded-full bg-[#1F5FE0]" style="transition-delay:.35s"></span>
              <span class="bar h-2 w-[68%] rounded-full bg-brand/70" style="transition-delay:.5s"></span>
              <span class="bar h-2 w-[80%] rounded-full bg-slate-200" style="transition-delay:.65s"></span>
              <span class="bar h-2 w-[46%] rounded-full bg-slate-200" style="transition-delay:.8s"></span>
            </div>
          </div>

          <div class="mt-3 flex items-center justify-between rounded-xl bg-mist px-4 py-2.5">
            <span class="text-[11px] font-semibold text-ink">Routing decision</span>
            <span class="flex items-center gap-1.5 text-[11px] font-semibold text-emerald-600">
              <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span> PSP switched in 42&nbsp;ms
            </span>
          </div>
        </div>

        <!-- Panel 2: Orchestrator Sim -->
        <div id="panel-sim" class="space-y-4 min-h-[220px] flex flex-col justify-between">
          <div class="flex items-center justify-between">
            <span class="text-[12px] font-bold text-ink font-display">Primary Gateway (HDFC)</span>
            <label class="relative inline-flex items-center cursor-pointer select-none">
              <input type="checkbox" id="gw-toggle" class="sr-only peer" checked>
              <div class="w-9 h-5 bg-red-500 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
              <span id="gw-status-text" class="ml-2 text-[10px] font-bold uppercase text-emerald-600">Online</span>
            </label>
          </div>
          
          <!-- Path Simulation Visuals -->
          <div class="relative mt-6 flex items-center justify-between px-2">
            <!-- User Node -->
            <div class="flex flex-col items-center z-10">
              <div class="h-10 w-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-ink font-bold text-[10px] shadow-sm">User</div>
            </div>
            
            <!-- Connection Line 1 -->
            <div class="flex-1 h-[3px] bg-slate-100 mx-1 relative overflow-hidden">
              <div id="sim-line-1" class="absolute top-0 left-0 h-full w-0 bg-brand transition-all duration-[600ms] ease-out"></div>
            </div>
            
            <!-- Orchestrator Switch Node -->
            <div class="flex flex-col items-center z-10">
              <div class="h-10 w-10 rounded-full bg-brandLt border border-brand/20 flex items-center justify-center text-brand font-bold text-[10px] relative shadow-sm">
                Switch
                <span id="sim-spinner" class="absolute -top-1 -right-1 h-3.5 w-3.5 rounded-full border-2 border-brand border-t-transparent animate-spin hidden"></span>
              </div>
            </div>
            
            <!-- Connection Line 2 -->
            <div class="flex-1 h-[3px] bg-slate-100 mx-1 relative overflow-hidden">
              <div id="sim-line-2" class="absolute top-0 left-0 h-full w-0 bg-emerald-500 transition-all duration-[600ms] ease-out"></div>
            </div>
            
            <!-- Destination Node -->
            <div class="flex flex-col items-center z-10 w-16">
              <div id="sim-target" class="h-10 w-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-ink font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300">HDFC</div>
              <span id="sim-target-label" class="text-[8px] font-extrabold uppercase text-slate-400 mt-1.5 tracking-wider">Primary</span>
            </div>
          </div>

          <div class="space-y-3 pt-2">
            <div id="sim-message" class="rounded-xl bg-mist px-4 py-2.5 text-center min-h-[44px] flex items-center justify-center">
              <p class="text-[11px] font-semibold text-ink2 leading-relaxed">Toggle Gateway status above, then click pay to test routing.</p>
            </div>
            <button id="sim-btn" class="w-full rounded-xl bg-brand py-3 text-xs font-bold text-white shadow-lg shadow-brand/20 hover:bg-brandDk active:scale-[0.98] transition">
              Simulate UPI Payment (₹1,000)
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ================= STATS ================= -->
<section class="border-y border-slate-100 bg-white">
  <div class="mx-auto grid max-w-site grid-cols-2 divide-slate-100 px-5 sm:grid-cols-3 lg:grid-cols-5 lg:divide-x">
    <div data-reveal class="px-4 py-8 text-center">
      <p class="font-display text-[28px] font-extrabold text-ink"><span data-count="2400" data-prefix="&#8377;">&#8377;0</span><span class="text-brand">Cr+</span></p>
      <p class="mt-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-body/80">Processed / Month</p>
    </div>
    <div data-reveal data-delay="80" class="px-4 py-8 text-center">
      <p class="font-display text-[28px] font-extrabold text-ink"><span data-count="99.99" data-dec="2">0</span><span class="text-brand">%</span></p>
      <p class="mt-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-body/80">Platform Uptime</p>
    </div>
    <div data-reveal data-delay="160" class="px-4 py-8 text-center">
      <p class="font-display text-[28px] font-extrabold text-ink"><span data-count="8">0</span><span class="text-brand">+</span></p>
      <p class="mt-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-body/80">Payment Gateways</p>
    </div>
    <div data-reveal data-delay="240" class="px-4 py-8 text-center">
      <p class="font-display text-[28px] font-extrabold text-ink">&lt;<span data-count="200">0</span><span class="text-brand">ms</span></p>
      <p class="mt-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-body/80">P95 API Latency</p>
    </div>
    <div data-reveal data-delay="320" class="col-span-2 px-4 py-8 text-center sm:col-span-3 lg:col-span-1">
      <p class="font-display text-[28px] font-extrabold text-ink">SAQ-A</p>
      <p class="mt-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-body/80">PCI DSS Certified</p>
    </div>
  </div>
</section>

<!-- ================= DUAL MARQUEE ================= -->
<section class="space-y-3 bg-white py-6" aria-label="Supported payment methods and industries">
  <!-- row 1: right to left -->
  <div class="marquee">
    <div class="track animate-marquee-l gap-3 pr-3">
      <div class="flex shrink-0 gap-3 pr-3" data-mq-group>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Razorpay</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Cashfree</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>PayU</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Scan &amp; Pay</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>NACH Mandates</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Pay Later</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>PhonePe</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Card EMI</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>Paytm</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>UPI Intent</span>
        <span class="flex items-center gap-1.5 whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-3.5 py-1.5 text-[12px] font-semibold text-ink2"><svg class="h-3 w-3 text-brand" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>IMPS</span>
      </div>
      <div class="flex shrink-0 gap-3 pr-3" data-mq-clone aria-hidden="true"></div>
    </div>
  </div>
  <!-- row 2: left to right -->
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

<!-- ================= SOLUTIONS ================= -->
<section id="solutions" class="bg-gradient-to-b from-white via-[#F5FAFE] to-white pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="mx-auto max-w-site px-5">
    <p data-reveal class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
      <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Our Solutions
    </p>
    <h2 data-reveal data-delay="80" class="mx-auto max-w-3xl text-center font-display text-[27px] font-extrabold leading-tight tracking-tight text-ink sm:text-[34px]">
      Everything you need to move money across India
    </h2>

    <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Payment Collection</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">UPI, cards, wallets &amp; BNPL via a single integration</p>
        <a href="/qr-code-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Disbursement &amp; Payout</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">IMPS, NEFT, RTGS &amp; UPI bulk transfers at scale</p>
        <a href="/upi" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M21 2v6h-6M3 22v-6h6"/><path d="M3.5 9a9 9 0 0 1 14.9-3.4L21 8M21 15a9 9 0 0 1-14.9 3.4L3 16"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Automated Reconciliation</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">AI-powered 2-way &amp; 3-way recon with MIS dashboards</p>
        <a href="/reconciliation-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="240" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M3 21h18M4 21V10l8-6 8 6v11M9 21v-6h6v6"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">TSP for Banks &amp; NBFCs</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Enterprise-grade UPI switch, IMPS &amp; CBS middleware</p>
        <a href="/switching-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Orchestration Engine</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">AI-driven multi-PSP routing for near-zero downtime</p>
        <a href="/switching-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M10 13a5 5 0 0 0 7.5.5l3-3a5 5 0 1 0-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.5-.5l-3 3a5 5 0 0 0 7 7l1.7-1.7"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Unified Gateway</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">One API for all payment methods and banks</p>
        <a href="/upi" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.7 11.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L21 7H6"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Custom Branded Checkout</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">White-label, conversion-optimised checkout flows</p>
        <a href="/pos-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="240" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M3 21h18M7 21V11M12 21V4M17 21v-7"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Analytics &amp; MIS</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Real-time dashboards and automated MIS reports</p>
        <a href="/reconciliation-solution" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
    </div>
  </div>
</section>

<!-- ================= CHALLENGES ================= -->
<section id="challenges" class="bg-white pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="mx-auto max-w-site px-5">
    <h2 data-reveal class="mx-auto max-w-2xl text-center font-display text-[27px] font-extrabold leading-tight tracking-tight text-ink sm:text-[34px]">
      Payment Infrastructure Challenges<br class="hidden sm:block"> &amp; Our Solutions
    </h2>
    <p data-reveal data-delay="80" class="mx-auto mt-4 max-w-xl text-center text-[14px] leading-relaxed text-body">
      Fragmented systems, failed reconciliation and scaling limits cost businesses revenue every day &mdash; here's how we solve for it.
    </p>

    <div class="relative mt-14 grid gap-6 lg:grid-cols-2 lg:gap-14">
      <div class="pointer-events-none absolute inset-y-0 left-1/2 hidden -translate-x-1/2 lg:block">
        <span class="grow-line block h-full w-px bg-slate-200" data-line></span>
        <span class="absolute left-1/2 top-1/2 h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand ring-4 ring-white"></span>
      </div>

      <div>
        <h3 data-reveal="left" class="mb-6 text-center font-display text-[15px] font-bold text-ink">Challenges in the <span class="text-brand">Market</span></h3>
        <div class="space-y-4">
          <div data-reveal="left" data-delay="60" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Fragmented Payment Ecosystems</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">Businesses struggle with multiple payment providers, fragmented systems, and poor transaction visibility.</p>
          </div>
          <div data-reveal="left" data-delay="140" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Payment Failures &amp; Delayed Reconciliation</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">Failed transactions, settlement delays, and manual reconciliation impact revenue and customer experience.</p>
          </div>
          <div data-reveal="left" data-delay="220" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Scalability &amp; Infrastructure Limitations</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">Growing fintechs and enterprises face challenges handling high transaction volumes efficiently.</p>
          </div>
        </div>
      </div>

      <div>
        <h3 data-reveal="right" class="mb-6 text-center font-display text-[15px] font-bold text-ink">Our <span class="text-brand">Solution</span> Approach</h3>
        <div class="space-y-4">
          <div data-reveal="right" data-delay="60" class="card-lift rounded-2xl border border-brand/25 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Unified Payment Orchestration Platform</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">Centralized infrastructure connecting banks, payment aggregators, and enterprise systems seamlessly.</p>
          </div>
          <div data-reveal="right" data-delay="140" class="card-lift rounded-2xl border border-brand/25 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Compliance-First Financial Infrastructure</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">Built-in compliance, audit trails, KYC workflows, and regulatory-ready architecture.</p>
          </div>
          <div data-reveal="right" data-delay="220" class="card-lift rounded-2xl border border-brand/25 bg-white p-6 text-center shadow-sm">
            <h4 class="font-display text-[14.5px] font-bold text-ink">Smart Routing &amp; Real-Time Monitoring</h4>
            <p class="mt-2 text-[13px] leading-relaxed text-body">AI-driven routing, failover systems, and automated reconciliation improve efficiency and success rates.</p>
          </div>
        </div>      </div>
    </div>
  </div>
</section>

<!-- ================= ROI CALCULATOR ================= -->
<section id="roi-calculator" class="bg-slate-50 border-t border-slate-100 pt-12 pb-4">
  <div class="mx-auto max-w-site px-5">
    <p class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
      <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Maximize Revenue
    </p>
    <h2 class="mx-auto max-w-3xl text-center font-display text-[27px] font-extrabold leading-tight tracking-tight text-ink sm:text-[34px]">
      Calculate how much revenue you recover with Paisape
    </h2>
    <p class="mx-auto mt-4 max-w-xl text-center text-[14.5px] leading-relaxed text-body">
      Enter your numbers below to see the commercial impact of intelligent payment switches and dynamic failover rules.
    </p>

    <div class="mt-14 max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200/80 shadow-sm p-6 sm:p-10 grid gap-10 md:grid-cols-[1.1fr_.9fr]">
      <!-- Left side: Sliders -->
      <div class="space-y-8">
        <!-- Volume Slider -->
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <label for="slider-volume" class="text-sm font-bold text-ink">Monthly Volume (INR)</label>
            <span id="label-volume" class="text-sm font-extrabold text-brand bg-brand/5 border border-brand/10 rounded-lg px-2.5 py-1">₹5 Cr</span>
          </div>
          <input type="range" id="slider-volume" min="1" max="100" value="5" class="w-full h-2 bg-slate-100 rounded-lg appearance-none cursor-pointer accent-brand">
          <div class="flex justify-between text-[10px] font-semibold text-slate-400">
            <span>₹1 Cr</span>
            <span>₹50 Cr</span>
            <span>₹100 Cr</span>
          </div>
        </div>

        <!-- Failure Rate Slider -->
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <label for="slider-failure" class="text-sm font-bold text-ink">Current Transaction Dropoff Rate</label>
            <span id="label-failure" class="text-sm font-extrabold text-red-500 bg-red-50 border border-red-100 rounded-lg px-2.5 py-1">15%</span>
          </div>
          <input type="range" id="slider-failure" min="5" max="30" value="15" class="w-full h-2 bg-slate-100 rounded-lg appearance-none cursor-pointer accent-brand">
          <div class="flex justify-between text-[10px] font-semibold text-slate-400">
            <span>5% (Low)</span>
            <span>18%</span>
            <span>30% (High Failure)</span>
          </div>
        </div>
      </div>

      <!-- Right side: Savings summary card -->
      <div class="bg-gradient-to-b from-[#EAF4FD] to-white rounded-2xl border border-white p-6 flex flex-col justify-between shadow-sm">
        <div class="space-y-4">
          <h3 class="text-xs font-bold uppercase tracking-wider text-body/70">Estimated Recovery Impact</h3>
          <div>
            <p class="text-[11px] font-semibold text-slate-500">Additional Successes (Annually)</p>
            <p id="roi-additional-txs" class="text-2xl font-extrabold text-ink font-display mt-0.5">3.6 Lakhs+</p>
          </div>
          <div>
            <p class="text-[11px] font-semibold text-slate-500">Estimated Annual Recovered Revenue</p>
            <p id="roi-recovered-rev" class="text-3xl font-extrabold text-brand font-display mt-0.5">₹36 Lakhs</p>
          </div>
        </div>
        <div class="mt-6 pt-5 border-t border-slate-200/50 flex items-center justify-between">
          <span class="text-[10px] font-semibold text-slate-500 leading-tight">Based on average +6% optimization with smart failover routing rules.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= DEVELOPER EXPERIENCE ================= -->
<section id="developers" class="border-y border-slate-100 bg-gradient-to-b from-[#F3F9FE] to-white pt-8 pb-16 md:pb-20">
  <div class="mx-auto max-w-site px-5">
    <p data-reveal class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">&mdash; Developer Experience &mdash;</p>
    <h2 data-reveal data-delay="80" class="text-center font-display text-[27px] font-extrabold tracking-tight text-ink sm:text-[34px]">
      Sandbox-first. Built for engineering speed.
    </h2>

    <div class="mt-12 grid items-center gap-12 lg:grid-cols-2">
      <div data-reveal="left">
        <p class="max-w-md text-[15px] leading-relaxed text-body">
          Spin up a fully isolated sandbox in seconds, test every routing rule and payment flow against realistic
          mock data, then move to production with a single command &mdash; no re-integration, no downtime.
        </p>

        <ul class="mt-7 space-y-3.5">
          <li data-reveal data-delay="80" class="flex items-center gap-3 text-[14px] font-medium text-ink2">
            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600"><svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2"><path d="m5 12 5 5L20 7"/></svg></span>Instant sandbox provisioning</li>
          <li data-reveal data-delay="150" class="flex items-center gap-3 text-[14px] font-medium text-ink2">
            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600"><svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2"><path d="m5 12 5 5L20 7"/></svg></span>Realistic test data &amp; mock acquirers</li>
          <li data-reveal data-delay="220" class="flex items-center gap-3 text-[14px] font-medium text-ink2">
            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600"><svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2"><path d="m5 12 5 5L20 7"/></svg></span>One-command staging &rarr; production promotion</li>
          <li data-reveal data-delay="290" class="flex items-center gap-3 text-[14px] font-medium text-ink2">
            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600"><svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2"><path d="m5 12 5 5L20 7"/></svg></span>Full webhook &amp; event simulation</li>
        </ul>

        <a href="/contact" data-reveal data-delay="360" class="group mt-8 inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/25 transition hover:-translate-y-1 hover:bg-brandDk">
          Talk to Sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>

      <div data-reveal="right" id="terminal" class="overflow-hidden rounded-2xl bg-[#122234] shadow-[0_30px_70px_-25px_rgba(18,34,52,.6)]">
        <!-- Dev Tabs Header -->
        <div class="flex bg-[#0D1B2A] border-b border-slate-800 px-4 pt-3 gap-2">
          <button id="dev-tab-cli" class="text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 px-3 outline-none transition duration-300">CLI Tool</button>
          <button id="dev-tab-sdk" class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 px-3 hover:text-white transition duration-300 outline-none">SDK Integration</button>
        </div>

        <!-- CLI Panel -->
        <div id="dev-panel-cli" class="space-y-1.5 p-6 font-mono text-[12.5px] leading-relaxed text-slate-300">
          <p class="term-line text-brand" data-t="0">$ <span class="font-bold">paisape sandbox init</span></p>
          <p class="term-line text-emerald-400" data-t="1">&#10003; Sandbox environment created</p>
          <p class="term-line text-emerald-400" data-t="2">&#10003; Test API keys generated</p>
          <p class="term-line text-emerald-400" data-t="3">&#10003; Webhook listener active</p>
          <p class="term-line h-3" data-t="4"></p>
          <p class="term-line text-brand" data-t="5">$ <span class="font-bold">paisape deploy --env production</span></p>
          <p class="term-line text-emerald-400" data-t="6">&#10003; Config validated</p>
          <p class="term-line text-emerald-400" data-t="7">&#10003; Flows migrated from staging</p>
          <p class="term-line text-emerald-400" data-t="8">&#10003; Live in 4.2s</p>
          <p class="term-line text-brand" data-t="9">$ <span class="inline-block h-3.5 w-2 translate-y-0.5 bg-brand animate-blink"></span></p>
        </div>

        <!-- SDK Panel -->
        <div id="dev-panel-sdk" class="hidden p-6 font-mono text-[12px] leading-relaxed text-slate-300 bg-[#0F1D2B] min-h-[268px]">
          <!-- Sub-tabs for Language -->
          <div class="flex gap-2 border-b border-slate-800/80 pb-2 mb-4">
            <button id="lang-tab-node" class="text-[10px] font-extrabold uppercase tracking-wide text-brand border border-brand/20 bg-brand/5 rounded px-2.5 py-1 transition duration-200 outline-none">Node.js</button>
            <button id="lang-tab-py" class="text-[10px] font-extrabold uppercase tracking-wide text-slate-400 hover:text-white rounded px-2.5 py-1 transition duration-200 outline-none">Python</button>
            <button id="lang-tab-curl" class="text-[10px] font-extrabold uppercase tracking-wide text-slate-400 hover:text-white rounded px-2.5 py-1 transition duration-200 outline-none">cURL</button>
          </div>

          <!-- Code Snippets -->
          <div id="code-node" class="space-y-1 overflow-x-auto">
            <p><span class="text-pink-400">const</span> Paisape = <span class="text-blue-300">require</span>(<span class="text-emerald-400">'@paisape/node'</span>);</p>
            <p><span class="text-pink-400">const</span> client = <span class="text-pink-400">new</span> <span class="text-yellow-200">Paisape</span>(<span class="text-emerald-400">'api_key_prod_...'</span>);</p>
            <p class="h-2"></p>
            <p><span class="text-slate-400">// Initiate dynamic checkout routing</span></p>
            <p><span class="text-pink-400">const</span> session = <span class="text-pink-400">await</span> client.<span class="text-cyan-300">sessions</span>.<span class="text-blue-300">create</span>({</p>
            <p>&nbsp;&nbsp;amount: <span class="text-purple-300">100000</span>, <span class="text-slate-500">// ₹1,000</span></p>
            <p>&nbsp;&nbsp;currency: <span class="text-emerald-400">'INR'</span>,</p>
            <p>&nbsp;&nbsp;routing_rule: <span class="text-emerald-400">'high_success_rate'</span></p>
            <p>});</p>
          </div>

          <div id="code-py" class="hidden space-y-1 overflow-x-auto">
            <p><span class="text-pink-400">import</span> paisape</p>
            <p class="h-2"></p>
            <p><span class="text-pink-400">client</span> = paisape.<span class="text-yellow-200">Client</span>(api_key=<span class="text-emerald-400">"api_key_prod_..."</span>)</p>
            <p class="h-2"></p>
            <p><span class="text-slate-400"># Initiate dynamic checkout routing</span></p>
            <p>session = client.sessions.create(</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;amount=<span class="text-purple-300">100000</span>, <span class="text-slate-500"># ₹1,000</span></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;currency=<span class="text-emerald-400">"INR"</span>,</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;routing_rule=<span class="text-emerald-400">"high_success_rate"</span></p>
            <p>)</p>
          </div>

          <div id="code-curl" class="hidden space-y-1 overflow-x-auto">
            <p><span class="text-cyan-300">curl</span> -X POST https://api.paisape.in/v1/sessions \</p>
            <p>&nbsp;&nbsp;-H <span class="text-emerald-400">"Authorization: Bearer api_key_prod_..."</span> \</p>
            <p>&nbsp;&nbsp;-d amount=<span class="text-purple-300">100000</span> \</p>
            <p>&nbsp;&nbsp;-d currency=INR \</p>
            <p>&nbsp;&nbsp;-d routing_rule=high_success_rate</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= ABOUT PAISAPE SECTION ================= -->
<section id="about-paisape" class="py-20 bg-slate-50 border-t border-slate-100 relative overflow-hidden">
  <div class="mx-auto max-w-site px-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Left Column: Story & Mission -->
      <div data-reveal="left">
        <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-4">About Paisape</span>
        <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight leading-tight">
          Empowering Indian Businesses with Next-Gen Payment Infrastructure
        </h2>
        <p class="mt-5 text-body text-base leading-relaxed">
          Paisape is India's premier enterprise payment orchestration and financial technology platform. Founded with a vision to simplify complex transaction flows, Paisape empowers merchants, D2C brands, fintechs, and enterprises to process, route, and reconcile payments seamlessly across multi-bank gateways.
        </p>
        <p class="mt-4 text-body text-base leading-relaxed">
          Our unified API infrastructure eliminates single-point-of-failure risks, lowers payment drop-offs, and optimizes authorization rates across UPI, Credit/Debit Cards, Net Banking, AePS, BBPS, and Micro-ATMs.
        </p>

        <!-- Feature List Grid -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="flex items-start gap-3 p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="p-2 bg-emerald-100 text-emerald-700 rounded-xl shrink-0 mt-0.5">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div>
              <h3 class="text-sm font-bold text-ink">Smart Dynamic Switch</h3>
              <p class="text-xs text-slate-500 mt-0.5">Sub-second auto-rerouting on bank downtime</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="p-2 bg-blue-100 text-blue-700 rounded-xl shrink-0 mt-0.5">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
              <h3 class="text-sm font-bold text-ink">PCI-DSS Level 1</h3>
              <p class="text-xs text-slate-500 mt-0.5">Hardware tokenization &amp; RBI compliance</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="p-2 bg-purple-100 text-purple-700 rounded-xl shrink-0 mt-0.5">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 3.5 3h9c2 0 3.5-1 3.5-3V7c0-2-1.5-3-3.5-3h-9C5.5 4 4 5 4 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6"></path></svg>
            </div>
            <div>
              <h3 class="text-sm font-bold text-ink">Real-Time Recon</h3>
              <p class="text-xs text-slate-500 mt-0.5">Automated T+0 batch settlements &amp; audit logs</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 bg-white rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="p-2 bg-amber-100 text-amber-700 rounded-xl shrink-0 mt-0.5">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            </div>
            <div>
              <h3 class="text-sm font-bold text-ink">Hardware Terminals</h3>
              <p class="text-xs text-slate-500 mt-0.5">Instant Audio Soundbox &amp; POS Solutions</p>
            </div>
          </div>
        </div>

        <div class="mt-8 flex items-center gap-4">
          <a href="/about-us" class="inline-flex items-center gap-2 rounded-full bg-brand px-6 py-3 text-sm font-bold text-white shadow-lg shadow-brand/25 transition hover:-translate-y-0.5 hover:bg-brandDk">
            Learn More About Paisape <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>

      <!-- Right Column: Visual Metrics Card -->
      <div data-reveal="right" class="relative">
        <div class="bg-gradient-to-br from-slate-900 to-night text-white rounded-3xl p-8 shadow-2xl border border-white/10 relative overflow-hidden">
          <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-brand/20 rounded-full blur-3xl pointer-events-none"></div>

          <div class="flex items-center justify-between border-b border-white/10 pb-6">
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-mint">Paisape Overview</span>
              <h3 class="text-2xl font-extrabold mt-1">Platform Performance</h3>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-bold border border-emerald-500/30">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Systems Operational
            </span>
          </div>

          <div class="grid grid-cols-2 gap-6 py-6 border-b border-white/10">
            <div>
              <p class="text-xs font-semibold text-slate-400">Total Volume Processed</p>
              <p class="text-3xl font-extrabold text-white mt-1 font-mono">₹5,000+ Cr</p>
              <p class="text-[11px] text-emerald-400 mt-0.5">↑ 42% YoY Growth</p>
            </div>
            <div>
              <p class="text-xs font-semibold text-slate-400">Average Uptime</p>
              <p class="text-3xl font-extrabold text-mint mt-1 font-mono">99.99%</p>
              <p class="text-[11px] text-slate-400 mt-0.5">Across 8+ Acquirers</p>
            </div>
          </div>

          <div class="pt-6 space-y-3 text-xs text-slate-300">
            <div class="flex justify-between items-center bg-white/5 p-3 rounded-xl border border-white/10">
              <span class="font-medium">Direct Bank Connections</span>
              <span class="font-bold text-white">ICICI, Axis, HDFC, SBI, YES Bank</span>
            </div>
            <div class="flex justify-between items-center bg-white/5 p-3 rounded-xl border border-white/10">
              <span class="font-medium">Supported Payment Modes</span>
              <span class="font-bold text-white">UPI 2.0, Cards, AePS, BBPS, NACH</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="border-t border-slate-100 bg-white py-14">
  <p data-reveal class="mb-8 px-5 text-center text-[10.5px] font-bold uppercase tracking-[0.22em] text-brand/80">
    Powering secure transactions across modern enterprises, financial institutions, and digital platforms.
  </p>
  <div class="marquee">
    <div class="track animate-marquee-slow gap-12 pr-12">
      <div class="flex shrink-0 items-center gap-12 pr-12" data-mq-group>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Easebuzz</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Zaakpay</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">PhonePe</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Cashfree</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">IDFC FIRST Bank</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Axis Bank</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">NPCI</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Razorpay</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">PayU</span>
        <span class="whitespace-nowrap font-display text-[17px] font-bold text-slate-400 transition hover:text-ink">Slice</span>
      </div>
      <div class="flex shrink-0 items-center gap-12 pr-12" data-mq-clone aria-hidden="true"></div>
    </div>
  </div>
</section>

</main>

<!-- ================= LATEST BLOGS ================= -->
<section id="latest-blogs" class="bg-white border-t border-slate-100 pt-12 pb-16">
  <div class="mx-auto max-w-site px-5">
    <div class="flex flex-col items-center justify-center text-center">
      <p class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
        <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Fintech Engineering Insights
      </p>
      <h2 class="font-display text-[27px] font-extrabold leading-tight tracking-tight text-ink sm:text-[34px] text-center">
        Latest from Paisape Engineering
      </h2>
      <p class="mt-4 max-w-xl text-center text-[14.5px] leading-relaxed text-body">
        Deep dives into high-throughput payment rails, API architectures, dynamic routing switches, and financial security compliance.
      </p>
    </div>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Neobanking Card -->
      <article class="card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
        <a href="/blog/neobanking-api-architecture" class="block overflow-hidden h-44 bg-slate-100">
          <img src="/assets/blog/blog_neobanking.jpg" alt="Building the Future of Finance" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">6 min read</span>
          </div>
          <a href="/blog/neobanking-api-architecture"><h3 class="mt-3 font-display text-[15px] font-bold leading-snug text-ink hover:text-brand">Building the Future of Finance: API-Driven Neobanking Architectures</h3></a>
          <p class="mt-2 text-[12.5px] leading-relaxed text-body line-clamp-3">Explore how modern fintechs and enterprises launch prepaid cards, digital wallets, and virtual accounts using banking APIs.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[11px] text-body/70">17 Aug 2026</span>
            <a href="/blog/neobanking-api-architecture" class="inline-flex items-center gap-1.5 text-[12px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- Independence Day Card -->
      <article class="card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
        <a href="/blog/independence-day-2026" class="block overflow-hidden h-44 bg-slate-100">
          <img src="/assets/blog/blog_independence_day.jpg" alt="Celebrating Financial Independence" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">4 min read</span>
          </div>
          <a href="/blog/independence-day-2026"><h3 class="mt-3 font-display text-[15px] font-bold leading-snug text-ink hover:text-brand">Celebrating Financial Independence: India's Digital Payment Revolution</h3></a>
          <p class="mt-2 text-[12.5px] leading-relaxed text-body line-clamp-3">Reflecting on India's incredible journey towards true financial independence through Digital Public Infrastructure.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[11px] text-body/70">15 Aug 2026</span>
            <a href="/blog/independence-day-2026" class="inline-flex items-center gap-1.5 text-[12px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>

      <!-- Soundbox Card -->
      <article class="card-lift flex flex-col overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
        <a href="/blog/soundbox-retail-revolution" class="block overflow-hidden h-44 bg-slate-100">
          <img src="/assets/blog/blog_soundbox_retail.jpg" alt="The Rise of Soundbox Technology" class="h-full w-full object-cover transition duration-500 hover:scale-105" />
        </a>
        <div class="flex flex-1 flex-col p-6">
          <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.14em]">
            <span class="text-brand">engineering</span><span class="text-body/50">5 min read</span>
          </div>
          <a href="/blog/soundbox-retail-revolution"><h3 class="mt-3 font-display text-[15px] font-bold leading-snug text-ink hover:text-brand">The Rise of Soundbox Technology: Why Every Retailer Needs Audio Alerts</h3></a>
          <p class="mt-2 text-[12.5px] leading-relaxed text-body line-clamp-3">Exploring the psychology and security benefits of audio confirmations in busy retail environments.</p>
          <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
            <span class="text-[11px] text-body/70">14 Aug 2026</span>
            <a href="/blog/soundbox-retail-revolution" class="inline-flex items-center gap-1.5 text-[12px] font-semibold text-brand">Read <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </article>
    </div>
    
    <div class="mt-10 text-center">
      <a href="/blog" class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-7 py-3 text-xs font-bold text-ink hover:border-brand hover:text-brand transition shadow-sm">View All Blog Articles</a>
    </div>
  </div>
</section>

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
          <li><a href="/excel-reconciliation-tool" class="transition hover:text-brand font-semibold text-mint">Free Excel Reconciliation Tool</a></li>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Tab Switching Logic
  const tabStats = document.getElementById('tab-stats');
  const tabSim = document.getElementById('tab-sim');
  const panelStats = document.getElementById('panel-stats');
  const panelSim = document.getElementById('panel-sim');

  if (tabStats && tabSim && panelStats && panelSim) {
    tabStats.addEventListener('click', function () {
      tabStats.className = 'flex-1 text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 outline-none transition duration-300';
      tabSim.className = 'flex-1 text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 hover:text-ink transition duration-300 outline-none';
      panelStats.classList.remove('hidden');
      panelSim.classList.add('hidden');
    });

    tabSim.addEventListener('click', function () {
      tabSim.className = 'flex-1 text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 outline-none transition duration-300';
      tabStats.className = 'flex-1 text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 hover:text-ink transition duration-300 outline-none';
      panelSim.classList.remove('hidden');
      panelStats.classList.add('hidden');
    });
  }

  // Simulation Logic
  const gwToggle = document.getElementById('gw-toggle');
  const gwStatusText = document.getElementById('gw-status-text');
  const simTarget = document.getElementById('sim-target');
  const simTargetLabel = document.getElementById('sim-target-label');
  const simLine1 = document.getElementById('sim-line-1');
  const simLine2 = document.getElementById('sim-line-2');
  const simSpinner = document.getElementById('sim-spinner');
  const simMessage = document.getElementById('sim-message');
  const simBtn = document.getElementById('sim-btn');

  let isRunning = false;

  if (gwToggle && gwStatusText) {
    gwToggle.addEventListener('change', function () {
      if (gwToggle.checked) {
        gwStatusText.textContent = 'Online';
        gwStatusText.className = 'ml-2 text-[10px] font-bold uppercase text-emerald-600';
      } else {
        gwStatusText.textContent = 'Downtime';
        gwStatusText.className = 'ml-2 text-[10px] font-bold uppercase text-red-500';
      }
      resetSimulationVisuals();
    });
  }

  function resetSimulationVisuals() {
    simLine1.style.width = '0%';
    simLine2.style.width = '0%';
    simLine2.className = 'absolute top-0 left-0 h-full w-0 bg-emerald-500 transition-all duration-[600ms] ease-out';
    simSpinner.classList.add('hidden');
    simTarget.textContent = 'HDFC';
    simTarget.className = 'h-10 w-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-ink font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300';
    simTargetLabel.textContent = 'Primary';
    simTargetLabel.className = 'text-[8px] font-extrabold uppercase text-slate-400 mt-1.5 tracking-wider';
    simMessage.innerHTML = '<p class="text-[11px] font-semibold text-ink2 leading-relaxed">Toggle Gateway status above, then click pay to test routing.</p>';
  }

  if (simBtn) {
    // Auto simulate offline on load, then toggle back online
    setTimeout(function() {
      if (gwToggle) {
        gwToggle.checked = false;
        gwToggle.dispatchEvent(new Event('change'));
      }
      setTimeout(function() {
        simBtn.click();
        // After animation completes (~5.5 seconds), toggle back to online
        setTimeout(function() {
          if (gwToggle && !isRunning) {
            gwToggle.checked = true;
            gwStatusText.textContent = 'Online';
            gwStatusText.className = 'ml-2 text-[10px] font-bold uppercase text-emerald-600';
            resetSimulationVisuals();
          }
        }, 5500);
      }, 400);
    }, 1200);

    simBtn.addEventListener('click', function () {
      if (isRunning) return;
      isRunning = true;
      simBtn.disabled = true;
      simBtn.textContent = 'Processing...';
      resetSimulationVisuals();

      // Step 1: User initiating request
      simMessage.innerHTML = '<p class="text-[11px] font-semibold text-brand animate-pulse leading-relaxed">Initiating payment request...</p>';
      simLine1.style.width = '100%';

      setTimeout(function () {
        // Step 2: Hit switch, analyzing rules
        simSpinner.classList.remove('hidden');
        simMessage.innerHTML = '<p class="text-[11px] font-semibold text-brand leading-relaxed">Switch analyzing gateway health...</p>';

        setTimeout(function () {
          simSpinner.classList.add('hidden');

          if (gwToggle.checked) {
            // HDFC is Online
            simMessage.innerHTML = '<p class="text-[11px] font-semibold text-brand leading-relaxed">HDFC (Primary) online. Routing payment...</p>';
            simLine2.style.width = '100%';

            setTimeout(function () {
              simTarget.className = 'h-10 w-10 rounded-full bg-emerald-100 border-emerald-300 text-emerald-700 flex items-center justify-center font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300';
              simMessage.innerHTML = '<p class="text-[11px] font-semibold text-emerald-600 leading-relaxed">Success! Completed via HDFC (Primary) in 38ms.</p>';
              finishSimulation();
            }, 600);

          } else {
            // HDFC is Offline (Downtime)
            simMessage.innerHTML = '<p class="text-[11px] font-semibold text-red-500 leading-relaxed">HDFC down (503 Error). Failover active...</p>';
            simTarget.className = 'h-10 w-10 rounded-full bg-red-100 border-red-300 text-red-700 flex items-center justify-center font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300';

            setTimeout(function () {
              simMessage.innerHTML = '<p class="text-[11px] font-semibold text-amber-500 leading-relaxed">Rerouting transaction to ICICI (Backup)...</p>';
              
              setTimeout(function () {
                // Change UI to ICICI Node
                simTarget.textContent = 'ICICI';
                simTargetLabel.textContent = 'Backup';
                simTargetLabel.className = 'text-[8px] font-extrabold uppercase text-amber-500 mt-1.5 tracking-wider';
                simTarget.className = 'h-10 w-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-ink font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300';
                
                // Animate to ICICI
                simLine2.className = 'absolute top-0 left-0 h-full w-0 bg-amber-500 transition-all duration-[600ms] ease-out';
                setTimeout(function () {
                  simLine2.style.width = '100%';
                  
                  setTimeout(function () {
                    simTarget.className = 'h-10 w-10 rounded-full bg-emerald-100 border-emerald-300 text-emerald-700 flex items-center justify-center font-bold text-[9px] text-center leading-tight shadow-sm transition-all duration-300';
                    simMessage.innerHTML = '<p class="text-[11px] font-semibold text-emerald-600 leading-relaxed">Success! Auto-rerouted to ICICI in 94ms.</p>';
                    finishSimulation();
                  }, 600);
                }, 100);

              }, 800);
            }, 800);
          }
        }, 1000);
      }, 600);
    });
  }

    function finishSimulation() {
    isRunning = false;
    simBtn.disabled = false;
    simBtn.textContent = 'Simulate Again';
  }

  // ================= DEVELOPER PANEL TABS =================
  const tabCli = document.getElementById('dev-tab-cli');
  const tabSdk = document.getElementById('dev-tab-sdk');
  const panelCli = document.getElementById('dev-panel-cli');
  const panelSdk = document.getElementById('dev-panel-sdk');

  if (tabCli && tabSdk && panelCli && panelSdk) {
    tabCli.addEventListener('click', function () {
      tabCli.className = 'text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 px-3 outline-none transition duration-300';
      tabSdk.className = 'text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 px-3 hover:text-white transition duration-300 outline-none';
      panelCli.classList.remove('hidden');
      panelSdk.classList.add('hidden');
    });

    tabSdk.addEventListener('click', function () {
      tabSdk.className = 'text-[11px] font-extrabold uppercase tracking-wider text-brand border-b-2 border-brand pb-2 px-3 outline-none transition duration-300';
      tabCli.className = 'text-[11px] font-extrabold uppercase tracking-wider text-slate-400 pb-2 px-3 hover:text-white transition duration-300 outline-none';
      panelSdk.classList.remove('hidden');
      panelCli.classList.add('hidden');
    });
  }

  // SDK Language Sub-tabs
  const langTabs = {
    node: document.getElementById('lang-tab-node'),
    py: document.getElementById('lang-tab-py'),
    curl: document.getElementById('lang-tab-curl')
  };

  const codePanels = {
    node: document.getElementById('code-node'),
    py: document.getElementById('code-py'),
    curl: document.getElementById('code-curl')
  };

  function switchLang(lang) {
    Object.keys(langTabs).forEach(key => {
      if (key === lang) {
        langTabs[key].className = 'text-[10px] font-extrabold uppercase tracking-wide text-brand border border-brand/20 bg-brand/5 rounded px-2.5 py-1 transition duration-200 outline-none';
        codePanels[key].classList.remove('hidden');
      } else {
        langTabs[key].className = 'text-[10px] font-extrabold uppercase tracking-wide text-slate-400 hover:text-white rounded px-2.5 py-1 transition duration-200 outline-none';
        codePanels[key].classList.add('hidden');
      }
    });
  }

  if (langTabs.node && langTabs.py && langTabs.curl) {
    langTabs.node.addEventListener('click', () => switchLang('node'));
    langTabs.py.addEventListener('click', () => switchLang('py'));
    langTabs.curl.addEventListener('click', () => switchLang('curl'));
  }

  // ================= ROI CALCULATOR LOGIC =================
  const sliderVol = document.getElementById('slider-volume');
  const sliderFail = document.getElementById('slider-failure');
  const labelVol = document.getElementById('label-volume');
  const labelFail = document.getElementById('label-failure');
  const outTxs = document.getElementById('roi-additional-txs');
  const outRev = document.getElementById('roi-recovered-rev');

  function calculateROI() {
    if (!sliderVol || !sliderFail) return;
    const volCr = parseFloat(sliderVol.value);
    const failRate = parseFloat(sliderFail.value) / 100;
    
    // Recovery rate (40% of dropoffs recovered)
    const recoveryRate = 0.40;
    
    // Monthly Volume in Rs.
    const monthlyVolRs = volCr * 10000000;
    
    // Annual Recovered Revenue
    const annualRecoveredRs = monthlyVolRs * failRate * recoveryRate * 12;
    
    // Additional annual txs (assuming avg ticket size Rs. 1500)
    const annualTxs = Math.round(annualRecoveredRs / 1500);

    // Format labels
    labelVol.textContent = '₹' + volCr + ' Cr';
    labelFail.textContent = sliderFail.value + '%';

    // Format outputs
    if (annualRecoveredRs >= 10000000) {
      outRev.textContent = '₹' + (annualRecoveredRs / 10000000).toFixed(2) + ' Cr';
    } else {
      outRev.textContent = '₹' + Math.round(annualRecoveredRs / 100000) + ' Lakhs';
    }

    if (annualTxs >= 100000) {
      outTxs.textContent = (annualTxs / 100000).toFixed(1) + ' Lakhs+';
    } else {
      outTxs.textContent = annualTxs.toLocaleString('en-IN') + '+';
    }
  }

  if (sliderVol && sliderFail) {
    sliderVol.addEventListener('input', calculateROI);
    sliderFail.addEventListener('input', calculateROI);
    calculateROI();
  }
});
</script>
</body>
</html>




