<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Paisape — Payment Orchestration Platform for India</title>
<meta name="description" content="A unified financial API layer for payments, payouts and reconciliation, with smart dynamic routing built in." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Paisape — Payment Orchestration Platform for India" />
<meta property="og:description" content="A unified financial API layer for payments, payouts and reconciliation, with smart dynamic routing built in." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
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
<section id="solutions" class="bg-gradient-to-b from-white via-[#F5FAFE] to-white py-20 md:py-24">
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
<section id="challenges" class="bg-white py-20 md:py-24">
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
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= DEVELOPER EXPERIENCE ================= -->
<section id="developers" class="border-y border-slate-100 bg-gradient-to-b from-[#F3F9FE] to-white py-20 md:py-24">
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
        <div class="flex items-center justify-between bg-[#0D1B2A] px-4 py-3">
          <div class="flex gap-1.5">
            <span class="h-3 w-3 rounded-full bg-[#FF5F57]"></span>
            <span class="h-3 w-3 rounded-full bg-[#FEBC2E]"></span>
            <span class="h-3 w-3 rounded-full bg-[#28C840]"></span>
          </div>
          <span class="font-mono text-[11px] text-slate-400">paisape-cli &mdash; zsh</span>
          <span class="rounded bg-brand/20 px-2 py-0.5 font-mono text-[10px] font-bold tracking-wider text-brand">SANDBOX</span>
        </div>
        <div class="space-y-1.5 p-6 font-mono text-[12.5px] leading-relaxed">
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




