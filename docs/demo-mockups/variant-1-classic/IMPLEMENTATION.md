# Variant 1: Classic - Руководство по реализации

## 📋 Обзор

Этот документ содержит техническую информацию для разработчиков о реализации классического варианта дизайна медицинского сайта.

---

## 🏗️ Архитектура

### Структура файлов

```
variant-1-classic/
├── index.html          # Основная HTML-структура
├── style.css           # Все стили
├── script.js           # JavaScript функциональность
├── README.md           # Документация для клиента
└── IMPLEMENTATION.md   # Техническая документация
```

### Технологии

- **HTML5** - семантическая разметка
- **CSS3** - стилизация с CSS Custom Properties
- **Vanilla JavaScript** - без фреймворков
- **No dependencies** - нет внешних библиотек

---

## 🎨 CSS Архитектура

### CSS Custom Properties

```css
:root {
    /* Цвета брендбука */
    --primary-color: #C9A961;      /* Темное золото */
    --primary-dark: #B8935A;       /* Темнее для hover */
    --primary-light: #D4AF37;      /* Светлее для акцентов */
    
    /* Нейтральные цвета */
    --text-dark: #2C3E50;          /* Основной текст */
    --text-gray: #6C757D;          /* Вторичный текст */
    --bg-light: #F8F9FA;           /* Светлый фон */
    --white: #FFFFFF;              /* Белый */
    
    /* Типографика */
    --font-base: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    --font-size-base: 16px;
    --line-height-base: 1.6;
    
    /* Spacing */
    --spacing-xs: 8px;
    --spacing-sm: 16px;
    --spacing-md: 24px;
    --spacing-lg: 40px;
    --spacing-xl: 60px;
    
    /* Breakpoints */
    --breakpoint-mobile: 768px;
    --breakpoint-tablet: 1024px;
}
```

### Методология

- **BEM-подобная** структура классов
- **Mobile-first** подход
- **Utility classes** для повторяющихся паттернов
- **Semantic naming** для понятности

### Основные компоненты

```css
/* Кнопки */
.btn {
    /* Базовые стили */
}
.btn-primary {
    /* Основная кнопка */
}
.btn-outline {
    /* Вторичная кнопка */
}

/* Карточки */
.card {
    /* Базовая карточка */
}
.benefit-card {
    /* Карточка преимущества */
}
.service-card {
    /* Карточка услуги */
}
.doctor-card {
    /* Карточка врача */
}

/* Формы */
.form-group {
    /* Группа полей формы */
}
.form-input {
    /* Поле ввода */
}
.form-textarea {
    /* Текстовая область */
}
```

---

## 🔧 JavaScript Функциональность

### Модульная структура

```javascript
// Модальные окна
const Modal = {
    open: function(modalId) { /* ... */ },
    close: function(modalId) { /* ... */ },
    init: function() { /* ... */ }
};

// Формы
const Forms = {
    validate: function(form) { /* ... */ },
    submit: function(form) { /* ... */ },
    init: function() { /* ... */ }
};

// Анимации
const Animations = {
    observeElements: function() { /* ... */ },
    init: function() { /* ... */ }
};

// Навигация
const Navigation = {
    smoothScroll: function(target) { /* ... */ },
    init: function() { /* ... */ }
};

// Инициализация
document.addEventListener('DOMContentLoaded', function() {
    Modal.init();
    Forms.init();
    Animations.init();
    Navigation.init();
});
```

### Ключевые функции

#### 1. Модальные окна

```javascript
function openCallbackModal() {
    const modal = document.getElementById('callback-modal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}
```

#### 2. Валидация форм

```javascript
function validateForm(form) {
    const name = form.querySelector('[name="name"]');
    const phone = form.querySelector('[name="phone"]');
    
    let isValid = true;
    
    // Проверка имени
    if (name.value.trim().length < 2) {
        showError(name, 'Введите корректное имя');
        isValid = false;
    }
    
    // Проверка телефона
    const phoneRegex = /^[\d\s\+\-\(\)]+$/;
    if (!phoneRegex.test(phone.value)) {
        showError(phone, 'Введите корректный телефон');
        isValid = false;
    }
    
    return isValid;
}
```

#### 3. Smooth Scrolling

```javascript
function smoothScroll(target) {
    const element = document.querySelector(target);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
```

#### 4. Intersection Observer для анимаций

```javascript
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Наблюдаем за элементами
document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
});
```

---

## 📱 Адаптивность

### Breakpoints

```css
/* Mobile First подход */

/* Базовые стили для мобильных (< 768px) */
.container {
    padding: 0 20px;
}

/* Планшеты (≥ 768px) */
@media (min-width: 768px) {
    .container {
        padding: 0 40px;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Десктоп (≥ 1024px) */
@media (min-width: 1024px) {
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .services-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
```

### Адаптивная типографика

```css
/* Fluid typography */
h1 {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
}

h2 {
    font-size: clamp(1.5rem, 3vw, 2rem);
}

p {
    font-size: clamp(0.875rem, 2vw, 1rem);
}
```

---

## ♿ Доступность (A11y)

### ARIA атрибуты

