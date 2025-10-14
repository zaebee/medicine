<?php
/**
 * Template part for displaying the doctors section
 *
 * @package Pchelka
 */

$args = array(
    'post_type' => 'doctor',
    'posts_per_page' => 4, // Show 4 doctors on the front page
);
$doctors_query = new WP_Query( $args );
?>
<section class="doctors" id="doctors">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'doctors_section_title', __( 'Наши врачи', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center"><?php echo esc_html( get_theme_mod( 'doctors_section_subtitle', __( 'Команда профессионалов с многолетним опытом', 'pchelka' ) ) ); ?></p>

        <?php if ( $doctors_query->have_posts() ) : ?>
            <div class="doctors-grid">
                <?php while ( $doctors_query->have_posts() ) : $doctors_query->the_post(); ?>
                    <div class="doctor-card">
                        <div class="doctor-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium'); // or a custom size ?>
                            <?php endif; ?>
                            <div class="doctor-badge">
                                <svg width="40" height="40" viewBox="0 0 40 40"><circle cx="20" cy="20" r="18" fill="#FFD700"/><path d="M20 10l2 6 6 1-4.5 4 1 6-4.5-3-4.5 3 1-6L12 17l6-1 2-6z" fill="#2C3E50"/></svg>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name"><?php the_title(); ?></h3>

                            <?php if ( get_field('specialty') ) : ?>
                                <p class="doctor-specialty"><?php the_field('specialty'); ?></p>
                            <?php endif; ?>

                            <?php if ( get_field('experience') ) : ?>
                                <p class="doctor-experience"><?php the_field('experience'); ?></p>
                            <?php endif; ?>

                            <?php if ( get_field('rating') ) : ?>
                                <div class="doctor-rating">
                                    <span class="rating-stars">★★★★★</span>
                                    <span class="rating-value"><?php the_field('rating'); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if( have_rows('achievements') ): ?>
                                <ul class="doctor-achievements">
                                <?php while( have_rows('achievements') ) : the_row();
                                    $achievement = get_sub_field('achievement');
                                    ?>
                                    <li><?php echo esc_html($achievement); ?></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                            <button onclick="openAppointmentModal('<?php echo esc_attr(get_post_field( 'post_name', get_post() )); ?>')" class="btn btn-secondary btn-block">
                                <?php esc_html_e( 'Записаться на прием', 'pchelka' ); ?>
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Врачи не найдены.', 'pchelka' ); ?></p>
        <?php endif; ?>
    </div>
</section>