<?php
/**
 * Template part for displaying the default Industrial Header
 * Top Utility Bar + Sticky Navbar with logo-yellow.svg
 */

$logo_url = MONTREAL_URI . '/assets/images/logo%20yellow.svg';
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
        <nav class="hidden lg:flex items-center space-x-8 text-sm font-bold text-slate-300 tracking-wide">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                ) );
            } else {
                ?>
                <a href="#home" class="text-gold-400 border-b-2 border-gold-500 pb-0.5">Home</a>
                <a href="#services" class="text-slate-300 hover:text-gold-400 transition-colors">Services</a>
                <a href="#pvc" class="text-slate-300 hover:text-gold-400 transition-colors flex items-center gap-1">
                    <span>PVC Stream</span>
                    <span class="text-[10px] bg-slate-800 text-gold-400 px-1.5 py-0.5 rounded font-mono uppercase border border-slate-700">Specialty</span>
                </a>
                <a href="#products" class="text-slate-300 hover:text-gold-400 transition-colors">Products</a>
                <a href="#about" class="text-slate-300 hover:text-gold-400 transition-colors">About Us</a>
                <?php
            }
            ?>
        </nav>

        <!-- CTA Actions (Quote & Contact) -->
        <div class="hidden sm:flex items-center space-x-3">
            <a href="#calculator" class="px-4 py-2 text-xs font-bold text-slate-300 hover:text-white transition-colors">
                ROI Calculator
            </a>
            <a href="#contact" class="px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-slate-900 bg-gold-500 hover:bg-gold-400 transition-all shadow-gold-glow flex items-center gap-2">
                <span>Contact Us</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="lg:hidden flex items-center gap-2">
            <a href="#contact" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-gold-500 text-slate-900">Contact</a>
            <button id="mobileMenuBtn" class="p-2 rounded-lg text-slate-300 hover:bg-slate-800 focus:outline-none">
                <i data-lucide="menu" id="menuIcon" class="w-6 h-6"></i>
            </button>
        </div>

    </div>

    <!-- Mobile Drawer -->
    <div id="mobileDrawer" class="hidden lg:hidden bg-slate-900 border-t border-slate-800 px-6 py-5 space-y-3 font-semibold text-sm">
        <a href="#home" class="block py-1 text-gold-400 font-bold">Home</a>
        <a href="#services" class="block py-1 text-slate-300 hover:text-gold-400">Services</a>
        <a href="#pvc" class="block py-1 text-slate-300 hover:text-gold-400">PVC Stream</a>
        <a href="#products" class="block py-1 text-slate-300 hover:text-gold-400">Products</a>
        <a href="#about" class="block py-1 text-slate-300 hover:text-gold-400">About Us</a>
        <div class="pt-3 border-t border-slate-800 flex flex-col gap-2">
            <a href="#calculator" class="block text-center py-2 text-slate-300 font-bold">Landfill Calculator</a>
            <a href="#contact" class="block text-center py-2.5 bg-gold-500 text-slate-900 font-bold rounded-xl text-xs uppercase tracking-wider shadow-gold-glow">
                Contact Facilities
            </a>
        </div>
    </div>
</header>
