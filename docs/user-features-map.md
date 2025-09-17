# 👤 User Journey & Features Map

> **Interactive User Journey**: Click on journey stages to explore detailed features and requirements

```mermaid
journey
    title Patient Journey Through Medical Clinic Website
    section Discovery
      Search for clinic online      : 3: Patient
      Land on homepage             : 4: Patient
      Browse services & doctors    : 5: Patient
    section Evaluation
      Read doctor profiles         : 4: Patient
      Check reviews & ratings      : 5: Patient
      Compare prices & services    : 4: Patient
    section Booking
      Select doctor & service      : 5: Patient
      Choose available time slot   : 4: Patient
      Fill appointment form        : 3: Patient
      Confirm booking             : 5: Patient
    section Confirmation
      Receive SMS confirmation     : 5: Patient
      Get email with details      : 4: Patient
      Add to personal calendar    : 3: Patient
    section Visit
      Arrive at clinic            : 4: Patient
      Complete appointment        : 5: Patient
      Receive follow-up info      : 4: Patient
    section Follow-up
      Leave review & rating       : 4: Patient
      Book follow-up appointment  : 5: Patient
      Recommend to friends        : 5: Patient
```

## 🎯 Feature Priority Matrix

```mermaid
graph TB
    %% Styling
    classDef must fill:#ffcdd2,stroke:#d32f2f,stroke-width:3px
    classDef should fill:#fff3e0,stroke:#f57c00,stroke-width:2px
    classDef could fill:#e8f5e8,stroke:#388e3c,stroke-width:2px
    classDef wont fill:#f5f5f5,stroke:#757575,stroke-width:1px

    subgraph "MUST HAVE ⚡"
        BOOKING[📅 Online Appointment<br/>Booking System]
        DOCTORS[👨‍⚕️ Doctor Profiles<br/>& Schedules]
        SERVICES[🩺 Medical Services<br/>Catalog]
        RESPONSIVE[📱 Mobile-First<br/>Responsive Design]
        SEO[🔍 SEO Optimization<br/>Local Search]
        MAPS[🗺️ Maps Integration<br/>& Location]
    end

    subgraph "SHOULD HAVE 🔶"
        REVIEWS[⭐ Reviews & Ratings<br/>System]
        ANALYTICS[📊 Analytics<br/>Integration]
        EMAIL[📧 Email Marketing<br/>Automation]
        CALCULATOR[💰 Price Calculator<br/>& Estimates]
        CONTACT[📞 Contact Forms<br/>& Communication]
    end

    subgraph "COULD HAVE 🟢"
        PAYMENTS[💳 Online Payment<br/>Integration]
        CABINET[👤 Patient Personal<br/>Cabinet]
        TELEMEDICINE[💻 Telemedicine<br/>Consultations]
        MOBILE_APP[📱 Mobile Application<br/>iOS/Android]
        LOYALTY[🎁 Loyalty Program<br/>& Bonuses]
    end

    subgraph "WON'T HAVE (V1) ⚪"
        AI_CHAT[🤖 AI Chatbot<br/>Support]
        WEARABLES[⌚ Wearables<br/>Integration]
        BLOCKCHAIN[🔗 Blockchain<br/>Health Records]
    end

    %% Apply styles
    class BOOKING,DOCTORS,SERVICES,RESPONSIVE,SEO,MAPS must
    class REVIEWS,ANALYTICS,EMAIL,CALCULATOR,CONTACT should
    class PAYMENTS,CABINET,TELEMEDICINE,MOBILE_APP,LOYALTY could
    class AI_CHAT,WEARABLES,BLOCKCHAIN wont

    %% Cross-references
    click BOOKING href "../technical/technical_architecture.md#appointment-записи-на-приём" "Appointment System Details"
    click DOCTORS href "../technical/technical_architecture.md#doctor-врачи" "Doctor Model Details"
    click SERVICES href "../technical/technical_architecture.md#service-медицинские-услуги" "Services Architecture"
    click RESPONSIVE href "../design/ux_design_requirements.md#требования-к-адаптивности" "Responsive Design Requirements"
    click SEO href "../deployment/seo_marketing.md" "SEO Strategy"
    click REVIEWS href "../technical/technical_architecture.md#review-отзывы" "Reviews System"
```

## 🛤️ Detailed User Flows

### 🔍 Doctor Search & Selection Flow

