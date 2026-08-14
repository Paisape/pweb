<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Card Tokenisation (CoFT) Explained — Paisape Blog</title>
<meta name="description" content="How the RBI mandate changes saved card flows and secured the ecosystem." />
<meta property="og:type" content="article" />
<meta property="og:title" content="Card Tokenisation (CoFT) Explained" />
<meta property="og:description" content="How the RBI mandate changes saved card flows and secured the ecosystem." />
<meta property="og:image" content="https://paisape.in/assets/blog/blog_tokenisation.jpg" />
<meta property="og:url" content="https://paisape.in/blog/card-tokenisation" />
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
<div class="relative z-[100] w-full bg-gradient-to-r from-[#FF9933] via-white to-[#138808] px-4 py-2.5 text-center shadow-md">
  <div class="flex items-center justify-center gap-4">
    <span class="text-2xl drop-shadow-sm">🇮🇳</span>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Happy Independence Day</p>
    <svg class="h-7 w-7 text-[#000080] animate-[spin_15s_linear_infinite]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93M7.76 3.05l8.48 17.9M3.05 7.76l17.9 8.48M3.05 16.24l17.9-8.48M7.76 20.95l8.48-17.9"/></svg>
    <p class="font-display text-[15px] font-extrabold text-[#000080] tracking-widest uppercase drop-shadow-sm">Jai Hind!</p>
    <span class="text-2xl drop-shadow-sm">🇮🇳</span>
  </div>
</div>
<div id="progress" class="fixed top-0 left-0 z-[60] h-[3px] w-full bg-brand transition-transform duration-150"></div>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[70] focus:rounded-lg focus:bg-brand focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
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
        <span class="text-body/60">5 min read</span>
      </div>
  
      <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-ink">
        Card Tokenisation (CoFT) Explained
      </h1>
  
      <p class="mt-4 text-lg text-body leading-relaxed">
        How the RBI mandate changes saved card flows and secured the ecosystem.
      </p>
  
      <div class="mt-6 flex items-center justify-between border-y border-slate-100 py-4">
        <div class="flex items-center gap-3">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-brandLt font-display text-[13px] font-bold text-brand">PE</span>
          <div>
            <p class="text-[13.5px] font-semibold text-ink">Paisape Engineering</p>
            <p class="text-[12px] text-body/70">Engineering &middot; 12 August 2026</p>
          </div>
        </div>
        <a href="/blog" class="text-xs font-semibold text-brand hover:underline">&larr; Back to all posts</a>
      </div>

      <div class="my-10 overflow-hidden rounded-3xl border border-slate-200 shadow-md">
        <img src="/assets/blog/blog_tokenisation.jpg" alt="Hero Image" class="w-full h-auto object-cover" />
      </div>
  
      <div class="prose prose-slate max-w-none space-y-6 text-[15.5px] leading-relaxed text-body">
