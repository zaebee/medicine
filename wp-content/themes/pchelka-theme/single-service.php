<?php
/**
 * The template for displaying a single Service post.
 *
 * @package Pchelka
 */

get_header();
?>

<main id="main-content" class="site-main">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>

            <!-- Breadcrumbs (can be made dynamic later with a helper function) -->
            <nav class="breadcrumbs" aria-label="Навигационная цепочка">
                <div class="container">
                    <ol class="breadcrumb-list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>">Услуги</a></li>
                        <li><?php the_title(); ?></li>
                    </ol>
                </div>
            </nav>

            <!-- Service Hero Section -->
            <section class="service-hero">
                <div class="container">
                    <div class="service-hero-content">
                        <div class="service-hero-text">
                            <h1 class="service-hero-title"><?php the_title(); ?></h1>
                            <div class="service-hero-subtitle">
                                <?php the_content(); // Using main content for the subtitle/description ?>
                            </div>
                            
                            <?php if( have_rows('service_features') ): ?>
                                <div class="service-hero-features">
                                    <?php while( have_rows('service_features') ): the_row(); ?>
                                        <div class="feature-badge">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span><?php the_sub_field('feature_text'); ?></span>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="service-hero-cta">
                                <button class="btn btn-primary btn-large" onclick="openAppointmentModal()">
                                    Записаться на услугу
                                </button>
                                <?php if ( get_field('price') ) : ?>
                                <div class="service-price-badge">
                                    <span class="price-label">Стоимость сеанса</span>
                                    <span class="price-value">от <?php the_field('price'); ?> ₽</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-hero-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <?php
            // The rest of the sections from uvt.html can be built out here,
            // preferably using Advanced Custom Fields (ACF) for flexibility.
            // For now, this provides a solid, dynamic starting point for any service.
            ?>

            <?php
        endwhile; // End of the loop.
    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();
