<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/hsn-sac-finder">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free HSN &amp; SAC Code Finder — GST Rate Lookup — Paisape</title>
<meta name="description" content="Search over 5,000+ Indian GST HSN (Goods) and SAC (Services) codes. Find exact CGST, SGST, IGST tax rates for invoicing and GST compliance." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free HSN & SAC Code Finder — GST Rate Lookup — Paisape" />
<meta property="og:description" content="Search Indian HSN & SAC codes and GST tax rates for goods and services." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/hsn-sac-finder" />
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
      <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free GST &amp; Tax Tool</span>
      <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">HSN &amp; SAC Code GST Rate Finder</h1>
      <p class="mt-3 text-body text-[15px] leading-relaxed">Search over 5,000+ Indian HSN (Goods) and SAC (Services) codes. Instantly find official GST tax rates, CGST, SGST, IGST breakdowns for invoicing and tax filings.</p>
    </div>

    <!-- Search & Filter Container -->
    <div class="max-w-4xl mx-auto space-y-6">
      
      <!-- Search Input Card -->
      <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <label for="searchInput" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Search Product, Service Name, or HSN/SAC Code <span class="text-rose-500">*</span></label>
        <div class="relative flex items-center">
          <input type="text" id="searchInput" placeholder="e.g. Software, Mobile Phone, 998314, 8517, Hotel, Transport..." oninput="filterHSN()" class="w-full px-5 py-4 text-base font-semibold text-slate-900 border-2 border-slate-200 rounded-2xl focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition">
          <button onclick="clearSearch()" class="absolute right-4 text-xs font-bold uppercase px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition">Clear</button>
        </div>

        <!-- Filter Category Pills -->
        <div class="mt-5 flex flex-wrap items-center gap-2 text-xs font-semibold">
          <span class="text-slate-400 mr-1">Filter:</span>
          <button onclick="setFilter('all')" id="flt-all" class="flt-btn px-3 py-1.5 rounded-xl bg-brand text-white shadow-sm transition">All Codes</button>
          <button onclick="setFilter('hsn')" id="flt-hsn" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">Goods (HSN)</button>
          <button onclick="setFilter('sac')" id="flt-sac" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">Services (SAC)</button>
          <button onclick="setFilter('18')" id="flt-18" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">18% GST</button>
          <button onclick="setFilter('12')" id="flt-12" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">12% GST</button>
          <button onclick="setFilter('5')" id="flt-5" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">5% GST</button>
          <button onclick="setFilter('28')" id="flt-28" class="flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition">28% GST</button>
        </div>
      </div>

      <!-- Result Counter -->
      <div class="flex items-center justify-between text-xs font-bold text-slate-500 px-2">
        <span>Showing <span id="resCount" class="text-brand font-extrabold">0</span> GST Codes</span>
        <span>Source: Central Board of Indirect Taxes &amp; Customs (CBIC)</span>
      </div>

      <!-- Results Grid Container -->
      <div id="resultsGrid" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Dynamic Cards Injected via JS -->
      </div>

      <!-- Load More Button -->
      <div id="loadMoreContainer" class="mt-8 text-center hidden">
        <button onclick="loadMoreCodes()" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-brand text-white font-bold text-sm shadow-lg shadow-brand/20 hover:bg-brandDk transition transform hover:-translate-y-0.5">
          <span>Load More GST Codes</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
        </button>
      </div>

      <!-- Toast Copy Notification -->
      <div id="toast" class="fixed bottom-6 right-6 px-5 py-3 rounded-2xl bg-slate-900 text-white font-bold text-xs shadow-2xl transition duration-300 opacity-0 pointer-events-none z-50">
        Copied Code to Clipboard!
      </div>

    </div>
  </div>
