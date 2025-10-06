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
}
add_action( 'customize_register', 'pchelka_customize_register' );