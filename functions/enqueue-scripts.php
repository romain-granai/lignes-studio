<?php
function enqueue_scripts() {
    // jQuery
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array(), false, true );

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css' );

    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
    wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
    wp_dequeue_style( 'classic-theme-styles' );

}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');