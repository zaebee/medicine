<?php
/**
 * Pchelka Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pchelka
 */

if ( ! function_exists( 'pchelka_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pchelka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'pchelka', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'pchelka' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pchelka_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'pchelka_setup' );

/**
 * Enqueue scripts and styles.
 */
function pchelka_scripts() {
	// Main theme stylesheet from the mockup
	wp_enqueue_style( 'pchelka-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

	// The theme's root stylesheet (style.css). It's good practice to load it, even if empty, and make it dependent on the main style.
	wp_enqueue_style( 'pchelka-style', get_stylesheet_uri(), array('pchelka-main-style'), '1.0' );

	// Main theme javascript from the mockup
	wp_enqueue_script( 'pchelka-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

    // Localize the script with data for AJAX
    wp_localize_script( 'pchelka-main-js', 'pchelka_ajax_obj', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'pchelka_ajax_nonce' ),
    ) );

	// WordPress's comment-reply script for threaded comments.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pchelka_scripts' );

/**
 * Register Custom Post Types for the theme.
 */
function pchelka_register_post_types() {

	// CPT: Services
	$services_labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'pchelka' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'pchelka' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'pchelka' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'pchelka' ),
	);
	$services_args = array(
		'labels'             => $services_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-medical',
	);
	register_post_type( 'service', $services_args );

    // CPT: Doctors
	$doctors_labels = array(
		'name'                  => _x( 'Doctors', 'Post type general name', 'pchelka' ),
		'singular_name'         => _x( 'Doctor', 'Post type singular name', 'pchelka' ),
		'menu_name'             => _x( 'Doctors', 'Admin Menu text', 'pchelka' ),
		'name_admin_bar'        => _x( 'Doctor', 'Add New on Toolbar', 'pchelka' ),
	);
	$doctors_args = array(
		'labels'             => $doctors_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'doctor' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-businessperson',
	);
	register_post_type( 'doctor', $doctors_args );

    // CPT: Equipment
	$equipment_labels = array(
		'name'                  => _x( 'Equipment', 'Post type general name', 'pchelka' ),
		'singular_name'         => _x( 'Equipment', 'Post type singular name', 'pchelka' ),
		'menu_name'             => _x( 'Equipment', 'Admin Menu text', 'pchelka' ),
		'name_admin_bar'        => _x( 'Equipment', 'Add New on Toolbar', 'pchelka' ),
	);
	$equipment_args = array(
		'labels'             => $equipment_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'equipment' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-admin-tools',
	);
	register_post_type( 'equipment', $equipment_args );

    // CPT: Loyalty Programs
	$loyalty_labels = array(
		'name'                  => _x( 'Loyalty Programs', 'Post type general name', 'pchelka' ),
		'singular_name'         => _x( 'Loyalty Program', 'Post type singular name', 'pchelka' ),
		'menu_name'             => _x( 'Loyalty', 'Admin Menu text', 'pchelka' ),
		'name_admin_bar'        => _x( 'Loyalty Program', 'Add New on Toolbar', 'pchelka' ),
	);
	$loyalty_args = array(
		'labels'             => $loyalty_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'loyalty' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-star-filled',
	);
	register_post_type( 'loyalty', $loyalty_args );

    // CPT: Reviews
	$reviews_labels = array(
		'name'                  => _x( 'Reviews', 'Post type general name', 'pchelka' ),
		'singular_name'         => _x( 'Review', 'Post type singular name', 'pchelka' ),
		'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'pchelka' ),
		'name_admin_bar'        => _x( 'Review', 'Add New on Toolbar', 'pchelka' ),
	);
	$reviews_args = array(
		'labels'             => $reviews_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'review' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-format-quote',
	);
	register_post_type( 'review', $reviews_args );

    // CPT: Price List Items
    $price_item_labels = array(
        'name'                  => _x( 'Price Items', 'Post type general name', 'pchelka' ),
        'singular_name'         => _x( 'Price Item', 'Post type singular name', 'pchelka' ),
    );
    $price_item_args = array(
        'labels'             => $price_item_labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-money-alt',
        'supports'           => array( 'title', 'editor' ),
    );
    register_post_type( 'price_item', $price_item_args );

    // CPT: Price Packages
    $price_package_labels = array(
        'name'                  => _x( 'Price Packages', 'Post type general name', 'pchelka' ),
        'singular_name'         => _x( 'Price Package', 'Post type singular name', 'pchelka' ),
    );
    $price_package_args = array(
        'labels'             => $price_package_labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => 'edit.php?post_type=price_item',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'price_package', $price_package_args );

    // Taxonomy: Price Categories
    $price_category_labels = array(
        'name'              => _x( 'Price Categories', 'taxonomy general name', 'pchelka' ),
        'singular_name'     => _x( 'Price Category', 'taxonomy singular name', 'pchelka' ),
    );
    $price_category_args = array(
        'hierarchical'      => true,
        'labels'            => $price_category_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'price-category' ),
    );
    register_taxonomy( 'price_category', array( 'price_item' ), $price_category_args );
}
add_action( 'init', 'pchelka_register_post_types' );

