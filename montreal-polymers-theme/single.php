<?php
/**
 * The template for displaying all single posts
 * Montreal Polymers Theme - 100% Elementor Ready
 */

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
