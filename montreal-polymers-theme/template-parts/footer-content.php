<?php
/**
 * Template part for displaying the default Industrial Footer
 * 5-Column Industrial Layout with logo-yellow.svg
 */

$logo_url = MONTREAL_URI . '/assets/images/logo%20yellow.svg';
?>

<!-- ========================================================================= -->
<!-- FOOTER (Industrial Slate Deep Palette) -->
<!-- ========================================================================= -->
<footer class="bg-slate-950 text-white py-16 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Col 1 & 2: Brand Profile -->
            <div class="lg:col-span-2 space-y-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block">
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-10 w-auto">
                </a>
                <p class="text-sm text-slate-400 leading-relaxed font-light max-w-sm">
                    Montreal Polymers Inc. is Quebec's premier chemical-free plastic recycling leader. We divert millions of pounds from landfills through 100% cold mechanical recovery, protecting soil, water, and Canadian manufacturing.
                </p>
                <div class="text-xs font-mono text-gold-400">
                    Recyc-Québec Aligned • 100% Zero-Solvent Facility
                </div>
            </div>

            <!-- Col 3: Services -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-widest text-white font-bold">Solutions</h4>
                <ul class="space-y-2 text-sm text-slate-400 font-light">
                    <li><a href="#services" class="hover:text-gold-400 transition-colors">Scrap Purchasing</a></li>
                    <li><a href="#pvc" class="hover:text-gold-400 transition-colors">PVC Stream Specialization</a></li>
                    <li><a href="#services" class="hover:text-gold-400 transition-colors">Toll Granulation</a></li>
                    <li><a href="#services" class="hover:text-gold-400 transition-colors">Drop Trailer Logistics</a></li>
                    <li><a href="#calculator" class="hover:text-gold-400 transition-colors">Landfill Calculator</a></li>
                </ul>
            </div>

            <!-- Col 4: Materials -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-widest text-white font-bold">Materials</h4>
                <ul class="space-y-2 text-sm text-slate-400 font-light">
                    <li><a href="#pvc" class="hover:text-gold-400 transition-colors">Rigid PVC Window Regrind</a></li>
                    <li><a href="#pvc" class="hover:text-gold-400 transition-colors">Conduit & Pipe Flakes</a></li>
                    <li><a href="#products" class="hover:text-gold-400 transition-colors">HDPE Bales & Lumps</a></li>
                    <li><a href="#products" class="hover:text-gold-400 transition-colors">PP Extrusion Off-cuts</a></li>
                    <li><a href="#products" class="hover:text-gold-400 transition-colors">Spec Sheets (COA)</a></li>
                </ul>
            </div>

            <!-- Col 5: Facility Docks -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-widest text-white font-bold">Laval Receiving Facility</h4>
                <div class="space-y-2 text-xs text-slate-400 font-light">
                    <p class="text-white font-semibold">Montreal Polymers Inc.</p>
                    <p>905 Avenue Munck, Laval, QC H7S 1A9</p>
                    <p>Docks Open: Mon–Fri 07:00 – 17:00</p>
                    <p class="pt-2 text-gold-400 font-bold">+1 (450) 663-4200</p>
                    <p>dispatch@montrealpolymers.com</p>
                </div>
            </div>
        </div>

        <!-- Bottom Legal Bar -->
        <div class="pt-8 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 space-y-4 sm:space-y-0">
            <div>
                &copy; <?php echo date('Y'); ?> Montreal Polymers Inc. All Rights Reserved. Canadian Federal Corporation.
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-slate-300 transition-colors">Terms of Trade</a>
                <a href="#" class="hover:text-slate-300 transition-colors">Environmental Compliance</a>
            </div>
        </div>

    </div>
</footer>
