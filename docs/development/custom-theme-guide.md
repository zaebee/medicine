---
layout: documentation
title: "Custom Theme Development Guide"
nav_title: "Custom Theme Guide"
description: "A comprehensive guide to the 'pchelka-theme', its structure, and functionalities."
icon: "🎨"
permalink: /development/custom-theme-guide/
---

# 🎨 Custom Theme Development Guide: Pchelka-Theme

This document provides a detailed overview of the `pchelka-theme`, a custom WordPress theme built for the "Pchelka Medic" clinic. It covers the theme's structure, custom features, and step-by-step installation instructions.

## 1. Theme Overview

The `pchelka-theme` is a bespoke theme developed from the ground up, based on the `variant-3-premium` mockup. It is designed to be lightweight, secure, and easily maintainable. It replaces the initial plan of using a pre-built theme to provide a more tailored solution for the clinic's specific needs.

### Key Features:
- **Custom Post Types (CPTs):** Services, Doctors, Equipment, Loyalty Programs, and Reviews.
- **Advanced Custom Fields (ACF):** Custom fields for all CPTs to allow for easy content management.
- **AJAX-Powered Contact Form:** Secure and seamless form submissions without page reloads.
- **Modular Template Parts:** A clean and organized template structure.
- **Localization Ready:** The theme can be translated into other languages.

## 2. Theme Installation and Activation

Follow these steps to install and activate the `pchelka-theme` on a WordPress installation.

### Prerequisites:
- A running WordPress instance (v6.0 or higher).
- The Advanced Custom Fields (ACF) plugin installed and activated.

### Installation Steps:
1.  **Download the Theme:** Obtain the `pchelka-theme` directory as a `.zip` archive.
2.  **Navigate to Themes:** In your WordPress admin dashboard, go to `Appearance` -> `Themes`.
3.  **Add New Theme:** Click the `Add New` button at the top of the page, then click `Upload Theme`.
4.  **Upload and Install:** Choose the `pchelka-theme.zip` file you downloaded and click `Install Now`.
5.  **Activate the Theme:** Once the installation is complete, click the `Activate` link.

The `pchelka-theme` is now the active theme for your site.

## 3. Theme File Structure

The theme is organized into logical directories and files to make development and maintenance straightforward.

```
pchelka-theme/
│
├── assets/
│   ├── css/
│   │   └── main.css       # Main stylesheet from the mockup
│   └── js/
│       └── main.js        # Main JavaScript file
│
├── inc/
│   ├── acf-fields.php     # ACF field group definitions
│   └── ajax-handlers.php  # AJAX request handlers
│
├── template-parts/
│   ├── ...                # Modular template files (e.g., content-service.php)
│
├── footer.php             # The theme footer template
├── front-page.php         # The template for the homepage
├── functions.php          # Theme functions and definitions
├── header.php             # The theme header template
├── index.php              # The main blog index template
└── style.css              # Theme metadata and stylesheet
```

## 4. Custom Post Types (CPTs)

The theme registers five CPTs to manage the clinic's content. These are defined in `functions.php`.

-   **Services (`service`):** For managing medical services offered by the clinic.
-   **Doctors (`doctor`):** For creating profiles for the clinic's medical staff.
-   **Equipment (`equipment`):** To showcase the clinic's medical equipment.
-   **Loyalty Programs (`loyalty`):** For detailing loyalty and discount programs.
-   **Reviews (`review`):** To display patient testimonials.

## 5. Advanced Custom Fields (ACF)

The theme uses ACF to add custom data fields to the CPTs, making content entry more intuitive. The field groups are defined programmatically in `inc/acf-fields.php`.

-   **Service Fields:** `Price Label`, `Price Value`.
-   **Doctor Fields:** `Specialty`, `Experience`, `Rating`, `Achievements` (repeater).
-   **Equipment Fields:** `Manufacturer`, `Features` (repeater).
-   **Loyalty Program Fields:** `Benefits` (repeater).
-   **Review Fields:** `Rating`, `Date`, `Verified Review?` (true/false).

## 6. AJAX Functionality

To enhance user experience, the theme uses AJAX for the contact form.

-   **Handler:** The logic is located in `inc/ajax-handlers.php` within the `pchelka_handle_contact_form` function.
-   **Security:** It uses a WordPress nonce (`pchelka_ajax_nonce`) to protect against CSRF attacks.
-   **Process:** The handler sanitizes input, validates data, sends an email to the site administrator, and returns a JSON response to the front-end.

## 7. Further Development

The `pchelka-theme` is built to be extensible. When adding new features:
-   **New CPTs or Taxonomies:** Add them to the `pchelka_register_post_types` function in `functions.php`.
-   **New ACF Fields:** Define new field groups in `inc/acf-fields.php`.
-   **New AJAX Actions:** Create a new handler function in `inc/ajax-handlers.php` and hook it to `wp_ajax_` and `wp_ajax_nopriv_`.
-   **Template Modifications:** Use the `template-parts` directory to create or modify modular templates.

This guide should serve as a solid foundation for working with and extending the `pchelka-theme`.