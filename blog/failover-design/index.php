<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Designing Failover That Doesn't Double-Charge — Paisape Blog</title>
<meta name="description" content="Idempotency keys, settlement windows and the reconciliation checks that make automatic retries safe." />
<meta property="og:type" content="article" />
<meta property="og:title" content="Designing Failover That Doesn't Double-Charge" />
<meta property="og:description" content="Idempotency keys, settlement windows and the reconciliation checks that make automatic retries safe." />
<meta property="og:image" content="https://paisape.in/assets/blog/blog_failover.jpg" />
<meta property="og:url" content="https://paisape.in/blog/failover-design" />
<meta name="twitter:card" content="summary_large_image" />

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
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('copy', event => event.preventDefault());
    document.addEventListener('cut', event => event.preventDefault());
    document.addEventListener('paste', event => event.preventDefault());
    document.onkeydown = function(e) {
      if(e.keyCode == 123) { return false; }
      if(e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74)) { return false; }
      if(e.ctrlKey && e.keyCode == 85) { return false; }
    };
  </script>
</head>
<body class="bg-white text-body antialiased">
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
<div id="progress" class="fixed top-0 left-0 z-[60] h-[3px] w-full bg-brand transition-transform duration-150"></div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-[48px] inset-x-0 z-50 transition-all duration-500">
  <div class="mx-auto max-w-site px-5">
    <div id="navInner" class="mt-4 flex items-center justify-between rounded-2xl border border-transparent px-5 py-3 transition-all duration-500">
      <a href="/" class="flex items-center" aria-label="Paisape home">
        <img src="/assets/logo.svg" alt="Paisape" class="h-9 w-auto" width="200" height="52">
      </a>
      <nav class="hidden md:flex items-center gap-8 text-[15px] font-medium text-ink2" aria-label="Main">
        <a href="/" class="nav-link hover:text-brand transition-colors">Home</a>
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
  </div>
</header>

<main id="main">
  <article class="pt-36 pb-20">
    <div class="mx-auto max-w-4xl px-5">
      <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.16em] mb-4">
        <span class="rounded-full bg-brand px-3 py-1 text-white">Engineering</span>
        <span class="text-body/60">5 min read</span>
      </div>
  
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-ink">
        Designing Failover That Doesn't Double-Charge
      </h1>
  
      <p class="mt-4 text-lg text-body leading-relaxed">
        Idempotency keys, settlement windows and the reconciliation checks that make automatic retries safe.
      </p>
  
      <div class="mt-6 flex items-center justify-between border-y border-slate-100 py-4">
        <div class="flex items-center gap-3">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brandLt font-display text-[13px] font-bold text-brand">PE</span>
          <div>
            <p class="text-[13.5px] font-semibold text-ink">Paisape Engineering</p>
            <p class="text-[12px] text-body/70">Engineering &middot; 12 August 2026</p>
          </div>
        </div>
        <a href="/blog" class="text-xs font-semibold text-brand hover:underline">&larr; Back to all posts</a>
      </div>

      <div class="my-10 overflow-hidden rounded-3xl border border-slate-200 shadow-md">
        <img src="/assets/blog/blog_failover.jpg" alt="Hero Image" class="w-full h-auto object-cover" />
      </div>
  
      <div class="prose prose-slate max-w-none space-y-6 text-[15.5px] leading-relaxed text-body">
<h2>The Silent Nightmare of Double Charges</h2>
<p>In the high-stakes environment of digital payments, few things erode customer trust as rapidly as a double charge. A user initiates a transaction, the screen spins indefinitely, and eventually, an error message suggests the payment failed. Naturally, the user tries again. Hours later, their bank statement reveals two identical deductions for a single purchase. This scenario isn't just a poor user experience; it's a profound failure in distributed systems design that leads to operational overhead, increased chargeback ratios, and regulatory scrutiny.</p>
<p>At Paisape, we process millions of transactions daily across diverse networks with varying latencies. Dealing with network timeouts, gateway outages, and delayed bank responses is a routine engineering challenge. When a transaction status is ambiguous—neither definitively successful nor explicitly failed—how does a system decide whether to retry the payment or halt the process? The answer lies in robust failover design, meticulous state management, and the rigorous application of idempotency.</p>

<h2>Understanding the Anatomy of a Timeout</h2>
<p>To solve the double-charge problem, we must first understand why it occurs. A typical payment flow involves multiple actors: the merchant application, the payment gateway (like Paisape), the acquiring bank, the card network (or UPI switch), and the issuing bank.</p>
<p>When a customer clicks "Pay," a synchronous or asynchronous chain of API calls is triggered. If any node in this chain experiences a transient failure or high latency, a timeout occurs. Crucially, a timeout only means that the <em>response</em> was not received within the expected window. It does not mean the <em>action</em> failed to execute at the destination.</p>
<p>For example, if the acquiring bank sends the authorization request to the issuing bank, but the connection drops before the issuing bank's "Success" response can be relayed back, the transaction is functionally complete at the bank level, but the merchant and gateway remain unaware. If the merchant application blindly treats this timeout as a failure and initiates a retry, a second, entirely distinct transaction is spawned. The customer is charged twice.</p>

