<?php
/**
 * The template for displaying archive pages for the Service post type
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pchelka
 */

get_header();
?>

<main id="main-content" class="site-main">
    <div class="container" style="padding: 4rem 0;">
        <header class="page-header">
            <?php
            the_archive_title( '<h1 class="page-title section-title text-center">', '</h1>' );
            the_archive_description( '<div class="archive-description section-subtitle text-center">', '</div>' );
            ?>
        </header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>
            <div class="services-grid" style="margin-top: 3rem;">
                <?php
                while ( have_posts() ) :
                    the_post();
                    // We can reuse the service card template part if we create one,
                    // or just output the structure directly here.
                    ?>
                    <div class="service-card">
                        <a href="<?php the_permalink(); ?>" class="service-image-link">
                            <div class="service-image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium_large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-hero.jpg" alt="" />
                                <?php endif; ?>
                            </div>
                        </a>
                        <div class="service-content">
                            <h3 class="service-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="service-description">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php if ( get_field('price') ) : ?>
                            <div class="service-price">
                                <span class="price-label">Цена от</span>
                                <span class="price-value"><?php the_field('price'); ?> ₽</span>
                            </div>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-block">
                                <?php esc_html_e( 'Подробнее', 'pchelka' ); ?>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

            <?php
            the_posts_navigation(); // For pagination if there are many services
        else :
            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
