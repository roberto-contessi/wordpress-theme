<?php
/**
 * The homepage template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

    <!-- page hero -->
    <?php get_template_part('template-parts/sections/section-page-hero'); ?>

    <!-- section who we are -->
    <?php get_template_part('template-parts/sections/section-who-we-are'); ?>

    <!-- section categories -->
    <?php get_template_part('template-parts/sections/section-categories'); ?>

    <!-- section blog -->
    <?php get_template_part( 'template-parts/sections/section', 'blog' ); ?>
    

<?php get_footer(); ?>