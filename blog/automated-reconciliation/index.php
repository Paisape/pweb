<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Blog â€” Paisape</title>
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

      <!-- LOGO â€” replace assets/logo.svg with your own file -->
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
      <span class="text-body/60">14 min read</span>
    </div>
    
    <h1 class="font-display text-[32px] font-extrabold leading-[1.15] tracking-tight text-ink sm:text-[44px]">
      Automated Reconciliation in Multi-Gateway Setups
    </h1>
    
    <p class="mt-6 text-[18px] leading-relaxed text-body/80 font-medium">
      Math and strategies for matching T+1 settlements across multiple payment aggregators.
    </p>

    <div class="mt-8 flex items-center gap-4 border-y border-slate-100 py-6">
      <span class="flex h-12 w-12 items-center justify-center rounded-full bg-brandLt font-display text-[15px] font-bold text-brand">PE</span>
      <div>
        <p class="text-[14px] font-semibold text-ink">Paisape Engineering</p>
        <p class="text-[13px] text-body/70">20 Jul 2026</p>
      </div>
    </div>

        <div class="mt-10 overflow-hidden rounded-3xl bg-slate-100 shadow-xl">
      <img src="/assets/blog/blog_reconciliation.jpg" alt="Blog Hero Image" class="w-full object-cover max-h-[500px]" />
    </div>

    <div class="prose prose-lg prose-slate mt-10 max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-a:text-brand prose-a:font-semibold hover:prose-a:text-brandDk prose-h2:text-[24px] prose-h2:mt-12 prose-h2:mb-4 prose-p:text-[16px] prose-p:leading-loose prose-p:text-body prose-li:text-[16px]">
      <h2>The Anatomy of Multi-PG Settlement</h2>
      <p>Modern fintech architectures rarely rely on a single Payment Aggregator (PA). To ensure high availability and optimal success rates, traffic is dynamically routed across multiple PAs using an intelligent payment switch. While this redundancy is excellent for transaction success rates—allowing you to route away from a gateway experiencing downtime—it introduces a monumental operational challenge in the back-office: reconciliation.</p>
      <p>When your infrastructure processes 100,000 transactions a day distributed across four different gateways, reconciling the payouts becomes a daunting, multi-dimensional data-matching exercise. Payments in India typically follow a T+1 settlement cycle as mandated by the RBI. If a customer pays you at 11:30 PM on Monday, the PA aggregates all of Monday's funds, deducts their Merchant Discount Rate (MDR) and applicable GST, and pushes the remainder to your nodal bank account via NEFT or RTGS by Tuesday evening. However, this perfectly orchestrated financial ballet falls apart quickly when dealing with weekends, bank holidays, late-night cutoffs, and edge cases like delayed captures or partial refunds.</p>

      <h2>The Three Pillars of Reconciliation</h2>
      <p>A robust automated reconciliation engine cannot rely on a single source of data. It must operate on three distinct, independently generated datasets, creating a three-way matching triad:</p>
      <ul>
        <li><strong>Internal Ledger (The Origin):</strong> Your own database's record of successful transactions, mapped by an internal unique identifier (Order ID). This is what you believe you have sold.</li>
        <li><strong>PA Settlement Reports (The Intermediary):</strong> The daily CSV files or API payloads from each payment gateway detailing which specific transactions were included in a given payout batch, along with the precise deductions (MDR, GST, refunds, and adjustments).</li>
        <li><strong>Nodal Bank Statement (The Source of Truth):</strong> The actual credit entries in your corporate bank account. This is the real, liquid cash that has hit your ledger, typically identifiable by a Unique Transaction Reference (UTR) number.</li>
      </ul>
      <p>Reconciliation is the exact process of tying these three datasets together flawlessly. Every internal successful transaction must match a line item in the PA settlement report, and the sum of those settled transactions (minus all fees and refunds) must perfectly match a single UTR credit line in your bank statement. Even a discrepancy of a single paisa breaks the triad.</p>

      <h2>Deciphering T+1 and T+0 Mechanics</h2>
      <p>The Reserve Bank of India (RBI) guidelines stipulate that payment aggregators must settle funds to merchants on a T+1 basis (Transaction Date + 1 working day). But what constitutes a "day" in the digital realm?</p>
      <p>Different PAs define different daily cutoff times. Gateway A might consider 12:00 AM to 11:59 PM as a single day. Gateway B might strictly use a T+1 cycle but with a cutoff at 9:00 PM, meaning a transaction at 10:00 PM on Monday officially rolls over to Tuesday's batch, meaning it won't settle until Wednesday. Furthermore, RBI holidays, second and fourth Saturdays, and Sundays traditionally halt NEFT/RTGS settlements. Though the advent of IMPS and automated weekend settlements by some modern PAs adds another layer of timeline complexity, you must still account for the lowest common denominator.</p>
      <p>Your automated engine must be uniquely configured with each PA's specific SLA, daily cutoff time, and the national holiday calendar. It must use this data to calculate an "Expected Settlement Date" for every transaction. If a transaction passes its expected settlement window without being explicitly marked as settled in a PA report, the engine must immediately flag it as an "Unsettled Anomaly" for the finance team to investigate.</p>

      <h2>The Complexities of MDR Math</h2>
      <p>Perhaps the most critical function of a reconciliation engine is validating the fees deducted by the PA. You cannot blindly trust the settlement report—software bugs and misconfigurations happen on the gateway side too. You must independently calculate the expected MDR.</p>
      <p>MDR calculations are highly granular and complex. They depend on the payment method (Credit Card, Debit Card, Netbanking, UPI, Wallets), the card network (Visa, Mastercard, RuPay, Amex), the card tier (Classic, Platinum, Signature, Corporate), and the exact transaction amount. For instance, UPI transactions under ₹2000 often attract zero MDR, while Corporate Credit Cards can range anywhere from 1.5% to 3%.</p>
      <p>Let's look at the precise math. Suppose a user makes a ₹5,000 payment via a Premium Visa Credit Card. Your agreed negotiated MDR with the PA for this specific BIN (Bank Identification Number) is 1.8%.</p>
      <ul>
        <li>Transaction Amount: ₹5,000.00</li>
        <li>MDR (1.8% of ₹5,000): ₹90.00</li>
        <li>GST on MDR (18% of ₹90): ₹16.20</li>
        <li>Total Deductions: ₹106.20</li>
        <li>Expected Settlement Amount: ₹4,893.80</li>
      </ul>
      <p>The engine must execute this floating-point calculation for every single transaction across millions of rows. If the PA's settlement report shows a deduction of ₹110.00 instead of ₹106.20, your system must trigger a "Fee Mismatch" alert. Over millions of transactions, a seemingly minor 1-paisa rounding error or an incorrect bin-routing classification by the PA can lead to massive revenue leakage.</p>

      <h2>Matching the UTR: The Final Mile</h2>
      <p>Once the transactions are individually mapped to a PA settlement report and the itemized fees are strictly verified, the final step is bank reconciliation. The PA report will provide a UTR number and a net settlement amount for that entire daily batch. Your engine must systematically parse your bank statement (often fetched via automated APIs like ICICI Connected Banking, Yes Bank APIs, or scheduled SFTP drops) and find a credit entry with that exact UTR and exact amount.</p>
      <p>This sounds computationally simple, but in reality, banks frequently truncate or prepend text to UTRs in statement narrations. A UTR provided by the PA as <code>CMS1234567890</code> might appear in your raw bank statement text as <code>NEFT-CMS1234567890-RAZORPAY-SETTLEMENT</code>. The engine needs intelligent string-matching algorithms—utilizing Levenshtein distance, regex pattern matching, or substring searches—to confidently link the messy statement entry to the clean PA batch.</p>

      <h2>Handling Edge Cases: Refunds, Chargebacks, and Rolling Reserves</h2>
      <p>A true production-grade reconciliation system spends 80% of its computational logic handling the remaining 20% of edge cases. Real-world money movement is rarely clean:</p>
      <ul>
        <li><strong>Late Refunds:</strong> A transaction happens on Monday. The customer requests a refund on Wednesday. The PA will not ask you to send them money; instead, they will simply deduct this refund amount from Thursday's incoming settlement batch. The engine must cross-reference refund requests against settlement deductions to ensure you aren't double-charged and that the math still nets out perfectly.</li>
        <li><strong>Chargebacks and Disputes:</strong> When a user disputes a transaction directly with their credit card issuing bank, the PA automatically debits the disputed amount from your next settlement, often applying an additional non-refundable chargeback penalty fee. The engine must isolate these non-transactional deductions and map them to a dedicated risk/dispute ledger, rather than failing the daily transaction math.</li>
        <li><strong>Rolling Reserves:</strong> For high-risk merchants, PAs might hold back 5% to 10% of daily settlements as a security deposit for 90 to 180 days. The engine must track these reserved funds in a separate virtual holding ledger and automatically reconcile them when they are finally released months later in a completely unrelated settlement batch.</li>
      </ul>
      <p>By automating these intricate mathematical validations and multi-way matching workflows, engineering teams can transform reconciliation from a chaotic, error-prone monthly spreadsheet nightmare into a precise, real-time financial command center that guarantees every single rupee is accounted for.</p>
    </div>
  </div>
</article><footer class="bg-night text-slate-300">
  <div class="mx-auto max-w-site px-5 py-16">
    <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">

      <div data-reveal>
        <!-- LOGO â€” replace assets/logo-white.svg with your own file -->
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







