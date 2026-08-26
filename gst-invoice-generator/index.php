<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- SEO Canonical & Robots Tags -->
  <link rel="canonical" href="https://paisape.in/gst-invoice-generator">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Free GST Invoice & Dynamic UPI QR Generator — Paisape</title>
<meta name="description" content="Generate professional Indian GST invoices with custom merchant logo upload, automatic HSN/SAC tax calculation, and embedded dynamic UPI QR codes. 100% free and instant PDF export." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free GST Invoice & Dynamic UPI QR Generator — Paisape" />
<meta property="og:description" content="Create GST invoices with logo upload & dynamic UPI QR codes. Download A4 PDF instantly." />
<meta property="og:image" content="https://paisape.in/assets/paisape-og-banner.png" />
<meta property="og:url" content="https://paisape.in/gst-invoice-generator" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="icon" type="image/svg+xml" href="/assets/paisape-logo.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="/js/tailwind.config.js"></script>
<link rel="stylesheet" href="/css/style.css">

<!-- QRCode.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<!-- html2pdf.js Library for Client-Side PDF Generation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
  body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Paper Invoice Styles for Screen & Print */
  .tally-invoice {
    font-family: 'Inter', sans-serif;
    color: #0f172a;
    background: #ffffff;
    border: 2px solid #0f172a !important;
  }
  .tally-table th, .tally-table td {
    border: 1px solid #0f172a !important;
    padding: 5px 8px;
    font-size: 11.5px;
  }

  /* Strict Print Enforcement Rules (Preserves Borders & Backgrounds) */
  @media print {
    * {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
      color-adjust: exact !important;
    }
    body {
      background: #ffffff !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    body * {
      visibility: hidden;
    }
    #invoicePaperArea, #invoicePaperArea * {
      visibility: visible;
    }
    #invoicePaperArea {
      position: absolute;
      left: 0;
      top: 0;
      width: 100% !important;
      margin: 0 !important;
      padding: 16px !important;
      box-shadow: none !important;
      border: 2px solid #0f172a !important;
      box-sizing: border-box !important;
    }
    .tally-table th, .tally-table td {
      border: 1px solid #0f172a !important;
    }
    .no-print {
      display: none !important;
    }
  }
</style>
</head>

