---
layout: documentation
title: "Документация проекта"
nav_title: "Документация проекта"
description: "Комплект документации для разработки сайта медицинской клиники"
icon: "📋"
permalink: /readme/
---

# 📋 КОМПЛЕКТ ДОКУМЕНТАЦИИ ДЛЯ РАЗРАБОТКИ САЙТА МЕДИЦИНСКОЙ КЛИНИКИ

Полная техническая и коммерческая документация для создания современного сайта медицинской клиники **"ПЧЕЛА МЕДИК"** (сокращенно: "Пчёлка").

**О названии клиники:**
- **Официальное название:** "ПЧЕЛА МЕДИК" (из логотипа)
- **Сокращенное/разговорное:** "Пчёлка" (используется в документации)
- Оба варианта корректны и используются взаимозаменяемо

## 📁 Структура документации

### 💼 Бизнес-документация (`/business`)

- **[brief.md](./business/brief.md)** - Коммерческий бриф (обновлен под клинику "Пчёлка")
- **[client_analysis.md](./business/client_analysis.md)** - Детальный анализ ответов клиента
- **[client_questions.md](./business/client_questions.md)** - 26 вопросов клиенту (с ответами)
- **[additional_questions.md](./business/additional_questions.md)** - Дополнительные уточняющие вопросы
- **[services_catalog.md](./business/services_catalog.md)** - Каталог услуг (23 позиции в 3 категориях) ⭐ **ОБНОВЛЕНО**
- **[wordpress_lite_mvp_estimate.md](./business/wordpress_lite_mvp_estimate.md)** - Детальная смета (18 дней)
- **[project_data.json](./business/project_data.json)** - Машиночитаемые данные проекта

### 🔧 Техническая архитектура (`/technical`)

- **[wordpress_solution.md](./technical/wordpress_solution.md)** - Обоснование выбора WordPress вместо Django ⭐ **НОВОЕ**
- **[wordpress_architecture.md](./technical/wordpress_architecture.md)** - Техническая архитектура WordPress решения ⭐ **НОВОЕ**
- **[technical_architecture.md](./technical/technical_architecture.md)** - Архитектура Django (для справки)
- **[cms_comparison.md](./technical/cms_comparison.md)** - Сравнение Django CMS vs Wagtail vs WordPress
- **[security_compliance.md](./technical/security_compliance.md)** - Безопасность и соответствие GDPR/152-ФЗ

### 🎨 Дизайн и UX (`/design`)

- **[branding_guidelines.md](./design/branding_guidelines.md)** - Гайд по брендингу клиники "Пчёлка" ⭐ **НОВОЕ**
- **[ux_design_requirements.md](./design/ux_design_requirements.md)** - UX/UI требования, адаптивность, доступность

### 👩‍💻 Разработка (`/development`)

- **[tasks_estimates.md](./development/tasks_estimates.md)** - Детальная WBS и 4 сценария бюджета (добавлен WordPress Lite MVP) ⭐ **ОБНОВЛЕНО**
- **[brd_prd_frd_templates.md](./development/brd_prd_frd_templates.md)** - Шаблоны BRD/PRD/FRD для дальнейшей работы

### 🚀 Деплой и маркетинг (`/deployment`)

- **[wordpress_setup_checklist.md](./deployment/wordpress_setup_checklist.md)** - Чек-лист установки WordPress на Sprinthost ⭐ **НОВОЕ**
- **[testing_acceptance.md](./deployment/testing_acceptance.md)** - Acceptance criteria, тест-кейсы, чек-лист приёмки
- **[seo_marketing.md](./deployment/seo_marketing.md)** - SEO стратегия, аналитика, контент-план

## 🎯 Ключевые результаты анализа

### 💰 Оценки времени и бюджета

| Сценарий | Дни | Недели | Уверенность | Описание | Статус |
| -------- | --- | ------ | ----------- | -------- | ------ |
| **WordPress Lite MVP** ⭐ | 18 | 3-4 | 85% | **РЕКОМЕНДУЕТСЯ** для "Пчёлка" | ✅ Утверждено |
| **Django MVP** | 45 | 6 | 75% | Минимально релизный продукт | Для справки |
| **Standard** | 65 | 9 | 80% | Полнофункциональный вариант | Для справки |
| **Premium** | 90 | 12 | 70% | Расширенный функционал | Для справки |

### 🏆 Рекомендации для клиники "Пчёлка"

- **CMS:** WordPress 6.4+ (простота для клиента без технических навыков)
- **Тема:** MediPlus (готовая медицинская тема)
- **Архитектура:** WordPress + MySQL + Apache/LiteSpeed
- **Хостинг:** Sprinthost (имеется у клиента)
- **Приоритет:** **WordPress Lite MVP** (18 дней, экономия 60% vs Django)
- **Почему WordPress:** Клиент не знает что такое CMS, отказался от онлайн-записи, ограниченный бюджет

## 🚀 Следующие шаги

### Для старта разработки нужно:

