<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free Merchant Category Code (MCC) Finder & PG Risk Classifier — Paisape</title>
<meta name="description" content="Instantly find standard NPCI, Visa, and Mastercard 4-digit MCC codes by business keywords or website details. Check your Payment Gateway onboarding risk rating and MDR fee estimates." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free Merchant Category Code (MCC) Finder & PG Risk Classifier — Paisape" />
<meta property="og:description" content="Resolve MCC codes and onboarding risk profiles instantly. Designed for Indian payment gateways." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/mcc-finder" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

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
</head>

<body class="bg-slate-50 text-body antialiased">
<div class="fixed top-0 left-0 z-[100] w-full bg-gradient-to-r from-[#FF9933] via-white to-[#138808] px-4 py-2.5 text-center shadow-md">
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

<!-- Standard Site Header -->
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
      </div>

      <a href="/blog" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Blog</a>
      <a href="/contact" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Contact Us</a>
    </div>
  </div>
</header>

<main id="main" class="pt-32 pb-20">

  <!-- Header Banner -->
  <div class="mx-auto max-w-site px-5 mb-8 text-center">
    <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Developer Tool</span>
    <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">Merchant Category Code (MCC) Finder</h1>
    <p class="mt-2 text-body text-sm sm:text-base max-w-2xl mx-auto">Analyze business structures, meta descriptions, or website keywords to resolve ISO 18245 MCC codes, expected PG transaction fees, and regulatory risk ratings.</p>
  </div>

  <!-- Main Workspace -->
  <div class="mx-auto max-w-site px-5 grid grid-cols-1 lg:grid-cols-12 gap-8">

    <!-- Left Controls (Col 5) -->
    <div class="lg:col-span-5 space-y-6">
      
      <!-- Input Mode Card -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">Find MCC Code</h3>
        
        <div>
          <label class="block text-xs font-bold text-slate-500 mb-1">Search Industry or Category</label>
          <input type="text" id="mccSearchInput" oninput="handleSearch(this.value)" placeholder="e.g. software, grocery, clothing, education..." class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-4 py-3 text-sm font-semibold text-ink placeholder-slate-400 focus:border-brand focus:outline-none transition">
        </div>
      </div>

      <!-- Quick Categories -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider mb-3">Popular Categories</h3>
        <div class="flex flex-wrap gap-2">
          <button onclick="quickSelect('SaaS')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">SaaS / Software</button>
          <button onclick="quickSelect('E-commerce')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">E-commerce</button>
          <button onclick="quickSelect('Education')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Education</button>
          <button onclick="quickSelect('Grocery')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Grocery</button>
          <button onclick="quickSelect('Fashion')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Clothing &amp; Fashion</button>
          <button onclick="quickSelect('Restaurant')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Restaurants</button>
          <button onclick="quickSelect('Financial')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Financial / Wallet</button>
        </div>
      </div>

    </div>

    <!-- Right Workspace (Col 7) -->
    <div class="lg:col-span-7 space-y-6">

      <!-- Selected MCC Detail Panel -->
      <div id="mccDetailCard" class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm relative overflow-hidden hidden">
        <div class="absolute top-0 right-0 h-24 w-24 bg-brand/5 rounded-full blur-2xl pointer-events-none"></div>

        <div class="flex items-start justify-between gap-4">
          <div>
            <span id="detailCode" class="font-mono text-3xl font-black text-brand tracking-tight"></span>
            <h2 id="detailTitle" class="text-xl font-extrabold text-ink mt-1"></h2>
            <p id="detailDesc" class="text-xs text-slate-500 mt-1 leading-relaxed"></p>
          </div>
          <span id="detailRiskBadge" class="px-3.5 py-1.5 rounded-full text-[10.5px] font-black uppercase tracking-wider"></span>
        </div>

        <!-- MDR and Payouts Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-6 border-t border-b border-slate-100 py-5">
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">UPI Rates</p>
            <p id="rateUpi" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Debit Cards</p>
            <p id="rateDebit" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Credit Cards</p>
            <p id="rateCredit" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Netbanking</p>
            <p id="rateNb" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
        </div>

        <!-- Compliance & Required Documents -->
        <div class="mt-5 space-y-3">
          <h4 class="text-xs font-extrabold text-ink uppercase tracking-wider">Required Compliance Documents</h4>
          <ul id="detailDocsList" class="space-y-1.5 text-xs text-slate-600">
            <!-- Injected dynamically -->
          </ul>
        </div>
      </div>

      <!-- Live Search Matches List -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
        <div class="flex items-center justify-between">
          <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">Matches Found</h3>
          <span id="matchCountBadge" class="text-xs font-bold text-brand bg-brandLt px-2.5 py-1 rounded-full">0 Codes</span>
        </div>

        <div id="mccList" class="divide-y divide-slate-100 max-h-[480px] overflow-y-auto pr-1">
          <!-- Injected dynamically -->
        </div>
      </div>

    </div>

  </div>

