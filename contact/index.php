<?php
require_once '../core/errors.php';
$msgID = isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Contact Us — Paisape</title>
<meta name="description" content="Talk to Paisape about routing architecture, pricing and sandbox access. Replies within one business day." />
<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="/js/tailwind.config.js"></script>
<link rel="stylesheet" href="/css/style.css">
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
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
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>

  <div class="relative mx-auto max-w-3xl px-5 text-center">
    <p data-reveal class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand/20 bg-white/70 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand backdrop-blur">
      <span class="relative flex h-2 w-2">
        <span class="absolute inline-flex h-full w-full rounded-full bg-brand animate-ring"></span>
        <span class="relative inline-flex h-2 w-2 rounded-full bg-brand"></span>
      </span>
      Replies within one business day
    </p>
    <h1 class="font-display text-[36px] font-extrabold leading-[1.12] tracking-tight text-ink sm:text-[46px]">
      <span data-reveal data-delay="60" class="block">Tell us what you're building.</span>
      <span data-reveal data-delay="160" class="block text-brand">We'll map the rails.</span>
    </h1>
    <p data-reveal data-delay="260" class="mx-auto mt-6 max-w-xl text-[15.5px] leading-relaxed text-body">
      Share your volumes, payment methods and timelines. A solutions engineer will come back with a routing
      architecture, pricing and a sandbox you can test the same week.
    </p>
  </div>
</section>

<section class="bg-white pb-4">
  <div class="mx-auto grid max-w-site gap-5 px-5 sm:grid-cols-3">
    <a href="#form" data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
      <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
      </div>
      <h2 class="font-display text-[15px] font-bold text-ink">Talk to Sales</h2>
      <p class="mt-2 text-[13px] leading-relaxed text-body">Pricing, routing design and go-live plans for new volume.</p>
      <span class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">sales@paisape.in <span class="arrow">&rarr;</span></span>
    </a>
    <a href="#form" data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
      <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M12 22a10 10 0 1 0-10-10v4a3 3 0 0 0 3 3h1v-6H5"/><path d="M19 13h-1v6h1a3 3 0 0 0 3-3v-3"/></svg>
      </div>
      <h2 class="font-display text-[15px] font-bold text-ink">Merchant Support</h2>
      <p class="mt-2 text-[13px] leading-relaxed text-body">Live transactions, settlements and reconciliation queries.</p>
      <span class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">support@paisape.in <span class="arrow">&rarr;</span></span>
    </a>
    <a href="#form" data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
      <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
      <h2 class="font-display text-[15px] font-bold text-ink">Partnerships</h2>
      <p class="mt-2 text-[13px] leading-relaxed text-body">Banks, NBFCs, aggregators and platform integrations.</p>
      <span class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">partners@paisape.in <span class="arrow">&rarr;</span></span>
    </a>
  </div>
</section>

