<?php
/**
 * Template part for displaying the loyalty programs section
 *
 * @package Pchelka
 */

$args = array(
    'post_type' => 'loyalty',
    'posts_per_page' => 6,
);
$loyalty_query = new WP_Query( $args );
?>
<section class="loyalty" id="loyalty">
    <div class="container">
        <h2 class="section-title text-center">Программы лояльности</h2>
        <p class="section-subtitle text-center">Выгодные условия для постоянных пациентов и их семей</p>

        <?php if ( $loyalty_query->have_posts() ) : ?>
            <div class="loyalty-grid">
                <?php while ( $loyalty_query->have_posts() ) : $loyalty_query->the_post(); ?>
                    <div class="loyalty-card <?php if (has_tag('featured')) { echo 'loyalty-card-featured'; } ?>">
                        <div class="loyalty-icon">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            } else { ?>
                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"><circle cx="40" cy="40" r="36" fill="#FFF8E1"/><path d="M40 16l6 12 13 2-9.5 9 2.5 13-12-6-12 6 2.5-13L21 30l13-2 6-12z" fill="#FFD700" stroke="#FFC700" stroke-width="2"/><text x="40" y="48" text-anchor="middle" font-size="20" font-weight="bold" fill="#2C3E50">%</text></svg>
                            <?php } ?>
                        </div>
                        <h3 class="loyalty-title"><?php the_title(); ?></h3>
                        <div class="loyalty-description"><?php the_content(); ?></div>

                        <?php if( have_rows('benefits') ): ?>
                            <ul class="loyalty-benefits">
                            <?php while( have_rows('benefits') ) : the_row();
                                $benefit = get_sub_field('benefit');
                                ?>
                                <li><?php echo esc_html($benefit); ?></li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <button onclick="openLoyaltyModal('<?php echo esc_attr(get_post_field( 'post_name', get_post() )); ?>')" class="btn <?php if (has_tag('featured')) { echo 'btn-primary'; } else { echo 'btn-secondary'; } ?> btn-block">
                           Подключить программу
                        </button>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No loyalty programs found.</p>
        <?php endif; ?>

        <div class="loyalty-footer">
            <div class="loyalty-cta">
                <h3>Не нашли подходящую программу?</h3>
                <p>Мы разработаем индивидуальное предложение специально для вас</p>
                <button onclick="openQuestionModal()" class="btn btn-primary">
                    Получить консультацию
                </button>
            </div>
        </div>
    </div>
</section>