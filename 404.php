<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-inner thin error404-content">

                <div class="error mt-5">404</div>

                    <h1 class="entry-title text-uppercase text-center "><?php _e( 'Pagina non trovata', 'rob-theme' ); ?></h1>

                    <div class="intro-text text-center"><p><?php _e( 'La pagina che stavi cercando non è stata trovata. Potrebbe essere stata rimossa o rinominata.', 'rob-theme' ); ?></p></div>
                    <div class="text-center">
                    <?php
                    get_search_form(
                        array(
                            'label' => __( '404 not found', 'rob-theme' ),
                        )
                    );
                    ?>
                    </div>
                </div><!-- .section-inner -->
            </div>
        </div>
    </div>

 

</main><!-- #site-content -->

<?php
get_footer();