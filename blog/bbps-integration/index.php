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
<div id="progress" class="fixed top-0 left-0 z-[60] h-[3px] w-full bg-brand transition-transform duration-150"></div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
  <div class="mx-auto max-w-site px-5">
    <div id="navInner" class="mt-4 flex items-center justify-between rounded-2xl border border-transparent px-5 py-3 transition-all duration-500">

      <!-- LOGO — replace assets/logo.svg with your own file -->
      <a href="/" class="flex items-center" aria-label="Paisape home">
        <img src="/assets/logo.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
      </a>

      <nav class="hidden md:flex items-center gap-9 text-[15px] font-medium text-ink2" aria-label="Main">
        <a href="/" class="nav-link hover:text-brand transition-colors">Home</a>

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
          <div class="mega-panel grid-cols-1 gap-3 sm:grid-cols-2" data-panel="value">
            <a class="mega-link" href="/onboarding-solution"><span>Digital Merchant Onboarding</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="/reconciliation-solution"><span>Automated Reconciliation</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a class="mega-link" href="/switching-solution"><span>Intelligent Payment Switch</span><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
          
          </div>
        </div>
      </div>
        </div>

        <a href="/blog" class="nav-link active text-brand">Blog</a>
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

      <button id="mobileProductsToggle" aria-expanded="false"
        class="flex w-full items-center justify-between rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">
        Products
        <svg class="h-4 w-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m6 9 6 6 6-6"/></svg>
      </button>
      <div id="mobileProductsPanel" class="hidden space-y-2 px-2 pb-2">
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Issuing Solution</p>
          <a href="/neobanking" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Neobanking solution</a>
        </div>
                        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Merchant Acquiring Solution</p>
          <a href="/qr-code-solution" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Dynamic QR Code solution</a>
          <a href="/soundbox" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Instant Audio Soundbox</a>
          <a href="/pos-solution" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">POS Solution</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Transaction Banking Solution</p>
          <a href="/bbps" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Bharat Bill Payment System (BBPS)</a>
          <a href="/upi" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Enterprise UPI Stack</a>
          <a href="/aeps" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Aadhaar Enabled Payment System</a>
        </div>
        <div class="rounded-xl bg-mintLt/60 p-2">
          <p class="px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-ink2">Value Added Solution</p>
          <a href="/onboarding-solution" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Digital Merchant Onboarding</a>
          <a href="/reconciliation-solution" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Automated Reconciliation</a>
          <a href="/switching-solution" class="block rounded-lg px-3 py-2 text-[13.5px] text-body hover:bg-mist hover:text-brand transition">Intelligent Payment Switch</a>
        </div>
        
      </div>

      <a href="/blog" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Blog</a>
      <a href="/contact" class="block rounded-xl px-4 py-3 font-medium text-ink hover:bg-mist">Contact Us</a>
      <a href="/contact" class="mt-2 block rounded-xl bg-brand px-4 py-3 text-center font-semibold text-white">Talk to Sales</a>
    </div>
  </div>
</header>

<main id="main">
<article class="bg-white pt-32 pb-16 md:pt-40 md:pb-24">
  <div class="mx-auto max-w-[800px] px-5">
    <div class="mb-8 flex items-center gap-3 text-[12px] font-bold uppercase tracking-[0.14em]">
      <a href="/blog" class="text-brand hover:underline">Blog</a>
      <span class="text-slate-300">/</span>
      <span class="text-brand">engineering</span>
      <span class="text-slate-300">/</span>
      <span class="text-body/60">7 min read</span>
    </div>
    
    <h1 class="font-display text-[32px] font-extrabold leading-[1.15] tracking-tight text-ink sm:text-[44px]">
      BBPS (Bharat Bill Payment System) Integration Guide
    </h1>
    
    <p class="mt-6 text-[18px] leading-relaxed text-body/80 font-medium">
      How to integrate and earn commissions on utility payments through the centralized BBPS network.
    </p>

    <div class="mt-8 flex items-center gap-4 border-y border-slate-100 py-6">
      <span class="flex h-12 w-12 items-center justify-center rounded-full bg-brandLt font-display text-[15px] font-bold text-brand">PE</span>
      <div>
        <p class="text-[14px] font-semibold text-ink">Paisape Engineering</p>
        <p class="text-[13px] text-body/70">28 Jul 2026</p>
      </div>
    </div>

        <div class="mt-10 overflow-hidden rounded-3xl bg-slate-100 shadow-xl">
      <img src="/assets/blog/blog_bbps.jpg" alt="Blog Hero Image" class="w-full object-cover max-h-[500px]" />
    </div>

    <div class="prose prose-lg prose-slate mt-10 max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-a:text-brand prose-a:font-semibold hover:prose-a:text-brandDk prose-h2:text-[24px] prose-h2:mt-12 prose-h2:mb-4 prose-p:text-[16px] prose-p:leading-loose prose-p:text-body prose-li:text-[16px]">
      <h2>Introduction to the Bharat Bill Payment System (BBPS)</h2>
