# БЕЗОПАСНОСТЬ И СООТВЕТСТВИЕ ТРЕБОВАНИЯМ

## 🔒 Общие требования безопасности

### GDPR и 152-ФЗ соответствие

#### Основные принципы
- **Согласие на обработку** персональных данных
- **Право на удаление** данных по запросу
- **Право на получение** копии данных
- **Уведомление о нарушениях** в течение 72 часов
- **Назначение DPO** (Data Protection Officer) при необходимости

#### Технические меры
```python
# Модель согласий
class UserConsent(models.Model):
    user = ForeignKey(User, on_delete=CASCADE)
    consent_type = CharField(choices=CONSENT_TYPES)
    is_given = BooleanField(default=False)
    given_at = DateTimeField(auto_now_add=True)
    ip_address = GenericIPAddressField()
    user_agent = TextField()

    # Типы согласий
    CONSENT_TYPES = [
        ('personal_data', 'Обработка персональных данных'),
        ('medical_data', 'Обработка медицинских данных'),
        ('marketing', 'Маркетинговые коммуникации'),
        ('cookies', 'Использование cookies'),
    ]
```

---

## 🛡️ Защита персональных данных

### 1. Шифрование данных

#### В покое (at rest)
```python
# Шифрование чувствительных полей
from cryptography.fernet import Fernet
from django.conf import settings

class EncryptedField(models.TextField):
    def __init__(self, *args, **kwargs):
        self.cipher_suite = Fernet(settings.ENCRYPTION_KEY)
        super().__init__(*args, **kwargs)

    def to_python(self, value):
        if value is None:
            return value
        try:
            return self.cipher_suite.decrypt(value.encode()).decode()
        except:
            return value

    def get_prep_value(self, value):
        if value is None:
            return value
        return self.cipher_suite.encrypt(value.encode()).decode()

# Применение к чувствительным данным
class Patient(models.Model):
    phone = EncryptedField(max_length=255)  # Зашифрованный телефон
    medical_history = EncryptedField()      # Медицинская история
```

#### В передаче (in transit)
- **HTTPS обязательно** (SSL/TLS 1.2+)
- **HSTS заголовки** для принудительного HTTPS
- **Certificate Pinning** для мобильных приложений

```python
# Django настройки безопасности
SECURE_SSL_REDIRECT = True
SECURE_HSTS_SECONDS = 31536000
SECURE_HSTS_INCLUDE_SUBDOMAINS = True
SECURE_HSTS_PRELOAD = True
SECURE_CONTENT_TYPE_NOSNIFF = True
SECURE_BROWSER_XSS_FILTER = True
X_FRAME_OPTIONS = 'DENY'
```

### 2. Хеширование паролей
```python
# Django использует Argon2 по умолчанию
PASSWORD_HASHERS = [
    'django.contrib.auth.hashers.Argon2PasswordHasher',
    'django.contrib.auth.hashers.PBKDF2PasswordHasher',
    'django.contrib.auth.hashers.PBKDF2SHA1PasswordHasher',
    'django.contrib.auth.hashers.BCryptSHA256PasswordHasher',
]

# Дополнительные требования к паролям
AUTH_PASSWORD_VALIDATORS = [
    {
        'NAME': 'django.contrib.auth.password_validation.UserAttributeSimilarityValidator',
    },
    {
        'NAME': 'django.contrib.auth.password_validation.MinimumLengthValidator',
        'OPTIONS': {'min_length': 12,}
    },
    {
        'NAME': 'django.contrib.auth.password_validation.CommonPasswordValidator',
    },
    {
        'NAME': 'django.contrib.auth.password_validation.NumericPasswordValidator',
    },
]
```

---

## 📊 Аудит и логирование

