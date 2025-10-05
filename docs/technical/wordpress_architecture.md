# ТЕХНИЧЕСКАЯ АРХИТЕКТУРА WORDPRESS РЕШЕНИЯ

**Проект:** Сайт медицинской клиники «Пчёлка»
**Дата:** 5 октября 2025
**Версия:** 1.0

---

## 🏗️ ОБЩАЯ АРХИТЕКТУРА

```
┌─────────────────────────────────────────────────────────────┐
│                     ПОЛЬЗОВАТЕЛИ                            │
│  (Посетители сайта, Администратор клиники)                  │
└────────────────────┬────────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────────┐
│                   FRONTEND LAYER                             │
│  ┌──────────────┐  ┌───────────────┐  ┌──────────────────┐  │
│  │ Public Site  │  │ Admin Panel   │  │ Mobile Responsive│  │
│  │ (Theme)      │  │ (WordPress    │  │ Design           │  │
│  │              │  │  Backend)     │  │                  │  │
│  └──────────────┘  └───────────────┘  └──────────────────┘  │
└────────────────────┬────────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────────┐
│                 WORDPRESS CORE                               │
│  ┌──────────┐ ┌──────────┐ ┌─────────┐ ┌──────────────────┐│
│  │ WordPress│ │  Themes  │ │ Plugins │ │ Custom Post      ││
│  │   6.4+   │ │ MediPlus │ │         │ │ Types            ││
│  └──────────┘ └──────────┘ └─────────┘ └──────────────────┘│
└────────────────────┬────────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────────┐
│                   DATABASE LAYER                             │
│  ┌───────────────────────────────────────────────────────┐  │
│  │  MySQL 8.0+                                           │  │
│  │  - wp_posts (Страницы, Услуги, Врачи, Новости)       │  │
│  │  - wp_postmeta (Кастомные поля)                       │  │
│  │  - wp_users (Администраторы)                          │  │
│  │  - wp_options (Настройки сайта)                       │  │
│  └───────────────────────────────────────────────────────┘  │
└────────────────────┬────────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────────┐
│                  INFRASTRUCTURE                              │
│  ┌──────────────────┐ ┌──────────────┐ ┌─────────────────┐ │
│  │ Sprinthost       │ │ SSL/TLS      │ │ Backup System   │ │
│  │ Shared Hosting   │ │ Let's Encrypt│ │ (Daily)         │ │
│  └──────────────────┘ └──────────────┘ └─────────────────┘ │
└─────────────────────────────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────────┐
│              EXTERNAL INTEGRATIONS                           │
│  ┌───────────┐ ┌───────────┐ ┌─────────────┐ ┌──────────┐ │
│  │ WhatsApp  │ │ Yandex    │ │ Google      │ │ Yandex   │ │
│  │ Business  │ │ Maps      │ │ Analytics   │ │ Metrika  │ │
│  └───────────┘ └───────────┘ └─────────────┘ └──────────┘ │
└─────────────────────────────────────────────────────────────┘
```

---

## 💻 ТЕХНИЧЕСКИЙ СТЕК

### Основные компоненты

| Компонент | Технология | Версия | Назначение |
|-----------|-----------|--------|------------|
| **CMS** | WordPress | 6.4+ | Система управления контентом |
| **Язык** | PHP | 8.0+ | Серверный язык |
| **БД** | MySQL | 8.0+ | Хранение данных |
| **Веб-сервер** | Apache/LiteSpeed | 2.4+ | HTTP сервер |
| **Frontend** | HTML5/CSS3/JS | ES6+ | Клиентская часть |
| **Page Builder** | Elementor Pro | 3.16+ | Визуальный редактор |
| **Тема** | MediPlus | Latest | Медицинская тема |

---

## 🎨 FRONTEND АРХИТЕКТУРА

### Структура темы

```
wp-content/themes/mediplus/
├── style.css                # Основные стили темы
├── functions.php            # Функции темы
├── header.php               # Шапка сайта
├── footer.php               # Подвал сайта
├── index.php                # Главная страница
├── page.php                 # Шаблон страниц
├── single-services.php      # Шаблон услуги
├── single-doctors.php       # Шаблон врача
├── archive-services.php     # Каталог услуг
├── template-parts/
│   ├── hero.php             # Hero-секция
│   ├── services-grid.php    # Сетка услуг
│   └── doctors-list.php     # Список врачей
├── assets/
│   ├── css/
│   │   ├── main.css         # Основные стили
│   │   ├── responsive.css   # Адаптивность
│   │   └── custom.css       # Кастомные стили (желтый цвет)
│   ├── js/
│   │   ├── main.js          # Основные скрипты
│   │   ├── forms.js         # Обработка форм
│   │   └── maps.js          # Интеграция с картами
│   └── images/
│       ├── logo.png         # Логотип
│       └── icons/           # Иконки услуг
└── inc/
    ├── custom-post-types.php # Регистрация CPT
    ├── customizer.php        # Настройки темы
    └── widgets.php           # Виджеты
```