<body class="bg-slate-50 text-body antialiased">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main" class="pt-32 pb-20">

  <!-- Header Banner -->
  <div class="mx-auto max-w-site px-5 mb-8 text-center no-print">
    <span class="inline-block px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-brandLt text-brand mb-3">Free Merchant Tool</span>
    <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink tracking-tight">GST Invoice &amp; Dynamic UPI QR Generator</h1>
    <p class="mt-2 text-body text-sm sm:text-base max-w-2xl mx-auto">Create professional, Rule 46 compliant Indian GST invoices with custom logo upload, automatic HSN tax calculations, and scannable UPI QR codes.</p>
  </div>

  <!-- Action Bar -->
  <div class="mx-auto max-w-site px-5 mb-8 no-print">
    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm flex flex-wrap items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <label class="cursor-pointer bg-brandLt hover:bg-brand/10 text-brand text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          Upload Company Logo
          <input type="file" id="logoUploadInput" accept="image/*" class="hidden" onchange="handleLogoUpload(this)">
        </label>
        <button onclick="removeLogo()" id="removeLogoBtn" class="hidden text-xs font-bold text-rose-600 hover:text-rose-700 bg-rose-50 px-3 py-2.5 rounded-xl border border-rose-100 transition">Remove Logo</button>
      </div>

      <div class="flex items-center gap-3">
        <button onclick="downloadPDFFile()" class="flex items-center gap-1.5 bg-slate-800 hover:bg-slate-900 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
          Download PDF
        </button>
        <button onclick="sharePDFInvoice()" class="flex items-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
          Share PDF File
        </button>
        <button onclick="window.print()" class="flex items-center gap-1.5 bg-brand hover:bg-brandDk text-white text-xs font-bold px-5 py-2.5 rounded-xl transition shadow-lg shadow-brand/20">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
          Print Invoice
        </button>
      </div>
    </div>
  </div>

  <!-- Dual-Panel Layout -->
  <div class="mx-auto max-w-site px-5 grid grid-cols-1 lg:grid-cols-12 gap-8">

    <!-- Left Panel: Input Controls (Col 5) -->
    <div class="lg:col-span-5 space-y-6 no-print">
      
      <!-- Tax Mode & Invoice Meta -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-4">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">1. Invoice Settings</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Tax Supply Type</label>
          <select id="taxModeSelect" onchange="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
            <option value="INTRA">Intra-State (Same State — CGST + SGST)</option>
            <option value="INTER">Inter-State (Different State — IGST)</option>
          </select>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Invoice No.</label>
            <input type="text" id="invNoInput" value="INV-2026-001" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Invoice Date</label>
            <input type="date" id="invDateInput" onchange="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>
      </div>

      <!-- Merchant Business Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">2. Your Business Info</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Business Name</label>
          <input type="text" id="mNameInput" value="Paisape Merchant Store" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Your GSTIN</label>
            <input type="text" id="mGstinInput" value="27AAAAA0000A1Z5" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">State &amp; Code</label>
            <input type="text" id="mStateInput" value="27 - Maharashtra" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Address</label>
          <input type="text" id="mAddrInput" value="Plot 42, FinTech Hub, BKC, Mumbai 400051" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Bank & Payment Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">3. Bank &amp; UPI QR Details</h3>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">UPI VPA Handle</label>
            <input type="text" id="mUpiVpaInput" value="paisape@icici" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Payee Name</label>
            <input type="text" id="mPayeeNameInput" value="Paisape Merchant" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Bank Name</label>
            <input type="text" id="mBankNameInput" value="ICICI Bank Ltd" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">IFSC Code</label>
            <input type="text" id="mIfscInput" value="ICIC0000104" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Account Number</label>
          <input type="text" id="mAccNoInput" value="010405009876" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Customer Details -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">4. Billed To (Customer)</h3>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Customer Business Name</label>
          <input type="text" id="cNameInput" value="Apex Global Tech Ltd" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Customer GSTIN</label>
            <input type="text" id="cGstinInput" value="27BBBBB1111B2Z3" oninput="updateInvoice()" class="w-full uppercase bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Customer State</label>
            <input type="text" id="cStateInput" value="27 - Maharashtra" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 mb-1">Address</label>
          <input type="text" id="cAddrInput" value="Suite 302, Tech Park, Andheri East, Mumbai 400069" oninput="updateInvoice()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-semibold text-ink focus:border-brand focus:outline-none">
        </div>
      </div>

      <!-- Itemized Table Controls -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
        <div class="flex items-center justify-between">
          <h3 class="text-sm font-extrabold text-ink uppercase tracking-wider">5. Particulars &amp; Tax</h3>
          <button onclick="addItemRow()" class="text-xs font-bold text-brand hover:text-brandDk bg-brandLt px-3 py-1.5 rounded-lg transition">+ Add Item</button>
        </div>

        <div id="itemInputsContainer" class="space-y-3">
          <!-- Item Rows Injected Dynamically -->
        </div>
      </div>

    </div>

    <!-- Right Panel: Live Tally-Style Paper Invoice (Col 7) -->
    <div class="lg:col-span-7">
      <div id="invoicePaperArea" class="tally-invoice p-6 border-2 border-slate-900 shadow-2xl rounded-sm bg-white text-slate-900 relative">

        <!-- Tally Header -->
        <div class="border-b-2 border-slate-900 pb-3 flex items-start justify-between">
          <div class="flex items-center gap-4">
            <div id="logoContainer" class="hidden">
              <img id="mLogoImg" src="" alt="Logo" class="h-14 max-w-[140px] object-contain">
            </div>
            <div>
              <h2 id="prevMName" class="text-lg font-black uppercase tracking-tight text-slate-900"></h2>
              <p id="prevMAddr" class="text-[11px] font-medium text-slate-700 mt-0.5 max-w-xs"></p>
              <p class="text-[11px] font-semibold text-slate-800 mt-1">
                GSTIN: <span id="prevMGstin" class="font-bold font-mono"></span> | State: <span id="prevMState"></span>
              </p>
            </div>
          </div>

          <div class="text-right">
            <h2 class="text-xl font-black uppercase tracking-widest text-slate-900 border-2 border-slate-900 px-3 py-1 inline-block">TAX INVOICE</h2>
            <p class="text-[11px] font-bold text-slate-700 mt-2">Inv No: <span id="prevInvNo" class="font-mono text-slate-900"></span></p>
            <p class="text-[11px] font-medium text-slate-700">Date: <span id="prevInvDate" class="font-mono"></span></p>
          </div>
        </div>

        <!-- Billed To / Shipped To Grid -->
        <div class="grid grid-cols-2 border-b-2 border-slate-900 text-[11.5px]">
          <div class="p-2.5 border-r-2 border-slate-900">
            <p class="font-bold text-[10.5px] uppercase tracking-wider text-slate-500 mb-1">Billed To (Buyer):</p>
            <p id="prevCName" class="font-extrabold text-slate-900"></p>
            <p id="prevCAddr" class="text-slate-700 mt-0.5"></p>
            <p class="mt-1 font-semibold text-slate-800">GSTIN: <span id="prevCGstin" class="font-mono font-bold"></span></p>
            <p class="text-slate-700">State: <span id="prevCState"></span></p>
          </div>

          <div class="p-2.5 bg-slate-50/50">
            <p class="font-bold text-[10.5px] uppercase tracking-wider text-slate-500 mb-1">Place of Supply &amp; Transport:</p>
            <p class="font-semibold text-slate-800">Place of Supply: <span id="prevPos"></span></p>
            <p class="text-slate-700">Reverse Charge: <span class="font-bold text-slate-900">NO</span></p>
            <p class="text-slate-700 mt-1">Payment Mode: <span class="font-bold text-slate-900">UPI / Bank Transfer</span></p>
          </div>
        </div>

        <!-- Tally Particulars Table -->
        <div class="mt-3">
          <table class="w-full text-left border-collapse tally-table">
            <thead>
              <tr class="bg-slate-100 font-bold uppercase text-[10.5px] text-slate-900">
                <th class="w-8 text-center">S.N.</th>
                <th>Description of Goods / Services</th>
                <th class="w-20 text-center">HSN/SAC</th>
                <th class="w-12 text-center">Qty</th>
                <th class="w-20 text-right">Rate (₹)</th>
                <th class="w-16 text-center">GST %</th>
                <th class="w-24 text-right">Amount (₹)</th>
              </tr>
            </thead>
            <tbody id="tallyItemRows">
              <!-- Item rows injected dynamically -->
            </tbody>
          </table>
        </div>

        <!-- Tax Totals & Currency Words -->
        <div class="grid grid-cols-12 border-2 border-slate-900 mt-3 text-[11.5px]">
          <div class="col-span-7 p-3 border-r-2 border-slate-900 flex flex-col justify-between">
            <div>
              <p class="font-bold text-[10.5px] uppercase text-slate-500">Amount Chargeable (in words):</p>
              <p id="prevAmountWords" class="font-extrabold text-slate-900 mt-1 capitalize leading-snug"></p>
            </div>
            
            <div class="mt-4 pt-3 border-t border-slate-200">
              <p class="font-bold text-[10.5px] uppercase text-slate-500">Bank Details for Transfer:</p>
              <p class="text-slate-800">Bank: <strong id="prevBankName"></strong> | IFSC: <strong id="prevIfsc" class="font-mono"></strong></p>
              <p class="text-slate-800">A/c No: <strong id="prevAccNo" class="font-mono"></strong> | VPA: <strong id="prevUpiVpa" class="font-mono text-brand"></strong></p>
            </div>
          </div>

          <div class="col-span-5 p-2.5 space-y-1.5 font-medium">
            <div class="flex justify-between">
              <span>Taxable Subtotal:</span>
              <span id="prevSubtotal" class="font-mono font-bold">₹0.00</span>
            </div>
            
            <div id="cgstRow" class="flex justify-between text-slate-700">
              <span>CGST:</span>
              <span id="prevCgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div id="sgstRow" class="flex justify-between text-slate-700 border-b border-slate-200 pb-1.5">
              <span>SGST:</span>
              <span id="prevSgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div id="igstRow" class="flex justify-between text-slate-700 border-b border-slate-200 pb-1.5 hidden">
              <span>IGST:</span>
              <span id="prevIgst" class="font-mono font-semibold">₹0.00</span>
            </div>

            <div class="flex justify-between text-sm font-black text-slate-900 pt-1">
              <span>Grand Total:</span>
              <span id="prevGrandTotal" class="font-mono text-base text-brand">₹0.00</span>
            </div>
          </div>
        </div>

        <!-- HSN Tax Breakdown Summary Box -->
        <div class="mt-3 border border-slate-900 p-2 text-[10.5px]">
          <p class="font-bold uppercase text-slate-600 mb-1">Tax Amount Breakdown (HSN/SAC Wise):</p>
          <table class="w-full text-center border-collapse tally-table">
            <thead>
              <tr class="bg-slate-50 font-bold uppercase text-[9.5px]">
                <th>HSN/SAC</th>
                <th>Taxable Value (₹)</th>
                <th>CGST (₹)</th>
                <th>SGST (₹)</th>
                <th>IGST (₹)</th>
                <th>Total Tax (₹)</th>
              </tr>
            </thead>
            <tbody id="hsnTaxRows">
              <!-- HSN tax summary injected dynamically -->
            </tbody>
          </table>
        </div>

        <!-- Payment QR Code + Signatory Footer -->
        <div class="mt-4 pt-3 border-t-2 border-slate-900 flex items-end justify-between">
          
          <!-- Dynamic UPI QR Code -->
          <div class="flex items-center gap-3">
            <div id="qrcode" class="p-1.5 border border-slate-300 rounded bg-white shrink-0"></div>
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Scan &amp; Pay via UPI</p>
              <p class="text-[11px] font-extrabold text-slate-900">Instant UPI Payment</p>
              <p class="text-[9.5px] text-slate-500">Supports GPay, PhonePe, Paytm, BHIM</p>
            </div>
          </div>

          <!-- Signatory Box -->
          <div class="text-right">
            <p class="text-[10px] font-bold text-slate-500">For <span id="prevSignatoryCompany" class="text-slate-900 uppercase"></span></p>
            <div class="h-10"></div>
            <p class="text-[11px] font-bold border-t border-slate-400 pt-0.5 inline-block text-slate-900">Authorized Signatory</p>
          </div>

        </div>

        <!-- Powered By Paisape Footer Badge -->
        <div class="mt-6 pt-2 border-t border-slate-200 flex items-center justify-center gap-1.5 text-[10px] font-semibold text-slate-500">
          <span>Powered by</span>
          <img src="/assets/logo.svg" alt="Paisape" class="h-3.5 w-auto inline-block object-contain" width="100" height="24">
          <span>&mdash; Enterprise Payment Orchestration &amp; Banking Rails</span>
        </div>

      </div>
    </div>

  </div>