<h2>Idempotency Keys: The First Line of Defense</h2>
<p>The foundational concept for preventing double-charges in distributed systems is idempotency—the property that an operation can be applied multiple times without changing the result beyond the initial application. In payments, this is achieved through Idempotency Keys.</p>
<p>An Idempotency Key is a unique identifier generated by the client (the merchant's backend) and passed along with the payment request to the gateway. When the gateway receives a request, it first checks if it has seen this key before.</p>
<ul>
  <li><strong>First Request:</strong> The gateway processes the transaction, records the result against the Idempotency Key, and returns the response.</li>
  <li><strong>Subsequent Requests (Retries):</strong> If the gateway receives another request with the same Idempotency Key, it does <em>not</em> initiate a new transaction with the banking networks. Instead, it retrieves the cached result of the original transaction and returns that identical response.</li>
</ul>
<p>By enforcing idempotency, even if a merchant's system automatically retries a request due to a timeout, the payment gateway guarantees that only one charge will ever be processed. At Paisape, our idempotency layer is backed by a highly available, strongly consistent datastore (like Redis or DynamoDB) to ensure atomic checks and updates across our distributed server fleet.</p>

<h2>Navigating the 'Pending' Purgatory</h2>
<p>While idempotency protects against duplicate requests, it doesn't solve the problem of unknown transaction states. Often, a payment gateway itself will encounter a timeout when communicating with downstream banking partners. In these cases, the gateway cannot definitively return a 'Success' or 'Failure' to the merchant. The transaction enters a state we call 'Pending'.</p>
<p>The 'Pending' state is purgatory for payment routing. If a transaction is pending, our dynamic routing engine <em>must not</em> attempt to failover to a backup gateway or acquiring bank. Why? Because the original transaction might still be crawling through the banking network and could eventually succeed. A failover at this stage would guarantee a double charge if the first transaction eventually settles.</p>
<p>Our rule is absolute: <strong>Never failover a terminal action if the previous state is unknown.</strong></p>
<p>Instead, the system must rely on asynchronous reconciliation. At Paisape, we employ a multi-tiered status polling mechanism:</p>
<ol>
  <li><strong>Immediate Polling:</strong> For the first few minutes after a timeout, our background workers aggressively poll the downstream bank's status APIs.</li>
  <li><strong>Exponential Backoff:</strong> If the status remains unknown, the polling frequency decreases exponentially (e.g., after 15 minutes, 1 hour, 4 hours).</li>
  <li><strong>Batch Reconciliation:</strong> Many older banking systems lack robust real-time status APIs. For these, we rely on end-of-day or intra-day batch reconciliation files (often transmitted via SFTP) to finalize the state of lingering pending transactions.</li>
</ol>
<p>Until a definitive 'Failed' status is confirmed by the downstream entity, the transaction is locked. The merchant must instruct the user to wait, and the user interface should reflect that the payment is currently processing.</p>

<h2>Smart Routing and Safe Failovers</h2>
<p>So, when is failover safe? Failover routing is only permissible when a transaction fails <em>synchronously and definitively</em> with an error code that indicates the failure occurred before funds were captured.</p>
<p>For example, if a primary acquiring bank returns an immediate HTTP 503 Service Unavailable, or a specific error code indicating "Invalid Card Details" or "Insufficient Funds," we know the transaction has failed. In the case of a 503 error, our smart routing engine can transparently and immediately re-route the payment payload to a secondary acquiring bank using a new internal transaction ID, providing a seamless experience for the user without the risk of double-charging.</p>
<p>To build this safely, our routing logic relies on an exhaustive mapping of thousands of disparate banking error codes into a standardized internal taxonomy. Only specific categories of definitive failures are whitelisted for automatic failover.</p>

<h2>The Role of Auto-Reversals and Customer Communication</h2>
<p>Despite the best engineering efforts, edge cases persist. In the UPI ecosystem in India, for instance, a transaction might deduct funds from the user's account but fail to reach the merchant's account due to a timeout at the NPCI (National Payments Corporation of India) switch.</p>
<p>In these scenarios, the banking guidelines mandate auto-reversals. If a transaction is dropped in transit after debiting the customer, the issuing bank is responsible for identifying the orphaned transaction and crediting the funds back to the user within a specific SLA (typically T+1 or T+2 days).</p>
<p>For engineering teams, this highlights the importance of transparent user communication. When a transaction is in an ambiguous state, it is far better to display a message like, "Your payment is being verified. If deducted, it will be automatically refunded within 48 hours," rather than allowing the user to panic and hit the 'Pay' button again. Combining technical safeguards like idempotency keys with clear, empathetic UX is the only complete solution to the double-charge dilemma.</p>
      </div>
    </div>
  </article>
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
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="/js/main.js"></script>
</body>
</html>