```mermaid
flowchart TD
    START([Patient visits website]) --> HOMEPAGE{Homepage}
    HOMEPAGE --> SEARCH_DOCTORS[Browse Doctors]
    HOMEPAGE --> SEARCH_SERVICES[Browse Services]

    SEARCH_DOCTORS --> FILTER[Apply Filters:<br/>• Specialization<br/>• Rating<br/>• Price<br/>• Availability]
    SEARCH_SERVICES --> SERVICE_DETAIL[Service Details Page]
    SERVICE_DETAIL --> RELATED_DOCTORS[See Related Doctors]

    FILTER --> DOCTOR_LIST[Doctor List Results]
    RELATED_DOCTORS --> DOCTOR_LIST
    DOCTOR_LIST --> DOCTOR_PROFILE[Doctor Profile Page]

    DOCTOR_PROFILE --> REVIEWS_READ[Read Reviews]
    DOCTOR_PROFILE --> SCHEDULE_VIEW[View Schedule]
    DOCTOR_PROFILE --> BOOK_APPOINTMENT[Book Appointment]

    REVIEWS_READ --> BOOK_APPOINTMENT
    SCHEDULE_VIEW --> BOOK_APPOINTMENT

    BOOK_APPOINTMENT --> APPOINTMENT_FORM[Appointment Form]

    %% Styling
    classDef start fill:#e3f2fd,stroke:#1976d2
    classDef process fill:#f3e5f5,stroke:#7b1fa2
    classDef decision fill:#fff3e0,stroke:#f57c00
    classDef end fill:#e8f5e8,stroke:#388e3c

    class START start
    class HOMEPAGE decision
    class BOOK_APPOINTMENT,APPOINTMENT_FORM end
```

### 📅 Appointment Booking Flow

```mermaid
flowchart TD
    FORM_START([Appointment Form]) --> SELECT_SERVICE[Select Service]
    SELECT_SERVICE --> SELECT_DOCTOR[Select Doctor]
    SELECT_DOCTOR --> SELECT_DATE[Select Date]
    SELECT_DATE --> SELECT_TIME[Select Time Slot]

    SELECT_TIME --> AVAILABILITY{Check Availability}
    AVAILABILITY -->|Available| PATIENT_INFO[Enter Patient Info]
    AVAILABILITY -->|Busy| SELECT_TIME

    PATIENT_INFO --> CONTACT_INFO[Contact Details]
    CONTACT_INFO --> PREFERENCES[Appointment Preferences]
    PREFERENCES --> REVIEW_BOOKING[Review Booking]

    REVIEW_BOOKING --> TERMS{Accept Terms}
    TERMS -->|Yes| SUBMIT[Submit Booking]
    TERMS -->|No| PATIENT_INFO

    SUBMIT --> CONFIRMATION[Booking Confirmation]
    CONFIRMATION --> SMS_SENT[SMS Confirmation]
    CONFIRMATION --> EMAIL_SENT[Email Confirmation]

    SMS_SENT --> CALENDAR_ADD[Add to Calendar]
    EMAIL_SENT --> CALENDAR_ADD
    CALENDAR_ADD --> SUCCESS([Booking Complete])

    %% Error handling
    SUBMIT --> ERROR{Booking Error?}
    ERROR -->|Yes| ERROR_MSG[Show Error Message]
    ERROR_MSG --> PATIENT_INFO
    ERROR -->|No| CONFIRMATION
```

## 📊 Feature Impact Analysis

### 🎯 Business Goals Mapping

| Feature | Patient Flow ↑ | Call Center ↓ | Conversion ↑ | Tech Image ↑ | Priority |
|---------|----------------|---------------|--------------|--------------|----------|
| **Online Booking** | 🔴 High | 🔴 High | 🔴 High | 🔴 High | MUST |
| **Doctor Profiles** | 🟡 Medium | 🟡 Medium | 🔴 High | 🟡 Medium | MUST |
| **Mobile Design** | 🔴 High | 🟡 Medium | 🔴 High | 🔴 High | MUST |
| **Reviews System** | 🟡 Medium | 🟢 Low | 🔴 High | 🟡 Medium | SHOULD |
| **Price Calculator** | 🟢 Low | 🟡 Medium | 🟡 Medium | 🟡 Medium | SHOULD |
| **Online Payments** | 🟢 Low | 🟡 Medium | 🟡 Medium | 🔴 High | COULD |
| **Telemedicine** | 🔴 High | 🔴 High | 🟡 Medium | 🔴 High | COULD |

### 📱 User Device & Behavior Analysis

```mermaid
pie title User Device Distribution
    "Mobile (Smartphones)" : 60
    "Desktop" : 25
    "Tablet" : 12
    "Other" : 3
```

```mermaid
pie title User Action Priorities
    "Find Doctor Info" : 35
    "Book Appointment" : 30
    "Check Location/Hours" : 20
    "Read Reviews" : 10
    "Other" : 5
```

## 🎨 Page Hierarchy & Navigation

