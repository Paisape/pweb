<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/reconciliation-solution">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Automated Reconciliation � Paisape</title>
<meta name="description" content="Say goodbye to manual Excel sheets. Automate 2-way and 3-way reconciliation across all your payment gateways, banks, and internal ERP systems." />
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

<section class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-36 pb-14 md:pt-44 md:pb-20">
  <div class="pointer-events-none absolute right-0 top-24 hidden h-[300px] w-[46%] rounded-3xl bg-gradient-to-br from-brand/15 via-brand/5 to-transparent blur-2xl lg:block"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.06] blur-3xl"></div>

  <div class="relative mx-auto max-w-site px-5">
    <p data-reveal class="mb-4 text-[11px] font-bold uppercase tracking-[0.18em] text-brand">Finance &bull; Reconciliation</p>

    <h1 class="max-w-3xl font-display text-[36px] font-extrabold leading-[1.14] tracking-tight text-ink sm:text-[44px]">
      <span data-reveal data-delay="80">Automated</span> <span data-reveal data-delay="180" class="text-brand">Reconciliation</span>
    </h1>

    <p data-reveal data-delay="300" class="mt-5 max-w-2xl text-[15.5px] leading-relaxed text-body">Say goodbye to manual Excel sheets. Automate 2-way and 3-way reconciliation across all your payment gateways, banks, and internal ERP systems.</p>

    <div data-reveal data-delay="420" class="mt-8 flex flex-wrap items-center gap-3">
      <a href="/contact" class="group inline-flex items-center gap-2 rounded-full bg-brand px-6 py-3 text-[14.5px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
        Talk to Sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="#features" class="inline-flex items-center gap-2 rounded-full border border-brand/25 bg-brandLt px-6 py-3 text-[14.5px] font-semibold text-brand transition hover:-translate-y-1 hover:border-brand">
        Read Documentation
      </a>
    </div>

    <div class="mt-8 flex flex-wrap gap-2.5">
        <span data-reveal data-delay="560" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Multi-Source Fetching</span>
        <span data-reveal data-delay="620" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>AI-Powered Matching</span>
        <span data-reveal data-delay="680" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Exception Handling</span>
        <span data-reveal data-delay="740" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Fee &amp; Tax Calculation</span>
        <span data-reveal data-delay="800" class="flex items-center gap-1.5 rounded-full border border-slate-200 bg-white px-3.5 py-1.5 text-[11.5px] font-medium text-ink2 transition hover:-translate-y-0.5 hover:border-brand"><span class="h-1.5 w-1.5 rounded-full bg-brand"></span>Custom Rules Engine</span>
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
        <h3 class="font-display text-[15px] font-bold text-ink">Multi-Source Fetching</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Automatically ingest settlement files and MIS reports from multiple banks and payment gateways via SFTP or APIs.</p>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">AI-Powered Matching</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Advanced fuzzy logic and ML algorithms instantly match transactions, drastically reducing manual exceptions.</p>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M11 18h2"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Exception Handling</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">A dedicated dashboard to easily flag, review, and resolve mismatched or missing transactions with your partners.</p>
      </article>
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="9" r="6"/><path d="m8.5 14-1.5 8 5-3 5 3-1.5-8"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Fee &amp; Tax Calculation</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Automatically calculate and verify complex interchange fees, MDR, and GST applied by different payment aggregators.</p>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 8V5a2 2 0 0 1 2-2h3M16 3h3a2 2 0 0 1 2 2v3M21 16v3a2 2 0 0 1-2 2h-3M8 21H5a2 2 0 0 1-2-2v-3"/><path d="M8 12h8"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Custom Rules Engine</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Build your own complex reconciliation logic without writing code to accommodate unique business workflows.</p>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6.5V12c0 5 3.4 8.2 8 9.5 4.6-1.3 8-4.5 8-9.5V6.5z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Automated Alerts</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Receive instant email and SMS notifications for settlement delays, chargebacks, and critical recon failures.</p>
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
      <li data-reveal data-delay="0" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Multi-Source Fetching</li>
      <li data-reveal data-delay="70" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>AI-Powered Matching</li>
      <li data-reveal data-delay="140" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Exception Handling</li>
      <li data-reveal data-delay="0" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Fee &amp; Tax Calculation</li>
      <li data-reveal data-delay="70" class="flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-5 py-3 text-[13.5px] font-medium text-ink2 shadow-sm transition hover:-translate-y-1 hover:border-brand"><svg class="h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 5 5L20 7"/></svg>Custom Rules Engine</li>
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
        <a href="/upi" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Enterprise UPI Stack</a>
        <a href="/aeps" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Aadhaar Enabled Payment System (AEPS)</a>
        <a href="/onboarding-solution" class="whitespace-nowrap rounded-lg border border-brand/15 bg-brandLt/60 px-4 py-2 text-[12.5px] font-semibold text-ink2 transition hover:border-brand hover:text-brand">Digital Merchant Onboarding</a>
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
    <h2 data-reveal class="font-display text-[30px] font-extrabold leading-tight tracking-tight text-white sm:text-[40px]">Ready to close your books without spreadsheets?</h2>
    <p data-reveal data-delay="120" class="mx-auto mt-5 max-w-xl text-[15px] leading-relaxed text-slate-400">Talk to our team about your settlement sources and the exceptions eating your finance team's week.</p>
    <a href="/contact" data-reveal data-delay="240" class="group mt-9 inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
      Talk to sales <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
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





