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
      <span class="text-brand">orchestration</span>
      <span class="text-slate-300">/</span>
      <span class="text-body/60">12 min read</span>
    </div>
    
    <h1 class="font-display text-[32px] font-extrabold leading-[1.15] tracking-tight text-ink sm:text-[44px]">
      The Ultimate Guide to Payment Orchestration in India
    </h1>
    
    <p class="mt-6 text-[18px] leading-relaxed text-body/80 font-medium">
      How dynamic routing saves MDR, boosts success rates, and prevents massive revenue leaks during PSP downtimes.
    </p>

    <div class="mt-8 flex items-center gap-4 border-y border-slate-100 py-6">
      <span class="flex h-12 w-12 items-center justify-center rounded-full bg-brandLt font-display text-[15px] font-bold text-brand">PE</span>
      <div>
        <p class="text-[14px] font-semibold text-ink">Paisape Engineering</p>
        <p class="text-[13px] text-body/70">03 Aug 2026</p>
      </div>
    </div>

        <div class="mt-10 overflow-hidden rounded-3xl bg-slate-100 shadow-xl">
      <img src="/assets/blog/blog_orchestration.jpg" alt="Blog Hero Image" class="w-full object-cover max-h-[500px]" />
    </div>

    <div class="prose prose-lg prose-slate mt-10 max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-a:text-brand prose-a:font-semibold hover:prose-a:text-brandDk prose-h2:text-[24px] prose-h2:mt-12 prose-h2:mb-4 prose-p:text-[16px] prose-p:leading-loose prose-p:text-body prose-li:text-[16px]">
      <h2>The Need for Payment Orchestration in India's High-Volume Digital Economy</h2>
      <p>India’s digital payment ecosystem is nothing short of a revolution. With the explosive growth of the Unified Payments Interface (UPI), a surge in credit card issuances, and widespread adoption of various digital wallets, the sheer volume of transactions processed daily is staggering. However, this massive scale brings unprecedented challenges for large merchants and enterprises. Relying on a single Payment Gateway (PG) exposes businesses to systemic risks—downtimes, fluctuating success rates, and rigid pricing models. This is where a Payment Orchestration Platform (POP) becomes critical. An orchestrator acts as a unified layer sitting above multiple payment gateways and processors, dynamically directing transaction traffic to optimize for both success and cost.</p>
      <p>When a business processes millions of transactions, even a fractional drop in success rate or a slight increase in the Merchant Discount Rate (MDR) can translate to millions of rupees in lost revenue or increased operational costs. Payment orchestration mitigates these risks by intelligently decoupling the merchant's checkout experience from the underlying payment processing infrastructure.</p>

      <h2>Deconstructing Dynamic Routing Logic</h2>
      <p>The core of any advanced payment orchestration system is its dynamic routing engine. Unlike static routing—where a transaction is sent to a predefined PG based on simple rules—dynamic routing evaluates an array of parameters in real-time, often within milliseconds, to determine the optimal path for a specific transaction.</p>
      <p>At Paisape, our dynamic routing architecture evaluates multiple data points:</p>
      <ul>
        <li><strong>Bank and PG Health:</strong> We constantly monitor the health of issuing banks, acquiring networks, and intermediate PGs. If an issuing bank's API response time degrades or a PG starts throwing 5xx errors, the routing engine immediately penalizes that route and diverts traffic to a healthier alternative.</li>
        <li><strong>Historical and Real-time Success Rates (SR):</strong> Routing engines analyze both historical data and real-time sliding windows. For example, if HDFC NetBanking has a 92% success rate on PG A but only 85% on PG B over the last 10 minutes, the engine dynamically shifts the HDFC NetBanking volume to PG A.</li>
        <li><strong>BIN-Level Optimization:</strong> Card networks (Visa, Mastercard, RuPay) and Bank Identification Numbers (BINs) perform differently across various gateways. Some PGs have direct integrations or optimized acquiring partnerships for specific BIN ranges, resulting in higher approval rates. The orchestrator maps these BINs to the highest-performing PG in real-time.</li>
        <li><strong>Payment Method Specificity:</strong> Not all PGs are created equal. One might have a robust UPI intent flow with zero drop-offs, while another might excel in processing recurring credit card mandates (e-NACH or UPI AutoPay). Routing logic dictates that transactions are sent to the PG best equipped for that specific payment mode.</li>
        <li><strong>Load Balancing and Volume Commitments:</strong> Merchants often have volume commitments with specific PGs to unlock tiered pricing. The routing engine can be configured to balance loads proportionally, ensuring commitments are met without sacrificing overall success rates.</li>
      </ul>

      <h2>The Mathematics of MDR Cost Savings</h2>
      <p>Beyond improving success rates, the financial impact of payment orchestration is heavily driven by MDR optimization. MDR is the fee a merchant pays to the PG and acquiring bank for processing a transaction. These rates can vary wildly based on the PG, the payment method, the card type (premium vs. standard, corporate vs. retail), and the specific commercial agreements in place.</p>
      <p>Let’s break down the math of how dynamic routing saves costs. Consider a merchant processing ₹100 Crores per month in credit card volume. They have integrated two PGs: PG Alpha and PG Beta.</p>
      <p>For standard Visa/Mastercard credit cards, PG Alpha charges an MDR of 1.80%, while PG Beta charges 1.95%. For premium or corporate cards, PG Alpha charges 2.20%, but PG Beta charges 2.05%. Without an orchestrator, the merchant might route all traffic through PG Alpha, optimizing for the standard cards but bleeding margin on the premium cards.</p>
      <p>With a POP in place, the system interrogates the BIN of every incoming transaction before routing. Out of the ₹100 Crores, let's assume ₹60 Crores are standard cards and ₹40 Crores are premium/corporate cards.</p>
      <ul>
        <li><strong>Without Orchestration (Routed all to PG Alpha):</strong><br>Standard Cards (₹60 Cr @ 1.80%) = ₹1.08 Cr<br>Premium Cards (₹40 Cr @ 2.20%) = ₹0.88 Cr<br><strong>Total MDR Cost: ₹1.96 Crores</strong></li>
        <li><strong>With Dynamic Routing:</strong><br>Standard Cards routed to PG Alpha (₹60 Cr @ 1.80%) = ₹1.08 Cr<br>Premium Cards routed to PG Beta (₹40 Cr @ 2.05%) = ₹0.82 Cr<br><strong>Total MDR Cost: ₹1.90 Crores</strong></li>
      </ul>
      <p>In this simplified scenario, dynamic routing directly saves the merchant ₹6 Lakhs per month (₹72 Lakhs annually) purely through intelligent, BIN-based MDR routing, with absolutely no change in the transaction volume or customer experience. When you scale this across hundreds of BINs, various UPI apps, NetBanking permutations, and tiered commercial structures, the savings exponentially increase, often completely offsetting the cost of the orchestration platform itself.</p>

      <h2>Handling Edge Cases and Downtimes</h2>
      <p>The true test of an orchestrator comes during systemic failures. India's payment infrastructure, while robust, experiences periods of high stress—such as during mega e-commerce sales, IPL ticketing, or month-end salary credits. During these peak times, issuing banks or PGs can face degraded performance or complete outages.</p>
      <p>A sophisticated POP employs active and passive health checking. Passive health checking involves analyzing the response codes of live transactions. If a specific PG returns three consecutive 'Issuer Unavailable' or 'Gateway Timeout' errors for SBI debit cards, the routing engine enacts an automatic 'circuit breaker' for that specific combination. Traffic for SBI debit cards is instantly routed to a secondary PG that maintains a healthy connection.</p>
      <p>Active health checking involves the POP sending synthetic ping transactions (like a ₹1 authorization) at regular intervals to gauge the health of underlying APIs. If the latency of a PG spikes from 500ms to 3500ms, the orchestrator begins bleeding traffic away before the latency results in hard timeouts for the customer.</p>
      <p>Furthermore, an orchestrator handles the complexity of 'retry logic'. If a transaction fails at the primary PG due to a non-fatal error (e.g., a momentary network glitch rather than insufficient funds), the POP can automatically retry the transaction on a secondary PG in the background, entirely invisible to the user. This frictionless retry mechanism can recover anywhere from 2% to 5% of failed transactions, directly boosting the top line.</p>

      <h2>Compliance, Security, and RBI Guidelines</h2>
      <p>Operating a Payment Orchestration Platform in India requires strict adherence to Reserve Bank of India (RBI) guidelines. The most critical aspect is the storage and tokenization of card data. Under the latest RBI guidelines on Card-on-File Tokenization (CoFT), merchants and orchestrators cannot store raw credit or debit card numbers.</p>
      <p>A compliant POP must act as a certified Token Requestor. When a user saves their card, the orchestrator securely communicates with the card networks (Visa, Mastercard, RuPay) to generate a network token. This token is what gets routed to the underlying PGs during subsequent transactions. Crucially, because the POP holds the network token rather than a PG-specific token, the merchant is not locked into a single PG. The orchestrator can route the network token to any supported PG that offers the best success rate or lowest MDR at that exact moment. This network tokenization is the linchpin that enables true PG agnosticism and unlocks the full power of dynamic routing.</p>

      <h2>Conclusion</h2>
      <p>For any enterprise handling substantial digital payment volumes in India, relying on a single point of failure is no longer a viable strategy. Payment orchestration provides the necessary control, redundancy, and intelligence to navigate the complexities of modern digital finance. By leveraging dynamic routing for success rate optimization, mathematical MDR routing for cost reduction, and robust fallback mechanisms during downtimes, a POP transforms the payment layer from a mere utility into a strategic driver of revenue and profitability.</p>
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







