<?php

// creando el menu
function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'extra-menu' => __( 'Extra Menu' )
			)
		);
}
add_action( 'init', 'register_my_menus' );