### Адаптивность

**Breakpoints:**
```css
/* Mobile First подход */
/* Mobile: 320px - 767px (default) */

/* Tablet: 768px - 1023px */
@media (min-width: 768px) { ... }

/* Desktop: 1024px - 1439px */
@media (min-width: 1024px) { ... }

/* Large Desktop: 1440px+ */
@media (min-width: 1440px) { ... }
```

**Тестирование:**
- iPhone 12/13/14 (390x844)
- iPad (768x1024)
- Desktop (1920x1080)

---

## 🔧 ПЛАГИНЫ И РАСШИРЕНИЯ

### Обязательные плагины

#### 1. Безопасность

**Wordfence Security**
- Цель: Защита от взломов, firewall
- Настройки:
  - Firewall: Включен (расширенный режим)
  - Сканирование: Ежедневное
  - Двухфакторная аутентификация: Включена
  - Rate limiting: 20 попыток входа за 5 минут

**iThemes Security**
- Цель: Дополнительная защита
- Настройки:
  - Переименование wp-login.php
  - Блокировка подозрительных IP
  - Отключение XML-RPC

#### 2. Производительность

**WP Super Cache**
- Цель: Кэширование страниц
- Настройки:
  - Простое кэширование: Включено
  - Gzip сжатие: Включено
  - Время жизни кэша: 1800 секунд
  - Исключения: /wp-admin/*, *.php

**Smush Image Compression**
- Цель: Оптимизация изображений
- Настройки:
  - Автоматическое сжатие при загрузке: Включено
  - Lazy loading: Включен
  - WebP конвертация: Включена

#### 3. Функциональность

**Contact Form 7**
- Цель: Формы обратной связи
- Формы:
  1. Задать вопрос
  2. Заказать звонок
  3. Записаться на прием (упрощенная без календаря)

**Elementor Pro**
- Цель: Визуальный редактор страниц
- Использование:
  - Главная страница
  - Шаблоны услуг
  - Лендинги акций

**Advanced Custom Fields (ACF)**
- Цель: Кастомные поля для услуг и врачей
- Группы полей:
  - Услуги: Цена, длительность, курс, показания
  - Врачи: Специализация, опыт, образование, фото

**Custom Post Type UI**
- Цель: Создание кастомных типов записей
- Типы:
  - Services (Услуги)
  - Doctors (Врачи)
  - Promotions (Акции)

#### 4. SEO

**Yoast SEO**
- Цель: SEO-оптимизация
- Настройки:
  - XML Sitemap: Включен
  - Schema.org разметка: Medical Organization
  - Хлебные крошки: Включены
  - Open Graph: Включен

**Google XML Sitemaps**
- Цель: Генерация карты сайта
- Настройки:
  - Приоритет главной: 1.0
  - Приоритет услуг: 0.8
  - Обновление: при изменении контента

#### 5. Интеграции

**Click to Chat**
- Цель: WhatsApp интеграция
- Настройки:
  - Номер телефона: +7 XXX XXX XX XX
  - Приветственное сообщение: "Здравствуйте! Хочу узнать о..."
  - Позиция кнопки: Справа снизу

**MonsterInsights (Google Analytics)**
- Цель: Подключение аналитики
- Отслеживание:
  - Просмотры страниц
  - Клики по формам
  - Клики по телефону
  - Клики по WhatsApp

**WP Mail SMTP**
- Цель: Надежная отправка email
- Настройки:
  - SMTP провайдер: Gmail / Mailgun
  - From email: info@vasha-klinika.ru
  - From name: Клиника "Пчёлка"

#### 6. Дополнительные

**Redirection**
- Цель: Управление редиректами
- Использование: 301 редиректы при изменении URL

**UpdraftPlus**
- Цель: Резервное копирование
- Настройки:
  - Частота: Ежедневно
  - Хранение: Google Drive / Dropbox
  - Бэкапы БД: Включено
  - Бэкапы файлов: Включено

---

## 🗄️ СТРУКТУРА БАЗЫ ДАННЫХ

### Основные таблицы

```sql
wp_posts
├── ID
├── post_title           # Название
├── post_content         # Содержимое
├── post_type            # page / services / doctors / promotions
├── post_status          # publish / draft
└── post_date

wp_postmeta
├── meta_id
├── post_id              # Связь с wp_posts
├── meta_key             # Ключ (price, duration, specialization)
└── meta_value           # Значение

wp_users
├── ID
├── user_login           # admin
├── user_pass            # Хэш пароля
└── user_email

wp_options
├── option_id
├── option_name          # site_url, admin_email, и т.д.
└── option_value

wp_cf7_contact_form
└── Хранение форм Contact Form 7

wp_cf7_submissions
└── Заявки с форм
```

### Кастомные мета-поля

**Для услуг (Services):**
```
service_price          # Цена (число)
service_duration       # Длительность сеанса (текст)
service_course         # Курс процедур (текст)
service_frequency      # Периодичность (текст)
service_indications    # Показания (текст)
service_effect         # Эффект (текст)
service_contraindications # Противопоказания (текст)
service_icon           # Иконка (attachment ID)
```

**Для врачей (Doctors):**
```
doctor_specialization  # Специализация (текст)
doctor_experience      # Опыт работы (число, лет)
doctor_education       # Образование (текст)
doctor_photo           # Фото (attachment ID)
doctor_certificates    # Сертификаты (галерея)
doctor_schedule        # Расписание (текст)
```

---

## 🔐 БЕЗОПАСНОСТЬ

### Меры защиты

#### 1. Уровень сервера
- SSL/TLS сертификат (Let's Encrypt)
- HTTPS редирект (301)
- Firewall (Wordfence)
- Rate limiting на wp-login.php

#### 2. Уровень WordPress
- Сильные пароли (12+ символов)
- Двухфакторная аутентификация
- Ограничение попыток входа
- Скрытие версии WordPress
- Отключение XML-RPC
- Отключение file editing в админке

#### 3. Защита данных
- Регулярные бэкапы (ежедневно)
- Шифрование паролей (bcrypt)
- Защита от SQL-инъекций (prepared statements)
- Валидация и санитизация форм

#### 4. Мониторинг
- Логирование входов
- Уведомления о подозрительной активности
- Сканирование на вирусы (Wordfence)

### Конфигурация wp-config.php

```php
// Защита от изменения файлов через админку
define('DISALLOW_FILE_EDIT', true);

// Уникальные ключи безопасности
define('AUTH_KEY',         'уникальная-строка');
define('SECURE_AUTH_KEY',  'уникальная-строка');
// ... и т.д.

// Ограничение ревизий
define('WP_POST_REVISIONS', 5);

// Автосохранение раз в 5 минут
define('AUTOSAVE_INTERVAL', 300);

// Включение отладки (только на dev)
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
```

---

## 🚀 ПРОИЗВОДИТЕЛЬНОСТЬ

### Оптимизация

#### 1. Кэширование
- **Страниц:** WP Super Cache (HTML кэш)
- **Объектов:** Redis (опционально, при необходимости)
- **Браузера:** .htaccess настройки (7 дней для статики)

#### 2. Изображения
- Автоматическое сжатие при загрузке (Smush)
- Генерация WebP версий
- Lazy loading (отложенная загрузка)
- Responsive images (srcset)

#### 3. Файлы (CSS/JS)
- Минификация CSS/JS
- Объединение файлов (при возможности)
- Async/Defer для скриптов
- Удаление неиспользуемых плагинов

#### 4. База данных
- Очистка ревизий (WP-Optimize)
- Оптимизация таблиц (еженедельно)
- Индексы на часто запрашиваемые поля

### Целевые метрики

| Метрика | Целевое значение |
|---------|-----------------|
| PageSpeed Score (Mobile) | 80+ |
| PageSpeed Score (Desktop) | 90+ |
| First Contentful Paint | < 1.8s |
| Time to Interactive | < 3.8s |
| Total Page Size | < 2MB |
| Requests | < 50 |

---

## 🔄 BACKUP И ВОССТАНОВЛЕНИЕ

### Стратегия бэкапов

**Частота:**
- База данных: Ежедневно
- Файлы (wp-content): Еженедельно
- Полный бэкап: Ежемесячно

**Хранение:**
- Локально: 7 дней
- Google Drive: 30 дней
- Долгосрочное хранение: 6 месяцев

**Что включать:**
- База данных MySQL
- /wp-content/uploads/ (изображения)
- /wp-content/plugins/ (плагины)
- /wp-content/themes/ (темы)
- wp-config.php (конфигурация)

**Процедура восстановления:**
1. Загрузка бэкапа из хранилища
2. Импорт базы данных через phpMyAdmin
3. Восстановление файлов через FTP
4. Проверка корректности работы
5. Обновление URL (если изменился)

---

## 📊 МОНИТОРИНГ И АНАЛИТИКА

### Инструменты мониторинга

**Uptime мониторинг:**
- UptimeRobot (бесплатный)
- Проверка каждые 5 минут
- Уведомления на email при простое

**Производительность:**
- Google PageSpeed Insights
- GTmetrix (еженедельно)
- Pingdom Tools

**Безопасность:**
- Wordfence сканирование (ежедневно)
- Проверка SSL сертификата (ежемесячно)
- Анализ логов (еженедельно)

### Аналитика

**Google Analytics 4:**
- Просмотры страниц
- Источники трафика
- Демография посетителей
- События (клики по формам, телефону)

**Яндекс.Метрика:**
- Карта кликов
- Запись сеансов
- Вебвизор
- Цели (отправка форм)

**Отслеживаемые цели:**
1. Отправка формы "Задать вопрос"
2. Отправка формы "Заказать звонок"
3. Клик по кнопке WhatsApp
4. Клик по номеру телефона
5. Просмотр контактов

---

## 🔌 ВНЕШНИЕ ИНТЕГРАЦИИ

### 1. WhatsApp Business

```
Плагин: Click to Chat
Номер: +7 XXX XXX XX XX
Приветствие: "Здравствуйте! Я хочу узнать о..."
Позиция: Справа снизу (fixed button)
```

### 2. Яндекс.Карты

```html
<script src="https://api-maps.yandex.ru/2.1/?apikey=YOUR_API_KEY&lang=ru_RU"></script>
<div id="map" style="width: 100%; height: 400px"></div>
<script>
ymaps.ready(init);
function init(){
    var myMap = new ymaps.Map("map", {
        center: [55.751574, 37.573856], // Координаты клиники
        zoom: 16
    });
    var myPlacemark = new ymaps.Placemark([55.751574, 37.573856], {
        balloonContent: 'Клиника "Пчёлка"'
    });
    myMap.geoObjects.add(myPlacemark);
}
</script>
```

### 3. Яндекс.Отзывы

```html
<div class="yandex-reviews-widget"></div>
<script src="https://yandex.ru/maps-reviews-widget/1.0/widget.js"></script>
<script>
  window.YandexReviewsWidget.renderWidget({
    clusterSlug: 'клиника-пчёлка',
    reviewsLimit: 5
  });
</script>
```

### 4. Google Analytics / Яндекс.Метрика

```
GA4 Measurement ID: G-XXXXXXXXXX
Яндекс.Метрика ID: XXXXXXXX
```

---

## 📱 МОБИЛЬНАЯ ВЕРСИЯ

### Адаптивные элементы

**Меню:**
- Hamburger menu на < 768px
- Sticky header при прокрутке
- Кнопка "Позвонить" всегда видна

**Формы:**
- Увеличенные поля ввода (min-height: 44px)
- Крупные кнопки (min-height: 48px)
- Автофокус на первом поле (опционально)

**Контент:**
- Одноколоночная сетка на мобильных
- Увеличенный шрифт (16px+)
- Увеличенные межстрочные интервалы

**Изображения:**
- Responsive images (srcset)
- Lazy loading
- WebP формат с fallback

---

## 🎯 SEO АРХИТЕКТУРА

### URL структура

```
Главная: /
О клинике: /about/
Услуги: /services/
├── Диагностика: /services/category/diagnostika/
│   └── УЗИ: /services/uzi/
├── Физиотерапия: /services/category/fizioterapiya/
│   └── ЛФК: /services/lfk/
└── Консультации: /services/category/konsultatsii/
    └── Травматолог: /services/travmatolog/
Врачи: /doctors/
Акции: /promotions/
Новости: /news/
Контакты: /contacts/
```

### Schema.org разметка

**MedicalOrganization:**
```json
{
  "@context": "https://schema.org",
  "@type": "MedicalClinic",
  "name": "Клиника Пчёлка",
  "url": "https://www.vasha-klinika.ru",
  "telephone": "+7-XXX-XXX-XX-XX",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "...",
    "addressLocality": "...",
    "postalCode": "...",
    "addressCountry": "RU"
  },
  "openingHours": "Mo-Fr 09:00-20:00, Sa-Su 10:00-18:00"
}
```

---

**Документ готов к использованию для разработки WordPress решения.**
