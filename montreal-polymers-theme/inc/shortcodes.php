<?php
/**
 * Montreal Polymers - Custom Theme Shortcodes
 * Perfect for Elementor Shortcode & HTML Widgets
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. 3D WebGL Hero Specimen Canvas Shortcode
 * Usage: [montreal_3d_hero]
 */
function montreal_shortcode_3d_hero( $atts ) {
    $atts = shortcode_atts( array(
        'height' => '550px',
    ), $atts, 'montreal_3d_hero' );

    ob_start();
    ?>
    <div class="montreal-3d-hero-wrap relative w-full overflow-hidden" style="min-height: <?php echo esc_attr( $atts['height'] ); ?>;">
        <div id="hero-3d-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-10"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'montreal_3d_hero', 'montreal_shortcode_3d_hero' );

/**
 * 2. 4-Stat Metrics Banner Shortcode
 * Usage: [montreal_stat_banner]
 */
function montreal_shortcode_stat_banner( $atts ) {
    ob_start();
    ?>
    <div class="bg-white rounded-2xl shadow-card border border-slate-200/80 p-8 grid grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="space-y-1 border-r border-slate-100 last:border-none pr-4">
            <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-display flex items-baseline gap-1">
                <span>12M+</span>
                <span class="text-xs text-gold-600 font-bold">LBS/YR</span>
            </div>
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Diverted from Landfills</div>
        </div>

        <div class="space-y-1 border-r border-slate-100 last:border-none pr-4">
            <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-display flex items-baseline gap-1">
                <span>100%</span>
                <span class="text-xs text-gold-600 font-bold">COLD</span>
            </div>
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Mechanical Processing</div>
        </div>

        <div class="space-y-1 border-r border-slate-100 last:border-none pr-4">
            <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-display flex items-baseline gap-1">
                <span>0%</span>
                <span class="text-xs text-gold-600 font-bold">SOLVENTS</span>
            </div>
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Zero Chemical Effluents</div>
        </div>

        <div class="space-y-1">
            <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-display flex items-baseline gap-1">
                <span>48h</span>
                <span class="text-xs text-gold-600 font-bold">SWAP</span>
            </div>
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Quebec & Ontario Logistics</div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'montreal_stat_banner', 'montreal_shortcode_stat_banner' );

/**
 * 3. Interactive Landfill & Revenue Calculator Shortcode
 * Usage: [montreal_landfill_calculator default="35000" min="5000" max="150000" step="5000"]
 */
function montreal_shortcode_calculator( $atts ) {
    $atts = shortcode_atts( array(
        'default' => '35000',
        'min'     => '5000',
        'max'     => '150000',
        'step'    => '5000',
        'cta_url' => '#contact',
    ), $atts, 'montreal_landfill_calculator' );

    ob_start();
    ?>
    <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-slate-800 space-y-8">
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <label for="scrapVolumeSlider" class="text-sm font-bold text-slate-200">
                    Monthly Industrial Scrap Generated:
                </label>
                <div class="text-2xl font-extrabold font-mono text-gold-500" id="scrapDisplay">
                    <?php echo number_format( (int)$atts['default'] ); ?> lbs
                </div>
            </div>
            <input type="range" id="scrapVolumeSlider" 
                   min="<?php echo esc_attr( $atts['min'] ); ?>" 
                   max="<?php echo esc_attr( $atts['max'] ); ?>" 
                   step="<?php echo esc_attr( $atts['step'] ); ?>" 
                   value="<?php echo esc_attr( $atts['default'] ); ?>" 
                   class="w-full h-3 bg-slate-800 rounded-lg appearance-none cursor-pointer">
            <div class="flex justify-between text-[11px] font-mono text-slate-400">
                <span><?php echo number_format( (int)$atts['min'] ); ?> lbs (LTL)</span>
                <span>44,000 lbs (1 Truckload)</span>
                <span><?php echo number_format( (int)$atts['max'] ); ?> lbs (Enterprise Plant)</span>
            </div>
        </div>

        <!-- Live Results -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4 border-t border-slate-800">
            <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 space-y-2">
                <div class="text-xs text-slate-400 font-mono uppercase">Annual Landfill Diverted</div>
                <div class="text-3xl font-extrabold text-white font-display" id="landfillDiverted">
                    420,000 lbs
                </div>
                <div class="text-xs text-gold-400 font-medium">Approx. 440 cu. yds of landfill volume</div>
            </div>

            <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 space-y-2">
                <div class="text-xs text-slate-400 font-mono uppercase">Chemicals & Runoff Avoided</div>
                <div class="text-3xl font-extrabold text-gold-500 font-display" id="chemicalsAvoided">
                    100% Zero
                </div>
                <div class="text-xs text-slate-300">0L chemical wash wastewater discharged</div>
            </div>

            <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 space-y-2">
                <div class="text-xs text-slate-400 font-mono uppercase">Estimated Scrap Buyback</div>
                <div class="text-3xl font-extrabold text-white font-display" id="estimatedRevenue">
                    $12,250 / mo
                </div>
                <div class="text-xs text-emerald-400 font-medium">Replaces tipping fee expenses ($CAD)</div>
            </div>
        </div>

        <div class="pt-2 text-center">
            <a href="<?php echo esc_url( $atts['cta_url'] ); ?>" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-bold text-xs uppercase tracking-wider text-slate-900 bg-gold-500 hover:bg-gold-400 transition-all shadow-gold-glow">
                <span>Lock In Your Custom Scrap Buyback Rate</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'montreal_landfill_calculator', 'montreal_shortcode_calculator' );

