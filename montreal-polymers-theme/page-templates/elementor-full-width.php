<?php
/**
 * Template Name: Elementor Full Width
 * Template Post Type: page, post
 * Description: Full-width page template without container constraints. Ideal for Elementor page builder.
 */

get_header();
?>

<main id="primary" class="site-main w-full overflow-hidden">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
