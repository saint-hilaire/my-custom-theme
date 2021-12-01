<?php
register_nav_menus( 
	array(
		'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
	)
);

wp_nav_menu( array(
	'theme-location' => 'menu-1',
) );
?>
