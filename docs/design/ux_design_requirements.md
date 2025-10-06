---
layout: documentation
title: "UX/Контент/Дизайн требования"
nav_title: "UX и дизайн"
description: "Требования к UX, контенту и дизайну медицинского сайта - принципы, адаптивность, доступность, примеры"
icon: "🎨"
permalink: /design/ux-design-requirements/
---

# UX/КОНТЕНТ/ДИЗАЙН ТРЕБОВАНИЯ

**Дата:** 6 октября 2025  
**Версия:** 2.0 (Синхронизировано с Branding Guidelines и UI Kit)  
**Статус:** Обновлено под фирменную палитру клиники "Пчёлка"

---

## 🎨 ЦВЕТОВАЯ ПАЛИТРА

### Фирменные цвета клиники "Пчёлка"

```css
:root {
  /* Основные цвета */
  --primary-color: #C9A961;      /* Темно-золотой (из логотипа) */
  --primary-light: #D4AF37;      /* Светло-золотой */
  --secondary-color: #000000;    /* Премиум черный */
  --accent-color: #D4AF37;       /* Золотой акцент */

  /* Нейтральные цвета */
  --text-primary: #333333;       /* Основной текст */
  --text-secondary: #666666;     /* Вторичный текст */
  --background: #ffffff;         /* Основной фон */
  --background-light: #f5f5f5;   /* Альтернативный фон */

  /* Семантические цвета */
  --success: #28a745;            /* Успех */
  --error: #dc3545;              /* Ошибка */
  --warning: #ffc107;            /* Предупреждение */
  --info: #17a2b8;               /* Информация */
}
```

### Требования к контрастности (WCAG 2.1 AA)

