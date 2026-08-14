<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/upi-qr-generator">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free UPI QR Code Generator — Create Custom Paisape UPI QR Standees</title>
<meta name="description" content="Generate free, instant, customized UPI QR code standees for your store. Accept payments directly via GPay, PhonePe, Paytm, BHIM, and any UPI app." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free UPI QR Code Generator — Paisape" />
<meta property="og:description" content="Generate instant customized UPI QR code standees with your merchant name and Paisape branding." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/upi-qr-generator" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="/js/tailwind.config.js"></script>
<link rel="stylesheet" href="/css/style.css">

<!-- QRCode.js & html2canvas Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<style>
  body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  /* Strict Print Enforcement Rules for UPI Standee (No Blank Screen, Exact Colors & Borders) */
  @media print {
    * {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
      color-adjust: exact !important;
    }
    body {
      background: #ffffff !important;
      margin: 0 !important;
      padding: 0 !important;
    }
    body * {
      visibility: hidden;
    }
    #qrCardFrame, #qrCardFrame * {
      visibility: visible;
    }
    #qrCardFrame {
      position: absolute !important;
      left: 50% !important;
      top: 20px !important;
      transform: translateX(-50%) !important;
      width: 380px !important;
      margin: 0 auto !important;
      box-shadow: none !important;
      border: 2px solid #0f172a !important;
      border-radius: 20px !important;
      box-sizing: border-box !important;
    }
    .no-print {
      display: none !important;
    }
  }
</style>
</head>

<body class="bg-slate-50 text-body antialiased">
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

