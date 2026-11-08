<?php
/**
 * The template for displaying Elementor Library items (Header, Footer, Section, Page)
 * Montreal Polymers Theme - 100% Elementor Ready
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
