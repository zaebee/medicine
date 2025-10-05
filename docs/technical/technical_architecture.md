---
layout: documentation
title: "Технический каркас и архитектура"
nav_title: "Техническая архитектура"
description: "Технический каркас и архитектура проекта - Backend, Frontend, база данных, интеграции"
icon: "🏗️"
permalink: /technical/technical-architecture/
---

# ТЕХНИЧЕСКИЙ КАРКАС И АРХИТЕКТУРА

## 🏗️ Рекомендуемая архитектура

### Backend Stack

```
Python 3.10+
├── Django 4.2+ (LTS)
├── Django REST Framework 3.14+
├── Wagtail 5.0+ (CMS)
├── PostgreSQL 14+
├── Redis 7.0+ (кэширование, сессии)
└── Celery 5.3+ (асинхронные задачи)
```

### Frontend Stack

```
HTML5/CSS3/JavaScript ES6+
├── Bootstrap 5.3+ или Tailwind CSS
├── Alpine.js или Vue.js 3+ (интерактивность)
├── Webpack или Vite (сборка)
└── SCSS (препроцессор)
```

### Инфраструктура

```
Production Environment
├── Nginx 1.20+ (веб-сервер, proxy)
├── Gunicorn (WSGI сервер)
├── SSL/TLS сертификаты (Let's Encrypt)
├── Docker + Docker Compose (опционально)
└── Мониторинг (Sentry, New Relic)
```

---

## 🗄️ Сущностная модель данных

### Основные таблицы и поля

#### 👤 User (Пользователи)

```python
class User(AbstractUser):
    phone = CharField(max_length=20, unique=True)
    birth_date = DateField(null=True, blank=True)
    gender = CharField(choices=GENDER_CHOICES)
    is_patient = BooleanField(default=True)
    created_at = DateTimeField(auto_now_add=True)
    updated_at = DateTimeField(auto_now=True)
```

#### 🏥 Clinic (Клиники/Филиалы)

```python
class Clinic(models.Model):
    name = CharField(max_length=200)
    address = TextField()
    phone = CharField(max_length=20)
    email = EmailField()
    working_hours = JSONField()  # Расписание работы
    coordinates = JSONField()    # Широта/долгота для карт
    is_active = BooleanField(default=True)
    created_at = DateTimeField(auto_now_add=True)
```

#### 👨‍⚕️ Doctor (Врачи)

```python
class Doctor(models.Model):
    user = OneToOneField(User, on_delete=CASCADE)
    specialization = ForeignKey('Specialization')
    clinic = ForeignKey('Clinic')
    photo = ImageField(upload_to='doctors/')
    bio = TextField()
    experience_years = PositiveIntegerField()
    education = TextField()
    certificates = JSONField(default=list)
    consultation_price = DecimalField(max_digits=10, decimal_places=2)
    is_active = BooleanField(default=True)
    rating = DecimalField(max_digits=3, decimal_places=2, default=0)
    reviews_count = PositiveIntegerField(default=0)
```

#### 🩺 Service (Медицинские услуги)

```python
class Service(models.Model):
    name = CharField(max_length=200)
    description = TextField()
    price = DecimalField(max_digits=10, decimal_places=2)
    duration_minutes = PositiveIntegerField()
    category = ForeignKey('ServiceCategory')
    doctors = ManyToManyField('Doctor', blank=True)
    clinics = ManyToManyField('Clinic')
    is_active = BooleanField(default=True)
    preparation_instructions = TextField(blank=True)
    created_at = DateTimeField(auto_now_add=True)
```

#### 📅 Appointment (Записи на приём)

```python
class Appointment(models.Model):
    patient = ForeignKey(User, on_delete=CASCADE)
    doctor = ForeignKey('Doctor', on_delete=CASCADE)
    service = ForeignKey('Service', on_delete=CASCADE)
    clinic = ForeignKey('Clinic', on_delete=CASCADE)
    appointment_date = DateTimeField()
    status = CharField(choices=STATUS_CHOICES, default='scheduled')
    notes = TextField(blank=True)
    price = DecimalField(max_digits=10, decimal_places=2)
    payment_status = CharField(choices=PAYMENT_CHOICES, default='pending')
    created_at = DateTimeField(auto_now_add=True)
    updated_at = DateTimeField(auto_now=True)

    # Статусы: scheduled, confirmed, completed, cancelled, no_show
    # Оплата: pending, paid, refunded
```

