<?php
/**
 * Montreal Polymers Theme Functions & Definitions
 * Built for 100% Elementor Compatibility
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'MONTREAL_VERSION', '1.0.0' );
define( 'MONTREAL_DIR', get_template_directory() );
define( 'MONTREAL_URI', get_template_directory_uri() );

/**
 * 1. Theme Setup
 */
function montreal_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup for search form, comment form, etc. to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Custom Logo Support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Gutenberg wide images
    add_theme_support( 'align-wide' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary'          => esc_html__( 'Main Header Navigation', 'montreal-polymers' ),
        'footer-solutions' => esc_html__( 'Footer Solutions Menu', 'montreal-polymers' ),
        'footer-materials' => esc_html__( 'Footer Materials Menu', 'montreal-polymers' ),
    ) );
}
add_action( 'after_setup_theme', 'montreal_theme_setup' );

/**
 * 2. Elementor Theme Builder Locations Support
 * Allows Elementor Pro or Elementor Header & Footer Builder to manage Entire Site Header & Footer
 */
function montreal_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'montreal_register_elementor_locations' );

/**
 * Support for Header Footer Elementor (HFE) Plugin
 */
function montreal_header_footer_elementor_support() {
    add_theme_support( 'header-footer-elementor' );
}
add_action( 'after_setup_theme', 'montreal_header_footer_elementor_support' );

/**
 * 3. Enqueue Scripts and Styles
 */
function montreal_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'montreal-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&display=swap',
        array(),
        null
    );

    // Tailwind CSS (CDN for ultra-fast utility styling & responsive layouts)
    wp_enqueue_script(
        'tailwindcss-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        '3.4.1',
        false
    );

    // Tailwind Config
    wp_add_inline_script(
        'tailwindcss-cdn',
        'tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: [\'"Plus Jakarta Sans"\', \'sans-serif\'],
                        display: [\'"Space Grotesk"\', \'sans-serif\'],
                    },
                    colors: {
                        gold: {
                            50: "#fffbeb",
                            100: "#fef3c7",
                            200: "#fde68a",
                            300: "#fcd34d",
                            400: "#fbbf24",
                            500: "#ffcb0a",
                            600: "#d97706",
                            700: "#b45309",
                            800: "#92400e",
                            900: "#78350f",
                        },
                        slate: {
                            850: "#151f32",
                            900: "#0f172a",
                            950: "#090e17",
                        }
                    },
                    boxShadow: {
                        "soft": "0 10px 30px -5px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02)",
                        "gold-glow": "0 12px 30px -4px rgba(255, 203, 10, 0.35)",
                        "card": "0 20px 40px -15px rgba(15, 23, 42, 0.08)",
                        "hover": "0 25px 50px -12px rgba(15, 23, 42, 0.15)",
                    }
                }
            }
        };',
        'after'
    );

    // Main Theme Stylesheet
    wp_enqueue_style( 'montreal-style', get_stylesheet_uri(), array(), MONTREAL_VERSION );

    // Three.js for 3D WebGL Canvas
    wp_enqueue_script(
        'threejs',
        'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js',
        array(),
        '128',
        true
    );

    // Lucide Icons
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        '1.0.0',
        true
    );

    // Custom Theme & Elementor Interactive Engine
    wp_enqueue_script(
        'montreal-theme-js',
        MONTREAL_URI . '/assets/js/theme.js',
        array( 'threejs' ),
        MONTREAL_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'montreal_enqueue_scripts' );

/**
 * 4. Enable SVG Uploads in WordPress Media Library
 */
function montreal_allow_svg_upload( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'montreal_allow_svg_upload' );

/**
 * 5. Include Custom Shortcodes & Elementor Widgets
 */
require_once MONTREAL_DIR . '/inc/shortcodes.php';

if ( did_action( 'elementor/loaded' ) ) {
    require_once MONTREAL_DIR . '/inc/elementor-widgets.php';
} else {
    add_action( 'elementor/loaded', function () {
        require_once MONTREAL_DIR . '/inc/elementor-widgets.php';
    } );
}

/**
 * 6. Elementor Template Library Compatibility
 * Allows custom template types (header, footer, section, page) to import cleanly in Free and Pro Elementor
 */
add_filter( 'elementor/template_library/sources/local/is_valid_template_type', '__return_true', 99 );

