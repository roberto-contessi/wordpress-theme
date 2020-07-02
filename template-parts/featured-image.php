<?php
/**
 * Displays the featured image
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

if ( has_post_thumbnail() ) {
?>

	<figure class="featured-media">

		<div class="featured-media-inner">

			<?php
			the_post_thumbnail('full', array( 'class'  => 'img-fluid') );
			?>

		</div><!-- .featured-media-inner -->

	</figure><!-- .featured-media -->

	<?php
}