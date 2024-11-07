<?php

if (!defined('ABSPATH')) {
    exit;
}

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
        'rewrite' => array('slug' => 'professors'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
    );

    register_post_type('professor', $args);
}
add_action('init', 'register_professor_post_type');


function register_course_post_type() {
    $labels = array(
        'name' => __('Courses', 'textdomain'),
        'singular_name' => __('Course', 'textdomain'),
        'menu_name' => __('Courses', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Course', 'textdomain'),
        'new_item' => __('New Course', 'textdomain'),
        'edit_item' => __('Edit Course', 'textdomain'),
        'view_item' => __('View Course', 'textdomain'),
        'all_items' => __('All Courses', 'textdomain'),
        'search_items' => __('Search Courses', 'textdomain'),
        'not_found' => __('No courses found.', 'textdomain'),
        'not_found_in_trash' => __('No courses found in trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'courses'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
    );

    register_post_type('course', $args);
}
add_action('init', 'register_course_post_type');


function register_my_menus() {
    register_nav_menus(array(
        'principal' => __('Principal Menu'),
    ));
}
add_action('init', 'register_my_menus');

function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function mesoptions() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'mesoptions');

function add_menu_class($items) {
    foreach ($items as $item) {
        $item->classes[] = 'nav-item';
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_menu_class');

// Section des stages
function create_stages_post_type() {
    register_post_type('stages',
        array(
            'labels' => array(
                'name' => __('Stages'),
                'singular_name' => __('Stage')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'stages'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_stages_post_type');
