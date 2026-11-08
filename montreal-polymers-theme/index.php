<?php
/**
 * The main template file
 * Serves as fallback for homepage, archive, and blog index.
 * Fully compatible with Elementor and WordPress Loop.
 */

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        get_template_part( 'template-parts/content-onepage' );
    endif;
    ?>
</main>

<?php
get_footer();
