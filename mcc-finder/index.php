<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/mcc-finder">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free Merchant Category Code (MCC) Finder & PG Risk Classifier — Paisape</title>
<meta name="description" content="Instantly find standard NPCI, Visa, and Mastercard 4-digit MCC codes by business keywords or website details. Check your Payment Gateway onboarding risk rating and MDR fee estimates." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free Merchant Category Code (MCC) Finder & PG Risk Classifier — Paisape" />
<meta property="og:description" content="Resolve MCC codes and onboarding risk profiles instantly. Designed for Indian payment gateways." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/mcc-finder" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

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

  <!-- Header Banner -->
  <div class="mx-auto max-w-site px-5 mb-8 text-center">
    <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Developer Tool</span>
    <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">Merchant Category Code (MCC) Finder</h1>
    <p class="mt-2 text-body text-sm sm:text-base max-w-2xl mx-auto">Analyze business structures, meta descriptions, or website keywords to resolve ISO 18245 MCC codes, expected PG transaction fees, and regulatory risk ratings.</p>
  </div>

  <!-- Main Workspace -->
  <div class="mx-auto max-w-site px-5 grid grid-cols-1 lg:grid-cols-12 gap-8">

    <!-- Left Controls (Col 5) -->
    <div class="lg:col-span-5 space-y-6">
      
      <!-- Input Mode Card -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">Find MCC Code</h3>
        
        <div>
          <label class="block text-xs font-bold text-slate-500 mb-1">Search Industry or Category</label>
          <input type="text" id="mccSearchInput" oninput="handleSearch(this.value)" placeholder="e.g. software, grocery, clothing, education..." class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-4 py-3 text-sm font-semibold text-ink placeholder-slate-400 focus:border-brand focus:outline-none transition">
        </div>
      </div>

      <!-- Quick Categories -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider mb-3">Popular Categories</h3>
        <div class="flex flex-wrap gap-2">
          <button onclick="quickSelect('SaaS')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">SaaS / Software</button>
          <button onclick="quickSelect('E-commerce')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">E-commerce</button>
          <button onclick="quickSelect('Education')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Education</button>
          <button onclick="quickSelect('Grocery')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Grocery</button>
          <button onclick="quickSelect('Fashion')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Clothing &amp; Fashion</button>
          <button onclick="quickSelect('Restaurant')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Restaurants</button>
          <button onclick="quickSelect('Financial')" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-50 text-slate-600 hover:bg-brandLt hover:text-brand transition">Financial / Wallet</button>
        </div>
      </div>

    </div>

    <!-- Right Workspace (Col 7) -->
    <div class="lg:col-span-7 space-y-6">

      <!-- Selected MCC Detail Panel -->
      <div id="mccDetailCard" class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm relative overflow-hidden hidden">
        <div class="absolute top-0 right-0 h-24 w-24 bg-brand/5 rounded-full blur-2xl pointer-events-none"></div>

        <div class="flex items-start justify-between gap-4">
          <div>
            <span id="detailCode" class="font-mono text-3xl font-black text-brand tracking-tight"></span>
            <h2 id="detailTitle" class="text-xl font-extrabold text-ink mt-1"></h2>
            <p id="detailDesc" class="text-xs text-slate-500 mt-1 leading-relaxed"></p>
          </div>
          <span id="detailRiskBadge" class="px-3.5 py-1.5 rounded-full text-[10.5px] font-black uppercase tracking-wider"></span>
        </div>

        <!-- MDR and Payouts Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-6 border-t border-b border-slate-100 py-5">
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">UPI Rates</p>
            <p id="rateUpi" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Debit Cards</p>
            <p id="rateDebit" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Credit Cards</p>
            <p id="rateCredit" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
          <div class="bg-slate-50/50 p-3 rounded-2xl text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase">Netbanking</p>
            <p id="rateNb" class="text-sm font-black text-ink mt-0.5"></p>
          </div>
        </div>

        <!-- Compliance & Required Documents -->
        <div class="mt-5 space-y-3">
          <h4 class="text-xs font-extrabold text-ink uppercase tracking-wider">Required Compliance Documents</h4>
          <ul id="detailDocsList" class="space-y-1.5 text-xs text-slate-600">
            <!-- Injected dynamically -->
          </ul>
        </div>
      </div>

      <!-- Live Search Matches List -->
      <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
        <div class="flex items-center justify-between">
          <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">Matches Found</h3>
          <span id="matchCountBadge" class="text-xs font-bold text-brand bg-brandLt px-2.5 py-1 rounded-full">0 Codes</span>
        </div>

        <div id="mccList" class="divide-y divide-slate-100 max-h-[480px] overflow-y-auto pr-1">
          <!-- Injected dynamically -->
        </div>
      </div>

    </div>

  </div>

