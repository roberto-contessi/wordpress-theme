<?php
/**
 * The homepage blog section file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
 // Query custom (parametri che inserisco negli array degli argomenti) al database 
 $the_query = new WP_Query( $args );
 
 ?>


<section class="section section-y-padding">
    <div class="container">
        <div class="row"> 

            <div class="col-12 mt-5 mb-5 text-primary">
                <h2>BLOG</h2>
            </div>


                <?php  // Un Loop di wordpress con una query custom
                    if ( $the_query->have_posts() ) {
                      
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post(); ?> 
                           

                            <div class="col-lg-3 col-md-6"> 

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
        <div class="row"> 
            <div class="col-12">
                <a href="<?php echo get_template_directory_uri(); ?>/blog" class="btn btn-primary text-uppercase rounded-0 mt-5 mb-5">Continua</a>   
            </div>       
        </div>
      
    </div>
</section>