</main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src="/js/main.js"></script>

<script>
// Initial State & Items Array
let items = [
  { desc: "Enterprise Software License & API Integration", hsn: "998313", qty: 1, rate: 15000, gstRate: 18 },
  { desc: "Instant Soundbox Audio Terminal Hardware", hsn: "851762", qty: 2, rate: 2500, gstRate: 18 }
];

let qrCodeInstance = null;

// Initialize Date Input with Today
document.addEventListener("DOMContentLoaded", () => {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('invDateInput').value = today;
  
  // Load saved logo from localStorage if available
  const savedLogo = localStorage.getItem('paisape_merchant_logo');
  if (savedLogo) {
    document.getElementById('mLogoImg').src = savedLogo;
    document.getElementById('logoContainer').classList.remove('hidden');
    document.getElementById('removeLogoBtn').classList.remove('hidden');
  }

  renderItemInputs();
  updateInvoice();
});

// Render Item Input Controls
function renderItemInputs() {
  const container = document.getElementById('itemInputsContainer');
  container.innerHTML = '';

  items.forEach((item, index) => {
    const div = document.createElement('div');
    div.className = "p-3 bg-slate-50 rounded-xl border border-slate-200 space-y-2 text-xs";
    div.innerHTML = `
      <div class="flex items-center justify-between gap-2">
        <span class="font-extrabold text-slate-500">#${index + 1}</span>
        <input type="text" value="${item.desc}" oninput="updateItem(${index}, 'desc', this.value)" placeholder="Description" class="w-full bg-white border border-slate-200 rounded-lg px-2.5 py-1.5 font-semibold text-ink focus:border-brand focus:outline-none">
        ${items.length > 1 ? `<button onclick="removeItemRow(${index})" class="text-rose-600 font-bold px-2 py-1 hover:bg-rose-100 rounded">✕</button>` : ''}
      </div>
      <div class="grid grid-cols-4 gap-2">
        <div>
          <label class="block text-[10px] font-bold text-slate-500">HSN/SAC</label>
          <input type="text" value="${item.hsn}" oninput="updateItem(${index}, 'hsn', this.value)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-mono text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">Qty</label>
          <input type="number" value="${item.qty}" min="1" oninput="updateItem(${index}, 'qty', parseFloat(this.value) || 1)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-semibold text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">Rate (₹)</label>
          <input type="number" value="${item.rate}" min="0" oninput="updateItem(${index}, 'rate', parseFloat(this.value) || 0)" class="w-full bg-white border border-slate-200 rounded-lg px-2 py-1 font-semibold text-ink focus:outline-none">
        </div>
        <div>
          <label class="block text-[10px] font-bold text-slate-500">GST %</label>
          <select onchange="updateItem(${index}, 'gstRate', parseFloat(this.value))" class="w-full bg-white border border-slate-200 rounded-lg px-1 py-1 font-semibold text-ink focus:outline-none">
            <option value="0" ${item.gstRate === 0 ? 'selected' : ''}>0%</option>
            <option value="5" ${item.gstRate === 5 ? 'selected' : ''}>5%</option>
            <option value="12" ${item.gstRate === 12 ? 'selected' : ''}>12%</option>
            <option value="18" ${item.gstRate === 18 ? 'selected' : ''}>18%</option>
            <option value="28" ${item.gstRate === 28 ? 'selected' : ''}>28%</option>
          </select>
        </div>
      </div>
    `;
    container.appendChild(div);
  });
}

