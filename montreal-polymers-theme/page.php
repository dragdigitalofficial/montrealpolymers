<?php
/**
 * The template for displaying all single pages
 */

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    while ( have_posts() ) :
        the_post();

        // Check if page is built with Elementor
        if ( function_exists( 'elementor_load_plugin_textdomain' ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor() ) {
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
