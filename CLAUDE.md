# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a documentation-only repository for a medical clinic website development project. The repository contains comprehensive technical and business documentation for building a modern medical clinic website with online appointment booking system.

**Current Status**: Planning and documentation phase - no actual code implementation yet.

## Repository Structure

```
medicine/
├── docs/                           # Complete project documentation
│   ├── business/                   # Business requirements and planning
│   │   ├── brief.md               # Commercial project brief
│   │   ├── client_questions.md    # Priority client questions
│   │   └── project_data.json      # Machine-readable specifications
│   ├── technical/                  # Technical architecture and solutions
│   │   ├── technical_architecture.md # Stack and data models
│   │   ├── cms_comparison.md      # CMS technology comparison
│   │   └── security_compliance.md # Security and compliance
│   ├── design/                     # Design and UX specifications
│   │   └── ux_design_requirements.md # UX/UI guidelines
│   ├── development/                # Development planning and templates
│   │   ├── tasks_estimates.md     # WBS and budget scenarios
│   │   └── brd_prd_frd_templates.md # Requirements templates
│   ├── deployment/                 # Testing, marketing and deployment
│   │   ├── testing_acceptance.md  # Test criteria and acceptance
│   │   └── seo_marketing.md       # SEO strategy and marketing
│   └── README.md                   # Project overview and structure
├── CLAUDE.md                       # This file - guidance for Claude Code
├── .gitignore                      # Git ignore rules
└── LICENSE                         # Project license
```

## Recommended Technical Stack

Based on the documentation analysis:

### Backend Architecture
- **Framework**: Django 4.2+ (LTS) with Django REST Framework
- **CMS**: Wagtail 5.0+ (recommended over Django CMS)
- **Database**: PostgreSQL 14+
- **Cache**: Redis 7.0+
- **Task Queue**: Celery 5.3+
- **Language**: Python 3.10+

### Frontend Stack
- **Base**: HTML5/CSS3/JavaScript ES6+
- **Framework**: Bootstrap 5.3+ or Tailwind CSS
- **Interactivity**: Alpine.js or Vue.js 3+
- **Build Tool**: Webpack or Vite
- **Preprocessor**: SCSS

### Infrastructure
- **Web Server**: Nginx 1.20+
- **WSGI Server**: Gunicorn
- **SSL/TLS**: Let's Encrypt certificates
- **Containerization**: Docker + Docker Compose (optional)
- **Monitoring**: Sentry, New Relic

## Key Project Features

### Must-Have Features
- Online appointment booking system
- Doctor profiles and schedules
- Medical services catalog
- Responsive design (Mobile-first)
- SEO optimization for local search
- Maps and SMS integration

### Recommended App Structure
```
clinic_website/
├── apps/
│   ├── core/           # Base models and utilities
│   ├── clinics/        # Clinic and branch management
│   ├── doctors/        # Doctor profiles and specializations
│   ├── services/       # Medical services catalog
│   ├── appointments/   # Booking system
│   ├── reviews/        # Reviews and ratings
│   ├── payments/       # Payment processing
│   ├── notifications/  # SMS/Email notifications
│   └── cms/           # Wagtail CMS configuration
```

## External Integrations

### Recommended Services
- **SMS**: SMSC.ru, SMS.ru, or SmsAero
- **Payments**: Яндекс.Касса (ЮKassa), CloudPayments, or Сбербанк
- **Maps**: Яндекс.Карты API
- **Analytics**: Google Analytics 4 + Яндекс.Метрика
- **Monitoring**: Sentry for error tracking

## Development Workflow

When implementing this project:

1. **Setup**: Start with Django project structure using the recommended app organization
2. **Models**: Implement core models (User, Clinic, Doctor, Service, Appointment, Review)
3. **API**: Build REST API endpoints for appointment booking
4. **CMS**: Configure Wagtail for content management
5. **Frontend**: Implement responsive design with mobile-first approach
6. **Integrations**: Add SMS, payment, and maps integrations
7. **Testing**: Implement comprehensive testing suite
8. **Deployment**: Configure production environment with Nginx + Gunicorn

## Security and Compliance

- **Data Protection**: GDPR/152-ФЗ compliance for medical data
- **Encryption**: SSL/TLS, bcrypt for passwords
- **Backup**: Daily encrypted backups
- **Audit**: Logging of all admin actions
- **Access Control**: Role-based permissions for staff

## Performance Requirements

- **Page Load Time**: < 3 seconds on mobile
- **Availability**: 99.5% uptime
- **Concurrent Users**: Support up to 500 simultaneous users
- **Mobile Traffic**: Optimized for 60%+ mobile users

## Business Context

This medical clinic website aims to:
- Increase patient flow by 25-40% within 6 months
- Reduce call center load by up to 60% through online booking
- Improve site conversion to 8-12%
- Enhance clinic's modern, tech-forward image

## Development Commands

Since this is currently a documentation-only repository, no build/test commands are available yet. When implementation begins, typical commands would include:

```bash
# Django development
python manage.py runserver
python manage.py migrate
python manage.py collectstatic

# Testing
python manage.py test
pytest

# Frontend build
npm run build
npm run dev
```

## Documentation Organization

The documentation is organized by development phase and team responsibility:

- **`/business`**: For project managers, business analysts, and stakeholders
- **`/technical`**: For backend developers and system architects
- **`/design`**: For UI/UX designers and frontend developers
- **`/development`**: For development teams and project planning
- **`/deployment`**: For QA engineers, DevOps, and marketing teams

## Key Documentation Files

When implementing this project, start with these essential files:

1. **`docs/business/project_data.json`** - Machine-readable project specifications
2. **`docs/technical/technical_architecture.md`** - Complete technical stack and data models
3. **`docs/development/tasks_estimates.md`** - Detailed work breakdown structure
4. **`docs/business/client_questions.md`** - Critical questions that affect scope

## Important Notes

- This repository contains planning documentation only
- No sensitive information or actual code is present
- All medical data handling must comply with healthcare privacy regulations
- Focus on accessibility (WCAG 2.1 AA) for medical websites
- Implement comprehensive logging for audit trails
- Documentation structure follows software development lifecycle phases