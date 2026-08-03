# Paisape — website

13 pages, single folder, no build step. Open `index.html` in a browser and it works.

---

## 1. Folder structure

```
paisape-website/
├── index.html                      Home / landing
├── blog.html                       Blog listing (filter + search)
├── contact.html                    Contact (form + FAQ)
│
├── neobanking.html                 Issuing Solution
├── qr-code-solution.html           Merchant Acquiring
├── soundbox.html                   Merchant Acquiring
├── bbps.html                       Transaction Banking
├── upi.html                        Transaction Banking
├── aeps.html                       Transaction Banking
├── onboarding-solution.html        Value Added
├── reconciliation-solution.html    Value Added
├── switching-solution.html         Value Added
├── pos-solution.html               Payments
│
├── assets/
│   ├── logo.svg                    Nav logo        ← REPLACE
│   ├── logo-white.svg              Footer logo     ← REPLACE
│   └── favicon.svg                 Favicon         ← REPLACE
├── css/style.css                   All custom CSS (animations, mega menu, forms)
└── js/
    ├── tailwind.config.js          Colour + font tokens
    └── main.js                     All behaviour
```

All pages sit at the same level, so every link is a plain filename. No path juggling.

---

## 2. Replacing the logo

Drop your files in `assets/` using the same names and nothing else changes:

| File | Where it appears | Recommended |
|---|---|---|
| `assets/logo.svg` | Navbar (light background) | SVG or PNG @2x, ~200×52 |
| `assets/logo-white.svg` | Footer (dark background) | white/light version |
| `assets/paisape-logo.png` | Browser tab | square |

Using a PNG instead? Change the extension in the `<img>` tag — nav is near the top of each page, footer near the bottom:

```html
<img src="assets/logo.png" alt="Paisape" class="h-9 w-auto">
```

Logo too small or too big? Change `h-9` → `h-8` (smaller) or `h-11` (bigger).

---

## 3. Changing colours and fonts

Everything lives in `js/tailwind.config.js`. Change one value, all 13 pages update:

```js
brand:   '#0E9BEE',   // primary blue — buttons, links, highlights
mint:    '#2ECFB4',   // secondary — mega menu arrows, Subscribe
ink:     '#16233B',   // headings
body:    '#5C6B84',   // paragraphs
night:   '#302E45',   // footer
deep:    '#111B2E',   // dark CTA band
```

Fonts are loaded from Google Fonts in each page's `<head>` — Plus Jakarta Sans (headings), Inter (body), JetBrains Mono (terminal).

---

## 4. Animations

| Effect | How to use it |
|---|---|
| Fade up on scroll | `data-reveal` |
| Slide in from left/right | `data-reveal="left"` / `data-reveal="right"` |
| Zoom in | `data-reveal="zoom"` |
| Stagger | `data-delay="120"` (milliseconds) |
| Marquee right → left | `<div class="track animate-marquee-l">` |
| Marquee left → right | `<div class="track animate-marquee-r">` |

Marquees loop seamlessly because `js/main.js` clones the `[data-mq-group]` block into `[data-mq-clone]`. Add or remove items in the group only — the clone fills itself. Hovering pauses the scroll.

Speed: change `38s` in `css/style.css` under `.animate-marquee-l` / `.animate-marquee-r`.

Everything respects `prefers-reduced-motion`, so animations switch off for users who ask their OS for that.

---

## 5. Adding a new product page

1. Copy any existing product page, e.g. `soundbox.html`.
2. Edit the hero eyebrow, `<h1>`, description, pills, six feature cards, spec list and CTA.
3. Add it to the mega menu on **every** page — search for `mega-panel` and add one line inside the right category:

```html
<a class="mega-link" href="your-page.html"><span>Your Product</span>
  <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
</a>
```

Also add it to `#mobileProductsPanel` in the same file.

---

## 6. Wiring up the forms

Three forms are front-end only right now and need a backend:

- **Contact form** (`contact.html`, `id="contactForm"`) — validates and shows a success message, but does not send. Handler is in `js/main.js` section 10.
- **Newsletter** (footer, every page) and the blog **Thursday note** — both are `onsubmit="return false"`.

Point them at your API, or a service like Formspree, and remove the `return false`.

---

## 7. Notes on what I changed from the current site

Two small things in the screenshots looked like bugs, so they're fixed here — say the word if you want them exactly as-is:

1. **The dark CTA band said "Ready to launch your digital bank?" on every product page**, including QR codes, Soundbox and POS. Each page now has a heading and sub-line that matches its own product.
2. **The POS page had three feature cards with headings but no body text.** I wrote one line for each. Replace with your own copy when you have it.

Also added, since the pages felt thin at the bottom: an "Explore the rest of the stack" marquee that cross-links the other nine products.

---

## 8. Production note

Tailwind loads from the CDN, which is perfect for editing but prints a console warning in production and adds a network request. When you're ready to ship, compile it once:

```bash
npm i -D tailwindcss@3
npx tailwindcss -i input.css -o css/tailwind.css --minify
```

Then in each page, replace the two CDN script tags with `<link rel="stylesheet" href="css/tailwind.css">`. Keep `css/style.css` — it's separate from Tailwind.
