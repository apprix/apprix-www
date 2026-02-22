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

// Call Alpine.
window.Alpine = Alpine
Alpine.plugin([collapse, focus, intersect, morph, persist, precognition])
Alpine.start()