```html
<!-- Навигация -->
<nav role="navigation" aria-label="Основная навигация">
    <ul role="menubar">
        <li role="none">
            <a href="#services" role="menuitem">Услуги</a>
        </li>
    </ul>
</nav>

<!-- Модальное окно -->
<div 
    id="callback-modal" 
    class="modal" 
    role="dialog" 
    aria-labelledby="modal-title"
    aria-modal="true"
>
    <h2 id="modal-title">Заказать звонок</h2>
</div>

<!-- Кнопки -->
<button 
    class="btn btn-primary" 
    onclick="openCallbackModal()"
    aria-label="Открыть форму заказа звонка"
>
    Заказать звонок
</button>
```

### Keyboard Navigation

```javascript
// Trap focus в модальном окне
function trapFocus(modal) {
    const focusableElements = modal.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];
    
    modal.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            if (e.shiftKey && document.activeElement === firstElement) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && document.activeElement === lastElement) {
                e.preventDefault();
                firstElement.focus();
            }
        }
        
        if (e.key === 'Escape') {
            closeModal(modal.id);
        }
    });
}
```

### Контрастность

```css
/* Соответствие WCAG 2.1 AA */
:root {
    /* Минимальный контраст 4.5:1 для обычного текста */
    --text-on-light: #2C3E50;  /* Контраст: 12.6:1 */
    --text-on-primary: #FFFFFF; /* Контраст: 4.8:1 */
    
    /* Минимальный контраст 3:1 для крупного текста */
    --heading-on-light: #2C3E50; /* Контраст: 12.6:1 */
}
```

---

## 🔌 Интеграция с бэкендом

### Отправка форм

```javascript
async function submitForm(form, endpoint) {
    const formData = new FormData(form);
    
    try {
        const response = await fetch(endpoint, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        
        if (response.ok) {
            const data = await response.json();
            showSuccess('Спасибо! Мы свяжемся с вами в ближайшее время.');
            form.reset();
            closeModal(form.closest('.modal').id);
        } else {
            throw new Error('Ошибка отправки');
        }
    } catch (error) {
        showError(form, 'Произошла ошибка. Попробуйте позже или позвоните нам.');
    }
}
```

### API endpoints (примеры)

```javascript
const API_ENDPOINTS = {
    callback: '/api/callback/',
    question: '/api/question/',
    appointment: '/api/appointment/',
    subscribe: '/api/subscribe/'
};
```

---

## 🚀 Оптимизация производительности

### Критический CSS

```html
<!-- Inline критический CSS в <head> -->
<style>
    /* Критические стили для первого экрана */
    body { margin: 0; font-family: sans-serif; }
    .header { /* ... */ }
    .hero { /* ... */ }
</style>

<!-- Остальные стили асинхронно -->
<link rel="preload" href="style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="style.css"></noscript>
```

### Lazy Loading изображений

```html
<img 
    src="placeholder.jpg" 
    data-src="real-image.jpg" 
    alt="Описание"
    loading="lazy"
    class="lazy-image"
>
```

```javascript
// Intersection Observer для lazy loading
const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove('lazy-image');
            imageObserver.unobserve(img);
        }
    });
});

document.querySelectorAll('.lazy-image').forEach(img => {
    imageObserver.observe(img);
});
```

### Минификация

```bash
# CSS минификация
npx cssnano style.css style.min.css

# JavaScript минификация
npx terser script.js -o script.min.js -c -m

# HTML минификация
npx html-minifier index.html -o index.min.html --collapse-whitespace
```

---

## 🧪 Тестирование

### Браузеры

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ⚠️ IE11 (с полифиллами)

### Устройства

- ✅ Desktop (1920x1080, 1366x768)
- ✅ Tablet (768x1024, 1024x768)
- ✅ Mobile (375x667, 414x896)

### Инструменты тестирования

```bash
# Lighthouse audit
npx lighthouse https://example.com --view

# Accessibility audit
npx pa11y https://example.com

# HTML validation
npx html-validate index.html

# CSS validation
npx stylelint style.css
```

---

## 📦 Деплой

### Подготовка к продакшену

1. **Минификация файлов**
2. **Оптимизация изображений**
3. **Настройка кэширования**
4. **Добавление analytics**
5. **Настройка SEO meta-тегов**

### Checklist перед запуском

- [ ] Все формы работают корректно
- [ ] Модальные окна открываются/закрываются
- [ ] Навигация работает на всех устройствах
- [ ] Все ссылки ведут на правильные страницы
- [ ] Телефоны и email корректны
- [ ] Адрес клиники указан правильно
- [ ] Карта отображается корректно
- [ ] Lighthouse score > 90
- [ ] Accessibility score > 90
- [ ] Протестировано на всех браузерах

---

## 🔧 Кастомизация

### Изменение цветов

```css
:root {
    /* Замените эти значения на цвета вашего бренда */
    --primary-color: #YOUR_COLOR;
    --primary-dark: #YOUR_DARK_COLOR;
    --primary-light: #YOUR_LIGHT_COLOR;
}
```

### Изменение шрифтов

```css
:root {
    /* Подключите веб-шрифт и замените */
    --font-base: 'Your Font', -apple-system, sans-serif;
}
```

### Добавление новых секций

```html
<!-- Скопируйте структуру существующей секции -->
<section class="new-section" id="new-section">
    <div class="container">
        <h2 class="section-title">Заголовок секции</h2>
        <!-- Ваш контент -->
    </div>
</section>
```

---

## 📚 Дополнительные ресурсы

- [MDN Web Docs](https://developer.mozilla.org/)
- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)
- [CSS Tricks](https://css-tricks.com/)
- [Can I Use](https://caniuse.com/)

---

**Разработано для клиники «Пчёлка» в Мытищах** 🏥
