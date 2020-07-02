<?php
/**
 * Sam Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

if ( ! function_exists( 'samtheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function samtheme_setup() {
	 
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'samtheme', get_template_directory() . '/languages' );
	 
		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );
	 
		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );
	 
		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'samtheme' ),
			'secondary' => __( 'Secondary Menu', 'samtheme' ),
			'footer' => __( 'Footer Menu', 'samtheme' )
		) );
	 
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // samtheme_setup

add_action( 'after_setup_theme', 'samtheme_setup' );


/**
 * Register and Enqueue Styles.
 */
function samtheme_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	//enqueue styles
	
	wp_enqueue_style( 'main', get_theme_file_uri('/src/sass/main.css'), array(), $theme_version );

	//enqueue scripts

	wp_enqueue_script('googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCLIT9gLHFO2KLv3xupBgOR5LtAD4wtg2Q', array(), $theme_version, true );

	wp_enqueue_script( 'main', get_theme_file_uri('/assets/js/main.js'), array('googlemap', 'jquery' ), $theme_version, true );
	 
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('node_modules/bootstrap/dist/js/bootstrap.min.js'), array('jquery'), $theme_version, true );

}

add_action( 'wp_enqueue_scripts', 'samtheme_register_styles' );

/**
 * Register menus locations
 */
function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'samtheme' ),
			'secondary' => __( 'Secondary Menu', 'samtheme' ),
			'footer' => __( 'Footer Menu', 'samtheme' )
		)
	);
}
add_action( 'init', 'register_my_menus' );


/**
 * add option page
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/**
 * ACF google map API
 */

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyCLIT9gLHFO2KLv3xupBgOR5LtAD4wtg2Q';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/**
 * Add a sidebar.
 */
 







function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
















/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {

			if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number )
			$number = 5;
		

		/**
		 * Filter the arguments for the Recent Posts widget.
		 *
		 * @since 3.4.0
		 *
		 * @see WP_Query::get_posts()
		 *
		 * @param array $args An array of arguments used to retrieve the recent posts.
		 */
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );

		if ($r->have_posts()) :
		?>
		<?php echo $args['before_widget']; ?>
		<?php if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<ul>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
			<li>
			
			<?php get_template_part('template-parts/teases/tease-post', get_post_type());?>

			</li>
		<?php endwhile; ?>
		</ul>
		<?php echo $args['after_widget']; ?>
		<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;
	}
}
function my_recent_widget_registration() {
unregister_widget('WP_Widget_Recent_Posts');
register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');












