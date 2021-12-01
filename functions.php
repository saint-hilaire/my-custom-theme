<?php
register_nav_menus( 
	array(
		'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
	)
);

wp_nav_menu( array(
	'theme-location' => 'menu-1',
) );

function my_custom_theme_sidebar(){
	register_sidebar( array(
		'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
		'id'   => 'sidebar-1',
	) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'my-custom-image-size', 640, 999 );

/*
 * get_stylesheet_uri() is a helper function that retrieves the URI of the current theme’s stylesheet. 
 * If we were enqueueing any other file we would need to do this instead:

wp_enqueue_style( 'my-stylesheet', get_template_directory_uri() . '/css/style.css' );
	* */
function my_custom_theme_enqueue() {
	wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
	
	// Our theme does not have any scripts, if it did, we'd enqueue them like this.
	// wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/js/scripts.js' );

	// An exception to the above is scripts that have been pre-registered by WordPress, 
	// in those cases you only need to supply the first parameter ($handle):
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );
?>