<p>The Bharat Bill Payment System (BBPS) has revolutionized the bill payment landscape in India. Driven by the National Payments Corporation of India (NPCI), BBPS acts as an interoperable, multi-tiered infrastructure that brings together billers across categories&mdash;electricity, water, DTH, telecom, loan EMIs, FASTag, and municipal taxes&mdash;under a single unified umbrella. As a FinTech player, integrating with BBPS allows you to offer seamless bill payment experiences to your end users while generating a new, consistent revenue stream.</p>
<p>In this comprehensive guide, the Paisape engineering team delves deep into the architecture of BBPS, the intricacies of functioning as an Agent Institution (AI), the mechanics of the core APIs, and the detailed mathematics behind BBPS commissions and settlement.</p>

<h2>The Architecture: Billers, BBPOUs, and Agent Institutions</h2>
<p>Understanding the BBPS ecosystem requires clarity on the primary entities involved. At the core is the Bharat Bill Payment Central Unit (BBPCU), operated by NPCI, which governs the entire network and handles clearing and settlement. Operating under the BBPCU are the Bharat Bill Payment Operating Units (BBPOUs). A BBPOU can act as a Customer Operating Unit (COU), Biller Operating Unit (BOU), or both.</p>
<ul>
  <li><strong>Biller Operating Unit (BOU):</strong> Responsible for onboarding billers onto the network.</li>
  <li><strong>Customer Operating Unit (COU):</strong> Responsible for providing customer-facing touchpoints (like banking apps, mobile wallets, or offline retail networks) to fetch and pay bills.</li>
</ul>
<p>For most fintech startups and payment aggregators, direct BBPOU licensing is a massive undertaking involving rigorous RBI compliance, high net-worth requirements, and complex infrastructure audits. Instead, the standard integration path is to become an <strong>Agent Institution (AI)</strong>. An AI partners with an existing COU (typically a major sponsor bank or a large payment gateway) to access the BBPS network. The AI owns the user interface and customer experience, while the COU handles the backend routing to the BBPCU.</p>

<h2>Core Integration Mechanics: fetchBill and payBill</h2>
<p>An AI's integration with the COU revolves around a standardized set of RESTful APIs. While the exact payload structures might vary slightly depending on your sponsor bank's API gateway, the underlying lifecycle is governed strictly by NPCI standards.</p>

<h3>1. The <code>fetchBill</code> API</h3>
<p>The <code>fetchBill</code> API is the starting point of any bill payment journey. It requires the customer to input specific parameters (like Consumer Number, Account ID, or Mobile Number) defined by the specific biller. This request is routed from the AI &rarr; COU &rarr; BBPCU &rarr; BOU &rarr; Biller's Billing System.</p>
<p><strong>Critical considerations for <code>fetchBill</code>:</strong></p>
<ul>
  <li><strong>Timeout Management:</strong> Because the request traverses multiple hops and hits legacy biller systems (which can be notoriously slow), your timeout strategy is crucial. NPCI generally recommends a timeout of 15-20 seconds. It is heavily advised to implement robust asynchronous polling or webhook callbacks if your COU supports them.</li>
  <li><strong>Validation Rules:</strong> Each biller mandates specific regex patterns for their input parameters. The <code>billerInfo</code> API provides these exact regex strings. Performing local, client-side validation before firing a <code>fetchBill</code> request significantly reduces unnecessary network roundtrips and lowers your error rates.</li>
  <li><strong>Idempotency:</strong> Always generate a unique <code>requestId</code> for each fetch attempt to prevent duplicate processing on the COU side, especially during network retries.</li>
</ul>

<h3>2. The <code>payBill</code> API</h3>
<p>Once a bill is successfully fetched and presented to the user, and the user authorizes the payment (via UPI, Card, Netbanking, or Wallet), the AI triggers the <code>payBill</code> API.</p>
<p><strong>Technical handling of <code>payBill</code>:</strong></p>
<ul>
  <li><strong>Biller Responses and Exact Matches:</strong> Many billers (especially loan repayments and credit cards) require the payment amount to exactly match the fetched amount. Others allow partial payments or overpayments. This flag (<code>paymentAmountExactness</code>) is crucial to evaluate before initiating a transaction to avoid a high failure rate.</li>
  <li><strong>Quick Pay vs. Fetch &amp; Pay:</strong> Some billers support "Quick Pay," where you can directly call <code>payBill</code> without a preceding <code>fetchBill</code>. However, this is largely deprecated for critical categories like electricity, where fetch-and-validate is heavily enforced to prevent erroneous credits.</li>
  <li><strong>Transaction Status and Webhooks:</strong> A <code>payBill</code> response can be SUCCESS, PENDING, or FAILED. A PENDING status is common and means the transaction is queued at the BBPCU or the Biller's end. AIs must expose a robust webhook endpoint to receive asynchronous status updates. Furthermore, implementing a fallback polling mechanism using a <code>transactionStatus</code> API is vital for when webhook delivery fails.</li>
