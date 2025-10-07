---
layout: documentation
title: "Developer Guide"
nav_title: "Developer Guide"
description: "A step-by-step guide for developers to set up and build the WordPress site for the 'Pchyolka' clinic."
icon: "👩‍💻"
permalink: /developer-guide/
lang: en
---

# 👩‍💻 WordPress Development & Setup Guide (Beginner-Friendly)

**Welcome, developer!** This guide is your step-by-step manual for building the "Пчёлка" clinic website. It's based on the excellent documentation provided and is designed to be easy to follow, even if you're new to WordPress.

**The Goal:** To build a professional, secure, and fast website using WordPress and our custom-built `pchelka-theme`.

**Your Toolkit (as per the project plan):**
*   **CMS:** WordPress
*   **Theme:** `pchelka-theme` (our custom theme)
*   **Key Plugins:** Advanced Custom Fields, Wordfence Security, WP Super Cache, Yoast SEO.

---

## 📚 Related Documentation

Before you start, familiarize yourself with these key documents:

- **[Custom Theme Guide](/development/custom-theme-guide/)** - **START HERE!** Detailed guide to the `pchelka-theme` structure, CPTs, and ACF fields. ⭐ **NEW**
- **[WordPress Architecture](/technical/wordpress-architecture/)** - Detailed technical architecture and plugin specifications
- **[WordPress Solution](/technical/wordpress-solution/)** - Why WordPress was chosen over Django
- **[WordPress Setup Checklist](/deployment/wordpress-setup-checklist/)** - Detailed deployment checklist for Sprinthost
- **[Services Catalog](/business/services-catalog/)** - Complete list of clinic services to add
- **[User Guide](/user-guide/)** - Guide for clinic administrators (show this to the client)

---

## Phase 1: Initial Server and WordPress Setup

This phase is about getting your foundation ready.

1.  **Set Up a Hosting Environment:**
    *   The client uses **Sprinthost**. You will need access to their hosting control panel.
    *   If you want to develop locally first (recommended), you can use a tool like **LocalWP** or a **Docker** container with a WordPress image. This creates a safe sandbox on your computer.

2.  **Install WordPress:**
    *   Most hosting panels (including Sprinthost) have a "one-click" WordPress installer. Use it. It will ask for a site title and admin username/password.
    *   If installing manually or in Docker, you'll need to create a MySQL database first, then upload the WordPress files and run the famous "5-minute install."

3.  **Initial WordPress Configuration:**
    *   Log in to your new WordPress admin panel (usually at `yourdomain.com/wp-admin`).
    *   Go to **Settings > General**. Set the `Site Title`, `Tagline`, `Timezone`, and `Site Language` (Russian).
    *   Go to **Settings > Permalinks**. Change the setting to **Post name**. This makes your URLs clean and SEO-friendly (e.g., `.../services/uzi/` instead of `.../?p=123`). This is very important!

---

## Phase 2: Theme Setup and Plugin Installation

Now we add the core functionality and look-and-feel using our custom theme.

1.  **Install the Custom Theme:**
    *   Follow the detailed instructions in the **[Custom Theme Guide](/development/custom-theme-guide/)**.
    *   This single step replaces the need for a separate theme, CPT UI plugin, and page builder. Our theme handles all of this.

2.  **Verify Custom Content Types:**
    *   After activating the theme, you should see new items in the WordPress admin sidebar: **Services, Doctors, Equipment, Loyalty, and Reviews**.
    *   These are automatically created by the theme. There is no need to use the CPT UI plugin.