</main>

<!-- Standard Site Footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src="/js/main.js"></script>

<script>
// Comprehensive ISO 18245 MCC codes dictionary for Indian ecosystem
const mccDatabase = [
  {
    code: "7372",
    title: "SaaS, Software & Cloud Services",
    desc: "Computer Programming, Software Development, Web Hosting, Data Processing, and cloud subscription portals.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.5%",
    nb: "₹5 - ₹15 flat",
    docs: [
      "Sole Proprietorship / Partnership Deed / Incorporation Certificate",
      "Business PAN Card",
      "GSTIN Registration Certificate (Mandatory for SaaS)",
      "Website terms and clear refund policy page URLs"
    ],
    keywords: ["saas", "software", "cloud", "api", "hosting", "programming", "subscription", "web", "app", "tech", "technology", "platform", "b2b", "digital", "internet", "website", "mobile", "design", "development"]
  },
  {
    code: "5311",
    title: "E-commerce, Marketplaces & Department Stores",
    desc: "Online marketplaces, retail shops, department stores, consumer goods, and general e-commerce platforms.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.5% - 2.0%",
    nb: "₹5 - ₹12 flat",
    docs: [
      "Sole Proprietorship / Partnership Deed / Incorporation Certificate",
      "Business PAN Card",
      "GSTIN Registration Certificate",
      "Shop & Establishment License"
    ],
    keywords: ["amazon", "flipkart", "ecommerce", "shopping", "retail", "marketplace", "goods", "buy", "store", "products", "electronics", "sell", "online shop", "d2c"]
  },
  {
    code: "8299",
    title: "E-Learning, Coaching & Online Courses",
    desc: "Educational Services, schools, tutorials, online skill courses, test series, and learning management systems.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.8% - 2.2%",
    nb: "₹5 - ₹12 flat",
    docs: [
      "KYC documents of owner/partners",
      "Domain ownership certificate",
      "Clear terms of service detailing student refund schedules"
    ],
    keywords: ["education", "coaching", "tuition", "school", "college", "course", "classes", "learning", "tutorial", "skill", "training", "student", "teacher", "learn", "study", "exam", "test", "certification", "degree", "academy", "institute"]
  },
  {
    code: "5411",
    title: "Grocery Stores & Supermarkets",
    desc: "Online grocery delivery apps, local supermarkets, organic fruits, vegetables, and daily household essentials.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0% (Below ₹2000)",
    credit: "1.5% - 1.9%",
    nb: "₹3 - ₹10 flat",
    docs: [
      "FSSAI Food License (Mandatory for food delivery and grocery stores)",
      "Shop and Establishment License",
      "GSTIN registration certificate"
    ],
    keywords: ["grocery", "supermarket", "food", "fruits", "vegetables", "organic", "shop", "delivery", "store", "dairy", "milk"]
  },
  {
    code: "5651",
    title: "Family Clothing & Apparel Stores",
    desc: "E-commerce fashion boutiques, shoes, ready-made garments, and lifestyle apparel retail.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.3%",
    nb: "₹5 - ₹15 flat",
    docs: [
      "Shop Establishment license",
      "GSTIN Certificate",
      "Proof of product inventory or vendor agreements"
    ],
    keywords: ["clothing", "fashion", "apparel", "boutique", "shoes", "garments", "wear", "shirts", "dresses", "lifestyle"]
  },
  {
    code: "5812",
    title: "Restaurants & Fine Dining",
    desc: "Eating places, cafes, cloud kitchens, fine dining outlets, catering services.",
    risk: "Low Risk",
    upi: "0% (Free)",
    debit: "0.4% - 0.9%",
    credit: "1.9% - 2.2%",
    nb: "₹4 - ₹12 flat",
    docs: [
      "FSSAI Food Safety License",
      "GSTIN registration",
      "Store location photo & menu card"
    ],
    keywords: ["restaurant", "cafe", "dining", "kitchen", "catering", "hotel", "food", "bakery", "sweets", "eat", "meal", "dinner", "lunch", "breakfast", "menu", "takeaway", "dine"]
  },
  {
    code: "5912",
    title: "Pharmacies & Chemists",
    desc: "Online pharmacy delivery portals, medicine stores, healthcare supplements, and diagnostic kits.",
    risk: "High Risk",
    upi: "0% (Free)",
    debit: "0.9%",
    credit: "2.5% - 2.9%",
    nb: "₹10 - ₹20 flat",
    docs: [
      "Drug License Form 20 or Form 21 (Mandatory)",
      "Pharmacist Registration Certificate",
      "Prescription upload checkpoint enabled on website checkout"
    ],
    keywords: ["pharmacy", "chemist", "medicine", "drugs", "healthcare", "supplement", "prescription", "diagnostic", "medical"]
  },
  {
    code: "4722",
    title: "Travel Agencies & Tour Operators",
    desc: "Flight ticketing portals, hotel booking aggregators, vehicle rentals, and holiday packages.",
    risk: "Medium Risk",
    upi: "0.9%",
    debit: "0.9%",
    credit: "2.2% - 2.7%",
    nb: "₹10 - ₹15 flat",
    docs: [
      "IATA certification / State Tourism board registration certificate",
      "Cancellation and refund policy explicitly displayed on checkout",
      "3-month bank statement verification"
    ],
    keywords: ["travel", "ticket", "flight", "booking", "hotel", "tour", "holiday", "cab", "rentals", "package", "bus"]
  },
  {
    code: "5944",
    title: "Jewelry, Gold & Silverware",
    desc: "Gold coins, diamond jewelry, silver ornaments, and precious gems retail stores.",
    risk: "Medium Risk",
    upi: "0.9%",
    debit: "0.9%",
    credit: "2.0% - 2.5%",
    nb: "₹10 - ₹20 flat",
    docs: [
      "BIS Hallmark License Certificate",
      "GSTIN showing jewelry classification",
      "Mandatory customer PAN card validation flow for transactions exceeding ₹2 Lakhs"
    ],
    keywords: ["jewelry", "gold", "silver", "diamond", "gems", "watches", "precious", "ornaments"]
  },
  {
    code: "6012",
    title: "Financial Institutions & Wallet Loading",
    desc: "Fintech platforms, investment apps, NBFCs, stock brokers, and wallet loading services.",
    risk: "High Risk",
    upi: "0.65% (Capped)",
    debit: "0.9%",
    credit: "2.5% - 3.2%",
    nb: "₹15 - ₹25 flat",
    docs: [
      "SEBI / RBI Registration Certificate matching category",
      "Corporate PAN Card",
      "Signed Board Resolution authorizing payment system activation"
    ],
    keywords: ["financial", "investment", "nbfc", "wallet", "mutual", "stock", "broker", "crypto", "trading", "finance", "lending", "payment", "pay", "money", "banking", "wealth", "fintech", "gateway", "remittance", "transfer", "credit", "cash", "loan"]
  },
  {
    code: "7995",
    title: "Betting, Gaming & Casinos",
    desc: "Fantasy sports platforms, online gaming, skill betting, lottery, and amusement services.",
    risk: "Restricted",
    upi: "0.9%",
    debit: "0.9%",
    credit: "3.0% - 3.5%",
    nb: "₹20 - ₹35 flat",
    docs: [
      "Legal Opinion Certificate declaring business complies with Skill Gaming state laws",
      "100% Geo-blocking enabled for banned states (Assam, Odisha, Telangana, Andhra Pradesh)",
      "Strict KYC validation matching RBI guidelines"
    ],
    keywords: ["betting", "casino", "lottery", "gambling", "gaming", "fantasy", "rummy", "poker", "wager", "sports", "play", "win", "cash", "chips", "tournament"]
  }
];