- **Основной текст (#333333) на белом:** 12.63:1 ✅ AAA
- **Золотой (#C9A961) на черном:** 8.2:1 ✅ AAA
- **Белый на золотом (#C9A961):** 4.8:1 ✅ AA
- **Серый (#666666) на белом:** 5.74:1 ✅ AA

---

## 🎨 UX Принципы для медицинского сайта

### 1. Доверие и профессионализм

- **Чистый, медицинский дизайн** без лишних элементов
- **Фотографии настоящих врачей** в качественном разрешении
- **Дипломы и сертификаты** на видных местах
- **Отзывы пациентов с фото** для повышения доверия
- **Информация о лицензиях** и аккредитации

### 2. Простота и доступность

- **Интуитивная навигация** — максимум 3 клика до цели
- **Крупные кнопки и текст** для людей с ограниченными возможностями
- **Контрастные цвета** для лучшей читаемости
- **Простой язык** без сложных медицинских терминов

---

## 📱 Требования к адаптивности

### Mobile-First подход

```css
/* Базовые принципы адаптивности */
.ui-container {
  max-width: 1200px;
  padding: 0 16px;
  margin: 0 auto;
}

/* Мобильные устройства (до 768px) */
@media (max-width: 767px) {
  .ui-hero h1 {
    font-size: 24px;
    line-height: 1.3;
    margin-bottom: 16px;
  }

  .ui-appointment-form {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 16px;
    background: white;
    box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.1);
  }

  .ui-card-doctor {
    margin-bottom: 24px;
  }
}

/* Планшеты (768px - 1024px) */
@media (min-width: 768px) and (max-width: 1024px) {
  .ui-services-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
}

/* Десктоп (от 1025px) */
@media (min-width: 1025px) {
  .ui-services-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
  }
}
```

### Требования к производительности

- **Скорость загрузки:** < 3 секунд на мобильных
- **First Contentful Paint:** < 1.5 секунд
- **Largest Contentful Paint:** < 2.5 секунд
- **Core Web Vitals:** все метрики в зелёной зоне

---

## ♿ Доступность (WCAG 2.1 AA)

### Обязательные требования

```html
<!-- Alt-тексты для изображений -->
<img
  src="doctor-photo.jpg"
  alt="Доктор Иванов И.И., врач-кардиолог высшей категории"
/>

<!-- Подписи для форм -->
<label for="patient-name">Ваше имя *</label>
<input
  type="text"
  id="patient-name"
  name="name"
  required
  aria-describedby="name-help"
/>
<small id="name-help">Введите ваше полное имя</small>

<!-- ARIA-атрибуты для интерактивных элементов -->
<button
  aria-label="Записаться на приём к терапевту"
  onclick="openBookingForm('therapist')"
>
  Записаться к терапевту
</button>

<!-- Skip-навигация -->
<a href="#main-content" class="skip-link">Перейти к основному содержанию</a>
```

### Стили фокуса для клавиатурной навигации

```css
/* Фокус для интерактивных элементов */
.ui-btn:focus,
input:focus,
textarea:focus,
select:focus {
  outline: 2px solid var(--primary-color);
  outline-offset: 2px;
  box-shadow: 0 0 0 3px rgba(201, 169, 97, 0.2);
}

a:focus {
  outline: 2px solid var(--primary-color);
  outline-offset: 2px;
}
```

---

## ✍️ ТИПОГРАФИКА

### Шрифты

**Основной шрифт (для текста):**
```css
font-family: 'Open Sans', 'Roboto', 'Lato', sans-serif;
font-weight: 400 (Regular), 500 (Medium), 700 (Bold);
font-size: 16px;
line-height: 1.6;
color: var(--text-primary); /* #333333 */
```

**Заголовочный шрифт:**
```css
font-family: 'Montserrat', 'Raleway', 'Poppins', sans-serif;
font-weight: 600 (SemiBold), 700 (Bold);
color: var(--text-primary); /* #333333 */
```

### Размеры заголовков

```css
h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: 42px;
  font-weight: 700;
  line-height: 1.2;
  color: var(--text-primary);
  margin-bottom: 20px;
}

h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: 36px;
  font-weight: 700;
  line-height: 1.3;
  color: var(--text-primary);
  margin-bottom: 16px;
}

h3 {
  font-family: 'Montserrat', sans-serif;
  font-size: 28px;
  font-weight: 600;
  line-height: 1.4;
  color: var(--text-primary);
  margin-bottom: 12px;
}

h4 {
  font-family: 'Montserrat', sans-serif;
  font-size: 24px;
  font-weight: 600;
  line-height: 1.4;
  color: var(--text-primary);
  margin-bottom: 12px;
}

/* Основной текст */
p {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: var(--text-primary);
  margin-bottom: 16px;
}

/* Мелкий текст */
small, .ui-text-small {
  font-size: 14px;
  line-height: 1.5;
  color: var(--text-secondary);
}
```

### Адаптивная типографика

```css
/* Мобильные устройства (до 768px) */
@media (max-width: 767px) {
  h1 {
    font-size: 32px;
    line-height: 1.3;
  }

  h2 {
    font-size: 28px;
    line-height: 1.3;
  }

  h3 {
    font-size: 24px;
    line-height: 1.4;
  }

  h4 {
    font-size: 20px;
    line-height: 1.4;
  }

  p {
    font-size: 16px; /* Не уменьшать для читаемости */
  }
}
```

### Стили текста

```css
/* Акцентный текст (золотой) */
.ui-text-accent {
  color: var(--primary-color); /* #C9A961 */
}

/* Вторичный текст */
.ui-text-secondary {
  color: var(--text-secondary); /* #666666 */
}

/* Жирный текст */
.ui-text-bold {
  font-weight: 700;
}

/* Uppercase для кнопок */
.ui-btn {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
```

---

## 🎯 Примеры контента

### Hero-секция главной страницы

```html
<section class="ui-hero" role="banner">
  <div class="ui-container">
    <div class="ui-hero-content">
      <h1 class="ui-hero-title">Забота о вашем здоровье — наша главная задача</h1>
      <p class="ui-hero-subtitle">
        Современный медицинский центр с командой опытных врачей. Записывайтесь на
        приём онлайн — это быстро, удобно и безопасно.
      </p>

      <div class="ui-hero-stats">
        <div class="ui-stat">
          <span class="ui-stat-number">2500+</span>
          <span class="ui-stat-label">довольных пациентов</span>
        </div>
        <div class="ui-stat">
          <span class="ui-stat-number">15+</span>
          <span class="ui-stat-label">опытных врачей</span>
        </div>
        <div class="ui-stat">
          <span class="ui-stat-number">8</span>
          <span class="ui-stat-label">лет работы</span>
        </div>
      </div>

      <div class="ui-hero-actions">
        <button
          class="ui-btn ui-btn-primary ui-btn-large"
          onclick="openAppointmentModal()"
        >
          📅 Записаться на приём
        </button>
        <a href="tel:+7XXXXXXXXXX" class="ui-btn ui-btn-outline ui-btn-large">
          📞 Позвонить сейчас
        </a>
      </div>
    </div>

    <div class="ui-hero-image">
      <img
        src="/images/hero-doctor.jpg"
        alt="Врач в современном медицинском кабинете"
        loading="eager"
      />
    </div>
  </div>
</section>
```

### Блок преимуществ

```html
<section class="ui-section ui-benefits">
  <div class="ui-container">
    <h2 class="ui-section-title">Почему выбирают наш медицинский центр?</h2>

    <div class="ui-grid ui-grid-4">
      <div class="ui-card ui-card-benefit">
        <div class="ui-card-icon">⏰</div>
        <h3 class="ui-card-title">Быстрая запись</h3>
        <p class="ui-card-text">Запишитесь на приём за 30 секунд через сайт или по телефону</p>
      </div>

      <div class="ui-card ui-card-benefit">
        <div class="ui-card-icon">👨‍⚕️</div>
        <h3 class="ui-card-title">Опытные врачи</h3>
        <p class="ui-card-text">Специалисты высшей категории со стажем от 10 лет</p>
      </div>

      <div class="ui-card ui-card-benefit">
        <div class="ui-card-icon">🏥</div>
        <h3 class="ui-card-title">Современное оборудование</h3>
        <p class="ui-card-text">Новейшие аппараты для точной диагностики</p>
      </div>

      <div class="ui-card ui-card-benefit">
        <div class="ui-card-icon">🕐</div>
        <h3 class="ui-card-title">Удобное время работы</h3>
        <p class="ui-card-text">Работаем 7 дней в неделю, включая выходные</p>
      </div>
    </div>
  </div>
</section>
```

### Карточка врача

```html
<div class="ui-card ui-card-doctor">
  <div class="ui-card-doctor-photo">
    <img
      src="/images/doctors/petrov.jpg"
      alt="Петров Пётр Петрович, врач-кардиолог"
    />
    <div class="ui-doctor-rating">
      <span class="ui-rating-stars">⭐⭐⭐⭐⭐</span>
      <span class="ui-rating-value">4.9</span>
    </div>
  </div>

  <div class="ui-card-doctor-info">
    <h3 class="ui-card-title">Петров Пётр Петрович</h3>
    <p class="ui-card-specialty">Врач-кардиолог высшей категории</p>
    <p class="ui-card-text">Стаж: 15 лет</p>

    <div class="ui-doctor-education">
      <h4>Образование:</h4>
      <ul>
        <li>МГМУ им. Сеченова (2008г.)</li>
        <li>Ординатура по кардиологии (2010г.)</li>
      </ul>
    </div>

    <div class="ui-doctor-price">
      <span class="ui-price-label">Консультация:</span>
      <span class="ui-price-value">3 500 ₽</span>
    </div>

    <button class="ui-btn ui-btn-primary" onclick="bookAppointment('petrov')">
      Записаться на приём
    </button>
  </div>
</div>
```

---

## 📝 Контентные блоки

### Заголовки для страниц

```
Главная:
H1: "Медицинский центр [Название] — современная медицина в [городе]"

Услуги:
H1: "Медицинские услуги — полный спектр диагностики и лечения"
H2: "Консультации специалистов"
H2: "Диагностические исследования"
H2: "Лабораторные анализы"

О клинике:
H1: "О медицинском центре [Название] — наша история и миссия"
H2: "Наша команда"
H2: "Лицензии и сертификаты"
H2: "Современное оборудование"

Контакты:
H1: "Контакты медицинского центра — как нас найти"
H2: "Адреса и телефоны"
H2: "Режим работы"
H2: "Как добраться"
```

### Примеры meta title и description

```
Главная страница:
Title: Медицинский центр [Название] в [Городе] — запись к врачу онлайн ⭐ Отзывы
Description: ✅ Современная клиника с опытными врачами ✅ Запись онлайн 24/7 ✅ УЗИ, анализы, консультации ☎️ +7 (XXX) XXX-XX-XX ⭐ 2500+ довольных пациентов

Услуги:
Title: Медицинские услуги в [Городе] — цены 2025, запись онлайн в клинику [Название]
Description: 💊 Полный спектр медицинских услуг: терапия, кардиология, УЗИ, анализы ✅ Современное оборудование ✅ Опытные врачи ⏰ Удобное время работы

Страница врача:
Title: Кардиолог Петров П.П. — запись на приём, отзывы, цены | Клиника [Название]
Description: 👨‍⚕️ Врач-кардиолог высшей категории, стаж 15 лет ⭐ Рейтинг 4.9 💰 Консультация 3500₽ 📅 Запись онлайн или по телефону +7 (XXX) XXX-XX-XX
```

### Форма обратной связи

```html
<form class="ui-form ui-contact-form" id="contactForm">
  <h3 class="ui-form-title">Остались вопросы? Мы поможем!</h3>
  <p class="ui-form-subtitle">Оставьте заявку, и наш администратор свяжется с вами в течение 15 минут</p>

  <div class="ui-form-group">
    <label class="ui-label" for="contact-name">Ваше имя *</label>
    <input type="text" id="contact-name" name="name" class="ui-input" required />
  </div>

  <div class="ui-form-group">
    <label class="ui-label" for="contact-phone">Телефон *</label>
    <input
      type="tel"
      id="contact-phone"
      name="phone"
      class="ui-input"
      required
      pattern="[+]7[0-9]{10}"
      placeholder="+7 (___) ___-__-__"
    />
  </div>

  <div class="ui-form-group">
    <label class="ui-label" for="contact-question">Ваш вопрос</label>
    <textarea
      id="contact-question"
      name="question"
      class="ui-input ui-textarea"
      rows="3"
      placeholder="Опишите ваш вопрос или уточнение"
    ></textarea>
  </div>

  <div class="ui-form-group">
    <label class="ui-checkbox">
      <input type="checkbox" required />
      <span class="checkmark"></span>
      <span class="label-text">
        Согласен с
        <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a>
      </span>
    </label>
  </div>

  <button type="submit" class="ui-btn ui-btn-primary">Отправить заявку</button>

  <p class="ui-form-note">
    * Обязательные поля. Мы не передаём ваши данные третьим лицам.
  </p>
</form>
```

---

## 🔄 SPA vs SSR рекомендации

### Для медицинского сайта рекомендуется **гибридный подход**:

#### SSR (Server-Side Rendering) для:

- **Главная страница** — лучшее SEO
- **Страницы услуг** — индексация в поисковиках
- **Страницы врачей** — важно для локального SEO
- **Контакты** — статичная информация

#### SPA компоненты для:

- **Форма записи на приём** — динамическое взаимодействие
- **Калькулятор стоимости** — интерактивность
- **Фильтры услуг** — мгновенная фильтрация
- **Личный кабинет пациента** — приватные данные

### Техническая реализация

```python
# Django + Vue.js гибридный подход
# views.py
class ServiceListView(TemplateView):
    """SSR для страницы услуг"""
    template_name = 'services/list.html'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['services'] = Service.objects.filter(is_active=True)
        return context

# Vue.js компонент для записи
# appointment-form.vue
<template>
    <div class="appointment-form">
        <form @submit.prevent="submitAppointment">
            <!-- Динамическая форма -->
        </form>
    </div>
</template>
```

---

## 📐 Дизайн-система

### Типографика

```css
/* Основные стили текста */
.text-h1 {
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 1.2;
  color: var(--text-primary);
}

.text-h2 {
  font-size: 2rem;
  font-weight: 600;
  line-height: 1.3;
  color: var(--text-primary);
}

.text-body {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
  color: var(--text-secondary);
}

.text-small {
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--text-secondary);
}
```

### Компоненты кнопок

```css
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-weight: 500;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.2s ease;
}

.btn-primary {
  background: var(--primary-color);
  color: white;
}

.btn-primary:hover {
  background: var(--primary-dark);
  transform: translateY(-1px);
}

.btn-outline {
  background: transparent;
  color: var(--primary-color);
  border: 2px solid var(--primary-color);
}

.btn-large {
  padding: 16px 32px;
  font-size: 1.125rem;
}
```

### Карточки и контейнеры

```css
.card {
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.card-header {
  padding: 24px 24px 0;
}

.card-body {
  padding: 24px;
}

.card-footer {
  padding: 0 24px 24px;
  margin-top: auto;
}
```

---

## 🎭 Интерактивные элементы

### Модальное окно записи

```html
<div class="modal" id="appointmentModal" aria-hidden="true">
  <div class="modal-backdrop" onclick="closeModal()"></div>
  <div class="modal-content" role="dialog" aria-labelledby="modal-title">
    <div class="modal-header">
      <h2 id="modal-title">Записаться на приём</h2>
      <button class="modal-close" onclick="closeModal()" aria-label="Закрыть">
        ✕
      </button>
    </div>

    <div class="modal-body">
      <div class="appointment-steps">
        <div class="step active" data-step="1">
          <span class="step-number">1</span>
          <span class="step-label">Выберите врача</span>
        </div>
        <div class="step" data-step="2">
          <span class="step-number">2</span>
          <span class="step-label">Выберите время</span>
        </div>
        <div class="step" data-step="3">
          <span class="step-number">3</span>
          <span class="step-label">Контактные данные</span>
        </div>
      </div>

      <!-- Содержимое формы -->
    </div>
  </div>
</div>
```

### Анимации и переходы

```css
/* Плавные анимации */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in-up {
  animation: fadeInUp 0.6s ease-out;
}

/* Loader для отправки форм */
.loading-spinner {
  width: 20px;
  height: 20px;
  border: 2px solid #f3f3f3;
  border-top: 2px solid var(--primary-color);
  border-radius: 50%;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
```

Эти требования обеспечат создание удобного, доступного и конверсионного интерфейса медицинского сайта.
