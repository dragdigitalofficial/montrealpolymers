<?php
/**
 * The Footer for Montreal Polymers Theme
 * Closes #content and #page and calls wp_footer()
 * 100% Elementor Theme Builder Compatible
 */
?>
    </div><!-- #content -->

    <?php
    // Check if Elementor Pro Theme Builder or Header Footer Elementor is handling the footer
    if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) {
        // Handled by Elementor Pro
    } elseif ( function_exists( 'hfe_render_footer' ) && hfe_render_footer() ) {
        // Handled by Header Footer Elementor Plugin
    } else {
        // Fallback Native Industrial Footer
        get_template_part( 'template-parts/footer-content' );
    }
    ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