/**
 * 4. Dual-Tab Contact & Scrap Inquiry Form Shortcode
 * Usage: [montreal_contact_form]
 */
function montreal_shortcode_contact_form( $atts ) {
    ob_start();
    ?>
    <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-card border border-slate-200/80 space-y-8">
        <!-- Tab Buttons -->
        <div class="grid grid-cols-2 p-1.5 rounded-2xl bg-slate-100 border border-slate-200 max-w-md mx-auto text-sm font-bold">
            <button id="tabBuyer" class="py-3 rounded-xl bg-gold-500 text-slate-900 shadow-sm transition-all" onclick="switchFormTab('buyer')">
                I Need Polymer Regrind (Buyer)
            </button>
            <button id="tabSeller" class="py-3 rounded-xl text-slate-600 hover:text-slate-900 transition-all" onclick="switchFormTab('seller')">
                I Have Scrap to Sell (Seller)
            </button>
        </div>

        <!-- Form Fields -->
        <form id="inquiryForm" class="space-y-6" onsubmit="event.preventDefault(); alert('Inquiry received! Our Montreal logistics desk will contact you within 2 hours with pricing and availability.');">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Your Name</label>
                    <input type="text" required placeholder="e.g. Marc Tremblay" class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Company / Plant Name</label>
                    <input type="text" required placeholder="e.g. Laurentian Plastics Inc." class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Business Email</label>
                    <input type="email" required placeholder="marc@company.com" class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Phone / WhatsApp</label>
                    <input type="tel" required placeholder="+1 (514) 555-0199" class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Polymer Type of Interest</label>
                    <select class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500 bg-white">
                        <option>Rigid PVC (Window / Door Profiles)</option>
                        <option>Rigid PVC (Pipe & Conduit Grade)</option>
                        <option>HDPE (Blow Molding / Extrusion Scrap)</option>
                        <option>PP (Polypropylene Purges & Films)</option>
                        <option>Other Industrial Polymers</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700 uppercase tracking-wider">Volume (Monthly Estimate)</label>
                    <select class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500 bg-white">
                        <option>Trial Order (10,000 – 22,000 lbs)</option>
                        <option>Full Truckload FTL (40,000 – 44,000 lbs)</option>
                        <option>Multiple FTL Contract (&gt; 80,000 lbs/month)</option>
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold text-slate-700 uppercase tracking-wider" id="formMessageLabel">
                    Required Specifications / Delivery Dock Location
                </label>
                <textarea rows="4" placeholder="Detail your melt flow requirements, color specifications, or plant dock swap frequency..." class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-gold-500"></textarea>
            </div>

            <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm uppercase tracking-wider text-slate-900 bg-gold-500 hover:bg-gold-400 transition-all shadow-gold-glow flex items-center justify-center gap-2">
                <span id="formSubmitText">Submit Request to Trading Desk</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>

            <div class="text-center text-xs text-slate-400 font-light">
                Protected by Non-Disclosure Protocol • Direct Counterpart Guarantee • No Broker Middlemen
            </div>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'montreal_contact_form', 'montreal_shortcode_contact_form' );
