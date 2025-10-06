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

**The Goal:** To build a professional, secure, and fast website using WordPress, a pre-built theme, and several powerful plugins.

**Your Toolkit (as per the project plan):**
*   **CMS:** WordPress
*   **Theme:** MediPlus (or a similar medical theme)
*   **Page Builder:** Elementor
*   **Key Plugins:** Custom Post Type UI, Advanced Custom Fields, Wordfence Security, WP Super Cache, Yoast SEO.

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

## Phase 2: Installing the Theme and Essential Plugins

Now we add the core functionality and look-and-feel.

1.  **Install the Theme:**
    *   The recommended theme is **MediPlus**. You will need to purchase and download the theme's `.zip` file from the theme marketplace (like ThemeForest).
    *   In the WordPress admin, go to **Appearance > Themes > Add New > Upload Theme**.
    *   Select the `.zip` file you downloaded and click **Install Now**, then **Activate**.

2.  **Install the Plugins:**
    *   The architecture document lists many plugins. Let's install them in groups. Go to **Plugins > Add New** for each one.
    *   **Search, Install, and Activate** the following plugins one by one:

    *   **Content Structure:**
        *   `Custom Post Type UI` (To create "Services" and "Doctors" sections).
        *   `Advanced Custom Fields` (To add special fields like "Price" to services).
        *   `Elementor` (The main page builder, the theme may prompt you to install this).

    *   **Functionality:**
        *   `Contact Form 7` (For creating contact forms).
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

## Phase 3: Creating the Custom Content Structure

This is the most important part of organizing the site's information. We will create dedicated sections for "Services" and "Doctors" so the client can easily manage them.

1.  **Create the "Services" Post Type:**
    *   Go to the new **CPT UI** menu in the admin panel.
    *   Click **Add/Edit Post Types**.
    *   For `Post Type Slug`, enter `service`.
    *   For `Plural Label`, enter `Services`.
    *   For `Singular Label`, enter `Service`.
    *   Scroll down to **Settings**. Find `Has Archive` and set it to `True`.
    *   Click **Add Post Type**. You should see a new "Services" menu appear in the sidebar!

2.  **Create the "Doctors" Post Type:**
    *   Repeat the process above.
    *   Slug: `doctor`, Plural: `Doctors`, Singular: `Doctor`.
    *   Make sure `Has Archive` is `True`.

3.  **Add Custom Fields to "Services":**
    *   Go to the new **Custom Fields** menu.
    *   Click **Add New** to create a Field Group. Name it `Service Fields`.
    *   Under **Location**, set the rule to `Show this field group if Post Type is equal to Service`.
    *   Now, add fields by clicking **+ Add Field**. Based on the architecture doc, create fields for:
        *   `service_price` (Field Type: `Text` or `Number`)
        *   `service_duration` (Field Type: `Text`)
        *   And any others listed in the documentation.

4.  **Add Custom Fields to "Doctors":**
    *   Create another Field Group named `Doctor Fields`.
    *   Set the Location rule to `Post Type is equal to Doctor`.
    *   Add fields for:
        *   `doctor_specialization` (Field Type: `Text`)
        *   `doctor_experience` (Field Type: `Number`)
        *   `doctor_photo` (Field Type: `Image`)

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

3.  **Design the Home Page with Elementor:**
    *   Go to **Pages**, hover over the Home page, and click **Edit with Elementor**.
    *   Use the Elementor drag-and-drop interface to build the page. Your theme (MediPlus) will provide pre-built "widgets" or "blocks" you can use to quickly add sections for services, doctors, testimonials, etc.

4.  **Set Up Contact Forms:**
    *   Go to the **Contact** menu. You will see a default form.
    *   Edit it or create a new one. Name it "Contact Form".
    *   Go to the **Mail** tab and configure where the email notifications should be sent.
    *   Save the form. It will give you a **shortcode** (like `[contact-form-7 id="123" title="Contact form 1"]`).
    *   Edit your "Contact" page and paste this shortcode into the text area. The form will appear on the page.

---

## Phase 5: Final Configuration and Launch Checks

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