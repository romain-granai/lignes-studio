<?php

// Add Navigation
	function lignes_studio_register_my_menu() {
		register_nav_menus( array(
			'main'	=> __( 'Main Navigation', 'lignes_studio' ),
			'secondary'	=> __( 'Secondary Navigation', 'lignes_studio' )
		));
	}
	add_action( 'after_setup_theme', 'lignes_studio_register_my_menu' );