1. ✅ **Ответы на вопросы** получены - см. [client_analysis.md](./business/client_analysis.md)
2. ✅ **CMS решение выбрано** - WordPress (обоснование в [wordpress_solution.md](./technical/wordpress_solution.md))
3. ✅ **Scope определен** - WordPress Lite MVP (18 дней)
4. ⏳ **Дополнительные вопросы** - см. [additional_questions.md](./business/additional_questions.md)
   - ✅ Логотип получен (logo1.png, logo1.pdf)
   - ✅ Цвета определены (#C9A961 темно-золотой, #000000 черный)
   - ⏳ Контактные данные
   - ⏳ Прайс-лист

> **Детальная смета:** см. [wordpress_lite_mvp_estimate.md](./business/wordpress_lite_mvp_estimate.md)
> **Срок реализации:** 18 дней = 3-4 недели

## 📊 Структура команды

| Роль | WordPress Lite MVP (дни) | Django MVP (дни) | Standard (дни) |
| ---- | ------------------------ | ---------------- | -------------- |
| PM | 2 | 4 | 6 |
| Дизайнер | 3 | 8 | 13 |
| WordPress Developer | 8 | - | - |
| Backend (Django) | - | 10 | 16 |
| Frontend | - | 12 | 17 |
| Copywriter (SEO) | 2 | 4 | 6 |
| QA | 2 | 4 | 6 |
| DevOps | 1 | 3 | 3 |
| **ИТОГО** | **18 дней** | **45 дней** | **67 дней** |

## 🎨 Ключевые особенности проекта "Пчёлка"

### ✅ Must Have функции (Входит в WordPress Lite MVP)

- ✅ Каталог услуг (23 позиции в 3 категориях)
- ✅ Раздел "Врачи" (3-4 специалиста)
- ✅ Формы обратной связи ("Задать вопрос", "Заказать звонок")
- ✅ WhatsApp интеграция
- ✅ Адаптивный дизайн (Mobile-first)
- ✅ SEO-оптимизация для локального поиска
- ✅ Интеграция с Яндекс.Картами
- ✅ Яндекс.Отзывы виджет
- ✅ Google Analytics + Яндекс.Метрика

### ❌ НЕ нужно (по требованию клиента)

- ❌ ~~Система онлайн-записи на приём~~ (Клиент отказался)
- ❌ ~~Онлайн-платежи~~ (Не требуется)
- ❌ ~~Личный кабинет пациента~~ (Не требуется)
- ❌ ~~Телемедицина~~ (Не требуется)
- ❌ ~~Мобильное приложение~~ (Не требуется)
- ❌ ~~Интеграция с 1С/CRM~~ (Не требуется)

**Примечание:** Все эти функции можно добавить позже, если потребуется.

## 🛡️ Безопасность и соответствие

### Обязательные требования

- **HTTPS** и SSL-сертификаты
- **GDPR/152-ФЗ** соответствие
- **Cookie consent** и политика конфиденциальности
- **Шифрование** персональных данных
- **Аудит** и логирование действий

### Медицинские данные (PHI)

- Особая защита записей пациентов
- Согласие на обработку медицинских данных
- Право на удаление данных
- Регулярное резервное копирование

## 📈 Ожидаемые результаты

### KPI через 6 месяцев

- **Увеличение записей:** +30%
- **Конверсия сайта:** 8-12%
- **Органический трафик:** +40%
- **Снижение нагрузки на телефон:** до 60%

### Технические метрики

- **Скорость загрузки:** < 3 секунд
- **Мобильный трафик:** 60%+
- **Доступность:** 99.5%
- **PageSpeed Score:** 85+

---

## 🆕 ИЗМЕНЕНИЯ В ВЕРСИИ 2.0 (5 октября 2025)

### Добавлено:
- ✅ Анализ ответов клиента "Пчёлка" ([client_analysis.md](./business/client_analysis.md))
- ✅ Обоснование выбора WordPress ([wordpress_solution.md](./technical/wordpress_solution.md))
- ✅ Техническая архитектура WordPress ([wordpress_architecture.md](./technical/wordpress_architecture.md))
- ✅ Каталог услуг (22 позиции) ([services_catalog.md](./business/services_catalog.md))
- ✅ Гайд по брендингу ([branding_guidelines.md](./design/branding_guidelines.md))
- ✅ Чек-лист установки WordPress ([wordpress_setup_checklist.md](./deployment/wordpress_setup_checklist.md))
- ✅ Детальная смета WordPress Lite MVP ([wordpress_lite_mvp_estimate.md](./business/wordpress_lite_mvp_estimate.md))
- ✅ Дополнительные вопросы клиенту ([additional_questions.md](./business/additional_questions.md))

### Изменено:
- ✅ Обновлен коммерческий бриф под реальность ([brief.md](./business/brief.md))
- ✅ Добавлен сценарий WordPress Lite MVP (18 дней) в оценки ([tasks_estimates.md](./development/tasks_estimates.md))
- ✅ Изменена рекомендация: ~~Django + Wagtail~~ → **WordPress**
- ✅ Изменен приоритетный сценарий: ~~Standard (65 дней)~~ → **WordPress Lite MVP (18 дней)**

### Ключевые выводы:
- 🎯 **Экономия 60% времени**: 18 дней вместо 45 дней (Django MVP)
- 💰 **Снижение бюджета**: WordPress в 2.5 раза дешевле Django
- 👤 **Простота для клиента**: Визуальный редактор вместо сложной админки
- ⚡ **Быстрый запуск**: 3-4 недели вместо 6-8 недель

---

> **Документация подготовлена:** 5 октября 2025
> **Версия:** 2.0 (Обновлено на основе ответов клиента)
> **Статус:** Готова к старту разработки

Для вопросов по техническим деталям обращайтесь к соответствующим разделам документации.