#### ⭐ Review (Отзывы)

```python
class Review(models.Model):
    patient = ForeignKey(User, on_delete=CASCADE)
    doctor = ForeignKey('Doctor', on_delete=CASCADE)
    appointment = ForeignKey('Appointment', null=True, blank=True)
    rating = PositiveIntegerField(validators=[MinValueValidator(1), MaxValueValidator(5)])
    comment = TextField()
    is_verified = BooleanField(default=False)  # Проверенный отзыв
    is_published = BooleanField(default=False)
    created_at = DateTimeField(auto_now_add=True)
    moderated_at = DateTimeField(null=True, blank=True)
```

#### 🏷️ Дополнительные справочники

```python
class Specialization(models.Model):
    name = CharField(max_length=100, unique=True)
    description = TextField(blank=True)
    icon = CharField(max_length=50, blank=True)  # CSS класс иконки

class ServiceCategory(models.Model):
    name = CharField(max_length=100)
    parent = ForeignKey('self', null=True, blank=True)  # Иерархия
    order = PositiveIntegerField(default=0)

class DoctorSchedule(models.Model):
    doctor = ForeignKey('Doctor', on_delete=CASCADE)
    clinic = ForeignKey('Clinic', on_delete=CASCADE)
    day_of_week = PositiveIntegerField()  # 0-6 (понедельник-воскресенье)
    start_time = TimeField()
    end_time = TimeField()
    is_active = BooleanField(default=True)
```

---

## 🔗 Внешние интеграции

### 1. SMS-уведомления

**Рекомендуемые провайдеры:**

- **SMSC.ru** - надёжность, хорошие тарифы
- **SMS.ru** - простота интеграции
- **SmsAero** - современный API

```python
# Пример интеграции
class SMSService:
    def send_appointment_confirmation(self, appointment):
        message = f"Подтверждение записи к {appointment.doctor.user.get_full_name()} на {appointment.appointment_date.strftime('%d.%m.%Y %H:%M')}"
        return self.send_sms(appointment.patient.phone, message)
```

### 2. Платёжные системы

**Рекомендуемые:**

- **Яндекс.Касса (ЮKassa)** - широкий функционал
- **CloudPayments** - удобная интеграция
- **Сбербанк Эквайринг** - надёжность

```python
# Интеграция с платежами
class PaymentService:
    def create_payment(self, appointment, amount):
        return {
            'payment_url': self.provider.create_payment(amount, appointment.id),
            'payment_id': 'unique_payment_id'
        }
```

### 3. Карты и геолокация

```python
# Яндекс.Карты API
YANDEX_MAPS_CONFIG = {
    'api_key': 'your_api_key',
    'default_zoom': 15,
    'cluster_icons': True
}
```

### 4. Аналитика и метрики

```python
# Google Analytics 4 + Яндекс.Метрика
ANALYTICS_CONFIG = {
    'google_analytics_id': 'G-XXXXXXXXXX',
    'yandex_metrika_id': 'XXXXXXXX',
    'events': ['appointment_created', 'payment_completed', 'review_submitted']
}
```

### 5. CRM интеграция (опционально)

- **amoCRM** - популярная CRM
- **Bitrix24** - комплексное решение
- **Salesforce** - для крупных клиник

---

## 📦 Рекомендуемые пакеты Django

### Основные пакеты

```python
# requirements.txt
django==4.2.*
djangorestframework==3.14.*
wagtail==5.0.*
psycopg2-binary==2.9.*
redis==4.5.*
celery==5.3.*
django-cors-headers==4.0.*
django-filter==23.2
django-extensions==3.2.*
Pillow==10.0.*
```

### Wagtail расширения

```python
# Для медицинского сайта
wagtail-seo==2.4.*          # SEO оптимизация
wagtail-cache==2.2.*        # Кэширование страниц
wagtail-forms==1.5.*        # Формы обратной связи
wagtail-media==0.14.*       # Видео контент
wagtail-localize==1.5.*     # Мультиязычность (при необходимости)
wagtail-modeladmin==1.0.*   # Расширенная админка
```

### Дополнительные пакеты

