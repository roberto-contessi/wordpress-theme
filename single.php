<?php

/**
 * The single post template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>

                        <h1 class="mt-5 text-primary text-uppercase"><?php the_title_attribute(); ?> </h1>
                       
                        <?php $categories = get_the_category(); ?>

                        <?php if (!empty($categories) && isset($categories[0])) :?> 

                            <?php 
                            $link_categoria = get_category_link($categories[0]);
                            $nome_categoria = $categories[0]->name;
                            ?>

                            <a href="<?php echo $link_categoria; ?>"><span class="categoria text-uppercase">  <?php echo $nome_categoria ?> </span></a>
                        <?php endif; ?> 

                        <span class="data-copy"><?php the_date(); ?></span> 

                        <div class="my-5"> <?php the_post_thumbnail('full', array('class' => 'your-class-name')); ?> </div>

                        <p><?php the_content(); ?> </p>

                        <?php the_tags(); ?>




                    <?php endwhile;
                endif; ?>



            </div>
            
            <div class="col-lg-3 offset-1 mt-5">
        <?php get_template_part( 'template-parts/main-sidebar'); ?>
        </div>
            
        

        </div>
    </div>
</main>




<?php get_footer(); ?>