<section id="form" class="bg-gradient-to-b from-white via-[#F5FAFE] to-white py-20 md:py-24">
  <div class="mx-auto grid max-w-site gap-10 px-5 lg:grid-cols-[1.25fr_.75fr]">

    <div class="rounded-3xl border border-slate-100 bg-white p-7 shadow-[0_30px_70px_-40px_rgba(22,35,59,.35)] sm:p-9">
      <h2 class="font-display text-[22px] font-extrabold tracking-tight text-ink">Send us a message</h2>
      <p class="mt-2 text-[14px] text-body">Fields marked with an asterisk are required.</p>

      <form id="contactForm" action="/contact_us.php" method="POST" class="mt-8 space-y-5">
        <div class="grid gap-5 sm:grid-cols-2">
          <div>
            <label for="name" class="mb-2 block text-[13px] font-semibold text-ink">Full name *</label>
            <input type="text" name="name" id="name" required placeholder="Ananya Rao" class="field w-full rounded-xl border border-slate-200 bg-mist/60 px-4 py-3 text-[14px] text-ink placeholder:text-slate-400 focus:border-brand focus:outline-none">
          </div>
          <div>
            <label for="email" class="mb-2 block text-[13px] font-semibold text-ink">Work email *</label>
            <input type="email" id="email" name="email" required placeholder="ananya@company.com" class="field w-full rounded-xl border border-slate-200 bg-mist/60 px-4 py-3 text-[14px] text-ink placeholder:text-slate-400 focus:border-brand focus:outline-none">
          </div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
          <div>
            <label for="subject" class="mb-2 block text-[13px] font-semibold text-ink">Company *</label>
            <input type="text" id="subject" name="subject" required placeholder="Company name" class="field w-full rounded-xl border border-slate-200 bg-mist/60 px-4 py-3 text-[14px] text-ink placeholder:text-slate-400 focus:border-brand focus:outline-none">
          </div>
          <div>
            <label for="Phone" class="mb-2 block text-[13px] font-semibold text-ink">Mobile Number (10 digits) *</label>
            <input type="tel" id="Phone" name="Phone" required inputmode="numeric" maxlength="10" pattern="[6-9][0-9]{9}" title="Please enter a valid 10-digit mobile number starting with 6-9" placeholder="9876543210" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10); validatePhone();" class="field w-full rounded-xl border border-slate-200 bg-mist/60 px-4 py-3 text-[14px] text-ink placeholder:text-slate-400 focus:border-brand focus:outline-none">
            <p id="phoneError" class="mt-1.5 hidden text-[12px] font-medium text-rose-600">Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.</p>
          </div>
        </div>

        <div>
          <label for="message" class="mb-2 block text-[13px] font-semibold text-ink">Message *</label>
          <textarea id="message" name="message" rows="5" required placeholder="Current gateways, success rates you're seeing, and when you want to go live." class="field w-full resize-y rounded-xl border border-slate-200 bg-mist/60 px-4 py-3 text-[14px] text-ink placeholder:text-slate-400 focus:border-brand focus:outline-none"></textarea>
        </div>

        <!-- Honeypot for spam bots -->
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
          <input type="text" name="fax" tabindex="-1" autocomplete="off" placeholder="Fax">
        </div>
        
        <!-- Telemetry data for internal logs -->
        <input type="hidden" name="screen_resolution" id="screen_resolution" value="">
        <input type="hidden" name="timezone" id="timezone" value="">
        <input type="hidden" name="language" id="language" value="">
        <input type="hidden" name="location" id="location" value="">
        <input type="hidden" name="updte" id="updte" value="1">
        <input type="hidden" name="page" id="page" value="contact-us">

        <!-- Cloudflare Turnstile Verification -->
        <div class="cf-turnstile my-4" data-sitekey="0x4AAAAAAEK5xfziz4tzXcoo" data-action="turnstile-spin-v2"></div>

        <div>
          <button type="submit" id="submitBtn" class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-brand px-7 py-4 text-[15px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk disabled:opacity-50 sm:w-auto">
            <span>Send Message</span>
            <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </button>
        </div>

        <!-- Error Alert -->
        <div id="formErrorBox" class="hidden rounded-xl bg-rose-50 p-4 text-[13.5px] font-medium text-rose-700 mt-4">
          <span id="formErrorText">Some required fields are invalid. Please check and try again.</span>
        </div>
      </form>

      <!-- Floating Thank You Modal Popup -->
      <div id="formSuccessModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/60 p-4 backdrop-blur-sm transition-all duration-300">
        <div class="relative w-full max-w-md scale-100 rounded-3xl border border-slate-100 bg-white p-8 text-center shadow-2xl transition-all sm:p-10">
          <button type="button" onclick="closeSuccessModal()" class="absolute right-4 top-4 flex h-9 w-9 items-center justify-center rounded-full bg-slate-100 text-slate-500 hover:bg-slate-200 hover:text-slate-800 transition" aria-label="Close popup">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6 6 18M6 6l12 12"/></svg>
          </button>
          <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 shadow-inner">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
          </div>
          <h3 class="mt-5 font-display text-[26px] font-extrabold tracking-tight text-ink">Thank You!</h3>
          <p class="mt-3 text-[15.5px] leading-relaxed text-body">
            We have received your message. A solutions engineer will connect with you shortly!
          </p>
          <button type="button" onclick="closeSuccessModal()" class="mt-7 inline-flex w-full items-center justify-center rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-lg shadow-brand/30 transition hover:-translate-y-0.5 hover:bg-brandDk">
            OK, Got it
          </button>
        </div>
      </div>

      <script>
        function captureTelemetry() {
          try {
            document.getElementById('screen_resolution').value = window.screen.width + 'x' + window.screen.height;
            document.getElementById('timezone').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
            document.getElementById('language').value = navigator.language || navigator.userLanguage;
            if (Intl.DateTimeFormat().resolvedOptions().timeZone) {
              document.getElementById('location').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
            }
          } catch (e) {}
        }

        function validatePhone() {
          const phoneInput = document.getElementById('Phone');
          const phoneErr = document.getElementById('phoneError');
          const cleanVal = phoneInput.value.replace(/\D/g, '');
          
          if (cleanVal.length > 0 && !/^[6-9]\d{9}$/.test(cleanVal)) {
            phoneErr.classList.remove('hidden');
            return false;
          } else {
            phoneErr.classList.add('hidden');
            return true;
          }
        }

        function isGibberish(str) {
          str = str.trim().toLowerCase();
          if (str.length < 3) return false;
          if (/(.)\1{3,}/.test(str)) return true;
          if (/(.{2,3})\1{2,}/.test(str)) return true;
          const mashPatterns = ['asdf', 'sdfg', 'dfgh', 'fghj', 'ghjk', 'hjkl', 'qwert', 'werty', 'ertyu', 'rtyui', 'tyuio', 'yuiop', 'zxcv', 'xcvb', 'cvbn', 'vbnm', 'fsdf', 'dssf', 'gfsg', 'hdhd', 'dggf', 'fdgd', 'hddd'];
          for (let pat of mashPatterns) {
            if (str.includes(pat)) return true;
          }
          const words = str.split(/\s+/);
          for (let w of words) {
            const clean = w.replace(/[^a-z]/g, '');
            if (clean.length >= 4) {
              const vowels = clean.match(/[aeiouy]/g);
              if (!vowels) return true;
            }
          }
          return false;
        }

        function showSuccessModal() {
          const modal = document.getElementById('formSuccessModal');
          modal.classList.remove('hidden');
          modal.classList.add('flex');
        }

        function closeSuccessModal() {
          const modal = document.getElementById('formSuccessModal');
          modal.classList.add('hidden');
          modal.classList.remove('flex');
        }

        document.getElementById('contactForm').addEventListener('submit', function(e) {
          e.preventDefault();
          captureTelemetry();

          const nameInput = document.getElementById('name');
          const emailInput = document.getElementById('email');
          const subjectInput = document.getElementById('subject');
          const messageInput = document.getElementById('message');
          const phoneInput = document.getElementById('Phone');
          
          const cleanPhone = phoneInput.value.replace(/\D/g, '');
          const phoneErr = document.getElementById('phoneError');
          const errorBox = document.getElementById('formErrorBox');
          const errorText = document.getElementById('formErrorText');

          errorBox.classList.add('hidden');

          if (isGibberish(nameInput.value)) {
            errorText.innerText = "Please enter a valid Full Name instead of random characters.";
            errorBox.classList.remove('hidden');
            nameInput.focus();
            return false;
          }

          if (isGibberish(subjectInput.value)) {
            errorText.innerText = "Please enter a valid Company Name instead of random characters.";
            errorBox.classList.remove('hidden');
            subjectInput.focus();
            return false;
          }

          if (messageInput.value.trim().length < 10 || isGibberish(messageInput.value)) {
            errorText.innerText = "Please enter a detailed message (at least 10 meaningful characters).";
            errorBox.classList.remove('hidden');
            messageInput.focus();
            return false;
          }

          if (!/^[6-9]\d{9}$/.test(cleanPhone)) {
            phoneErr.classList.remove('hidden');
            phoneInput.focus();
            return false;
          }
          phoneErr.classList.add('hidden');

          const submitBtn = document.getElementById('submitBtn');
          submitBtn.disabled = true;
          submitBtn.innerHTML = `<span>Sending...</span> <svg class="animate-spin h-4 w-4 text-white inline-block ml-2" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path></svg>`;

          const formData = new FormData(this);
          formData.append('is_ajax', '1');

          fetch('/contact_us.php', {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
          })
          .then(res => res.json())
          .then(data => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = `<span>Send Message</span> <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>`;
            if (window.turnstile) {
              try { window.turnstile.reset(); } catch(e) {}
            }

            if (data.status === 'success') {
              showSuccessModal();
              this.reset();
            } else {
              errorText.innerText = data.message || 'Failed to send message.';
              errorBox.classList.remove('hidden');
            }
          })
          .catch(err => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = `<span>Send Message</span> <svg class="arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>`;
            if (window.turnstile) {
              try { window.turnstile.reset(); } catch(e) {}
            }
            showSuccessModal();
            this.reset();
          });
        });
      </script>
    </div>

    <aside data-reveal="right" data-delay="120" class="space-y-5">
      <div class="animate-float rounded-3xl border border-white bg-white/80 p-6 shadow-[0_30px_70px_-30px_rgba(22,35,59,.35)] backdrop-blur">
        <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-brand">Response times</p>
        <div class="mt-5 space-y-4">
          <div class="flex items-baseline justify-between border-b border-slate-100 pb-4">
            <span class="text-[13.5px] text-body">Sales enquiry</span>
            <span class="font-display text-[15px] font-bold text-ink">&lt; 1 business day</span>
          </div>
          <div class="flex items-baseline justify-between border-b border-slate-100 pb-4">
            <span class="text-[13.5px] text-body">Live incident</span>
            <span class="font-display text-[15px] font-bold text-ink">&lt; 15 minutes</span>
          </div>
          <div class="flex items-baseline justify-between">
            <span class="text-[13.5px] text-body">Sandbox access</span>
            <span class="font-display text-[15px] font-bold text-ink">Same day</span>
          </div>
        </div>
      </div>

      <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-brand">Offices</p>
        <div class="mt-5 border-b border-slate-100 pb-5">
          <h3 class="font-display text-[14.5px] font-bold text-ink">Mumbai &mdash; Registered</h3>
          <p class="mt-1.5 text-[13px] leading-relaxed text-body">409,Fortune Emporio, Opposite Thakur Mall, Western Express Hwy, Mira Road East, <br>Mira Bhayandar, Maharashtra 401107</p>
        </div>
        <div class="mt-5">
          <h3 class="font-display text-[14.5px] font-bold text-ink">Chandigarh &mdash; Engineering</h3>
          <p class="mt-1.5 text-[13px] leading-relaxed text-body">1510 Sector 82, Sahibzada Ajit Singh Nagar,<br>Punjab 140306</p>
        </div>
        <div class="mt-6 space-y-2.5 text-[13px]">
          <a href="tel:02268833223" class="flex items-center gap-2.5 font-medium text-ink hover:text-brand transition">
            <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.8 2z"/></svg>
            022 68833223
          </a>
          <a href="mailto:hello@paisape.in" class="flex items-center gap-2.5 font-medium text-ink hover:text-brand transition">
            <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="m2 7 10 6 10-6"/></svg>
            hello@paisape.in
          </a>
        </div>
      </div>

    </aside>
  </div>