<main id="main" class="pt-32 pb-20">
  <div class="mx-auto max-w-site px-5">
    
    <!-- Page Header -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
      <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Merchant Tool</span>
      <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">Free UPI QR Code Generator</h1>
      <p class="mt-3 text-body text-[15px] leading-relaxed">Generate zero-fee custom UPI QR code standees for your business. Works seamlessly with Google Pay, PhonePe, Paytm, BHIM, and all UPI apps.</p>
    </div>

    <!-- Generator Interface Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      
      <!-- LEFT: Form Options -->
      <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        
        <!-- Tabs -->
        <div class="flex border-b border-slate-200 mb-6 gap-6">
          <button id="tabDetails" onclick="switchTab('details')" class="pb-3 text-sm font-bold border-b-2 border-brand text-brand transition">Payment Details</button>
          <button id="tabCustom" onclick="switchTab('custom')" class="pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 hover:text-slate-800 transition">Customize Design</button>
        </div>

        <!-- Details Tab Content -->
        <div id="panelDetails" class="space-y-5">
          <div>
            <label for="merchantName" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Merchant / Payee Name <span class="text-rose-500">*</span></label>
            <input type="text" id="merchantName" value="Paisape Store" placeholder="e.g. Mandirsetuu" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
          </div>

          <div>
            <label for="upiId" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">UPI ID (VPA) <span class="text-rose-500">*</span></label>
            <input type="text" id="upiId" value="merchant@paisape" placeholder="e.g. 9529160004@ybl" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
            <p class="mt-1 text-[11.5px] text-slate-400">Accepts any VPA from Kotak, Paytm, PhonePe, ICICI, HDFC, SBI, Google Pay.</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label for="amount" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Amount (Optional)</label>
              <input type="number" id="amount" placeholder="Enter amount (e.g. 500)" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
            </div>
            <div>
              <label for="note" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Note (Optional)</label>
              <input type="text" id="note" placeholder="e.g. Order #1024" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
            </div>
          </div>
        </div>

        <!-- Customize Tab Content -->
        <div id="panelCustom" class="hidden space-y-5">
          <div>
            <label for="headerColor" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Header Banner Color</label>
            <div class="flex items-center gap-3">
              <input type="color" id="headerColor" value="#0080FF" onchange="updateColors()" class="h-10 w-16 cursor-pointer rounded-lg border border-slate-300 p-1">
              <span class="text-xs font-mono text-slate-500" id="headerHex">#0080FF</span>
            </div>
          </div>

          <div>
            <label for="qrColor" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">QR Code Color</label>
            <div class="flex items-center gap-3">
              <input type="color" id="qrColor" value="#000000" onchange="updateColors()" class="h-10 w-16 cursor-pointer rounded-lg border border-slate-300 p-1">
              <span class="text-xs font-mono text-slate-500" id="qrHex">#000000</span>
            </div>
          </div>

          <div class="flex items-center gap-3 pt-2">
            <input type="checkbox" id="showCenterLogo" checked onchange="updateQR()" class="h-4 w-4 rounded border-slate-300 text-brand focus:ring-brand">
            <label for="showCenterLogo" class="text-sm font-semibold text-slate-700 cursor-pointer">Embed Paisape Logo in Center of QR Code</label>
          </div>
        </div>

        <!-- Quick Tips Section -->
        <div class="mt-8 pt-6 border-t border-slate-100 bg-slate-50/80 p-5 rounded-2xl">
          <h3 class="text-xs font-bold uppercase tracking-wider text-slate-800 mb-2">Quick Tips:</h3>
          <ul class="space-y-1.5 text-[12.5px] text-slate-600 list-disc list-inside">
            <li>Verify your UPI ID before printing or sharing the QR code</li>
            <li>Add a pre-filled amount for faster static billing counter payments</li>
            <li>Test your QR code with any UPI app (GPay, PhonePe, Paytm, BHIM)</li>
            <li>Click <strong>Download Standee</strong> to export the complete custom QR card</li>
          </ul>
        </div>
      </div>

      <!-- RIGHT: Live QR Preview Card (Exact Reference Design) -->
      <div class="lg:col-span-5 flex flex-col items-center">
        
        <!-- Standee / Preview Card Frame (Exported on Download/Print/Share) -->
        <div id="qrCardFrame" class="w-full max-w-sm bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden text-center transition bg-white p-0">
          
          <!-- Dynamic Header Banner -->
          <div id="cardHeader" class="bg-[#0080FF] text-white py-4 px-6 font-extrabold text-lg uppercase tracking-wider truncate shadow-inner">
            <span id="previewName">PAISAPE STORE</span>
          </div>

          <div class="p-6 flex flex-col items-center bg-white">
            
            <!-- Canvas Container -->
            <div id="qrcodeRaw" class="hidden"></div>
            <div class="relative bg-white p-3 rounded-2xl border border-slate-100 shadow-sm flex justify-center items-center">
              <canvas id="qrCanvas" width="280" height="280" class="max-w-full h-auto rounded-lg"></canvas>
            </div>

            <!-- Amount / Note Badge if entered -->
            <div id="previewMeta" class="mt-3 text-xs font-semibold text-slate-600 hidden">
              <span id="previewAmt" class="text-brand font-bold"></span> &bull; <span id="previewNote"></span>
            </div>

            <!-- Callout -->
            <p class="mt-4 text-[13.5px] font-bold text-[#0080FF]">Scan and pay with any UPI app</p>

            <!-- PSP App Badges Row (Authentic Logos) -->
            <div class="mt-4 flex items-center justify-center gap-2.5 border-t border-b border-slate-100 py-3.5 px-2 w-full">
              <span class="text-[11px] font-black text-slate-600 border border-slate-200 px-2 py-0.5 rounded bg-slate-50 tracking-tighter">BHIM</span>
              <span class="text-[11px] font-black text-blue-600 border border-blue-100 px-2 py-0.5 rounded bg-blue-50/50 tracking-tighter">UPI</span>
              <span class="text-[11.5px] font-bold text-slate-700">G Pay</span>
              <span class="text-[11.5px] font-bold text-purple-700">PhonePe</span>
              <span class="text-[11.5px] font-bold text-cyan-600">Paytm</span>
              <span class="text-[11.5px] font-bold text-amber-600">amazon pay</span>
            </div>

            <!-- Powered By Paisape Footer (Perfectly Centered Alignment) -->
            <div class="mt-5 pt-2 flex flex-col items-center justify-center w-full">
              <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-widest">Powered by</span>
              <img src="/assets/logo.svg" alt="Paisape" class="h-6 w-auto mt-1.5 object-contain" width="140" height="36">
            </div>
          </div>
        </div>

        <!-- Action Buttons Bar -->
        <div class="w-full max-w-sm mt-5 grid grid-cols-3 gap-2.5">
          <button onclick="printQRCard()" class="flex items-center justify-center gap-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Print
          </button>
          <button onclick="shareQRCard()" class="flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            Share
          </button>
          <button onclick="downloadQRCard()" class="flex items-center justify-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Download
          </button>
        </div>

        <div id="shareStatus" class="mt-2 text-xs font-semibold text-emerald-600 hidden">Link copied to clipboard!</div>
      </div>
    </div>
  </div>
