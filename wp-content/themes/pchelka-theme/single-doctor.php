<?php
/**
 * The template for displaying a single Doctor post.
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

            <!-- Breadcrumbs -->
            <nav class="breadcrumbs" aria-label="Навигационная цепочка">
                <div class="container">
                    <ol class="breadcrumb-list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'doctor' ) ); ?>">Врачи</a></li>
                        <li><?php the_title(); ?></li>
                    </ol>
                </div>
            </nav>

            <!-- Doctor Profile Section -->
            <section class="service-hero doctor-profile" style="padding-bottom: 2rem;">
                <div class="container">
                    <div class="service-hero-content">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-hero-image">
                                <?php the_post_thumbnail('large', array('style' => 'border-radius: 50%; width: 300px; height: 300px; object-fit: cover;')); ?>
                            </div>
                        <?php endif; ?>
                        <div class="service-hero-text">
                            <h1 class="service-hero-title"><?php the_title(); ?></h1>
                            
                            <?php if ( get_field('specialty') ) : ?>
                                <p class="doctor-specialty" style="font-size: 1.25rem; color: var(--primary-color); font-weight: 600;"><?php the_field('specialty'); ?></p>
                            <?php endif; ?>

                            <?php if ( get_field('experience') ) : ?>
                                <p class="doctor-experience" style="margin-bottom: 1.5rem;"><strong>Стаж:</strong> <?php the_field('experience'); ?> лет</p>
                            <?php endif; ?>

                            <div class="service-hero-subtitle">
                                <?php the_content(); ?>
                            </div>
                            
                            <div class="service-hero-cta">
                                <button class="btn btn-primary btn-large" onclick="openAppointmentModal('<?php echo esc_attr(get_post_field( 'post_name', get_post() )); ?>')">
                                    Записаться на прием
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailed Info Section -->
            <section class="service-description" style="padding-top: 2rem;">
                <div class="container">
                    <?php if( have_rows('achievements') ): ?>
                        <div class="doctor-details-block">
                            <h2 class="section-title">Образование и достижения</h2>
                            <ul class="doctor-achievements">
                                <?php while( have_rows('achievements') ) : the_row(); ?>
                                    <li><?php echo esc_html(get_sub_field('achievement_item')); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('specialization_details') ): ?>
                        <div class="doctor-details-block" style="margin-top: 3rem;">
                            <h2 class="section-title">Специализация</h2>
                            <div class="specialization-text">
                                <?php the_field('specialization_details'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <?php
        endwhile; // End of the loop.
    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();