</main>

<!-- Standard Site Footer -->
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
          <li><a href="/gst-invoice-generator" class="transition hover:text-brand">GST Invoice Generator</a></li>
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

<script src="/js/main.js"></script>

<script>
// Comprehensive ISO 18245 MCC codes dictionary for Indian ecosystem
const mccDatabase = [
  {
    code: "7372",
    title: "SaaS, Software & Cloud Services",
    desc: "Computer Programming, Software Development, Web Hosting, Data Processing, and cloud subscription portals.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.5%",
    nb: "₹5 - ₹15 flat",
    docs: [
      "Sole Proprietorship / Partnership Deed / Incorporation Certificate",
      "Business PAN Card",
      "GSTIN Registration Certificate (Mandatory for SaaS)",
      "Website terms and clear refund policy page URLs"
    ],
    keywords: ["saas", "software", "cloud", "api", "hosting", "programming", "subscription", "web", "app", "tech", "technology", "platform", "b2b", "digital", "internet", "website", "mobile", "design", "development"]
  },
  {
    code: "5311",
    title: "E-commerce, Marketplaces & Department Stores",
    desc: "Online marketplaces, retail shops, department stores, consumer goods, and general e-commerce platforms.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.5% - 2.0%",
    nb: "₹5 - ₹12 flat",
    docs: [
      "Sole Proprietorship / Partnership Deed / Incorporation Certificate",
      "Business PAN Card",
      "GSTIN Registration Certificate",
      "Shop & Establishment License"
    ],
    keywords: ["amazon", "flipkart", "ecommerce", "shopping", "retail", "marketplace", "goods", "buy", "store", "products", "electronics", "sell", "online shop", "d2c"]
  },
  {
    code: "8299",
    title: "E-Learning, Coaching & Online Courses",
    desc: "Educational Services, schools, tutorials, online skill courses, test series, and learning management systems.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.8% - 2.2%",
    nb: "₹5 - ₹12 flat",
    docs: [
      "KYC documents of owner/partners",
      "Domain ownership certificate",
      "Clear terms of service detailing student refund schedules"
    ],
    keywords: ["education", "coaching", "tuition", "school", "college", "course", "classes", "learning", "tutorial", "skill", "training", "student", "teacher", "learn", "study", "exam", "test", "certification", "degree", "academy", "institute"]
  },
  {
    code: "5411",
    title: "Grocery Stores & Supermarkets",
    desc: "Online grocery delivery apps, local supermarkets, organic fruits, vegetables, and daily household essentials.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0% (Below ₹2000)",
    credit: "1.5% - 1.9%",
    nb: "₹3 - ₹10 flat",
    docs: [
      "FSSAI Food License (Mandatory for food delivery and grocery stores)",
      "Shop and Establishment License",
      "GSTIN registration certificate"
    ],
    keywords: ["grocery", "supermarket", "food", "fruits", "vegetables", "organic", "shop", "delivery", "store", "dairy", "milk"]
  },
  {
    code: "5651",
    title: "Family Clothing & Apparel Stores",
    desc: "E-commerce fashion boutiques, shoes, ready-made garments, and lifestyle apparel retail.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.3%",
    nb: "₹5 - ₹15 flat",
    docs: [
      "Shop Establishment license",
      "GSTIN Certificate",
      "Proof of product inventory or vendor agreements"
    ],
    keywords: ["clothing", "fashion", "apparel", "boutique", "shoes", "garments", "wear", "shirts", "dresses", "lifestyle"]
  },
  {
    code: "5812",
    title: "Restaurants & Fine Dining",
    desc: "Eating places, cafes, cloud kitchens, fine dining outlets, catering services.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.2%",
    nb: "₹4 - ₹12 flat",
    docs: [
      "FSSAI Food Safety License",
      "GSTIN registration",
      "Store location photo & menu card"
    ],
    keywords: ["restaurant", "cafe", "dining", "kitchen", "catering", "hotel", "food", "bakery", "sweets", "eat", "meal", "dinner", "lunch", "breakfast", "menu", "takeaway", "dine"]
  },
  {
    code: "5912",
    title: "Pharmacies & Chemists",
    desc: "Online pharmacy delivery portals, medicine stores, healthcare supplements, and diagnostic kits.",
    risk: "High Risk",
    upi: "0% (Free)",
    debit: "0.9%",
    credit: "2.5% - 2.9%",
    nb: "₹10 - ₹20 flat",
    docs: [
      "Drug License Form 20 or Form 21 (Mandatory)",
      "Pharmacist Registration Certificate",
      "Prescription upload checkpoint enabled on website checkout"
    ],
    keywords: ["pharmacy", "chemist", "medicine", "drugs", "healthcare", "supplement", "prescription", "diagnostic", "medical"]
  },
  {
    code: "4722",
    title: "Travel Agencies & Tour Operators",
    desc: "Flight ticketing portals, hotel booking aggregators, vehicle rentals, and holiday packages.",
    risk: "Medium Risk",
    upi: "0.9%",
    debit: "0.9%",
    credit: "2.2% - 2.7%",
    nb: "₹10 - ₹15 flat",
    docs: [
      "IATA certification / State Tourism board registration certificate",
      "Cancellation and refund policy explicitly displayed on checkout",
      "3-month bank statement verification"
    ],
    keywords: ["travel", "ticket", "flight", "booking", "hotel", "tour", "holiday", "cab", "rentals", "package", "bus"]
  },
  {
    code: "5944",
    title: "Jewelry, Gold & Silverware",
    desc: "Gold coins, diamond jewelry, silver ornaments, and precious gems retail stores.",
    risk: "Medium Risk",
    upi: "0.9%",
    debit: "0.9%",
    credit: "2.0% - 2.5%",
    nb: "₹10 - ₹20 flat",
    docs: [
      "BIS Hallmark License Certificate",
      "GSTIN showing jewelry classification",
      "Mandatory customer PAN card validation flow for transactions exceeding ₹2 Lakhs"
    ],
    keywords: ["jewelry", "gold", "silver", "diamond", "gems", "watches", "precious", "ornaments"]
  },
  {
    code: "6012",
    title: "Financial Institutions & Wallet Loading",
    desc: "Fintech platforms, investment apps, NBFCs, stock brokers, and wallet loading services.",
    risk: "High Risk",
    upi: "0.65% (Capped)",
    debit: "0.9%",
    credit: "2.5% - 3.2%",
    nb: "₹15 - ₹25 flat",
    docs: [
      "SEBI / RBI Registration Certificate matching category",
      "Corporate PAN Card",
      "Signed Board Resolution authorizing payment system activation"
    ],
    keywords: ["financial", "investment", "nbfc", "wallet", "mutual", "stock", "broker", "crypto", "trading", "finance", "lending", "payment", "pay", "money", "banking", "wealth", "fintech", "gateway", "remittance", "transfer", "credit", "cash", "loan"]
  },
  {
    code: "7995",
    title: "Betting, Gaming & Casinos",
    desc: "Fantasy sports platforms, online gaming, skill betting, lottery, and amusement services.",
    risk: "Restricted",
    upi: "0.9%",
    debit: "0.9%",
    credit: "3.0% - 3.5%",
    nb: "₹20 - ₹35 flat",
    docs: [
      "Legal Opinion Certificate declaring business complies with Skill Gaming state laws",
      "100% Geo-blocking enabled for banned states (Assam, Odisha, Telangana, Andhra Pradesh)",
      "Strict KYC validation matching RBI guidelines"
    ],
    keywords: ["betting", "casino", "lottery", "gambling", "gaming", "fantasy", "rummy", "poker", "wager", "sports", "play", "win", "cash", "chips", "tournament"]
  }
];

