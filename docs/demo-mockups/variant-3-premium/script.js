/**
 * VARIANT 3: PREMIUM - JavaScript
 * Interactive functionality for premium clinic website
 */

// ============================================
// MOBILE MENU
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');
    
    if (mobileMenuToggle && nav) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
            
            // Toggle aria-expanded
            mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
            
            // Toggle nav visibility
            nav.classList.toggle('active');
            
            // Toggle hamburger animation
            const hamburger = mobileMenuToggle.querySelector('.hamburger');
            if (hamburger) {
                hamburger.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(90deg)';
            }
        });
        
        // Close menu when clicking on nav links
        const navLinks = nav.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 768) {
                    nav.classList.remove('active');
                    mobileMenuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }
});

// ============================================
// HERO SLIDER
// ============================================
class HeroSlider {
    constructor(sliderElement) {
        this.slider = sliderElement;
        if (!this.slider) return;
        
        this.slides = this.slider.querySelectorAll('.slide');
        this.dots = this.slider.querySelectorAll('.dot');
        this.prevBtn = this.slider.querySelector('.slider-prev');
        this.nextBtn = this.slider.querySelector('.slider-next');
        this.currentSlide = 0;
        this.autoplayInterval = null;
        
        this.init();
    }
    
    init() {
        // Set up button listeners
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.prevSlide());
        }
        
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.nextSlide());
        }
        
        // Set up dot listeners
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
        
        // Start autoplay
        this.startAutoplay();
        
        // Pause on hover
        this.slider.addEventListener('mouseenter', () => this.stopAutoplay());
        this.slider.addEventListener('mouseleave', () => this.startAutoplay());
    }
    
    goToSlide(index) {
        // Remove active class from current slide and dot
        this.slides[this.currentSlide].classList.remove('active');
        this.dots[this.currentSlide].classList.remove('active');
        
        // Update current slide
        this.currentSlide = index;
        
        // Add active class to new slide and dot
        this.slides[this.currentSlide].classList.add('active');
        this.dots[this.currentSlide].classList.add('active');
    }
    
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.slides.length;
        this.goToSlide(nextIndex);
    }
    
    prevSlide() {
        const prevIndex = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        this.goToSlide(prevIndex);
    }
    
    startAutoplay() {
        this.autoplayInterval = setInterval(() => this.nextSlide(), 5000);
    }
    
    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
    }
}

// Initialize slider when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    const heroSlider = document.querySelector('.hero-slider');
    if (heroSlider) {
        new HeroSlider(heroSlider);
    }
});

// ============================================
// MODAL WINDOWS
// ============================================
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    
    modal.style.display = 'flex';
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    
    // Focus first input
    const firstInput = modal.querySelector('input, textarea, select');
    if (firstInput) {
        setTimeout(() => firstInput.focus(), 100);
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    
    modal.style.display = 'none';
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
}

// Specific modal openers
function openCallbackModal() {
    openModal('callbackModal');
}

function openAppointmentModal(specialty = '') {
    openModal('appointmentModal');
    if (specialty) {
        const doctorSelect = document.getElementById('appointment-doctor');
        if (doctorSelect) {
            doctorSelect.value = specialty;
        }
    }
}

function openQuestionModal() {
    openModal('questionModal');
}

function openHomeDoctorModal() {
    openModal('homeDoctorModal');
}

function openLoyaltyModal(program = '') {
    openModal('loyaltyModal');
    if (program) {
        const programSelect = document.getElementById('loyalty-program');
        if (programSelect) {
            programSelect.value = program;
        }
    }
}

function openReviewModal() {
    // This modal is not in HTML yet, but function is ready
    console.log('Review modal would open here');
}

function openLicenseModal(type) {
    // This would open a modal with license details
    console.log('License modal for:', type);
}

function openCalculatorModal() {
    // This would open a price calculator modal
    console.log('Calculator modal would open here');
}

function openPrivacyModal() {
    console.log('Privacy policy modal would open here');
}

function openTermsModal() {
    console.log('Terms modal would open here');
}

function downloadPriceList() {
    console.log('Downloading price list...');
    alert('Прайс-лист будет загружен в формате PDF');
}

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (modal.style.display === 'flex') {
                closeModal(modal.id);
            }
        });
    }
});

// Close modal when clicking outside
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal-overlay')) {
        const modal = e.target.closest('.modal');
        if (modal) {
            closeModal(modal.id);
        }
    }
});

// ============================================
// FORM HANDLING & VALIDATION
// ============================================

