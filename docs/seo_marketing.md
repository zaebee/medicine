# SEO, МАРКЕТИНГ И АНАЛИТИКА

## 🎯 SEO Стратегия для медицинского сайта

### Техническое SEO

#### Базовые требования

```html
<!-- Обязательные meta-теги -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta
  name="description"
  content="Медицинский центр [Название] - современные медицинские услуги, опытные врачи, запись онлайн. ☎️ +7 (XXX) XXX-XX-XX"
/>
<meta
  name="keywords"
  content="медицинский центр, врачи, запись к врачу, медицинские услуги, [город]"
/>

<!-- Open Graph для социальных сетей -->
<meta
  property="og:title"
  content="Медицинский центр [Название] - профессиональная медицинская помощь"
/>
<meta
  property="og:description"
  content="Современное медицинское оборудование, опытные специалисты, удобная запись онлайн"
/>
<meta property="og:image" content="/static/images/clinic-preview.jpg" />
<meta property="og:type" content="website" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Медицинский центр [Название]" />
<meta
  name="twitter:description"
  content="Профессиональная медицинская помощь в [городе]"
/>
```

#### Структурированные данные (Schema.org)

```json
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "Медицинский центр [Название]",
  "description": "Современная многопрофильная клиника с опытными врачами",
  "url": "https://clinic-website.ru",
  "logo": "https://clinic-website.ru/static/images/logo.png",
  "image": "https://clinic-website.ru/static/images/clinic-photo.jpg",
  "telephone": "+7 (XXX) XXX-XX-XX",
  "email": "info@clinic-website.ru",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Примерная, 123",
    "addressLocality": "Москва",
    "postalCode": "123456",
    "addressCountry": "RU"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "55.7558",
    "longitude": "37.6176"
  },
  "openingHours": ["Mo-Fr 08:00-20:00", "Sa 09:00-18:00", "Su 10:00-16:00"],
  "sameAs": [
    "https://vk.com/clinic",
    "https://t.me/clinic",
    "https://instagram.com/clinic"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Медицинские услуги",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Консультация терапевта",
          "description": "Первичная консультация врача-терапевта"
        },
        "price": "2500",
        "priceCurrency": "RUB"
      }
    ]
  }
}
```

#### Схема для врачей

```json
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Иванов Иван Иванович",
  "jobTitle": "Врач-кардиолог",
  "worksFor": {
    "@type": "MedicalOrganization",
    "name": "Медицинский центр [Название]"
  },
  "image": "/static/images/doctors/ivanov.jpg",
  "description": "Врач-кардиолог высшей категории, стаж 15 лет",
  "hasCredential": {
    "@type": "EducationalOccupationalCredential",
    "credentialCategory": "degree",
    "educationalLevel": "HigherEducation"
  },
  "knowsAbout": ["Кардиология", "Функциональная диагностика", "ЭКГ"]
}
```

---

## 🔍 Локальное SEO

### Google My Business и Яндекс.Справочник

```json
{
  "business_profile": {
    "name": "Медицинский центр [Название]",
    "category": "Медицинский центр",
    "description": "Современная многопрофильная клиника. Опытные врачи, современное оборудование, удобная запись онлайн.",
    "services": [
      "Терапия",
      "Кардиология",
      "Гастроэнтерология",
      "УЗИ диагностика",
      "Лабораторные исследования"
    ],
    "attributes": [
      "Принимает страховку",
      "Онлайн-запись",
      "Парковка",
      "Wi-Fi",
      "Доступно для инвалидов"
    ],
    "photos": [
      "Фасад клиники",
      "Регистратура",
      "Кабинеты врачей",
      "Современное оборудование",
      "Команда врачей"
    ]
  }
}
```

### Локальные ключевые слова

