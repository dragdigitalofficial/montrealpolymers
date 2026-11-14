<?php
/**
 * Template part for displaying the Industrial Footer
 * Strict 3-Column Layout: Intro + Header Links + Laval Address
 * Plus Bottom Bar: Copyright + Privacy Policy + Terms & Conditions
 */

$logo_url = MONTREAL_URI . '/assets/images/logot-yellow-light.svg';
if ( has_custom_logo() ) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo_data      = wp_get_attachment_image_src( $custom_logo_id, 'full' );
    if ( ! empty( $logo_data[0] ) ) {
        $logo_url = $logo_data[0];
    }
}
?>

<footer class="bg-slate-950 text-white py-16 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- 3-Column Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Column 1: Logo & Intro Details -->
            <div class="space-y-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block">
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-10 w-auto">
                </a>
                <p class="text-sm text-slate-400 leading-relaxed font-light max-w-sm">
                    Montreal Polymers Inc. is Quebec&apos;s chemical-free plastic recycling leader. We divert millions of pounds from landfills through 100% cold mechanical recovery, protecting soil, water, and Canadian manufacturing.
                </p>
                <div class="text-xs font-mono text-gold-400">
                    Recyc-Qu&eacute;bec Aligned &bull; 100% Zero-Solvent Facility
                </div>
            </div>

            <!-- Column 2: Website Menu Links -->
            <div class="space-y-4 mp-footer-menu">
                <h4 class="text-xs font-mono uppercase tracking-widest text-white font-bold">Quick Links</h4>
                <?php
                if ( has_nav_menu( 'footer-solutions' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer-solutions',
                        'container'      => false,
                        'menu_class'     => 'space-y-2.5 text-sm text-slate-400 font-light list-none m-0 p-0',
                        'fallback_cb'    => false,
                    ) );
                } else {
                    ?>
                    <ul class="space-y-2.5 text-sm text-slate-400 font-light list-none m-0 p-0">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-gold-400 transition-colors">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="hover:text-gold-400 transition-colors">Scrap Taxi</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/polymers/' ) ); ?>" class="hover:text-gold-400 transition-colors">Polymers</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="hover:text-gold-400 transition-colors">The Goods</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="hover:text-gold-400 transition-colors">Shred &amp; Grind</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="hover:text-gold-400 transition-colors">The Crew</a></li>
                    </ul>
                    <?php
                }
                ?>
            </div>

            <!-- Column 3: Facility Address & Dispatch -->
            <div class="space-y-4">
                <h4 class="text-xs font-mono uppercase tracking-widest text-white font-bold">Laval Receiving Facility</h4>
                <div class="space-y-2.5 text-sm text-slate-400 font-light">
                    <p class="text-white font-semibold">Montreal Polymers Inc.</p>
                    <p>905 Avenue Munck, Laval, QC H7S 1A9</p>
                    <p>Docks Open: Mon&ndash;Fri 07:00 &ndash; 17:00</p>
                    <p class="pt-1">
                        <a href="tel:14506634200" class="text-gold-400 hover:text-gold-300 font-bold transition-colors">+1 (450) 663-4200</a>
                    </p>
                    <p>
                        <a href="mailto:dispatch@montrealpolymers.com" class="hover:text-gold-400 transition-colors">dispatch@montrealpolymers.com</a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Bottom Legal Bar -->
        <div class="pt-8 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 space-y-4 sm:space-y-0">
            <div>
                &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Montreal Polymers Inc. All Rights Reserved. Canadian Federal Corporation.
            </div>
            <div class="flex space-x-6">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                <a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>" class="hover:text-slate-300 transition-colors">Terms &amp; Conditions</a>
            </div>
        </div>

    </div>
</footer>