// Initialize List
document.addEventListener("DOMContentLoaded", () => {
  renderMatches(mccDatabase);
});

// Quick Selection
function quickSelect(category) {
  document.getElementById('mccSearchInput').value = category;
  handleSearch(category);
}

// Keyword Search Matcher
function handleSearch(val) {
  const query = val.trim().toLowerCase();
  if (!query) {
    renderMatches(mccDatabase);
    return;
  }

  const filtered = mccDatabase.filter(item => {
    return item.code.includes(query) ||
           item.title.toLowerCase().includes(query) ||
           item.desc.toLowerCase().includes(query) ||
           item.keywords.some(kw => kw.includes(query));
  });

  renderMatches(filtered);
}

// Render Results Grid
function renderMatches(list) {
  const container = document.getElementById('mccList');
  const countBadge = document.getElementById('matchCountBadge');
  container.innerHTML = '';

  countBadge.innerText = `${list.length} Codes`;

  if (list.length === 0) {
    container.innerHTML = `
      <div class="py-8 text-center text-slate-400 text-xs">
        No matching category codes found. Try another keyword.
      </div>
    `;
    return;
  }

  list.forEach((item, idx) => {
    const div = document.createElement('div');
    div.className = "py-3.5 flex items-start justify-between gap-4 cursor-pointer hover:bg-slate-50 px-2 rounded-xl transition duration-150";
    div.onclick = () => showDetail(item);
    div.innerHTML = `
      <div class="flex items-start gap-3">
        <span class="font-mono text-sm font-black text-brand bg-brandLt px-2 py-0.5 rounded">${item.code}</span>
        <div>
          <p class="text-sm font-extrabold text-ink">${item.title}</p>
          <p class="text-xs text-slate-500 line-clamp-1 mt-0.5">${item.desc}</p>
        </div>
      </div>
      <span class="text-[10px] font-black uppercase tracking-wider border px-2 py-0.5 rounded ${getRiskClass(item.risk)}">${item.risk}</span>
    `;
    container.appendChild(div);

    // Auto-select first result on query
    if (idx === 0) {
      showDetail(item);
    }
  });
}

