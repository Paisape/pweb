<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MKEB2EGGLG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MKEB2EGGLG');
</script>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/blog/upi-circle-delegated-payments">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics &amp; Spent Limit Enforcement — Paisape Blog</title>
  <!-- Last Updated: 26 September 2026 03:50 PM IST -->
  <meta name="description" content="A comprehensive engineering breakdown of NPCI's UPI Circle framework — primary-to-secondary user delegation, partial vs full permission models, spent-limit enforcement, and payment switch webhook integration." />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics &amp; Spent Limit Enforcement" />
  <meta property="og:description" content="Technical guide to NPCI's UPI Circle — secondary VPA delegation, token creation, real-time limit checks, instant revocation hooks, and payment switch integration." />
  <meta property="og:image" content="https://paisape.in/assets/blog/blog_upi_circle_handwritten.jpg" />
  <meta property="og:url" content="https://paisape.in/blog/upi-circle-delegated-payments" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics &amp; Spent Limit Enforcement" />
  <meta name="twitter:description" content="A comprehensive engineering breakdown of NPCI's UPI Circle framework — primary-to-secondary user delegation, partial vs full permission models, spent-limit enforcement, and payment switch webhook integration." />
  <meta name="twitter:image" content="https://paisape.in/assets/blog/blog_upi_circle_handwritten.jpg" />

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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TechArticle",
  "headline": "NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics & Spent Limit Enforcement",
  "description": "A comprehensive engineering breakdown of NPCI's UPI Circle framework — primary-to-secondary user delegation, partial vs full permission models, spent-limit enforcement, and payment switch webhook integration.",
  "image": ["https://paisape.in/assets/blog/blog_upi_circle_handwritten.jpg"],
  "datePublished": "26 September 2026",
  "author": {
    "@type": "Organization",
    "name": "Paisape Engineering",
    "url": "https://paisape.in"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Paisape Techfin Private Limited",
    "logo": {
      "@type": "ImageObject",
      "url": "https://paisape.in/assets/paisape-logo.png"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://paisape.in/blog/upi-circle-delegated-payments"
  }
}
</script>
</head>