// Initialize List
document.addEventListener("DOMContentLoaded", () => {
  renderMatches(mccDatabase);
});

// Quick Selection
function quickSelect(category) {
  document.getElementById('mccSearchInput').value = category;
  handleSearch(category);
}

// Keyword Search Matcher
function handleSearch(val) {
  const query = val.trim().toLowerCase();
  if (!query) {
    renderMatches(mccDatabase);
    return;
  }

  const filtered = mccDatabase.filter(item => {
    return item.code.includes(query) ||
           item.title.toLowerCase().includes(query) ||
           item.desc.toLowerCase().includes(query) ||
           item.keywords.some(kw => kw.includes(query));
  });

  renderMatches(filtered);
}

// Render Results Grid
function renderMatches(list) {
  const container = document.getElementById('mccList');
  const countBadge = document.getElementById('matchCountBadge');
  container.innerHTML = '';

  countBadge.innerText = `${list.length} Codes`;

  if (list.length === 0) {
    container.innerHTML = `
      <div class="py-8 text-center text-slate-400 text-xs">
        No matching category codes found. Try another keyword.
      </div>
    `;
    return;
  }

  list.forEach((item, idx) => {
    const div = document.createElement('div');
    div.className = "py-3.5 flex items-start justify-between gap-4 cursor-pointer hover:bg-slate-50 px-2 rounded-xl transition duration-150";
    div.onclick = () => showDetail(item);
    div.innerHTML = `
      <div class="flex items-start gap-3">
        <span class="font-mono text-sm font-black text-brand bg-brandLt px-2 py-0.5 rounded">${item.code}</span>
        <div>
          <p class="text-sm font-extrabold text-ink">${item.title}</p>
          <p class="text-xs text-slate-500 line-clamp-1 mt-0.5">${item.desc}</p>
        </div>
      </div>
      <span class="text-[10px] font-black uppercase tracking-wider border px-2 py-0.5 rounded ${getRiskClass(item.risk)}">${item.risk}</span>
    `;
    container.appendChild(div);

    // Auto-select first result on query
    if (idx === 0) {
      showDetail(item);
    }
  });
}

