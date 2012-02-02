<?php
/**
 * Functions Page
 *
 * @package WpGuru
 * @subpackage WhiteHeaven
 */

// Set the content width based on the Theme CSS
if ( ! isset( $content_width ) )
	$content_width = 422;


// This theme needs post thumbnails
add_theme_support( 'post-thumbnails' );
add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );

// We'll be using them for custom header images on posts and pages
// so we want them to be 940 pixels wide by 198 pixels tall (larger images will be auto-cropped to fit)
set_post_thumbnail_size( 150, 150, true );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Register widgetized areas
if ( ! function_exists( 'meta_widget_init' ) ) :
function meta_widget_init() {
	// Left sidebar
	register_sidebar( array (
		'name' => 'Left Widget Area',
		'id' => 'left-widget-area',
		'description' => 'The left widget area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	// Right sidebar
	register_sidebar( array (
		'name' => 'Right Widget Area',
		'id' => 'right-widget-area',
		'description' => 'The right widget area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

}
endif;
add_action( 'init', 'meta_widget_init' );

function wpguru_styles() {
    wp_enqueue_style( 'theme-css', get_bloginfo('stylesheet_directory') . '/style.css', false, '1', 'all' );
}
add_action( 'wp_print_styles', 'wpguru_styles', 100 );

?>