function addItemRow() {
  items.push({ desc: "New Product / Service", hsn: "9983", qty: 1, rate: 1000, gstRate: 18 });
  renderItemInputs();
  updateInvoice();
}

function removeItemRow(index) {
  if (items.length > 1) {
    items.splice(index, 1);
    renderItemInputs();
    updateInvoice();
  }
}

function updateItem(index, key, val) {
  items[index][key] = val;
  updateInvoice();
}

// Logo Handling
function handleLogoUpload(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const dataUrl = e.target.result;
      document.getElementById('mLogoImg').src = dataUrl;
      document.getElementById('logoContainer').classList.remove('hidden');
      document.getElementById('removeLogoBtn').classList.remove('hidden');
      localStorage.setItem('paisape_merchant_logo', dataUrl);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function removeLogo() {
  document.getElementById('mLogoImg').src = '';
  document.getElementById('logoContainer').classList.add('hidden');
  document.getElementById('removeLogoBtn').classList.add('hidden');
  localStorage.removeItem('paisape_merchant_logo');
}

// Update Entire Invoice Preview & QR Code
function updateInvoice() {
  const taxMode = document.getElementById('taxModeSelect').value;
  const mName = document.getElementById('mNameInput').value || 'Merchant Business';
  const mGstin = document.getElementById('mGstinInput').value || '-';
  const mState = document.getElementById('mStateInput').value || '-';
  const mAddr = document.getElementById('mAddrInput').value || '-';

  const mBank = document.getElementById('mBankNameInput').value || '-';
  const mIfsc = document.getElementById('mIfscInput').value || '-';
  const mAccNo = document.getElementById('mAccNoInput').value || '-';
  const mUpiVpa = document.getElementById('mUpiVpaInput').value || 'paisape@icici';
  const mPayeeName = document.getElementById('mPayeeNameInput').value || mName;

  const cName = document.getElementById('cNameInput').value || 'Client Name';
  const cGstin = document.getElementById('cGstinInput').value || 'N/A';
  const cState = document.getElementById('cStateInput').value || '-';
  const cAddr = document.getElementById('cAddrInput').value || '-';

  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const invDate = document.getElementById('invDateInput').value || '';

  // Update Text Elements
  document.getElementById('prevMName').innerText = mName;
  document.getElementById('prevMAddr').innerText = mAddr;
  document.getElementById('prevMGstin').innerText = mGstin;
  document.getElementById('prevMState').innerText = mState;
  document.getElementById('prevSignatoryCompany').innerText = mName;

  document.getElementById('prevCName').innerText = cName;
  document.getElementById('prevCAddr').innerText = cAddr;
  document.getElementById('prevCGstin').innerText = cGstin;
  document.getElementById('prevCState').innerText = cState;
  document.getElementById('prevPos').innerText = cState;

  document.getElementById('prevInvNo').innerText = invNo;
  document.getElementById('prevInvDate').innerText = invDate;

  document.getElementById('prevBankName').innerText = mBank;
  document.getElementById('prevIfsc').innerText = mIfsc;
  document.getElementById('prevAccNo').innerText = mAccNo;
  document.getElementById('prevUpiVpa').innerText = mUpiVpa;

  // Render Particulars Table & Calculations
  let subtotal = 0;
  let totalCgst = 0;
  let totalSgst = 0;
  let totalIgst = 0;

  const tbody = document.getElementById('tallyItemRows');
  tbody.innerHTML = '';

  const hsnMap = {};

  items.forEach((item, idx) => {
    const itemSubtotal = item.qty * item.rate;
    subtotal += itemSubtotal;

    let itemCgst = 0;
    let itemSgst = 0;
    let itemIgst = 0;

    if (taxMode === 'INTRA') {
      itemCgst = itemSubtotal * (item.gstRate / 2 / 100);
      itemSgst = itemSubtotal * (item.gstRate / 2 / 100);
      totalCgst += itemCgst;
      totalSgst += itemSgst;
    } else {
      itemIgst = itemSubtotal * (item.gstRate / 100);
      totalIgst += itemIgst;
    }

    // Populate HSN Map
    if (!hsnMap[item.hsn]) {
      hsnMap[item.hsn] = { taxable: 0, cgst: 0, sgst: 0, igst: 0, totalTax: 0 };
    }
    hsnMap[item.hsn].taxable += itemSubtotal;
    hsnMap[item.hsn].cgst += itemCgst;
    hsnMap[item.hsn].sgst += itemSgst;
    hsnMap[item.hsn].igst += itemIgst;
    hsnMap[item.hsn].totalTax += (itemCgst + itemSgst + itemIgst);

    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td class="text-center font-mono">${idx + 1}</td>
      <td class="font-semibold">${item.desc}</td>
      <td class="text-center font-mono">${item.hsn}</td>
      <td class="text-center font-mono font-bold">${item.qty}</td>
      <td class="text-right font-mono">₹${item.rate.toFixed(2)}</td>
      <td class="text-center font-mono">${item.gstRate}%</td>
      <td class="text-right font-mono font-bold">₹${itemSubtotal.toFixed(2)}</td>
    `;
    tbody.appendChild(tr);
  });

  const grandTotal = Math.round(subtotal + totalCgst + totalSgst + totalIgst);

  document.getElementById('prevSubtotal').innerText = '₹' + subtotal.toFixed(2);

  if (taxMode === 'INTRA') {
    document.getElementById('cgstRow').classList.remove('hidden');
    document.getElementById('sgstRow').classList.remove('hidden');
    document.getElementById('igstRow').classList.add('hidden');

    document.getElementById('prevCgst').innerText = '₹' + totalCgst.toFixed(2);
    document.getElementById('prevSgst').innerText = '₹' + totalSgst.toFixed(2);
  } else {
    document.getElementById('cgstRow').classList.add('hidden');
    document.getElementById('sgstRow').classList.add('hidden');
    document.getElementById('igstRow').classList.remove('hidden');

    document.getElementById('prevIgst').innerText = '₹' + totalIgst.toFixed(2);
  }

  document.getElementById('prevGrandTotal').innerText = '₹' + grandTotal.toLocaleString('en-IN') + '.00';
  document.getElementById('prevAmountWords').innerText = numberToWords(grandTotal) + ' Rupees Only';

  // Render HSN Tax Summary Rows
  const hsnTbody = document.getElementById('hsnTaxRows');
  hsnTbody.innerHTML = '';
  for (const hsn in hsnMap) {
    const row = hsnMap[hsn];
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td class="font-mono font-bold">${hsn}</td>
      <td class="font-mono">₹${row.taxable.toFixed(2)}</td>
      <td class="font-mono">₹${row.cgst.toFixed(2)}</td>
      <td class="font-mono">₹${row.sgst.toFixed(2)}</td>
      <td class="font-mono">₹${row.igst.toFixed(2)}</td>
      <td class="font-mono font-bold">₹${row.totalTax.toFixed(2)}</td>
    `;
    hsnTbody.appendChild(tr);
  }

  // Render UPI QR Code
  renderUPIQR(mUpiVpa, mPayeeName, grandTotal, invNo);
}

// Generate NPCI Compatible Dynamic UPI QR Code
function renderUPIQR(vpa, payee, amount, invNo) {
  const qrContainer = document.getElementById('qrcode');
  qrContainer.innerHTML = '';

  const upiUri = `upi://pay?pa=${encodeURIComponent(vpa)}&pn=${encodeURIComponent(payee)}&am=${amount}&cu=INR&tn=Invoice_${encodeURIComponent(invNo)}`;

  qrCodeInstance = new QRCode(qrContainer, {
    text: upiUri,
    width: 76,
    height: 76,
    colorDark: "#0f172a",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.M
  });
}

// Indian Currency Number to Words Converter
function numberToWords(num) {
  const a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ', 'Twelve ', 'Thirteen ', 'Fourteen ', 'Fifteen ', 'Sixteen ', 'Seventeen ', 'Eighteen ', 'Nineteen '];
  const b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

  if ((num = num.toString()).length > 9) return 'Amount Overflow';
  const n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
  if (!n) return '';
  let str = '';
  str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
  str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
  str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
  str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
  str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
  return str.trim();
}

// Download PDF File via html2pdf
function downloadPDFFile(callback) {
  const element = document.getElementById('invoicePaperArea');
  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const filename = `gst-invoice-${invNo.toLowerCase().replace(/[^a-z0-9]/g, '-')}.pdf`;

  const opt = {
    margin: [6, 6, 6, 6],
    filename: filename,
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true, letterRendering: true },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
  };

  const pdfPromise = html2pdf().set(opt).from(element);
  if (callback) {
    pdfPromise.outputPdf('blob').then(callback);
  } else {
    pdfPromise.save();
  }
}

// Native PDF Sharing via Web Share API or WhatsApp Fallback
function sharePDFInvoice() {
  const invNo = document.getElementById('invNoInput').value || 'INV-001';
  const filename = `gst-invoice-${invNo.toLowerCase().replace(/[^a-z0-9]/g, '-')}.pdf`;
  const mName = document.getElementById('mNameInput').value;
  const grandTotal = document.getElementById('prevGrandTotal').innerText;

  downloadPDFFile(function(pdfBlob) {
    const file = new File([pdfBlob], filename, { type: 'application/pdf' });

    if (navigator.canShare && navigator.canShare({ files: [file] })) {
      navigator.share({
        files: [file],
        title: `GST Invoice ${invNo}`,
        text: `GST Invoice ${invNo} from ${mName} for ${grandTotal}`
      }).catch(err => console.log('Share dismissed:', err));
    } else {
      // Direct PDF download + WhatsApp text fallback if Web Share API file attachment is unhandled
      const a = document.createElement('a');
      a.href = URL.createObjectURL(pdfBlob);
      a.download = filename;
      a.click();

      const msg = `Hello! Please find your GST Invoice *${invNo}* from *${mName}* for *${grandTotal}*.\n\nThank you for your business!`;
      window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(msg)}`, '_blank');
    }
  });
}
</script>
</body>
</html>
