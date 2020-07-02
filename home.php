<?php get_header();?>

<?php 

$archive_title = __('Blog', 'theme');


?>

<section>
    <div class="container">
        <div class="row"> 

            <div class="col-12 mt-5 mb-5 text-primary text-uppercase">
                <h1> <?php echo $archive_title; ?> </h1>
            </div>


            <?php 
            
            if ( have_posts() ) : ?>
        
                

                <div class="row">
                        <?php
                    
                            //Loop
                        while ( have_posts() ) : the_post(); ?>

                            <div class="col-lg-3 col-md-6 mb-5"> 
                                <?php
                                get_template_part('template-parts/teases/tease-post')
                               ?>
                    
                            </div>
                    
                        <?php endwhile; 
                        else: ?>

                            <p>Sorry, no posts matched your criteria.</p>
                    
                        <?php endif; ?>

                </div>

            
        </div>


        
        <div class="row">
            <div class="col-12">
                <?php get_template_part('template-parts/pagination'); ?>
            </div>
        </div>



    </div>
</section>


   


<?php get_footer(); ?>