/* ==========================================================================
   Paisape — shared behaviour
   Every block is guarded, so the same file runs safely on every page.
   ========================================================================== */
(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------------------
     1. Seamless marquee — clone each group so the loop never jumps
     --------------------------------------------------------------------- */
  document.querySelectorAll('.track').forEach(function (track) {
    var group = track.querySelector('[data-mq-group]');
    var clone = track.querySelector('[data-mq-clone]');
    if (group && clone) clone.innerHTML = group.innerHTML;
  });

  /* ---------------------------------------------------------------------
     2. Scroll reveal
     --------------------------------------------------------------------- */
  var revealTargets = document.querySelectorAll('[data-reveal]');
  if (revealTargets.length) {
    var revealIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        el.style.transitionDelay = (el.dataset.delay || 0) + 'ms';
        el.classList.add('is-in');
        revealIO.unobserve(el);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    revealTargets.forEach(function (el) { revealIO.observe(el); });
  }

  /* ---------------------------------------------------------------------
     3. One-shot animators — donut, bars, centre rail
     --------------------------------------------------------------------- */
  var onceTargets = document.querySelectorAll('.donut, .bar, [data-line]');
  if (onceTargets.length) {
    var onceIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-in');
        onceIO.unobserve(entry.target);
      });
    }, { threshold: 0.3 });
    onceTargets.forEach(function (el) { onceIO.observe(el); });
  }

  /* ---------------------------------------------------------------------
     4. Terminal typing
     --------------------------------------------------------------------- */
  var term = document.getElementById('terminal');
  if (term) {
    new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        term.querySelectorAll('.term-line').forEach(function (line) {
          setTimeout(function () { line.classList.add('is-in'); },
                     Number(line.dataset.t) * 220 + 200);
        });
        obs.disconnect();
      });
    }, { threshold: 0.35 }).observe(term);
  }

  /* ---------------------------------------------------------------------
     5. Number count-up
     --------------------------------------------------------------------- */
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    var inFormat = function (n) { return n.toLocaleString('en-IN'); };

    var finalValue = function (el) {
      var prefix = el.dataset.prefix || '';
      var dec = Number(el.dataset.dec || 0);
      var target = parseFloat(el.dataset.count);
      return prefix + (el.dataset.format === 'in'
        ? inFormat(Math.round(target))
        : target.toFixed(dec));
    };

    if (reduced) {
      counters.forEach(function (el) { el.textContent = finalValue(el); });
    } else {
      var countUp = function (el) {
        var target = parseFloat(el.dataset.count);
        var dec = Number(el.dataset.dec || 0);
        var prefix = el.dataset.prefix || '';
        var indian = el.dataset.format === 'in';
        var duration = 1600;
        var start = performance.now();

        var step = function (now) {
          var p = Math.min((now - start) / duration, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          var value = target * eased;
          el.textContent = prefix + (indian ? inFormat(Math.round(value)) : value.toFixed(dec));
          if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
      };

      var countIO = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          countUp(entry.target);
          obs.unobserve(entry.target);
        });
      }, { threshold: 0.6 });

      counters.forEach(function (el) { countIO.observe(el); });
    }
  }

  /* ---------------------------------------------------------------------
     6. Sticky nav, reading progress, back to top
     --------------------------------------------------------------------- */
  var navInner = document.getElementById('navInner');
  var toTop    = document.getElementById('toTop');
  var progress = document.getElementById('progress');
  var scrolledClasses = ['bg-white/90', 'backdrop-blur-xl', 'border-slate-100', 'shadow-lg', 'shadow-slate-200/50'];

  var onScroll = function () {
    var y = window.scrollY;

    if (navInner) {
      scrolledClasses.forEach(function (c) { navInner.classList.toggle(c, y > 30); });
    }
    if (progress) {
      var max = document.body.scrollHeight - window.innerHeight;
      progress.style.transform = 'scaleX(' + (max > 0 ? y / max : 0) + ')';
    }
    if (toTop) {
      toTop.classList.toggle('opacity-0', y < 500);
      toTop.classList.toggle('translate-y-4', y < 500);
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (toTop) {
    toTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------------------------------------------------------------------
     7. Mobile menu
     --------------------------------------------------------------------- */
  var burger = document.getElementById('burger');
  var menu   = document.getElementById('mobileMenu');
  if (burger && menu) {
    burger.addEventListener('click', function () {
      var closed = menu.classList.toggle('hidden');
      burger.setAttribute('aria-expanded', String(!closed));
    });
  }

  /* Mobile products accordion */
  var mobileProducts = document.getElementById('mobileProductsToggle');
  if (mobileProducts) {
    mobileProducts.addEventListener('click', function () {
      var panel = document.getElementById('mobileProductsPanel');
      var closed = panel.classList.toggle('hidden');
      mobileProducts.setAttribute('aria-expanded', String(!closed));
      mobileProducts.querySelector('svg').style.transform = closed ? '' : 'rotate(180deg)';
    });
  }

  /* ---------------------------------------------------------------------
     8. Products mega menu — left rail switches the right panel
     --------------------------------------------------------------------- */
  var cats = document.querySelectorAll('.mega-cat');
  if (cats.length) {
    var selectCategory = function (key) {
      cats.forEach(function (c) {
        c.setAttribute('aria-selected', String(c.dataset.cat === key));
      });
      document.querySelectorAll('.mega-panel').forEach(function (p) {
        p.classList.toggle('show', p.dataset.panel === key);
      });
    };

    cats.forEach(function (cat) {
      cat.addEventListener('mouseenter', function () { selectCategory(cat.dataset.cat); });
      cat.addEventListener('focus',      function () { selectCategory(cat.dataset.cat); });
      cat.addEventListener('click', function (e) { e.preventDefault(); selectCategory(cat.dataset.cat); });
    });

    /* Keyboard: open the menu when the Products trigger is focused */
    var megaTrigger = document.getElementById('megaTrigger');
    var megaParent  = document.querySelector('.mega-parent');
    if (megaTrigger && megaParent) {
      megaTrigger.addEventListener('click', function (e) {
        e.preventDefault();
        megaParent.classList.toggle('open');
        megaTrigger.setAttribute('aria-expanded', String(megaParent.classList.contains('open')));
      });
      document.addEventListener('click', function (e) {
        if (!megaParent.contains(e.target)) megaParent.classList.remove('open');
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') megaParent.classList.remove('open');
      });
    }
  }

  /* ---------------------------------------------------------------------
     9. FAQ accordion — one open at a time
     --------------------------------------------------------------------- */
  var faqButtons = document.querySelectorAll('.faq-toggle');
  if (faqButtons.length) {
    faqButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq');
        var wasOpen = item.classList.contains('open');
        document.querySelectorAll('.faq').forEach(function (f) { f.classList.remove('open'); });
        if (!wasOpen) item.classList.add('open');
      });
    });
  }

  /* ---------------------------------------------------------------------
     10. Contact form
     --------------------------------------------------------------------- */
  var contactForm = document.getElementById('contactForm');
  if (contactForm) {
    var note  = document.getElementById('formNote');
    var error = document.getElementById('formError');

    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = contactForm.checkValidity();
      if (note)  note.classList.toggle('hidden', !valid);
      if (error) error.classList.toggle('hidden', valid);

      if (valid) {
        contactForm.reset();
        document.querySelectorAll('.chip input').forEach(function (i) { i.checked = false; });
        if (note) note.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  }

  /* ---------------------------------------------------------------------
     11. Blog filter + search + 6-per-page pagination
     --------------------------------------------------------------------- */
  var posts = Array.prototype.slice.call(document.querySelectorAll('.post'));
  if (posts.length) {
    var filterButtons = Array.prototype.slice.call(document.querySelectorAll('.filter-btn'));
    var search = document.getElementById('search');
    var empty  = document.getElementById('empty');
    var loadMore = document.getElementById('loadMore');
    var activeCat = 'all';
    var visibleLimit = 6; // Start with 6 posts

    var applyFilters = function () {
      var q = search ? search.value.trim().toLowerCase() : '';
      var matchingCount = 0;
      var displayedCount = 0;

      posts.forEach(function (post) {
        var catOk  = activeCat === 'all' || post.dataset.cat === activeCat;
        var textOk = !q || post.textContent.toLowerCase().indexOf(q) !== -1;
        var isMatch = catOk && textOk;

        if (isMatch) {
          matchingCount++;
          if (matchingCount <= visibleLimit) {
            post.classList.remove('hidden');
            displayedCount++;
            post.style.animation = 'none';
            void post.offsetWidth;               // force reflow to restart it
            post.style.animation = 'pop .5s cubic-bezier(.22,1,.36,1) both';
            post.style.animationDelay = (displayedCount * 45) + 'ms';
          } else {
            post.classList.add('hidden');
          }
        } else {
          post.classList.add('hidden');
        }
      });

      if (empty) empty.classList.toggle('hidden', matchingCount > 0);

      // Handle Load More button state & visibility
      if (loadMore) {
        if (matchingCount > visibleLimit) {
          loadMore.style.display = 'inline-flex';
          loadMore.textContent = 'Load older posts';
          loadMore.disabled = false;
          loadMore.classList.remove('opacity-60', 'cursor-default');
        } else {
          if (matchingCount > 0 && matchingCount <= 6) {
            loadMore.style.display = 'none';
          } else {
            loadMore.style.display = 'inline-flex';
            loadMore.textContent = 'No more articles';
            loadMore.disabled = true;
            loadMore.classList.add('opacity-60', 'cursor-default');
          }
        }
      }
    };

    filterButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterButtons.forEach(function (b) { b.setAttribute('aria-pressed', 'false'); });
        btn.setAttribute('aria-pressed', 'true');
        activeCat = btn.dataset.filter;
        visibleLimit = 6; // Reset limit to 6 on filter change
        applyFilters();
      });
    });

    if (search) {
      var timer;
      search.addEventListener('input', function () {
        clearTimeout(timer);
        visibleLimit = 6; // Reset limit to 6 on search
        timer = setTimeout(applyFilters, 180);
      });
    }

    if (loadMore) {
      loadMore.addEventListener('click', function () {
        visibleLimit += 6; // Load 6 more posts (6 -> 12 -> 18)
        applyFilters();
      });
    }

    // Initial render: show first 6 posts
    applyFilters();
  }

})();