```mermaid
graph TB
    HOME[🏠 Homepage]

    HOME --> SERVICES[🩺 Services]
    HOME --> DOCTORS[👨‍⚕️ Doctors]
    HOME --> ABOUT[ℹ️ About Clinic]
    HOME --> CONTACT[📞 Contact]

    SERVICES --> SERVICE_CAT[Service Categories]
    SERVICE_CAT --> SERVICE_DETAIL[Individual Service]
    SERVICE_DETAIL --> BOOK_SERVICE[Book This Service]

    DOCTORS --> DOCTOR_LIST[All Doctors]
    DOCTOR_LIST --> DOCTOR_PROFILE[Doctor Profile]
    DOCTOR_PROFILE --> BOOK_DOCTOR[Book with Doctor]

    DOCTORS --> SPECIALIZATIONS[By Specialization]
    SPECIALIZATIONS --> SPEC_DOCTORS[Doctors in Specialty]

    ABOUT --> TEAM[Our Team]
    ABOUT --> LICENSES[Licenses & Certificates]
    ABOUT --> EQUIPMENT[Medical Equipment]

    CONTACT --> LOCATIONS[Clinic Locations]
    CONTACT --> CONTACT_FORM[Contact Form]

    %% Optional pages
    HOME -.-> REVIEWS[⭐ Reviews]
    HOME -.-> PRICES[💰 Prices]
    HOME -.-> PROMOTIONS[🎁 Promotions]

    %% Booking flows
    BOOK_SERVICE --> BOOKING_FORM[📅 Booking Form]
    BOOK_DOCTOR --> BOOKING_FORM
    BOOKING_FORM --> CONFIRMATION[✅ Confirmation]

    %% Styling
    classDef main fill:#e3f2fd,stroke:#1976d2,stroke-width:3px
    classDef category fill:#f3e5f5,stroke:#7b1fa2,stroke-width:2px
    classDef detail fill:#fff3e0,stroke:#f57c00,stroke-width:2px
    classDef action fill:#e8f5e8,stroke:#388e3c,stroke-width:2px
    classDef optional fill:#f5f5f5,stroke:#757575,stroke-width:1px

    class HOME main
    class SERVICES,DOCTORS,ABOUT,CONTACT category
    class SERVICE_DETAIL,DOCTOR_PROFILE,TEAM,LOCATIONS detail
    class BOOK_SERVICE,BOOK_DOCTOR,BOOKING_FORM,CONFIRMATION action
    class REVIEWS,PRICES,PROMOTIONS optional
```

## 🔄 User Feedback Loop

```mermaid
graph LR
    VISIT[👤 Patient Visit] --> EXPERIENCE[💫 Website Experience]
    EXPERIENCE --> BOOKING[📅 Appointment Booked]
    BOOKING --> CLINIC_VISIT[🏥 Clinic Visit]
    CLINIC_VISIT --> SATISFACTION[😊 Satisfaction Level]

    SATISFACTION --> REVIEW[⭐ Leave Review]
    REVIEW --> SOCIAL_PROOF[📈 Social Proof]
    SOCIAL_PROOF --> NEW_VISITORS[👥 New Visitors]
    NEW_VISITORS --> VISIT

    SATISFACTION --> REPEAT[🔄 Repeat Booking]
    REPEAT --> LOYALTY[💝 Patient Loyalty]
    LOYALTY --> REFERRAL[👨‍👩‍👧‍👦 Referrals]
    REFERRAL --> NEW_VISITORS
```

## 📋 Feature Requirements Summary

### Core Functionality Requirements
- **Appointment Booking**: Real-time availability, conflict prevention, automated confirmations
- **Doctor Profiles**: Photos, credentials, specializations, patient reviews, schedule integration
- **Service Catalog**: Detailed descriptions, pricing, duration, preparation instructions
- **Mobile Experience**: Touch-friendly interface, fast loading, offline capability

### Integration Requirements
- **SMS Notifications**: Booking confirmations, reminders, updates
- **Email System**: Appointment details, follow-up communications, newsletters
- **Maps Integration**: Clinic locations, directions, parking information
- **Analytics**: User behavior tracking, conversion measurement, A/B testing

### Content Management
- **Wagtail CMS**: Easy content updates, SEO optimization, media management
- **Multi-language Support**: Optional Russian/English content
- **Blog System**: Health articles, clinic news, doctor insights

## 🔗 Related Documentation

- [🎨 UX Design Requirements](./design/ux_design_requirements.md) - Detailed UI/UX specifications
- [🏗️ Technical Architecture](./technical/technical_architecture.md) - System implementation details
- [📊 Business Brief](./business/brief.md) - Business requirements and goals
- [📋 Project Data](./business/project_data.json) - Machine-readable specifications

---

> **Interactive Navigation**: Click on feature nodes in the diagrams above to explore detailed technical documentation and implementation requirements for each component of the user journey.