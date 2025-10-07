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
	 */
	function pchelka_setup() {
		load_theme_textdomain( 'pchelka', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'pchelka' ),
			)
		);
		add_theme_support(
			'html5',
			array('search-form','comment-form','comment-list','gallery','caption','style','script',)
		);
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support(
			'custom-logo',
			array('height'=> 250,'width'=> 250,'flex-width'=> true,'flex-height'=> true,)
		);
	}
endif;
add_action( 'after_setup_theme', 'pchelka_setup' );

/**
 * Enqueue scripts and styles.
 */
function pchelka_scripts() {
	wp_enqueue_style( 'pchelka-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
	wp_enqueue_style( 'pchelka-style', get_stylesheet_uri(), array('pchelka-main-style'), '1.0' );
	wp_enqueue_script( 'pchelka-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
    wp_localize_script( 'pchelka-main-js', 'pchelka_ajax_obj', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'pchelka_ajax_nonce' ),
    ) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pchelka_scripts' );

/**
 * Register Custom Post Types for the theme.
 */
function pchelka_register_post_types() {
    $cpt_settings = [
        'service' => ['name' => 'Services', 'singular' => 'Service', 'icon' => 'dashicons-medical'],
        'doctor' => ['name' => 'Doctors', 'singular' => 'Doctor', 'icon' => 'dashicons-businessperson'],
        'equipment' => ['name' => 'Equipment', 'singular' => 'Equipment', 'icon' => 'dashicons-admin-tools'],
        'loyalty' => ['name' => 'Loyalty Programs', 'singular' => 'Loyalty Program', 'icon' => 'dashicons-star-filled'],
        'review' => ['name' => 'Reviews', 'singular' => 'Review', 'icon' => 'dashicons-format-quote'],
    ];
    foreach($cpt_settings as $slug => $names) {
        register_post_type( $slug, [
            'labels' => ['name' => __( $names['name'], 'pchelka' ), 'singular_name' => __( $names['singular'], 'pchelka' )],
            'public' => true, 'show_ui' => true, 'show_in_menu' => true, 'rewrite' => ['slug' => $slug], 'supports' => ['title', 'editor', 'thumbnail'], 'menu_icon' => $names['icon']
        ]);
    }

    register_post_type( 'price_item', ['labels' => ['name' => __( 'Price Items', 'pchelka' ), 'singular_name' => __( 'Price Item', 'pchelka' )], 'public' => false, 'show_ui' => true, 'show_in_menu' => true, 'menu_icon' => 'dashicons-money-alt', 'supports' => ['title', 'editor']] );
    register_post_type( 'price_package', ['labels' => ['name' => __( 'Price Packages', 'pchelka' ), 'singular_name' => __( 'Price Package', 'pchelka' )], 'public' => false, 'show_ui' => true, 'show_in_menu' => 'edit.php?post_type=price_item', 'supports' => ['title', 'editor', 'thumbnail']] );
    register_taxonomy( 'price_category', ['price_item'], ['hierarchical' => true, 'labels' => ['name' => __( 'Price Categories', 'pchelka' ), 'singular_name' => __( 'Price Category', 'pchelka' )], 'show_ui' => true, 'show_admin_column' => true, 'rewrite' => ['slug' => 'price-category']] );
}
add_action( 'init', 'pchelka_register_post_types' );

require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/ajax-handlers.php';

function pchelka_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'pchelka_section_titles', ['title' => __( 'Section Titles', 'pchelka' ), 'priority' => 30] );

    $sections = [
        'services' => ['title' => 'Наши услуги', 'subtitle' => 'Реабилитация и лечение опорно-двигательного аппарата, флебология'],
        'about' => ['title' => 'О клинике «Пчёлка»', 'subtitle' => 'Мы создали медицинский центр нового поколения...'],
        'benefits' => ['title' => 'Почему выбирают нас', 'subtitle' => 'Мы создали все условия для вашего комфорта и здоровья'],
        'doctors' => ['title' => 'Наши врачи', 'subtitle' => 'Команда профессионалов с многолетним опытом'],
        'equipment' => ['title' => 'Современное оборудование', 'subtitle' => 'Диагностическая техника экспертного класса от мировых производителей'],
        'loyalty' => ['title' => 'Программы лояльности', 'subtitle' => 'Выгодные условия для постоянных пациентов и их семей'],
        'licenses' => ['title' => 'Лицензии и сертификаты', 'subtitle' => 'Вся наша деятельность лицензирована и сертифицирована'],
        'reviews' => ['title' => 'Отзывы наших пациентов', 'subtitle' => 'Нам доверяют тысячи пациентов'],
        'pricing' => ['title' => 'Прозрачное ценообразование', 'subtitle' => 'Честные цены без скрытых платежей'],
        'contact' => ['title' => 'Свяжитесь с нами', 'subtitle' => 'Мы всегда рады ответить на ваши вопросы']
    ];

    foreach ($sections as $slug => $data) {
        $wp_customize->add_setting( "{$slug}_section_title", ['default' => __( $data['title'], 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
        $wp_customize->add_control( "{$slug}_section_title", ['label' => __(ucfirst($slug) . ' Title', 'pchelka' ), 'section' => 'pchelka_section_titles'] );
        if (isset($data['subtitle'])) {
            $wp_customize->add_setting( "{$slug}_section_subtitle", ['default' => __( $data['subtitle'], 'pchelka' ), 'sanitize_callback' => 'sanitize_text_field'] );
            $wp_customize->add_control( "{$slug}_section_subtitle", ['label' => __(ucfirst($slug) . ' Subtitle', 'pchelka' ), 'section' => 'pchelka_section_titles', 'type' => 'textarea'] );
        }
    }

    // Hero Section Customization
    $wp_customize->add_section( 'pchelka_hero_section', ['title' => __( 'Hero Section', 'pchelka' ), 'priority' => 25] );
    $wp_customize->add_setting( 'hero_type', ['default' => 'slider', 'sanitize_callback' => 'sanitize_text_field'] );
    $wp_customize->add_control( 'hero_type', ['label' => __( 'Hero Background Type', 'pchelka' ), 'section' => 'pchelka_hero_section', 'type' => 'select', 'choices' => ['slider' => __( 'Image Slider', 'pchelka' ), 'video' => __( 'Video', 'pchelka' )]] );
    $wp_customize->add_setting( 'hero_video_mp4', ['sanitize_callback' => 'esc_url_raw'] );
    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'hero_video_mp4', ['label' => __( 'Upload MP4 Video', 'pchelka' ), 'section' => 'pchelka_hero_section'] ) );
    $wp_customize->add_setting( 'hero_video_poster', ['sanitize_callback' => 'esc_url_raw'] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_video_poster', ['label' => __( 'Video Poster Image', 'pchelka' ), 'section' => 'pchelka_hero_section'] ) );
    for ( $i = 1; $i <= 3; $i++ ) {
        $wp_customize->add_setting( "hero_slider_image_{$i}", ['sanitize_callback' => 'esc_url_raw'] );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "hero_slider_image_{$i}", ['label' => sprintf( __( 'Slider Image %d', 'pchelka' ), $i ), 'section' => 'pchelka_hero_section'] ) );
    }
}
add_action( 'customize_register', 'pchelka_customize_register' );

function pchelka_widgets_init() {
    for ( $i = 1; $i <= 4; $i++ ) {
        register_sidebar( [ 'name' => sprintf( esc_html__( 'Footer Column %d', 'pchelka' ), $i ), 'id' => "footer-{$i}", 'description' => esc_html__( 'Add widgets here.', 'pchelka' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title footer-title">', 'after_title' => '</h4>'] );
    }
}
add_action( 'widgets_init', 'pchelka_widgets_init' );