// Show Detailed card info
function showDetail(item) {
  document.getElementById('mccDetailCard').classList.remove('hidden');
  document.getElementById('detailCode').innerText = item.code;
  document.getElementById('detailTitle').innerText = item.title;
  document.getElementById('detailDesc').innerText = item.desc;

  const riskBadge = document.getElementById('detailRiskBadge');
  riskBadge.innerText = item.risk;
  riskBadge.className = `px-3.5 py-1.5 rounded-full text-[10.5px] font-black uppercase tracking-wider ${getRiskClass(item.risk)}`;

  document.getElementById('rateUpi').innerText = item.upi;
  document.getElementById('rateDebit').innerText = item.debit;
  document.getElementById('rateCredit').innerText = item.credit;
  document.getElementById('rateNb').innerText = item.nb;

  const docsList = document.getElementById('detailDocsList');
  docsList.innerHTML = '';
  item.docs.forEach(doc => {
    const li = document.createElement('li');
    li.className = "flex items-start gap-2";
    li.innerHTML = `
      <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
      <span>${doc}</span>
    `;
    docsList.appendChild(li);
  });
}

function getRiskClass(risk) {
  switch (risk) {
    case 'Low Risk':
      return 'bg-emerald-50 text-emerald-600 border-emerald-100';
    case 'Medium Risk':
      return 'bg-amber-50 text-amber-600 border-amber-100';
    case 'High Risk':
      return 'bg-rose-50 text-rose-600 border-rose-100';
    case 'Restricted':
      return 'bg-slate-900 text-white border-slate-950';
    default:
      return 'bg-slate-50 text-slate-600';
  }
}
</script>
</body>
</html>
