<?php
/**
 * Master Blog Registry and Dynamic Scanner for Paisape
 */

function get_all_blogs() {
    $static_blogs = [
        [
            'slug' => 'aadhaar-facerd-passive-liveness-ekyc',
            'url' => '/blog/aadhaar-facerd-passive-liveness-ekyc',
            'title' => 'Aadhaar FaceRD 2.0 & Passive 3D AI Liveness: Zero-Sensor Spoof Prevention in Digital Onboarding',
            'image' => '/assets/blog/blog_facerd_passive_liveness_handwritten.jpg',
            'category' => 'Identity • AI Liveness',
            'read_time' => '10 min read',
            'date' => '04 Nov 2026',
            'timestamp' => strtotime('2026-11-04 11:30:00'),
            'description' => "Technical guide to UIDAI Aadhaar FaceRD 2.0 integration — single-frame passive 3D AI liveness detection, presentation attack detection (PAD), PID block encryption, and zero-sensor hardware onboarding."
        ],
        [
            'slug' => 'smart-dynamic-routing-multi-acquirer-gateways',
            'url' => '/blog/smart-dynamic-routing-multi-acquirer-gateways',
            'title' => 'Smart Dynamic Routing in Multi-Acquirer Payment Gateways: Thompson Sampling & Automated Health Pings',
            'image' => '/assets/blog/blog_smart_routing_thompson_handwritten.jpg',
            'category' => 'Payment Gateway • Routing Engine',
            'read_time' => '9 min read',
            'date' => '02 Nov 2026',
            'timestamp' => strtotime('2026-11-02 11:30:00'),
            'description' => "Engineering high-availability multi-acquirer payment gateways — implementing Bayesian Thompson Sampling algorithms, active synthetic health probes, and sub-second circuit breaking for maximum SR."
        ],
        [
            'slug' => 'cross-border-fast-payments-upi-paynow-aani',
            'url' => '/blog/cross-border-fast-payments-upi-paynow-aani',
            'title' => 'Cross-Border Real-Time Fast Payment Linkages: UPI-PayNow & UPI-Aani Rails with ISO 20022',
            'image' => '/assets/blog/blog_cross_border_upi_paynow_handwritten.jpg',
            'category' => 'Cross-Border • ISO 20022',
            'read_time' => '10 min read',
            'date' => '31 Oct 2026',
            'timestamp' => strtotime('2026-10-31 11:30:00'),
            'description' => "Technical analysis of cross-border real-time payment linkages connecting India's UPI with Singapore's PayNow and UAE's Aani — ISO 20022 message transformation, FX liquidity switches, and sub-30s settlements."
        ],
        [
            'slug' => 'npci-autopay-recurring-mandate-switch',
            'url' => '/blog/npci-autopay-recurring-mandate-switch',
            'title' => 'NPCI AutoPay 2.0 & Recurring Mandate Switches: Automated Retry Queues & Presentation Windows',
            'image' => '/assets/blog/blog_autopay_mandate_switch_handwritten.jpg',
            'category' => 'AutoPay • Mandate Engine',
            'read_time' => '9 min read',
            'date' => '29 Oct 2026',
            'timestamp' => strtotime('2026-10-29 11:30:00'),
            'description' => "Technical guide to engineering high-volume recurring subscription billing switches on NPCI AutoPay 2.0 — mandate lifecycle management, pre-debit notification webhooks, and intelligent retry queues."
        ],
        [
            'slug' => 'credit-lines-on-upi-shadow-ledgers',
            'url' => '/blog/credit-lines-on-upi-shadow-ledgers',
            'title' => 'Pre-Sanctioned Credit Lines on UPI: Core Banking Shadow Ledgers & Instant Reversal Switches',
            'image' => '/assets/blog/blog_credit_line_upi_shadow_handwritten.jpg',
            'category' => 'UPI • Credit Architecture',
            'read_time' => '9 min read',
            'date' => '27 Oct 2026',
            'timestamp' => strtotime('2026-10-27 11:30:00'),
            'description' => "An in-depth engineering blueprint of RBI & NPCI pre-sanctioned credit lines on UPI — in-memory shadow ledgers, atomic hold reservations, dynamic interest accrual engines, and sub-10ms reversal rails."
        ],
        [
            'slug' => 'ocen-4-embedded-msme-lending-apis',
            'url' => '/blog/ocen-4-embedded-msme-lending-apis',
            'title' => 'OCEN 4.0 (Open Credit Enablement Network): Embedded MSME Lending APIs & Sub-3-Minute Disbursal Rails',
            'image' => '/assets/blog/blog_ocen4_lending_handwritten.jpg',
            'category' => 'Lending • Embedded Finance',
            'read_time' => '10 min read',
            'date' => '25 Oct 2026',
            'timestamp' => strtotime('2026-10-25 11:30:00'),
            'description' => "A comprehensive engineering guide to iSPIRT's OCEN 4.0 specification — connecting Loan Service Providers (LSPs), Derived Credential verifiers, cash-flow underwriting switches, and sub-3-minute MSME loan disbursals."
        ],
        [
            'slug' => 'upi-switch-active-active-multi-region-architecture',
            'url' => '/blog/upi-switch-active-active-multi-region-architecture',
            'title' => 'UPI Switch Active-Active Multi-Region Architecture: Achieving 100,000 TPS & Sub-20ms P99 Latency',
            'image' => '/assets/blog/blog_upi_active_active_handwritten.jpg',
            'category' => 'UPI • High-Scale Switch',
            'read_time' => '11 min read',
            'date' => '23 Oct 2026',
            'timestamp' => strtotime('2026-10-23 11:30:00'),
            'description' => "How to architect an enterprise-grade Active-Active multi-datacenter UPI Switch capable of handling 100,000+ peak Transactions Per Second (TPS) with cross-region Raft state machines and sub-20ms P99 latency."
        ],
        [
            'slug' => 'rbi-mulehunter-ai-fraud-quarantine',
            'url' => '/blog/rbi-mulehunter-ai-fraud-quarantine',
            'title' => 'RBI MuleHunter AI & Digital Intelligence Unit: Real-Time Mule Account Freezing & CFCFRMS 1930 Integration',
            'image' => '/assets/blog/blog_rbi_mulehunter_handwritten.jpg',
            'category' => 'Compliance • Fraud AI',
            'read_time' => '10 min read',
            'date' => '21 Oct 2026',
            'timestamp' => strtotime('2026-10-21 11:30:00'),
            'description' => "A deep technical blueprint of RBI and DIU MuleHunter AI frameworks — graph neural network mule detection, real-time lien imposition, and sub-second automated freeze webhooks with Citizen Financial Cyber Fraud Reporting System (CFCFRMS / 1930)."
        ],
        [
            'slug' => 'conversational-payments-hello-upi-voice-switch',
            'url' => '/blog/conversational-payments-hello-upi-voice-switch',
            'title' => 'Conversational Payments & Hello! UPI: Voice-to-Payment AI Architecture & Bhashini ASR',
            'image' => '/assets/blog/blog_conversational_upi_voice_handwritten.jpg',
            'category' => 'UPI • AI Voice Rails',
            'read_time' => '12 min read',
            'date' => '19 Oct 2026',
            'timestamp' => strtotime('2026-10-19 11:30:00'),
            'description' => "An engineering breakdown of NPCI's 'Hello! UPI' conversational payment switch — edge voice pre-processing, Bhashini multilingual speech recognition, intent parsing, and real-time audio soundbox confirmation."
        ],
        [
            'slug' => 'softpos-tap-to-phone-architecture',
            'url' => '/blog/softpos-tap-to-phone-architecture',
            'title' => 'SoftPOS & NFC Tap-to-Phone: Host Card Emulation (HCE) & EMV MPoC Compliance',
            'image' => '/assets/blog/blog_softpos_tap_to_phone_handwritten.jpg',
            'category' => 'Merchant Acquiring • POS Engineering',
            'read_time' => '12 min read',
            'date' => '17 Oct 2026',
            'timestamp' => strtotime('2026-10-17 11:30:00'),
            'description' => "A comprehensive technical guide to transforming off-the-shelf Android smartphones into certified payment terminals — PCI MPoC security compliance, Host Card Emulation (HCE), RuPay/Visa L2 contactless kernels, and TEE attestation."
        ],
        [
            'slug' => 'bharat-connect-b2b-invoice-settlement',
            'url' => '/blog/bharat-connect-b2b-invoice-settlement',
            'title' => 'Bharat Connect (BBPS B2B) Invoicing Rails: ERP Switch Integration & Supply Chain Escrow',
            'image' => '/assets/blog/blog_bharat_connect_b2b_handwritten.jpg',
            'category' => 'Enterprise • B2B Settlement',
            'read_time' => '10 min read',
            'date' => '15 Oct 2026',
            'timestamp' => strtotime('2026-10-15 11:30:00'),
            'description' => "An engineering breakdown of NPCI Bharat Connect's B2B electronic invoice presentment and payment (EIPP) rails — integrating SAP/Oracle ERPs, automated GSTN cross-checks, dynamic early-payment discounts, and nodal escrow settlement switches."
        ],
        [
            'slug' => 'account-aggregator-fiu-architecture',
            'url' => '/blog/account-aggregator-fiu-architecture',
            'title' => 'Account Aggregator (AA 2.0) & FIU Architecture: End-to-End Encryption, Consent Artefacts & Real-Time Underwriting',
            'image' => '/assets/blog/blog_account_aggregator_aa2_handwritten.jpg',
            'category' => 'Banking • Data & Underwriting',
            'read_time' => '11 min read',
            'date' => '13 Oct 2026',
            'timestamp' => strtotime('2026-10-13 11:30:00'),
            'description' => "A deep architectural breakdown of India's Account Aggregator (AA 2.0) rails — handling digitally signed consent handles, Elliptic Curve Diffie-Hellman (ECDH) payload encryption, asynchronous financial data pipelines, and sub-15 second credit scoring switches."
        ],
        [
            'slug' => 'happy-navratri-2026',
            'url' => '/blog/happy-navratri-2026',
            'title' => 'Happy Navratri 2026: May Maa Shailputri Bless You With Strength, Health & Prosperity',
            'image' => '/assets/blog/blog_happy_navratri_2026.jpg',
            'category' => 'Celebration • Festive Greetings',
            'read_time' => '4 min read',
            'date' => '11 Oct 2026',
            'timestamp' => strtotime('2026-10-11 11:00:00'),
            'description' => "Warm Navratri greetings from Paisape. Celebrating auspicious beginnings, resilience, and prosperity for merchants, partners, and businesses across India."
        ],
        [
            'slug' => 'pci-dss-v4-vault-tokenization-architecture',
            'url' => '/blog/pci-dss-v4-vault-tokenization-architecture',
            'title' => 'PCI-DSS v4.0.1 Compliance & Vault Tokenization Architecture for Indian Payment Switches',
            'image' => '/assets/blog/blog_pci_dss_v4_tokenization_handwritten.jpg',
            'category' => 'Engineering • Security',
            'read_time' => '12 min read',
            'date' => '05 Oct 2026',
            'timestamp' => strtotime('2026-10-05 11:30:00'),
            'description' => "A complete technical guide to PCI-DSS v4.0.1 compliance in Indian payment switches — secure card vault tokenization, HSM key management, network micro-segmentation, and zero-trust payload encryption."
        ],
        [
            'slug' => 'rbi-digital-payment-security-controls-2026',
            'url' => '/blog/rbi-digital-payment-security-controls-2026',
            'title' => 'RBI Digital Payment Security Controls (DPSC 2026): Switch Security, API Authentication & Audit Controls',
            'image' => '/assets/blog/blog_rbi_dpsc_2026_handwritten.jpg',
            'category' => 'Security • RBI Compliance',
            'read_time' => '11 min read',
            'date' => '03 Oct 2026',
            'timestamp' => strtotime('2026-10-03 11:30:00'),
            'description' => "An engineering breakdown of RBI's updated Digital Payment Security Controls framework — multi-factor authentication (MFA) standards, HSM key rotation, continuous API vulnerability scanning, and real-time fraud monitoring compliance."
        ],
        [
            'slug' => 'programmable-erupi-cbdc-interoperability',
            'url' => '/blog/programmable-erupi-cbdc-interoperability',
            'title' => 'Programmable e-RUPI Vouchers & Digital Rupee (CBDC) Interoperability: Switch Architecture & Merchant POS Integration',
            'image' => '/assets/blog/blog_erupi_cbdc_interop_handwritten.jpg',
            'category' => 'CBDC • Programmable Money',
            'read_time' => '12 min read',
            'date' => '01 Oct 2026',
            'timestamp' => strtotime('2026-10-01 11:30:00'),
            'description' => "A complete technical engineering guide to programmable e-RUPI digital vouchers and RBI's Retail CBDC (Digital Rupee) — offline QR tokenization, merchant redemption switches, corporate welfare disbursals, and core banking ledger reconciliation."
        ],
        [
            'slug' => 'pa-cb-cross-border-payment-aggregator',
            'url' => '/blog/pa-cb-cross-border-payment-aggregator',
            'title' => 'PA-CB (Payment Aggregator Cross-Border): Inward & Outward API Switch Architecture',
            'image' => '/assets/blog/blog_pacb_cross_border_handwritten.jpg',
            'category' => 'Cross-Border • Forex',
            'read_time' => '10 min read',
            'date' => '30 Sep 2026',
            'timestamp' => strtotime('2026-09-30 11:30:00'),
            'description' => "An engineering deep-dive into RBI's PA-CB regulatory framework — managing Authorised Dealer Category-1 bank escrow accounts, Liberalised Remittance Scheme (LRS) reporting, real-time FX rate locks, and domestic merchant settlement."
        ],
        [
            'slug' => 'rbi-uli-credit-origination-architecture',
            'url' => '/blog/rbi-uli-credit-origination-architecture',
            'title' => 'RBI Unified Lending Interface (ULI): API Mechanics, Consent Architecture & Instant Credit Origination',
            'image' => '/assets/blog/blog_rbi_uli_handwritten.jpg',
            'category' => 'Lending • API Switch',
            'read_time' => '11 min read',
            'date' => '28 Sep 2026',
            'timestamp' => strtotime('2026-09-28 11:30:00'),
            'description' => "An engineering guide to RBI's Unified Lending Interface (ULI) switch — consent artefact validation, multi-FIP data orchestration (GSTN, land records, credit bureaus), and sub-5 minute loan disbursal switches."
        ],
        [
            'slug' => 'real-time-payment-fraud-prevention-engine',
            'url' => '/blog/real-time-payment-fraud-prevention-engine',
            'title' => 'Real-Time Payment Fraud Prevention: Velocity Rules, Mule Account Detection & Sub-50ms Risk Engines',
            'image' => '/assets/blog/blog_fraud_prevention_handwritten.jpg',
            'category' => 'Engineering • Security & Risk',
            'read_time' => '12 min read',
            'date' => '26 Sep 2026',
            'timestamp' => strtotime('2026-09-26 15:56:00'),
            'description' => 'A technical architecture guide to building sub-50ms payment fraud prevention systems — Kafka event streams, Redis velocity evaluation, XGBoost ML risk models, and automated mule account freeze hooks.'
        ],
        [
            'slug' => 'uidai-face-auth-facerd-liveness',
            'url' => '/blog/uidai-face-auth-facerd-liveness',
            'title' => 'UIDAI Face Authentication (FaceRD) & Passive 3D AI Liveness Detection in Digital Onboarding',
            'image' => '/assets/blog/blog_facerd_liveness_handwritten.jpg',
            'category' => 'Compliance • Identity & KYC',
            'read_time' => '10 min read',
            'date' => '26 Sep 2026',
            'timestamp' => strtotime('2026-09-26 15:54:00'),
            'description' => "An engineering guide to UIDAI's FaceRD biometric SDK — incorporating passive 3D liveness detection AI, preventing presentation attacks, signed auth token verification, and Aadhaar Act compliance."
        ],
        [
            'slug' => 'rupay-credit-card-on-upi',
            'url' => '/blog/rupay-credit-card-on-upi',
            'title' => 'RuPay Credit Card on UPI: Issuer Switch Rails, Interchange Fee Mechanics & ISO 8583 Authorization',
            'image' => '/assets/blog/blog_rupay_cc_upi_handwritten.jpg',
            'category' => 'UPI • Credit Cards',
            'read_time' => '11 min read',
            'date' => '26 Sep 2026',
            'timestamp' => strtotime('2026-09-26 15:52:00'),
            'description' => 'A deep technical breakdown of RuPay Credit Cards linked to UPI — translating XML/JSON payment payloads into ISO 8583 credit issuer switch messages, interchange revenue distribution, and merchant MDR rules.'
        ],
        [
            'slug' => 'upi-circle-delegated-payments',
            'url' => '/blog/upi-circle-delegated-payments',
            'title' => 'NPCI UPI Circle: Delegated Payments API Architecture, Permission Mechanics & Spent Limit Enforcement',
            'image' => '/assets/blog/blog_upi_circle_handwritten.jpg',
            'category' => 'UPI • Delegated Payments',
            'read_time' => '10 min read',
            'date' => '26 Sep 2026',
            'timestamp' => strtotime('2026-09-26 15:50:00'),
            'description' => "An engineering guide to NPCI's UPI Circle framework — linking primary VPAs with secondary delegates, managing full vs. partial delegation modes, enforcing real-time velocity limits, and handling instant revocation hooks."
        ],
        [
            'slug' => 'upi-mdr-effects',
            'url' => '/blog/upi-mdr-effects',
            'title' => "NPCI's Revised UPI MDR Framework (Oct 2026): Technical & Business Impact",
            'image' => '/assets/blog_upi_mdr.jpg',
            'category' => 'Policy & Architecture',
            'read_time' => '8 min read',
            'date' => '18 Sep 2026',
            'timestamp' => strtotime('2026-09-18'),
            'description' => "An engineering and financial breakdown of NPCI's new Merchant Discount Rate (MDR) rules effective 15 October 2026, 0.4% transaction fee tiers, ₹300 caps, 18% GST Input Tax Credit, and payment switch adaptations."
        ],
        [
            'slug' => 'merchant-acquiring-dynamic-qr-engine',
            'url' => '/blog/merchant-acquiring-dynamic-qr-engine',
            'title' => 'Merchant Acquiring & Dynamic QR Code Engine: High-Throughput NPCI Payload Generation',
            'image' => '/assets/blog/blog_dynamic_qr_engine_handwritten.jpg',
            'category' => 'Acquiring • UPI QR',
            'read_time' => '10 min read',
            'date' => '08 Sep 2026',
            'timestamp' => strtotime('2026-09-08'),
            'description' => 'An engineering guide to dynamic UPI QR code generation — EMVCo specification, Base64 payload encoding, transaction reference binding, instant webhook callback hooks, and acquirer switch integration.'
        ],
        [
            'slug' => 'soundbox-audio-notification-rails',
            'url' => '/blog/soundbox-audio-notification-rails',
            'title' => 'Soundbox Audio Notification Rails: Cellular SIM Telemetry & Real-Time Broadcast Architecture',
            'image' => '/assets/blog/blog_soundbox_rails_handwritten.jpg',
            'category' => 'Hardware • Cellular IoT',
            'read_time' => '10 min read',
            'date' => '06 Sep 2026',
            'timestamp' => strtotime('2026-09-06'),
            'description' => 'A complete technical engineering guide to Soundbox audio terminals — MQTT telemetry pipelines, LTE-M/NB-IoT SIM data exchange, speaker-only hardware security, and sub-300ms audio alerts.'
        ],
        [
            'slug' => 'multi-bank-reconciliation-engine',
            'url' => '/blog/multi-bank-reconciliation-engine',
            'title' => 'Automated Multi-Bank Reconciliation Engine: T+0 Batch Settlement & Discrepancy Resolution',
            'image' => '/assets/blog/blog_recon_engine_handwritten.jpg',
            'category' => 'Engineering • Reconciliation',
            'read_time' => '11 min read',
            'date' => '02 Sep 2026',
            'timestamp' => strtotime('2026-09-02'),
            'description' => 'An engineering guide to multi-bank automated reconciliation architecture — 3-way matching algorithms, PG MIS parsing, T+0 ledger updates, and automated exception bucket workflows.'
        ],
        [
            'slug' => 'upi-autopay-mandate-lifecycle',
            'url' => '/blog/upi-autopay-mandate-lifecycle',
            'title' => 'NPCI UPI AutoPay & Recurring Mandates: VPA Binding, Token Lifecycle & Sub-Second Execution',
            'image' => '/assets/blog/blog_upi_autopay_handwritten.jpg',
            'category' => 'UPI • Subscriptions',
            'read_time' => '10 min read',
            'date' => '31 Aug 2026',
            'timestamp' => strtotime('2026-08-31'),
            'description' => 'An engineering deep-dive into NPCI UPI AutoPay architecture — mandate registration APIs, VPA tokenization, 24-hour pre-debit notification rules, recurring scheduler execution, and webhook reconciliation.'
        ],
        [
            'slug' => 'payment-gateway-failover-architecture',
            'url' => '/blog/payment-gateway-failover-architecture',
            'title' => 'Payment Gateway Switch Failover Architecture: How Intelligent Routing Achieves 99.99% Uptime',
            'image' => '/assets/blog/blog_failover_architecture.jpg',
            'category' => 'Engineering • Routing',
            'read_time' => '9 min read',
            'date' => '28 Aug 2026',
            'timestamp' => strtotime('2026-08-28'),
            'description' => 'A complete technical guide to payment gateway failover architecture — sub-second health checks, automated switch rerouting, latency budgets, and 99.99% uptime strategy for Indian fintechs.'
        ],
        [
            'slug' => 'what-is-mid-and-tid',
            'url' => '/blog/what-is-mid-and-tid',
            'title' => 'What is MID and TID in Digital Payments? Merchant ID & Terminal ID Explained',
            'image' => '/assets/blog/blog_mid_tid.jpg',
            'category' => 'Engineering • Payments',
            'read_time' => '8 min read',
            'date' => '26 Aug 2026',
            'timestamp' => strtotime('2026-08-26'),
            'description' => 'A complete guide to MID and TID in payment processing: definitions, 15-digit vs 8-digit structure, acquiring bank routing, and settlement reconciliation.'
        ],
        [
            'slug' => 'upi-lite-x-offline-payments',
            'url' => '/blog/upi-lite-x-offline-payments',
            'title' => 'UPI Lite X & Offline Payments: Technical Mechanics, On-Device Wallets & NFC Infrastructure',
            'image' => '/assets/blog/blog_upi_lite_x.jpg',
            'category' => 'UPI • Offline',
            'read_time' => '8 min read',
            'date' => '25 Aug 2026',
            'timestamp' => strtotime('2026-08-25'),
            'description' => 'Engineering guide to NPCI UPI Lite X — offline wallet architecture, Secure Element storage, NFC peer-to-peer data exchange, and batch sync settlement.'
        ],
        [
            'slug' => 'credit-line-on-upi',
            'url' => '/blog/credit-line-on-upi',
            'title' => 'Credit Line on UPI: API Architecture & Integration Guide for Indian Fintechs',
            'image' => '/assets/blog/blog_credit_line_upi.jpg',
            'category' => 'UPI • Credit',
            'read_time' => '9 min read',
            'date' => '25 Aug 2026',
            'timestamp' => strtotime('2026-08-25'),
            'description' => 'Technical and compliance guide to NPCI Credit Line on UPI — pre-approved credit linking, LAA systems, real-time transaction authorization, and MDR rules.'
        ],
        [
            'slug' => 'waba-business-api',
            'url' => '/blog/waba-business-api',
            'title' => 'WhatsApp Business API (WABA): Complete Engineering Guide for Indian Fintechs',
            'image' => '/assets/blog/blog_waba_api.jpg',
            'category' => 'Engineering • WhatsApp',
            'read_time' => '12 min read',
            'date' => '25 Aug 2026',
            'timestamp' => strtotime('2026-08-25'),
            'description' => 'Architecture, message templates, interactive buttons, webhooks, TRAI compliance, conversation billing, and real fintech use cases for WABA integration.'
        ],
        [
            'slug' => 'aadhaar-ekyc-vs-ckyc-vcip',
            'url' => '/blog/aadhaar-ekyc-vs-ckyc-vcip',
            'title' => 'Aadhaar eKYC vs CKYC vs V-CIP: Which KYC Method Should Your Fintech Choose?',
            'image' => '/assets/blog/blog_kyc_comparison.jpg',
            'category' => 'Compliance • KYC',
            'read_time' => '10 min read',
            'date' => '23 Aug 2026',
            'timestamp' => strtotime('2026-08-23'),
            'description' => "Engineering and compliance guide to India's three KYC methods with cost comparison, decision framework, and waterfall fallback architecture."
        ],
        [
            'slug' => 'dpdpa-consent-architecture',
            'url' => '/blog/dpdpa-consent-architecture',
            'title' => 'Building DPDPA-Compliant Consent Engines & 22-Language Notices',
            'image' => '/assets/blog/blog_dpdpa_consent.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '9 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => 'A deep engineering guide to building DPDPA-compliant consent collection UI, Consent Vault databases, and multilingual notice systems.'
        ],
        [
            'slug' => 'dpdpa-erasure-vs-pmla',
            'url' => '/blog/dpdpa-erasure-vs-pmla',
            'title' => 'Right to Erasure vs. 10-Year KYC Retention: Resolving the Fintech Conflict',
            'image' => '/assets/blog/blog_dpdpa_erasure.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '9 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => "How DPDPA Section 8(7) resolves the conflict between a user's Right to Erasure and mandatory RBI/PMLA retention."
        ],
        [
            'slug' => 'dpdpa-vendor-dpa-apis',
            'url' => '/blog/dpdpa-vendor-dpa-apis',
            'title' => 'Securing Data Processors: DPA Requirements for Cloud, SMS & WhatsApp APIs',
            'image' => '/assets/blog/blog_dpdpa_vendor.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '8 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => 'How to legally bind cloud hosts, SMS gateways, WhatsApp WABA providers, and bank switch APIs under DPDPA-compliant Data Processing Agreements.'
        ],
        [
            'slug' => 'dpdpa-breach-response',
            'url' => '/blog/dpdpa-breach-response',
            'title' => 'Data Breach Management: How to Report Incidents to DPBI to Avoid Rs 200 Cr Fines',
            'image' => '/assets/blog/blog_dpdpa_breach.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '10 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => 'A step-by-step DPDPA incident response SOP for Indian fintechs to detect, assess, and report data breaches to the Data Protection Board within legal timeframes.'
        ],
        [
            'slug' => 'dpdpa-hardware-privacy',
            'url' => '/blog/dpdpa-hardware-privacy',
            'title' => 'Privacy by Design in Payment Devices: Soundboxes, POS and Cellular Telemetry',
            'image' => '/assets/blog/blog_dpdpa_hardware.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '8 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => 'How DPDPA applies to payment hardware including audio soundboxes, POS terminals, and cellular telemetry with engineering guidelines for privacy-by-design.'
        ],
        [
            'slug' => 'dpdpa-guide',
            'url' => '/blog/dpdpa-guide',
            'title' => 'DPDPA 2023 Compliance Guide for Indian Fintechs: Technical Architecture & Implementation Checklist',
            'image' => '/assets/blog/blog_dpdpa_guide.jpg',
            'category' => 'Compliance • DPDPA',
            'read_time' => '12 min read',
            'date' => '19 Aug 2026',
            'timestamp' => strtotime('2026-08-19'),
            'description' => 'A practical engineering and legal compliance roadmap for Indian fintech companies to comply with the Digital Personal Data Protection Act (DPDPA) 2023.'
        ]
    ];

    // Dynamic scanning for any new directories in /blog/ that are not yet registered
    $blog_dir = $_SERVER['DOCUMENT_ROOT'] . '/blog';
    $known_slugs = array_column($static_blogs, 'slug');
    $dynamic_blogs = [];

    if (is_dir($blog_dir)) {
        $dirs = glob($blog_dir . '/*', GLOB_ONLYDIR);
        if (is_array($dirs)) {
            foreach ($dirs as $dir) {
                $slug = basename($dir);
                if (!in_array($slug, $known_slugs) && file_exists($dir . '/index.php')) {
                    $content = file_get_contents($dir . '/index.php');
                    
                    // Extract Title
                    $title = ucwords(str_replace('-', ' ', $slug));
                    if (preg_match('/<title>(.*?)<\/title>/i', $content, $m)) {
                        $title = trim(str_replace(['— Paisape Blog', '— Paisape', '&amp;'], ['', '', '&'], $m[1]));
                    } elseif (preg_match('/<meta\s+property="og:title"\s+content="(.*?)"/i', $content, $m)) {
                        $title = trim(str_replace('&amp;', '&', $m[1]));
                    }

                    // Extract Description
                    $desc = 'Engineering deep-dive into digital payments, API mechanics, and fintech infrastructure by Paisape.';
                    if (preg_match('/<meta\s+name="description"\s+content="(.*?)"/i', $content, $m)) {
                        $desc = trim($m[1]);
                    } elseif (preg_match('/<meta\s+property="og:description"\s+content="(.*?)"/i', $content, $m)) {
                        $desc = trim($m[1]);
                    }

                    // Extract Image
                    $img = '/assets/paisape-og-banner.jpg';
                    if (preg_match('/<meta\s+property="og:image"\s+content="(.*?)"/i', $content, $m)) {
                        $img_path = parse_url(trim($m[1]), PHP_URL_PATH);
                        if ($img_path) $img = $img_path;
                    }

                    // Extract Date
                    $mtime = filemtime($dir . '/index.php');
                    $date = date('d M Y', $mtime);
                    if (preg_match('/<!--\s*Last Updated:\s*([0-9]{1,2}\s+[A-Za-z]+\s+[0-9]{4})/i', $content, $m)) {
                        $date = trim($m[1]);
                    } elseif (preg_match('/"datePublished":\s*"(.*?)"/i', $content, $m)) {
                        $date = trim($m[1]);
                    }

                    $dynamic_blogs[] = [
                        'slug' => $slug,
                        'url' => '/blog/' . $slug,
                        'title' => $title,
                        'image' => $img,
                        'category' => 'Engineering & Architecture',
                        'read_time' => '8 min read',
                        'date' => $date,
                        'timestamp' => $mtime,
                        'description' => $desc
                    ];
                }
            }
        }
    }

    // Merge static and dynamically discovered blogs
    $all_blogs = array_merge($dynamic_blogs, $static_blogs);

    // Sort by timestamp descending
    usort($all_blogs, function($a, $b) {
        return ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0);
    });

    return $all_blogs;
}

function get_latest_blogs($limit = 3) {
    $all = get_all_blogs();
    return array_slice($all, 0, $limit);
}
