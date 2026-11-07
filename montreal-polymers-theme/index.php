<?php
/**
 * The main template file
 * Serves as fallback for homepage and blog index.
 */

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    if ( have_posts() ) :
        // If front page or static home
        if ( is_front_page() || is_home() ) {
            get_template_part( 'template-parts/content-onepage' );
        } else {
            ?>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'p-8 bg-white rounded-2xl shadow-soft border border-slate-200' ); ?>>
                        <h2 class="text-2xl font-bold mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-gold-600 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-xs text-slate-500 mb-4"><?php echo get_the_date(); ?></div>
                        <div class="text-sm text-slate-600"><?php the_excerpt(); ?></div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
        }
    endif;
    ?>
</main>

<?php
get_footer();
