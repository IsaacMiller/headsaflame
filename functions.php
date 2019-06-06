<?php
/**
 * Heads Aflame Magazine functions and definitions
 *
 * @package Heads Aflame Magazine
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'heads_aflame_magazine_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function heads_aflame_magazine_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Heads Aflame Magazine, use a find and replace
	 * to change 'heads-aflame-magazine' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'heads-aflame-magazine', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'heads-aflame-magazine' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'audio' ) );
add_theme_support( 'post-thumbnails' );
add_image_size( 'awesome-panel', 800, 445, true ); // (cropped)


	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'heads_aflame_magazine_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // heads_aflame_magazine_setup
add_action( 'after_setup_theme', 'heads_aflame_magazine_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function heads_aflame_magazine_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Hidden Sidebar', 'heads-aflame-magazine' ),
		'id'            => 'sidebar-hidden',
		'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'heads-aflame-magazine' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="dark-bg-heading sidebar-heading">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Pages Sidebar', 'heads-aflame-magazine' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="dark-bg-heading sidebar-heading">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Top', 'heads-aflame-magazine' ),
		'id'            => 'homepage-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'heads_aflame_magazine_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function heads_aflame_magazine_scripts() {
	wp_enqueue_style( 'heads-aflame-magazine-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/custom.modernizr.js', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.min.js', array(), true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), true );
	wp_enqueue_script( 'heads-aflame-magazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'heads-aflame-magazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'heads-aflame-magazine-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

add_action( 'wp_enqueue_scripts', 'heads_aflame_magazine_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Text widgets execute PHP
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}


function single_template_terms($template) {
    foreach( (array) wp_get_object_terms(get_the_ID(), get_taxonomies(array('public' => true, '_builtin' => true))) as $term ) {
        if ( file_exists(TEMPLATEPATH . "/single-{$term->slug}.php") ) {
            return TEMPLATEPATH . "/single-{$term->slug}.php";
        }
    }
    return $template;
}

add_filter('single_template', 'single_template_terms');



function bm_human_time_diff_enhanced( $duration = 60 ) {

	$post_time = get_the_time('U');
	$human_time = '';

	$time_now = date('U');

	// use human time if less that $duration days ago (60 days by default)
	// 60 seconds * 60 minutes * 24 hours * $duration days
	if ( $post_time > $time_now - ( 60 * 60 * 24 * $duration ) ) {
		$human_time = sprintf( __( '%s ago', 'binarymoon'), human_time_diff( $post_time, current_time( 'timestamp' ) ) );
	} else {
		$human_time = get_the_date();
	}

	return $human_time;

}


/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('channel', 'post', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		'has_archive' => true,
		'show_ui' => true,
        'show_admin_column' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Channels', 'taxonomy general name' ),
			'singular_name' => _x( 'Channel', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Channels' ),
			'all_items' => __( 'All Channel' ),
			'parent_item' => __( 'Channel' ),
			'parent_item_colon' => __( 'Channel:' ),
			'edit_item' => __( 'Edit Channel' ),
			'update_item' => __( 'Update Channel' ),
			'add_new_item' => __( 'Add New Channel' ),
			'new_item_name' => __( 'New Channel Name' ),
			'menu_name' => __( 'Channels' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'channel', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
			
		),
	));
}
add_action( 'init', 'add_custom_taxonomies', 0 );


include_once('advanced-custom-fields/acf.php');


function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>