// Show Detailed card info
function showDetail(item) {
  document.getElementById('mccDetailCard').classList.remove('hidden');
  document.getElementById('detailCode').innerText = item.code;
  document.getElementById('detailTitle').innerText = item.title;
  document.getElementById('detailDesc').innerText = item.desc;

  const riskBadge = document.getElementById('detailRiskBadge');
  riskBadge.innerText = item.risk;
  riskBadge.className = `px-3.5 py-1.5 rounded-full text-[10.5px] font-black uppercase tracking-wider ${getRiskClass(item.risk)}`;

  document.getElementById('rateUpi').innerText = item.upi;
  document.getElementById('rateDebit').innerText = item.debit;
  document.getElementById('rateCredit').innerText = item.credit;
  document.getElementById('rateNb').innerText = item.nb;

  const docsList = document.getElementById('detailDocsList');
  docsList.innerHTML = '';
  item.docs.forEach(doc => {
    const li = document.createElement('li');
    li.className = "flex items-start gap-2";
    li.innerHTML = `
      <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
      <span>${doc}</span>
    `;
    docsList.appendChild(li);
  });
}

function getRiskClass(risk) {
  switch (risk) {
    case 'Low Risk':
      return 'bg-emerald-50 text-emerald-600 border-emerald-100';
    case 'Medium Risk':
      return 'bg-amber-50 text-amber-600 border-amber-100';
    case 'High Risk':
      return 'bg-rose-50 text-rose-600 border-rose-100';
    case 'Restricted':
      return 'bg-slate-900 text-white border-slate-950';
    default:
      return 'bg-slate-50 text-slate-600';
  }
}
</script>
</body>
</html>
