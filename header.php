<?php
/**
 * Header file for the Sam Theme WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	<header>
		<?php get_template_part('template-parts/header/header', 'navbar'); ?>
	</header>
	
	<?php the_field('head-script', 'options'); ?>