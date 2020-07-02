<?php
/**
 * The default template for displaying content
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part( 'template-parts/featured-image' ); ?>
    <h1><?php the_title(); ?></h1>
    <div class="article-content"><?php the_content(); ?></div>

    <?php
    if ( is_single() ) {
        get_template_part( 'template-parts/navigation' );
    }
    ?>
</article><!-- .post -->