### 1. Система аудита действий
```python
class AuditLog(models.Model):
    user = ForeignKey(User, on_delete=SET_NULL, null=True)
    action = CharField(max_length=100)
    resource_type = CharField(max_length=50)
    resource_id = PositiveIntegerField(null=True)
    ip_address = GenericIPAddressField()
    user_agent = TextField()
    timestamp = DateTimeField(auto_now_add=True)
    details = JSONField(default=dict)

    class Meta:
        indexes = [
            models.Index(fields=['user', 'timestamp']),
            models.Index(fields=['action', 'timestamp']),
        ]

# Middleware для автоматического логирования
class AuditMiddleware:
    def __init__(self, get_response):
        self.get_response = get_response

    def __call__(self, request):
        # Логирование запроса
        if request.user.is_authenticated and self.should_log(request):
            AuditLog.objects.create(
                user=request.user,
                action=f"{request.method} {request.path}",
                ip_address=self.get_client_ip(request),
                user_agent=request.META.get('HTTP_USER_AGENT', ''),
            )

        response = self.get_response(request)
        return response
```

### 2. Логирование критических событий
```python
import logging

security_logger = logging.getLogger('security')

# События для обязательного логирования
CRITICAL_EVENTS = [
    'user_login',
    'user_logout',
    'password_change',
    'data_export',
    'admin_action',
    'payment_transaction',
    'appointment_creation',
    'medical_data_access'
]

def log_security_event(event_type, user, details=None):
    security_logger.info(
        f"Security Event: {event_type}",
        extra={
            'user_id': user.id if user else None,
            'event_type': event_type,
            'timestamp': timezone.now(),
            'details': details or {}
        }
    )
```

---

## 🔐 Аутентификация и авторизация

### 1. Многофакторная аутентификация (2FA)
```python
# Для администраторов обязательно
class StaffUser(models.Model):
    user = OneToOneField(User, on_delete=CASCADE)
    totp_secret = CharField(max_length=32, blank=True)
    backup_codes = JSONField(default=list)
    last_totp_use = DateTimeField(null=True)
    is_2fa_enabled = BooleanField(default=False)

# Middleware для проверки 2FA
class TwoFactorMiddleware:
    def process_request(self, request):
        if (request.user.is_staff and
            not request.session.get('2fa_verified') and
            request.path.startswith('/admin/')):
            return redirect('2fa_setup')
```

### 2. Система ролей и разрешений
```python
# Расширенная система разрешений
class Role(models.Model):
    name = CharField(max_length=50, unique=True)
    permissions = ManyToManyField('Permission')

class Permission(models.Model):
    codename = CharField(max_length=100, unique=True)
    name = CharField(max_length=255)
    content_type = CharField(max_length=50)

# Пример ролей для медицинского сайта
MEDICAL_ROLES = {
    'doctor': ['view_patient_data', 'create_appointment', 'view_medical_history'],
    'nurse': ['view_patient_data', 'create_appointment'],
    'receptionist': ['create_appointment', 'view_schedule'],
    'admin': ['all_permissions'],
    'patient': ['view_own_data', 'create_appointment']
}
```

### 3. Ограничение доступа по IP
```python
class IPWhitelist(models.Model):
    ip_address = GenericIPAddressField()
    description = CharField(max_length=200)
    is_active = BooleanField(default=True)
    created_at = DateTimeField(auto_now_add=True)

# Middleware для проверки IP
class IPWhitelistMiddleware:
    def process_request(self, request):
        if request.path.startswith('/admin/'):
            client_ip = self.get_client_ip(request)
            if not IPWhitelist.objects.filter(
                ip_address=client_ip,
                is_active=True
            ).exists():
                return HttpResponseForbidden('Access denied')
```

---

## 🏥 Обработка медицинских данных (PHI)

### Данные, требующие особой защиты:
1. **Диагнозы и медицинская история**
2. **Результаты анализов и обследований**
3. **Рецепты и назначения**
4. **Записи консультаций**
5. **Биометрические данные**

