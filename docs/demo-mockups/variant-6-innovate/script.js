// ============================================
// VARIANT 6: INNOVATE - INTERACTIVE SCRIPTS
// Particles, Magnetic Cursor, Scroll Animations, 3D Tilt
// ============================================

(function() {
    'use strict';

    // ===== PERFORMANCE & ACCESSIBILITY DETECTION =====
    const PERFORMANCE = {
        // Check for reduced motion preference
        prefersReducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
        
        // Detect mobile devices
        isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        
        // Detect low-end devices
        isLowEnd: navigator.hardwareConcurrency < 4 || navigator.deviceMemory < 4,
        
        // Check if touch device
        isTouch: 'ontouchstart' in window || navigator.maxTouchPoints > 0
    };

    // Disable heavy effects if needed
    const EFFECTS_ENABLED = !PERFORMANCE.prefersReducedMotion && !PERFORMANCE.isLowEnd;
    const CURSOR_ENABLED = EFFECTS_ENABLED && !PERFORMANCE.isTouch;
    const PARTICLES_ENABLED = EFFECTS_ENABLED;


    // ===== CONFIGURATION =====
    const CONFIG = {
        particles: {
            count: PERFORMANCE.isMobile ? 20 : (PERFORMANCE.isLowEnd ? 30 : 50),
            maxSize: 3,
            minSize: 1,
            speed: 0.5,
            color: 'rgba(201, 169, 97, 0.6)'
        },
        magnetic: {
            strength: 0.3,
            distance: 100
        },
        tilt: {
            maxTilt: 15,
            scale: 1.05
        }
    };

    // ===== PARTICLE SYSTEM =====
    class ParticleSystem {
        constructor(canvas) {
            this.canvas = canvas;
            this.ctx = canvas.getContext('2d');
            this.particles = [];
            this.mousePosition = { x: 0, y: 0 };

            this.resize();
            this.createParticles();
            this.animate();

            window.addEventListener('resize', () => this.resize());
            document.addEventListener('mousemove', (e) => {
                this.mousePosition.x = e.clientX;
                this.mousePosition.y = e.clientY;
            });
        }

        resize() {
            this.canvas.width = window.innerWidth;
            this.canvas.height = window.innerHeight;
        }

        createParticles() {
            this.particles = [];
            for (let i = 0; i < CONFIG.particles.count; i++) {
                this.particles.push({
                    x: Math.random() * this.canvas.width,
                    y: Math.random() * this.canvas.height,
                    size: Math.random() * (CONFIG.particles.maxSize - CONFIG.particles.minSize) + CONFIG.particles.minSize,
                    speedX: (Math.random() - 0.5) * CONFIG.particles.speed,
                    speedY: (Math.random() - 0.5) * CONFIG.particles.speed,
                    opacity: Math.random() * 0.5 + 0.2
                });
            }
        }

        updateParticles() {
            this.particles.forEach(particle => {
                // Move particle
                particle.x += particle.speedX;
                particle.y += particle.speedY;

                // Mouse interaction
                const dx = this.mousePosition.x - particle.x;
                const dy = this.mousePosition.y - particle.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 100) {
                    const force = (100 - distance) / 100;
                    particle.x -= dx * force * 0.03;
                    particle.y -= dy * force * 0.03;
                }

                // Wrap around edges
                if (particle.x < 0) particle.x = this.canvas.width;
                if (particle.x > this.canvas.width) particle.x = 0;
                if (particle.y < 0) particle.y = this.canvas.height;
                if (particle.y > this.canvas.height) particle.y = 0;
            });
        }

        drawParticles() {
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

            this.particles.forEach(particle => {
                this.ctx.beginPath();
                this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                this.ctx.fillStyle = CONFIG.particles.color;
                this.ctx.globalAlpha = particle.opacity;
                this.ctx.fill();
            });

            // Draw connections
            this.particles.forEach((particle1, i) => {
                this.particles.slice(i + 1).forEach(particle2 => {
                    const dx = particle1.x - particle2.x;
                    const dy = particle1.y - particle2.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 100) {
                        this.ctx.beginPath();
                        this.ctx.moveTo(particle1.x, particle1.y);
                        this.ctx.lineTo(particle2.x, particle2.y);
                        this.ctx.strokeStyle = CONFIG.particles.color;
                        this.ctx.globalAlpha = (1 - distance / 100) * 0.3;
                        this.ctx.lineWidth = 0.5;
                        this.ctx.stroke();
                    }
                });
            });
        }

        animate() {
            this.updateParticles();
            this.drawParticles();
            requestAnimationFrame(() => this.animate());
        }
    }

    // ===== CUSTOM CURSOR =====
    class CustomCursor {
        constructor() {
            this.dot = document.querySelector('.cursor-dot');
            this.outline = document.querySelector('.cursor-outline');

            if (!this.dot || !this.outline) return;

            this.position = { x: 0, y: 0 };
            this.outlinePosition = { x: 0, y: 0 };

            document.addEventListener('mousemove', (e) => {
                this.position.x = e.clientX;
                this.position.y = e.clientY;

                this.dot.style.left = e.clientX + 'px';
                this.dot.style.top = e.clientY + 'px';
            });

            this.animate();
            this.setupHoverEffects();
        }

        animate() {
            const dx = this.position.x - this.outlinePosition.x;
            const dy = this.position.y - this.outlinePosition.y;

            this.outlinePosition.x += dx * 0.15;
            this.outlinePosition.y += dy * 0.15;

            this.outline.style.left = this.outlinePosition.x + 'px';
            this.outline.style.top = this.outlinePosition.y + 'px';

            requestAnimationFrame(() => this.animate());
        }

        setupHoverEffects() {
            const hoverElements = document.querySelectorAll('a, button, .magnetic-element');

            hoverElements.forEach(element => {
                element.addEventListener('mouseenter', () => {
                    this.outline.classList.add('hovering');
                });

                element.addEventListener('mouseleave', () => {
                    this.outline.classList.remove('hovering');
                });
            });
        }
    }

    // ===== MAGNETIC ELEMENTS =====
    class MagneticEffect {
        constructor() {
            this.elements = document.querySelectorAll('.magnetic-element');
            this.setupMagneticEffect();
        }

        setupMagneticEffect() {
            this.elements.forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;

                    const deltaX = (e.clientX - centerX) * CONFIG.magnetic.strength;
                    const deltaY = (e.clientY - centerY) * CONFIG.magnetic.strength;

                    element.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
                });

                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'translate(0, 0)';
                });
            });
        }
    }

    // ===== 3D TILT EFFECT =====
    class TiltEffect {
        constructor() {
            this.cards = document.querySelectorAll('[data-tilt]');
            this.setupTilt();
        }

        setupTilt() {
            this.cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = ((y - centerY) / centerY) * CONFIG.tilt.maxTilt;
                    const rotateY = ((centerX - x) / centerX) * CONFIG.tilt.maxTilt;

                    card.style.transform = `
                        perspective(1000px)
                        rotateX(${rotateX}deg)
                        rotateY(${rotateY}deg)
                        scale(${CONFIG.tilt.scale})
                    `;
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
                });
            });
        }
    }

    // ===== SCROLL ANIMATIONS =====
    class ScrollAnimations {
        constructor() {
            this.elements = document.querySelectorAll('.fade-in');
            this.observer = null;
            this.setupObserver();
        }

        setupObserver() {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, options);

            this.elements.forEach(element => {
                this.observer.observe(element);
            });
        }
    }

    // ===== ANIMATED COUNTER =====
    class AnimatedCounter {
        constructor() {
            this.counters = document.querySelectorAll('[data-count]');
            this.setupCounters();
        }

        setupCounters() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                        this.animateCounter(entry.target);
                        entry.target.classList.add('counted');
                    }
                });
            }, { threshold: 0.5 });

            this.counters.forEach(counter => observer.observe(counter));
        }

        animateCounter(element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        }
    }

    // ===== HEADER SCROLL EFFECT =====
    class HeaderScroll {
        constructor() {
            this.header = document.querySelector('.header');
            if (!this.header) return;

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    this.header.classList.add('scrolled');
                } else {
                    this.header.classList.remove('scrolled');
                }
            });
        }
    }

    // ===== THEME TOGGLE =====
    class ThemeToggle {
        constructor() {
            this.toggle = document.querySelector('.theme-toggle');
            if (!this.toggle) return;

            // Load saved theme
            const savedTheme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', savedTheme);

            this.toggle.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                document.documentElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
        }
    }

    // ===== TESTIMONIALS CAROUSEL =====
    class TestimonialsCarousel {
        constructor() {
            this.cards = document.querySelectorAll('.testimonial-card');
            this.dots = document.querySelectorAll('.carousel-dots .dot');
            this.prevBtn = document.querySelector('.carousel-btn.prev');
            this.nextBtn = document.querySelector('.carousel-btn.next');
            this.currentIndex = 0;

            if (this.cards.length === 0) return;

            this.setupControls();
            this.autoPlay();
        }

        setupControls() {
            this.nextBtn?.addEventListener('click', () => this.next());
            this.prevBtn?.addEventListener('click', () => this.prev());

            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goTo(index));
            });
        }

        next() {
            this.currentIndex = (this.currentIndex + 1) % this.cards.length;
            this.update();
        }

        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.cards.length) % this.cards.length;
            this.update();
        }

        goTo(index) {
            this.currentIndex = index;
            this.update();
        }

        update() {
            this.cards.forEach((card, index) => {
                card.classList.toggle('active', index === this.currentIndex);
            });

            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }

        autoPlay() {
            setInterval(() => this.next(), 5000);
        }
    }

    // ===== MODAL =====
    class Modal {
        constructor() {
            this.modal = document.getElementById('appointmentModal');
            if (!this.modal) return;

            this.backdrop = this.modal.querySelector('.modal-backdrop');
            this.closeBtn = this.modal.querySelector('.modal-close');

            this.setupListeners();
        }

        setupListeners() {
            this.backdrop?.addEventListener('click', () => this.close());
            this.closeBtn?.addEventListener('click', () => this.close());

            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.modal.classList.contains('active')) {
                    this.close();
                }
            });
        }

        open() {
            this.modal.classList.add('active');
            this.modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        close() {
            this.modal.classList.remove('active');
            this.modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    // ===== FORM HANDLER =====
    class FormHandler {
        constructor() {
            this.form = document.getElementById('appointmentForm');
            if (!this.form) return;

            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
        }

        handleSubmit(e) {
            e.preventDefault();

            const formData = new FormData(this.form);
            const data = Object.fromEntries(formData);

            console.log('Form submitted:', data);

            // Show success message
            alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');

            // Close modal
            window.modalInstance?.close();

            // Reset form
            this.form.reset();
        }
    }

    // ===== SMOOTH SCROLL =====
    class SmoothScroll {
        constructor() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', (e) => {
                    const href = anchor.getAttribute('href');
                    if (href === '#') return;

                    e.preventDefault();
                    const target = document.querySelector(href);

                    if (target) {
                        const offset = 80; // Header height
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }
    }

    // ===== MOBILE MENU =====
    class MobileMenu {
        constructor() {
            this.toggle = document.querySelector('.mobile-menu-toggle');
            this.nav = document.querySelector('.nav');

            if (!this.toggle || !this.nav) return;

            this.toggle.addEventListener('click', () => {
                const isOpen = this.toggle.getAttribute('aria-expanded') === 'true';
                this.toggle.setAttribute('aria-expanded', !isOpen);
                this.toggle.classList.toggle('open');
                this.nav.classList.toggle('open');
            });

            // Close menu when clicking on links
            this.nav.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    this.toggle.setAttribute('aria-expanded', 'false');
                    this.toggle.classList.remove('open');
                    this.nav.classList.remove('open');
                });
            });
        }
    }

    // ===== EFFECTS TOGGLE =====
    class EffectsToggle {
        constructor() {
            this.button = document.querySelector('.effects-toggle');
            if (!this.button) return;

            // Load saved preference
            const effectsDisabled = localStorage.getItem('effectsDisabled') === 'true';
            if (effectsDisabled) {
                document.body.classList.add('effects-disabled');
                this.button.setAttribute('aria-label', 'Включить эффекты');
                this.button.setAttribute('title', 'Включить анимации и эффекты');
            }

            this.button.addEventListener('click', () => {
                const isDisabled = document.body.classList.toggle('effects-disabled');
                localStorage.setItem('effectsDisabled', isDisabled);
                
                if (isDisabled) {
                    this.button.setAttribute('aria-label', 'Включить эффекты');
                    this.button.setAttribute('title', 'Включить анимации и эффекты');
                } else {
                    this.button.setAttribute('aria-label', 'Отключить эффекты');
                    this.button.setAttribute('title', 'Отключить анимации и эффекты');
                    // Reload page to reinitialize effects
                    window.location.reload();
                }
            });
        }
    }

    // ===== KEYBOARD NAVIGATION DETECTION =====
    class KeyboardNavigation {
        constructor() {
            // Detect keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Tab') {
                    document.body.classList.add('keyboard-nav');
                }
            });

            document.addEventListener('mousedown', () => {
                document.body.classList.remove('keyboard-nav');
            });

            // Keyboard shortcuts
            document.addEventListener('keydown', (e) => {
                // Escape to close modals
                if (e.key === 'Escape') {
                    window.closeAppointmentModal();
                }

                // T to toggle theme (Ctrl/Cmd + T)
                if ((e.ctrlKey || e.metaKey) && e.key === 't') {
                    e.preventDefault();
                    document.querySelector('.theme-toggle')?.click();
                }

                // E to toggle effects (Ctrl/Cmd + E)
                if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
                    e.preventDefault();
                    document.querySelector('.effects-toggle')?.click();
                }
            });
        }
    }

    // ===== GLOBAL MODAL FUNCTIONS =====
    window.openAppointmentModal = function() {
        window.modalInstance?.open();
    };

    window.closeAppointmentModal = function() {
        window.modalInstance?.close();
    };

    // ===== INITIALIZATION =====
    function init() {
        // Initialize particle system (only if enabled)
        if (PARTICLES_ENABLED) {
            const canvas = document.getElementById('particles-canvas');
            if (canvas) {
                new ParticleSystem(canvas);
            }
        } else {
            // Hide canvas if particles disabled
            const canvas = document.getElementById('particles-canvas');
            if (canvas) canvas.style.display = 'none';
        }

        // Initialize cursor effects (only if enabled)
        if (CURSOR_ENABLED) {
            new CustomCursor();
            new MagneticEffect();
        } else {
            // Hide cursor elements
            document.querySelectorAll('.cursor-dot, .cursor-outline').forEach(el => {
                el.style.display = 'none';
            });
            document.body.style.cursor = 'auto';
        }

        // Initialize tilt effect (only if effects enabled)
        if (EFFECTS_ENABLED) {
            new TiltEffect();
        }

        // Always initialize essential features
        new EffectsToggle();
        new KeyboardNavigation();
        new ScrollAnimations();
        new AnimatedCounter();
        new HeaderScroll();
        new ThemeToggle();
        new TestimonialsCarousel();
        window.modalInstance = new Modal();
        new FormHandler();
        new SmoothScroll();
        new MobileMenu();

        // Add loaded class to body
        document.body.classList.add('loaded');
    }

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Performance optimization: Debounce resize events
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            window.dispatchEvent(new Event('optimizedResize'));
        }, 250);
    });

    // ===== MODAL FUNCTIONALITY =====
    class Modal {
        constructor(modalId) {
            this.modal = document.getElementById(modalId);
            if (!this.modal) return;
            
            this.overlay = this.modal.querySelector('.modal-overlay');
            this.closeButtons = this.modal.querySelectorAll('[data-modal-close]');
            this.form = this.modal.querySelector('form');
            
            this.init();
        }
        
        init() {
            // Close on overlay click
            this.overlay?.addEventListener('click', () => this.close());
            
            // Close on close button click
            this.closeButtons.forEach(btn => {
                btn.addEventListener('click', () => this.close());
            });
            
            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.isOpen()) {
                    this.close();
                }
            });
            
            // Prevent body scroll when modal is open
            this.modal.addEventListener('transitionend', () => {
                if (this.isOpen()) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
            
            // Form submission
            if (this.form) {
                this.form.addEventListener('submit', (e) => this.handleSubmit(e));
            }
        }
        
        open() {
            this.modal.classList.add('active');
            this.modal.setAttribute('aria-hidden', 'false');
            
            // Focus first input
            setTimeout(() => {
                const firstInput = this.modal.querySelector('input, textarea, select');
                firstInput?.focus();
            }, 100);
        }
        
        close() {
            this.modal.classList.remove('active');
            this.modal.setAttribute('aria-hidden', 'true');
        }
        
        isOpen() {
            return this.modal.classList.contains('active');
        }
        
        handleSubmit(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this.form);
            const data = Object.fromEntries(formData);
            
            console.log('Form submitted:', data);
            
            // Show success alert (will be implemented in next step)
            this.showSuccessMessage();
            
            // Close modal
            setTimeout(() => {
                this.close();
                this.form.reset();
            }, 1500);
        }
        
        showSuccessMessage() {
            showAlert('success', 'Заявка отправлена!', 'Мы свяжемся с вами в ближайшее время.');
        }
    }
    
    // Initialize modal
    const appointmentModal = new Modal('appointmentModal');
    
    // Global function for onclick handlers
    window.openAppointmentModal = function() {
        appointmentModal.open();
    };
    
    // Add click handlers to all "Записаться" buttons
    document.querySelectorAll('[data-modal-open="appointmentModal"]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            appointmentModal.open();
        });
    });
    
    // Also handle buttons with text "Записаться"
    document.querySelectorAll('.btn-primary, .cta-button').forEach(btn => {
        if (btn.textContent.includes('Записаться')) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                appointmentModal.open();
            });
        }
    });

    // ===== ALERT SYSTEM =====
    class AlertSystem {
        constructor() {
            this.container = document.getElementById('alertContainer');
            this.alerts = [];
        }
        
        show(type, title, message, duration = 5000) {
            const alert = this.createAlert(type, title, message);
            this.container.appendChild(alert);
            this.alerts.push(alert);
            
            // Auto remove after duration
            if (duration > 0) {
                setTimeout(() => this.remove(alert), duration);
            }
            
            return alert;
        }
        
        createAlert(type, title, message) {
            const alert = document.createElement('div');
            alert.className = `alert alert-${type}`;
            alert.setAttribute('role', 'alert');
            
            const icon = this.getIcon(type);
            
            alert.innerHTML = `
                <div class="alert-icon">${icon}</div>
                <div class="alert-content">
                    <div class="alert-title">${title}</div>
                    <div class="alert-message">${message}</div>
                </div>
                <button class="alert-close" aria-label="Закрыть">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            `;
            
            // Close button handler
            const closeBtn = alert.querySelector('.alert-close');
            closeBtn.addEventListener('click', () => this.remove(alert));
            
            return alert;
        }
        
        getIcon(type) {
            const icons = {
                success: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>`,
                error: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>`,
                warning: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                    <line x1="12" y1="9" x2="12" y2="13"></line>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>`,
                info: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>`
            };
            return icons[type] || icons.info;
        }
        
        remove(alert) {
            alert.classList.add('removing');
            setTimeout(() => {
                alert.remove();
                this.alerts = this.alerts.filter(a => a !== alert);
            }, 300);
        }
        
        clear() {
            this.alerts.forEach(alert => this.remove(alert));
        }
    }
    
    // Initialize alert system
    const alertSystem = new AlertSystem();
    
    // Global function for showing alerts
    window.showAlert = function(type, title, message, duration) {
        return alertSystem.show(type, title, message, duration);
    };

})();
