---
layout: documentation
title: "Системная архитектура"
nav_title: "Системная архитектура"
description: "Техническая архитектура медицинского портала с онлайн-записью"
icon: "🏗️"
permalink: /architecture-overview/
mermaid_theme: "default"
footer_text: "Диаграммы построены с помощью Mermaid.js"
---

# 🏗️ Архитектура системы

## 🐍 Backend
**Django-основанная архитектура с REST API для всех интеграций**

- Django 4.2+ (LTS)
- Django REST Framework
- Celery для задач
- Python 3.10+

## 📝 CMS
**Wagtail CMS для управления контентом и структурой сайта**

- Wagtail 5.0+
- StreamField контент
- Многосайтовость
- Встроенные формы

## 🗄️ База данных
**PostgreSQL как основная база с Redis для кеширования**

- PostgreSQL 14+
- Redis 7.0+
- Индексы для поиска
- Бэкапы и репликация

## 🎨 Frontend
**Современный адаптивный интерфейс с прогрессивной загрузкой**

- HTML5/CSS3/ES6+
- Vue.js 3+ / Alpine.js
- Bootstrap 5.3+ / Tailwind
- Progressive enhancement

## 🚀 Инфраструктура
**Масштабируемая инфраструктура с мониторингом и безопасностью**

- Nginx + Gunicorn
- SSL/TLS сертификаты
- Docker контейнеры
- Мониторинг (Sentry)

## 🔧 DevOps
**Автоматизация развертывания и управления окружениями**

- GitHub Actions CI/CD
- Docker Compose
- Автоматические тесты
- Staging среда

## 📊 Диаграмма архитектуры

```mermaid
graph TB
    subgraph "Frontend Layer"
        A[Patient Web Interface] --> B[Admin Dashboard]
        B --> C[Doctor Portal]
    end

    subgraph "Application Layer"
        D[Django Application] --> E[Wagtail CMS]
        E --> F[REST API]
        F --> G[Authentication]
    end

    subgraph "Data Layer"
        H[(PostgreSQL Database)] --> I[(Redis Cache)]
        I --> J[File Storage]
    end

    subgraph "External Services"
        K[SMS Gateway] --> L[Payment Gateway]
        L --> M[Maps API]
        M --> N[Analytics]
    end

    A --> D
    B --> D
    C --> D
    D --> H
    D --> I
    F --> K
    F --> L
    F --> M
    F --> N

    style A fill:#e3f2fd
    style B fill:#e3f2fd
    style C fill:#e3f2fd
    style D fill:#f3e5f5
    style E fill:#f3e5f5
    style F fill:#f3e5f5
    style G fill:#f3e5f5
    style H fill:#e8f5e8
    style I fill:#e8f5e8
    style J fill:#e8f5e8
    style K fill:#fff3e0
    style L fill:#fff3e0
    style M fill:#fff3e0
    style N fill:#fff3e0
```

## 🔗 Внешние интеграции

### 📱 SMS уведомления
SMSC.ru, SMS.ru для отправки напоминаний

### 💳 Онлайн-платежи
ЮKassa, CloudPayments для приема оплаты

### 🗺️ Карты и геолокация
Яндекс.Карты API для навигации

### 📊 Аналитика
Google Analytics 4 + Яндекс.Метрика

### 📧 Email маркетинг
SendGrid, Mailchimp для рассылок

### 📞 CRM интеграция
API для связи с внешними CRM

## 🏥 Модель данных

```mermaid
erDiagram
    User ||--o{ Appointment : books
    User {
        int id PK
        string email
        string phone
        string first_name
        string last_name
        datetime created_at
    }

    Doctor ||--o{ Appointment : receives
    Doctor {
        int id PK
        string name
        string specialization
        text bio
        string photo
        json schedule
        bool is_active
    }

    Service ||--o{ Appointment : for
    Service {
        int id PK
        string name
        text description
        decimal price
        int duration_minutes
        bool is_active
    }

    Clinic ||--o{ Doctor : employs
    Clinic ||--o{ Service : offers
    Clinic {
        int id PK
        string name
        string address
        string phone
        json working_hours
        coordinates location
    }

    Appointment {
        int id PK
        datetime scheduled_time
        string status
        text notes
        decimal price
        datetime created_at
    }

    Review ||--o{ Doctor : rates
    Review ||--o{ User : written_by
    Review {
        int id PK
        int rating
        text comment
        bool is_verified
        datetime created_at
    }
```

## 🛡️ Безопасность и соответствие

### 🔒 Защита данных
- HTTPS everywhere
- Шифрование БД
- Двухфакторная аутентификация
- Регулярные бэкапы

### ⚖️ Соответствие законам
- GDPR compliance
- 152-ФЗ "О персональных данных"
- Cookie consent
- Политика конфиденциальности

### 👁️ Мониторинг
- Логирование всех действий
- Мониторинг производительности
- Алерты о сбоях
- Аудит безопасности

### 🏥 Медицинские данные
- Особая защита PHI
- Согласие на обработку
- Право на удаление
- Аудитируемые действия

## 📈 Производительность

### ⚡ Целевые показатели
- Время загрузки < 3 сек
- Uptime 99.5%
- PageSpeed Score 85+
- 500+ одновременных пользователей

### 🚀 Оптимизации
- Redis кеширование
- CDN для статики
- Lazy loading изображений
- Минификация CSS/JS