<?php
/**
 * Header file for the Rob Theme WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */

?>

<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); 
		the_field('head-script', 'options'); ?>

	</head>

	<body <?php body_class(); ?>>

	<header>
		<?php get_template_part('template-parts/header/header', 'navbar'); ?>
	</header>
	
	