// Phone number formatting
document.addEventListener('DOMContentLoaded', function() {
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                if (value[0] === '7' || value[0] === '8') {
                    value = value.substring(1);
                }
                
                let formatted = '+7';
                if (value.length > 0) {
                    formatted += ' (' + value.substring(0, 3);
                }
                if (value.length >= 4) {
                    formatted += ') ' + value.substring(3, 6);
                }
                if (value.length >= 7) {
                    formatted += '-' + value.substring(6, 8);
                }
                if (value.length >= 9) {
                    formatted += '-' + value.substring(8, 10);
                }
                
                e.target.value = formatted;
            }
        });
    });
});

// Form submission handlers
function handleCallbackSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Basic validation
    const name = formData.get('name');
    const phone = formData.get('phone');
    
    if (!name || name.length < 2) {
        alert('Пожалуйста, введите ваше имя');
        return false;
    }
    
    if (!phone || phone.length < 10) {
        alert('Пожалуйста, введите корректный номер телефона');
        return false;
    }
    
    // Success
    console.log('Callback form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Мы перезвоним вам в течение 15 минут.');
    form.reset();
    closeModal('callbackModal');
    
    return false;
}

function handleAppointmentSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Validation
    const name = formData.get('name');
    const phone = formData.get('phone');
    const doctor = formData.get('doctor');
    const date = formData.get('date');
    const time = formData.get('time');
    
    if (!name || !phone || !doctor || !date || !time) {
        alert('Пожалуйста, заполните все обязательные поля');
        return false;
    }
    
    // Success
    console.log('Appointment form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Вы записаны на прием. Мы отправим вам подтверждение на телефон.');
    form.reset();
    closeModal('appointmentModal');
    
    return false;
}

function handleQuestionSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Validation
    const name = formData.get('name');
    const email = formData.get('email');
    const question = formData.get('question');
    
    if (!name || !email || !question) {
        alert('Пожалуйста, заполните все обязательные поля');
        return false;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Пожалуйста, введите корректный email');
        return false;
    }
    
    // Success
    console.log('Question form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Врач ответит на ваш вопрос в течение 24 часов на указанный email.');
    form.reset();
    closeModal('questionModal');
    
    return false;
}

function handleHomeDoctorSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Validation
    const name = formData.get('name');
    const phone = formData.get('phone');
    const address = formData.get('address');
    const symptoms = formData.get('symptoms');
    
    if (!name || !phone || !address || !symptoms) {
        alert('Пожалуйста, заполните все обязательные поля');
        return false;
    }
    
    // Success
    console.log('Home doctor form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Врач выедет к вам в течение 2 часов. Мы позвоним для уточнения деталей.');
    form.reset();
    closeModal('homeDoctorModal');
    
    return false;
}

function handleLoyaltySubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Validation
    const name = formData.get('name');
    const phone = formData.get('phone');
    const email = formData.get('email');
    const program = formData.get('program');
    
    if (!name || !phone || !email || !program) {
        alert('Пожалуйста, заполните все обязательные поля');
        return false;
    }
    
    // Success
    console.log('Loyalty form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Мы свяжемся с вами для оформления программы лояльности.');
    form.reset();
    closeModal('loyaltyModal');
    
    return false;
}

function handleContactSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    // Validation
    const name = formData.get('name');
    const phone = formData.get('phone');
    const message = formData.get('message');
    
    if (!name || !phone || !message) {
        alert('Пожалуйста, заполните все обязательные поля');
        return false;
    }
    
    // Success
    console.log('Contact form submitted:', Object.fromEntries(formData));
    alert('Спасибо! Мы получили ваше сообщение и свяжемся с вами в ближайшее время.');
    form.reset();
    
    return false;
}

// ============================================
// PRICING TABS
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const pricingTabs = document.querySelectorAll('.pricing-tab');
    const pricingContents = document.querySelectorAll('.pricing-content');
    
    pricingTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Remove active class from all tabs
            pricingTabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all content
            pricingContents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Show selected content
            const selectedContent = document.querySelector(`.pricing-content[data-category="${category}"]`);
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
        });
    });
});

// ============================================
// SMOOTH SCROLL
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if href is just "#"
            if (href === '#') {
                e.preventDefault();
                return;
            }
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// ============================================
// HEADER SCROLL EFFECT
// ============================================
let lastScroll = 0;

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (!header) return;
    
    const currentScroll = window.pageYOffset;
    
    // Add shadow on scroll
    if (currentScroll > 50) {
        header.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
    }
    
    lastScroll = currentScroll;
});

