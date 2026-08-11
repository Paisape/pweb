<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free UPI QR Code Generator — Create Custom Paisape UPI QR Codes</title>
<meta name="description" content="Generate free, instant, and customized UPI QR codes for your business. Accept payments directly via GPay, PhonePe, Paytm, BHIM, and any UPI app." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free UPI QR Code Generator — Paisape" />
<meta property="og:description" content="Generate instant customized UPI QR codes with your business name and Paisape branding." />
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

<!-- QRCode.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<style>
  body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .dropdown-menu {
    transform-origin: top left;
  }
  .dropdown-parent:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
  }
</style>
</head>

<body class="bg-slate-50 text-body antialiased">
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
          <button class="nav-link active text-brand flex items-center gap-1">
            Free Tools
            <svg class="h-3.5 w-3.5 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="dropdown-menu absolute left-0 top-full mt-2 w-60 rounded-2xl border border-slate-100 bg-white p-2.5 shadow-xl opacity-0 invisible transition-all duration-200">
            <a href="/upi-qr-generator" class="flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-[14px] font-semibold text-brand bg-brandLt/60">
              <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
              UPI QR Code Generator
            </a>
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
      
      <div class="rounded-xl bg-blue-50/60 p-2 my-1">
        <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-brand">Free Tools</p>
        <a href="/upi-qr-generator" class="block rounded-lg px-3 py-2 text-[13.5px] font-semibold text-brand bg-white shadow-sm">UPI QR Code Generator</a>
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
      <p class="mt-3 text-body text-[15px] leading-relaxed">Generate zero-fee custom UPI QR codes for your business. Works seamlessly with Google Pay, PhonePe, Paytm, BHIM, and any UPI app.</p>
    </div>

    <!-- Generator Interface Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      
      <!-- LEFT: Form Options -->
      <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        
        <!-- Tabs -->
        <div class="flex border-b border-slate-200 mb-6 gap-6">
          <button id="tabDetails" onclick="switchTab('details')" class="pb-3 text-sm font-bold border-b-2 border-brand text-brand transition">Payment Details</button>
          <button id="tabCustom" onclick="switchTab('custom')" class="pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 hover:text-slate-800 transition">Customize QR Code</button>
        </div>

        <!-- Details Tab Content -->
        <div id="panelDetails" class="space-y-5">
          <div>
            <label for="merchantName" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Merchant / Payee Name <span class="text-rose-500">*</span></label>
            <input type="text" id="merchantName" value="Paisape Store" placeholder="e.g. Mandirsetuu" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
          </div>

          <div>
            <label for="upiId" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">UPI ID (VPA) <span class="text-rose-500">*</span></label>
            <input type="text" id="upiId" value="merchant@paisape" placeholder="e.g. amit.gilra48@kotak" oninput="updateQR()" class="w-full px-4 py-3 border border-slate-300 rounded-xl text-sm font-medium focus:border-brand focus:ring-2 focus:ring-brand/20 outline-none transition">
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
              <input type="color" id="headerColor" value="#0066FF" onchange="updateColors()" class="h-10 w-16 cursor-pointer rounded-lg border border-slate-300 p-1">
              <span class="text-xs font-mono text-slate-500" id="headerHex">#0066FF</span>
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
            <li>Use high resolution download for physical shop counter standees</li>
          </ul>
        </div>
      </div>

      <!-- RIGHT: Live QR Preview Card (Matching Reference Design) -->
      <div class="lg:col-span-5 flex flex-col items-center">
        
        <!-- Standee / Preview Card Frame -->
        <div id="qrCardFrame" class="w-full max-w-sm bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden text-center transition">
          
          <!-- Dynamic Header Banner -->
          <div id="cardHeader" class="bg-brand text-white py-4 px-6 font-extrabold text-lg uppercase tracking-wider truncate shadow-inner">
            <span id="previewName">PAISAPE STORE</span>
          </div>

          <div class="p-6 flex flex-col items-center">
            
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
            <p class="mt-4 text-[13px] font-bold text-brand">Scan and pay with any UPI app</p>

            <!-- UPI App Badges Row -->
            <div class="mt-3 flex flex-wrap items-center justify-center gap-3 border-t border-b border-slate-100 py-3 px-2 w-full">
              <span class="text-[10px] font-black text-slate-500 tracking-tighter border px-1.5 py-0.5 rounded bg-slate-50">BHIM</span>
              <span class="text-[10px] font-black text-blue-600 tracking-tighter border px-1.5 py-0.5 rounded bg-slate-50">UPI</span>
              <span class="text-[10.5px] font-bold text-slate-700">G Pay</span>
              <span class="text-[10.5px] font-bold text-purple-700">PhonePe</span>
              <span class="text-[10.5px] font-bold text-cyan-600">Paytm</span>
              <span class="text-[10.5px] font-bold text-amber-600">amazon pay</span>
            </div>

            <!-- Powered By Paisape Footer (Replacing generic footer) -->
            <div class="mt-4 flex items-center justify-center gap-2">
              <span class="text-[11.5px] font-medium text-slate-400">Powered by</span>
              <img src="/assets/logo.svg" alt="Paisape" class="h-4.5 w-auto">
            </div>
          </div>
        </div>

        <!-- Action Buttons Bar -->
        <div class="w-full max-w-sm mt-5 grid grid-cols-3 gap-2.5">
          <button onclick="printQRCard()" class="flex items-center justify-center gap-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Print
          </button>
          <button onclick="shareQRLink()" class="flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            Share
          </button>
          <button onclick="downloadQRImage()" class="flex items-center justify-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold py-3 rounded-xl transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Download
          </button>
        </div>

        <div id="shareStatus" class="mt-2 text-xs font-semibold text-emerald-600 hidden">Link copied to clipboard!</div>
      </div>
    </div>
  </div>
