<?php
/**
 * The template for displaying search results pages.
 *
 * @package Developer theme
 * @since Developer theme 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

    <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Search results for: %s', 'developer-theme' ), get_search_query() ); ?></h1>
    </header>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post(); ?>

        <?php
        get_template_part( 'content', 'search' );

        // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'developer-theme' ),
        'next_text'          => __( 'Next page', 'developer-theme' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'developer-theme' ) . ' </span>',
    ) );

else :
    get_template_part( 'content', 'none' );

endif;
?>

<?php get_footer(); ?>