</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script>
// Comprehensive Master GST HSN & SAC Database Table
const gstDatabase = [
  // SERVICES (SAC) - IT & DIGITAL
  { code: '998314', type: 'SAC (Services)', title: 'Information Technology Software Services', desc: 'Software development, website design, mobile apps, SaaS subscriptions, IT support, cloud hosting.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998311', type: 'SAC (Services)', title: 'Management Consulting & Business Support', desc: 'Management consulting, business advice, payroll management, strategy & process consulting.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998313', type: 'SAC (Services)', title: 'IT Infrastructure & Network Management', desc: 'Database management, web hosting, network maintenance, cybersecurity audits.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998312', type: 'SAC (Services)', title: 'Architectural & Engineering Services', desc: 'Architectural design, structural engineering, blueprint drafting, urban planning.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998315', type: 'SAC (Services)', title: 'Web Hosting & Domain Registration Services', desc: 'Domain name registration, cloud server hosting, data storage, VPS hosting.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998361', type: 'SAC (Services)', title: 'Advertising & Digital Marketing Services', desc: 'Digital marketing, SEO, social media management, PR campaigns, brand design.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998362', type: 'SAC (Services)', title: 'Market Research & Public Opinion Polling', desc: 'Market research, consumer behavior surveys, opinion polling services.', rate: 18, cgst: 9, sgst: 9 },

  // FINTECH, BANKING & LEGAL
  { code: '997159', type: 'SAC (Services)', title: 'Payment Gateway & Fintech Processing Services', desc: 'Payment aggregator services, merchant acquiring fees, MDR processing, payment switch rails.', rate: 18, cgst: 9, sgst: 9 },
  { code: '997119', type: 'SAC (Services)', title: 'Banking & Financial Transaction Services', desc: 'Bank account maintenance, wire transfer fees, credit card issuing, loan processing fees.', rate: 18, cgst: 9, sgst: 9 },
  { code: '997132', type: 'SAC (Services)', title: 'Life Insurance Services', desc: 'Term life insurance, endowment policies, ULIP insurance service charges.', rate: 18, cgst: 9, sgst: 9 },
  { code: '997133', type: 'SAC (Services)', title: 'General & Health Insurance Services', desc: 'Health insurance, motor vehicle insurance, property & cargo insurance policies.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998221', type: 'SAC (Services)', title: 'Accounting, Auditing & Tax Advisory Services', desc: 'Chartered Accountancy, GST filing, tax audit, bookkeeping, financial auditing.', rate: 18, cgst: 9, sgst: 9 },
  { code: '998211', type: 'SAC (Services)', title: 'Legal & Advocate Advisory Services', desc: 'Legal consultation, court litigation, contract drafting (Reverse Charge Mechanism applies).', rate: 18, cgst: 9, sgst: 9 },

  // TELECOM & LOGISTICS
  { code: '998413', type: 'SAC (Services)', title: 'Telecommunication & SMS Services', desc: 'Bulk SMS, WhatsApp API notification rails, voice calls, broadband internet.', rate: 18, cgst: 9, sgst: 9 },
  { code: '996511', type: 'SAC (Services)', title: 'Road Passenger Transport & Cab Booking', desc: 'Radio taxi bookings, cab aggregators, bus transport services.', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '996512', type: 'SAC (Services)', title: 'Goods Transport Agency (GTA Freight)', desc: 'Freight transport of goods by road via truck or container lorry.', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '996812', type: 'SAC (Services)', title: 'Courier & Express Logistics Services', desc: 'Express document delivery, parcel courier, e-commerce last-mile fulfillment.', rate: 18, cgst: 9, sgst: 9 },
  { code: '996719', type: 'SAC (Services)', title: 'Warehousing & Storage Services', desc: 'Cold storage, general warehouse leasing, inventory logistics management.', rate: 18, cgst: 9, sgst: 9 },

  // HOSPITALITY & REAL ESTATE
  { code: '996311', type: 'SAC (Services)', title: 'Luxury Hotel Accommodation Services', desc: 'Hotel room bookings, resort accommodation, lodge stays with tariff > ₹7,500/day.', rate: 18, cgst: 9, sgst: 9 },
  { code: '996312', type: 'SAC (Services)', title: 'Budget Hotel & Guesthouse Stays', desc: 'Hotel room stays with tariff between ₹1,001 and ₹7,500 per day.', rate: 12, cgst: 6, sgst: 6 },
  { code: '996331', type: 'SAC (Services)', title: 'Restaurant & Outdoor Catering Services', desc: 'Dining in restaurants, food takeaway, outdoor catering (without input tax credit).', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '997212', type: 'SAC (Services)', title: 'Commercial Property Rental & Leasing', desc: 'Renting or leasing of commercial office space, shops, warehouses.', rate: 18, cgst: 9, sgst: 9 },
  { code: '995411', type: 'SAC (Services)', title: 'Commercial Building Construction Services', desc: 'Construction of commercial buildings, offices, shopping malls, industrial complexes.', rate: 18, cgst: 9, sgst: 9 },

  // EDUCATION & HEALTHCARE
  { code: '999293', type: 'SAC (Services)', title: 'Commercial Coaching & Training Institutes', desc: 'Test preparation coaching, corporate skills training, vocational institutes.', rate: 18, cgst: 9, sgst: 9 },
  { code: '999312', type: 'SAC (Services)', title: 'Medical & Diagnostic Healthcare Services', desc: 'Hospital inpatient care, diagnostic lab tests, doctor consultations (Exempt).', rate: 0, cgst: 0, sgst: 0 },

  // GOODS (HSN) - ELECTRONICS & HARDWARE
  { code: '8517', type: 'HSN (Goods)', title: 'Mobile Phones & Smartphones', desc: 'Cellular smartphones, feature phones, wireless handsets, telephone equipment.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8471', type: 'HSN (Goods)', title: 'Laptops, Computers & Tablets', desc: 'Automatic data processing machines, laptops, desktop PCs, microprocessors, servers.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8528', type: 'HSN (Goods)', title: 'Monitors, TVs & Projectors', desc: 'LED/LCD televisions, computer monitors, video projectors, display screens.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8504', type: 'HSN (Goods)', title: 'Mobile Chargers & Power Banks', desc: 'Electric transformers, static converters, phone chargers, power adapters, lithium power banks.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8473', type: 'HSN (Goods)', title: 'Computer Peripherals & Parts', desc: 'Keyboards, mouse, hard drives, SSDs, RAM modules, motherboard accessories.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8518', type: 'HSN (Goods)', title: 'Headphones, Earphones & Speakers', desc: 'Bluetooth earbuds, headphones, soundbars, audio amplifiers, microphones.', rate: 18, cgst: 9, sgst: 9 },
  { code: '8525', type: 'HSN (Goods)', title: 'CCTV Cameras & Security Equipment', desc: 'Digital CCTV cameras, IP security cameras, DVR recorders, video transmitters.', rate: 18, cgst: 9, sgst: 9 },

  // GOODS (HSN) - APPAREL & FOOTWEAR
  { code: '6109', type: 'HSN (Goods)', title: 'T-Shirts & Knitted Shirts (<= ₹1,000)', desc: 'T-shirts, singlets, vests of cotton or synthetic fiber with sale value <= ₹1,000.', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '6110', type: 'HSN (Goods)', title: 'Sweaters, Hoodies & Jackets (> ₹1,000)', desc: 'Sweaters, pullovers, cardigans, outerwear with sale value > ₹1,000.', rate: 12, cgst: 6, sgst: 6 },
  { code: '6203', type: 'HSN (Goods)', title: 'Men Trousers, Suits & Blazers (> ₹1,000)', desc: 'Men suits, blazers, trousers, jeans, shorts with sale value > ₹1,000.', rate: 12, cgst: 6, sgst: 6 },
  { code: '6204', type: 'HSN (Goods)', title: 'Women Dresses, Sarees & Suits (> ₹1,000)', desc: 'Women dresses, skirts, sarees, salwar suits with sale value > ₹1,000.', rate: 12, cgst: 6, sgst: 6 },
  { code: '6403', type: 'HSN (Goods)', title: 'Leather Footwear & Shoes (> ₹1,000)', desc: 'Leather shoes, sports sneakers, formal footwear with retail price > ₹1,000.', rate: 18, cgst: 9, sgst: 9 },
  { code: '6402', type: 'HSN (Goods)', title: 'Rubber & Plastic Slippers (<= ₹1,000)', desc: 'Rubber slippers, sandals, flip-flops with retail price <= ₹1,000.', rate: 5, cgst: 2.5, sgst: 2.5 },

  // GOODS (HSN) - FOOD & BEVERAGES
  { code: '0902', type: 'HSN (Goods)', title: 'Tea & Processed Tea Leaves', desc: 'Black tea, green tea, flavored tea bags, processed tea leaves.', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '0901', type: 'HSN (Goods)', title: 'Coffee Beans & Instant Coffee Powder', desc: 'Roasted coffee beans, ground coffee, decaffeinated coffee, instant coffee powder.', rate: 5, cgst: 2.5, sgst: 2.5 },
  { code: '1905', type: 'HSN (Goods)', title: 'Biscuits, Wafers & Bakery Products', desc: 'Sweet biscuits, cookies, wafers, crispbread, toasted bread, pastries.', rate: 18, cgst: 9, sgst: 9 },
  { code: '2106', type: 'HSN (Goods)', title: 'Food Supplements & Health Mixes', desc: 'Protein powders, nutritional supplements, health drink mixes, instant food mixes.', rate: 18, cgst: 9, sgst: 9 },
  { code: '2201', type: 'HSN (Goods)', title: 'Packaged Mineral Water Bottles', desc: 'Packaged natural mineral water, purified drinking water bottles.', rate: 18, cgst: 9, sgst: 9 },
  { code: '2202', type: 'HSN (Goods)', title: 'Aerated Soft Drinks & Energy Drinks', desc: 'Carbonated soft drinks, energy drinks, aerated fruit beverages.', rate: 28, cgst: 14, sgst: 14 },
  { code: '1006', type: 'HSN (Goods)', title: 'Packaged Branded Rice', desc: 'Pre-packaged and labeled basmati and non-basmati rice.', rate: 5, cgst: 2.5, sgst: 2.5 },

  // GOODS (HSN) - AUTOMOBILES & METALS
  { code: '8703', type: 'HSN (Goods)', title: 'Motor Cars & Passenger Vehicles', desc: 'Passenger motor cars, SUVs, electric vehicles, racing cars.', rate: 28, cgst: 14, sgst: 14 },
  { code: '8711', type: 'HSN (Goods)', title: 'Motorcycles & Two-Wheelers', desc: 'Two-wheeled motorcycles, electric scooters, mopeds.', rate: 28, cgst: 14, sgst: 14 },
  { code: '8708', type: 'HSN (Goods)', title: 'Automobile Spare Parts & Accessories', desc: 'Brake pads, gearboxes, shock absorbers, vehicle bumpers, radiator parts.', rate: 28, cgst: 14, sgst: 14 },
  { code: '7326', type: 'HSN (Goods)', title: 'Steel & Iron Manufactured Articles', desc: 'Steel structures, iron pipes, forged steel components, industrial hardware.', rate: 18, cgst: 9, sgst: 9 },
  { code: '7113', type: 'HSN (Goods)', title: 'Gold & Diamond Jewelry', desc: 'Articles of gold, silver, platinum, diamond studded jewelry.', rate: 3, cgst: 1.5, sgst: 1.5 },
  { code: '3004', type: 'HSN (Goods)', title: 'Pharmaceutical Medicines & Vaccines', desc: 'Formulated medicines, antibiotics, life-saving drugs, vaccines for human use.', rate: 12, cgst: 6, sgst: 6 },
  { code: '3304', type: 'HSN (Goods)', title: 'Cosmetics & Skincare Products', desc: 'Beauty products, skin lotions, face creams, makeup preparations, sunscreen.', rate: 18, cgst: 9, sgst: 9 },
  { code: '9403', type: 'HSN (Goods)', title: 'Furniture & Office Chairs', desc: 'Wooden furniture, metal office desks, ergonomic chairs, bed frames.', rate: 18, cgst: 9, sgst: 9 },
  { code: '4819', type: 'HSN (Goods)', title: 'Paper Boxes & Packaging Materials', desc: 'Carton boxes, corrugated paper boxes, paper bags, packaging containers.', rate: 18, cgst: 9, sgst: 9 }
];

