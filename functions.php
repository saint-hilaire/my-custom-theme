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
?>
