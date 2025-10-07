<?php
/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package Pchelka
 */

get_header();
?>

<main id="main-content" class="site-main" role="main">

    <?php
    // Include the template parts for each section of the homepage.
    get_template_part('template-parts/section-hero');
    get_template_part('template-parts/section-quick-actions');
    get_template_part('template-parts/section-about');
    get_template_part('template-parts/section-benefits');
    get_template_part('template-parts/section-services');
    get_template_part('template-parts/section-doctors');
    get_template_part('template-parts/section-equipment');
    get_template_part('template-parts/section-loyalty');
    get_template_part('template-parts/section-licenses');
    get_template_part('template-parts/section-reviews');
    get_template_part('template-parts/section-pricing');
    get_template_part('template-parts/section-contact');
    ?>

</main><!-- #main -->

<?php
get_footer();