### Технические меры защиты PHI:
```python
class MedicalRecord(models.Model):
    patient = ForeignKey(User, on_delete=CASCADE)
    doctor = ForeignKey(Doctor, on_delete=CASCADE)
    diagnosis = EncryptedTextField()  # Зашифровано
    treatment = EncryptedTextField()  # Зашифровано
    created_at = DateTimeField(auto_now_add=True)

    class Meta:
        permissions = [
            ('view_medical_record', 'Can view medical records'),
            ('export_medical_record', 'Can export medical records'),
        ]

# Автоматическое логирование доступа к медицинским данным
@receiver(post_init, sender=MedicalRecord)
def log_medical_access(sender, instance, **kwargs):
    if hasattr(instance, '_state') and instance._state.adding is False:
        log_security_event('medical_data_access',
                         request.user,
                         {'record_id': instance.id})
```

---

## 🍪 Cookie и конфиденциальность

### 1. Cookie Consent
```html
<!-- Cookie Banner -->
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
        <p>Мы используем файлы cookie для улучшения работы сайта.</p>
        <div class="cookie-buttons">
            <button onclick="acceptAllCookies()">Принять все</button>
            <button onclick="acceptNecessary()">Только необходимые</button>
            <button onclick="showCookieSettings()">Настройки</button>
        </div>
    </div>
</div>

<script>
function acceptAllCookies() {
    setCookieConsent('all');
    document.getElementById('cookie-banner').style.display = 'none';
    loadAnalytics();
}

function acceptNecessary() {
    setCookieConsent('necessary');
    document.getElementById('cookie-banner').style.display = 'none';
}
</script>
```

### 2. Классификация cookies
```python
COOKIE_CLASSIFICATION = {
    'necessary': [
        'sessionid',        # Django сессии
        'csrftoken',       # CSRF защита
        'cookie_consent',  # Согласие на cookies
    ],
    'analytics': [
        '_ga',             # Google Analytics
        '_ym_*',          # Яндекс.Метрика
    ],
    'marketing': [
        'fbp',            # Facebook Pixel
        'utm_*',          # UTM параметры
    ]
}
```

---

## 📝 Политика конфиденциальности

### Обязательные разделы:
1. **Какие данные собираем**
   - Персональные данные (ФИО, телефон, email)
   - Медицинские данные (при записи на приём)
   - Технические данные (IP, cookies, логи)

2. **Цели обработки**
   - Предоставление медицинских услуг
   - Связь с пациентами
   - Улучшение качества сервиса
   - Соблюдение законодательства

3. **Правовые основания**
   - Согласие пользователя
   - Исполнение договора
   - Законные интересы

4. **Права пользователей**
   - Доступ к данным
   - Исправление данных
   - Удаление данных
   - Ограничение обработки

### Техническая реализация прав пользователей:
```python
class DataSubjectRequest(models.Model):
    user = ForeignKey(User, on_delete=CASCADE)
    request_type = CharField(choices=[
        ('access', 'Запрос доступа к данным'),
        ('rectification', 'Исправление данных'),
        ('erasure', 'Удаление данных'),
        ('restriction', 'Ограничение обработки'),
        ('portability', 'Переносимость данных'),
    ])
    status = CharField(choices=[
        ('pending', 'В обработке'),
        ('completed', 'Выполнено'),
        ('rejected', 'Отклонено'),
    ], default='pending')
    created_at = DateTimeField(auto_now_add=True)
    completed_at = DateTimeField(null=True)

# Автоматическое удаление данных
@shared_task
def process_erasure_request(request_id):
    request = DataSubjectRequest.objects.get(id=request_id)
    user = request.user

    # Анонимизация вместо удаления для медицинских записей
    user.first_name = f"Deleted User {user.id}"
    user.last_name = ""
    user.email = f"deleted.{user.id}@example.com"
    user.phone = ""
    user.is_active = False
    user.save()

    request.status = 'completed'
    request.completed_at = timezone.now()
    request.save()
```

---

## 🔍 Мониторинг безопасности

