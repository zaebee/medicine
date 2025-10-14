<?php
/**
 * The template for displaying archive pages for the Doctor post type
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
            <div class="doctors-grid" style="margin-top: 3rem;">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="doctor-card">
                        <div class="doctor-image">
                            <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-avatar.png" alt="" />
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( get_field('specialty') ) : ?>
                                <p class="doctor-specialty"><?php the_field('specialty'); ?></p>
                            <?php endif; ?>
                            <?php if ( get_field('experience') ) : ?>
                                <p class="doctor-experience">Опыт работы: <?php the_field('experience'); ?> лет</p>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-block">
                                <?php esc_html_e( 'Профиль врача', 'pchelka' ); ?>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

            <?php
            the_posts_navigation();
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