<body class="bg-[#F8FCFF] text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main" class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-28 pb-20">
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>

  <article class="mx-auto max-w-4xl px-5 relative z-10">
    
    <!-- Article Header -->
    <header class="mb-8 text-left">
      <div class="flex items-center gap-3 mb-4">
        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-brand/10 text-brand">UPI &bull; Delegated Payments</span>
        <span class="text-xs text-slate-400 font-medium">10 min read &bull; 26 September 2026</span>
      </div>
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink tracking-tight leading-tight mb-4">
        NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics &amp; Spent Limit Enforcement
      </h1>
      <p class="text-lg text-body leading-relaxed font-normal">
        An engineering guide to NPCI's UPI Circle framework — linking primary VPAs with secondary delegates, managing full vs. partial delegation modes, enforcing real-time velocity limits, and handling instant revocation hooks.
      </p>
    </header>

    <!-- Handwritten Blueprint Diagram Card -->
    <div class="my-8 overflow-hidden rounded-2xl border border-slate-200 bg-white p-2 shadow-md">
      <img src="/assets/blog/blog_upi_circle_handwritten.jpg" alt="NPCI UPI Circle Delegated Payment Architecture Technical Whiteboard Diagram" class="w-full h-auto rounded-xl" />
    </div>

    <!-- Language Selector Bar -->
    <div class="my-8 flex items-center justify-between rounded-2xl bg-white p-3 border border-slate-200/80 shadow-sm">
      <div class="flex items-center gap-2">
        <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
        <span class="text-xs font-bold uppercase tracking-wider text-ink">Read Article In / भाषा चुनें:</span>
      </div>
      <div class="flex items-center gap-1 bg-slate-100 rounded-xl p-1 border border-slate-200">
        <button id="btn-lang-en" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm">English</button>
        <button id="btn-lang-hi" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition">हिन्दी (Hindi)</button>
      </div>
    </div>

    <!-- Prose Content -->
    <div class="prose prose-slate max-w-none space-y-6 text-[15.5px] leading-relaxed text-body">
      <!-- English Content -->
      <div id="dpdpa-en" class="space-y-8">
        <h2>1. Evolution of Delegated Payments in UPI</h2>
        <p>Historically, digital transactions on India's Unified Payments Interface (UPI) required every payer to possess an active bank account linked directly to their mobile number and verified via MPIN. This created adoption friction for dependents (children, elderly family members) and corporate employees requiring petty cash allowances.</p>
        <p>With <strong>NPCI UPI Circle</strong>, primary account holders can securely delegate payment authority to a secondary user (delegate) without sharing bank account access or MPIN credentials. The primary user maintains absolute governance, establishing strict monthly spending caps, single-transaction limits, and real-time instant revocation capabilities.</p>

        <h2>2. Architecture of NPCI UPI Circle</h2>
        <p>As illustrated in the hand-drawn technical whiteboard blueprint above, the UPI Circle framework consists of five core components:</p>

        <ul>
          <li><strong>Primary User VPA &amp; App:</strong> The account holder (e.g. <code>p.user@okhdfc</code>) who authorizes delegation and sets monetary bounds.</li>
          <li><strong>Secondary User VPA &amp; App:</strong> The delegate (e.g. <code>s.user@upi</code>) who initiates merchant or peer payments drawn from the primary user's account.</li>
          <li><strong>Delegate Auth Manager Microservice:</strong> Manages consent tokens, delegation rules, valid time-to-live (TTL), and active authorization states.</li>
          <li><strong>NPCI Core Switch &amp; Token Vault:</strong> Encrypts delegated credentials into an append-only token registry that binds primary and secondary accounts.</li>
          <li><strong>Spent Limit Enforcement Engine:</strong> Evaluates every transaction payload in real time against accumulated monthly spend and max per-txn caps.</li>
        </ul>

        <h2>3. Full Delegation vs. Partial Delegation Modes</h2>
        <div class="my-4 overflow-x-auto">
          <table class="w-full text-left text-sm border-collapse border border-slate-200">
            <thead>
              <tr class="bg-slate-100 font-bold text-ink">
                <th class="p-3 border border-slate-200">Delegation Parameter</th>
                <th class="p-3 border border-slate-200">Full Delegation (Auto-Approve)</th>
                <th class="p-3 border border-slate-200">Partial Delegation (Primary Approval)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Transaction Limit Cap</td>
                <td class="p-3 border border-slate-200">Max ₹15,000 / month (Per-txn cap ₹2,000)</td>
                <td class="p-3 border border-slate-200">Standard UPI limit (Up to ₹1,00,000)</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Secondary User MPIN</td>
                <td class="p-3 border border-slate-200 text-green-600 font-bold">Not Required (1-Tap Pay)</td>
                <td class="p-3 border border-slate-200 text-yellow-600 font-bold">Not Required</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Primary User Approval</td>
                <td class="p-3 border border-slate-200">Pre-authorized via token rules</td>
                <td class="p-3 border border-slate-200">Real-time push notification + MPIN authorization</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Best Use Case</td>
                <td class="p-3 border border-slate-200">Daily micro-expenses (pocket money, groceries)</td>
                <td class="p-3 border border-slate-200">High-value purchases requiring parent/owner check</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2>4. Delegated Token Payload Schema</h2>
<pre class="bg-slate-900 text-slate-200 p-4 rounded-xl text-xs overflow-x-auto">
{
  "delegation_id": "DELG_88492049102",
  "primary_vpa": "p.user@okhdfc",
  "secondary_vpa": "s.user@upi",
  "mode": "FULL_DELEGATION",
  "limits": {
    "max_per_txn_inr": 2000.00,
    "monthly_cap_inr": 15000.00,
    "accumulated_spend_inr": 3450.00
  },
  "token_status": "ACTIVE",
  "expires_at": "2027-09-26T23:59:59Z"
}
</pre>

        <h2>5. Real-Time Revocation &amp; Webhook Synchronization</h2>
        <p>If a primary user revokes secondary delegation from their mobile app, the <strong>Delegate Auth Manager</strong> instantly broadcasts an authenticated HTTP POST webhook payload to both NPCI Core and the PSP issuer switch:</p>

<pre class="bg-slate-900 text-slate-200 p-4 rounded-xl text-xs overflow-x-auto">
POST /v1/upi/circle/revoke HTTP/1.1
Host: api.paisape.in
Content-Type: application/json
X-Signature: sha256=e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855

