<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free GST Invoice & Dynamic UPI QR Generator — Paisape</title>
<meta name="description" content="Generate professional Indian GST invoices with custom merchant logo upload, automatic HSN/SAC tax calculation, and embedded dynamic UPI QR codes. 100% free and instant PDF export." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free GST Invoice & Dynamic UPI QR Generator — Paisape" />
<meta property="og:description" content="Create GST invoices with logo upload & dynamic UPI QR codes. Download A4 PDF instantly." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/gst-invoice-generator" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="/js/tailwind.config.js"></script>
<link rel="stylesheet" href="/css/style.css">

<!-- QRCode.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<!-- html2pdf.js Library for Client-Side PDF Generation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
  body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Paper Invoice Styles for Screen & Print */
  .tally-invoice {
    font-family: 'Inter', sans-serif;
    color: #0f172a;
    background: #ffffff;
    border: 2px solid #0f172a !important;
  }
  .tally-table th, .tally-table td {
    border: 1px solid #0f172a !important;
    padding: 5px 8px;
    font-size: 11.5px;
  }

  /* Strict Print Enforcement Rules (Preserves Borders & Backgrounds) */
  @media print {
    * {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
      color-adjust: exact !important;
    }
    body {
      background: #ffffff !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    body * {
      visibility: hidden;
    }
    #invoicePaperArea, #invoicePaperArea * {
      visibility: visible;
    }
    #invoicePaperArea {
      position: absolute;
      left: 0;
      top: 0;
      width: 100% !important;
      margin: 0 !important;
      padding: 16px !important;
      box-shadow: none !important;
      border: 2px solid #0f172a !important;
      box-sizing: border-box !important;
    }
    .tally-table th, .tally-table td {
      border: 1px solid #0f172a !important;
    }
    .no-print {
      display: none !important;
    }
  }
</style>
</head>

