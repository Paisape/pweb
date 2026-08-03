/* Paisape design tokens. Loaded right after the Tailwind CDN script.
   Change a colour here and it updates across every page. */
tailwind.config = {
  theme: {
    extend: {
      colors: {
        ink:     '#16233B',  // headings
        ink2:    '#22314D',  // strong body / nav
        body:    '#5C6B84',  // paragraphs
        brand:   '#0E9BEE',  // primary blue
        brandDk: '#0B7FC4',  // primary blue, hover
        brandLt: '#E6F3FD',  // blue tint (icon chips)
        mist:    '#F1F7FC',  // page tint
        night:   '#302E45',  // footer
        night2:  '#26233A',  // footer bottom bar
        deep:    '#111B2E',  // dark CTA band
        mint:    '#2ECFB4',  // secondary accent (mega menu, subscribe)
        mintLt:  '#E9F7F2'   // mega menu rail
      },
      fontFamily: {
        display: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
        sans:    ['Inter', 'system-ui', 'sans-serif'],
        mono:    ['"JetBrains Mono"', 'ui-monospace', 'monospace']
      },
      maxWidth: { site: '72rem' }
    }
  }
};
