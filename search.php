<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

<div class="container">

    <div class="row">

        <div class="col">
            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Risultati di ricerca per: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                     <?php get_template_part('template-parts/teases/tease-post', get_post_type());?>
                     
                <?php endwhile; ?>

                <?php else : ?>
                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>