```
Высокочастотные (ВЧ):
- "медицинский центр [город]"
- "врач [специализация] [город]"
- "частная клиника [город]"

Среднечастотные (СЧ):
- "запись к врачу [город] онлайн"
- "УЗИ [район города]"
- "анализы сдать [район]"
- "медосмотр [город]"

Низкочастотные (НЧ):
- "лучший кардиолог [район города]"
- "где сдать анализы недорого [город]"
- "медицинский центр рядом с метро [станция]"
- "платный врач [специализация] [район]"
```

---

## 📊 Настройка аналитики

### Google Analytics 4

```javascript
// Базовая настройка GA4
gtag("config", "G-XXXXXXXXXX", {
  cookie_domain: "clinic-website.ru",
  cookie_flags: "SameSite=None;Secure",
});

// Отслеживание ключевых событий
function trackAppointmentBooking(doctor_id, service_id) {
  gtag("event", "appointment_booking_started", {
    custom_doctor_id: doctor_id,
    custom_service_id: service_id,
    value: 1,
  });
}

function trackFormSubmission(form_type) {
  gtag("event", "form_submission", {
    custom_form_type: form_type,
    value: 1,
  });
}

function trackPhoneClick() {
  gtag("event", "phone_click", {
    event_category: "contact",
    event_label: "header_phone",
    value: 1,
  });
}
```

### Яндекс.Метрика

```javascript
// Настройка целей в Яндекс.Метрике
ym(XXXXXXXX, "reachGoal", "appointment_form_submit");
ym(XXXXXXXX, "reachGoal", "phone_call");
ym(XXXXXXXX, "reachGoal", "contact_form_submit");

// Параметры визитов
ym(XXXXXXXX, "params", {
  user_type: "new_patient", // или 'returning_patient'
  referral_source: "google_organic",
  landing_page: window.location.pathname,
});
```

### Настройка конверсий

```python
# Django view для отслеживания конверсий
from django.shortcuts import render
from django.http import JsonResponse

def appointment_success(request):
    # Отправка события в аналитику
    context = {
        'conversion_data': {
            'event': 'appointment_completed',
            'appointment_id': request.session.get('appointment_id'),
            'doctor_specialization': request.session.get('doctor_specialization'),
            'service_category': request.session.get('service_category')
        }
    }
    return render(request, 'appointments/success.html', context)
```

---

## 📈 KPI и метрики для отслеживания

### Основные KPI

```json
{
  "traffic_metrics": {
    "organic_traffic": {
      "target": "+30% за 6 месяцев",
      "current": "baseline",
      "measurement": "GA4 Acquisition > Traffic acquisition"
    },
    "local_search_visibility": {
      "target": "ТОП-3 по основным запросам",
      "measurement": "Google Search Console + SE Ranking"
    },
    "page_speed": {
      "target": "< 3 сек на мобильных",
      "measurement": "PageSpeed Insights, GTmetrix"
    }
  },
  "conversion_metrics": {
    "appointment_conversion": {
      "target": "8-12% от посетителей",
      "measurement": "GA4 Events > appointment_booking_completed"
    },
    "phone_calls": {
      "target": "3-5% от посетителей",
      "measurement": "CallTracking или GA4 phone_click events"
    },
    "form_submissions": {
      "target": "2-4% от посетителей",
      "measurement": "GA4 Events > form_submission"
    }
  },
  "engagement_metrics": {
    "session_duration": {
      "target": "> 2 минут",
      "measurement": "GA4 Reports > Engagement"
    },
    "bounce_rate": {
      "target": "< 60%",
      "measurement": "GA4 Reports > Engagement"
    },
    "pages_per_session": {
      "target": "> 2.5 страниц",
      "measurement": "GA4 Reports > Engagement"
    }
  }
}
```

### Отчётность

```python
# Еженедельный отчёт по метрикам
WEEKLY_REPORT_METRICS = {
    'organic_traffic': 'Органический трафик',
    'appointment_bookings': 'Количество записей',
    'phone_calls': 'Звонки с сайта',
    'top_pages': 'Популярные страницы',
    'top_keywords': 'Ключевые слова',
    'conversion_rate': 'Конверсия в запись'
}
```

