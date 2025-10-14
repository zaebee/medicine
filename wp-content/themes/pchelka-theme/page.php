<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pchelka
 */

get_header();
?>

<main id="main-content" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?> style="padding: 4rem 0;">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title section-title text-center">', '</h1>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content" style="margin-top: 2rem;">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pchelka' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div><!-- .entry-content -->

                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="entry-footer">
                            <?php
                            edit_post_link(
                                sprintf(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    esc_html__( 'Edit %s', 'pchelka' ),
                                    '<span class="screen-reader-text">' . get_the_title() . '</span>'
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                            ?>
                        </footer><!-- .entry-footer -->
                    <?php endif; ?>
                </article><!-- #post-<?php the_ID(); ?> -->

                <?php
            endwhile; // End of the loop.
        endif;
        ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
