<?php

// Cryptage des emails
function lignes_studio_crypt_email( $atts , $content = null ) {
	if ( ! is_email( $content ) ) {
		return;
	}

	return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
}
add_shortcode( 'email', 'lignes_studio_crypt_email' );

add_theme_support( 'post-thumbnails', array( 'post' ) ); 


function slugify($text) {
    // Replace non letter characters by -
    $text = preg_replace('~[^\pL]+~u', '-', $text);

    // Transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // Remove numbers
    $text = preg_replace('~[0-9]+~', '', $text);

    // Trim
    $text = trim($text, '-');

    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // Lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}