---

## 📝 Контентная стратегия

### Примеры оптимизированного контента

#### Hero-секция главной страницы

```html
<section class="hero">
  <h1>
    Медицинский центр «[Название]» в [Городе] — современная медицина рядом с
    вами
  </h1>
  <p class="lead">
    Опытные врачи, новейшее оборудование и индивидуальный подход к каждому
    пациенту. Записывайтесь на приём онлайн — это быстро и удобно!
  </p>

  <div class="hero-benefits">
    <div class="benefit">
      <span class="icon">⏰</span>
      <span>Запись за 30 секунд</span>
    </div>
    <div class="benefit">
      <span class="icon">👨‍⚕️</span>
      <span>15+ опытных врачей</span>
    </div>
    <div class="benefit">
      <span class="icon">🏥</span>
      <span>Современное оборудование</span>
    </div>
  </div>

  <div class="cta-buttons">
    <button class="btn btn-primary" onclick="openAppointmentForm()">
      Записаться на приём
    </button>
    <a href="tel:+7XXXXXXXXXX" class="btn btn-outline"> Позвонить сейчас </a>
  </div>
</section>
```

#### Meta title и description для ключевых страниц

```
Главная страница:
Title: Медицинский центр [Название] в [Городе] — запись к врачу онлайн
Description: ✅ Современная клиника с опытными врачами ✅ Запись онлайн за 30 секунд ✅ УЗИ, анализы, консультации ☎️ +7 (XXX) XXX-XX-XX

Услуги:
Title: Медицинские услуги в клинике [Название] — цены и запись онлайн
Description: Полный спектр медицинских услуг: терапия, кардиология, УЗИ, анализы. Современное оборудование, опытные врачи. Запись онлайн!

Врачи:
Title: Врачи медицинского центра [Название] — опыт, квалификация, отзывы
Description: Команда опытных врачей различных специальностей. Высокая квалификация, современные методы лечения. Записывайтесь на консультацию!

Контакты:
Title: Контакты медицинского центра [Название] — адрес, телефон, режим работы
Description: 📍 Адрес: [адрес] ☎️ Телефон: +7 (XXX) XXX-XX-XX ⏰ Режим: пн-пт 8:00-20:00. Удобное расположение, парковка.
```

---

## 🎨 Дизайн для конверсии

### Принципы конверсионного дизайна

1. **Доверие превыше всего**

   - Фотографии настоящих врачей
   - Дипломы и сертификаты
   - Отзывы пациентов с фото
   - Лицензии и аккредитации

2. **Простота навигации**

   - Максимум 3 клика до записи
   - Видимая кнопка записи на всех страницах
   - Хлебные крошки
   - Поиск по сайту

3. **Срочность и дефицит**
   - "Ближайшая свободная запись: завтра 14:00"
   - "Осталось 3 места на эту неделю"
   - "Акция действует до конца месяца"

### CTA элементы

```html
<!-- Основная CTA -->
<button class="cta-primary" onclick="openBookingModal()">
  <span class="icon">📅</span>
  Записаться на приём
  <small>Ответим в течение 15 минут</small>
</button>

<!-- Вторичная CTA -->
<a href="tel:+7XXXXXXXXXX" class="cta-secondary">
  <span class="icon">📞</span>
  Позвонить сейчас
  <small>Пн-Пт: 8:00-20:00</small>
</a>

<!-- Soft CTA -->
<button class="cta-soft" onclick="showPriceCalculator()">
  <span class="icon">💰</span>
  Узнать стоимость услуг
</button>
```

---

## 📱 Мобильная оптимизация

### Технические требования

```css
/* Адаптивный дизайн */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 24px;
    line-height: 1.3;
  }

  .cta-buttons {
    flex-direction: column;
    gap: 12px;
  }

  .appointment-form {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
  }
}

/* Улучшение взаимодействия на мобильных */
.phone-link {
  font-size: 18px;
  padding: 12px;
  display: block;
  text-align: center;
  background: #007bff;
  color: white;
  text-decoration: none;
  position: sticky;
  bottom: 0;
}
```

