<?php
/**
 * Template part for displaying the reviews section
 *
 * @package Pchelka
 */

$args = array(
    'post_type' => 'review',
    'posts_per_page' => 3,
);
$reviews_query = new WP_Query( $args );
?>
<section class="reviews" id="reviews">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'reviews_section_title', __( 'Отзывы наших пациентов', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center"><?php echo esc_html( get_theme_mod( 'reviews_section_subtitle', __( 'Нам доверяют тысячи пациентов', 'pchelka' ) ) ); ?></p>

        <?php if ( $reviews_query->have_posts() ) : ?>
            <div class="reviews-grid">
                <?php while ( $reviews_query->have_posts() ) : $reviews_query->the_post(); ?>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(array(100, 100)); // 100x100 avatar ?>
                                <?php endif; ?>
                            </div>
                            <div class="review-author">
                                <h4 class="review-name"><?php the_title(); ?></h4>
                                <?php if ( get_field('rating') ) : ?>
                                    <div class="review-rating">
                                        <span class="stars">★★★★★</span>
                                        <span class="rating-value"><?php the_field('rating'); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="review-text">
                            <?php the_content(); ?>
                        </div>
                        <div class="review-footer">
                            <?php if ( get_field('date') ) : ?>
                                <span class="review-date"><?php the_field('date'); ?></span>
                            <?php endif; ?>
                            <?php if ( get_field('is_verified') ) : ?>
                                <span class="review-verified">✓ <?php esc_html_e( 'Проверенный отзыв', 'pchelka' ); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Отзывы не найдены.', 'pchelka' ); ?></p>
        <?php endif; ?>

        <div class="reviews-footer">
            <?php
            // Placeholder for dynamic review statistics.
            // In a real project, this data would be calculated or come from theme options.
            $review_stats = array(
                'average_rating' => get_theme_mod( 'pchelka_avg_rating', '4.9' ),
                'total_reviews' => get_theme_mod( 'pchelka_total_reviews', '500+' ),
                'recommend_percentage' => get_theme_mod( 'pchelka_recommend_percent', '98%' ),
            );
            ?>
            <div class="reviews-stats">
                <div class="stat-item">
                    <div class="stat-number"><?php echo esc_html( $review_stats['average_rating'] ); ?></div>
                    <div class="stat-label"><?php esc_html_e( 'Средняя оценка', 'pchelka' ); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?php echo esc_html( $review_stats['total_reviews'] ); ?></div>
                    <div class="stat-label"><?php esc_html_e( 'Отзывов', 'pchelka' ); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?php echo esc_html( $review_stats['recommend_percentage'] ); ?></div>
                    <div class="stat-label"><?php esc_html_e( 'Рекомендуют', 'pchelka' ); ?></div>
                </div>
            </div>
            <button onclick="openReviewModal()" class="btn btn-secondary">
                <?php esc_html_e( 'Оставить отзыв', 'pchelka' ); ?>
            </button>
        </div>
    </div>
</section>