<body class="bg-slate-50 text-body antialiased">
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-0 inset-x-0 z-50 transition-all duration-500 no-print">
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

  <!-- Header Banner -->
  <div class="mx-auto max-w-site px-5 mb-8 text-center no-print">
    <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Merchant Tool</span>
    <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">GST Invoice &amp; Dynamic UPI QR Generator</h1>
    <p class="mt-2 text-body text-sm sm:text-base max-w-2xl mx-auto">Create professional, Rule 46 compliant Indian GST invoices with custom logo upload, automatic HSN tax calculations, and scannable UPI QR codes.</p>
  </div>

  <!-- Action Bar -->
  <div class="mx-auto max-w-site px-5 mb-8 no-print">
    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm flex flex-wrap items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <label class="cursor-pointer bg-brandLt hover:bg-brand/10 text-brand text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          Upload Company Logo
          <input type="file" id="logoUploadInput" accept="image/*" class="hidden" onchange="handleLogoUpload(this)">
        </label>
        <button onclick="removeLogo()" id="removeLogoBtn" class="hidden text-xs font-bold text-rose-600 hover:text-rose-700 bg-rose-50 px-3 py-2.5 rounded-xl border border-rose-100 transition">Remove Logo</button>
      </div>

      <div class="flex items-center gap-3">
        <button onclick="downloadPDFFile()" class="flex items-center gap-1.5 bg-slate-800 hover:bg-slate-900 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
          Download PDF
        </button>
        <button onclick="sharePDFInvoice()" class="flex items-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
          Share PDF File
        </button>
        <button onclick="window.print()" class="flex items-center gap-1.5 bg-brand hover:bg-brandDk text-white text-xs font-bold px-5 py-2.5 rounded-xl transition shadow-lg shadow-brand/20">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
          Print Invoice
        </button>
      </div>
    </div>
  </div>

  <!-- Dual-Panel Layout -->
  <div class="mx-auto max-w-site px-5 grid grid-cols-1 lg:grid-cols-12 gap-8">

    <!-- Left Panel: Input Controls (Col 5) -->
    <div class="lg:col-span-5 space-y-6 no-print">
      
      <!-- Tax Mode & Invoice Meta -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-4">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">1. Invoice Settings</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Tax Supply Type</label>
          <select id="taxModeSelect" onchange="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
            <option value="INTRA">Intra-State (Same State — CGST + SGST)</option>
            <option value="INTER">Inter-State (Different State — IGST)</option>
          </select>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Invoice No.</label>
            <input type="text" id="invNoInput" value="INV-2026-001" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Invoice Date</label>
            <input type="date" id="invDateInput" onchange="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>
      </div>

      <!-- Merchant Business Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">2. Your Business Info</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Business Name</label>
          <input type="text" id="mNameInput" value="Paisape Merchant Store" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Your GSTIN</label>
            <input type="text" id="mGstinInput" value="27AAAAA0000A1Z5" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">State &amp; Code</label>
            <input type="text" id="mStateInput" value="27 - Maharashtra" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Address</label>
          <input type="text" id="mAddrInput" value="Plot 42, FinTech Hub, BKC, Mumbai 400051" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Bank & Payment Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">3. Bank &amp; UPI QR Details</h3>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">UPI VPA Handle</label>
            <input type="text" id="mUpiVpaInput" value="paisape@icici" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Payee Name</label>
            <input type="text" id="mPayeeNameInput" value="Paisape Merchant" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Bank Name</label>
            <input type="text" id="mBankNameInput" value="ICICI Bank Ltd" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">IFSC Code</label>
            <input type="text" id="mIfscInput" value="ICIC0000104" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Account Number</label>
          <input type="text" id="mAccNoInput" value="010405009876" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Customer Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">4. Billed To (Customer)</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Customer Business Name</label>
          <input type="text" id="cNameInput" value="Apex Global Tech Ltd" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Customer GSTIN</label>
            <input type="text" id="cGstinInput" value="27BBBBB1111B2Z3" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Customer State</label>
            <input type="text" id="cStateInput" value="27 - Maharashtra" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Address</label>
          <input type="text" id="cAddrInput" value="Suite 302, Tech Park, Andheri East, Mumbai 400069" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Itemized Table Controls -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <div class="flex items-center justify-between">
          <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">5. Particulars &amp; Tax</h3>
          <button onclick="addItemRow()" class="text-xs font-bold text-brand hover:text-brandDk bg-brandLt px-3 py-1.5 rounded-lg transition">+ Add Item</button>
        </div>

        <div id="itemInputsContainer" class="space-y-3">
          <!-- Item Rows Injected Dynamically -->
        </div>
      </div>

    </div>

    <!-- Right Panel: Live Tally-Style Paper Invoice (Col 7) -->
    <div class="lg:col-span-7">
      <div id="invoicePaperArea" class="tally-invoice p-6 border-2 border-slate-900 shadow-2xl rounded-sm bg-white text-slate-900 relative">

        <!-- Tally Header -->
        <div class="border-b-2 border-slate-900 pb-3 flex items-start justify-between">
          <div class="flex items-center gap-4">
            <div id="logoContainer" class="hidden">
              <img id="mLogoImg" src="" alt="Logo" class="h-14 max-w-[140px] object-contain">
            </div>
            <div>
              <h2 id="prevMName" class="text-lg font-black uppercase tracking-tight text-slate-900"></h2>
              <p id="prevMAddr" class="text-[11px] font-medium text-slate-700 mt-0.5 max-w-xs"></p>
              <p class="text-[11px] font-semibold text-slate-800 mt-1">
                GSTIN: <span id="prevMGstin" class="font-bold font-mono"></span> | State: <span id="prevMState"></span>
              </p>
            </div>
          </div>

          <div class="text-right">
            <h2 class="text-xl font-black uppercase tracking-widest text-slate-900 border-2 border-slate-900 px-3 py-1 inline-block">TAX INVOICE</h2>
            <p class="text-[11px] font-bold text-slate-700 mt-2">Inv No: <span id="prevInvNo" class="font-mono text-slate-900"></span></p>
            <p class="text-[11px] font-medium text-slate-700">Date: <span id="prevInvDate" class="font-mono"></span></p>
          </div>
        </div>

        <!-- Billed To / Shipped To Grid -->
        <div class="grid grid-cols-2 border-b-2 border-slate-900 text-[11.5px]">
          <div class="p-2.5 border-r-2 border-slate-900">
            <p class="font-bold text-[10.5px] uppercase tracking-wider text-slate-500 mb-1">Billed To (Buyer):</p>
            <p id="prevCName" class="font-extrabold text-slate-900"></p>
            <p id="prevCAddr" class="text-slate-700 mt-0.5"></p>
            <p class="mt-1 font-semibold text-slate-800">GSTIN: <span id="prevCGstin" class="font-mono font-bold"></span></p>
            <p class="text-slate-700">State: <span id="prevCState"></span></p>
          </div>

          <div class="p-2.5 bg-slate-50/50">
            <p class="font-bold text-[10.5px] uppercase tracking-wider text-slate-500 mb-1">Place of Supply &amp; Transport:</p>
            <p class="font-semibold text-slate-800">Place of Supply: <span id="prevPos"></span></p>
            <p class="text-slate-700">Reverse Charge: <span class="font-bold text-slate-900">NO</span></p>
            <p class="text-slate-700 mt-1">Payment Mode: <span class="font-bold text-slate-900">UPI / Bank Transfer</span></p>
          </div>
        </div>

        <!-- Tally Particulars Table -->
        <div class="mt-3">
          <table class="w-full text-left border-collapse tally-table">
            <thead>
              <tr class="bg-slate-100 font-bold uppercase text-[10.5px] text-slate-900">
                <th class="w-8 text-center">S.N.</th>
                <th>Description of Goods / Services</th>
                <th class="w-20 text-center">HSN/SAC</th>
                <th class="w-12 text-center">Qty</th>
                <th class="w-20 text-right">Rate (₹)</th>
                <th class="w-16 text-center">GST %</th>
                <th class="w-24 text-right">Amount (₹)</th>
              </tr>
            </thead>
            <tbody id="tallyItemRows">
              <!-- Item rows injected dynamically -->
            </tbody>
          </table>
        </div>

        <!-- Tax Totals & Currency Words -->
        <div class="grid grid-cols-12 border-2 border-slate-900 mt-3 text-[11.5px]">
          <div class="col-span-7 p-3 border-r-2 border-slate-900 flex flex-col justify-between">
            <div>
              <p class="font-bold text-[10.5px] uppercase text-slate-500">Amount Chargeable (in words):</p>
              <p id="prevAmountWords" class="font-extrabold text-slate-900 mt-1 capitalize leading-snug"></p>
            </div>
            
            <div class="mt-4 pt-3 border-t border-slate-200">
              <p class="font-bold text-[10.5px] uppercase text-slate-500">Bank Details for Transfer:</p>
              <p class="text-slate-800">Bank: <strong id="prevBankName"></strong> | IFSC: <strong id="prevIfsc" class="font-mono"></strong></p>
              <p class="text-slate-800">A/c No: <strong id="prevAccNo" class="font-mono"></strong> | VPA: <strong id="prevUpiVpa" class="font-mono text-brand"></strong></p>
            </div>
          </div>

          <div class="col-span-5 p-2.5 space-y-1.5 font-medium">
            <div class="flex justify-between">
              <span>Taxable Subtotal:</span>
              <span id="prevSubtotal" class="font-mono font-bold">₹0.00</span>
            </div>
            
            <div id="cgstRow" class="flex justify-between text-slate-700">
              <span>CGST:</span>
              <span id="prevCgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div id="sgstRow" class="flex justify-between text-slate-700 border-b border-slate-200 pb-1.5">
              <span>SGST:</span>
              <span id="prevSgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div id="igstRow" class="flex justify-between text-slate-700 border-b border-slate-200 pb-1.5 hidden">
              <span>IGST:</span>
              <span id="prevIgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div class="flex justify-between text-sm font-black text-slate-900 pt-1">
              <span>Grand Total:</span>
              <span id="prevGrandTotal" class="font-mono text-base text-brand">₹0.00</span>
            </div>
          </div>
        </div>

        <!-- HSN Tax Breakdown Summary Box -->
        <div class="mt-3 border border-slate-900 p-2 text-[10.5px]">
          <p class="font-bold uppercase text-slate-600 mb-1">Tax Amount Breakdown (HSN/SAC Wise):</p>
          <table class="w-full text-center border-collapse tally-table">
            <thead>
              <tr class="bg-slate-50 font-bold uppercase text-[9.5px]">
                <th>HSN/SAC</th>
                <th>Taxable Value (₹)</th>
                <th>CGST (₹)</th>
                <th>SGST (₹)</th>
                <th>IGST (₹)</th>
                <th>Total Tax (₹)</th>
              </tr>
            </thead>
            <tbody id="hsnTaxRows">
              <!-- HSN tax summary injected dynamically -->
            </tbody>
          </table>
        </div>

        <!-- Payment QR Code + Signatory Footer -->
        <div class="mt-4 pt-3 border-t-2 border-slate-900 flex items-end justify-between">
          
          <!-- Dynamic UPI QR Code -->
          <div class="flex items-center gap-3">
            <div id="qrcode" class="p-1.5 border border-slate-300 rounded bg-white shrink-0"></div>
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Scan &amp; Pay via UPI</p>
              <p class="text-[11px] font-extrabold text-slate-900">Instant UPI Payment</p>
              <p class="text-[9.5px] text-slate-500">Supports GPay, PhonePe, Paytm, BHIM</p>
            </div>
          </div>

          <!-- Signatory Box -->
          <div class="text-right">
            <p class="text-[10px] font-bold text-slate-500">For <span id="prevSignatoryCompany" class="text-slate-900 uppercase"></span></p>
            <div class="h-10"></div>
            <p class="text-[11px] font-bold border-t border-slate-400 pt-0.5 inline-block text-slate-900">Authorized Signatory</p>
          </div>

        </div>

        <!-- Powered By Paisape Footer Badge -->
        <div class="mt-6 pt-2 border-t border-slate-200 flex items-center justify-center gap-1.5 text-[10px] font-semibold text-slate-500">
          <span>Powered by</span>
          <img src="/assets/logo.svg" alt="Paisape" class="h-3.5 w-auto inline-block object-contain" width="100" height="24">
          <span>&mdash; Enterprise Payment Orchestration &amp; Banking Rails</span>
        </div>

      </div>
    </div>

  </div>

