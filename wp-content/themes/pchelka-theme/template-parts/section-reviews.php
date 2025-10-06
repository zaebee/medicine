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
        <h2 class="section-title text-center">Отзывы наших пациентов</h2>
        <p class="section-subtitle text-center">Нам доверяют тысячи пациентов</p>

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
                                <span class="review-verified">✓ Проверенный отзыв</span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No reviews found.</p>
        <?php endif; ?>

        <div class="reviews-footer">
            <div class="reviews-stats">
                <div class="stat-item">
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Средняя оценка</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Отзывов</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Рекомендуют</div>
                </div>
            </div>
            <button onclick="openReviewModal()" class="btn btn-secondary">
                Оставить отзыв
            </button>
        </div>
    </div>
</section>