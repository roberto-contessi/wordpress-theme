<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */
    
    $template_directory = get_template_directory_uri();
    $path_images = $template_directory . '/assets/images/'; 
    $linkedin_url = get_field('linkedin_url', 'options');
    $facebook_url = get_field('facebook_url', 'options');
    $instagram_url = get_field('instagram_url', 'options');
    $youtube_url = get_field('youtube_url', 'options');
    $nl_contact_form_id = get_field('nl_contact_form_id', 'options');
?>

        </main>
        <!-- #site-footer -->
        <footer id="site-footer" class="page-footer" role="contentinfo">
            <?php if ( $linkedin_url || $facebook_url || $instagram_url || $youtube_url || $nl_contact_form_id ) :?>
            <div class="pre-footer bg-light">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-12 col-lg-5">
                            
                            <?php if($linkedin_url):?>
                            <a href="<?php echo $linkedin_url; ?>"><img class="social-icon" src="<?php echo $path_images; ?>linkedin@2x.png" alt="linkedin"></a>
                            <?php endif;?>

                            <?php if($facebook_url):?>
                            <a href="<?php echo $facebook_url; ?>"><img class="social-icon" src="<?php echo $path_images; ?>facebook@2x.png" alt="facebook"></a>
                            <?php endif;?>

                            <?php if($instagram_url):?>
                            <a href="<?php echo $instagram_url; ?>"><img class="social-icon" src="<?php echo $path_images; ?>instagram@2x.png" alt="instagram"></a>
                            <?php endif;?>

                            <?php if($youtube_url):?>
                            <a href="<?php echo $youtube_url; ?>"><img class="social-icon" src="<?php echo $path_images; ?>youtube@2x.png" alt="youtube"></a>
                            <?php endif;?>
                        </div>

                        <div class="col-12 col-lg-7">
                            <?php
                                if($nl_contact_form_id){ 
                                    echo do_shortcode( '[contact-form-7 id=' . $nl_contact_form_id . ']' ); 
                                }
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="container-fluid bg-primary py-5">
            <div class="container ">
                <div class="row">
                    <div class="col col-md-6 col-lg-4 ">
                        <!-- Logo -->
                        <?php 
                        $image = get_field('footer_logo', 'options');
                        if( !empty( $image ) ): ?>
                            <img class="footer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <!-- Content -->
                        <?php the_field('footer_content', 'options'); ?>
                    </div>
                    <div class="col col-md-6 col-lg-8">
                        <div class="d-flex w-100 h-100 justify-content-end align-items-end flex-row">
                        
                             <?php 
                            $email = get_field('main_email', 'options');
                            if($email):?>
                                <a href="mailto:<?php echo $email; ?>" class="px-3"><?php echo $email; ?></a>
                            <?php endif; ?>
                      
                        <div class="px-3">
                            <?php the_field('privacy_policy_link', 'options'); ?>
                        </div>
                        <div class="px-3"> 
                            <?php the_field('cookie_policy_link', 'options'); ?></div>
                        </div>      
                    </div>
                </div>
                </div>
            </div>
            
        </footer>
        <!-- #site-footer -->

        <?php wp_footer(); ?>

 </body>
</html>