</main>

<footer class="bg-night text-slate-300 no-print">
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
          <li><a href="/gst-invoice-generator" class="transition hover:text-brand text-mint font-semibold">GST Invoice Generator</a></li>
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

<script src="/js/main.js"></script>

<script>
// Initial State & Items Array
let items = [
  { desc: "Enterprise Software License & API Integration", hsn: "998313", qty: 1, rate: 15000, gstRate: 18 },
  { desc: "Instant Soundbox Audio Terminal Hardware", hsn: "851762", qty: 2, rate: 2500, gstRate: 18 }
];

let qrCodeInstance = null;

// Initialize Date Input with Today
document.addEventListener("DOMContentLoaded", () => {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('invDateInput').value = today;
  
  // Load saved logo from localStorage if available
  const savedLogo = localStorage.getItem('paisape_merchant_logo');
  if (savedLogo) {
    document.getElementById('mLogoImg').src = savedLogo;
    document.getElementById('logoContainer').classList.remove('hidden');
    document.getElementById('removeLogoBtn').classList.remove('hidden');
  }

  renderItemInputs();
  updateInvoice();
});

// Render Item Input Controls
function renderItemInputs() {
  const container = document.getElementById('itemInputsContainer');
  container.innerHTML = '';

  items.forEach((item, index) => {
    const div = document.createElement('div');
    div.className = "p-3 bg-slate-50 rounded-xl border border-slate-200 space-y-2 text-xs";
    div.innerHTML = `
      <div class="flex items-center justify-between gap-2">
        <span class="font-extrabold text-slate-500">#${index + 1}</span>
        <input type="text" value="${item.desc}" oninput="updateItem(${index}, 'desc', this.value)" placeholder="Description" class="w-full bg-white border border-slate-200 rounded-lg px-2.5 py-1.5 font-semibold text-ink focus:border-brand focus:outline-none">
        ${items.length > 1 ? `<button onclick="removeItemRow(${index})" class="text-rose-600 font-bold px-2 py-1 hover:bg-rose-100 rounded">✕</button>` : ''}
      </div>
      <div class="grid grid-cols-4 gap-2">
        <div>
          <label class="block text-[10px] font-bold text-slate-500">HSN/SAC</label>
          <input type="text" value="${item.hsn}" oninput="updateItem(${index}, 'hsn', this.value)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-mono text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">Qty</label>
          <input type="number" value="${item.qty}" min="1" oninput="updateItem(${index}, 'qty', parseFloat(this.value) || 1)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-semibold text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">Rate (₹)</label>
          <input type="number" value="${item.rate}" min="0" oninput="updateItem(${index}, 'rate', parseFloat(this.value) || 0)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-semibold text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">GST %</label>
          <select onchange="updateItem(${index}, 'gstRate', parseFloat(this.value))" class="w-full bg-white border border-slate-200 rounded-lg px-1 py-1 font-semibold text-ink focus:outline-none">
            <option value="0" ${item.gstRate === 0 ? 'selected' : ''}>0%</option>
            <option value="5" ${item.gstRate === 5 ? 'selected' : ''}>5%</option>
            <option value="12" ${item.gstRate === 12 ? 'selected' : ''}>12%</option>
            <option value="18" ${item.gstRate === 18 ? 'selected' : ''}>18%</option>
            <option value="28" ${item.gstRate === 28 ? 'selected' : ''}>28%</option>
          </select>
        </div>
      </div>
    `;
    container.appendChild(div);
  });
}