### 1. Автоматическое обнаружение угроз
```python
class SecurityEvent(models.Model):
    event_type = CharField(choices=[
        ('failed_login', 'Неудачная попытка входа'),
        ('suspicious_activity', 'Подозрительная активность'),
        ('data_breach_attempt', 'Попытка утечки данных'),
        ('unauthorized_access', 'Несанкционированный доступ'),
    ])
    severity = CharField(choices=[
        ('low', 'Низкая'),
        ('medium', 'Средняя'),
        ('high', 'Высокая'),
        ('critical', 'Критическая'),
    ])
    user = ForeignKey(User, null=True, on_delete=SET_NULL)
    ip_address = GenericIPAddressField()
    details = JSONField()
    created_at = DateTimeField(auto_now_add=True)
    is_resolved = BooleanField(default=False)

# Автоматическое создание событий безопасности
@receiver(user_login_failed)
def handle_failed_login(sender, credentials, request, **kwargs):
    # После 5 неудачных попыток - блокировка IP
    failed_attempts = SecurityEvent.objects.filter(
        event_type='failed_login',
        ip_address=get_client_ip(request),
        created_at__gte=timezone.now() - timedelta(minutes=15)
    ).count()

    if failed_attempts >= 5:
        BlockedIP.objects.get_or_create(
            ip_address=get_client_ip(request),
            reason='Multiple failed login attempts'
        )
```

### 2. Регулярные проверки безопасности
```python
@shared_task
def security_audit():
    """Ежедневная проверка безопасности"""

    # Проверка на утечки данных
    check_for_data_breaches()

    # Проверка слабых паролей
    check_weak_passwords()

    # Проверка неактивных пользователей
    deactivate_inactive_users()

    # Проверка устаревших сессий
    cleanup_expired_sessions()

def check_weak_passwords():
    """Поиск пользователей со слабыми паролями"""
    # Реализация проверки
    pass
```

---

## ⚖️ Соответствие стандартам

### ISO 27001 (Информационная безопасность)
- **Политика безопасности** - документированные процедуры
- **Управление активами** - инвентаризация данных
- **Контроль доступа** - принцип минимальных привилегий
- **Криптография** - шифрование критических данных

### HIPAA (для международных клиентов)
- **Administrative Safeguards** - назначение ответственных
- **Physical Safeguards** - защита серверов и рабочих мест
- **Technical Safeguards** - техническая защита данных

### Требования регуляторов РФ
- **Роскомнадзор** - уведомление об обработке данных
- **ФСТЭК** - требования к значимым объектам
- **ЦБ РФ** - при обработке платежей

---

## 🚨 План реагирования на инциденты

### 1. Классификация инцидентов
```python
INCIDENT_LEVELS = {
    'P1': 'Критический - утечка медицинских данных',
    'P2': 'Высокий - несанкционированный доступ к системе',
    'P3': 'Средний - подозрительная активность',
    'P4': 'Низкий - нарушение политик безопасности'
}

# Автоматические уведомления
@shared_task
def notify_security_team(incident_level, details):
    if incident_level in ['P1', 'P2']:
        # Немедленное уведомление по SMS/email
        send_immediate_alert(details)

    # Создание тикета в системе
    create_incident_ticket(incident_level, details)
```

### 2. Процедуры реагирования
1. **Немедленные действия** (0-30 минут)
   - Изоляция скомпрометированных систем
   - Блокировка подозрительных IP
   - Уведомление команды безопасности

2. **Краткосрочные действия** (30 минут - 4 часа)
   - Анализ масштаба инцидента
   - Сбор доказательств
   - Уведомление руководства

3. **Долгосрочные действия** (4-72 часа)
   - Уведомление регуляторов (при необходимости)
   - Уведомление пользователей
   - Восстановление систем

Эта система безопасности обеспечивает защиту персональных и медицинских данных в соответствии с требованиями российского и международного законодательства.