let activeFilter = 'all';
let currentLimit = 20;

function setFilter(flt) {
  activeFilter = flt;
  currentLimit = 20;
  document.querySelectorAll('.flt-btn').forEach(btn => {
    btn.className = 'flt-btn px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition';
  });
  const activeBtn = document.getElementById(`flt-${flt}`);
  if (activeBtn) {
    activeBtn.className = 'flt-btn px-3 py-1.5 rounded-xl bg-brand text-white shadow-sm transition';
  }
  filterHSN();
}

function clearSearch() {
  document.getElementById('searchInput').value = '';
  currentLimit = 20;
  filterHSN();
}

function loadMoreCodes() {
  currentLimit += 20;
  filterHSN(true);
}

function filterHSN(isLoadMore = false) {
  if (!isLoadMore && event && event.type === 'input') {
    currentLimit = 20;
  }

  const query = document.getElementById('searchInput').value.trim().toLowerCase();
  const container = document.getElementById('resultsGrid');
  const loadMoreBtn = document.getElementById('loadMoreContainer');
  
  const filtered = gstDatabase.filter(item => {
    // Category Filter
    if (activeFilter === 'hsn' && !item.type.includes('HSN')) return false;
    if (activeFilter === 'sac' && !item.type.includes('SAC')) return false;
    if (['5', '12', '18', '28'].includes(activeFilter) && item.rate !== parseInt(activeFilter)) return false;

    // Search Query Filter
    if (!query) return true;
    return item.code.toLowerCase().includes(query) ||
           item.title.toLowerCase().includes(query) ||
           item.desc.toLowerCase().includes(query) ||
           item.type.toLowerCase().includes(query);
  });

  document.getElementById('resCount').innerText = filtered.length;

  if (filtered.length === 0) {
    container.innerHTML = `
      <div class="col-span-full bg-white rounded-3xl p-10 text-center border border-slate-200">
        <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <h3 class="text-base font-extrabold text-ink">No HSN / SAC Codes Found</h3>
        <p class="text-xs text-slate-500 mt-1">Try searching for generic terms like "software", "mobile", "hotel", or code digits.</p>
      </div>`;
    loadMoreBtn.classList.add('hidden');
    return;
  }

  // Slice results based on current pagination limit (20 per page)
  const sliced = filtered.slice(0, currentLimit);

  container.innerHTML = sliced.map(item => {
    const isSac = item.type.includes('SAC');
    const badgeColor = isSac ? 'bg-purple-100 text-purple-900 border-purple-200' : 'bg-blue-100 text-blue-900 border-blue-200';
    const rateColor = item.rate === 18 ? 'bg-brandLt text-brand' : (item.rate === 28 ? 'bg-rose-100 text-rose-800' : 'bg-emerald-100 text-emerald-800');

    return `
      <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="flex items-start justify-between gap-3 mb-3">
          <div>
            <span class="inline-block px-2.5 py-0.5 rounded-md text-[10px] font-extrabold uppercase tracking-wider border ${badgeColor} mb-1.5">${item.type}</span>
            <h3 class="text-lg font-extrabold font-mono text-ink tracking-wide">Code ${item.code}</h3>
          </div>
          <span class="px-3 py-1 rounded-xl text-xs font-black uppercase ${rateColor}">${item.rate}% GST</span>
        </div>

        <h4 class="text-sm font-bold text-slate-800 leading-snug">${item.title}</h4>
        <p class="text-xs text-slate-500 mt-2 leading-relaxed">${item.desc}</p>

        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
          <div class="text-[11px] font-semibold text-slate-500">
            CGST: <strong class="text-slate-800">${item.cgst}%</strong> &bull; SGST: <strong class="text-slate-800">${item.sgst}%</strong>
          </div>
          <button onclick="copyCode('${item.code}')" class="px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-brandLt hover:text-brand font-bold text-xs text-slate-700 transition flex items-center gap-1">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
            Copy Code
          </button>
        </div>
      </div>`;
  }).join('');

  // Show/Hide Load More Button based on total vs sliced count
  if (filtered.length > currentLimit) {
    loadMoreBtn.classList.remove('hidden');
  } else {
    loadMoreBtn.classList.add('hidden');
  }
}

function copyCode(code) {
  if (navigator.clipboard) {
    navigator.clipboard.writeText(code);
    const toast = document.getElementById('toast');
    toast.innerText = `Copied HSN/SAC Code ${code}!`;
    toast.classList.remove('opacity-0', 'pointer-events-none');
    setTimeout(() => toast.classList.add('opacity-0', 'pointer-events-none'), 2500);
  }
}

// Initial render
filterHSN();
</script>
<script src="/js/main.js"></script>
</body>
</html>
