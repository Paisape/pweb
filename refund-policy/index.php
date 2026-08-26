<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/refund-policy">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Contact Us � Paisape</title>
<meta name="description" content="Talk to Paisape about routing architecture, pricing and sandbox access. Replies within one business day." />
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

  <meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:title" content="Refund Policy — Paisape" />
  <meta property="og:description" content="Paisape Refund Policy — how we handle transaction disputes, chargebacks and refund requests." />
  <meta property="og:type" content="website" />
</head>

<body class="bg-white text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main">
  <section class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-36 pb-14 md:pt-44 md:pb-20">
    <div class="relative mx-auto max-w-3xl px-5 text-center">
      <h1 class="font-display text-[36px] font-extrabold leading-[1.12] tracking-tight text-ink sm:text-[46px]">
        Refund &amp; Cancellation Policy
      </h1>
      <p class="mt-4 text-slate-500">Last updated: August 2026</p>
    </div>
  </section>
  <section class="bg-white pb-14">
    <div class="mx-auto max-w-3xl px-5 text-[15px] leading-relaxed text-body space-y-6">
      <p><strong>Paisape Techfin Private Limited</strong> ("Paisape") operates as a payment aggregator. Our Refund & Cancellation Policy dictates how transaction reversals are handled on our platform.</p>
      
      <h2 class="text-xl font-bold text-ink">1. Failed Transactions</h2>
      <p>In the event that a customer's account is debited but the transaction fails to capture on the merchant's end (due to network failure, bank downtime, or technical timeouts), Paisape will automatically initiate a refund. The amount will be credited back to the customer's original payment method (Bank Account, Credit/Debit Card, or UPI) within <strong>5 to 7 business days</strong>.</p>

      <h2 class="text-xl font-bold text-ink">2. Merchant-Initiated Refunds</h2>
      <p>If a customer cancels an order or returns a product, the merchant must initiate the refund via the Paisape Merchant Dashboard or API.</p>
      <ul class="list-disc pl-5 space-y-2">
        <li>Once initiated by the merchant, Paisape will process the refund immediately to the acquiring bank.</li>
        <li>The time taken for the credit to reflect in the customer's account depends on the customer's bank (typically 3 to 7 working days).</li>
      </ul>

      <h2 class="text-xl font-bold text-ink">3. Non-Refundable Fees</h2>
      <p>Unless due to a technical error on Paisape's part, Merchant Discount Rates (MDR) and transaction processing fees applied to the original transaction are non-refundable.</p>

      <h2 class="text-xl font-bold text-ink">4. Chargebacks</h2>
      <p>If a customer files a chargeback with their issuing bank claiming fraud or non-delivery of goods, the refund is subject to the chargeback resolution process as per Visa/Mastercard/NPCI guidelines. The merchant must provide valid proof of delivery to contest the chargeback.</p>

      <h2 class="text-xl font-bold text-ink">5. Support</h2>
      <p>Customers facing delays in refunds for failed transactions should first contact the respective merchant. If the merchant confirms the refund was processed by Paisape, customers can reach out to our support team with the Transaction ID at <a href="mailto:support@paisape.in" class="text-brand hover:underline">support@paisape.in</a>.</p>
    </div>
  </section>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
</body>
</html>







