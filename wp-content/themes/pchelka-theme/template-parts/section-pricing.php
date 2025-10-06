<?php
/**
 * Template part for displaying the dynamic pricing section
 *
 * @package Pchelka
 */

?>
<section class="pricing" id="pricing">
    <div class="container">
        <h2 class="section-title text-center"><?php esc_html_e( 'Прозрачное ценообразование', 'pchelka' ); ?></h2>
        <p class="section-subtitle text-center"><?php esc_html_e( 'Честные цены без скрытых платежей', 'pchelka' ); ?></p>

        <?php
        $price_categories = get_terms( array(
            'taxonomy' => 'price_category',
            'hide_empty' => true,
        ) );
        $price_packages_query = new WP_Query(array(
            'post_type' => 'price_package',
            'posts_per_page' => 3, // Limit to 3 packages
        ));

        if ( ! empty( $price_categories ) || $price_packages_query->have_posts() ) :
        ?>
            <div class="pricing-tabs">
                <?php
                $first = true;
                foreach ( $price_categories as $category ) :
                ?>
                    <button class="pricing-tab <?php if ($first) { echo 'active'; $first = false; } ?>" data-category="<?php echo esc_attr( $category->slug ); ?>">
                        <?php echo esc_html( $category->name ); ?>
                    </button>
                <?php endforeach; ?>

                <?php if ( $price_packages_query->have_posts() ) : ?>
                    <button class="pricing-tab" data-category="programs"><?php esc_html_e( 'Программы', 'pchelka' ); ?></button>
                <?php endif; ?>
            </div>

            <?php
            $first = true;
            foreach ( $price_categories as $category ) :
                $args = array(
                    'post_type' => 'price_item',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'price_category',
                            'field'    => 'slug',
                            'terms'    => $category->slug,
                        ),
                    ),
                );
                $price_items_query = new WP_Query( $args );
            ?>
                <div class="pricing-content <?php if ($first) { echo 'active'; $first = false; } ?>" data-category="<?php echo esc_attr( $category->slug ); ?>">
                    <?php if ( $price_items_query->have_posts() ) : ?>
                        <div class="pricing-table">
                            <?php while ( $price_items_query->have_posts() ) : $price_items_query->the_post(); ?>
                                <div class="pricing-row">
                                    <div class="pricing-service">
                                        <h4><?php the_title(); ?></h4>
                                        <?php if(get_the_content()): ?>
                                            <p><?php the_content(); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pricing-price">
                                        <?php if ( get_field('price') ) : ?>
                                            <?php the_field('price'); ?> ₽
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php else:
                        esc_html_e( 'В этой категории пока нет услуг.', 'pchelka' );
                    endif; ?>
                </div>
            <?php endforeach; ?>

            <?php if ( $price_packages_query->have_posts() ) : ?>
                <div class="pricing-content" data-category="programs">
                    <div class="pricing-packages">
                        <?php while ( $price_packages_query->have_posts() ) : $price_packages_query->the_post(); ?>
                            <div class="package-card <?php if (has_tag('featured')) { echo 'package-card-featured'; } ?>">
                                <?php if (has_tag('popular')) : ?><div class="package-badge"><?php esc_html_e( 'Популярно', 'pchelka' ); ?></div><?php endif; ?>
                                <?php if (has_tag('recommended')) : ?><div class="package-badge"><?php esc_html_e( 'Рекомендуем', 'pchelka' ); ?></div><?php endif; ?>
                                <h3 class="package-title"><?php the_title(); ?></h3>
                                <div class="package-price">
                                    <?php if ( get_field('price') ) : ?><span class="price-value"><?php the_field('price'); ?> ₽</span><?php endif; ?>
                                    <?php if ( get_field('old_price') ) : ?><span class="price-old"><?php the_field('old_price'); ?> ₽</span><?php endif; ?>
                                </div>
                                <?php if( have_rows('included_services') ): ?>
                                    <ul class="package-includes">
                                    <?php while( have_rows('included_services') ) : the_row(); ?>
                                        <li><?php echo esc_html(get_sub_field('service_item')); ?></li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <button onclick="openAppointmentModal('<?php echo esc_attr(get_post_field( 'post_name', get_post() )); ?>')" class="btn btn-secondary btn-block"><?php esc_html_e( 'Записаться', 'pchelka' ); ?></button>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <p><?php esc_html_e( 'Прайс-лист в данный момент обновляется.', 'pchelka' ); ?></p>
        <?php endif; ?>

        <div class="pricing-footer">
            <div class="pricing-calculator">
                <h3><?php esc_html_e( 'Рассчитайте стоимость вашего обследования', 'pchelka' ); ?></h3>
                <p><?php esc_html_e( 'Выберите необходимые услуги и получите точную стоимость с учетом скидок', 'pchelka' ); ?></p>
                <button onclick="openCalculatorModal()" class="btn btn-primary"><?php esc_html_e( 'Открыть калькулятор', 'pchelka' ); ?></button>
            </div>
            <div class="pricing-note">
                <p><strong><?php esc_html_e( 'Важно:', 'pchelka' ); ?></strong> <?php esc_html_e( 'Цены актуальны на январь 2024 года. Для держателей карт лояльности действуют дополнительные скидки.', 'pchelka' ); ?></p>
                <a href="#" onclick="downloadPriceList(); return false;" class="btn btn-outline"><?php esc_html_e( 'Скачать полный прайс-лист (PDF)', 'pchelka' ); ?></a>
            </div>
        </div>
    </div>
</section>
