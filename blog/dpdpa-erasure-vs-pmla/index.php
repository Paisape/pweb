<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/blog/dpdpa-erasure-vs-pmla">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict — Paisape Blog</title>
<meta name="description" content="How DPDPA Section 8(7) resolves the conflict between a user's Right to Erasure and mandatory RBI/PMLA retention." />
<meta property="og:type" content="article" />
<meta property="og:title" content="Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict" />
<meta property="og:description" content="How DPDPA Section 8(7) resolves the conflict between a user's Right to Erasure and mandatory RBI/PMLA retention." />
<meta property="og:image" content="https://paisape.in/assets/blog/blog_dpdpa_erasure.jpg" />
<meta property="og:url" content="https://paisape.in/blog/dpdpa-erasure-vs-pmla" />
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
<div class="fixed top-0 left-0 z-[100] w-full px-4 py-2.5 text-center shadow-md border-b border-black/10" style="background-image: url('/assets/hand_painted_tricolor.jpg'); background-size: cover; background-position: center;">
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
        <span class="text-body/60">9 min read</span>
      </div>
  
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-ink">
        Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict
      </h1>
  
      <p class="mt-4 text-lg text-body leading-relaxed">
        How DPDPA Section 8(7) resolves the conflict between a user's Right to Erasure and mandatory RBI/PMLA retention.
      </p>
  
      <div class="mt-6 flex items-center justify-between border-y border-slate-100 py-4">
        <div class="flex items-center gap-3">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brandLt font-display text-[13px] font-bold text-brand">PE</span>
          <div>
            <p class="text-[13.5px] font-semibold text-ink">Paisape Engineering</p>
            <p class="text-[12px] text-body/70">Engineering &middot; 19 August 2026</p>
          </div>
        </div>
        <a href="/blog" class="text-xs font-semibold text-brand hover:underline">&larr; Back to all posts</a>
      </div>

      <div class="my-10 overflow-hidden rounded-3xl border border-slate-200 shadow-md">
        <img src="/assets/blog/blog_dpdpa_erasure.jpg" alt="Hero Image" class="w-full h-auto object-cover" />
      </div>

      <!-- Language Toggle Control -->
      <div class="my-8 flex items-center justify-between rounded-2xl bg-mist p-3 border border-slate-200/80 shadow-sm">
        <div class="flex items-center gap-2">
          <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
          <span class="text-xs font-bold uppercase tracking-wider text-ink">Read Article In / भाषा चुनें:</span>
        </div>
        <div class="flex items-center gap-1 bg-white rounded-xl p-1 border border-slate-200">
          <button id="btn-lang-en" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm">English</button>
          <button id="btn-lang-hi" class="rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition">हिंदी (Hindi)</button>
        </div>
      </div>
  
      <div class="prose prose-slate max-w-none space-y-6 text-[15.5px] leading-relaxed text-body">

