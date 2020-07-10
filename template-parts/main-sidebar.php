<?php
/**
 * sidebar
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */


if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
</div>
<?php } ?>
