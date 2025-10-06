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
        <h2 class="section-title text-center"><?php esc_html_e( 'Программы лояльности', 'pchelka' ); ?></h2>
        <p class="section-subtitle text-center"><?php esc_html_e( 'Выгодные условия для постоянных пациентов и их семей', 'pchelka' ); ?></p>

        <?php if ( $loyalty_query->have_posts() ) : ?>
            <div class="loyalty-grid">
                <?php while ( $loyalty_query->have_posts() ) : $loyalty_query->the_post(); ?>
                    <div class="loyalty-card <?php if (has_tag('featured')) { echo 'loyalty-card-featured'; } ?>">
                        <div class="loyalty-icon">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            } else { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gem"><path d="M6 3h12l4 6-10 13L2 9z"/><path d="M12 22l-2-13-2-13"/><path d="M12 22l2-13 2-13"/><path d="M2 9h20"/></svg>
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
                           <?php esc_html_e( 'Подключить программу', 'pchelka' ); ?>
                        </button>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Программы лояльности не найдены.', 'pchelka' ); ?></p>
        <?php endif; ?>

        <div class="loyalty-footer">
            <div class="loyalty-cta">
                <h3><?php esc_html_e( 'Не нашли подходящую программу?', 'pchelka' ); ?></h3>
                <p><?php esc_html_e( 'Мы разработаем индивидуальное предложение специально для вас', 'pchelka' ); ?></p>
                <button onclick="openQuestionModal()" class="btn btn-primary">
                    <?php esc_html_e( 'Получить консультацию', 'pchelka' ); ?>
                </button>
            </div>
        </div>
    </div>
</section>