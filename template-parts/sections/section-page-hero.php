<?php
/**
 * The homepage hero template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>


<?php
$page_hero= get_field('page_hero');

if($page_hero):
?>

<!-- testata -->
<section class="section section-y-padding bg-secondary page-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <div class="page-hero-content d-flex justify-content-center align-items-center">
                            <div class="text-center">
                            <h1>
                            <?php 
                            if( isset ($page_hero['title'])&& $page_hero['title'] ){ 
                                echo $page_hero['title']; 
                            } else {
                                the_title();
                            }
                            ?>
                        </h1>

                        <?php if(isset ($page_hero['content'])&& $page_hero['content']):?>
                            <p class="text-white"><?php echo $page_hero['content']?></p>
                        <?php endif; ?>
                        <?php if(isset ($page_hero['call_to_action'])&& $page_hero['call_to_action']):?>
                            <a href="<?php echo $page_hero['call_to_action']['url'] ?>" target="<?php echo $page_hero['call_to_action']['target'] ?>" class="btn btn-primary btn-lg text-uppercase rounded-0"><?php echo $page_hero['call_to_action']['title'] ?></a>
                        <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php endif; ?>