</ul>

<h2>Handling Edge Cases and Reversals</h2>
<p>Failures are an inevitable part of distributed systems. In BBPS, a payment might successfully debit the customer's account but fail to post to the biller's system due to a BOU downtime.</p>
<p>When a transaction fails post-debit, the AI must trigger an automated refund to the customer. However, the exact source of truth is the Daily Transaction Report (DTR) provided by the COU. Reconciling your local database against the DTR using automated chron jobs is non-negotiable. If a transaction is marked as SUCCESS in your database but FAILED in the DTR, you are liable to refund the customer, otherwise it leads to chargebacks and regulatory penalties.</p>

<h2>The Mathematics of BBPS Commissions</h2>
<p>For FinTechs, understanding the revenue model of BBPS is critical for sustainability. BBPS operates on a structured, category-wise fee model defined by NPCI, though the exact split is negotiated between the AI and the COU.</p>
<p>Generally, the Customer Convenience Fee (CCF) can be charged to the user, or the biller pays a Biller MDRO (Merchant Discount Rate equivalent). The total commission generated is split among the BOU, BBPCU, COU, and the Agent Institution.</p>

<h3>Typical Revenue Scenarios:</h3>
<ul>
  <li><strong>Low Margin, High Volume (e.g., Electricity, Water):</strong> Billers in these categories typically do not pay high margins. The standard commission for an AI might range from <strong>&#8377;1.50 to &#8377;3.50 per successful transaction</strong>. The strategy here is user acquisition and retention, utilizing the bill payment as an anchor feature.</li>
  <li><strong>High Margin Categories (e.g., Loan EMIs, Credit Cards, Insurance):</strong> These are the profit drivers. Financial institutions are willing to pay a premium for timely repayments. Commissions here can be structured as a flat fee (e.g., <strong>&#8377;10 to &#8377;25 per bill</strong>) or occasionally a small percentage of the transaction value.</li>
  <li><strong>FASTag Recharge:</strong> Often yields a percentage-based commission, usually between <strong>0.10% and 0.25%</strong> of the recharge amount. For commercial fleets, this volume scales up rapidly, driving significant revenue.</li>
</ul>
<p>To compute actual profitability, you must factor in your Payment Gateway processing costs. If a user pays a &#8377;10,000 Loan EMI via a Credit Card, the PG fee (e.g., 1.5% = &#8377;150) will massively outweigh any BBPS commission you earn. Therefore, successful AI implementations heavily restrict payment modes for large ticket sizes to UPI or Netbanking, where the transaction cost is negligible or flat-rated.</p>

<h2>Conclusion</h2>
<p>Integrating with BBPS as an Agent Institution is a strategic move for any consumer-facing FinTech. While the integration demands rigorous engineering regarding state management, timeouts, and asynchronous reconciliation, the reward is a highly engaged user base and a predictable transaction volume. By mastering the nuances of the <code>fetchBill</code> and <code>payBill</code> APIs and carefully managing your routing and payment method mathematics, you can build a highly profitable and resilient bill payment engine.</p>
    </div>
  </div>
</article><footer class="bg-night text-slate-300">
  <div class="mx-auto max-w-site px-5 py-16">
    <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">

      <div data-reveal>
        <!-- LOGO — replace assets/logo-white.svg with your own file -->
        <img src="/assets/logo-white.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
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
          <li><a href="#" class="transition hover:text-brand">About Us</a></li>
          <li><a href="/blog" class="transition hover:text-brand">Blog</a></li>
          <li><a href="/contact" class="transition hover:text-brand">Contact Us</a></li>
          <li><a href="/contact" class="transition hover:text-brand">Partnership</a></li>
        </ul>
      </div>

      <div data-reveal data-delay="160">
        <h2 class="font-display text-[13.5px] font-bold text-white">Legal</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/privacy" class="transition hover:text-brand">Privacy Policy</a></li>
          <li><a href="/refund-policy" class="transition hover:text-brand">Refund Policy</a></li>
          <li><a href="/terms-and-conditions" class="transition hover:text-brand">Terms &amp; Conditions</a></li>
        </ul>
      </div>

      <div data-reveal data-delay="240">
        <h2 class="font-display text-[13.5px] font-bold text-white">Products</h2>
        <ul class="mt-5 space-y-3 text-[13px]">
          <li><a href="/neobanking" class="transition hover:text-brand">Issuing Solution</a></li>
          <li><a href="/qr-code-solution" class="transition hover:text-brand">Merchant Acquiring</a></li>
          <li><a href="/upi" class="transition hover:text-brand">Transaction Banking</a></li>
          <li><a href="/reconciliation-solution" class="transition hover:text-brand">Value Added Services</a></li>
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

<script src="/js/main.js"></script>
</body>
</html>







