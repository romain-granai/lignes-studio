<?php
// Définition du textdomain
	load_theme_textdomain( 'lignes_studio' );

// Gestion du <title> par WP
	add_theme_support( 'title-tag' );

// Suppression de l'utilisation des étiquettes / tags de WP
	function lignes_studio_unregister_tags() {
		unregister_taxonomy_for_object_type( 'post_tag', 'post' );
	}
	add_action( 'init', 'lignes_studio_unregister_tags' );

// Add SVG support

function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

// ACF - Activation des Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}