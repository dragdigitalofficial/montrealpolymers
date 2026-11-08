<?php
/**
 * The template for displaying all single pages
 * Montreal Polymers Theme - 100% Elementor Ready
 */

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    while ( have_posts() ) :
        the_post();

        // If Elementor is active or document is built with Elementor, output the_content directly
        $is_elementor = false;
        if ( did_action( 'elementor/loaded' ) ) {
            $doc = \Elementor\Plugin::$instance->documents->get( get_the_ID() );
            if ( $doc && $doc->is_built_with_elementor() ) {
                $is_elementor = true;
            }
            if ( isset( \Elementor\Plugin::$instance->preview ) && \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
                $is_elementor = true;
            }
            if ( isset( \Elementor\Plugin::$instance->editor ) && \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
                $is_elementor = true;
            }
        }

        if ( $is_elementor ) {
            the_content();
        } else {
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16' ); ?>>
                <header class="entry-header mb-8">
                    <?php the_title( '<h1 class="entry-title text-4xl font-extrabold text-slate-900 font-display">', '</h1>' ); ?>
                </header>

                <div class="entry-content prose prose-slate max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