```python
# Безопасность и утилиты
django-environ==0.10.*      # Переменные окружения
django-crispy-forms==2.0.*  # Красивые формы
django-phonenumber-field==7.1.*  # Валидация телефонов
django-ratelimit==4.0.*     # Ограничение запросов
sentry-sdk==1.28.*          # Мониторинг ошибок
```

---

## 🏛️ Архитектурные паттерны

### 1. Разделение по приложениям Django

```
clinic_website/
├── apps/
│   ├── core/           # Базовые модели и утилиты
│   ├── clinics/        # Клиники и филиалы
│   ├── doctors/        # Врачи и специализации
│   ├── services/       # Медицинские услуги
│   ├── appointments/   # Система записи
│   ├── reviews/        # Отзывы и рейтинги
│   ├── payments/       # Платежная система
│   ├── notifications/  # SMS/Email уведомления
│   └── cms/           # Wagtail CMS настройки
├── static/
├── media/
├── templates/
└── config/
```

### 2. API архитектура

```python
# REST API структура
/api/v1/
├── clinics/           # GET /api/v1/clinics/
├── doctors/           # GET /api/v1/doctors/?specialization=cardiology
├── services/          # GET /api/v1/services/?category=diagnostics
├── appointments/      # POST /api/v1/appointments/
├── available-slots/   # GET /api/v1/available-slots/?doctor=1&date=2025-01-15
└── reviews/           # GET, POST /api/v1/reviews/
```

### 3. Система разрешений

```python
class IsPatientOrReadOnly(BasePermission):
    def has_permission(self, request, view):
        if request.method in SAFE_METHODS:
            return True
        return request.user.is_authenticated and request.user.is_patient

class IsDoctorOwner(BasePermission):
    def has_object_permission(self, request, view, obj):
        return obj.doctor.user == request.user
```

---

## 🚀 Производительность и масштабирование

### 1. Кэширование

```python
# Redis кэширование
CACHES = {
    'default': {
        'BACKEND': 'django_redis.cache.RedisCache',
        'LOCATION': 'redis://127.0.0.1:6379/1',
        'OPTIONS': {
            'CLIENT_CLASS': 'django_redis.client.DefaultClient',
        }
    }
}

# Кэширование на уровне представлений
@cache_page(60 * 15)  # 15 минут
def doctors_list(request):
    return render(request, 'doctors/list.html', context)
```

### 2. Оптимизация запросов

```python
# Оптимизация N+1 проблем
doctors = Doctor.objects.select_related('user', 'specialization', 'clinic')\
                        .prefetch_related('services')\
                        .filter(is_active=True)
```

### 3. Асинхронные задачи

```python
# Celery задачи
@shared_task
def send_appointment_reminder(appointment_id):
    appointment = Appointment.objects.get(id=appointment_id)
    SMSService().send_reminder(appointment)

@shared_task
def generate_daily_report():
    # Генерация отчётов по записям
    pass
```

---

## 🔧 DevOps и деплой

### Docker конфигурация

```dockerfile
# Dockerfile
FROM python:3.10-slim
WORKDIR /app
COPY requirements.txt .
RUN pip install -r requirements.txt
COPY . .
CMD ["gunicorn", "config.wsgi:application"]
```

### Nginx конфигурация

```nginx
server {
    listen 80;
    server_name clinic-website.com;

    location /static/ {
        alias /app/static/;
        expires 30d;
    }

    location /media/ {
        alias /app/media/;
        expires 7d;
    }

    location / {
        proxy_pass http://127.0.0.1:8000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
    }
}
```

### Мониторинг

```python
# Sentry для отслеживания ошибок
import sentry_sdk
from sentry_sdk.integrations.django import DjangoIntegration

sentry_sdk.init(
    dsn="your_sentry_dsn",
    integrations=[DjangoIntegration()],
    traces_sample_rate=1.0,
)
```

---

## 📈 Масштабирование

### Горизонтальное масштабирование

1. **Load Balancer** (Nginx/HAProxy)
2. **Несколько инстансов Django** за балансировщиком
3. **Отдельный сервер для статики** (CDN)
4. **Отдельный сервер для Celery** задач

### Вертикальное масштабирование

1. **Оптимизация базы данных** (индексы, партиционирование)
2. **Увеличение ресурсов сервера**
3. **Настройка connection pooling**

Эта архитектура обеспечивает надёжную, масштабируемую и безопасную основу для медицинского сайта с возможностью дальнейшего развития.
