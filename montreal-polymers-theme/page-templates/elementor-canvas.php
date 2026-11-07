<?php
/**
 * Template Name: Elementor Canvas
 * Template Post Type: page, post
 * Description: Pure canvas template without theme header or footer. Allows 100% Elementor design control.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'elementor-template-canvas' ); ?>>
<?php
wp_body_open();

while ( have_posts() ) :
    the_post();
    the_content();
endwhile;

wp_footer();
?>
</body>
</html>
