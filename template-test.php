<?php
/**
 * Template Name: template test
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
*/
?>
<?php
 
 $args = array(
     'posts_per_page' => 4,
     'post_type' => 'post',
     'post_status' => 'publish',
     'order'   => 'DESC',

   
 );
 
 // The Query
 $the_query = new WP_Query( $args );
 
 ?>

<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-primary text-uppercase"><?php  get_the_title(); ?></h1>
                <?php  the_content(); ?>
            </div>
        </div>
            
    </div>

    <?php
	} // end while
} // end if
?>


<?php get_footer(); ?>