3.  **Install Essential Plugins:**
    *   Our theme is lightweight, but we still need a few key plugins. Go to **Plugins > Add New** for each one.
    *   **Search, Install, and Activate** the following:

    *   **Required for Theme:**
        *   `Advanced Custom Fields` (The free version from the repository is sufficient).

    *   **Functionality:**
        *   `WP Mail SMTP` (To make sure emails from forms don't go to spam).
        *   `Click to Chat` (For the WhatsApp button).

    *   **Performance:**
        *   `WP Super Cache` (To make the site fast).
        *   `Smush` (To optimize images automatically).

    *   **Security & Backups:**
        *   `Wordfence Security` (A firewall and security scanner).
        *   `UpdraftPlus` (For automatic backups).

    *   **SEO:**
        *   `Yoast SEO` (The best plugin for search engine optimization).

---

## Phase 4: Adding Content and Building the Site

With the structure in place, you can now add content and design the pages.

1.  **Populate Content:**
    *   Go to **Services > Add New** and create a few sample services. Fill in the standard title/description and the new custom fields you added.
    *   Go to **Doctors > Add New** and add the clinic's doctors.

2.  **Create the Main Pages:**
    *   Go to **Pages > Add New** and create the essential pages:
        *   `Home`
        *   `About Us`
        *   `Contact`
        *   `Privacy Policy`

3.  **Build Out Pages Using Theme Templates:**
    *   The design of the site is controlled by the PHP template files within the `pchelka-theme` directory (e.g., `front-page.php`, `template-parts/content-service.php`).
    *   There is no page builder like Elementor. To modify the layout or design, you will need to edit the theme's `.php` and `.css` files directly.

4.  **Understand the Contact Form:**
    *   The contact form is built directly into the theme templates.
    *   It does **not** use a plugin like Contact Form 7.
    *   The form submission is handled by a custom AJAX handler defined in `inc/ajax-handlers.php`. Refer to the **[Custom Theme Guide](/development/custom-theme-guide/)** for more details.

5.  **Configure Email Sending (WP Mail SMTP):**
    *   **Critical:** WordPress default email often goes to spam!
    *   Go to **Settings > WP Mail SMTP**.
    *   Choose a mailer (recommended: Gmail, SendGrid, or Mailgun).
    *   Follow the setup wizard to connect your email account.
    *   Send a test email to verify it works.
    *   **Without this, contact forms won't work properly!**

---

## Phase 5: Security Best Practices

**Important:** Security is critical for a medical website handling patient data.

1.  **Strong Passwords:**
    *   Use passwords with 12+ characters
    *   Include uppercase, lowercase, numbers, and symbols
    *   Never use "admin" as username
    *   Change default passwords immediately

2.  **Disable File Editing:**
    *   Add to `wp-config.php`: `define('DISALLOW_FILE_EDIT', true);`
    *   This prevents hackers from editing theme/plugin files through admin panel

3.  **Change Database Prefix:**
    *   During installation, change `wp_` to something unique (e.g., `pchelka_`)
    *   This makes SQL injection attacks harder

4.  **SSL/HTTPS:**
    *   **Mandatory:** Enable SSL certificate (Let's Encrypt is free)
    *   Go to **Settings > General** and change URLs to `https://`
    *   Install "Really Simple SSL" plugin to force HTTPS everywhere

5.  **Limit Login Attempts:**
    *   Install "Limit Login Attempts Reloaded" plugin
    *   Blocks brute-force attacks after 3-5 failed attempts

6.  **Two-Factor Authentication:**
    *   Install "Two Factor Authentication" plugin
    *   Enable 2FA for all admin accounts
    *   Use Google Authenticator or similar app

7.  **Regular Updates:**
    *   Update WordPress core, themes, and plugins weekly
    *   Enable automatic updates for security patches
    *   Test updates on staging site first

---

## Phase 6: Final Configuration and Launch Checks

The final polish before the site is ready.

1.  **Configure SEO:**
    *   Go to the new **Yoast SEO** menu. It will have a "First-time configuration" wizard. Follow it. It will ask for the organization name, logo, etc. This helps Google understand the site.

2.  **Configure Security and Performance:**
    *   **Wordfence:** Run the setup wizard. It will optimize the firewall.
    *   **WP Super Cache:** Go to **Settings > WP Super Cache**. Turn Caching **On** (the big button).

3.  **Set Up Backups:**
    *   Go to **Settings > UpdraftPlus Backups**.
    *   Go to the **Settings** tab and connect it to a remote storage location like Google Drive. Set a schedule for daily database backups and weekly file backups.

4.  **Final Launch Checklist:**
    *   [ ] Does the site look good on mobile, tablet, and desktop?
    *   [ ] Do all links and buttons work?
    *   [ ] Do the contact forms send emails correctly?
    *   [ ] Is the WhatsApp button working?
    *   [ ] Is caching enabled?
    *   [ ] Are automatic backups scheduled?
    *   [ ] Have you submitted the `sitemap.xml` (generated by Yoast) to Google Search Console?

You are now ready to develop the site! This guide, combined with the detailed documentation, gives you a clear path from start to finish. Good luck!