<?php
/**navbar 
 **/
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <?php get_template_part('template-parts/navbar/navbar', 'logo');
        ?>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <?php 
        
        //display primary menu
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav ml-auto',
                    'link_before' => '<span class="nav-item nav-link">',
                    'link_after' => '</span>',
                )
            );
        ?>




        </div>
      </div>
    </nav>