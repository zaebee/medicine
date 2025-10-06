<?php
/**
 * Template part for displaying the services section
 *
 * @package Pchelka
 */

$args = array(
    'post_type' => 'service',
    'posts_per_page' => 6, // Show 6 services on the front page
);
$services_query = new WP_Query( $args );
?>

<section class="services" id="services">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'services_section_title', __( 'Наши услуги', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center">Полный спектр медицинских услуг с прозрачным ценообразованием</p>

        <?php if ( $services_query->have_posts() ) : ?>
            <div class="services-grid">
                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                    <div class="service-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-image">
                                <?php the_post_thumbnail('medium_large'); // Or another appropriate size ?>
                            </div>
                        <?php endif; ?>
                        <div class="service-content">
                            <h3 class="service-title"><?php the_title(); ?></h3>
                            <div class="service-description"><?php the_content(); ?></div>

                            <?php
                            $price_label = get_field('price_label');
                            $price_value = get_field('price_value');
                            if ( $price_value ) :
                            ?>
                                <div class="service-price">
                                    <span class="price-label"><?php echo esc_html( $price_label ? $price_label : 'Прием от' ); ?></span>
                                    <span class="price-value"><?php echo esc_html( $price_value ); ?> ₽</span>
                                </div>
                            <?php endif; ?>

                            <button onclick="openAppointmentModal('<?php echo esc_attr(get_post_field( 'post_name', get_post() )); ?>')" class="btn btn-secondary btn-block">
                                Записаться
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); // Reset the global post object ?>
        <?php else : ?>
            <p>No services found.</p>
        <?php endif; ?>

        <div class="services-footer">
            <p class="services-note">* Точная стоимость определяется после консультации врача</p>
            <a href="#pricing" class="btn btn-outline">Посмотреть полный прайс-лист</a>
        </div>
    </div>
</section>