// ============================================
// LAZY LOADING IMAGES
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.src; // Trigger load
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }
});

// ============================================
// SCROLL TO TOP BUTTON
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Create scroll to top button
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '↑';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.setAttribute('aria-label', 'Прокрутить наверх');
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary-color, #FFD700);
        color: var(--text-dark, #2C3E50);
        border: none;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    `;
    
    document.body.appendChild(scrollBtn);
    
    // Show/hide button on scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.visibility = 'visible';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.visibility = 'hidden';
        }
    });
    
    // Scroll to top on click
    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// ============================================
// DATE INPUT MIN DATE (Today)
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const dateInputs = document.querySelectorAll('input[type="date"]');
    const today = new Date().toISOString().split('T')[0];
    
    dateInputs.forEach(input => {
        input.setAttribute('min', today);
    });
});

// ============================================
// CONSOLE INFO
// ============================================
console.log('%c🐝 Клиника Пчёлка - Premium Version', 'font-size: 20px; font-weight: bold; color: #FFD700;');
console.log('%cWebsite developed with modern web standards', 'font-size: 12px; color: #6C757D;');
console.log('%cAccessibility: WCAG 2.1 AA compliant', 'font-size: 12px; color: #6C757D;');

// ============================================
// EQUIPMENT MODAL
// ============================================
const equipmentData = {
    equipment1: {
        title: 'УЗИ аппарат экспертного класса',
        manufacturer: 'Производитель: GE Healthcare',
        description: 'Высокоточная диагностика с 4D визуализацией. Позволяет выявлять патологии на ранних стадиях.',
        features: ['Разрешение до 0.1 мм', 'Допплерография', 'Эластография'],
        image: 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800'
    },
    equipment2: {
        title: 'Электрокардиограф 12-канальный',
        manufacturer: 'Производитель: Philips',
        description: 'Цифровой ЭКГ с автоматической интерпретацией результатов и выявлением аритмий.',
        features: ['12 отведений', 'Автоматический анализ', 'Архив результатов'],
        image: 'https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=800'
    },
    equipment3: {
        title: 'Автоматический анализатор крови',
        manufacturer: 'Производитель: Sysmex',
        description: 'Полный анализ крови за 60 секунд с точностью 99.9%. Результаты в день обращения.',
        features: ['30+ параметров', 'Результат за 1 минуту', 'Высокая точность'],
        image: 'https://images.unsplash.com/photo-1582719471137-c3967ffb1c42?w=800'
    },
    equipment4: {
        title: 'Цифровой рентген-аппарат',
        manufacturer: 'Производитель: Siemens',
        description: 'Минимальная лучевая нагрузка, мгновенные результаты в цифровом формате.',
        features: ['Низкая доза облучения', 'Цифровая обработка', 'Высокое разрешение'],
        image: 'https://images.unsplash.com/photo-1583324113626-70df0f4deaab?w=800'
    },
    equipment5: {
        title: 'Видеоэндоскопическая система',
        manufacturer: 'Производитель: Olympus',
        description: 'HD-визуализация для точной диагностики заболеваний ЖКТ.',
        features: ['Full HD качество', 'Узкоспектральная визуализация', 'Биопсия под контролем'],
        image: 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=800'
    },
    equipment6: {
        title: 'Стерилизационное оборудование',
        manufacturer: 'Производитель: Melag',
        description: 'Автоклавы класса B для полной стерилизации инструментов.',
        features: ['Класс B (высший)', 'Автоматический цикл', 'Контроль качества'],
        image: 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=800'
    }
};

function openEquipmentModal(equipmentId) {
    const modal = document.getElementById('equipmentModal');
    const data = equipmentData[equipmentId];
    
    if (!data) return;
    
    document.getElementById('modalImage').src = data.image;
    document.getElementById('modalImage').alt = data.title;
    document.getElementById('modalTitle').textContent = data.title;
    document.getElementById('modalManufacturer').textContent = data.manufacturer;
    document.getElementById('modalDescription').textContent = data.description;
    
    const featuresList = document.getElementById('modalFeatures');
    featuresList.innerHTML = '';
    data.features.forEach(feature => {
        const li = document.createElement('li');
        li.textContent = feature;
        featuresList.appendChild(li);
    });
    
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeEquipmentModal() {
    const modal = document.getElementById('equipmentModal');
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

// Close modal on outside click
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('equipmentModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeEquipmentModal();
            }
        });
    }
});

// Close modal on ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeEquipmentModal();
    }
});

// END OF SCRIPT
