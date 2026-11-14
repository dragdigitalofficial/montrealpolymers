<?php
/**
 * Template part for displaying the default Industrial Header
 * Top Utility Bar + Sticky Navbar with logo-yellow.svg
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

<!-- ========================================================================= -->
<!-- 1. TOP UTILITY BAR (Address, Number, WhatsApp Only as requested) -->
<!-- ========================================================================= -->
<div class="bg-slate-950 text-white text-xs py-2.5 border-b border-slate-800 hidden lg:block">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        
        <!-- Address -->
        <div class="flex items-center gap-2 text-slate-300">
            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-gold-500"></i>
            <span>905 Avenue Munck, Laval & Greater Montreal, QC</span>
        </div>

        <!-- Number & WhatsApp Only -->
        <div class="flex items-center space-x-6">
            <a href="tel:14506634200" class="font-bold text-white hover:text-gold-400 transition-colors flex items-center gap-1.5">
                <i data-lucide="phone-call" class="w-3.5 h-3.5 text-gold-500"></i>
                <span>+1 (450) 663-4200</span>
            </a>
            <a href="https://wa.me/14506634200" target="_blank" class="text-slate-300 hover:text-gold-400 transition-colors flex items-center gap-1.5">
                <i data-lucide="message-circle" class="w-3.5 h-3.5 text-gold-500"></i>
                <span>WhatsApp</span>
            </a>
        </div>

    </div>
</div>

<!-- ========================================================================= -->
<!-- 2. MAIN HEADER & STICKY NAVBAR -->
<!-- ========================================================================= -->
<header class="sticky top-0 z-50 bg-slate-900/95 backdrop-blur-md border-b border-slate-800 shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        <!-- Brand Logo from logo-yellow.svg -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
            <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-10 w-auto">
        </a>

        <!-- Desktop Nav Links -->
        <nav class="hidden lg:flex items-center space-x-8 text-sm font-bold text-slate-300 tracking-wide mp-nav-menu">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '<ul class="flex items-center space-x-8 list-none m-0 p-0">%3$s</ul>',
                    'fallback_cb'    => false,
                ) );
            } else {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors'; ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="<?php echo is_page( 'scrap-pickup' ) ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors'; ?>">Scrap Taxi</a>
                <a href="<?php echo esc_url( home_url( '/polymers/' ) ); ?>" class="<?php echo is_page( 'polymers' ) ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors flex items-center gap-1'; ?> flex items-center gap-1">
                    <span>Polymers</span>
                    <span class="text-[10px] bg-slate-800 text-gold-400 px-1.5 py-0.5 rounded font-mono uppercase border border-slate-700">PVC</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="<?php echo is_page( 'products' ) ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors'; ?>">The Goods</a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="<?php echo is_page( 'services' ) ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors'; ?>">Shred &amp; Grind</a>
                <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="<?php echo is_page( 'team' ) ? 'text-gold-400 border-b-2 border-gold-500 pb-0.5' : 'text-slate-300 hover:text-gold-400 transition-colors'; ?>">The Crew</a>
                <?php
            }
            ?>
        </nav>

        <!-- CTA Actions -->
        <div class="hidden sm:flex items-center space-x-3">
            <a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-slate-900 bg-gold-500 hover:bg-gold-400 transition-all shadow-gold-glow flex items-center gap-2">
                <span>Book Scrap Pickup</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="lg:hidden flex items-center gap-2">
            <a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-gold-500 text-slate-900">Pickup</a>
            <button id="mobileMenuBtn" class="p-2 rounded-lg text-slate-300 hover:bg-slate-800 focus:outline-none">
                <i data-lucide="menu" id="menuIcon" class="w-6 h-6"></i>
            </button>
        </div>

    </div>

    <!-- Mobile Drawer -->
    <div id="mobileDrawer" class="hidden lg:hidden bg-slate-900 border-t border-slate-800 px-6 py-5 space-y-3 font-semibold text-sm">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block py-1 text-gold-400 font-bold">Home</a>
        <a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="block py-1 text-slate-300 hover:text-gold-400">Scrap Taxi</a>
        <a href="<?php echo esc_url( home_url( '/polymers/' ) ); ?>" class="block py-1 text-slate-300 hover:text-gold-400">Polymers</a>
        <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="block py-1 text-slate-300 hover:text-gold-400">The Goods</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="block py-1 text-slate-300 hover:text-gold-400">Shred &amp; Grind</a>
        <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="block py-1 text-slate-300 hover:text-gold-400">The Crew</a>
        <div class="pt-3 border-t border-slate-800 flex flex-col gap-2">
            <a href="<?php echo esc_url( home_url( '/scrap-pickup/' ) ); ?>" class="block text-center py-2.5 bg-gold-500 text-slate-900 font-bold rounded-xl text-xs uppercase tracking-wider shadow-gold-glow">
                Book Scrap Pickup
            </a>
        </div>
    </div>
</header>
