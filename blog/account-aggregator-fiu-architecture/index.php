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
  <link rel="canonical" href="https://paisape.in/blog/account-aggregator-fiu-architecture">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Account Aggregator (AA 2.0) &amp; FIU Architecture: End-to-End Encryption, Consent Artefacts &amp; Real-Time Underwriting — Paisape Blog</title>
  <!-- Last Updated: 13 October 2026 11:30 AM IST -->
  <meta name="description" content="A comprehensive engineering guide to India's Account Aggregator (AA 2.0) framework — Financial Information User (FIU) switch architecture, Diffie-Hellman ECDH key exchange, digital consent artefacts, and automated underwriting engines." />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Account Aggregator (AA 2.0) &amp; FIU Architecture: End-to-End Encryption, Consent Artefacts &amp; Real-Time Underwriting" />
  <meta property="og:description" content="Engineering deep-dive into the Account Aggregator ecosystem: FIP to FIU data flows, forward-secure ECDH encryption, consent handle verification, and sub-15s algorithmic credit appraisal." />
  <meta property="og:image" content="https://paisape.in/assets/blog/blog_account_aggregator_aa2_handwritten.jpg" />
  <meta property="og:url" content="https://paisape.in/blog/account-aggregator-fiu-architecture" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Account Aggregator (AA 2.0) &amp; FIU Architecture: End-to-End Encryption, Consent Artefacts &amp; Real-Time Underwriting" />
  <meta name="twitter:description" content="A comprehensive engineering guide to India's Account Aggregator (AA 2.0) framework — Financial Information User (FIU) switch architecture, Diffie-Hellman ECDH key exchange, digital consent artefacts, and automated underwriting engines." />
  <meta name="twitter:image" content="https://paisape.in/assets/blog/blog_account_aggregator_aa2_handwritten.jpg" />

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
  "headline": "Account Aggregator (AA 2.0) & FIU Architecture: End-to-End Encryption, Consent Artefacts & Real-Time Underwriting",
  "description": "A comprehensive engineering guide to India's Account Aggregator (AA 2.0) framework — Financial Information User (FIU) switch architecture, Diffie-Hellman ECDH key exchange, digital consent artefacts, and automated underwriting engines.",
  "image": ["https://paisape.in/assets/blog/blog_account_aggregator_aa2_handwritten.jpg"],
  "datePublished": "2026-10-13T11:30:00+05:30",
  "dateModified": "2026-10-13T11:30:00+05:30",
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
    "@id": "https://paisape.in/blog/account-aggregator-fiu-architecture"
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
        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-brand/10 text-brand">Banking &bull; Data &amp; Underwriting</span>
        <span class="text-xs text-slate-400 font-medium">11 min read &bull; 13 October 2026</span>
      </div>
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink tracking-tight leading-tight mb-4">
        Account Aggregator (AA 2.0) &amp; FIU Architecture: End-to-End Encryption, Consent Artefacts &amp; Real-Time Underwriting
      </h1>
      <p class="text-lg text-body leading-relaxed font-normal">
        A deep architectural breakdown of India's Account Aggregator (AA 2.0) rails — handling digitally signed consent handles, Elliptic Curve Diffie-Hellman (ECDH) payload encryption, asynchronous financial data pipelines, and sub-15 second credit scoring switches.
      </p>
    </header>

    <!-- Handwritten Blueprint Diagram Card -->
    <div class="my-8 overflow-hidden rounded-2xl border border-slate-200 bg-white p-2 shadow-md">
      <img src="/assets/blog/blog_account_aggregator_aa2_handwritten.jpg" alt="Account Aggregator AA 2.0 and FIU Architecture Whiteboard Diagram" class="w-full h-auto rounded-xl" />
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
        
        <h2>1. The Evolution to Account Aggregator (AA 2.0)</h2>
        <p>India's Account Aggregator (AA) framework has revolutionized digital credit origination, moving millions of MSMEs and retail borrowers away from screen-scraping PDF bank statements. Regulated directly by the Reserve Bank of India (RBI) with technical standards defined by ReBIT and Sahamati, the ecosystem operates as a zero-knowledge data conduit between <strong>Financial Information Providers (FIPs)</strong> and <strong>Financial Information Users (FIUs)</strong>.</p>
        <p>Under AA 2.0, the framework incorporates multi-FIP batch requests, dynamic recurring consent monitoring for overdraft facilities, and forward-secure Diffie-Hellman key ratchets — enabling fintech switches to retrieve and analyze 12 months of structured financial telemetry in less than 15 seconds.</p>

        <h2>2. System Topology: FIP, AA, and FIU Network</h2>
        <p>As illustrated in the hand-drawn technical whiteboard blueprint above, an AA data exchange operates across four discrete entities:</p>
        <ol>
          <li><strong>Data Principal (Borrower):</strong> Grants explicit, granular consent on their registered AA mobile handle (e.g., <code>user@onemoney</code>, <code>user@nadl</code>, <code>user@camspay</code>).</li>
          <li><strong>Account Aggregator (AA Switch):</strong> An RBI-licensed NBFC-AA that acts as an oblivious data pipe. By regulatory mandate, the AA can neither view, decrypt, nor store customer financial payload data.</li>
          <li><strong>Financial Information Provider (FIP):</strong> Scheduled Commercial Banks, Mutual Funds, Depository Participants (CDSL/NSDL), and GSTN holding customer assets and transactions.</li>
          <li><strong>Financial Information User (FIU):</strong> The lending fintech, neobank, or payment gateway consuming the verified data to underwrite working capital loans or calibrate instant credit lines.</li>
        </ol>

        <h2>3. Cryptographic Deep-Dive: ECDH Key Exchange</h2>
        <p>To guarantee complete data privacy, financial payloads are encrypted end-to-end between the FIP and FIU using <strong>Curve25519 Elliptic Curve Diffie-Hellman (ECDH)</strong> combined with AES-GCM-256 authenticated encryption:</p>
        <pre class="bg-slate-900 text-slate-200 p-4 rounded-xl text-xs overflow-x-auto">