</main>

<div id="qrPrintArea" class="hidden"></div>

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

<script>
// Tab Switching
function switchTab(tab) {
  if (tab === 'details') {
    document.getElementById('panelDetails').classList.remove('hidden');
    document.getElementById('panelCustom').classList.add('hidden');
    document.getElementById('tabDetails').className = 'pb-3 text-sm font-bold border-b-2 border-brand text-brand transition';
    document.getElementById('tabCustom').className = 'pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 hover:text-slate-800 transition';
  } else {
    document.getElementById('panelCustom').classList.remove('hidden');
    document.getElementById('panelDetails').classList.add('hidden');
    document.getElementById('tabCustom').className = 'pb-3 text-sm font-bold border-b-2 border-brand text-brand transition';
    document.getElementById('tabDetails').className = 'pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 hover:text-slate-800 transition';
  }
}

function updateColors() {
  const hColor = document.getElementById('headerColor').value;
  const qColor = document.getElementById('qrColor').value;
  document.getElementById('headerHex').innerText = hColor;
  document.getElementById('qrHex').innerText = qColor;
  document.getElementById('cardHeader').style.backgroundColor = hColor;
  updateQR();
}

// Load Paisape Center Logo Image
const paisapeLogo = new Image();
paisapeLogo.src = '/assets/paisape-logo.png';
paisapeLogo.onload = () => { updateQR(); };

