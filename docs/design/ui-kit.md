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
      <div class="ui-card-info-icon">📞</div>
      <h4 class="ui-card-info-title">Телефон</h4>
      <p class="ui-card-info-text">+7 (999) 123-45-67</p>
    </div>

    <div class="ui-card ui-card-info">
      <div class="ui-card-info-icon">📍</div>
      <h4 class="ui-card-info-title">Адрес</h4>
      <p class="ui-card-info-text">г. Мытищи, ул. Примерная, 1</p>
    </div>

    <div class="ui-card ui-card-info">
      <div class="ui-card-info-icon">⏰</div>
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
  &lt;div class="ui-card-info-icon"&gt;📞&lt;/div&gt;
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

**Статус:** UI Kit v1.0 - Часть 3: Cards  
**Следующая часть:** Navigation, Modals, Badges

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
  font-size: 48px;
  margin-bottom: 15px;
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
</style>
