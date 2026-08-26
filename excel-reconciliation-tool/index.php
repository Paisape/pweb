<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <link rel="canonical" href="https://paisape.in/excel-reconciliation-tool">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Free Multi-Sheet Excel & CSV Reconciliation Tool — Paisape</title>
  <meta name="description" content="Reconcile up to 4 Excel and CSV spreadsheets. Dynamic column matching rules, composite keys, text normalization, dual validation engine, and instant export." />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Free Multi-Sheet Excel & CSV Reconciliation Tool — Paisape" />
  <meta property="og:description" content="Reconcile up to 4 Excel and CSV spreadsheets. Dynamic column matching rules, composite keys, text normalization, dual validation engine." />
  <meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.jpg" />
  <meta property="og:url" content="https://paisape.in/excel-reconciliation-tool" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/js/tailwind.config.js"></script>
  <link rel="stylesheet" href="/css/style.css">

  <!-- SheetJS Library for Browser-based Excel/CSV Processing -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

  <style>
    body {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    .dropzone-active {
      border-color: #06B6D4 !important;
      background-color: rgba(6, 182, 212, 0.04) !important;
    }
    select.custom-select {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%6b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
      background-position: right 0.75rem center;
      background-repeat: no-repeat;
      background-size: 1.25em 1.25em;
      padding-right: 2.25rem;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
  </style>
</head>

<body class="bg-slate-50 text-body antialiased">

<!-- Tricolor Top Banner -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Main Container -->
<main id="main" class="mx-auto max-w-site px-5 pt-36 pb-16">

  <!-- Header Title -->
  <div class="text-center max-w-2xl mx-auto mb-10">
    <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Merchant Tool</span>
    <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">
      Free Excel & CSV <span class="text-brand">Reconciliation Engine</span>
    </h1>
    <p class="mt-3 text-body text-[15px] leading-relaxed">
      Upload up to 4 spreadsheets. Configure dynamic primary keys and validation fields. 100% browser-based & secure.
    </p>
  </div>

  <!-- Scientific Notation Warning Banner -->
  <div id="sciWarningBanner" class="hidden mb-6 rounded-2xl bg-amber-50 border border-amber-200 p-4 text-amber-900 shadow-sm flex items-start gap-3">
    <svg class="h-5 w-5 text-amber-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
    <div class="text-xs">
      <p class="font-bold">Large Number / Scientific Notation Detected in File</p>
      <p class="mt-0.5 text-amber-800">Some identifier columns contain numbers displayed in scientific format (e.g. <code>2.223E+20</code> or <code>+18</code> strings). The tool preserves these as raw text, but ensure identifier columns are formatted as Text in Excel before uploading if full precision is lost.</p>
    </div>
  </div>

  <!-- Step 1: Upload Spreadsheets (Max 4 Files) -->
  <div class="mb-10 bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
    <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-6">
      <div>
        <h2 class="font-display text-lg font-bold text-ink">Step 1: Upload Spreadsheets (Maximum 4 Files)</h2>
        <p class="text-xs text-slate-500 mt-0.5">Upload your files into Sheet 1, Sheet 2, Sheet 3, or Sheet 4. Supported formats: .csv, .xlsx, .xls</p>
      </div>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Sheet 1 Box -->
      <div id="dropzone1" class="relative flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-6 text-center shadow-sm transition hover:border-brand">
        <span class="absolute top-3 left-3 rounded-full bg-brand/10 px-2.5 py-0.5 text-[11px] font-bold text-brand">Sheet 1 (Base File)</span>
        <svg class="h-9 w-9 text-slate-400 my-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        <p class="text-xs font-bold text-ink mb-1 truncate max-w-full px-2" id="sheet1Name">Upload Sheet 1 File</p>
        <p class="text-[11px] text-slate-500 mb-3" id="sheet1Status">Bank Settlement / Primary</p>

        <label class="cursor-pointer rounded-xl bg-brand px-4 py-2 text-xs font-bold text-white shadow-md shadow-brand/20 hover:bg-brandDk transition">
          Browse File
          <input type="file" id="fileInput1" accept=".csv,.xlsx,.xls" class="hidden" onchange="handleFileUpload(0, this.files[0])">
        </label>
      </div>

      <!-- Sheet 2 Box -->
      <div id="dropzone2" class="relative flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-6 text-center shadow-sm transition hover:border-brand">
        <span class="absolute top-3 left-3 rounded-full bg-slate-100 border border-slate-200 px-2.5 py-0.5 text-[11px] font-bold text-slate-700">Sheet 2 (Vendor File)</span>
        <svg class="h-9 w-9 text-slate-400 my-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        <p class="text-xs font-bold text-ink mb-1 truncate max-w-full px-2" id="sheet2Name">Upload Sheet 2 File</p>
        <p class="text-[11px] text-slate-500 mb-3" id="sheet2Status">API Report / Vendor</p>

        <label class="cursor-pointer rounded-xl bg-brand px-4 py-2 text-xs font-bold text-white shadow-md shadow-brand/20 hover:bg-brandDk transition">
          Browse File
          <input type="file" id="fileInput2" accept=".csv,.xlsx,.xls" class="hidden" onchange="handleFileUpload(1, this.files[0])">
        </label>
      </div>

      <!-- Sheet 3 Box -->
      <div id="dropzone3" class="relative flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-6 text-center shadow-sm transition hover:border-brand">
        <span class="absolute top-3 left-3 rounded-full bg-slate-100 border border-slate-200 px-2.5 py-0.5 text-[11px] font-bold text-slate-700">Sheet 3 (Client Ledger)</span>
        <svg class="h-9 w-9 text-slate-400 my-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        <p class="text-xs font-bold text-ink mb-1 truncate max-w-full px-2" id="sheet3Name">Upload Sheet 3 File</p>
        <p class="text-[11px] text-slate-500 mb-3" id="sheet3Status">Optional file</p>

        <label class="cursor-pointer rounded-xl bg-brand px-4 py-2 text-xs font-bold text-white shadow-md shadow-brand/20 hover:bg-brandDk transition">
          Browse File
          <input type="file" id="fileInput3" accept=".csv,.xlsx,.xls" class="hidden" onchange="handleFileUpload(2, this.files[0])">
        </label>
      </div>

      <!-- Sheet 4 Box -->
      <div id="dropzone4" class="relative flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-6 text-center shadow-sm transition hover:border-brand">
        <span class="absolute top-3 left-3 rounded-full bg-slate-100 border border-slate-200 px-2.5 py-0.5 text-[11px] font-bold text-slate-700">Sheet 4 (Operator Report)</span>
        <svg class="h-9 w-9 text-slate-400 my-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        <p class="text-xs font-bold text-ink mb-1 truncate max-w-full px-2" id="sheet4Name">Upload Sheet 4 File</p>
        <p class="text-[11px] text-slate-500 mb-3" id="sheet4Status">Optional file</p>

        <label class="cursor-pointer rounded-xl bg-brand px-4 py-2 text-xs font-bold text-white shadow-md shadow-brand/20 hover:bg-brandDk transition">
          Browse File
          <input type="file" id="fileInput4" accept=".csv,.xlsx,.xls" class="hidden" onchange="handleFileUpload(3, this.files[0])">
        </label>
      </div>
    </div>
  </div>

  <!-- Step 2: Dynamic Column Mapping & Matching Rules Engine -->
  <div id="mappingSection" class="hidden mb-10">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-slate-200 pb-3 mb-6 gap-3">
      <div>
        <h2 class="font-display text-lg font-bold text-ink">Step 2: Configure Dynamic Matching Fields & Validation Engine</h2>
        <p class="text-xs text-body">Add unlimited matching fields. Assign fields as Primary Keys (Step 1 Join) or Validation Fields (Step 2 Compare).</p>
      </div>
      <div class="flex items-center gap-2 flex-wrap">
        <button onclick="addMatchingField()" class="rounded-xl bg-brand px-4 py-2 text-xs font-bold text-white shadow hover:bg-brandDk transition">
          + Add Matching Field
        </button>
      </div>
    </div>

    <!-- Amount Variance & Global Settings -->
    <div class="flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm mb-6">
      <div class="flex items-center gap-3">
        <label class="text-xs font-bold text-slate-700">Amount Variance Tolerance:</label>
        <select id="amountTolerance" class="rounded-lg border border-slate-300 bg-slate-50 px-3 py-1 text-xs font-bold text-brand focus:outline-none">
          <option value="0">±₹0.00 (Exact Amount)</option>
          <option value="1">±₹1.00 Tolerance</option>
          <option value="2">±₹2.00 Tolerance</option>
          <option value="5">±₹5.00 Tolerance</option>
        </select>
      </div>
      <div class="text-xs text-slate-500 font-medium">
        <span>Primary Key Join Method: </span>
        <span class="font-bold text-ink" id="primaryKeyTypeLabel">Single ID or Composite Key</span>
      </div>
    </div>

    <!-- Dynamic Matching Rules Container -->
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm mb-6">
      <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-3 mb-4 gap-3">
        <div>
          <h3 class="font-display text-base font-bold text-ink">Dynamic Column Matching Rules</h3>
          <p class="text-xs text-slate-500">Unselected columns (e.g. Client Name, Mobile) will be ignored during matching.</p>
        </div>
        <div class="flex flex-wrap items-center gap-2" id="sheetRowBadges"></div>
      </div>

      <div class="space-y-4" id="rulesContainer">
        <!-- Dynamic Matching Fields Rendered Here -->
      </div>
    </div>

    <!-- Run CTA -->
    <div class="mt-8 text-center">
      <button onclick="runReconciliation()" class="inline-flex items-center justify-center gap-3 rounded-2xl bg-brand px-8 py-4 text-base font-extrabold text-white shadow-lg hover:bg-brandDk transition active:scale-95">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <span>Reconcile Spreadsheets & Generate Audit Report &rarr;</span>
      </button>
    </div>
  </div>

  <!-- Step 3: Reconciled Results Dashboard -->
  <div id="resultsSection" class="hidden space-y-8">
    <div class="border-b border-slate-200 pb-3">
      <h2 class="font-display text-2xl font-bold text-ink">Reconciliation Audit Report</h2>
      <p class="text-xs text-body">100% of transactions across all uploaded spreadsheets reconciled.</p>
    </div>

    <!-- Stat Cards -->
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
      <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Transactions</p>
        <h3 class="text-2xl font-black text-ink mt-1" id="statTotal">0</h3>
        <p class="text-[11px] text-slate-400 mt-1">Full outer join count</p>
      </div>

      <div class="rounded-2xl border border-emerald-200 bg-emerald-50/50 p-5 shadow-sm">
        <p class="text-xs font-bold uppercase tracking-wider text-emerald-700">Matched (Success)</p>
        <h3 class="text-2xl font-black text-emerald-700 mt-1" id="statMatched">0</h3>
        <p class="text-[11px] text-emerald-600 mt-1" id="statMatchedPct">0% match rate</p>
      </div>

      <div class="rounded-2xl border border-rose-200 bg-rose-50/50 p-5 shadow-sm">
        <p class="text-xs font-bold uppercase tracking-wider text-rose-700">Discrepancies</p>
        <h3 class="text-2xl font-black text-rose-700 mt-1" id="statMismatches">0</h3>
        <p class="text-[11px] text-rose-600 mt-1">Validation rule diffs</p>
      </div>

      <div class="rounded-2xl border border-amber-200 bg-amber-50/50 p-5 shadow-sm">
        <p class="text-xs font-bold uppercase tracking-wider text-amber-700">Unmatched / Missing</p>
        <h3 class="text-2xl font-black text-amber-700 mt-1" id="statMissing">0</h3>
        <p class="text-[11px] text-amber-600 mt-1">Missing in opposing sheet</p>
      </div>

      <div class="rounded-2xl border border-slate-200 bg-slate-100/60 p-5 shadow-sm">
        <p class="text-xs font-bold uppercase tracking-wider text-slate-700">Duplicates</p>
        <h3 class="text-2xl font-black text-slate-800 mt-1" id="statDuplicates">0</h3>
        <p class="text-[11px] text-slate-500 mt-1">Duplicate primary keys</p>
      </div>
    </div>

    <!-- Filters & Export -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
      <div class="relative w-full md:w-72">
        <input type="text" id="tableSearch" onkeyup="filterResults()" placeholder="Search Reference ID, Remarks..." class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-1.5 text-xs font-semibold text-slate-800 focus:border-brand focus:outline-none">
      </div>

      <div class="flex flex-wrap items-center gap-1.5 text-xs font-semibold">
        <button onclick="setFilter('all')" id="tab-all" class="rounded-lg px-3 py-1.5 bg-brand text-white shadow-sm">All (<span id="cnt-all">0</span>)</button>
        <button onclick="setFilter('matched')" id="tab-matched" class="rounded-lg px-3 py-1.5 bg-slate-100 text-slate-700 hover:bg-slate-200">Matched (<span id="cnt-matched">0</span>)</button>
        <button onclick="setFilter('mismatch')" id="tab-mismatch" class="rounded-lg px-3 py-1.5 bg-slate-100 text-slate-700 hover:bg-slate-200">Mismatches (<span id="cnt-mismatch">0</span>)</button>
        <button onclick="setFilter('missing')" id="tab-missing" class="rounded-lg px-3 py-1.5 bg-slate-100 text-slate-700 hover:bg-slate-200">Unmatched (<span id="cnt-missing">0</span>)</button>
        <button onclick="setFilter('duplicate')" id="tab-duplicate" class="rounded-lg px-3 py-1.5 bg-slate-100 text-slate-700 hover:bg-slate-200">Duplicates (<span id="cnt-duplicate">0</span>)</button>
      </div>

      <button onclick="exportToExcel()" class="inline-flex items-center gap-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 px-4 py-1.5 text-xs font-bold text-white shadow transition">
        Export Excel (.xlsx)
      </button>
    </div>

    <!-- Detailed Table -->
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
          <thead id="reconTableHeader">
            <!-- Headers rendered dynamically -->
          </thead>
          <tbody id="reconTableBody" class="divide-y divide-slate-100 font-medium text-slate-700">
            <!-- Rows rendered dynamically -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

</main>

<!-- Standard Paisape Site Footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src="/js/main.js"></script>

<!-- JavaScript Engine -->
<script>
let parsedSheets = [null, null, null, null];
let reconResults = [];
let currentFilter = 'all';

// Dynamic Matching Rules Schema (Unlimited User-Added Rules)
let matchingRules = [
  { id: 'rule_1', name: 'Primary Reference ID', role: 'primary', transform: 'trim', dataType: 'string', sheetCols: { 0: '', 1: '', 2: '', 3: '' } },
  { id: 'rule_2', name: 'Amount Comparison', role: 'validation', transform: 'trim', dataType: 'amount', sheetCols: { 0: '', 1: '', 2: '', 3: '' } },
  { id: 'rule_3', name: 'Field Comparison 1', role: 'validation', transform: 'trim', dataType: 'string', sheetCols: { 0: '', 1: '', 2: '', 3: '' } }
];

// Helper to get exact user-selected column display name
function getRuleDisplayName(rule) {
  const c1 = rule.sheetCols ? rule.sheetCols[0] : '';
  const c2 = rule.sheetCols ? rule.sheetCols[1] : '';
  if (c1 && c2) {
    return c1 === c2 ? c1 : `${c1} ↔ ${c2}`;
  }
  if (c1) return c1;
  if (c2) return c2;
  return rule.name || 'Selected Field';
}

// Treat all IDs strictly as STRING/VARCHAR. Never convert to floats.
function normalizeValue(val, transformRule, dataType) {
  if (val === null || val === undefined) return '';
  let str = String(val).trim();
  if (str.startsWith("'")) str = str.substring(1).trim();

  if (typeof val === 'number') {
    str = val.toLocaleString('fullwide', { useGrouping: false });
  }

  if (dataType === 'amount') {
    const num = parseFloat(str);
    return isNaN(num) ? '0.00' : num.toFixed(2);
  }

  if (transformRule === 'uppercase') str = str.toUpperCase();
  if (transformRule === 'lowercase') str = str.toLowerCase();
  if (transformRule === 'remove_hyphen') str = str.replace(/-/g, '');
  if (transformRule === 'remove_space') str = str.replace(/\s+/g, '');
  if (transformRule === 'trim') str = str.trim();

  return str;
}

function formatRawDisplay(val) {
  if (val === null || val === undefined) return '';
  let str = String(val).trim();
  if (str.startsWith("'")) str = str.substring(1).trim();
  return str;
}

// Handle File Upload for Max 4 Slots
function handleFileUpload(index, file) {
  if (!file) return;
  const reader = new FileReader();
  reader.onload = function(e) {
    try {
      const data = new Uint8Array(e.target.result);
      const workbook = XLSX.read(data, { type: 'array', cellText: true, cellDates: true });
      const worksheet = workbook.Sheets[workbook.SheetNames[0]];
      const json = XLSX.utils.sheet_to_json(worksheet, { header: 1, defval: '', raw: false });

      if (json.length === 0) {
        alert('File is empty!');
        return;
      }

      // Preserve exact 1-to-1 Column Index matching!
      const rawHeaders = json[0];
      const headers = [];
      let hasScientificNotation = false;

      rawHeaders.forEach((h, colIdx) => {
        let name = String(h).trim();
        if (!name) name = 'Column_' + (colIdx + 1);
        let uniqueName = name;
        let count = 1;
        while (headers.includes(uniqueName)) {
          uniqueName = name + '_' + count++;
        }
        headers.push(uniqueName);
      });

      const rawRows = json.slice(1);
      const rows = rawRows.map(r => {
        let obj = {};
        headers.forEach((h, colIdx) => {
          const val = r[colIdx] !== undefined ? String(r[colIdx]).trim() : '';
          if (val.includes('+18') || (val.includes('E+') && val.length > 8)) {
            hasScientificNotation = true;
          }
          obj[h] = val;
        });
        return obj;
      }).filter(r => Object.values(r).some(v => v !== ''));

      parsedSheets[index] = { name: file.name, headers, rows };

      if (hasScientificNotation) {
        document.getElementById('sciWarningBanner').classList.remove('hidden');
      }

      const i = index + 1;
      document.getElementById('sheet' + i + 'Name').textContent = file.name;
      document.getElementById('sheet' + i + 'Status').textContent = rows.length + ' rows loaded (' + headers.length + ' cols detected)';
      document.getElementById('dropzone' + i).classList.add('dropzone-active');

      renderRulesUI();
      document.getElementById('mappingSection').classList.remove('hidden');
    } catch(err) {
      alert('Error reading file: ' + err.message);
    }
  };
  reader.readAsArrayBuffer(file);
}

// RENDER DYNAMIC MATCHING RULES UI
function renderRulesUI() {
  const container = document.getElementById('rulesContainer');
  const badgesContainer = document.getElementById('sheetRowBadges');
  container.innerHTML = '';
  badgesContainer.innerHTML = '';

  let activeSheetIndices = [];
  parsedSheets.forEach((s, idx) => {
    if (s) {
      activeSheetIndices.push(idx);
      const span = document.createElement('span');
      span.className = 'bg-slate-100 text-slate-700 px-2.5 py-1 rounded-lg text-xs font-semibold';
      span.textContent = `Sheet ${idx + 1}: ${s.rows.length} rows (${s.headers.length} headers)`;
      badgesContainer.appendChild(span);
    }
  });

  const primaryCount = matchingRules.filter(r => r.role === 'primary').length;
  document.getElementById('primaryKeyTypeLabel').textContent = primaryCount > 1 ? `Composite Key (${primaryCount} concatenated fields)` : (primaryCount === 1 ? 'Single Primary Key' : 'No Primary Key Selected');

  matchingRules.forEach(rule => {
    const div = document.createElement('div');
    div.className = 'p-4 rounded-xl border border-slate-200 bg-slate-50/50 space-y-3';

    let colsHTML = activeSheetIndices.map(sIdx => {
      const colors = ['text-brand font-bold', 'text-slate-700 font-bold', 'text-slate-700 font-bold', 'text-slate-700 font-bold'];
      return `
        <div class="min-w-[160px] flex-1">
          <label class="block text-[11px] uppercase tracking-wider ${colors[sIdx]} mb-1">Sheet ${sIdx + 1} Column</label>
          <select id="rule_s_${sIdx}_${rule.id}" onchange="updateRuleCol('${rule.id}', ${sIdx}, this.value)" class="custom-select w-full rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-xs font-semibold text-slate-800 focus:border-brand focus:outline-none"></select>
        </div>
      `;
    }).join('');

    div.innerHTML = `
      <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 pb-3">
        <div class="flex items-center gap-3">
          <input id="rule_title_${rule.id}" type="text" value="${getRuleDisplayName(rule)}" onchange="updateRuleName('${rule.id}', this.value)" class="font-bold text-xs text-slate-800 bg-transparent border-b border-slate-300 focus:outline-none px-1 py-0.5" placeholder="Match Field Name">
          
          <select onchange="updateRuleRole('${rule.id}', this.value)" class="rounded-lg border px-2.5 py-1 text-xs font-bold ${rule.role==='primary'?'bg-brand/10 text-brand border-brand/30':'bg-slate-100 text-slate-800 border-slate-300'}">
            <option value="primary" ${rule.role==='primary'?'selected':''}>Type A: Primary Key (Join)</option>
            <option value="validation" ${rule.role==='validation'?'selected':''}>Type B: Validation Field (Compare)</option>
          </select>
        </div>

        <div class="flex items-center gap-3">
          <select onchange="updateRuleTransform('${rule.id}', this.value)" class="rounded-lg border border-slate-300 bg-white px-2 py-1 text-[11px] font-semibold text-slate-700">
            <option value="trim" ${rule.transform==='trim'?'selected':''}>Trim Spaces</option>
            <option value="uppercase" ${rule.transform==='uppercase'?'selected':''}>Uppercase</option>
            <option value="lowercase" ${rule.transform==='lowercase'?'selected':''}>Lowercase</option>
            <option value="remove_hyphen" ${rule.transform==='remove_hyphen'?'selected':''}>Remove Hyphens (-)</option>
            <option value="remove_space" ${rule.transform==='remove_space'?'selected':''}>Remove All Spaces</option>
            <option value="preserve" ${rule.transform==='preserve'?'selected':''}>Preserve Original</option>
          </select>

          <select onchange="updateRuleDataType('${rule.id}', this.value)" class="rounded-lg border border-slate-300 bg-white px-2 py-1 text-[11px] font-semibold text-slate-700">
            <option value="string" ${rule.dataType==='string'?'selected':''}>String / ID</option>
            <option value="amount" ${rule.dataType==='amount'?'selected':''}>Amount (₹)</option>
            <option value="date" ${rule.dataType==='date'?'selected':''}>Date</option>
          </select>

          <button onclick="removeMatchingRule('${rule.id}')" class="text-xs font-bold text-rose-600 hover:text-rose-800 px-2 py-1 rounded hover:bg-rose-50 transition">✕ Remove</button>
        </div>
      </div>

      <div class="flex flex-wrap items-center gap-3">
        ${colsHTML}
      </div>
    `;

    container.appendChild(div);

    activeSheetIndices.forEach(sIdx => {
      const sheet = parsedSheets[sIdx];
      if (sheet) {
        populateSelect(`rule_s_${sIdx}_${rule.id}`, sheet.headers, rule.sheetCols[sIdx] || getDefaultHeader(sheet.headers, rule.name, rule.dataType));
      }
    });
  });
}

function getDefaultHeader(headers, name, dataType) {
  const kw = name.toLowerCase();
  const found = headers.find(h => h.toLowerCase().includes(kw));
  if (found) return found;
  if (dataType === 'amount') return findHeader(headers, ['amount', 'val', 'net']);
  if (dataType === 'date') return findHeader(headers, ['date', 'time']);
  return findHeader(headers, ['id', 'ref', 'txnid', 'no']);
}

function findHeader(headers, keywords) {
  for (let k of keywords) {
    const f = headers.find(h => h.toLowerCase().includes(k));
    if (f) return f;
  }
  return headers[0] || '';
}

function populateSelect(elemId, headers, selectedValue) {
  const sel = document.getElementById(elemId);
  if (!sel) return;
  sel.innerHTML = '';
  headers.forEach(h => {
    const opt = document.createElement('option');
    opt.value = h;
    opt.textContent = h;
    if (selectedValue && h.toLowerCase() === selectedValue.toLowerCase()) {
      opt.selected = true;
    }
    sel.appendChild(opt);
  });
}

function addMatchingField() {
  const name = prompt('Enter Matching Field Name (e.g. Operator Ref, Charges, GST, Type, Bene Name):');
  if (!name || !name.trim()) return;

  matchingRules.push({
    id: 'rule_' + Date.now(),
    name: name.trim(),
    role: 'validation',
    transform: 'trim',
    dataType: 'string',
    sheetCols: { 0: '', 1: '', 2: '', 3: '' }
  });

  renderRulesUI();
}

function removeMatchingRule(id) {
  if (matchingRules.length <= 1) {
    alert('At least one matching rule is required!');
    return;
  }
  matchingRules = matchingRules.filter(r => r.id !== id);
  renderRulesUI();
}

function updateRuleName(id, val) {
  const r = matchingRules.find(x => x.id === id);
  if (r) r.name = val;
}

function updateRuleRole(id, val) {
  const r = matchingRules.find(x => x.id === id);
  if (r) {
    r.role = val;
    renderRulesUI();
  }
}

function updateRuleTransform(id, val) {
  const r = matchingRules.find(x => x.id === id);
  if (r) r.transform = val;
}

function updateRuleDataType(id, val) {
  const r = matchingRules.find(x => x.id === id);
  if (r) r.dataType = val;
}

function updateRuleCol(ruleId, sheetIdx, colName) {
  const r = matchingRules.find(x => x.id === ruleId);
  if (r) {
    r.sheetCols[sheetIdx] = colName;
    const titleInput = document.getElementById('rule_title_' + ruleId);
    if (titleInput) {
      titleInput.value = getRuleDisplayName(r);
      r.name = titleInput.value;
    }
  }
}

// TWO-STEP RECONCILIATION ENGINE
function runReconciliation() {
  const s1 = parsedSheets[0];
  const s2 = parsedSheets[1];

  if (!s1 || !s2) {
    alert('Please upload both Sheet 1 and Sheet 2 files!');
    return;
  }

  // Sync current select values into matchingRules
  matchingRules.forEach(rule => {
    parsedSheets.forEach((s, sIdx) => {
      if (s) {
        const elem = document.getElementById(`rule_s_${sIdx}_${rule.id}`);
        if (elem) rule.sheetCols[sIdx] = elem.value;
      }
    });
  });

  const primaryRules = matchingRules.filter(r => r.role === 'primary');
  const validationRules = matchingRules.filter(r => r.role === 'validation');

  if (primaryRules.length === 0) {
    alert('Please set at least one rule as Type A: Primary Key (Join)!');
    return;
  }

  const amountTolerance = parseFloat(document.getElementById('amountTolerance').value) || 0;

  // Build Primary Key generator function for a given row & sheet index
  function getCompositeKey(row, sheetIdx) {
    let keyParts = [];
    primaryRules.forEach(rule => {
      const col = rule.sheetCols[sheetIdx];
      const val = row[col];
      const norm = normalizeValue(val, rule.transform, rule.dataType);
      keyParts.push(norm);
    });
    return keyParts.join('|');
  }

  // STEP 1: Build Hash Map for Sheet 2
  const s2Map = new Map();
  const s2Duplicates = new Set();

  s2.rows.forEach(r2 => {
    const key2 = getCompositeKey(r2, 1);
    if (key2 && key2 !== '|' && key2 !== '||') {
      if (s2Map.has(key2)) {
        s2Duplicates.add(key2);
      }
      s2Map.set(key2, r2);
    }
  });

  const processedS2Rows = new Set();
  reconResults = [];

  let matchedCount = 0;
  let mismatchCount = 0;
  let missingCount = 0;
  let duplicateCount = 0;
  let itemIdx = 1;

  // Process Sheet 1 Rows
  const s1KeysSeen = new Set();

  s1.rows.forEach(r1 => {
    const key1 = getCompositeKey(r1, 0);
    const validKey = key1 && key1 !== '|' && key1 !== '||' && key1 !== '|||';

    let isDuplicate = false;
    if (validKey) {
      if (s1KeysSeen.has(key1)) {
        isDuplicate = true;
      } else {
        s1KeysSeen.add(key1);
      }
    }

    let r2 = s2Map.get(key1);

    // Primary Display Reference
    const primaryCol1 = primaryRules[0].sheetCols[0];
    const rawRef1 = formatRawDisplay(r1[primaryCol1]) || key1 || ('ROW-' + itemIdx);

    if (isDuplicate) {
      duplicateCount++;
      reconResults.push({
        id: itemIdx++,
        ref: rawRef1,
        key: key1,
        s1Row: r1,
        s2Row: r2 || null,
        category: 'duplicate',
        remark: `🔄 DUPLICATE PRIMARY KEY IN SHEET 1`
      });
    } else if (r2) {
      processedS2Rows.add(r2);

      // STEP 2: Compare Validation Fields
      let fieldMismatches = [];

      validationRules.forEach(rule => {
        const c1 = rule.sheetCols[0];
        const c2 = rule.sheetCols[1];
        if (c1 && c2) {
          const v1 = r1[c1];
          const v2 = r2[c2];
          const n1 = normalizeValue(v1, rule.transform, rule.dataType);
          const n2 = normalizeValue(v2, rule.transform, rule.dataType);

          const fieldLabel = getRuleDisplayName(rule);

          if (rule.dataType === 'amount') {
            const num1 = parseFloat(n1) || 0;
            const num2 = parseFloat(n2) || 0;
            if (Math.abs(num1 - num2) > amountTolerance) {
              fieldMismatches.push(`${fieldLabel}: ₹${v1} vs ₹${v2}`);
            }
          } else if (n1 !== n2) {
            fieldMismatches.push(`${fieldLabel}: ${v1} vs ${v2}`);
          }
        }
      });

      let category = 'matched';
      let remark = '';

      if (fieldMismatches.length === 0) {
        matchedCount++;
        remark = `🟢 MATCHED SUCCESS`;
      } else {
        mismatchCount++;
        category = 'mismatch';
        remark = `⚠️ MISMATCH (` + fieldMismatches.join(' | ') + `)`;
      }

      reconResults.push({
        id: itemIdx++,
        ref: rawRef1,
        key: key1,
        s1Row: r1,
        s2Row: r2,
        category,
        remark
      });
    } else {
      missingCount++;
      reconResults.push({
        id: itemIdx++,
        ref: rawRef1,
        key: key1,
        s1Row: r1,
        s2Row: null,
        category: 'missing',
        remark: `❓ MISSING IN SHEET 2`
      });
    }
  });

  // Process Unmatched Sheet 2 Rows
  s2.rows.forEach(r2 => {
    if (!processedS2Rows.has(r2)) {
      missingCount++;
      const key2 = getCompositeKey(r2, 1);
      const primaryCol2 = primaryRules[0].sheetCols[1];
      const rawRef2 = formatRawDisplay(r2[primaryCol2]) || key2 || ('ROW-' + itemIdx);

      reconResults.push({
        id: itemIdx++,
        ref: rawRef2,
        key: key2,
        s1Row: null,
        s2Row: r2,
        category: 'missing',
        remark: `❓ MISSING IN SHEET 1`
      });
    }
  });

  // Summary Statistics Dashboard UI
  document.getElementById('statTotal').textContent = reconResults.length;
  document.getElementById('statMatched').textContent = matchedCount;
  const matchPct = reconResults.length > 0 ? Math.round((matchedCount / reconResults.length) * 100) : 0;
  document.getElementById('statMatchedPct').textContent = matchPct + '% match rate';

  document.getElementById('statMismatches').textContent = mismatchCount;
  document.getElementById('statMissing').textContent = missingCount;
  document.getElementById('statDuplicates').textContent = duplicateCount;

  document.getElementById('cnt-all').textContent = reconResults.length;
  document.getElementById('cnt-matched').textContent = matchedCount;
  document.getElementById('cnt-mismatch').textContent = mismatchCount;
  document.getElementById('cnt-missing').textContent = missingCount;
  document.getElementById('cnt-duplicate').textContent = duplicateCount;

  renderTableHeaderAndRows();

  document.getElementById('resultsSection').classList.remove('hidden');
  document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
}

function renderTableHeaderAndRows() {
  const thead = document.getElementById('reconTableHeader');
  const tbody = document.getElementById('reconTableBody');
  thead.innerHTML = '';
  tbody.innerHTML = '';

  // Render Dynamic Table Headers
  let headerHTML = `<tr class="bg-slate-900 text-white font-bold uppercase tracking-wider">
    <th class="p-3 border-b border-slate-800">#</th>
    <th class="p-3 border-b border-slate-800">Primary Reference ID</th>
  `;

  matchingRules.forEach(rule => {
    const fieldLabel = getRuleDisplayName(rule);
    headerHTML += `<th class="p-3 border-b border-slate-800">${fieldLabel} (${rule.role==='primary'?'Key':'Val'})</th>`;
  });

  headerHTML += `<th class="p-3 border-b border-slate-800">Reconciliation Status</th></tr>`;
  thead.innerHTML = headerHTML;

  // Render Table Rows
  const search = document.getElementById('tableSearch').value.toLowerCase();

  const filtered = reconResults.filter(r => {
    if (currentFilter === 'matched' && r.category !== 'matched') return false;
    if (currentFilter === 'mismatch' && r.category !== 'mismatch') return false;
    if (currentFilter === 'missing' && r.category !== 'missing') return false;
    if (currentFilter === 'duplicate' && r.category !== 'duplicate') return false;

    if (search) {
      return (
        r.ref.toLowerCase().includes(search) ||
        r.remark.toLowerCase().includes(search)
      );
    }
    return true;
  });

  if (filtered.length === 0) {
    tbody.innerHTML = `<tr><td colspan="15" class="p-6 text-center text-slate-400">No reconciliation records found matching current search/filter.</td></tr>`;
    return;
  }

  filtered.forEach(r => {
    const tr = document.createElement('tr');
    tr.className = 'hover:bg-slate-50 transition border-b border-slate-100';

    let rowHTML = `
      <td class="p-3 text-slate-400 font-mono">${r.id}</td>
      <td class="p-3 font-mono font-semibold text-ink">${r.ref}</td>
    `;

    matchingRules.forEach(rule => {
      const c1 = rule.sheetCols[0];
      const c2 = rule.sheetCols[1];
      const v1 = r.s1Row && c1 ? formatRawDisplay(r.s1Row[c1]) : 'N/A';
      const v2 = r.s2Row && c2 ? formatRawDisplay(r.s2Row[c2]) : 'N/A';
      rowHTML += `<td class="p-3 font-medium">S1: ${v1} | S2: ${v2}</td>`;
    });

    let badgeClass = 'bg-slate-100 text-slate-700';
    if (r.category === 'matched') badgeClass = 'bg-emerald-100 text-emerald-800 font-bold';
    if (r.category === 'mismatch') badgeClass = 'bg-rose-100 text-rose-800 font-bold';
    if (r.category === 'missing') badgeClass = 'bg-amber-100 text-amber-800 font-bold';
    if (r.category === 'duplicate') badgeClass = 'bg-slate-100 text-slate-800 font-bold border border-slate-200';

    rowHTML += `<td class="p-3"><span class="inline-block px-2.5 py-1 rounded-lg text-xs ${badgeClass}">${r.remark}</span></td>`;
    tr.innerHTML = rowHTML;
    tbody.appendChild(tr);
  });
}

function setFilter(filter) {
  currentFilter = filter;
  ['all', 'matched', 'mismatch', 'missing', 'duplicate'].forEach(f => {
    const btn = document.getElementById('tab-' + f);
    if (f === filter) {
      btn.className = 'rounded-lg px-3.5 py-1.5 bg-brand text-white shadow-sm font-bold';
    } else {
      btn.className = 'rounded-lg px-3.5 py-1.5 bg-slate-100 text-slate-700 hover:bg-slate-200';
    }
  });
  renderTableHeaderAndRows();
}

function filterResults() {
  renderTableHeaderAndRows();
}

function exportToExcel() {
  if (reconResults.length === 0) {
    alert('No reconciliation results to export!');
    return;
  }

  const workbook = XLSX.utils.book_new();

  const categories = [
    { key: 'matched', name: 'Matched Records' },
    { key: 'mismatch', name: 'Mismatched Records' },
    { key: 'missing', name: 'Missing Records' },
    { key: 'duplicate', name: 'Duplicate Records' }
  ];

  categories.forEach(cat => {
    const catData = reconResults.filter(r => r.category === cat.key).map(r => {
      let obj = {
        'Primary Ref ID': r.ref
      };

      matchingRules.forEach(rule => {
        const fieldLabel = getRuleDisplayName(rule);
        const c1 = rule.sheetCols[0];
        const c2 = rule.sheetCols[1];
        obj[`${fieldLabel} (Sheet 1: ${c1 || 'N/A'})`] = r.s1Row && c1 ? r.s1Row[c1] : '';
        obj[`${fieldLabel} (Sheet 2: ${c2 || 'N/A'})`] = r.s2Row && c2 ? r.s2Row[c2] : '';
      });

      obj['Reconciliation Remark'] = r.remark;
      return obj;
    });

    if (catData.length > 0) {
      const ws = XLSX.utils.json_to_sheet(catData);
      XLSX.utils.book_append_sheet(workbook, ws, cat.name);
    }
  });

  XLSX.writeFile(workbook, 'Paisape_Reconciliation_Report_' + new Date().toISOString().slice(0,10) + '.xlsx');
}
</script>

</body>
</html>