function updateQR() {
  const nameInput = document.getElementById('merchantName').value.trim();
  const upiIdInput = document.getElementById('upiId').value.trim();
  const amount = document.getElementById('amount').value.trim();
  const note = document.getElementById('note').value.trim();
  const colorDark = document.getElementById('qrColor').value || '#000000';
  const embedLogo = document.getElementById('showCenterLogo').checked;

  const name = nameInput || 'PAISAPE STORE';
  const upiId = upiIdInput || 'merchant@paisape';

  document.getElementById('previewName').innerText = name.toUpperCase();

  const metaBox = document.getElementById('previewMeta');
  if (amount || note) {
    metaBox.classList.remove('hidden');
    document.getElementById('previewAmt').innerText = amount ? ('₹' + amount) : '';
    document.getElementById('previewNote').innerText = note ? note : '';
  } else {
    metaBox.classList.add('hidden');
  }

  // Build UPI Deep Link URI: upi://pay?pa=...&pn=...&am=...&tn=...&cu=INR
  let upiUri = `upi://pay?pa=${encodeURIComponent(upiId)}&pn=${encodeURIComponent(name)}&cu=INR`;
  if (amount) upiUri += `&am=${encodeURIComponent(amount)}`;
  if (note) upiUri += `&tn=${encodeURIComponent(note)}`;

  // Generate QR Code onto hidden container
  const rawDiv = document.getElementById('qrcodeRaw');
  rawDiv.innerHTML = '';
  new QRCode(rawDiv, {
    text: upiUri,
    width: 280,
    height: 280,
    colorDark: colorDark,
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H
  });

  // Synchronously / instantly render onto target canvas with center logo
  const renderCanvas = () => {
    const sourceCanvas = rawDiv.querySelector('canvas');
    const sourceImg = rawDiv.querySelector('img');
    const targetCanvas = document.getElementById('qrCanvas');
    const ctx = targetCanvas.getContext('2d');

    const drawFinal = (imgSource) => {
      ctx.clearRect(0, 0, 280, 280);
      ctx.drawImage(imgSource, 0, 0, 280, 280);

      if (embedLogo && paisapeLogo.complete && paisapeLogo.naturalWidth !== 0) {
        const logoSize = 44;
        const logoX = (280 - logoSize) / 2;
        const logoY = (280 - logoSize) / 2;

        ctx.beginPath();
        ctx.arc(140, 140, 25, 0, 2 * Math.PI, false);
        ctx.fillStyle = '#FFFFFF';
        ctx.fill();
        ctx.lineWidth = 2.5;
        ctx.strokeStyle = colorDark !== '#000000' ? colorDark : '#0080FF';
        ctx.stroke();

        ctx.drawImage(paisapeLogo, logoX, logoY, logoSize, logoSize);
      }
    };

    if (sourceCanvas && sourceCanvas.width > 0) {
      drawFinal(sourceCanvas);
    } else if (sourceImg && sourceImg.src && sourceImg.src.length > 50) {
      const tempImg = new Image();
      tempImg.onload = () => drawFinal(tempImg);
      tempImg.src = sourceImg.src;
    }
  };

  // Immediate + short delay backup to handle async qrcode.js rendering
  renderCanvas();
  setTimeout(renderCanvas, 40);
  setTimeout(renderCanvas, 150);
}

// Full Standee Export via html2canvas
function downloadQRCard() {
  const card = document.getElementById('qrCardFrame');
  html2canvas(card, { scale: 3, useCORS: true, backgroundColor: '#ffffff' }).then(canvas => {
    const link = document.createElement('a');
    link.download = 'paisape-upi-standee-' + (document.getElementById('merchantName').value.trim().toLowerCase().replace(/[^a-z0-9]/g, '-') || 'qr') + '.png';
    link.href = canvas.toDataURL('image/png');
    link.click();
  });
}

function printQRCard() {
  window.print();
}

function shareQRCard() {
  const card = document.getElementById('qrCardFrame');
  const name = document.getElementById('merchantName').value.trim() || 'Paisape Merchant';
  const upiId = document.getElementById('upiId').value.trim() || 'vpa@upi';

  html2canvas(card, { scale: 3, useCORS: true, backgroundColor: '#ffffff' }).then(canvas => {
    canvas.toBlob(blob => {
      if (!blob) return;
      const fileName = `paisape-upi-qr-${name.toLowerCase().replace(/[^a-z0-9]/g, '-')}.png`;
      const file = new File([blob], fileName, { type: 'image/png' });

      if (navigator.canShare && navigator.canShare({ files: [file] })) {
        navigator.share({
          files: [file],
          title: `UPI QR Code - ${name}`,
          text: `Scan & Pay to ${name} (${upiId}) via UPI`
        }).catch(err => console.log('Share dismissed:', err));
      } else {
        // Fallback: download PNG file & open WhatsApp link
        const link = document.createElement('a');
        link.download = fileName;
        link.href = URL.createObjectURL(blob);
        link.click();

        const shareText = `Pay to ${name} (${upiId}) using Paisape UPI QR Code.`;
        window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(shareText)}`, '_blank');
      }
    }, 'image/png');
  });
}

// Initial draw on page load
window.addEventListener('DOMContentLoaded', () => {
  updateQR();
});
</script>
<script src="/js/main.js"></script>
</body>
</html>