### AMP для медицинских страниц (опционально)

```html
<!doctype html>
<html ⚡>
  <head>
    <meta charset="utf-8" />
    <title>Кардиолог в [Городе] — консультация и диагностика</title>
    <link
      rel="canonical"
      href="https://clinic-website.ru/doctors/cardiologist/"
    />
    <meta
      name="viewport"
      content="width=device-width,minimum-scale=1,initial-scale=1"
    />
    <style amp-boilerplate>
      ...
    </style>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
  </head>
  <body>
    <article>
      <h1>Врач-кардиолог [ФИО]</h1>
      <amp-img
        src="/images/doctor-photo.jpg"
        width="300"
        height="200"
        layout="responsive"
        alt="Фото врача-кардиолога"
      >
      </amp-img>
      <!-- Контент статьи -->
    </article>
  </body>
</html>
```

---

## 🎯 Контекстная реклама

### Рекомендуемые кампании

#### Google Ads

```
Кампания 1: Поиск по брендовым запросам
- [название клиники]
- [название клиники] отзывы
- медицинский центр [название]

Кампания 2: Услуги
- врач терапевт [город]
- кардиолог [город]
- УЗИ [район]
- анализы сдать [город]

Кампания 3: Срочные запросы
- врач на дом [город]
- медицинская помощь срочно
- запись к врачу сегодня
```

#### Яндекс.Директ

```
Группа 1: Общие медицинские услуги
- медицинский центр
- частная клиника
- платный врач

Группа 2: Конкретные специалисты
- кардиолог
- гастроэнтеролог
- терапевт

Группа 3: Диагностика
- УЗИ
- анализы
- обследование
```

### Посадочные страницы для рекламы

```python
# URL структура для landing pages
urls = [
    '/landing/terapevt/',     # Для рекламы терапевта
    '/landing/kardiolog/',    # Для рекламы кардиолога
    '/landing/uzi/',          # Для рекламы УЗИ
    '/landing/analizy/',      # Для рекламы анализов
]

# Каждая landing page содержит:
# - Заголовок с ключевым словом
# - Описание услуги
# - Цену
# - Форму записи
# - Отзывы
# - FAQ
```

---

## 📧 Email маркетинг

### Автоматические письма

```python
EMAIL_CAMPAIGNS = {
    'appointment_confirmation': {
        'trigger': 'После записи на приём',
        'subject': 'Подтверждение записи в медицинский центр [Название]',
        'template': 'emails/appointment_confirmation.html'
    },
    'appointment_reminder': {
        'trigger': 'За 24 часа до приёма',
        'subject': 'Напоминание о приёме завтра в [время]',
        'template': 'emails/appointment_reminder.html'
    },
    'post_appointment': {
        'trigger': 'Через 2 дня после приёма',
        'subject': 'Как прошёл ваш визит? Оставьте отзыв',
        'template': 'emails/post_appointment.html'
    },
    'birthday_wishes': {
        'trigger': 'В день рождения пациента',
        'subject': 'С днём рождения! Скидка 15% на медосмотр',
        'template': 'emails/birthday_offer.html'
    }
}
```

### Сегментация пациентов

```python
PATIENT_SEGMENTS = {
    'new_patients': 'Новые пациенты (первый визит)',
    'regular_patients': 'Постоянные пациенты (>3 визитов)',
    'inactive_patients': 'Неактивные (нет визитов >6 месяцев)',
    'vip_patients': 'VIP пациенты (высокий чек)',
    'specialty_patients': {
        'cardiology': 'Пациенты кардиолога',
        'gastroenterology': 'Пациенты гастроэнтеролога'
    }
}
```

Эта комплексная стратегия обеспечит эффективное продвижение медицинского сайта и достижение поставленных KPI по привлечению пациентов.
