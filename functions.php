<?php
function my_theme_enqueue_styles() {
    // Enqueue the custom styles.css file
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/styles.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function increase_upload_size() {
  @ini_set('upload_max_size', '100M');
  @ini_set('post_max_size', '100M');
  @ini_set('max_execution_time', '300');
}
add_action('init', 'increase_upload_size');