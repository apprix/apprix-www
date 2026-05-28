import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
import focus from '@alpinejs/focus'
import intersect from '@alpinejs/intersect'
import morph from '@alpinejs/morph'
import persist from '@alpinejs/persist'
import precognition from 'laravel-precognition-alpine';

// Stat counter component
Alpine.data('statCounter', (raw) => {
  const clean = raw.replace(/\s/g, '')
  const match = clean.match(/^([\d]+)(.*?)$/)
  const target = match ? parseInt(match[1], 10) : 0
  const suffix = match ? match[2] : ''
  const useSpaces = /\d\s\d/.test(raw)

  return {
    current: 0,
    display: '0' + suffix,
    start() {
      const duration = 2000
      const steps = 60
      const increment = target / steps
      const stepTime = duration / steps
      let step = 0

      const timer = setInterval(() => {
        step++
        this.current = Math.min(Math.round(increment * step), target)

        let formatted = this.current.toString()
        if (useSpaces) {
          formatted = this.current.toLocaleString('fi-FI')
        }
        this.display = formatted + suffix

        if (step >= steps) clearInterval(timer)
      }, stepTime)
    }
  }
})

// Feature showcase tabbed component
Alpine.data('featureShowcase', (count, autoplay, interval) => ({
  active: 0,
  total: count,
  progress: 0,
  paused: false,
  reducedMotion: false,
  _raf: null,
  _start: 0,
  _elapsed: 0,
  _duration: interval * 1000,

  init() {
    this.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches
    if (autoplay && !this.reducedMotion) this._startLoop()
  },

  select(index) {
    this.active = index
    this.progress = 0
    this._elapsed = 0
    if (autoplay && !this.reducedMotion) this._startLoop()
  },

  next() {
    this.active = (this.active + 1) % this.total
    this.progress = 0
    this._elapsed = 0
    if (autoplay && !this.reducedMotion) this._startLoop()
  },

  prev() {
    this.active = (this.active - 1 + this.total) % this.total
    this.progress = 0
    this._elapsed = 0
    if (autoplay && !this.reducedMotion) this._startLoop()
  },

  _startLoop() {
    this._stopLoop()
    this._start = performance.now()
    this._elapsed = 0
    const tick = (now) => {
      if (!this.paused) {
        this._elapsed += now - this._start
      }
      this._start = now
      this.progress = Math.min(this._elapsed / this._duration, 1)

      if (this.progress >= 1) {
        this.active = (this.active + 1) % this.total
        this.progress = 0
        this._elapsed = 0
      }
      this._raf = requestAnimationFrame(tick)
    }
    this._raf = requestAnimationFrame(tick)
  },

  _stopLoop() {
    if (this._raf) { cancelAnimationFrame(this._raf); this._raf = null }
  },

  pause() { this.paused = true },
  resume() { this.paused = false; this._start = performance.now() },

  segmentState(index) {
    if (index === this.active) return 'active'
    return 'idle'
  },

  onKeydown(e) {
    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') { e.preventDefault(); this.next(); this.$focus.focus(this.$refs['tab' + this.active]) }
    if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') { e.preventDefault(); this.prev(); this.$focus.focus(this.$refs['tab' + this.active]) }
    if (e.key === 'Home') { e.preventDefault(); this.select(0); this.$focus.focus(this.$refs['tab0']) }
    if (e.key === 'End') { e.preventDefault(); this.select(this.total - 1); this.$focus.focus(this.$refs['tab' + (this.total - 1)]) }
  },

  destroy() { this._stopLoop() }
}))

// ── Image lightbox ──────────────────────────────────────────────────────────
// Covers both /help (docs) and /faq — any image inside .prose or figure.doc-image
// opens in a full-screen overlay on click.
;(function initLightbox() {
  let overlay, imgEl

  function build() {
    overlay = document.createElement('div')
    overlay.id = 'img-lightbox'
    overlay.setAttribute('role', 'dialog')
    overlay.setAttribute('aria-modal', 'true')
    overlay.setAttribute('aria-label', 'Image preview')
    overlay.style.display = 'none'

    const closeBtn = document.createElement('button')
    closeBtn.id = 'img-lightbox-close'
    closeBtn.setAttribute('aria-label', 'Close image preview')
    closeBtn.innerHTML = '&times;'
    closeBtn.addEventListener('click', close)

    imgEl = document.createElement('img')
    imgEl.alt = ''

    overlay.appendChild(closeBtn)
    overlay.appendChild(imgEl)
    document.body.appendChild(overlay)

    overlay.addEventListener('click', (e) => { if (e.target === overlay) close() })
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && overlay.style.display !== 'none') close()
    })
    document.addEventListener('click', (e) => {
      const target = e.target.closest('.prose img')
      if (target) { e.preventDefault(); open(target.src, target.alt) }
    })
  }

  function open(src, alt) {
    imgEl.src = src
    imgEl.alt = alt || ''
    overlay.style.display = 'flex'
    document.body.style.overflow = 'hidden'
    // double rAF ensures the display:flex is painted before the transition runs
    requestAnimationFrame(() => requestAnimationFrame(() => overlay.classList.add('lb-open')))
  }

  function close() {
    overlay.classList.remove('lb-open')
    document.body.style.overflow = ''
    setTimeout(() => { overlay.style.display = 'none'; imgEl.src = '' }, 200)
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', build)
  } else {
    build()
  }
})()

// Call Alpine.
window.Alpine = Alpine
Alpine.plugin([collapse, focus, intersect, morph, persist, precognition])
Alpine.start()
