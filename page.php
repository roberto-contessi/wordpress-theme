<?php
/**
 * The template file for pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); /** funzione */ ?> 

<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>

    <h1> <?php the_title(); ?> </h1>
    <div>
    <?php the_content(); ?>
    </div>

    <small>
    <?php the_excerpt(); ?>
    </small>

    <?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>

<?php get_footer(); ?>