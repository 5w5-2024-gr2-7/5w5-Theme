<?php

// Exit if accessed directly for security.
if (!defined('ABSPATH')) {
    exit;
}

// Register 'Professor' Custom Post Type
function register_professor_post_type() {
    $labels = array(
        'name' => __('Professors', 'textdomain'),
        'singular_name' => __('Professor', 'textdomain'),
        'menu_name' => __('Professors', 'textdomain'),
        'name_admin_bar' => __('Professor', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Professor', 'textdomain'),
        'new_item' => __('New Professor', 'textdomain'),
        'edit_item' => __('Edit Professor', 'textdomain'),
        'view_item' => __('View Professor', 'textdomain'),
        'all_items' => __('All Professors', 'textdomain'),
        'search_items' => __('Search Professors', 'textdomain'),
        'not_found' => __('No professors found.', 'textdomain'),
        'not_found_in_trash' => __('No professors found in trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'professors'), // Sets URL slug to /professor/
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
    );

    register_post_type('professor', $args);
}
add_action('init', 'register_professor_post_type');


function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function mesoptions() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'mesoptions');
?>
