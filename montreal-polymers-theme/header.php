<?php
/**
 * The Header for Montreal Polymers Theme
 * Displays all of the <head> section and everything up till <div id="content">
 * 100% Elementor Theme Builder Compatible
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'selection:bg-gold-500 selection:text-slate-900 bg-white text-slate-900 font-sans' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
    <a class="skip-link screen-reader-text sr-only focus:not-sr-only p-4 bg-gold-500 text-slate-900 z-50 fixed top-0 left-0" href="#primary">
        <?php esc_html_e( 'Skip to content', 'montreal-polymers' ); ?>
    </a>

    <?php
    // Check if Elementor Pro Theme Builder or Header Footer Elementor is handling the header
    if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
        // Handled by Elementor Pro
    } elseif ( function_exists( 'hfe_header_enabled' ) && hfe_header_enabled() ) {
        // Handled by Header Footer Elementor Plugin
        hfe_render_header();
    } else {
        // Fallback Native Industrial Header
        get_template_part( 'template-parts/header-content' );
    }
    ?>

    <div id="content" class="site-content flex-grow">