<div id="dpdpa-en" class="space-y-8"><div class="rounded-2xl bg-brand/5 border border-brand/10 p-6"><p class="text-sm text-body"><strong>Part 2:</strong> <a href="/blog/dpdpa-consent-architecture" class="text-brand underline">Consent Architecture</a> | <strong>Part 4:</strong> <a href="/blog/dpdpa-vendor-dpa-apis" class="text-brand underline">Vendor DPAs</a></p></div><h2>1. The Core Conflict</h2><p>DPDPA gives every Indian citizen a Right to Erasure. At the same time, RBI and PMLA mandate fintechs to retain KYC and transaction records for 5 to 10 years. What happens when a customer says delete my data but the law says keep it for 10 years?</p><h2>2. The Legal Resolution: Section 8(7)</h2><p>DPDPA Section 8(7) states a Data Fiduciary is not required to comply with an erasure request if retaining data is necessary for compliance with any law in force in India. RBI and PMLA obligations legally override a customer's erasure request.</p><h2>3. Retention Requirements Table</h2><div class="my-4 overflow-x-auto"><table class="w-full text-left text-sm border-collapse border border-slate-200"><thead><tr class="bg-slate-100 font-bold"><th class="p-3 border border-slate-200">Data Category</th><th class="p-3 border border-slate-200">Retention Period</th><th class="p-3 border border-slate-200">Authority</th></tr></thead><tbody><tr><td class="p-3 border border-slate-200">KYC Documents (PAN, Aadhaar)</td><td class="p-3 border border-slate-200 font-bold">5 Years from closure</td><td class="p-3 border border-slate-200">RBI KYC Master Direction</td></tr><tr><td class="p-3 border border-slate-200">Transaction Records</td><td class="p-3 border border-slate-200 font-bold">10 Years</td><td class="p-3 border border-slate-200">PMLA 2002, Section 12</td></tr><tr><td class="p-3 border border-slate-200">Marketing Data</td><td class="p-3 border border-slate-200 font-bold text-red-600">Delete on request</td><td class="p-3 border border-slate-200">DPDPA Section 8(7)</td></tr></tbody></table></div><h2>4. The Architectural Solution: Data Isolation</h2><p>Separate data into two layers: Layer A (Statutory Compliance Store, immutable, restricted to compliance officers only) and Layer B (Product Data Store, fully erasable on user request).</p><h2>5. Communicating Retention to Users</h2><p>When rejecting a deletion request for statutory data, send a transparent written response explaining which data was deleted, which is retained under PMLA/RBI, the legal basis, and the exact future deletion date.</p><div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3"><h3 class="text-white font-display text-base font-bold mt-0">Continue the DPDPA Series</h3><div class="grid gap-3 sm:grid-cols-2 text-xs"><a href="/blog/dpdpa-consent-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">Part 2: Consent Architecture</span></a><a href="/blog/dpdpa-vendor-dpa-apis" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">Part 4: Vendor DPAs</span></a></div></div></div><div id="dpdpa-hi" class="hidden space-y-8"><div class="rounded-2xl bg-brand/5 border border-brand/10 p-6"><p class="text-sm text-body"><strong>भाग 2:</strong> <a href="/blog/dpdpa-consent-architecture" class="text-brand underline">कंसेंट आर्किटेक्चर</a> | <strong>भाग 4:</strong> <a href="/blog/dpdpa-vendor-dpa-apis" class="text-brand underline">वेंडर DPA</a></p></div><h2>1. मुख्य विरोधाभास</h2><p>DPDPA हर भारतीय को Right to Erasure देता है। दूसरी तरफ, RBI और PMLA फिनटेक कंपनियों को KYC और ट्रांजैक्शन रिकॉर्ड 5 से 10 साल तक रखने के लिए बाध्य करते हैं।</p><h2>2. कानूनी समाधान: धारा 8(7)</h2><p>RBI और PMLA की जिम्मेदारियां ग्राहक की डेटा मिटाने की मांग को कानूनी रूप से ओवरराइड करती हैं।</p><h2>3. किस डेटा को रखना जरूरी है?</h2><ul><li><strong>KYC दस्तावेज:</strong> खाता बंद होने के 5 साल बाद तक।</li><li><strong>ट्रांजैक्शन रिकॉर्ड:</strong> 10 साल (PMLA 2002)।</li><li><strong>मार्केटिंग डेटा:</strong> यूजर की मांग पर तुरंत डिलीट।</li></ul><h2>4. आर्किटेक्चरल समाधान: डेटा आइसोलेशन</h2><p>परत A (वैधानिक, केवल अनुपालन अधिकारियों तक पहुंच) और परत B (मार्केटिंग, DPDPA के तहत मिटाने योग्य)।</p><div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3"><h3 class="text-white font-display text-base font-bold mt-0">DPDPA श्रृंखला जारी रखें</h3><div class="grid gap-3 sm:grid-cols-2 text-xs"><a href="/blog/dpdpa-consent-architecture" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">भाग 2: कंसेंट आर्किटेक्चर</span></a><a href="/blog/dpdpa-vendor-dpa-apis" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">भाग 4: वेंडर DPA</span></a></div></div></div><script>document.addEventListener('DOMContentLoaded',function(){var a=document.getElementById('btn-lang-en'),b=document.getElementById('btn-lang-hi'),c=document.getElementById('dpdpa-en'),d=document.getElementById('dpdpa-hi');if(a&&b&&c&&d){a.addEventListener('click',function(){a.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';b.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';c.classList.remove('hidden');d.classList.add('hidden');});b.addEventListener('click',function(){b.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';a.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';d.classList.remove('hidden');c.classList.add('hidden');});}});</script>
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