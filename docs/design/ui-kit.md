---
layout: documentation
title: "UI Kit - Библиотека компонентов"
nav_title: "UI Kit"
description: "Готовые UI компоненты для клиники Пчёлка в геометрическом стиле"
icon: "🧩"
permalink: /design/ui-kit/
---

# UI KIT - БИБЛИОТЕКА КОМПОНЕНТОВ

**Дата:** 6 октября 2025  
**Версия:** 1.0  
**Основа:** Геометрический стиль логотипа + Mood Board

---

## 📋 СОДЕРЖАНИЕ

1. [Buttons (Кнопки)](#buttons)
2. [Forms (Формы)](#forms)
3. [Cards (Карточки)](#cards)
4. [Navigation (Навигация)](#navigation)
5. [Layout (Макет)](#layout)
6. [Modals & Alerts (Модальные окна и уведомления)](#modals)
7. [Badges & Tags (Бейджи и теги)](#badges)
8. [Lists (Списки)](#lists)

---

## 🔘 BUTTONS {#buttons}

### Типы кнопок

<div class="component-section">
  <h4>Интерактивные примеры</h4>
  
  <div class="button-showcase">
    <div class="button-example">
      <button class="ui-btn ui-btn-primary">Записаться на прием</button>
      <p class="component-label">Primary Button</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-secondary">Узнать подробнее</button>
      <p class="component-label">Secondary Button</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-dark">Премиум услуга</button>
      <p class="component-label">Dark Button</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-outline">Отменить</button>
      <p class="component-label">Outline Button</p>
    </div>
  </div>

  <h4>Размеры кнопок</h4>
  <div class="button-showcase">
    <div class="button-example">
      <button class="ui-btn ui-btn-primary ui-btn-large">Большая кнопка</button>
      <p class="component-label">Large (18px)</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-primary">Обычная кнопка</button>
      <p class="component-label">Regular (16px)</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-primary ui-btn-small">Маленькая</button>
      <p class="component-label">Small (14px)</p>
    </div>
  </div>

  <h4>Кнопки с иконками</h4>
  <div class="button-showcase">
    <div class="button-example">
      <button class="ui-btn ui-btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        Позвонить
      </button>
      <p class="component-label">Icon + Text</p>
    </div>

    <div class="button-example">
      <button class="ui-btn ui-btn-icon ui-btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
      </button>
      <p class="component-label">Icon Only</p>
    </div>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Primary Button --&gt;
&lt;button class="ui-btn ui-btn-primary"&gt;Записаться на прием&lt;/button&gt;

&lt;!-- Secondary Button --&gt;
&lt;button class="ui-btn ui-btn-secondary"&gt;Узнать подробнее&lt;/button&gt;

&lt;!-- Dark Button --&gt;
&lt;button class="ui-btn ui-btn-dark"&gt;Премиум услуга&lt;/button&gt;

&lt;!-- Outline Button --&gt;
&lt;button class="ui-btn ui-btn-outline"&gt;Отменить&lt;/button&gt;

&lt;!-- Large Button --&gt;
&lt;button class="ui-btn ui-btn-primary ui-btn-large"&gt;Большая кнопка&lt;/button&gt;

&lt;!-- Small Button --&gt;
&lt;button class="ui-btn ui-btn-primary ui-btn-small"&gt;Маленькая&lt;/button&gt;

&lt;!-- Button with Icon --&gt;
&lt;button class="ui-btn ui-btn-primary"&gt;
  &lt;svg&gt;...&lt;/svg&gt;
  Позвонить
&lt;/button&gt;

&lt;!-- Icon Only Button --&gt;
&lt;button class="ui-btn ui-btn-icon ui-btn-primary"&gt;
  &lt;svg&gt;...&lt;/svg&gt;
&lt;/button&gt;</code></pre>
  </div>
</div>

---

## 📝 FORMS {#forms}

### Поля ввода

<div class="component-section">
  <h4>Текстовые поля</h4>
  
  <div class="form-showcase">
    <div class="form-example-item">
      <label class="ui-label" for="name">Имя *</label>
      <input type="text" id="name" class="ui-input" placeholder="Введите ваше имя">
    </div>

    <div class="form-example-item">
      <label class="ui-label" for="phone">Телефон *</label>
      <input type="tel" id="phone" class="ui-input" placeholder="+7 (999) 123-45-67">
    </div>

    <div class="form-example-item">
      <label class="ui-label" for="email">Email</label>
      <input type="email" id="email" class="ui-input" placeholder="example@mail.com">
    </div>
  </div>

  <h4>Textarea</h4>
  <div class="form-showcase">
    <div class="form-example-item">
      <label class="ui-label" for="message">Сообщение</label>
      <textarea id="message" class="ui-input ui-textarea" rows="4" placeholder="Опишите ваш вопрос или пожелание"></textarea>
    </div>
  </div>

  <h4>Select</h4>
  <div class="form-showcase">
    <div class="form-example-item">
      <label class="ui-label" for="service">Выберите услугу</label>
      <select id="service" class="ui-input ui-select">
        <option value="">-- Выберите услугу --</option>
        <option value="lfk">ЛФК (Лечебная физкультура)</option>
        <option value="physio">Физиотерапия</option>
        <option value="uvt">УВТ (Ударно-волновая терапия)</option>
        <option value="phlebology">Флебология</option>
        <option value="traumatology">Травматология</option>
      </select>
    </div>
  </div>

  <h4>Checkbox и Radio</h4>
  <div class="form-showcase">
    <div class="form-example-item">
      <div class="ui-checkbox-group">
        <label class="ui-checkbox">
          <input type="checkbox" checked>
          <span class="checkmark"></span>
          <span class="label-text">Согласен с обработкой персональных данных</span>
        </label>
        <label class="ui-checkbox">
          <input type="checkbox">
          <span class="checkmark"></span>
          <span class="label-text">Подписаться на новости клиники</span>
        </label>
      </div>
    </div>

    <div class="form-example-item">
      <p class="ui-label">Предпочтительное время</p>
      <div class="ui-radio-group">
        <label class="ui-radio">
          <input type="radio" name="time" value="morning" checked>
          <span class="radiomark"></span>
          <span class="label-text">Утро (8:00 - 12:00)</span>
        </label>
        <label class="ui-radio">
          <input type="radio" name="time" value="afternoon">
          <span class="radiomark"></span>
          <span class="label-text">День (12:00 - 16:00)</span>
        </label>
        <label class="ui-radio">
          <input type="radio" name="time" value="evening">
          <span class="radiomark"></span>
          <span class="label-text">Вечер (16:00 - 20:00)</span>
        </label>
      </div>
    </div>
  </div>

  <h4>Полная форма записи</h4>
  <div class="form-complete-example">
    <form class="ui-form">
      <div class="ui-form-row">
        <div class="ui-form-group">
          <label class="ui-label" for="form-name">Имя *</label>
          <input type="text" id="form-name" class="ui-input" placeholder="Иван" required>
        </div>
        <div class="ui-form-group">
          <label class="ui-label" for="form-phone">Телефон *</label>
          <input type="tel" id="form-phone" class="ui-input" placeholder="+7 (999) 123-45-67" required>
        </div>
      </div>

      <div class="ui-form-group">
        <label class="ui-label" for="form-service">Услуга *</label>
        <select id="form-service" class="ui-input ui-select" required>
          <option value="">-- Выберите услугу --</option>
          <option value="lfk">ЛФК (Лечебная физкультура)</option>
          <option value="physio">Физиотерапия</option>
          <option value="uvt">УВТ (Ударно-волновая терапия)</option>
          <option value="phlebology">Флебология</option>
          <option value="traumatology">Травматология</option>
        </select>
      </div>

      <div class="ui-form-group">
        <label class="ui-label" for="form-message">Комментарий</label>
        <textarea id="form-message" class="ui-input ui-textarea" rows="4" placeholder="Дополнительная информация"></textarea>
      </div>

      <div class="ui-form-group">
        <label class="ui-checkbox">
          <input type="checkbox" required>
          <span class="checkmark"></span>
          <span class="label-text">Согласен с <a href="#">политикой конфиденциальности</a></span>
        </label>
      </div>

      <button type="submit" class="ui-btn ui-btn-primary ui-btn-large">Записаться на прием</button>
    </form>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Text Input --&gt;
&lt;label class="ui-label" for="name"&gt;Имя *&lt;/label&gt;
&lt;input type="text" id="name" class="ui-input" placeholder="Введите ваше имя"&gt;

&lt;!-- Textarea --&gt;
&lt;label class="ui-label" for="message"&gt;Сообщение&lt;/label&gt;
&lt;textarea id="message" class="ui-input ui-textarea" rows="4"&gt;&lt;/textarea&gt;

&lt;!-- Select --&gt;
&lt;label class="ui-label" for="service"&gt;Выберите услугу&lt;/label&gt;
&lt;select id="service" class="ui-input ui-select"&gt;
  &lt;option value=""&gt;-- Выберите услугу --&lt;/option&gt;
  &lt;option value="lfk"&gt;ЛФК&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Checkbox --&gt;
&lt;label class="ui-checkbox"&gt;
  &lt;input type="checkbox"&gt;
  &lt;span class="checkmark"&gt;&lt;/span&gt;
  &lt;span class="label-text"&gt;Согласен с условиями&lt;/span&gt;
&lt;/label&gt;

&lt;!-- Radio --&gt;
&lt;label class="ui-radio"&gt;
  &lt;input type="radio" name="time" value="morning"&gt;
  &lt;span class="radiomark"&gt;&lt;/span&gt;
  &lt;span class="label-text"&gt;Утро&lt;/span&gt;
&lt;/label&gt;</code></pre>
  </div>
</div>

---

## 🃏 CARDS {#cards}

### Карточка услуги

<div class="component-section">
  <h4>Service Card</h4>
  
  <div class="cards-showcase">
    <div class="ui-card ui-card-service">
      <div class="ui-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      </div>
      <h3 class="ui-card-title">Физиотерапия</h3>
      <p class="ui-card-text">Современные методы физиотерапии для эффективного восстановления и лечения опорно-двигательного аппарата.</p>
      <button class="ui-btn ui-btn-primary ui-btn-small">Подробнее</button>
    </div>

    <div class="ui-card ui-card-service">
      <div class="ui-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>
      </div>
      <h3 class="ui-card-title">ЛФК</h3>
      <p class="ui-card-text">Лечебная физкультура с индивидуальным подходом для восстановления функций организма.</p>
      <button class="ui-btn ui-btn-primary ui-btn-small">Подробнее</button>
    </div>

    <div class="ui-card ui-card-service">
      <div class="ui-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>
      </div>
      <h3 class="ui-card-title">Флебология</h3>
      <p class="ui-card-text">Диагностика и лечение заболеваний вен. Современное оборудование и опытные специалисты.</p>
      <button class="ui-btn ui-btn-primary ui-btn-small">Подробнее</button>
    </div>
  </div>

  <h4>Doctor Card</h4>
  
  <div class="cards-showcase">
    <div class="ui-card ui-card-doctor">
      <div class="ui-card-doctor-photo">
        <img src="../../assets/client/logo-bee-large.svg" alt="Врач" width="120" height="120">
      </div>
      <h3 class="ui-card-title">Иванов Иван Иванович</h3>
      <p class="ui-card-specialty">Врач-физиотерапевт</p>
      <p class="ui-card-text">Стаж работы: 15 лет<br>Высшая категория</p>
      <button class="ui-btn ui-btn-secondary ui-btn-small">Записаться</button>
    </div>

    <div class="ui-card ui-card-doctor">
      <div class="ui-card-doctor-photo">
        <img src="../../assets/client/logo-bee-large.svg" alt="Врач" width="120" height="120">
      </div>
      <h3 class="ui-card-title">Петрова Анна Сергеевна</h3>
      <p class="ui-card-specialty">Врач-флеболог</p>
      <p class="ui-card-text">Стаж работы: 12 лет<br>Кандидат медицинских наук</p>
      <button class="ui-btn ui-btn-secondary ui-btn-small">Записаться</button>
    </div>
  </div>

  <h4>Info Card</h4>
  
  <div class="cards-showcase">
    <div class="ui-card ui-card-info">
      <div class="ui-card-info-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
      </div>
      <h4 class="ui-card-info-title">Телефон</h4>
      <p class="ui-card-info-text">+7 (999) 123-45-67</p>
    </div>

    <div class="ui-card ui-card-info">
      <div class="ui-card-info-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
      <h4 class="ui-card-info-title">Адрес</h4>
      <p class="ui-card-info-text">г. Мытищи, ул. Примерная, 1</p>
    </div>

    <div class="ui-card ui-card-info">
      <div class="ui-card-info-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <h4 class="ui-card-info-title">Время работы</h4>
      <p class="ui-card-info-text">Пн-Пт: 8:00-20:00<br>Сб-Вс: 9:00-18:00</p>
    </div>
  </div>

  <h4>Pricing Card</h4>
  
  <div class="cards-showcase">
    <div class="ui-card ui-card-pricing">
      <div class="ui-card-pricing-header">
        <h3 class="ui-card-pricing-title">Базовый</h3>
        <div class="ui-card-pricing-price">
          <span class="price-amount">2 500</span>
          <span class="price-currency">₽</span>
        </div>
      </div>
      <ul class="ui-card-pricing-features">
        <li>Консультация врача</li>
        <li>Диагностика</li>
        <li>Рекомендации</li>
      </ul>
      <button class="ui-btn ui-btn-outline">Выбрать</button>
    </div>

    <div class="ui-card ui-card-pricing ui-card-pricing-featured">
      <div class="ui-card-pricing-badge">Популярный</div>
      <div class="ui-card-pricing-header">
        <h3 class="ui-card-pricing-title">Стандарт</h3>
        <div class="ui-card-pricing-price">
          <span class="price-amount">5 000</span>
          <span class="price-currency">₽</span>
        </div>
      </div>
      <ul class="ui-card-pricing-features">
        <li>Консультация врача</li>
        <li>Полная диагностика</li>
        <li>План лечения</li>
        <li>1 процедура</li>
      </ul>
      <button class="ui-btn ui-btn-primary">Выбрать</button>
    </div>

    <div class="ui-card ui-card-pricing">
      <div class="ui-card-pricing-header">
        <h3 class="ui-card-pricing-title">Премиум</h3>
        <div class="ui-card-pricing-price">
          <span class="price-amount">10 000</span>
          <span class="price-currency">₽</span>
        </div>
      </div>
      <ul class="ui-card-pricing-features">
        <li>Консультация врача</li>
        <li>Расширенная диагностика</li>
        <li>Индивидуальный план</li>
        <li>3 процедуры</li>
        <li>Контрольный осмотр</li>
      </ul>
      <button class="ui-btn ui-btn-outline">Выбрать</button>
    </div>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Service Card --&gt;
&lt;div class="ui-card ui-card-service"&gt;
  &lt;div class="ui-card-icon"&gt;
    &lt;svg&gt;...&lt;/svg&gt;
  &lt;/div&gt;
  &lt;h3 class="ui-card-title"&gt;Физиотерапия&lt;/h3&gt;
  &lt;p class="ui-card-text"&gt;Описание услуги...&lt;/p&gt;
  &lt;button class="ui-btn ui-btn-primary ui-btn-small"&gt;Подробнее&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Doctor Card --&gt;
&lt;div class="ui-card ui-card-doctor"&gt;
  &lt;div class="ui-card-doctor-photo"&gt;
    &lt;img src="doctor.jpg" alt="Врач"&gt;
  &lt;/div&gt;
  &lt;h3 class="ui-card-title"&gt;Иванов Иван Иванович&lt;/h3&gt;
  &lt;p class="ui-card-specialty"&gt;Врач-физиотерапевт&lt;/p&gt;
  &lt;p class="ui-card-text"&gt;Стаж работы: 15 лет&lt;/p&gt;
  &lt;button class="ui-btn ui-btn-secondary ui-btn-small"&gt;Записаться&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Info Card --&gt;
&lt;div class="ui-card ui-card-info"&gt;
  &lt;div class="ui-card-info-icon"&gt;
    &lt;svg&gt;...&lt;/svg&gt;
  &lt;/div&gt;
  &lt;h4 class="ui-card-info-title"&gt;Телефон&lt;/h4&gt;
  &lt;p class="ui-card-info-text"&gt;+7 (999) 123-45-67&lt;/p&gt;
&lt;/div&gt;

&lt;!-- Pricing Card --&gt;
&lt;div class="ui-card ui-card-pricing"&gt;
  &lt;div class="ui-card-pricing-header"&gt;
    &lt;h3 class="ui-card-pricing-title"&gt;Базовый&lt;/h3&gt;
    &lt;div class="ui-card-pricing-price"&gt;
      &lt;span class="price-amount"&gt;2 500&lt;/span&gt;
      &lt;span class="price-currency"&gt;₽&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;ul class="ui-card-pricing-features"&gt;
    &lt;li&gt;Консультация врача&lt;/li&gt;
    &lt;li&gt;Диагностика&lt;/li&gt;
  &lt;/ul&gt;
  &lt;button class="ui-btn ui-btn-outline"&gt;Выбрать&lt;/button&gt;
&lt;/div&gt;</code></pre>
  </div>
</div>

---

## 🧭 NAVIGATION {#navigation}

### Header Navigation

<div class="component-section">
  <h4>Desktop Navigation</h4>
  
  <div class="nav-example">
    <nav class="ui-nav">
      <a href="#" class="ui-nav-link ui-nav-link-active">Главная</a>
      <a href="#" class="ui-nav-link">Услуги</a>
      <a href="#" class="ui-nav-link">Врачи</a>
      <a href="#" class="ui-nav-link">О клинике</a>
      <a href="#" class="ui-nav-link">Контакты</a>
    </nav>
  </div>

  <h4>Breadcrumbs</h4>
  
  <div class="nav-example">
    <nav class="ui-breadcrumbs">
      <a href="#" class="ui-breadcrumb-link">Главная</a>
      <span class="ui-breadcrumb-separator">/</span>
      <a href="#" class="ui-breadcrumb-link">Услуги</a>
      <span class="ui-breadcrumb-separator">/</span>
      <span class="ui-breadcrumb-current">Физиотерапия</span>
    </nav>
  </div>

  <h4>Pagination</h4>
  
  <div class="nav-example">
    <nav class="ui-pagination">
      <button class="ui-pagination-btn ui-pagination-prev" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
      </button>
      <button class="ui-pagination-btn ui-pagination-active">1</button>
      <button class="ui-pagination-btn">2</button>
      <button class="ui-pagination-btn">3</button>
      <button class="ui-pagination-btn">4</button>
      <button class="ui-pagination-btn">5</button>
      <button class="ui-pagination-btn ui-pagination-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
      </button>
    </nav>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Navigation --&gt;
&lt;nav class="ui-nav"&gt;
  &lt;a href="#" class="ui-nav-link ui-nav-link-active"&gt;Главная&lt;/a&gt;
  &lt;a href="#" class="ui-nav-link"&gt;Услуги&lt;/a&gt;
&lt;/nav&gt;

&lt;!-- Breadcrumbs --&gt;
&lt;nav class="ui-breadcrumbs"&gt;
  &lt;a href="#" class="ui-breadcrumb-link"&gt;Главная&lt;/a&gt;
  &lt;span class="ui-breadcrumb-separator"&gt;/&lt;/span&gt;
  &lt;span class="ui-breadcrumb-current"&gt;Физиотерапия&lt;/span&gt;
&lt;/nav&gt;

&lt;!-- Pagination --&gt;
&lt;nav class="ui-pagination"&gt;
  &lt;button class="ui-pagination-btn ui-pagination-prev"&gt;...&lt;/button&gt;
  &lt;button class="ui-pagination-btn ui-pagination-active"&gt;1&lt;/button&gt;
  &lt;button class="ui-pagination-btn"&gt;2&lt;/button&gt;
&lt;/nav&gt;</code></pre>
  </div>
</div>

---

## 🔔 MODALS & ALERTS {#modals}

### Modal Window

<div class="component-section">
  <h4>Modal Example</h4>
  
  <div class="modal-demo-container">
    <button class="ui-btn ui-btn-primary" onclick="document.getElementById('demo-modal').style.display='flex'">Открыть модальное окно</button>
  </div>

  <div id="demo-modal" class="ui-modal" style="display: none;">
    <div class="ui-modal-overlay" onclick="document.getElementById('demo-modal').style.display='none'"></div>
    <div class="ui-modal-content">
      <button class="ui-modal-close" onclick="document.getElementById('demo-modal').style.display='none'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
      <h3 class="ui-modal-title">Запись на прием</h3>
      <p class="ui-modal-text">Заполните форму, и мы свяжемся с вами в ближайшее время.</p>
      <form class="ui-modal-form">
        <input type="text" class="ui-input" placeholder="Ваше имя">
        <input type="tel" class="ui-input" placeholder="Телефон">
        <button type="submit" class="ui-btn ui-btn-primary">Отправить</button>
      </form>
    </div>
  </div>

  <h4>Alert Messages</h4>
  
  <div class="alerts-showcase">
    <div class="ui-alert ui-alert-success">
      <div class="ui-alert-icon">✓</div>
      <div class="ui-alert-content">
        <strong>Успешно!</strong> Ваша заявка принята. Мы свяжемся с вами в ближайшее время.
      </div>
    </div>

    <div class="ui-alert ui-alert-error">
      <div class="ui-alert-icon">✕</div>
      <div class="ui-alert-content">
        <strong>Ошибка!</strong> Не удалось отправить форму. Проверьте введенные данные.
      </div>
    </div>

    <div class="ui-alert ui-alert-warning">
      <div class="ui-alert-icon">⚠</div>
      <div class="ui-alert-content">
        <strong>Внимание!</strong> Клиника будет закрыта 1 января.
      </div>
    </div>

    <div class="ui-alert ui-alert-info">
      <div class="ui-alert-icon">ℹ</div>
      <div class="ui-alert-content">
        <strong>Информация:</strong> Запись на прием доступна онлайн 24/7.
      </div>
    </div>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Modal --&gt;
&lt;div class="ui-modal"&gt;
  &lt;div class="ui-modal-overlay"&gt;&lt;/div&gt;
  &lt;div class="ui-modal-content"&gt;
    &lt;button class="ui-modal-close"&gt;×&lt;/button&gt;
    &lt;h3 class="ui-modal-title"&gt;Заголовок&lt;/h3&gt;
    &lt;p class="ui-modal-text"&gt;Текст...&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Alert --&gt;
&lt;div class="ui-alert ui-alert-success"&gt;
  &lt;div class="ui-alert-icon"&gt;✓&lt;/div&gt;
  &lt;div class="ui-alert-content"&gt;
    &lt;strong&gt;Успешно!&lt;/strong&gt; Сообщение...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div>
</div>

---

## 🏷️ BADGES & TAGS {#badges}

### Status Badges

<div class="component-section">
  <h4>Badge Styles</h4>
  
  <div class="badges-showcase">
    <span class="ui-badge ui-badge-primary">Новинка</span>
    <span class="ui-badge ui-badge-success">Доступно</span>
    <span class="ui-badge ui-badge-warning">Ограничено</span>
    <span class="ui-badge ui-badge-error">Недоступно</span>
    <span class="ui-badge ui-badge-info">Популярное</span>
  </div>

  <h4>Category Tags</h4>
  
  <div class="tags-showcase">
    <span class="ui-tag">Физиотерапия</span>
    <span class="ui-tag">ЛФК</span>
    <span class="ui-tag">УВТ</span>
    <span class="ui-tag">Флебология</span>
    <span class="ui-tag">Травматология</span>
  </div>

  <h4>Notification Badge</h4>
  
  <div class="notification-demo">
    <button class="ui-btn ui-btn-outline" style="position: relative;">
      Уведомления
      <span class="ui-notification-badge">3</span>
    </button>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Badge --&gt;
&lt;span class="ui-badge ui-badge-primary"&gt;Новинка&lt;/span&gt;
&lt;span class="ui-badge ui-badge-success"&gt;Доступно&lt;/span&gt;

&lt;!-- Tag --&gt;
&lt;span class="ui-tag"&gt;Физиотерапия&lt;/span&gt;

&lt;!-- Notification Badge --&gt;
&lt;button style="position: relative;"&gt;
  Уведомления
  &lt;span class="ui-notification-badge"&gt;3&lt;/span&gt;
&lt;/button&gt;</code></pre>
  </div>
</div>

---

## 📋 LISTS {#lists}

### List Styles

<div class="component-section">
  <h4>Icon List</h4>
  
  <div class="list-example">
    <ul class="ui-list ui-list-icon">
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span>Консультация опытного врача</span>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span>Современное оборудование</span>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span>Индивидуальный подход к каждому пациенту</span>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span>Удобное расположение клиники</span>
      </li>
    </ul>
  </div>

  <h4>Numbered List</h4>
  
  <div class="list-example">
    <ol class="ui-list ui-list-numbered">
      <li>Запишитесь на прием по телефону или онлайн</li>
      <li>Пройдите консультацию у специалиста</li>
      <li>Получите индивидуальный план лечения</li>
      <li>Начните курс процедур</li>
    </ol>
  </div>

  <h4>Feature List</h4>
  
  <div class="list-example">
    <div class="ui-feature-list">
      <div class="ui-feature-item">
        <div class="ui-feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div class="ui-feature-content">
          <h4>Опытные специалисты</h4>
          <p>Врачи с многолетним стажем и высшей категорией</p>
        </div>
      </div>

      <div class="ui-feature-item">
        <div class="ui-feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/><path d="m16 15-3-3 3-3"/></svg>
        </div>
        <div class="ui-feature-content">
          <h4>Современное оборудование</h4>
          <p>Новейшие технологии для эффективного лечения</p>
        </div>
      </div>

      <div class="ui-feature-item">
        <div class="ui-feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
        </div>
        <div class="ui-feature-content">
          <h4>Забота о пациентах</h4>
          <p>Внимательное отношение и комфортная атмосфера</p>
        </div>
      </div>
    </div>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Icon List --&gt;
&lt;ul class="ui-list ui-list-icon"&gt;
  &lt;li&gt;
    &lt;svg&gt;...&lt;/svg&gt;
    &lt;span&gt;Текст пункта&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Numbered List --&gt;
&lt;ol class="ui-list ui-list-numbered"&gt;
  &lt;li&gt;Первый шаг&lt;/li&gt;
  &lt;li&gt;Второй шаг&lt;/li&gt;
&lt;/ol&gt;

&lt;!-- Feature List --&gt;
&lt;div class="ui-feature-list"&gt;
  &lt;div class="ui-feature-item"&gt;
    &lt;div class="ui-feature-icon"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/div&gt;
    &lt;div class="ui-feature-content"&gt;
      &lt;h4&gt;Заголовок&lt;/h4&gt;
      &lt;p&gt;Описание...&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div>
</div>

---

## 🏗️ LAYOUT {#layout}

### Section Containers

<div class="component-section">
  <h4>Hero Section</h4>
  
  <div class="layout-example">
    <section class="ui-hero">
      <div class="ui-container">
        <h1 class="ui-hero-title">Клиника «Пчёлка»</h1>
        <p class="ui-hero-subtitle">Ваше здоровье в надежных руках</p>
        <div class="ui-hero-actions">
          <button class="ui-btn ui-btn-primary ui-btn-large">Записаться на прием</button>
          <button class="ui-btn ui-btn-secondary ui-btn-large">Узнать больше</button>
        </div>
      </div>
    </section>
  </div>

  <h4>Content Section</h4>
  
  <div class="layout-example">
    <section class="ui-section">
      <div class="ui-container">
        <h2 class="ui-section-title">Наши услуги</h2>
        <p class="ui-section-subtitle">Современные методы лечения и реабилитации</p>
        <div class="ui-section-content">
          <p>Здесь размещается контент секции...</p>
        </div>
      </div>
    </section>
  </div>

  <h4>Two Column Layout</h4>
  
  <div class="layout-example">
    <div class="ui-container">
      <div class="ui-grid ui-grid-2">
        <div class="ui-grid-item">
          <h3>Левая колонка</h3>
          <p>Контент первой колонки</p>
        </div>
        <div class="ui-grid-item">
          <h3>Правая колонка</h3>
          <p>Контент второй колонки</p>
        </div>
      </div>
    </div>
  </div>

  <h4>Three Column Layout</h4>
  
  <div class="layout-example">
    <div class="ui-container">
      <div class="ui-grid ui-grid-3">
        <div class="ui-grid-item">
          <h4>Колонка 1</h4>
          <p>Контент</p>
        </div>
        <div class="ui-grid-item">
          <h4>Колонка 2</h4>
          <p>Контент</p>
        </div>
        <div class="ui-grid-item">
          <h4>Колонка 3</h4>
          <p>Контент</p>
        </div>
      </div>
    </div>
  </div>

  <h4>HTML код</h4>
  <div class="code-block">
    <pre><code>&lt;!-- Hero Section --&gt;
&lt;section class="ui-hero"&gt;
  &lt;div class="ui-container"&gt;
    &lt;h1 class="ui-hero-title"&gt;Заголовок&lt;/h1&gt;
    &lt;p class="ui-hero-subtitle"&gt;Подзаголовок&lt;/p&gt;
    &lt;div class="ui-hero-actions"&gt;
      &lt;button class="ui-btn ui-btn-primary"&gt;CTA&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;

&lt;!-- Content Section --&gt;
&lt;section class="ui-section"&gt;
  &lt;div class="ui-container"&gt;
    &lt;h2 class="ui-section-title"&gt;Заголовок&lt;/h2&gt;
    &lt;p class="ui-section-subtitle"&gt;Подзаголовок&lt;/p&gt;
    &lt;div class="ui-section-content"&gt;...&lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;

&lt;!-- Grid Layout --&gt;
&lt;div class="ui-grid ui-grid-2"&gt;
  &lt;div class="ui-grid-item"&gt;...&lt;/div&gt;
  &lt;div class="ui-grid-item"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div>
</div>

---

## 🌙 DARK THEME {#dark-theme}

### Цветовая схема темной темы

Темная тема основана на дизайне **variant-6-innovate** с эффектом glassmorphism.

<div class="component-section">
  <h4>Основные цвета темной темы</h4>
  
  <div class="color-grid">
    <div class="color-item">
      <div class="color-swatch" style="background: #0a0a0a;"></div>
      <div class="color-info">
        <strong>Background Start</strong>
        <code>#0a0a0a</code>
        <p>Основной фон (градиент начало)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: #1a1a1a;"></div>
      <div class="color-info">
        <strong>Background End</strong>
        <code>#1a1a1a</code>
        <p>Основной фон (градиент конец)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: #ffffff;"></div>
      <div class="color-info">
        <strong>Text Primary</strong>
        <code>#ffffff</code>
        <p>Основной текст</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: rgba(255, 255, 255, 0.7); border: 1px solid #333;"></div>
      <div class="color-info">
        <strong>Text Secondary</strong>
        <code>rgba(255, 255, 255, 0.7)</code>
        <p>Вторичный текст (70% прозрачности)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: rgba(255, 255, 255, 0.5); border: 1px solid #333;"></div>
      <div class="color-info">
        <strong>Text Light</strong>
        <code>rgba(255, 255, 255, 0.5)</code>
        <p>Светлый текст (50% прозрачности)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: rgba(255, 255, 255, 0.05); border: 1px solid #333;"></div>
      <div class="color-info">
        <strong>Card Background</strong>
        <code>rgba(255, 255, 255, 0.05)</code>
        <p>Фон карточек (glassmorphism)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: #C9A961;"></div>
      <div class="color-info">
        <strong>Accent Color</strong>
        <code>#C9A961</code>
        <p>Акцентный цвет (золотой)</p>
      </div>
    </div>

    <div class="color-item">
      <div class="color-swatch" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #333;"></div>
      <div class="color-info">
        <strong>Border Color</strong>
        <code>rgba(255, 255, 255, 0.1)</code>
        <p>Цвет границ (10% прозрачности)</p>
      </div>
    </div>
  </div>

  <h4>CSS Variables для темной темы</h4>
  <div class="code-block">
    <pre><code>[data-theme="dark"] {
  /* Backgrounds */
  --bg-gradient-start: #0a0a0a;
  --bg-gradient-end: #1a1a1a;
  
  /* Text Colors */
  --text-primary: #ffffff;
  --text-secondary: rgba(255, 255, 255, 0.7);
  --text-light: rgba(255, 255, 255, 0.5);
  
  /* Card & Components */
  --card-bg: rgba(255, 255, 255, 0.05);
  --card-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
  
  /* Accent & Borders */
  --accent-color: #C9A961;
  --border-color: rgba(255, 255, 255, 0.1);
  
  /* Code & Quotes */
  --code-bg: #1a1a1a;
  --quote-bg: rgba(255, 255, 255, 0.05);
}</code></pre>
  </div>

  <h4>Glassmorphism эффект</h4>
  <p>Темная тема использует эффект glassmorphism для карточек и компонентов:</p>
  <div class="code-block">
    <pre><code>.glass-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
}</code></pre>
  </div>

  <h4>Переключение темы</h4>
  <p>Для переключения между светлой и темной темой используется атрибут <code>data-theme</code> на элементе <code>&lt;body&gt;</code>:</p>
  <div class="code-block">
    <pre><code>// JavaScript для переключения темы
const toggleTheme = () => {
  const currentTheme = document.body.getAttribute('data-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  document.body.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
};

// Загрузка сохраненной темы
const savedTheme = localStorage.getItem('theme') || 'light';
document.body.setAttribute('data-theme', savedTheme);</code></pre>
  </div>
</div>

---

**Статус:** UI Kit v1.0 - ЗАВЕРШЕН ✅  
**Компоненты:** Buttons, Forms, Cards, Navigation, Modals, Badges, Lists, Layout, Dark Theme  
**Готово к применению в demo-mockups**

<style>
/* Component Section */
.component-section {
  background: #f9f9f9;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  padding: 40px;
  margin: 40px 0;
}

.component-section h4 {
  color: #C9A961;
  font-size: 20px;
  margin: 30px 0 20px 0;
  padding-bottom: 10px;
  border-bottom: 2px solid #C9A961;
}

.component-section h4:first-child {
  margin-top: 0;
}

/* Button Showcase */
.button-showcase {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  margin: 30px 0;
}

.button-example {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  padding: 30px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.component-label {
  margin: 0;
  font-size: 13px;
  color: #999;
  font-family: 'Monaco', 'Menlo', monospace;
}

/* UI Buttons */
.ui-btn {
  padding: 15px 30px;
  border-radius: 5px;
  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s;
  border: none;
  font-family: 'Montserrat', sans-serif;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  justify-content: center;
  text-decoration: none;
  line-height: 1;
}

.ui-btn:hover {
  transform: translateY(-2px);
}

.ui-btn svg {
  flex-shrink: 0;
}

/* Primary Button */
.ui-btn-primary {
  background: #C9A961;
  color: #FFFFFF;
}

.ui-btn-primary:hover {
  background: #D4AF37;
  box-shadow: 0 4px 12px rgba(201,169,97,0.3);
}

/* Secondary Button */
.ui-btn-secondary {
  background: transparent;
  color: #C9A961;
  border: 2px solid #C9A961;
  padding: 13px 28px;
}

.ui-btn-secondary:hover {
  background: #C9A961;
  color: #FFFFFF;
}

/* Dark Button */
.ui-btn-dark {
  background: #000000;
  color: #C9A961;
}

.ui-btn-dark:hover {
  background: #1a1a1a;
  color: #D4AF37;
}

/* Outline Button */
.ui-btn-outline {
  background: transparent;
  color: #333333;
  border: 2px solid #e0e0e0;
  padding: 13px 28px;
}

.ui-btn-outline:hover {
  border-color: #C9A961;
  color: #C9A961;
  background: rgba(201,169,97,0.05);
}

/* Button Sizes */
.ui-btn-large {
  padding: 18px 40px;
  font-size: 18px;
}

.ui-btn-small {
  padding: 10px 20px;
  font-size: 14px;
}

/* Icon Button */
.ui-btn-icon {
  padding: 12px;
  width: 44px;
  height: 44px;
  border-radius: 50%;
}

.ui-btn-icon svg {
  margin: 0;
}

/* Code Block */
.code-block {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  padding: 20px;
  margin: 20px 0;
}

.code-block pre {
  margin: 0;
  background: #f8f9fa;
  padding: 20px;
  border-radius: 5px;
  overflow-x: auto;
}

.code-block code {
  font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', monospace;
  font-size: 13px;
  line-height: 1.6;
  color: #2d2d2d;
}

/* Form Showcase */
.form-showcase {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
  margin: 30px 0;
}

.form-example-item {
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

/* UI Label */
.ui-label {
  display: block;
  margin-bottom: 8px;
  color: #333;
  font-weight: 600;
  font-size: 14px;
}

/* UI Input */
.ui-input {
  width: 100%;
  border: 1px solid #e0e0e0;
  border-radius: 4px;
  padding: 12px 15px;
  font-size: 16px;
  transition: all 0.3s;
  font-family: 'Open Sans', sans-serif;
  box-sizing: border-box;
  color: #333;
}

.ui-input::placeholder {
  color: #999999;
  font-style: italic;
}

.ui-input:focus {
  border-color: #C9A961;
  outline: none;
  box-shadow: 0 0 0 3px rgba(201,169,97,0.1);
}

.ui-input:hover {
  border-color: #C9A961;
}

/* Textarea */
.ui-textarea {
  resize: vertical;
  min-height: 100px;
  line-height: 1.6;
}

/* Select */
.ui-select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23C9A961' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 15px center;
  background-size: 12px;
  padding-right: 40px;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

/* Checkbox */
.ui-checkbox-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.ui-checkbox {
  display: flex;
  align-items: center;
  cursor: pointer;
  position: relative;
  padding-left: 32px;
  user-select: none;
}

.ui-checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.ui-checkbox .checkmark {
  position: absolute;
  left: 0;
  top: 0;
  height: 20px;
  width: 20px;
  background-color: #fff;
  border: 2px solid #e0e0e0;
  border-radius: 4px;
  transition: all 0.3s;
}

.ui-checkbox:hover .checkmark {
  border-color: #C9A961;
}

.ui-checkbox input:checked ~ .checkmark {
  background-color: #C9A961;
  border-color: #C9A961;
}

.ui-checkbox .checkmark:after {
  content: "";
  position: absolute;
  display: none;
  left: 6px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

.ui-checkbox input:checked ~ .checkmark:after {
  display: block;
}

.ui-checkbox .label-text {
  color: #333;
  font-size: 14px;
  line-height: 1.5;
}

.ui-checkbox .label-text a {
  color: #C9A961;
  text-decoration: none;
}

.ui-checkbox .label-text a:hover {
  text-decoration: underline;
}

/* Radio */
.ui-radio-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.ui-radio {
  display: flex;
  align-items: center;
  cursor: pointer;
  position: relative;
  padding-left: 32px;
  user-select: none;
}

.ui-radio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.ui-radio .radiomark {
  position: absolute;
  left: 0;
  top: 0;
  height: 20px;
  width: 20px;
  background-color: #fff;
  border: 2px solid #e0e0e0;
  border-radius: 50%;
  transition: all 0.3s;
}

.ui-radio:hover .radiomark {
  border-color: #C9A961;
}

.ui-radio input:checked ~ .radiomark {
  background-color: #fff;
  border-color: #C9A961;
}

.ui-radio .radiomark:after {
  content: "";
  position: absolute;
  display: none;
  top: 4px;
  left: 4px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #C9A961;
}

.ui-radio input:checked ~ .radiomark:after {
  display: block;
}

.ui-radio .label-text {
  color: #333;
  font-size: 14px;
  line-height: 1.5;
}

/* Complete Form Example */
.form-complete-example {
  background: #fff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
  margin: 30px 0;
}

.ui-form {
  max-width: 600px;
  margin: 0 auto;
}

.ui-form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-bottom: 20px;
}

.ui-form-group {
  margin-bottom: 20px;
}

.ui-form button[type="submit"] {
  width: 100%;
  margin-top: 10px;
}

/* Responsive */
@media (max-width: 768px) {
  .button-showcase {
    grid-template-columns: 1fr;
  }
  
  .component-section {
    padding: 20px;
  }
  
  .form-showcase {
    grid-template-columns: 1fr;
  }
  
  .ui-form-row {
    grid-template-columns: 1fr;
  }
  
  .form-complete-example {
    padding: 20px;
  }
}

/* Cards Showcase */
.cards-showcase {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin: 30px 0;
}

/* Base Card */
.ui-card {
  background: #FFFFFF;
  border-radius: 8px;
  padding: 30px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  transition: all 0.3s;
  display: flex;
  flex-direction: column;
}

.ui-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

/* Service Card */
.ui-card-service {
  border-top: 3px solid #C9A961;
  text-align: center;
}

.ui-card-service:hover {
  border-top-color: #D4AF37;
}

.ui-card-icon {
  color: #C9A961;
  margin-bottom: 20px;
  transition: transform 0.3s;
}

.ui-card-service:hover .ui-card-icon {
  transform: scale(1.1) rotate(5deg);
}

.ui-card-title {
  color: #333333;
  font-size: 24px;
  font-weight: bold;
  margin: 15px 0;
}

.ui-card-text {
  color: #666666;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
  flex-grow: 1;
}

.ui-card-service button {
  margin-top: auto;
}

/* Doctor Card */
.ui-card-doctor {
  text-align: center;
  border: 2px solid #f0f0f0;
}

.ui-card-doctor:hover {
  border-color: #C9A961;
}

.ui-card-doctor-photo {
  width: 120px;
  height: 120px;
  margin: 0 auto 20px;
  border-radius: 50%;
  overflow: hidden;
  border: 3px solid #C9A961;
  background: #f9f9f9;
  display: flex;
  align-items: center;
  justify-content: center;
}

.ui-card-doctor-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.ui-card-specialty {
  color: #C9A961;
  font-size: 14px;
  font-weight: 600;
  margin: 10px 0;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Info Card */
.ui-card-info {
  text-align: center;
  background: linear-gradient(135deg, #fffbf5 0%, #ffffff 100%);
  border: 2px solid #e0e0e0;
  padding: 40px 30px;
}

.ui-card-info:hover {
  border-color: #C9A961;
  background: linear-gradient(135deg, #fff9f0 0%, #ffffff 100%);
}

.ui-card-info-icon {
  color: #C9A961;
  margin-bottom: 15px;
  display: flex;
  justify-content: center;
}

.ui-card-info-icon svg {
  transition: transform 0.3s;
}

.ui-card-info:hover .ui-card-info-icon svg {
  transform: scale(1.1);
}

.ui-card-info-title {
  color: #333;
  font-size: 18px;
  font-weight: 600;
  margin: 15px 0 10px 0;
}

.ui-card-info-text {
  color: #666;
  font-size: 15px;
  line-height: 1.6;
  margin: 0;
}

/* Pricing Card */
.ui-card-pricing {
  border: 2px solid #e0e0e0;
  position: relative;
  text-align: center;
}

.ui-card-pricing:hover {
  border-color: #C9A961;
}

.ui-card-pricing-featured {
  border-color: #C9A961;
  border-width: 3px;
  transform: scale(1.05);
}

.ui-card-pricing-featured:hover {
  transform: scale(1.08) translateY(-5px);
}

.ui-card-pricing-badge {
  position: absolute;
  top: -12px;
  left: 50%;
  transform: translateX(-50%);
  background: linear-gradient(135deg, #C9A961 0%, #D4AF37 100%);
  color: #fff;
  padding: 5px 20px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.ui-card-pricing-header {
  padding-bottom: 20px;
  border-bottom: 2px solid #f0f0f0;
  margin-bottom: 20px;
}

.ui-card-pricing-title {
  color: #333;
  font-size: 22px;
  font-weight: 600;
  margin: 0 0 15px 0;
}

.ui-card-pricing-price {
  display: flex;
  align-items: baseline;
  justify-content: center;
  gap: 5px;
}

.price-amount {
  font-size: 42px;
  font-weight: bold;
  color: #C9A961;
  line-height: 1;
}

.price-currency {
  font-size: 24px;
  color: #999;
}

.ui-card-pricing-features {
  list-style: none;
  padding: 0;
  margin: 0 0 25px 0;
  flex-grow: 1;
}

.ui-card-pricing-features li {
  padding: 12px 0;
  color: #666;
  font-size: 15px;
  border-bottom: 1px solid #f0f0f0;
}

.ui-card-pricing-features li:last-child {
  border-bottom: none;
}

.ui-card-pricing-features li:before {
  content: "✓";
  color: #C9A961;
  font-weight: bold;
  margin-right: 10px;
}

.ui-card-pricing button {
  width: 100%;
  margin-top: auto;
}

/* Responsive Cards */
@media (max-width: 768px) {
  .cards-showcase {
    grid-template-columns: 1fr;
  }
  
  .ui-card-pricing-featured {
    transform: scale(1);
  }
  
  .ui-card-pricing-featured:hover {
    transform: translateY(-5px);
  }
}

/* Navigation */
.nav-example {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  margin: 20px 0;
}

.ui-nav {
  display: flex;
  gap: 30px;
  align-items: center;
}

.ui-nav-link {
  color: #333333;
  text-decoration: none;
  font-weight: 500;
  font-size: 16px;
  padding: 8px 0;
  border-bottom: 2px solid transparent;
  transition: all 0.3s;
}

.ui-nav-link:hover {
  color: #C9A961;
  border-bottom-color: #C9A961;
}

.ui-nav-link-active {
  color: #C9A961;
  border-bottom-color: #C9A961;
}

/* Breadcrumbs */
.ui-breadcrumbs {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.ui-breadcrumb-link {
  color: #666;
  text-decoration: none;
  font-size: 14px;
  transition: color 0.3s;
}

.ui-breadcrumb-link:hover {
  color: #C9A961;
}

.ui-breadcrumb-separator {
  color: #999;
  font-size: 14px;
}

.ui-breadcrumb-current {
  color: #C9A961;
  font-size: 14px;
  font-weight: 600;
}

/* Pagination */
.ui-pagination {
  display: flex;
  gap: 8px;
  align-items: center;
  justify-content: center;
}

.ui-pagination-btn {
  min-width: 40px;
  height: 40px;
  padding: 8px 12px;
  border: 1px solid #e0e0e0;
  background: #fff;
  color: #333;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
}

.ui-pagination-btn:hover:not(:disabled) {
  border-color: #C9A961;
  color: #C9A961;
  background: rgba(201,169,97,0.05);
}

.ui-pagination-btn:disabled {
  opacity: 0.4;
  cursor: not-allowed;
}

.ui-pagination-active {
  background: #C9A961;
  color: #fff;
  border-color: #C9A961;
}

.ui-pagination-active:hover {
  background: #D4AF37;
  border-color: #D4AF37;
  color: #fff;
}

/* Modal */
.modal-demo-container {
  text-align: center;
  padding: 40px;
}

.ui-modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.ui-modal-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.6);
  backdrop-filter: blur(4px);
}

.ui-modal-content {
  position: relative;
  background: #fff;
  border-radius: 12px;
  padding: 40px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0 20px 60px rgba(0,0,0,0.3);
  animation: modalSlideIn 0.3s ease-out;
}

@keyframes modalSlideIn {
  from {
    opacity: 0;
    transform: translateY(-50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.ui-modal-close {
  position: absolute;
  top: 15px;
  right: 15px;
  background: transparent;
  border: none;
  color: #999;
  cursor: pointer;
  padding: 5px;
  transition: all 0.3s;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.ui-modal-close:hover {
  background: rgba(201,169,97,0.1);
  color: #C9A961;
}

.ui-modal-title {
  color: #333;
  font-size: 24px;
  font-weight: 600;
  margin: 0 0 15px 0;
}

.ui-modal-text {
  color: #666;
  font-size: 16px;
  line-height: 1.6;
  margin: 0 0 25px 0;
}

.ui-modal-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* Alerts */
.alerts-showcase {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin: 20px 0;
}

.ui-alert {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 15px 20px;
  border-radius: 8px;
  border-left: 4px solid;
}

.ui-alert-icon {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 18px;
}

.ui-alert-content {
  flex-grow: 1;
  font-size: 14px;
  line-height: 1.6;
}

.ui-alert-content strong {
  display: block;
  margin-bottom: 5px;
}

.ui-alert-success {
  background: #f0f9f4;
  border-left-color: #28a745;
  color: #155724;
}

.ui-alert-success .ui-alert-icon {
  color: #28a745;
}

.ui-alert-error {
  background: #fef5f5;
  border-left-color: #dc3545;
  color: #721c24;
}

.ui-alert-error .ui-alert-icon {
  color: #dc3545;
}

.ui-alert-warning {
  background: #fffbf0;
  border-left-color: #ffc107;
  color: #856404;
}

.ui-alert-warning .ui-alert-icon {
  color: #ffc107;
}

.ui-alert-info {
  background: #f0f8ff;
  border-left-color: #17a2b8;
  color: #0c5460;
}

.ui-alert-info .ui-alert-icon {
  color: #17a2b8;
}

/* Badges */
.badges-showcase {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin: 20px 0;
  padding: 30px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.ui-badge {
  display: inline-flex;
  align-items: center;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.ui-badge-primary {
  background: linear-gradient(135deg, #C9A961 0%, #D4AF37 100%);
  color: #fff;
}

.ui-badge-success {
  background: #28a745;
  color: #fff;
}

.ui-badge-warning {
  background: #ffc107;
  color: #333;
}

.ui-badge-error {
  background: #dc3545;
  color: #fff;
}

.ui-badge-info {
  background: #17a2b8;
  color: #fff;
}

/* Tags */
.tags-showcase {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 20px 0;
  padding: 30px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.ui-tag {
  display: inline-flex;
  align-items: center;
  padding: 8px 16px;
  background: rgba(201,169,97,0.1);
  color: #C9A961;
  border: 1px solid rgba(201,169,97,0.3);
  border-radius: 5px;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s;
  cursor: pointer;
}

.ui-tag:hover {
  background: rgba(201,169,97,0.2);
  border-color: #C9A961;
  transform: translateY(-2px);
}

/* Notification Badge */
.notification-demo {
  text-align: center;
  padding: 30px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  margin: 20px 0;
}

.ui-notification-badge {
  position: absolute;
  top: -8px;
  right: -8px;
  background: #dc3545;
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  padding: 3px 7px;
  border-radius: 10px;
  min-width: 20px;
  text-align: center;
  line-height: 1;
}

/* Responsive Navigation */
@media (max-width: 768px) {
  .ui-nav {
    flex-direction: column;
    gap: 15px;
    align-items: flex-start;
  }
  
  .ui-modal-content {
    padding: 30px 20px;
  }
}

/* Lists */
.list-example {
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  margin: 20px 0;
}

.ui-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* Icon List */
.ui-list-icon li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 12px 0;
  color: #333;
  font-size: 16px;
  line-height: 1.6;
  border-bottom: 1px solid #f0f0f0;
}

.ui-list-icon li:last-child {
  border-bottom: none;
}

.ui-list-icon li svg {
  flex-shrink: 0;
  color: #C9A961;
  margin-top: 2px;
}

.ui-list-icon li span {
  flex-grow: 1;
}

/* Numbered List */
.ui-list-numbered {
  counter-reset: list-counter;
  padding-left: 0;
}

.ui-list-numbered li {
  counter-increment: list-counter;
  position: relative;
  padding: 15px 0 15px 50px;
  color: #333;
  font-size: 16px;
  line-height: 1.6;
  border-bottom: 1px solid #f0f0f0;
}

.ui-list-numbered li:last-child {
  border-bottom: none;
}

.ui-list-numbered li::before {
  content: counter(list-counter);
  position: absolute;
  left: 0;
  top: 12px;
  width: 32px;
  height: 32px;
  background: linear-gradient(135deg, #C9A961 0%, #D4AF37 100%);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 14px;
}

/* Feature List */
.ui-feature-list {
  display: flex;
  flex-direction: column;
  gap: 25px;
}

.ui-feature-item {
  display: flex;
  gap: 20px;
  align-items: flex-start;
  padding: 25px;
  background: #fff;
  border-radius: 8px;
  border: 2px solid #f0f0f0;
  transition: all 0.3s;
}

.ui-feature-item:hover {
  border-color: #C9A961;
  box-shadow: 0 4px 16px rgba(201,169,97,0.1);
  transform: translateX(5px);
}

.ui-feature-icon {
  flex-shrink: 0;
  width: 60px;
  height: 60px;
  background: rgba(201,169,97,0.1);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #C9A961;
  transition: all 0.3s;
}

.ui-feature-item:hover .ui-feature-icon {
  background: #C9A961;
  color: #fff;
  transform: scale(1.1);
}

.ui-feature-content {
  flex-grow: 1;
}

.ui-feature-content h4 {
  color: #333;
  font-size: 18px;
  font-weight: 600;
  margin: 0 0 8px 0;
}

.ui-feature-content p {
  color: #666;
  font-size: 15px;
  line-height: 1.6;
  margin: 0;
}

/* Layout */
.layout-example {
  margin: 20px 0;
  border: 2px dashed #e0e0e0;
  border-radius: 8px;
  overflow: hidden;
}

.ui-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Hero Section */
.ui-hero {
  background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
  color: #fff;
  padding: 80px 20px;
  text-align: center;
}

.ui-hero-title {
  font-size: 48px;
  font-weight: 700;
  margin: 0 0 20px 0;
  color: #fff;
}

.ui-hero-subtitle {
  font-size: 20px;
  color: #D4AF37;
  margin: 0 0 40px 0;
}

.ui-hero-actions {
  display: flex;
  gap: 15px;
  justify-content: center;
  flex-wrap: wrap;
}

/* Content Section */
.ui-section {
  padding: 60px 20px;
  background: #fff;
}

.ui-section-title {
  font-size: 36px;
  font-weight: 700;
  color: #333;
  margin: 0 0 15px 0;
  text-align: center;
}

.ui-section-subtitle {
  font-size: 18px;
  color: #666;
  margin: 0 0 40px 0;
  text-align: center;
}

.ui-section-content {
  max-width: 800px;
  margin: 0 auto;
}

/* Grid Layout */
.ui-grid {
  display: grid;
  gap: 30px;
  margin: 30px 0;
}

.ui-grid-2 {
  grid-template-columns: repeat(2, 1fr);
}

.ui-grid-3 {
  grid-template-columns: repeat(3, 1fr);
}

.ui-grid-item {
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  border: 2px solid #f0f0f0;
}

.ui-grid-item h3,
.ui-grid-item h4 {
  color: #333;
  margin: 0 0 15px 0;
}

.ui-grid-item p {
  color: #666;
  line-height: 1.6;
  margin: 0;
}

/* Responsive Layout */
@media (max-width: 768px) {
  .ui-hero-title {
    font-size: 32px;
  }
  
  .ui-hero-subtitle {
    font-size: 16px;
  }
  
  .ui-hero-actions {
    flex-direction: column;
  }
  
  .ui-section-title {
    font-size: 28px;
  }
  
  .ui-grid-2,
  .ui-grid-3 {
    grid-template-columns: 1fr;
  }
  
  .ui-feature-item {
    flex-direction: column;
    text-align: center;
  }
  
  .ui-feature-icon {
    margin: 0 auto;
  }
}

/* Dark Theme Support */
[data-theme="dark"] .component-section {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .component-section h4 {
  color: #C9A961;
  border-bottom-color: #C9A961;
}

[data-theme="dark"] .button-example,
[data-theme="dark"] .form-example-item,
[data-theme="dark"] .code-block {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .component-label {
  color: rgba(255, 255, 255, 0.5);
}

[data-theme="dark"] .ui-label {
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-input {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
  color: #ffffff;
}

[data-theme="dark"] .ui-input::placeholder {
  color: rgba(255, 255, 255, 0.4);
}

[data-theme="dark"] .code-block pre {
  background: #1a1a1a;
}

[data-theme="dark"] .code-block code {
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-hero-title,
[data-theme="dark"] .ui-hero-subtitle,
[data-theme="dark"] .ui-section-title,
[data-theme="dark"] .ui-section-subtitle {
  color: #ffffff;
}

[data-theme="dark"] .layout-example {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  padding: 20px;
}

[data-theme="dark"] .ui-card {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-card-title,
[data-theme="dark"] .ui-card-specialty,
[data-theme="dark"] .ui-card-info-title {
  color: #ffffff;
}

[data-theme="dark"] .ui-card-text,
[data-theme="dark"] .ui-card-info-text {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .ui-badge {
  background: rgba(201, 169, 97, 0.2);
  color: #D4AF37;
}

[data-theme="dark"] .ui-alert {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .list-example {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-list-icon li,
[data-theme="dark"] .ui-list-numbered li {
  color: rgba(255, 255, 255, 0.9);
  border-bottom-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-feature-item {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-feature-item:hover {
  border-color: #C9A961;
  box-shadow: 0 4px 16px rgba(201, 169, 97, 0.2);
}

[data-theme="dark"] .ui-feature-icon {
  background: rgba(201, 169, 97, 0.2);
}

[data-theme="dark"] .ui-feature-content h4 {
  color: #ffffff;
}

[data-theme="dark"] .ui-feature-content p {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .nav-example {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-nav-link {
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-nav-link:hover,
[data-theme="dark"] .ui-nav-link-active {
  color: #C9A961;
}

[data-theme="dark"] .ui-breadcrumb-link {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .ui-breadcrumb-separator {
  color: rgba(255, 255, 255, 0.5);
}

[data-theme="dark"] .ui-breadcrumb-current {
  color: #C9A961;
}

[data-theme="dark"] .ui-pagination-btn {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-pagination-btn:hover:not(:disabled) {
  background: rgba(201, 169, 97, 0.2);
}

[data-theme="dark"] .ui-pagination-active {
  background: #C9A961;
  color: #000000;
}

[data-theme="dark"] .ui-modal-content {
  background: #1a1a1a;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-modal-title {
  color: #ffffff;
}

[data-theme="dark"] .ui-modal-text {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .ui-modal-close {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .ui-modal-close:hover {
  color: #ffffff;
}

[data-theme="dark"] .ui-alert-success {
  background: rgba(40, 167, 69, 0.1);
  color: #4ade80;
}

[data-theme="dark"] .ui-alert-error {
  background: rgba(220, 53, 69, 0.1);
  color: #f87171;
}

[data-theme="dark"] .ui-alert-warning {
  background: rgba(255, 193, 7, 0.1);
  color: #fbbf24;
}

[data-theme="dark"] .ui-alert-info {
  background: rgba(23, 162, 184, 0.1);
  color: #60a5fa;
}

[data-theme="dark"] .badges-showcase {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-tag {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-tag:hover {
  background: rgba(201, 169, 97, 0.2);
  border-color: #C9A961;
}

[data-theme="dark"] .notification-demo {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-card-pricing-features li {
  color: rgba(255, 255, 255, 0.7);
  border-bottom-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .modal-demo-container {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
}

/* Outline Button Dark Theme */
[data-theme="dark"] .ui-btn-outline {
  color: rgba(255, 255, 255, 0.9);
  border-color: rgba(255, 255, 255, 0.2);
}

[data-theme="dark"] .ui-btn-outline:hover {
  color: #C9A961;
  border-color: #C9A961;
  background: rgba(201, 169, 97, 0.1);
}

/* Checkbox Dark Theme */
[data-theme="dark"] .ui-checkbox .checkmark {
  background-color: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.2);
}

[data-theme="dark"] .ui-checkbox:hover .checkmark {
  border-color: #C9A961;
}

[data-theme="dark"] .ui-checkbox .label-text {
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-checkbox .label-text a {
  color: #C9A961;
}

/* Radio Dark Theme */
[data-theme="dark"] .ui-radio .radiomark {
  background-color: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.2);
}

[data-theme="dark"] .ui-radio:hover .radiomark {
  border-color: #C9A961;
}

[data-theme="dark"] .ui-radio input:checked ~ .radiomark {
  background-color: rgba(255, 255, 255, 0.05);
  border-color: #C9A961;
}

[data-theme="dark"] .ui-radio .label-text {
  color: rgba(255, 255, 255, 0.9);
}

/* Form Complete Example Dark Theme */
[data-theme="dark"] .form-complete-example {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Tags Showcase Dark Theme */
[data-theme="dark"] .tags-showcase {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Notification Badge - already visible on dark backgrounds */

/* Content Section Dark Theme */
[data-theme="dark"] .ui-section {
  background: rgba(255, 255, 255, 0.02);
}

[data-theme="dark"] .ui-section-title {
  color: #ffffff;
}

[data-theme="dark"] .ui-section-subtitle {
  color: rgba(255, 255, 255, 0.7);
}

[data-theme="dark"] .ui-section-content {
  color: rgba(255, 255, 255, 0.9);
}

[data-theme="dark"] .ui-section-content p {
  color: rgba(255, 255, 255, 0.9);
}

/* Grid Layout Dark Theme */
[data-theme="dark"] .ui-grid-item {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(255, 255, 255, 0.1);
}

[data-theme="dark"] .ui-grid-item h3,
[data-theme="dark"] .ui-grid-item h4 {
  color: #ffffff;
}

[data-theme="dark"] .ui-grid-item p {
  color: rgba(255, 255, 255, 0.7);
}

/* Layout Example Border Dark Theme */
[data-theme="dark"] .layout-example {
  border-color: rgba(255, 255, 255, 0.2);
}
</style>
