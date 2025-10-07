<?php
/**
 * Template part for displaying the equipment section
 *
 * @package Pchelka
 */

$args = array(
    'post_type' => 'equipment',
    'posts_per_page' => 6,
);
$equipment_query = new WP_Query( $args );
?>
<section class="equipment" id="equipment">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'equipment_section_title', __( 'Современное оборудование', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center"><?php echo esc_html( get_theme_mod( 'equipment_section_subtitle', __( 'Диагностическая техника экспертного класса от мировых производителей', 'pchelka' ) ) ); ?></p>

        <?php if ( $equipment_query->have_posts() ) : ?>
            <div class="equipment-grid">
                <?php while ( $equipment_query->have_posts() ) : $equipment_query->the_post(); ?>
                    <div class="equipment-card">
                        <div class="equipment-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>
                            <?php endif; ?>
                            <div class="equipment-badge">
                                <svg width="32" height="32" viewBox="0 0 32 32"><circle cx="16" cy="16" r="14" fill="#FFD700"/><path d="M16 8l2 5 5 1-3.5 3.5 1 5-4.5-2.5-4.5 2.5 1-5L9 14l5-1 2-5z" fill="#2C3E50"/></svg>
                            </div>
                        </div>
                        <div class="equipment-content">
                            <h3 class="equipment-title"><?php the_title(); ?></h3>

                            <?php if ( get_field('manufacturer') ) : ?>
                                <p class="equipment-manufacturer"><?php esc_html_e( 'Производитель:', 'pchelka' ); ?> <?php the_field('manufacturer'); ?></p>
                            <?php endif; ?>

                            <div class="equipment-description"><?php the_content(); ?></div>

                            <?php if( have_rows('features') ): ?>
                                <ul class="equipment-features">
                                <?php while( have_rows('features') ) : the_row();
                                    $feature = get_sub_field('feature');
                                    ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Оборудование не найдено.', 'pchelka' ); ?></p>
        <?php endif; ?>

        <div class="equipment-footer">
            <p class="equipment-note"><?php esc_html_e( 'Все оборудование сертифицировано и проходит регулярное техническое обслуживание', 'pchelka' ); ?></p>
        </div>
    </div>
</section>