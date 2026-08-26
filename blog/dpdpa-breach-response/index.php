<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/blog/dpdpa-breach-response">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines — Paisape Blog</title>
<meta name="description" content="A step-by-step DPDPA incident response SOP for Indian fintechs to detect, assess, and report data breaches to the Data Protection Board within legal timeframes." />
<meta property="og:type" content="article" />
<meta property="og:title" content="Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines" />
<meta property="og:description" content="A step-by-step DPDPA incident response SOP for Indian fintechs to detect, assess, and report data breaches to the Data Protection Board within legal timeframes." />
<meta property="og:image" content="https://paisape.in/assets/blog/blog_dpdpa_breach.jpg" />
<meta property="og:url" content="https://paisape.in/blog/dpdpa-breach-response" />
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
<body class="bg-[#F8FCFF] text-body antialiased">
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
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main" class="relative overflow-hidden bg-gradient-to-b from-[#EAF4FD] via-[#F4FAFE] to-white pt-28 pb-20">
  <div class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand/10 blur-3xl"></div>
  <div class="pointer-events-none absolute -left-32 top-40 h-[380px] w-[380px] rounded-full bg-brand/[0.07] blur-3xl"></div>
  <article class="pt-36 pb-20">
    <div class="mx-auto max-w-4xl px-5">
      <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-[0.16em] mb-4">
        <span class="rounded-full bg-brand px-3 py-1 text-white">Engineering</span>
        <span class="text-body/60">10 min read</span>
      </div>
  
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-ink">
        Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines
      </h1>
  
      <p class="mt-4 text-lg text-body leading-relaxed">
        A step-by-step DPDPA incident response SOP for Indian fintechs to detect, assess, and report data breaches to the Data Protection Board within legal timeframes.
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
        <img src="/assets/blog/blog_dpdpa_breach.jpg" alt="Hero Image" class="w-full h-auto object-cover" />
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

<div id="dpdpa-en" class="space-y-8"><div class="rounded-2xl bg-brand/5 border border-brand/10 p-6"><p class="text-sm text-body"><strong>Part 4:</strong> <a href="/blog/dpdpa-vendor-dpa-apis" class="text-brand underline">Vendor DPAs</a> | <strong>Part 6:</strong> <a href="/blog/dpdpa-hardware-privacy" class="text-brand underline">Hardware Privacy</a></p></div><h2>1. What Counts as a Personal Data Breach?</h2><p>The DPDPA defines a breach as any unauthorized processing, accidental disclosure, acquisition, sharing, use, alteration, destruction, or loss of access to personal data. This includes database exfiltration, misconfigured cloud storage exposing PII, insider threats, ransomware attacks, and third-party processor breaches.</p><h2>2. The 5-Step Mandatory Breach Response SOP</h2><ol><li><strong>Detection and Containment (0-2 Hours):</strong> Activate Incident Response Team. Isolate affected systems. Revoke compromised API keys. Preserve all logs in read-only storage.</li><li><strong>Internal Assessment (2-24 Hours):</strong> Define scope - which data categories, how many users affected. Assess risk level: High (Aadhaar/PAN/card data), Medium (contact info), Low (non-PII). Produce a formal Breach Assessment Report.</li><li><strong>DPBI Notification (Within 72 Hours):</strong> Notify the Data Protection Board with: nature and scope of breach, number of affected users, DPO contact details, likely consequences, and remedial measures taken.</li><li><strong>User Notification:</strong> Inform all affected Data Principals via email/SMS about what was breached, the risk it poses, and what steps they should take.</li><li><strong>Patch and Post-Incident Review:</strong> Fix the vulnerability. Run full VAPT. Document lessons learned. File a final closure report with DPBI.</li></ol><h2>3. Technical Safeguards</h2><ul><li><strong>Encryption at Rest:</strong> AES-256 for all PII databases. Keys via HSM or cloud KMS.</li><li><strong>Encryption in Transit:</strong> TLS 1.3 for all APIs. mTLS for microservice communication.</li><li><strong>Access Controls:</strong> RBAC with Least Privilege. MFA mandatory for production DB access.</li><li><strong>Continuous Monitoring:</strong> SIEM for real-time anomaly detection and automated alerts on bulk data exports.</li></ul><div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3"><h3 class="text-white font-display text-base font-bold mt-0">Continue the DPDPA Series</h3><div class="grid gap-3 sm:grid-cols-2 text-xs"><a href="/blog/dpdpa-vendor-dpa-apis" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">Part 4: Vendor DPAs</span></a><a href="/blog/dpdpa-hardware-privacy" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">Part 6: Hardware Privacy</span></a></div></div></div><div id="dpdpa-hi" class="hidden space-y-8"><div class="rounded-2xl bg-brand/5 border border-brand/10 p-6"><p class="text-sm text-body"><strong>भाग 4:</strong> <a href="/blog/dpdpa-vendor-dpa-apis" class="text-brand underline">वेंडर DPA</a> | <strong>भाग 6:</strong> <a href="/blog/dpdpa-hardware-privacy" class="text-brand underline">हार्डवेयर प्राइवेसी</a></p></div><h2>1. व्यक्तिगत डेटा ब्रीच क्या है?</h2><p>DPDPA के अनुसार, किसी भी अनधिकृत डेटा प्रसंस्करण या डेटा तक पहुंच खोने को ब्रीच माना जाता है। इसमें हैकर द्वारा चोरी, गलत कॉन्फ़िगर की गई क्लाउड स्टोरेज, और रैंसमवेयर हमले शामिल हैं।</p><h2>2. अनिवार्य ब्रीच प्रतिक्रिया के 5 कदम</h2><ol><li><strong>पहचान और नियंत्रण (0-2 घंटे):</strong> IRT सक्रिय करें, प्रभावित सिस्टम आइसोलेट करें।</li><li><strong>आंतरिक मूल्यांकन (2-24 घंटे):</strong> दायरा और जोखिम परिभाषित करें।</li><li><strong>DPBI को सूचना (72 घंटे में):</strong> DPO विवरण और उठाए गए कदम सहित।</li><li><strong>यूजर सूचना:</strong> प्रभावित ग्राहकों को स्पष्ट रूप से बताएं।</li><li><strong>पैच और समीक्षा:</strong> VAPT चलाएं, DPBI को अंतिम रिपोर्ट दाखिल करें।</li></ol><h2>3. तकनीकी सुरक्षा उपाय</h2><ul><li>AES-256, TLS 1.3, RBAC, MFA, और SIEM निगरानी अनिवार्य।</li></ul><div class="mt-8 rounded-2xl bg-slate-900 text-white p-6 space-y-3"><h3 class="text-white font-display text-base font-bold mt-0">DPDPA श्रृंखला जारी रखें</h3><div class="grid gap-3 sm:grid-cols-2 text-xs"><a href="/blog/dpdpa-vendor-dpa-apis" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">भाग 4: वेंडर DPA</span></a><a href="/blog/dpdpa-hardware-privacy" class="rounded-xl bg-slate-800/80 p-3 border border-slate-700 block"><span class="font-bold text-brand block mb-1">भाग 6: हार्डवेयर प्राइवेसी</span></a></div></div></div><script>document.addEventListener('DOMContentLoaded',function(){var a=document.getElementById('btn-lang-en'),b=document.getElementById('btn-lang-hi'),c=document.getElementById('dpdpa-en'),d=document.getElementById('dpdpa-hi');if(a&&b&&c&&d){a.addEventListener('click',function(){a.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';b.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';c.classList.remove('hidden');d.classList.add('hidden');});b.addEventListener('click',function(){b.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-white bg-brand transition shadow-sm';a.className='rounded-lg px-4 py-1.5 text-xs font-extrabold text-ink hover:text-brand transition';d.classList.remove('hidden');c.classList.add('hidden');});}});</script>
</div>
    </div>
  </article>
</main>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
<script src="/js/main.js"></script>
</body>
</html>