</section>

<section class="bg-white py-20 md:py-24">
  <div class="mx-auto max-w-3xl px-5">
    <p data-reveal class="mb-3 text-center text-[11px] font-bold uppercase tracking-[0.24em] text-brand">
      <span class="mr-2 inline-block h-px w-6 align-middle bg-brand"></span>Before you write in
    </p>
    <h2 data-reveal data-delay="80" class="text-center font-display text-[27px] font-extrabold tracking-tight text-ink sm:text-[34px]">
      Questions we get every week
    </h2>
    <div class="mt-12 space-y-3">
      <div data-reveal data-delay="0" class="faq rounded-2xl border border-slate-100 bg-white shadow-sm">
        <button class="faq-toggle flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
          <span class="font-display text-[14.5px] font-bold text-ink">How long does integration take?</span>
          <svg class="faq-icon h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M12 5v14M5 12h14"/></svg>
        </button>
        <div class="faq-body"><p class="px-6 pb-5 text-[13.5px] leading-relaxed text-body">Most teams ship collections in three to five working days using the unified API. Payouts and reconciliation typically add another week, depending on bank approvals.</p></div>
      </div>
      <div data-reveal data-delay="80" class="faq rounded-2xl border border-slate-100 bg-white shadow-sm">
        <button class="faq-toggle flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
          <span class="font-display text-[14.5px] font-bold text-ink">Can we keep our existing gateways?</span>
          <svg class="faq-icon h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M12 5v14M5 12h14"/></svg>
        </button>
        <div class="faq-body"><p class="px-6 pb-5 text-[13.5px] leading-relaxed text-body">Yes. Paisape sits above your current PSPs and routes between them. You keep your existing contracts and rates, and gain failover when one provider degrades.</p></div>
      </div>
      <div data-reveal data-delay="160" class="faq rounded-2xl border border-slate-100 bg-white shadow-sm">
        <button class="faq-toggle flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
          <span class="font-display text-[14.5px] font-bold text-ink">Do you offer a sandbox before we sign?</span>
          <svg class="faq-icon h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M12 5v14M5 12h14"/></svg>
        </button>
        <div class="faq-body"><p class="px-6 pb-5 text-[13.5px] leading-relaxed text-body">Sandbox keys are issued the same day you ask. Test every routing rule against mock acquirers, then promote the same config to production with one command.</p></div>
      </div>
      <div data-reveal data-delay="240" class="faq rounded-2xl border border-slate-100 bg-white shadow-sm">
        <button class="faq-toggle flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
          <span class="font-display text-[14.5px] font-bold text-ink">What compliance standards do you hold?</span>
          <svg class="faq-icon h-4 w-4 shrink-0 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M12 5v14M5 12h14"/></svg>
        </button>
        <div class="faq-body"><p class="px-6 pb-5 text-[13.5px] leading-relaxed text-body">PCI DSS SAQ-A, full audit trails on every transaction, and KYC workflows built to RBI expectations. Documentation goes out with the first solutions call.</p></div>
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

<button id="toTop" aria-label="Back to top" class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
</body>
</html>
