<?php
/**
 * Template part for displaying the hero section
 *
 * @package Pchelka
 */

$hero_type = get_theme_mod( 'hero_type', 'slider' );

$hero_video_mp4 = get_theme_mod( 'hero_video_mp4' );
$hero_video_poster = get_theme_mod( 'hero_video_poster' );

$slider_images = [];
for ( $i = 1; $i <= 3; $i++ ) {
    $image = get_theme_mod( "hero_slider_image_{\$i}" );
    if ( $image ) {
        $slider_images[] = $image;
    }
}
?>
<section class="hero" id="main-content">
    <div class="hero-media">
        <?php if ( $hero_type === 'video' && ! empty( $hero_video_mp4 ) ) : ?>
            <video class="hero-video" autoplay muted loop playsinline poster="<?php echo esc_url( $hero_video_poster ); ?>">
                <source src="<?php echo esc_url( $hero_video_mp4 ); ?>" type="video/mp4">
                <p><?php esc_html_e( 'Your browser does not support the video tag.', 'pchelka' ); ?></p>
            </video>
        <?php elseif ( $hero_type === 'slider' && ! empty( $slider_images ) ) : ?>
            <div class="hero-slider">
                <div class="slider-track">
                    <?php foreach ( $slider_images as $index => $image_url ) : ?>
                        <div class="slide <?php echo $index === 0 ? 'active' : '' ; ?>">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php printf( esc_attr__( 'Slider Image %d', 'pchelka' ), $index + 1 ); ?>" loading="eager">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="slider-btn slider-prev" aria-label="<?php esc_attr_e( 'Previous slide', 'pchelka' ); ?>">‹</button>
                <button class="slider-btn slider-next" aria-label="<?php esc_attr_e( 'Next slide', 'pchelka' ); ?>">›</button>
                <div class="slider-dots">
                    <?php foreach ( $slider_images as $index => $image_url ) : ?>
                        <button class="dot <?php echo $index === 0 ? 'active' : '' ; ?>" aria-label="<?php printf( esc_attr__( 'Slide %d', 'pchelka' ), $index + 1 ); ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else : // Fallback to a default image if nothing is set ?>
            <div class="hero-slider">
                <div class="slider-track">
                    <div class="slide active">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-hero.jpg" alt="<?php esc_attr_e( 'Clinic placeholder image', 'pchelka' ); ?>">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero-subtitle"><?php bloginfo( 'description' ); ?></p>
            <div class="hero-features">
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Современное оборудование</span>
                </div>
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Опытные специалисты</span>
                </div>
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Программы лояльности</span>
                </div>
            </div>
        </div>
    </div>
</section>