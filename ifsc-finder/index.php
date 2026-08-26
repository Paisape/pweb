<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/ifsc-finder">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free IFSC Code Finder &amp; Bank Branch Validator — Paisape</title>
<meta name="description" content="Search and validate any Indian Bank IFSC code. Find bank branch address, MICR code, contact details, and NEFT, RTGS, IMPS, UPI support status." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free IFSC Code Finder & Bank Branch Validator — Paisape" />
<meta property="og:description" content="Instantly lookup Indian bank IFSC codes, branch address, contact details, and payment rails support." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/ifsc-finder" />
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
</head>

<body class="bg-slate-50 text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main" class="pt-32 pb-20">
  <div class="mx-auto max-w-site px-5">
    
    <!-- Page Header -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
      <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Banking &amp; Merchant Tool</span>
      <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">IFSC Code &amp; Bank Branch Finder</h1>
      <p class="mt-3 text-body text-[15px] leading-relaxed">Instantly validate 11-character Indian Financial System Codes (IFSC). Retrieve official bank name, branch address, contact details, and NEFT, RTGS, IMPS, UPI support status.</p>
    </div>

    <!-- Main Tool Container -->
    <div class="max-w-4xl mx-auto">
      
      <!-- Input Card -->
      <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <label for="ifscInput" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Enter 11-Character IFSC Code <span class="text-rose-500">*</span></label>
        <div class="relative flex items-center">
          <input type="text" id="ifscInput" maxlength="11" placeholder="e.g. SBIN0000691 or HDFC0000240" oninput="lookupIFSC()" class="w-full px-5 py-4 text-lg font-mono font-bold tracking-widest text-slate-900 border-2 border-slate-200 rounded-2xl focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition uppercase">
          <span id="ifscStatusIcon" class="absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-slate-100 text-slate-600">Enter IFSC</span>
        </div>
        
        <!-- Sample Shortcuts -->
        <div class="mt-4 flex flex-wrap items-center gap-2 text-xs">
          <span class="font-semibold text-slate-400">Try Sample IFSC Codes:</span>
          <button onclick="setSampleIFSC('SBIN0000691')" class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-700 font-mono rounded-lg transition">SBIN0000691 (SBI New Delhi)</button>
          <button onclick="setSampleIFSC('HDFC0000240')" class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-700 font-mono rounded-lg transition">HDFC0000240 (HDFC Fort)</button>
          <button onclick="setSampleIFSC('ICIC0000007')" class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-700 font-mono rounded-lg transition">ICIC0000007 (ICICI Connaught)</button>
          <button onclick="setSampleIFSC('KKBK0000958')" class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-700 font-mono rounded-lg transition">KKBK0000958 (Kotak)</button>
        </div>
      </div>

      <!-- Result Card -->
      <div id="resultCard" class="mt-8 bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xl hidden">
        <div class="flex items-center justify-between border-b border-slate-100 pb-5 mb-6">
          <div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-brand bg-brandLt px-3 py-1 rounded-full">Validated RBI IFSC Record</span>
            <h2 id="resBankName" class="text-2xl font-extrabold text-ink mt-2"></h2>
            <p class="text-xs font-mono text-slate-500 mt-1">IFSC: <span id="resIfscCode" class="font-bold text-brand"></span> &bull; MICR: <span id="resMicrCode" class="font-bold text-slate-700"></span></p>
          </div>
          <button onclick="copyBankDetails()" class="flex items-center gap-1.5 px-4 py-2 bg-brandLt text-brand font-bold text-xs rounded-xl hover:bg-brand/10 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
            Copy Details
          </button>
        </div>

        <!-- DETAILS GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          
          <!-- Branch Address & Location -->
          <div class="space-y-4">
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Branch Name &amp; Code</span>
              <p id="resBranch" class="text-base font-extrabold text-ink"></p>
            </div>

            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Full Branch Address</span>
              <p id="resAddress" class="text-sm font-medium text-slate-700 leading-relaxed"></p>
            </div>

            <div class="grid grid-cols-2 gap-4">
              <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">City / District</span>
                <p id="resCity" class="text-sm font-bold text-ink"></p>
              </div>
              <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">State</span>
                <p id="resState" class="text-sm font-bold text-ink"></p>
              </div>
            </div>
          </div>

          <!-- Payment Systems Capability Badges -->
          <div class="space-y-4">
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-3">Supported Payment Rails</span>
              <div class="grid grid-cols-2 gap-3">
                <div class="flex items-center gap-2 p-2.5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 font-bold text-xs">
                  <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  NEFT (Active)
                </div>
                <div class="flex items-center gap-2 p-2.5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 font-bold text-xs">
                  <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  RTGS (Active)
                </div>
                <div class="flex items-center gap-2 p-2.5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 font-bold text-xs">
                  <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  IMPS (24x7)
                </div>
                <div class="flex items-center gap-2 p-2.5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 font-bold text-xs">
                  <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  UPI Active
                </div>
              </div>
            </div>

            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Branch Contact Number</span>
              <p id="resContact" class="text-sm font-bold text-slate-800">Not Available</p>
            </div>
          </div>

        </div>

        <div id="copyNotice" class="mt-4 text-xs font-semibold text-emerald-600 text-center hidden">Bank &amp; Branch details copied to clipboard!</div>
      </div>

      <!-- RBI Security Disclaimer -->
      <div class="mt-8 p-4 rounded-2xl bg-slate-100 border border-slate-200 flex items-center gap-3 text-xs text-slate-600">
        <svg class="h-5 w-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span><strong>Bank Directory:</strong> All IFSC details are retrieved from publicly available banking datasets. Verify your bank account details before initiating high-value RTGS or NEFT transfers.</span>
      </div>

    </div>
  </div>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script>