</main>

<footer class="bg-night text-slate-300">
  <div class="mx-auto max-w-site px-5 py-16">
    <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">

      <div>
        <img src="/assets/logo-white.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
        <p class="mt-5 max-w-xs text-[13px] leading-relaxed text-slate-400">
          Payments. Everytime. Everywhere. Paisape Techfin Private Limited provides comprehensive payment
          solutions including issuing, acquiring, and transaction banking.
        </p>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Company</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/contact" class="transition hover:text-brand">About Us</a></li>
          <li><a href="/blog" class="transition hover:text-brand">Blog</a></li>
          <li><a href="/contact" class="transition hover:text-brand">Contact Us</a></li>
        </ul>
      </div>

      <div>
        <h2 class="font-display text-[13.5px] font-bold text-white">Free Tools</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/upi-qr-generator" class="transition hover:text-brand text-mint font-semibold">UPI QR Code Generator</a></li>
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
  const name = document.getElementById('merchantName').value.trim() || 'PAISAPE STORE';
  const upiId = document.getElementById('upiId').value.trim() || 'merchant@paisape';
  const amount = document.getElementById('amount').value.trim();
  const note = document.getElementById('note').value.trim();
  const colorDark = document.getElementById('qrColor').value || '#000000';
  const embedLogo = document.getElementById('showCenterLogo').checked;

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
    width: 260,
    height: 260,
    colorDark: colorDark,
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H
  });

  // Render onto Canvas with Logo Center Overlay
  setTimeout(() => {
    const qrImg = rawDiv.querySelector('img');
    const canvas = document.getElementById('qrCanvas');
    const ctx = canvas.getContext('2d');

    if (qrImg && qrImg.src) {
      const img = new Image();
      img.onload = () => {
        ctx.clearRect(0, 0, 280, 280);
        ctx.drawImage(img, 0, 0, 280, 280);

        if (embedLogo && paisapeLogo.complete && paisapeLogo.naturalWidth !== 0) {
          const logoSize = 54;
          const logoX = (280 - logoSize) / 2;
          const logoY = (280 - logoSize) / 2;

          // Background white circle behind center logo
          ctx.beginPath();
          ctx.arc(140, 140, 30, 0, 2 * Math.PI, false);
          ctx.fillStyle = '#FFFFFF';
          ctx.fill();
          ctx.lineWidth = 3;
          ctx.strokeStyle = '#0066FF';
          ctx.stroke();

          // Draw center logo
          ctx.drawImage(paisapeLogo, logoX, logoY, logoSize, logoSize);
        }
      };
      img.src = qrImg.src;
    }
  }, 100);
}

function downloadQRImage() {
  const canvas = document.getElementById('qrCanvas');
  const link = document.createElement('a');
  link.download = 'paisape-upi-qr-' + (document.getElementById('merchantName').value.trim().toLowerCase().replace(/[^a-z0-9]/g, '-') || 'qr') + '.png';
  link.href = canvas.toDataURL('image/png');
  link.click();
}

function printQRCard() {
  window.print();
}

function shareQRLink() {
  const name = document.getElementById('merchantName').value;
  const upiId = document.getElementById('upiId').value;
  const shareText = `Pay to ${name} (${upiId}) using Paisape UPI QR Code: ${window.location.href}`;
  
  if (navigator.clipboard) {
    navigator.clipboard.writeText(shareText);
    const msg = document.getElementById('shareStatus');
    msg.classList.remove('hidden');
    setTimeout(() => msg.classList.add('hidden'), 3000);
  }
}

// Initial draw on page load
window.addEventListener('DOMContentLoaded', () => {
  updateQR();
});
</script>
<script src="/js/main.js"></script>
</body>
</html>
