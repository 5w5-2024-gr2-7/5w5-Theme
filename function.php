<?php
// Exit if accessed directly for security.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue the theme's stylesheet.
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>