<?php

add_filter('show_admin_bar', '__return_false');

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

// Carrousel.js
function ajouter_scripts_carrousel() {
    wp_enqueue_script('carrousel-js', get_template_directory_uri() . '/js/carrousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_scripts_carrousel');

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

function register_project_post_type() {
    $labels = array(
        'name' => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'menu_name' => __('Projects', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'new_item' => __('New Project', 'textdomain'),
        'edit_item' => __('Edit Project', 'textdomain'),
        'view_item' => __('View Project', 'textdomain'),
        'all_items' => __('All Projects', 'textdomain'),
        'search_items' => __('Search Projects', 'textdomain'),
        'not_found' => __('No projects found.', 'textdomain'),
        'not_found_in_trash' => __('No projects found in trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type');

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

function custom_enqueue_styles() {
    wp_enqueue_style('typekit-styles', 'https://use.typekit.net/tfg7cov.css');
    wp_enqueue_style('material-symbols-styles', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=call,language,location_on');
    wp_enqueue_style('font-awesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css', array(), '6.0.0-beta2', 'all');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

function filter_projects_by_category() {
    $category = sanitize_text_field($_POST['category']);
    $args = [
        'post_type' => 'project',
        'posts_per_page' => -1,
        'meta_query' => [],
    ];

    if ($category) {
        $args['meta_query'][] = [
            'key' => 'category',
            'value' => $category,
            'compare' => 'LIKE',
        ];
    }

    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="projet" data-category="<?php echo get_field('category'); ?>">
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('Large'); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                <?php endif; ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="button-link">En savoir plus...</a>
            </div>
        <?php endwhile;
    else :
        echo '<p>No projects found.</p>';
    endif;

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_filter_projects', 'filter_projects_by_category');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects_by_category');

function filter_professors_by_category($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('professor')) {
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $query->set('meta_query', array(
                array(
                    'key' => 'Category',
                    'value' => sanitize_text_field($_GET['category']),
                    'compare' => 'LIKE'
                ),
            ));
        }
    }
}
function redirect_single_stage_to_archive() {
    if (is_singular('stage')) {
        wp_redirect(get_post_type_archive_link('stage'), 301);
        exit;
    }
}
add_action('template_redirect', 'redirect_single_stage_to_archive');
add_action('pre_get_posts', 'filter_professors_by_category');

function filter_courses_ajax() {
    $session = isset($_POST['session']) ? sanitize_text_field($_POST['session']) : '';
    $volet = isset($_POST['volet']) ? sanitize_text_field($_POST['volet']) : '';

    $args = array(
        'post_type' => 'course',
        'posts_per_page' => -1,
        'meta_query' => array(),
        'orderby' => 'date',
        'order' => 'ASC'
    );

    if (!empty($session)) {
        $args['meta_query'][] = array(
            'key' => 'session',
            'value' => $session,
            'compare' => '='
        );
    }

    if (!empty($volet)) {
        $args['meta_query'][] = array(
            'key' => 'category',
            'value' => $volet,
            'compare' => '='
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            $session = get_field('session');
            $session_class = '';
            if ($session == 'Session 1') {
                $session_class = 'session-jaune';
            } elseif ($session == 'Session 2') {
                $session_class = 'session-bleu';
            } elseif ($session == 'Session 3') {
                $session_class = 'session-vert';
            } elseif ($session == 'Session 4') {
                $session_class = 'session-rose';
            } elseif ($session == 'Session 5') {
                $session_class = 'session-marine';
            } elseif ($session == 'Session 6') {
                $session_class = 'session-rouge';
            }
            ?>
            <div class="course-box">
                <h3><?php the_title(); ?></h3>
                <div class="course-info">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="course-oval <?php echo esc_attr($session_class); ?>">
                        <?php echo esc_html($session); ?>
                    </div>
                    <div class="course-oval"><?php the_field('category'); ?></div>
                    <a href="<?php the_permalink(); ?>" class="course-button">➔</a>
                </div>
            </div>
        <?php endwhile;
    } else {
        echo '<p>No courses found.</p>';
    }

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_filter_courses', 'filter_courses_ajax');
add_action('wp_ajax_nopriv_filter_courses', 'filter_courses_ajax');
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
?>