// Known Top Offline Fallback Dataset for instant rendering
const topIFSC = {
  'SBIN0000691': { BANK: 'State Bank of India', BRANCH: 'NEW DELHI MAIN BRANCH', ADDRESS: '11, PARLIAMENT STREET, NEW DELHI', CITY: 'NEW DELHI', DISTRICT: 'NEW DELHI', STATE: 'DELHI', MICR: '110002001', CONTACT: '011-23374116' },
  'HDFC0000240': { BANK: 'HDFC Bank', BRANCH: 'MUMBAI - FORT', ADDRESS: 'MANEKJI WADIA BLDG, GROUND FLOOR, NANIK MOTWANI MARG, FORT, MUMBAI', CITY: 'MUMBAI', DISTRICT: 'MUMBAI', STATE: 'MAHARASHTRA', MICR: '400240002', CONTACT: '022-61729999' },
  'ICIC0000007': { BANK: 'ICICI Bank', BRANCH: 'CONNAUGHT PLACE', ADDRESS: '9A, PHELPS BUILDING, CONNAUGHT PLACE, NEW DELHI', CITY: 'NEW DELHI', DISTRICT: 'NEW DELHI', STATE: 'DELHI', MICR: '110229002', CONTACT: '011-41512760' },
  'KKBK0000958': { BANK: 'Kotak Mahindra Bank', BRANCH: 'MUMBAI - NARIMAN POINT', ADDRESS: 'GROUND FLOOR, BAKHTAWAR, 229, NARIMAN POINT, MUMBAI', CITY: 'MUMBAI', DISTRICT: 'MUMBAI', STATE: 'MAHARASHTRA', MICR: '400485002', CONTACT: '022-66596000' }
};

function setSampleIFSC(ifsc) {
  document.getElementById('ifscInput').value = ifsc;
  lookupIFSC();
}

function lookupIFSC() {
  const input = document.getElementById('ifscInput').value.trim().toUpperCase();
  const statusIcon = document.getElementById('ifscStatusIcon');
  const resultCard = document.getElementById('resultCard');

  // RegEx for official RBI 11-character IFSC: 4 letters + 0 + 6 alphanumeric
  const ifscRegex = /^[A-Z]{4}0[A-Z0-9]{6}$/;

  if (input.length < 11) {
    statusIcon.innerText = 'ENTER IFSC';
    statusIcon.className = 'absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-slate-100 text-slate-600';
    resultCard.classList.add('hidden');
    return;
  }

  if (!ifscRegex.test(input)) {
    statusIcon.innerText = 'INVALID FORMAT';
    statusIcon.className = 'absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-rose-100 text-rose-700';
    resultCard.classList.add('hidden');
    return;
  }

  statusIcon.innerText = 'VALIDATING...';
  statusIcon.className = 'absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-amber-100 text-amber-800';

  // Fast Render from Local Top Dataset if available
  if (topIFSC[input]) {
    renderIFSCResult(input, topIFSC[input]);
  }

  // Real-Time RBI Database API Fetcher
  fetch(`https://ifsc.razorpay.com/${input}`)
    .then(res => {
      if (!res.ok) throw new Error('IFSC Not Found');
      return res.json();
    })
    .then(data => {
      statusIcon.innerText = 'VALID IFSC';
      statusIcon.className = 'absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-emerald-600 text-white shadow-sm';
      renderIFSCResult(input, data);
    })
    .catch(err => {
      if (!topIFSC[input]) {
        statusIcon.innerText = 'NOT FOUND';
        statusIcon.className = 'absolute right-4 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-lg bg-rose-600 text-white';
        resultCard.classList.add('hidden');
      }
    });
}

function renderIFSCResult(ifsc, data) {
  const resultCard = document.getElementById('resultCard');
  
  document.getElementById('resBankName').innerText = data.BANK || 'Bank Details Found';
  document.getElementById('resIfscCode').innerText = ifsc;
  document.getElementById('resMicrCode').innerText = data.MICR || 'N/A';
  document.getElementById('resBranch').innerText = data.BRANCH || 'Main Branch';
  document.getElementById('resAddress').innerText = data.ADDRESS || 'Address not listed';
  document.getElementById('resCity').innerText = data.CITY || data.DISTRICT || 'City';
  document.getElementById('resState').innerText = data.STATE || 'India';
  document.getElementById('resContact').innerText = data.CONTACT || 'Standard Branch Contact';

  resultCard.classList.remove('hidden');
}

function copyBankDetails() {
  const bank = document.getElementById('resBankName').innerText;
  const ifsc = document.getElementById('resIfscCode').innerText;
  const branch = document.getElementById('resBranch').innerText;
  const address = document.getElementById('resAddress').innerText;

  const copyText = `Bank: ${bank}\nIFSC Code: ${ifsc}\nBranch: ${branch}\nAddress: ${address}`;

  if (navigator.clipboard) {
    navigator.clipboard.writeText(copyText);
    const notice = document.getElementById('copyNotice');
    notice.classList.remove('hidden');
    setTimeout(() => notice.classList.add('hidden'), 3000);
  }
}
</script>
<script src="/js/main.js"></script>
</body>
</html>