// FIU generates ephemeral keypair per session request
const fiuKeyPair = crypto.generateKeyPairSync('x25519');
const fiuPublicKeyBase64 = fiuKeyPair.publicKey.export({ type: 'spki', format: 'pem' });

// Consent Artefact JSON payload dispatched to AA Switch
const consentRequest = {
  ver: "2.0.0",
  timestamp: "2026-10-13T11:30:00.000Z",
  ConsentDetail: {
    consentMode: "VIEW",
    fetchType: "ONETIME",
    consentTypes: ["TRANSACTIONS", "PROFILE", "SUMMARY"],
    fiTypes: ["DEPOSIT", "TERM_DEPOSIT"],
    DataConsumer: { id: "FIU_PAISAPE_PROD" },
    Customer: { id: "9876543210@onemoney" },
    Purpose: { code: "101", refUri: "https://api.sahamati.org.in/purpose/101" },
    KeyMaterial: {
      cryptoAlg: "ECDH",
      curve: "Curve25519",
      params: "AES/GCM/NoPadding",
      Nonce: crypto.randomBytes(32).toString('base64'),
      DHPublicKey: { KeyValue: fiuPublicKeyBase64 }
    }
  }
};</pre>

        <h2>4. Asynchronous Data Pipeline &amp; Webhook Handlers</h2>
        <p>Because querying core banking systems (CBS) for up to 365 days of high-volume transaction statements can take 3 to 12 seconds per institution, AA 2.0 decouples consent generation from data fulfillment:</p>
        <ul>
          <li><strong>Phase 1 (Consent Orchestration):</strong> The borrower approves the prompt via their mobile AA app or an embedded SDK. The AA issues a cryptographically signed XML/JSON Consent Artefact.</li>
          <li><strong>Phase 2 (FI Data Request):</strong> The FIU sends the Consent Artefact along with its ephemeral public key and nonce to the AA, which fan-outs data requests to all linked FIPs.</li>
          <li><strong>Phase 3 (Encrypted Payload Push):</strong> Each FIP encrypts statements using the FIU's public key and delivers the ciphertext via webhooks to the FIU's ingestion gateway.</li>
          <li><strong>Phase 4 (Decryption &amp; Ingestion):</strong> The FIU computes the shared secret, decrypts the JSON data in memory within an isolated execution boundary, and feeds the normalized ledger to its credit scoring model.</li>
        </ul>

        <h2>5. Core Metrics Table: AA 1.0 vs. AA 2.0 Rails</h2>
        <div class="my-4 overflow-x-auto">
          <table class="w-full text-left text-sm border-collapse border border-slate-200">
            <thead>
              <tr class="bg-slate-100 font-bold text-ink">
                <th class="p-3 border border-slate-200">Architecture Dimension</th>
                <th class="p-3 border border-slate-200">AA 1.0 Legacy</th>
                <th class="p-3 border border-slate-200">AA 2.0 Modern Standards</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Consent Latency</td>
                <td class="p-3 border border-slate-200">45 &ndash; 90 seconds (Redirect)</td>
                <td class="p-3 border border-slate-200 text-brand font-bold">&lt; 15 seconds (Headless Embedded SDK)</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Cryptographic Standard</td>
                <td class="p-3 border border-slate-200">RSA-2048 / PKCS#1 v1.5</td>
                <td class="p-3 border border-slate-200 text-brand font-bold">Curve25519 ECDH + AES-256-GCM</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Multi-FIP Support</td>
                <td class="p-3 border border-slate-200">Sequential polling per bank</td>
                <td class="p-3 border border-slate-200 text-brand font-bold">Parallel async fanout via AA Switch</td>
              </tr>
              <tr>
                <td class="p-3 border border-slate-200 font-bold">Recurring Monitoring</td>
                <td class="p-3 border border-slate-200">Manual re-consent per pull</td>
                <td class="p-3 border border-slate-200 text-emerald-600 font-bold">Granular periodic auto-fetch triggers</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2>6. Fraud Mitigation &amp; DPDPA Alignment</h2>
        <p>In adherence to India's Digital Personal Data Protection Act (DPDPA 2023) and RBI guidelines, the FIU must strictly enforce data minimization:</p>
        <ol>
          <li><strong>Purpose-Bound Data Retention:</strong> Transaction statements must be purged automatically from raw storage once the credit scoring model produces its underwriting vector.</li>
          <li><strong>Consent Revocation Hooks:</strong> If the Data Principal revokes consent inside their AA app, the AA switch fires an immediate revocation webhook to the FIU to terminate active monitoring jobs.</li>
          <li><strong>Tamper-Proof Audit Logging:</strong> Every decryption session must be recorded in an immutable write-once read-many (WORM) audit table containing the Consent Artefact hash, timestamp, and invoking service identity.</li>
        </ol>

        <!-- Related Navigation -->
        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">Explore Related Fintech Engineering Guides</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/rbi-uli-credit-origination-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">RBI Unified Lending Interface (ULI) &rarr;</span>
              <span class="text-slate-400">Land record &amp; GSTN data switches for instant loans.</span>
            </a>
            <a href="/blog/dpdpa-consent-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">DPDPA Consent Architecture &rarr;</span>
              <span class="text-slate-400">Building compliant consent vaults across 22 languages.</span>
            </a>
          </div>
        </div>

      </div>

      <!-- Hindi Content -->
      <div id="dpdpa-hi" class="hidden space-y-8">
        <h2>1. अकाउंट एग्रीगेटर (AA 2.0) का विकास</h2>
        <p>भारत का अकाउंट एग्रीगेटर (AA) फ्रेमवर्क डिजिटल लेंडिंग में एक क्रांतिकारी बदलाव लेकर आया है। आरबीआई द्वारा विनियमित और रेबिट (ReBIT) व सहमति (Sahamati) द्वारा मानकीकृत यह इकोसिस्टम <strong>फाइनेंशियल इंफॉर्मेशन प्रोवाइडर्स (FIPs)</strong> और <strong>फाइनेंशियल इंफॉर्मेशन यूजर्स (FIUs)</strong> के बीच सुरक्षित डेटा का आदान-प्रदान करता है।</p>
        <p>AA 2.0 के तहत मल्टी-FIP रिक्वेस्ट्स, रीयल-टाइम अंडरराइटिंग और एंड-टू-एंड डिफिए-हेलमैन एन्क्रिप्शन लागू किया गया है, जिससे 12 महीनों का बैंक स्टेटमेंट डेटा 15 सेकंड से भी कम समय में प्रोसेस हो जाता है।</p>

        <h2>2. सिस्टम टोपोलॉजी और मुख्य घटक</h2>
        <p>जैसा कि ऊपर दिए गए हैंड-ड्रॉन आर्किटेक्चर डायग्राम में दर्शाया गया है, यह सिस्टम चार मुख्य इकाइयों पर कार्य करता है:</p>
        <ul>
          <li><strong>डेटा प्रिंसिपल (ग्राहक):</strong> अपने AA हैंडल (जैसे <code>user@onemoney</code>) से सहमति देता है।</li>
          <li><strong>अकाउंट एग्रीगेटर (AA Switch):</strong> आरबीआई लाइसेंस प्राप्त संस्था जो डेटा को बिना देखे या स्टोर किए केवल पाइपलाइन का काम करती है।</li>
          <li><strong>फाइनेंशियल इंफॉर्मेशन प्रोवाइडर (FIP):</strong> बैंक और डिपॉजिटरी जो ग्राहक का वित्तीय डेटा रखते हैं।</li>
          <li><strong>फाइनेंशियल इंफॉर्मेशन यूजर (FIU):</strong> फिनटेक या लेंडर जो लोन मंजूरी के लिए डेटा का विश्लेषण करता है।</li>
        </ul>

        <h2>3. मजबूत एंड-टू-एंड एन्क्रिप्शन (ECDH)</h2>
        <p>ग्राहक की वित्तीय गोपनीयता सुनिश्चित करने के लिए डेटा FIP से FIU तक <strong>Curve25519 ECDH</strong> और <strong>AES-256-GCM</strong> से एन्क्रिप्ट रहता है। अकाउंट एग्रीगेटर स्वयं भी इस डेटा को डिक्रिप्ट नहीं कर सकता।</p>

        <h2>4. DPDPA और डेटा सुरक्षा अनुपालन</h2>
        <p>डिजिटल पर्सनल डेटा प्रोटेक्शन एक्ट (DPDPA) के अनुसार, क्रेडिट निर्णय पूरा होते ही रॉ डेटा को डिलीट कर दिया जाता है और ग्राहक द्वारा सहमति रद्द करने पर सभी सक्रिय मॉनिटरिंग प्रक्रियाएं तुरंत रोक दी जाती हैं।</p>

        <!-- Related Navigation -->
        <div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3">
          <h3 class="text-white font-display text-base font-bold mt-0">संबंधित तकनीकी लेख</h3>
          <div class="grid gap-3 sm:grid-cols-2 text-xs">
            <a href="/blog/rbi-uli-credit-origination-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">RBI यूनिफाइड लेंडिंग इंटरफेस (ULI) &rarr;</span>
            </a>
            <a href="/blog/dpdpa-consent-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block hover:border-brand transition">
              <span class="font-bold text-brand block mb-1">DPDPA कंसेंट आर्किटेक्चर &rarr;</span>
            </a>
          </div>
        </div>
      </div>

    </div>

  </article>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var btnEn = document.getElementById('btn-lang-en');
  var btnHi = document.getElementById('btn-lang-hi');
  var divEn = document.getElementById('dpdpa-en');
  var divHi = document.getElementById('dpdpa-hi');

  if (btnEn && btnHi && divEn && divHi) {
    btnEn.addEventListener('click', function() {
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      divEn.classList.remove('hidden');
      divHi.classList.add('hidden');
    });

    btnHi.addEventListener('click', function() {
      btnHi.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';
      btnEn.className = 'rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';
      divHi.classList.remove('hidden');
      divEn.classList.add('hidden');
    });
  }
});
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
<script src="/js/main.js"></script>
</body>
</html>