/**
 * Include ACF field definitions.
 */
require_once get_template_directory() . '/inc/acf-fields.php';

/**
 * Include AJAX handlers.
 */
require_once get_template_directory() . '/inc/ajax-handlers.php';

/**
 * Add theme customization options to the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pchelka_customize_register( $wp_customize ) {
    // Add a section for section titles
    $wp_customize->add_section( 'pchelka_section_titles', array(
        'title'      => __( 'Section Titles', 'pchelka' ),
        'priority'   => 30,
    ) );

    // Add setting for Services section title
    $wp_customize->add_setting( 'services_section_title', array(
        'default'   => __( 'Наши услуги', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'services_section_title', array(
        'label'      => __( 'Services Section Title', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'text',
    ) );

    // Add setting for Services section subtitle
    $wp_customize->add_setting( 'services_section_subtitle', array(
        'default'   => __( 'Реабилитация и лечение опорно-двигательного аппарата, флебология', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'services_section_subtitle', array(
        'label'      => __( 'Services Section Subtitle', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'textarea',
    ) );

    // Add setting for About section title
    $wp_customize->add_setting( 'about_section_title', array(
        'default'   => __( 'О клинике «Пчёлка»', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_section_title', array(
        'label'      => __( 'About Section Title', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'text',
    ) );

    // Add setting for About section description (paragraph 1)
    $wp_customize->add_setting( 'about_section_desc_1', array(
        'default'   => __( 'Мы создали медицинский центр нового поколения, где современные технологии сочетаются с индивидуальным подходом к каждому пациенту. Наша миссия — сделать качественную медицину доступной и комфортной.', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'about_section_desc_1', array(
        'label'      => __( 'About Section Description (Paragraph 1)', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'textarea',
    ) );

    // Add setting for About section description (paragraph 2)
    $wp_customize->add_setting( 'about_section_desc_2', array(
        'default'   => __( 'В клинике работают врачи высшей категории с многолетним опытом. Мы используем только проверенные методики лечения и новейшее диагностическое оборудование экспертного класса.', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'about_section_desc_2', array(
        'label'      => __( 'About Section Description (Paragraph 2)', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'textarea',
    ) );

    // Add setting for Benefits section title
    $wp_customize->add_setting( 'benefits_section_title', array(
        'default'   => __( 'Почему выбирают нас', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'benefits_section_title', array(
        'label'      => __( 'Benefits Section Title', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'text',
    ) );

    // Add setting for Benefits section subtitle
    $wp_customize->add_setting( 'benefits_section_subtitle', array(
        'default'   => __( 'Мы создали все условия для вашего комфорта и здоровья', 'pchelka' ),
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'benefits_section_subtitle', array(
        'label'      => __( 'Benefits Section Subtitle', 'pchelka' ),
        'section'    => 'pchelka_section_titles',
        'type'       => 'textarea',
    ) );

    // Doctors Section
    $wp_customize->add_setting( 'doctors_section_title', ['default' => __( 'Наши врачи', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'doctors_section_title', ['label' => __( 'Doctors Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'doctors_section_subtitle', ['default' => __( 'Команда профессионалов с многолетним опытом', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'doctors_section_subtitle', ['label' => __( 'Doctors Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Equipment Section
    $wp_customize->add_setting( 'equipment_section_title', ['default' => __( 'Современное оборудование', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'equipment_section_title', ['label' => __( 'Equipment Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'equipment_section_subtitle', ['default' => __( 'Диагностическая техника экспертного класса от мировых производителей', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'equipment_section_subtitle', ['label' => __( 'Equipment Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Loyalty Section
    $wp_customize->add_setting( 'loyalty_section_title', ['default' => __( 'Программы лояльности', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'loyalty_section_title', ['label' => __( 'Loyalty Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'loyalty_section_subtitle', ['default' => __( 'Выгодные условия для постоянных пациентов и их семей', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'loyalty_section_subtitle', ['label' => __( 'Loyalty Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Licenses Section
    $wp_customize->add_setting( 'licenses_section_title', ['default' => __( 'Лицензии и сертификаты', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'licenses_section_title', ['label' => __( 'Licenses Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'licenses_section_subtitle', ['default' => __( 'Вся наша деятельность лицензирована и сертифицирована', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'licenses_section_subtitle', ['label' => __( 'Licenses Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Reviews Section
    $wp_customize->add_setting( 'reviews_section_title', ['default' => __( 'Отзывы наших пациентов', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'reviews_section_title', ['label' => __( 'Reviews Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'reviews_section_subtitle', ['default' => __( 'Нам доверяют тысячи пациентов', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'reviews_section_subtitle', ['label' => __( 'Reviews Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Pricing Section
    $wp_customize->add_setting( 'pricing_section_title', ['default' => __( 'Прозрачное ценообразование', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'pricing_section_title', ['label' => __( 'Pricing Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'pricing_section_subtitle', ['default' => __( 'Честные цены без скрытых платежей', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'pricing_section_subtitle', ['label' => __( 'Pricing Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );

    // Contact Section
    $wp_customize->add_setting( 'contact_section_title', ['default' => __( 'Свяжитесь с нами', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'contact_section_title', ['label' => __( 'Contact Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
    $wp_customize->add_setting( 'contact_section_subtitle', ['default' => __( 'Мы всегда рады ответить на ваши вопросы', 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( \'contact_section_subtitle\', [\'label\' => __( \'Contact Subtitle\', \'pchelka\' ), \'section\' => \'pchelka_section_titles\', \'type\' => \'textarea\'] );\n\n    // Hero Section Customization\n    $wp_customize->add_section( \'pchelka_hero_section\', array(\n        \'title\'      => __( \'Hero Section\', \'pchelka\' ),\n        \'priority\'   => 25,\n    ) );\n\n    // Hero Type\n    $wp_customize->add_setting( \'hero_type\', [\'default\' => \'slider\', \'sanitize_callback\' => \'sanitize_text_field\'] );\n    $wp_customize->add_control( \'hero_type\', [\n        \'label\'   => __( \'Hero Background Type\', \'pchelka\' ),\n        \'section\' => \'pchelka_hero_section\',\n        \'type\'    => \'select\',\n        \'choices\' => [\'slider\' => __( \'Image Slider\', \'pchelka\' ), \'video\' => __( \'Video\', \'pchelka\' )],\n    ] );\n\n    // Hero Video\n    $wp_customize->add_setting( \'hero_video_mp4\', [\'sanitize_callback\' => \'esc_url_raw\'] );\n    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, \'hero_video_mp4\', [\n        \'label\'    => __( \'Upload MP4 Video\', \'pchelka\' ),\n        \'section\'  => \'pchelka_hero_section\',\n        \'settings\' => \'hero_video_mp4\',\n    ] ) );\n\n    // Hero Video Poster\n    $wp_customize->add_setting( \'hero_video_poster\', [\'sanitize_callback\' => \'esc_url_raw\'] );\n    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, \'hero_video_poster\', [\n        \'label\'    => __( \'Video Poster Image\', \'pchelka\' ),\n        \'section\'  => \'pchelka_hero_section\',\n        \'settings\' => \'hero_video_poster\',\n    ] ) );\n\n    // Hero Slider Images\n    for ( $i = 1; $i <= 3; $i++ ) {\n        $wp_customize->add_setting( \"hero_slider_image_{\$i}\", [\'sanitize_callback\' => \'esc_url_raw\'] );\n        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, \"hero_slider_image_{\$i}\", [\n            \'label\'    => sprintf( __( \'Slider Image %d\', \'pchelka\' ), \$i ),\n            \'section\'  => \'pchelka_hero_section\',\n            \'settings\' => \"hero_slider_image_{\$i}\",\n        ] ) );\n    }\n}\nadd_action( \'customize_register\', \'pchelka_customize_register\' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pchelka_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'pchelka' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'pchelka' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title footer-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'pchelka' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'pchelka' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title footer-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'pchelka' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'pchelka' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title footer-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'pchelka' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'pchelka' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title footer-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'pchelka_widgets_init' );