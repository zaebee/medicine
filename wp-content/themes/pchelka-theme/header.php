<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and the site header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pchelka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a href="#main-content" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'pchelka' ); ?></a>

    <!-- Header from mockup -->
    <header class="header" role="banner">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="Клиника Пчёлка Медик - На главную">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" class="logo-image" width="120" height="auto">
                </a>

                <!-- Navigation -->
                <nav class="nav" role="navigation" aria-label="Основная навигация">
                    <button class="mobile-menu-toggle" aria-label="Открыть меню" aria-expanded="false">
                        <span class="hamburger"></span>
                    </button>
                    <?php
                    // We will replace this with a dynamic wp_nav_menu() later.
                    ?>
                    <ul class="nav-list">
                        <li><a href="#services" class="nav-link">Услуги</a></li>
                        <li><a href="#doctors" class="nav-link">Врачи</a></li>
                        <li><a href="#equipment" class="nav-link">Оборудование</a></li>
                        <li><a href="#loyalty" class="nav-link">Программы</a></li>
                        <li><a href="#pricing" class="nav-link">Цены</a></li>
                        <li><a href="#contact" class="nav-link">Контакты</a></li>
                    </ul>
                </nav>

                <!-- Header actions -->
                <div class="header-actions">
                    <a href="tel:+74951234567" class="header-phone">+7 (495) 123-45-67</a>
                    <button onclick="openCallbackModal()" class="btn btn-primary btn-sm">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- End header from mockup -->

	<div id="content" class="site-content">