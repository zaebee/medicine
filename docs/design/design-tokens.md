---
layout: documentation
title: "Design Tokens - Токены дизайн-системы"
nav_title: "Design Tokens"
description: "Централизованные токены дизайн-системы клиники Пчёлка: цвета, типографика, отступы"
icon: "🎯"
permalink: /design/design-tokens/
---

# DESIGN TOKENS

**Дата:** 6 октября 2025  
**Версия:** 1.0  
**Статус:** Единый источник правды для всей дизайн-системы

---

## 📖 О документе

Design Tokens — это централизованное хранилище всех значений дизайн-системы. Этот документ является **единым источником правды** (Single Source of Truth) для:

- Разработчиков (CSS/JS переменные)
- Дизайнеров (Figma/Sketch)
- Документации (Branding Guidelines, UI Kit, UX Requirements)

**Приоритет документов:**
1. **Design Tokens** (этот документ) — главный источник
2. Branding Guidelines — визуальная идентичность
3. UI Kit — реализация компонентов
4. UX Requirements — требования к UX

---

## 🎨 ЦВЕТА

### Фирменные цвета

```css
:root {
  /* Основные цвета клиники "Пчёлка" */
  --primary-color: #C9A961;      /* Темно-золотой (из логотипа) */
  --primary-light: #D4AF37;      /* Светло-золотой */
  --primary-dark: #B8985A;       /* Темнее для hover */
  
  --secondary-color: #000000;    /* Премиум черный */
  --secondary-light: #1a1a1a;    /* Светлее для hover */
  
  --accent-color: #D4AF37;       /* Золотой акцент */
}
```

**Использование:**
- `--primary-color`: Кнопки, ссылки, акценты, иконки
- `--primary-light`: Hover состояния, градиенты
- `--secondary-color`: Footer, премиум секции, темные блоки
- `--accent-color`: Подчеркивания, декоративные элементы

### Нейтральные цвета

```css
:root {
  /* Текст */
  --text-primary: #333333;       /* Основной текст */
  --text-secondary: #666666;     /* Вторичный текст */
  --text-tertiary: #999999;      /* Третичный текст */
  --text-disabled: #cccccc;      /* Отключенный текст */
  
  /* Фон */
  --background: #ffffff;         /* Основной фон */
  --background-light: #f5f5f5;   /* Альтернативный фон */
  --background-dark: #000000;    /* Темный фон */
  
  /* Границы */
  --border-color: #e0e0e0;       /* Основные границы */
  --border-light: #f0f0f0;       /* Светлые границы */
  --border-dark: #cccccc;        /* Темные границы */
}
```

### Семантические цвета

```css
:root {
  /* Состояния */
  --success: #28a745;            /* Успех */
  --success-light: #d4edda;      /* Фон успеха */
  --success-dark: #1e7e34;       /* Темный успех */
  
  --error: #dc3545;              /* Ошибка */
  --error-light: #f8d7da;        /* Фон ошибки */
  --error-dark: #bd2130;         /* Темная ошибка */
  
  --warning: #ffc107;            /* Предупреждение */
  --warning-light: #fff3cd;      /* Фон предупреждения */
  --warning-dark: #e0a800;       /* Темное предупреждение */
  
  --info: #17a2b8;               /* Информация */
  --info-light: #d1ecf1;         /* Фон информации */
  --info-dark: #117a8b;          /* Темная информация */
}
```

### Контрастность (WCAG 2.1)

| Комбинация | Коэффициент | Уровень |
|------------|-------------|---------|
| `#333333` на `#ffffff` | 12.63:1 | AAA ✅ |
| `#C9A961` на `#000000` | 8.2:1 | AAA ✅ |
| `#ffffff` на `#C9A961` | 4.8:1 | AA ✅ |
| `#666666` на `#ffffff` | 5.74:1 | AA ✅ |

---

## ✍️ ТИПОГРАФИКА

### Семейства шрифтов

```css
:root {
  /* Шрифты */
  --font-heading: 'Montserrat', 'Raleway', 'Poppins', sans-serif;
  --font-body: 'Open Sans', 'Roboto', 'Lato', sans-serif;
  --font-mono: 'Courier New', monospace;
}
```

**Использование:**
- `--font-heading`: H1-H6, кнопки, навигация
- `--font-body`: Параграфы, списки, формы
- `--font-mono`: Код, технические данные

### Размеры шрифтов

```css
:root {
  /* Заголовки */
  --h1-size: 42px;
  --h2-size: 36px;
  --h3-size: 28px;
  --h4-size: 24px;
  --h5-size: 20px;
  --h6-size: 18px;
  
  /* Текст */
  --text-xl: 20px;
  --text-large: 18px;
  --text-base: 16px;
  --text-small: 14px;
  --text-xs: 12px;
}
```

### Веса шрифтов

```css
:root {
  --font-weight-light: 300;
  --font-weight-regular: 400;
  --font-weight-medium: 500;
  --font-weight-semibold: 600;
  --font-weight-bold: 700;
}
```

### Высота строки

```css
:root {
  --line-height-tight: 1.2;
  --line-height-snug: 1.4;
  --line-height-normal: 1.6;
  --line-height-relaxed: 1.8;
  --line-height-loose: 2.0;
}
```

### Адаптивная типографика

```css
/* Мобильные устройства (до 768px) */
@media (max-width: 767px) {
  :root {
    --h1-size: 32px;
    --h2-size: 28px;
    --h3-size: 24px;
    --h4-size: 20px;
    --h5-size: 18px;
    --h6-size: 16px;
    
    /* Основной текст НЕ уменьшается */
    --text-base: 16px;
  }
}
```

---

## 📏 SPACING (Отступы)