function addItemRow() {
  items.push({ desc: "New Product / Service", hsn: "9983", qty: 1, rate: 1000, gstRate: 18 });
  renderItemInputs();
  updateInvoice();
}

function removeItemRow(index) {
  if (items.length > 1) {
    items.splice(index, 1);
    renderItemInputs();
    updateInvoice();
  }
}

function updateItem(index, key, val) {
  items[index][key] = val;
  updateInvoice();
}

// Logo Handling
function handleLogoUpload(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const dataUrl = e.target.result;
      document.getElementById('mLogoImg').src = dataUrl;
      document.getElementById('logoContainer').classList.remove('hidden');
      document.getElementById('removeLogoBtn').classList.remove('hidden');
      localStorage.setItem('paisape_merchant_logo', dataUrl);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function removeLogo() {
  document.getElementById('mLogoImg').src = '';
  document.getElementById('logoContainer').classList.add('hidden');
  document.getElementById('removeLogoBtn').classList.add('hidden');
  localStorage.removeItem('paisape_merchant_logo');
}

// Update Entire Invoice Preview & QR Code
function updateInvoice() {
  const taxMode = document.getElementById('taxModeSelect').value;
  const mName = document.getElementById('mNameInput').value || 'Merchant Business';
  const mGstin = document.getElementById('mGstinInput').value || '-';
  const mState = document.getElementById('mStateInput').value || '-';
  const mAddr = document.getElementById('mAddrInput').value || '-';

  const mBank = document.getElementById('mBankNameInput').value || '-';
  const mIfsc = document.getElementById('mIfscInput').value || '-';
  const mAccNo = document.getElementById('mAccNoInput').value || '-';
  const mUpiVpa = document.getElementById('mUpiVpaInput').value || 'paisape@icici';
  const mPayeeName = document.getElementById('mPayeeNameInput').value || mName;

  const cName = document.getElementById('cNameInput').value || 'Client Name';
  const cGstin = document.getElementById('cGstinInput').value || 'N/A';
  const cState = document.getElementById('cStateInput').value || '-';
  const cAddr = document.getElementById('cAddrInput').value || '-';

  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const invDate = document.getElementById('invDateInput').value || '';

  // Update Text Elements
  document.getElementById('prevMName').innerText = mName;
  document.getElementById('prevMAddr').innerText = mAddr;
  document.getElementById('prevMGstin').innerText = mGstin;
  document.getElementById('prevMState').innerText = mState;
  document.getElementById('prevSignatoryCompany').innerText = mName;

  document.getElementById('prevCName').innerText = cName;
  document.getElementById('prevCAddr').innerText = cAddr;
  document.getElementById('prevCGstin').innerText = cGstin;
  document.getElementById('prevCState').innerText = cState;
  document.getElementById('prevPos').innerText = cState;

  document.getElementById('prevInvNo').innerText = invNo;
  document.getElementById('prevInvDate').innerText = invDate;

  document.getElementById('prevBankName').innerText = mBank;
  document.getElementById('prevIfsc').innerText = mIfsc;
  document.getElementById('prevAccNo').innerText = mAccNo;
  document.getElementById('prevUpiVpa').innerText = mUpiVpa;

  // Render Particulars Table & Calculations
  let subtotal = 0;
  let totalCgst = 0;
  let totalSgst = 0;
  let totalIgst = 0;

  const tbody = document.getElementById('tallyItemRows');
  tbody.innerHTML = '';

  const hsnMap = {};

  items.forEach((item, idx) => {
    const itemSubtotal = item.qty * item.rate;
    subtotal += itemSubtotal;

    let itemCgst = 0;
    let itemSgst = 0;
    let itemIgst = 0;

    if (taxMode === 'INTRA') {
      itemCgst = itemSubtotal * (item.gstRate / 2 / 100);
      itemSgst = itemSubtotal * (item.gstRate / 2 / 100);
      totalCgst += itemCgst;
      totalSgst += itemSgst;
    } else {
      itemIgst = itemSubtotal * (item.gstRate / 100);
      totalIgst += itemIgst;
    }

    // Populate HSN Map
    if (!hsnMap[item.hsn]) {
      hsnMap[item.hsn] = { taxable: 0, cgst: 0, sgst: 0, igst: 0, totalTax: 0 };
    }
    hsnMap[item.hsn].taxable += itemSubtotal;
    hsnMap[item.hsn].cgst += itemCgst;
    hsnMap[item.hsn].sgst += itemSgst;
    hsnMap[item.hsn].igst += itemIgst;
    hsnMap[item.hsn].totalTax += (itemCgst + itemSgst + itemIgst);

    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td class="text-center font-mono">${idx + 1}</td>
      <td class="font-semibold">${item.desc}</td>
      <td class="text-center font-mono">${item.hsn}</td>
      <td class="text-center font-mono font-bold">${item.qty}</td>
      <td class="text-right font-mono">₹${item.rate.toFixed(2)}</td>
      <td class="text-center font-mono">${item.gstRate}%</td>
      <td class="text-right font-mono font-bold">₹${itemSubtotal.toFixed(2)}</td>
    `;
    tbody.appendChild(tr);
  });

  const grandTotal = Math.round(subtotal + totalCgst + totalSgst + totalIgst);

  document.getElementById('prevSubtotal').innerText = '₹' + subtotal.toFixed(2);

  if (taxMode === 'INTRA') {
    document.getElementById('cgstRow').classList.remove('hidden');
    document.getElementById('sgstRow').classList.remove('hidden');
    document.getElementById('igstRow').classList.add('hidden');

    document.getElementById('prevCgst').innerText = '₹' + totalCgst.toFixed(2);
    document.getElementById('prevSgst').innerText = '₹' + totalSgst.toFixed(2);
  } else {
    document.getElementById('cgstRow').classList.add('hidden');
    document.getElementById('sgstRow').classList.add('hidden');
    document.getElementById('igstRow').classList.remove('hidden');

    document.getElementById('prevIgst').innerText = '₹' + totalIgst.toFixed(2);
  }

  document.getElementById('prevGrandTotal').innerText = '₹' + grandTotal.toLocaleString('en-IN') + '.00';
  document.getElementById('prevAmountWords').innerText = numberToWords(grandTotal) + ' Rupees Only';

  // Render HSN Tax Summary Rows
  const hsnTbody = document.getElementById('hsnTaxRows');
  hsnTbody.innerHTML = '';
  for (const hsn in hsnMap) {
    const row = hsnMap[hsn];
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td class="font-mono font-bold">${hsn}</td>
      <td class="font-mono">₹${row.taxable.toFixed(2)}</td>
      <td class="font-mono">₹${row.cgst.toFixed(2)}</td>
      <td class="font-mono">₹${row.sgst.toFixed(2)}</td>
      <td class="font-mono">₹${row.igst.toFixed(2)}</td>
      <td class="font-mono font-bold">₹${row.totalTax.toFixed(2)}</td>
    `;
    hsnTbody.appendChild(tr);
  }

  // Render UPI QR Code
  renderUPIQR(mUpiVpa, mPayeeName, grandTotal, invNo);
}

// Generate NPCI Compatible Dynamic UPI QR Code
function renderUPIQR(vpa, payee, amount, invNo) {
  const qrContainer = document.getElementById('qrcode');
  qrContainer.innerHTML = '';

  const upiUri = `upi://pay?pa=${encodeURIComponent(vpa)}&pn=${encodeURIComponent(payee)}&am=${amount}&cu=INR&tn=Invoice_${encodeURIComponent(invNo)}`;

  qrCodeInstance = new QRCode(qrContainer, {
    text: upiUri,
    width: 76,
    height: 76,
    colorDark: "#0f172a",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.M
  });
}

// Indian Currency Number to Words Converter
function numberToWords(num) {
  const a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ', 'Twelve ', 'Thirteen ', 'Fourteen ', 'Fifteen ', 'Sixteen ', 'Seventeen ', 'Eighteen ', 'Nineteen '];
  const b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

  if ((num = num.toString()).length > 9) return 'Amount Overflow';
  const n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
  if (!n) return '';
  let str = '';
  str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
  str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
  str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
  str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
  str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
  return str.trim();
}

// Download PDF File via html2pdf
function downloadPDFFile(callback) {
  const element = document.getElementById('invoicePaperArea');
  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const filename = `gst-invoice-${invNo.toLowerCase().replace(/[^a-z0-9]/g, '-')}.pdf`;

  const opt = {
    margin: [6, 6, 6, 6],
    filename: filename,
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true, letterRendering: true },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
  };

  const pdfPromise = html2pdf().set(opt).from(element);
  if (callback) {
    pdfPromise.outputPdf('blob').then(callback);
  } else {
    pdfPromise.save();
  }
}

// Native PDF Sharing via Web Share API or WhatsApp Fallback
function sharePDFInvoice() {
  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const filename = `gst-invoice-${invNo.toLowerCase().replace(/[^a-z0-9]/g, '-')}.pdf`;
  const mName = document.getElementById('mNameInput').value;
  const grandTotal = document.getElementById('prevGrandTotal').innerText;

  downloadPDFFile(function(pdfBlob) {
    const file = new File([pdfBlob], filename, { type: 'application/pdf' });

    if (navigator.canShare && navigator.canShare({ files: [file] })) {
      navigator.share({
        files: [file],
        title: `GST Invoice ${invNo}`,
        text: `GST Invoice ${invNo} from ${mName} for ${grandTotal}`
      }).catch(err => console.log('Share dismissed:', err));
    } else {
      // Direct PDF download + WhatsApp text fallback if Web Share API file attachment is unhandled
      const a = document.createElement('a');
      a.href = URL.createObjectURL(pdfBlob);
      a.download = filename;
      a.click();

      const msg = `Hello! Please find your GST Invoice *${invNo}* from *${mName}* for *${grandTotal}*.\n\nThank you for your business!`;
      window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(msg)}`, '_blank');
    }
  });
}
</script>
</body>
</html>