{
  "event": "DELEGATION_REVOKED",
  "delegation_id": "DELG_88492049102",
  "timestamp": "2026-09-26T15:52:00Z"
}
</pre>

        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">Related Fintech Architecture Articles</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/rupay-credit-card-on-upi" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">RuPay Credit Card on UPI &rarr;</span>
              <span class="text-slate-400">ISO 8583 issuer switch and interchange fee mechanics.</span>
            </a>
            <a href="/blog/upi-autopay-mandate-lifecycle" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">UPI AutoPay Mandates &rarr;</span>
              <span class="text-slate-400">VPA binding, pre-debit notifications and recurring debits.</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Hindi Content -->
      <div id="dpdpa-hi" class="hidden space-y-8">
        <h2>1. UPI में डेलीगेटेड पेमेंट्स (Delegated Payments) का विकास</h2>
        <p>पारंपरिक रूप से, यूनिफाइड पेमेंट्स इंटरफेस (UPI) पर डिजिटल भुगतान करने के लिए प्रत्येक उपयोगकर्ता के पास अपना बैंक खाता होना अनिवार्य था। इससे परिवार के सदस्यों (बच्चों, बुजुर्गों) और कर्मचारियों के लिए दैनिक खर्चों में कठिनाई होती थी।</p>
        <p><strong>NPCI UPI Circle</strong> के माध्यम से प्राथमिक खाताधारक बैंक खाते की गोपनीय जानकारी साझा किए बिना किसी भी द्वितीयक उपयोगकर्ता (डेलीगेट) को सुरक्षित भुगतान अधिकार सौंप सकते हैं। प्राथमिक उपयोगकर्ता को मासिक सीमा और तुरंत अधिकार रद्द करने की पूरी स्वतंत्रता मिलती है।</p>

        <h2>2. UPI Circle का आर्किटेक्चर</h2>
        <p>उपरोक्त हस्तनिर्मित वाइटबोर्ड आर्किटेक्चर आरेख के अनुसार, UPI Circle में मुख्य रूप से 5 घटक शामिल हैं:</p>
        <ul>
          <li><strong>Primary User VPA:</strong> मुख्य खाताधारक (जैसे <code>p.user@okhdfc</code>) जो नियम और सीमा निर्धारित करता है।</li>
          <li><strong>Secondary User VPA:</strong> डेलीगेट (जैसे <code>s.user@upi</code>) जो प्राथमिक खाते से भुगतान करता है।</li>
          <li><strong>Delegate Auth Manager:</strong> कंसेंट टोकन और नियमों की वैधता प्रबंधित करता है।</li>
          <li><strong>NPCI Core Switch:</strong> टोकन रजिस्ट्री के माध्यम से प्राथमिक और द्वितीयक खातों को जोड़ता है।</li>
          <li><strong>Spent Limit Engine:</strong> प्रत्येक लेन-देन पर रियल-टाइम खर्च सीमा की जांच करता है।</li>
        </ul>

        <h2>3. Full Delegation बनाम Partial Delegation</h2>
        <p>Full Delegation में प्रति माह ₹15,000 (प्रति लेन-देन ₹2,000) तक बिना MPIN के 1-टैप भुगतान की अनुमति होती है। वहीं Partial Delegation में उच्च मूल्य के लेन-देन के लिए प्राथमिक उपयोगकर्ता की रियल-टाइम स्वीकृति आवश्यक होती है।</p>

        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">संबंधित फिनटेक लेख</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/rupay-credit-card-on-upi" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">RuPay क्रेडिट कार्ड ऑन UPI &rarr;</span>
            </a>
            <a href="/blog/upi-autopay-mandate-lifecycle" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">UPI ऑटोपे मैंडेट्स &rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </article>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<button id="toTop" aria-label="Back to top"
  class="fixed bottom-6 right-6 z-40 flex h-11 w-11 translate-y-4 items-center justify-center rounded-full bg-mint text-night opacity-0 shadow-xl transition-all duration-300 hover:-translate-y-1">
  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<script src="/js/main.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var btnEn = document.getElementById('btn-lang-en');
  var btnHi = document.getElementById('btn-lang-hi');
  var contentEn = document.getElementById('dpdpa-en');
  var contentHi = document.getElementById('dpdpa-hi');

  if (btnEn && btnHi && contentEn && contentHi) {
    btnEn.addEventListener('click', function () {
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      contentEn.classList.remove('hidden');
      contentHi.classList.add('hidden');
    });

    btnHi.addEventListener('click', function () {
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      contentHi.classList.remove('hidden');
      contentEn.classList.add('hidden');
    });
  }
});
</script>
</body>
</html>