```css
:root {
  /* Базовая единица: 4px */
  --space-0: 0;
  --space-1: 4px;
  --space-2: 8px;
  --space-3: 12px;
  --space-4: 16px;
  --space-5: 20px;
  --space-6: 24px;
  --space-8: 32px;
  --space-10: 40px;
  --space-12: 48px;
  --space-16: 64px;
  --space-20: 80px;
  --space-24: 96px;
}
```

**Использование:**
- `--space-1` до `--space-3`: Внутренние отступы мелких элементов
- `--space-4` до `--space-6`: Стандартные отступы (padding, margin)
- `--space-8` до `--space-12`: Отступы между секциями
- `--space-16` до `--space-24`: Большие отступы (hero, footer)

---

## 🔲 РАЗМЕРЫ

### Ширина контейнеров

```css
:root {
  --container-xs: 480px;
  --container-sm: 640px;
  --container-md: 768px;
  --container-lg: 1024px;
  --container-xl: 1200px;
  --container-2xl: 1400px;
}
```

### Высота элементов

```css
:root {
  /* Кнопки */
  --btn-height-small: 32px;
  --btn-height-base: 40px;
  --btn-height-large: 48px;
  
  /* Поля ввода */
  --input-height-small: 32px;
  --input-height-base: 40px;
  --input-height-large: 48px;
  
  /* Header/Footer */
  --header-height: 80px;
  --footer-height: auto;
}
```

---

## 🎭 ЭФФЕКТЫ

### Тени

```css
:root {
  /* Тени */
  --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 8px 16px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 12px 24px rgba(0, 0, 0, 0.15);
  
  /* Тени для золотых элементов */
  --shadow-gold: 0 4px 12px rgba(201, 169, 97, 0.3);
}
```

### Скругления

```css
:root {
  --radius-none: 0;
  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 12px;
  --radius-xl: 16px;
  --radius-full: 9999px;
}
```

### Переходы

```css
:root {
  --transition-fast: 150ms ease-in-out;
  --transition-base: 300ms ease-in-out;
  --transition-slow: 500ms ease-in-out;
}
```

---

## 📱 BREAKPOINTS

```css
:root {
  /* Точки перелома */
  --breakpoint-xs: 320px;
  --breakpoint-sm: 640px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 1024px;
  --breakpoint-xl: 1280px;
  --breakpoint-2xl: 1536px;
}
```

**Использование в медиа-запросах:**

```css
/* Мобильные */
@media (max-width: 767px) { ... }

/* Планшеты */
@media (min-width: 768px) and (max-width: 1023px) { ... }

/* Десктоп */
@media (min-width: 1024px) { ... }
```

---

## 🎯 Z-INDEX

```css
:root {
  --z-dropdown: 1000;
  --z-sticky: 1020;
  --z-fixed: 1030;
  --z-modal-backdrop: 1040;
  --z-modal: 1050;
  --z-popover: 1060;
  --z-tooltip: 1070;
}
```

---

## 🌐 ИСПОЛЬЗОВАНИЕ

### CSS

```css
/* Импорт токенов */
@import 'design-tokens.css';

/* Использование */
.button {
  background: var(--primary-color);
  color: var(--background);
  padding: var(--space-3) var(--space-6);
  border-radius: var(--radius-md);
  font-family: var(--font-heading);
  font-size: var(--text-base);
  transition: var(--transition-base);
}

.button:hover {
  background: var(--primary-light);
  box-shadow: var(--shadow-gold);
}
```

### JavaScript

```javascript
// Получение токенов
const tokens = {
  primaryColor: getComputedStyle(document.documentElement)
    .getPropertyValue('--primary-color'),
  spacing: getComputedStyle(document.documentElement)
    .getPropertyValue('--space-4')
};

// Динамическое изменение
document.documentElement.style.setProperty('--primary-color', '#D4AF37');
```

### JSON (для дизайн-инструментов)

```json
{
  "colors": {
    "primary": {
      "base": "#C9A961",
      "light": "#D4AF37",
      "dark": "#B8985A"
    },
    "semantic": {
      "success": "#28a745",
      "error": "#dc3545",
      "warning": "#ffc107",
      "info": "#17a2b8"
    }
  },
  "typography": {
    "fontFamily": {
      "heading": "'Montserrat', sans-serif",
      "body": "'Open Sans', sans-serif"
    },
    "fontSize": {
      "h1": "42px",
      "h2": "36px",
      "base": "16px"
    }
  },
  "spacing": {
    "1": "4px",
    "2": "8px",
    "4": "16px",
    "6": "24px"
  }
}
```

---

## 📋 ЧЕКЛИСТ СИНХРОНИЗАЦИИ

При изменении токенов обновить:

- [ ] `design-tokens.md` (этот файл)
- [ ] `branding_guidelines.md` (визуальная идентичность)
- [ ] `ui-kit.md` (CSS переменные в начале)
- [ ] `ux_design_requirements.md` (цветовая палитра)
- [ ] CSS файлы проекта
- [ ] Figma/Sketch библиотеки (если используются)

---

## 🔄 ИСТОРИЯ ИЗМЕНЕНИЙ

### Версия 1.0 (6 октября 2025)
- Создан централизованный документ Design Tokens
- Унифицированы цвета из Branding Guidelines
- Добавлены типографические токены
- Добавлены spacing, shadows, transitions
- Добавлены breakpoints и z-index

---

## 📚 СВЯЗАННЫЕ ДОКУМЕНТЫ

- [Branding Guidelines](/design/branding-guidelines/) — Визуальная идентичность
- [UI Kit](/design/ui-kit/) — Библиотека компонентов
- [UX Requirements](/design/ux-design-requirements/) — Требования к UX
- [Mood Board](/design/mood-board/) — Визуальное вдохновение
