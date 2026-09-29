/**
 * GRACE DECO - main script
 */
(function () {
  'use strict';

  var $ = function (sel, root) { return (root || document).querySelector(sel); };
  var $$ = function (sel, root) { return Array.prototype.slice.call((root || document).querySelectorAll(sel)); };

  var header = document.getElementById('gdHeader');
  var burger = document.getElementById('gdBurger');
  var mobileMenu = document.getElementById('gdMobileMenu');
  var transition = $('.gd-page-transition');

  /* ===== Hero title character animation ===== */
  var heroTitle = document.getElementById('heroTitle');
  if (heroTitle) {
    var text = heroTitle.getAttribute('data-text') || heroTitle.textContent;
    heroTitle.setAttribute('aria-label', text);
    heroTitle.textContent = '';
    Array.from(text).forEach(function (c, i) {
      var span = document.createElement('span');
      span.className = 'char';
      span.setAttribute('aria-hidden', 'true');
      span.textContent = c === ' ' ? ' ' : c;
      span.style.animationDelay = (0.4 + i * 0.06) + 's';
      if ('早高価値'.indexOf(c) !== -1) { span.style.color = 'var(--gold)'; }
      heroTitle.appendChild(span);
    });
  }

  /* ===== Custom cursor (desktop only) ===== */
  var isTouch = ('ontouchstart' in window) || navigator.maxTouchPoints > 0;
  var cursor = $('.gd-cursor');
  var dot = $('.gd-dot');
  if (!isTouch && window.innerWidth > 900 && cursor && dot) {
    var mx = 0, my = 0, cx = 0, cy = 0;
    document.addEventListener('mousemove', function (e) {
      mx = e.clientX; my = e.clientY;
      dot.style.left = mx + 'px';
      dot.style.top = my + 'px';
    });
    (function loop() {
      cx += (mx - cx) * 0.15;
      cy += (my - cy) * 0.15;
      cursor.style.left = cx + 'px';
      cursor.style.top = cy + 'px';
      requestAnimationFrame(loop);
    })();
    $$('a, button, .gd-svc, .gd-feat, .gd-yuu, .gd-case-card, .gd-flow-item').forEach(function (el) {
      el.addEventListener('mouseenter', function () { cursor.classList.add('hover'); });
      el.addEventListener('mouseleave', function () { cursor.classList.remove('hover'); });
    });
  }

  /* ===== Header scroll ===== */
  function onScroll() {
    if (!header) { return; }
    header.classList.toggle('scrolled', window.scrollY > 50);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ===== Mobile menu ===== */
  function setMenu(open) {
    if (!burger || !mobileMenu) { return; }
    burger.classList.toggle('open', open);
    mobileMenu.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.style.overflow = open ? 'hidden' : '';
  }
  if (burger && mobileMenu) {
    burger.addEventListener('click', function () {
      setMenu(!mobileMenu.classList.contains('open'));
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') { setMenu(false); }
    });
  }

  /* ===== Page transition (wipe) between real pages ===== */
  function playEnter() {
    if (!transition) { return; }
    transition.classList.remove('leaving');
    transition.classList.add('entering');
    setTimeout(function () { transition.classList.remove('entering'); }, 900);
  }
  // Only play the "enter" wipe when arriving from another page of this site.
  try {
    if (document.referrer && new URL(document.referrer).origin === location.origin) { playEnter(); }
  } catch (e) { /* ignore */ }

  // bfcache: make sure the cover is gone when coming back with the browser's back button
  window.addEventListener('pageshow', function (e) {
    if (e.persisted && transition) {
      transition.classList.remove('leaving', 'entering');
      setMenu(false);
    }
  });

  document.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a[href]') : null;
    if (!a || !transition) { return; }
    if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) { return; }
    if (a.target && a.target !== '_self') { return; }
    var url;
    try { url = new URL(a.href, location.href); } catch (err) { return; }
    if (url.origin !== location.origin) { return; }
    if (url.pathname === location.pathname && url.search === location.search) { return; } // same page / anchor
    if (/\/wp-admin\/|\/wp-login\.php/.test(url.pathname)) { return; }
    e.preventDefault();
    setMenu(false);
    transition.classList.remove('entering');
    transition.classList.add('leaving');
    setTimeout(function () { location.href = a.href; }, 550);
  });

  /* ===== Reveal on scroll ===== */
  var revealEls = $$('.reveal');
  var observer = null;
  if ('IntersectionObserver' in window) {
    observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) { return; }
        entry.target.classList.add('in');
        if (entry.target.classList.contains('gd-flow-wrap')) {
          var line = document.getElementById('flowLine');
          if (line) {
            setTimeout(function () { line.style.setProperty('--progress', '100%'); }, 300);
          }
        }
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(function (el) { observer.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
    var fl = document.getElementById('flowLine');
    if (fl) { fl.style.setProperty('--progress', '100%'); }
  }

  /* ===== Case filter ===== */
  var filterBtns = $$('.gd-filter-btn');
  var cases = $$('.gd-case-detail');
  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var f = btn.getAttribute('data-filter');
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      cases.forEach(function (c) {
        var show = f === 'all' || c.getAttribute('data-category') === f;
        c.classList.toggle('is-hidden', !show);
      });
    });
  });

  /* ===== Parallax hero (desktop only) ===== */
  var heroBg = $('.gd-hero-bg');
  var heroContent = $('.gd-hero-content');
  if (window.innerWidth > 768 && (heroBg || heroContent)) {
    window.addEventListener('scroll', function () {
      var y = window.scrollY;
      if (y >= 800) { return; }
      if (heroBg) { heroBg.style.transform = 'translateY(' + (y * 0.3) + 'px) scale(' + (1 + y * 0.0002) + ')'; }
      if (heroContent) {
        heroContent.style.opacity = 1 - y / 500;
        heroContent.style.transform = 'translateY(' + (y * 0.2) + 'px)';
      }
    }, { passive: true });
  }

  /* ===== Resize handling ===== */
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768 && mobileMenu && mobileMenu.classList.contains('open')) { setMenu(false); }
  });

  /* ===== Contact form: prevent double submit ===== */
  var form = $('.gd-contact-form');
  if (form) {
    form.addEventListener('submit', function () {
      var btn = $('.gd-form-btn', form);
      if (btn) { setTimeout(function () { btn.disabled = true; }, 0); }
    });
    window.addEventListener('pageshow', function () {
      var btn = $('.gd-form-btn', form);
      if (btn) { btn.disabled = false; }
    });
  }
})();
