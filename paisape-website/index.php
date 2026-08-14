<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Paisape — Payment Orchestration Platform for India</title>
<meta name="description" content="A unified financial API layer for payments, payouts and reconciliation, with smart dynamic routing built in." />
<link rel="icon" type="image/svg+xml" href="assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="js/tailwind.config.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-white text-body antialiased">
<div class="fixed top-0 left-0 z-[100] w-full bg-gradient-to-r from-[#FF9933] via-white to-[#138808] px-4 py-2.5 text-center shadow-md">
  <div class="flex items-center justify-center gap-4">
    <span class="text-2xl drop-shadow-sm">🇮🇳</span>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Happy Independence Day</p>
    <svg class="h-7 w-7 text-[#000080] animate-[spin_15s_linear_infinite]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93M7.76 3.05l8.48 17.9M3.05 7.76l17.9 8.48M3.05 16.24l17.9-8.48M7.76 20.95l8.48-17.9"/></svg>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Jai Hind!</p>
    <span class="text-2xl drop-shadow-sm">🇮🇳</span>
  </div>
</div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-[48px] inset-x-0 z-50 transition-all duration-500">
  <div class="mx-auto max-w-site px-5">
    <div id="navInner" class="mt-4 flex items-center justify-between rounded-2xl border border-transparent px-5 py-3 transition-all duration-500">

      <!-- LOGO — replace assets/logo.svg with your own file -->
      <a href="index.html" class="flex items-center" aria-label="Paisape home">
        <img src="assets/logo.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
      </a>

      <nav class="hidden md:flex items-center gap-9 text-[15px] font-medium text-ink2" aria-label="Main">
        <a href="index.html" class="nav-link active text-brand">Home</a>

        <div class="relative mega-parent">
          <button id="megaTrigger" class="nav-link hover:text-brand transition-colors flex items-center gap-1" aria-haspopup="true" aria-expanded="false">
            Products
            <svg class="h-3.5 w-3.5 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
          </button>
      <div class="mega-wrap w-[720px] lg:w-[780px]">
        <div class="grid grid-cols-[250px_1fr] overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-[0_40px_80px_-30px_rgba(22,35,59,.35)]">
          <div class="space-y-1 bg-mintLt p-3" role="tablist" aria-label="Product categories">
          <button class="mega-cat" data-cat="issuing" role="tab" aria-selected="true"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/></svg><span>Issuing Solution</span></button>
          <button class="mega-cat" data-cat="acquiring" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span>Merchant Acquiring Solution</span></button>
          <button class="mega-cat" data-cat="banking" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M4 10h16M5 10V21M19 10V21M9 10V21M15 10V21M12 3l9 5H3z"/></svg><span>Transaction Banking Solution</span></button>
          <button class="mega-cat" data-cat="value" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Value Added Solution</span></button>
          <button class="mega-cat" data-cat="payments" role="tab" aria-selected="false"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m12 2 9 5v10l-9 5-9-5V7z"/><path d="m3 7 9 5 9-5M12 12v10"/></svg><span>Payments</span></button>
          </div>
          <div class="p-5">
          <div class="mega-panel show grid-cols-1 gap-3 sm:grid-cols-2" data-panel="issuing">
            <a class="mega-link" href="neobanking.html"><span>Neobanking solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="acquiring">
            <a class="mega-link" href="qr-code-solution.html"><span>Dynamic QR Code solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="soundbox.html"><span>Instant Audio Soundbox</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="banking">
            <a class="mega-link" href="bbps.html"><span>Bharat Bill Payment System (BBPS)</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="upi.html"><span>Enterprise UPI Stack</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="aeps.html"><span>Aadhaar Enabled Payment System</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="value">
            <a class="mega-link" href="onboarding-solution.html"><span>Digital Merchant Onboarding</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="reconciliation-solution.html"><span>Automated Reconciliation</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="switching-solution.html"><span>Intelligent Payment Switch</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="payments">
            <a class="mega-link" href="pos-solution.html"><span>POS Solution</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          </div>
        </div>
      </div>
        </div>

        <a href="blog.html" class="nav-link hover:text-brand transition-colors">Blog</a>
        <a href="contact.html" class="nav-link hover:text-brand transition-colors">Contact Us</a>
      </nav>

      <div class="flex items-center gap-3">
        <a href="contact.html" class="hidden md:inline-flex rounded-full bg-brand px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand/30 transition hover:-translate-y-0.5 hover:bg-brandDk">Talk to Sales</a>
        <button id="burger" aria-label="Open menu" aria-expanded="false" class="md:hidden rounded-xl border border-slate-200 bg-white p-2.5 text-ink">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        </button>
      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobileMenu" class="md:hidden mt-2 hidden max-h-[75vh] overflow-y-auto rounded-2xl border border-slate-100 bg-white p-3 shadow-xl">
      <a href="index.html" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Home</a>

      <button id="mobileProductsToggle" aria-expanded="false"
        class="flex w-full items-center justify-between rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">
        Products
        <svg class="h-4 w-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
      </button>
      <div id="mobileProductsPanel" class="hidden space-y-2 px-2 pb-2">
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Issuing Solution</p>
          <a href="neobanking.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Neobanking solution</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Merchant Acquiring Solution</p>
          <a href="qr-code-solution.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Dynamic QR Code solution</a>
          <a href="soundbox.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Instant Audio Soundbox</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Transaction Banking Solution</p>
          <a href="bbps.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Bharat Bill Payment System (BBPS)</a>
          <a href="upi.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Enterprise UPI Stack</a>
          <a href="aeps.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Aadhaar Enabled Payment System</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Value Added Solution</p>
          <a href="onboarding-solution.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Digital Merchant Onboarding</a>
          <a href="reconciliation-solution.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Automated Reconciliation</a>
          <a href="switching-solution.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Intelligent Payment Switch</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Payments</p>
          <a href="pos-solution.html" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">POS Solution</a>
        </div>
      </div>

      <a href="blog.html" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Blog</a>
      <a href="contact.html" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Contact Us</a>
      <a href="contact.html" class="mt-2 block rounded-xl bg-brand px-4 py-3 text-center font-semibold text-white">Talk to Sales</a>
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
        <a href="contact.html" class="group inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/30 transition hover:-translate-y-1 hover:bg-brandDk">
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
        <a href="qr-code-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Disbursement &amp; Payout</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">IMPS, NEFT, RTGS &amp; UPI bulk transfers at scale</p>
        <a href="upi.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M21 2v6h-6M3 22v-6h6"/><path d="M3.5 9a9 9 0 0 1 14.9-3.4L21 8M21 15a9 9 0 0 1-14.9 3.4L3 16"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Automated Reconciliation</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">AI-powered 2-way &amp; 3-way recon with MIS dashboards</p>
        <a href="reconciliation-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="240" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M3 21h18M4 21V10l8-6 8 6v11M9 21v-6h6v6"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">TSP for Banks &amp; NBFCs</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">NPCI-certified UPI switch, IMPS &amp; CBS middleware</p>
        <a href="switching-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="0" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Orchestration Engine</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">AI-driven multi-PSP routing for near-zero downtime</p>
        <a href="switching-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="80" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M10 13a5 5 0 0 0 7.5.5l3-3a5 5 0 1 0-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.5-.5l-3 3a5 5 0 0 0 7 7l1.7-1.7"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Unified Gateway</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">One API for all payment methods and banks</p>
        <a href="upi.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="160" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.7 11.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L21 7H6"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Custom Branded Checkout</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">White-label, conversion-optimised checkout flows</p>
        <a href="pos-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
      </article>
      <article data-reveal data-delay="240" class="card-lift rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
        <div class="mb-5 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-brandLt text-brand">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M3 21h18M7 21V11M12 21V4M17 21v-7"/></svg>
        </div>
        <h3 class="font-display text-[15px] font-bold text-ink">Analytics &amp; MIS</h3>
        <p class="mt-2 text-[13px] leading-relaxed text-body">Real-time dashboards and automated MIS reports</p>
        <a href="reconciliation-solution.html" class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-brand">Learn more <span class="arrow">&rarr;</span></a>
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

        <a href="contact.html" data-reveal data-delay="360" class="group mt-8 inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-[15px] font-semibold text-white shadow-xl shadow-brand/25 transition hover:-translate-y-1 hover:bg-brandDk">
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
    <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">

      <div data-reveal>
        <!-- LOGO — replace assets/logo-white.svg with your own file -->
        <img src="assets/logo-white.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
        <p class="mt-5 max-w-xs text-[13px] leading-relaxed text-slate-400">
          Payments. Everytime. Everywhere. Paisape Techfin Private Limited provides comprehensive payment
          solutions including issuing, acquiring, and transaction banking.
        </p>

        <!-- <p class="mt-7 text-[13px] font-semibold text-white">Subscribe to newsletter</p>
        <form class="mt-3 flex max-w-sm gap-2" onsubmit="return false">
          <label for="footerEmail" class="sr-only">Email address</label>
          <input id="footerEmail" type="email" placeholder="Your email"
            class="w-full rounded-lg border border-white/15 bg-white/5 px-4 py-2.5 text-[13px] text-white placeholder:text-slate-500 focus:border-brand focus:outline-none">
          <button class="shrink-0 rounded-lg bg-mint px-5 py-2.5 text-[13px] font-bold text-night transition hover:-translate-y-0.5 hover:bg-mint/90">Subscribe</button>
        </form>
        -->
      </div>

      <div data-reveal data-delay="80">
        <h2 class="font-display text-[13.5px] font-bold text-white">Company</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/contact" class="transition hover:text-brand">About Us</a></li>
          <li><a href="blog.html" class="transition hover:text-brand">Blog</a></li>
          <li><a href="contact.html" class="transition hover:text-brand">Contact Us</a></li>
          <li><a href="contact.html" class="transition hover:text-brand">Partnership</a></li>
        </ul>
      </div>

      <div data-reveal data-delay="160">
        <h2 class="font-display text-[13.5px] font-bold text-white">Legal</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="#" class="transition hover:text-brand">Privacy Policy</a></li>
          <li><a href="#" class="transition hover:text-brand">Refund Policy</a></li>
          <li><a href="#" class="transition hover:text-brand">Terms &amp; Conditions</a></li>
        </ul>
      </div>

      <div data-reveal data-delay="240">
        <h2 class="font-display text-[13.5px] font-bold text-white">Products</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="neobanking.html" class="transition hover:text-brand">Issuing Solution</a></li>
          <li><a href="qr-code-solution.html" class="transition hover:text-brand">Merchant Acquiring</a></li>
          <li><a href="upi.html" class="transition hover:text-brand">Transaction Banking</a></li>
          <li><a href="reconciliation-solution.html" class="transition hover:text-brand">Value Added Services</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="border-t border-white/10 bg-night2">
    <div class="mx-auto flex max-w-site flex-col items-center justify-between gap-4 px-5 py-5 text-[12.5px] text-slate-400 sm:flex-row">
      <p>&copy; 2026, Paisape Techfin Private Limited. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="#" aria-label="Facebook" class="transition hover:text-brand"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.55-1.5h1.65V4.6A22 22 0 0 0 14.3 4.5c-2.4 0-4 1.45-4 4.1v2.3H7.6V14h2.7v8z"/></svg></a>
        <a href="#" aria-label="Twitter" class="transition hover:text-brand"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22 5.9c-.7.3-1.5.5-2.4.6.9-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.6 1a4.1 4.1 0 0 0-7 3.7A11.6 11.6 0 0 1 3.4 4.6a4.1 4.1 0 0 0 1.3 5.5c-.7 0-1.3-.2-1.9-.5 0 2 1.4 3.7 3.3 4.1-.6.2-1.2.2-1.8.1a4.1 4.1 0 0 0 3.8 2.9A8.2 8.2 0 0 1 2 18.4a11.6 11.6 0 0 0 6.3 1.8c7.5 0 11.7-6.3 11.7-11.7v-.5c.8-.6 1.5-1.3 2-2.1z"/></svg></a>
        <a href="#" aria-label="LinkedIn" class="transition hover:text-brand"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M6.9 21H3.4V9h3.5zM5.15 7.4A2.05 2.05 0 1 1 5.15 3.3a2.05 2.05 0 0 1 0 4.1M21 21h-3.5v-5.9c0-1.4 0-3.2-2-3.2s-2.25 1.5-2.25 3.1V21H9.75V9h3.35v1.6h.05c.5-.9 1.65-1.85 3.4-1.85 3.6 0 4.45 2.4 4.45 5.5z"/></svg></a>
      </div>
    </div>
  </div>
</footer>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="js/main.js"></script>
</body>
</html>