<h2>The End of Saved Cards: A Paradigm Shift in Payments</h2>
      <p>In the past, the standard operating procedure for most digital merchants was to store the actual 16-digit Primary Account Number (PAN) of credit and debit cards directly on their servers. This made repeat transactions frictionless, but it also created massive honeypots of highly sensitive financial data. Following a series of severe, global data breaches that exposed millions of cardholders to fraud and identity theft, the Reserve Bank of India (RBI) took decisive action. They issued the Card-on-File Tokenisation (CoFT) mandate, radically altering the landscape of digital payments in India. Under this mandate, merchants, payment aggregators (PAs), and payment gateways (PGs) are strictly prohibited from storing actual card data. Instead, they must rely on tokenisation to facilitate seamless, secure transactions for repeat customers.</p>
      
      <h2>What is Tokenisation and How Does it Work?</h2>
      <p>Tokenisation is the process of replacing sensitive data—in this case, the 16-digit PAN—with a non-sensitive equivalent, referred to as a "token." This token is a unique, randomly generated surrogate value that has no extrinsic or exploitable meaning or value. When a customer chooses the "Save this card" option during checkout, the merchant's system does not save the card number. Instead, it securely transmits the card details to the card network (such as Visa, Mastercard, or RuPay) via the payment gateway.</p>
      <p>The card network acts as the Token Service Provider (TSP). It validates the request and generates a unique token that is mathematically tied to three specific elements: the specific card, the specific merchant (or token requestor), and the specific device (in some implementations, though CoFT primarily focuses on the merchant-card binding). The network returns this token to the merchant to be stored on their servers. The key security benefit here is domain restriction. If a malicious actor manages to breach the merchant's database and steal these tokens, the stolen data is entirely useless. The tokens cannot be used to execute transactions on any other website or platform, effectively neutralizing the threat of large-scale card data theft.</p>

      <h2>The Architecture of Network Tokens</h2>
      <p>The architecture of a CoFT implementation involves several key players interacting in real-time. Let's break down the flow of a typical tokenisation request and subsequent transaction:</p>
      <ul>
        <li><strong>Token Requestor (TR):</strong> Typically the merchant, PA, or PG that initiates the tokenisation request on behalf of the customer.</li>
        <li><strong>Token Service Provider (TSP):</strong> The entity responsible for generating and managing the tokens. Under the RBI mandate, this is generally the card network or the issuer bank.</li>
        <li><strong>Issuer Bank:</strong> The bank that issued the credit or debit card to the customer. They play a crucial role in authorizing the tokenisation and the transactions.</li>
        <li><strong>Acquirer Bank:</strong> The bank that processes the transaction on behalf of the merchant.</li>
      </ul>
      <p>When a transaction is initiated using a saved token, the merchant sends the token, along with the cryptogram and other transaction details, to the acquirer. The acquirer forwards this to the card network. The card network (TSP) receives the token, looks up the actual PAN in its secure token vault, and forwards the transaction request with the actual PAN to the issuer bank for authorization. Once authorized, the approval flows back through the chain. This entire process happens in milliseconds, ensuring that the customer experiences the same frictionless checkout as before, but with significantly enhanced security.</p>

      <h2>Additional Factor of Authentication (AFA) and Consent</h2>
      <p>One of the cornerstone requirements of the RBI's CoFT mandate is explicit customer consent and Additional Factor of Authentication (AFA). Tokenisation cannot happen silently in the background. When a customer opts to save their card, they must provide explicit consent for the tokenisation process. This consent must be validated by an AFA, which in the Indian context is predominantly an OTP (One-Time Password) sent to the customer's registered mobile number.</p>
      <p>This initial AFA step proves that the person attempting to save the card is indeed the legitimate cardholder. Once the card is tokenised and the token is stored, subsequent transactions also require authentication. While the PAN is replaced by the token, the customer must still enter their CVV and complete the AFA (OTP) process for every transaction, ensuring that even if a device is compromised, a transaction cannot be completed without the second factor.</p>

      <h2>Handling Edge Cases and Complex Routing</h2>
      <p>While the happy path of tokenisation is straightforward, the reality of payment infrastructure is far more complex, requiring sophisticated routing strategies and the ability to handle various edge cases.</p>
      <p><strong>1. Token Life Cycle Management:</strong> Tokens are not static. They have a life cycle that must be managed carefully. What happens when a card expires? Or when a card is lost or stolen and replaced by the issuer? The CoFT architecture includes mechanisms for Token Life Cycle Management (TLCM). When an issuer updates a card (e.g., issues a new PAN due to loss), they communicate this to the TSP. The TSP can then map the existing token to the new PAN, ensuring that the customer's saved cards across various merchants continue to function without them needing to re-enter their details everywhere.</p>
      <p><strong>2. Multi-Acquirer Routing:</strong> Large merchants often use multiple payment gateways or acquirers to optimize for cost, success rates, and redundancy. With CoFT, if a merchant is the Token Requestor, they receive the token and can route the transaction through any of their integrated PAs or acquirers. This flexibility is crucial for maintaining high success rates. The routing logic must take into account which acquirer performs best for specific token types (Visa vs. Mastercard) or issuer banks, dynamically routing the tokenized transaction to the optimal path.</p>
      <p><strong>3. Cryptogram Generation:</strong> A critical security component of network tokens is the cryptogram. For every transaction using a token, a unique, single-use cryptogram (often called a Token Cryptogram or TAVV) must be generated. This cryptogram proves that the transaction was initiated by the legitimate token requestor. Managing the generation and validation of these cryptograms adds computational overhead but is essential for preventing replay attacks.</p>

      <h2>The Mathematical Impact on Authorization Rates</h2>
      <p>A common concern during the transition to CoFT was the potential impact on transaction success rates. However, data has shown that network tokens often experience higher authorization rates compared to PAN-based transactions. This improvement is mathematically grounded in risk assessment models used by issuer banks.</p>
      <p>When an issuer receives an authorization request containing a network token and a valid cryptogram, their fraud detection algorithms can assign a lower risk score to the transaction. The presence of the token proves that the card was previously authenticated (via AFA during tokenisation) and that the transaction is originating from a bound, trusted domain (the specific merchant). This cryptographic proof of provenance reduces the probability of fraud, allowing issuers to approve more transactions, particularly for recurring payments and large ticket sizes. Over a large volume of transactions, a 1-2% increase in authorization rates translates to substantial revenue gains for merchants.</p>

      <h2>RBI Guidelines and Compliance Complexity</h2>
      <p>Compliance with the RBI's CoFT guidelines is non-negotiable and incredibly rigorous. The guidelines specify strict parameters for data storage, token generation, and the exact roles of different entities in the ecosystem. PAs and PGs had to undergo massive infrastructural overhauls to build secure token vaults, implement TSPs APIs, and ensure they were completely purged of any legacy clear-text PAN data.</p>
      <p>Auditing is a continuous requirement. Entities must prove that their systems cannot reconstruct the PAN from the token and that their token requestor APIs are robust against brute-force attacks or manipulation. Furthermore, the handling of Guest Checkout flows—where customers choose not to save their card—requires a delicate balance. In these cases, the merchant still cannot touch the PAN; the data must flow directly from the customer's browser or app to the PG, often using client-side encryption or secure iframes to bypass the merchant's servers entirely.</p>

      <h2>Conclusion: Building a Resilient Payment Ecosystem</h2>
      <p>The Card-on-File Tokenisation mandate represents a monumental leap forward for payment security in India. By removing the most valuable target—the PAN—from merchant servers, the ecosystem has become significantly more resilient against data breaches. While the technical implementation required massive effort, complex routing math, and careful handling of edge cases, the result is a safer, more robust infrastructure. For engineering teams, the challenge now lies in optimizing these tokenized flows, managing the lifecycle of millions of tokens efficiently, and leveraging the inherent security of network tokens to drive higher authorization rates and better customer experiences.</p>
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