<?php
/**
 * The front-page template file
 * Montreal Polymers Theme - 100% Elementor Ready
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
