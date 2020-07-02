<?php
/**
 * The article blog section file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
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


<section>
    <div class="container">
        <div class="row"> 

            <div class="col-12 mt-5 mb-5 text-uppercase">
                <h2>vedi anche...</h2>
            </div>


                <?php  // The Loop
                    if ( $the_query->have_posts() ) {
                      
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post(); ?> 
                           

                            <div class="col-lg-3 col-md-6 mb-5"> 

                            <?php get_template_part('template-parts/teases/tease-post', get_post_type());?>
                                
                            </div>
                <?php
                        }
                        
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>




        </div>
      
    </div>
</section>