<?php
/**
 * Estate Theme Functions
 *
 * @package Estate_Theme
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('ESTATE_THEME_VERSION', '1.0.0');
define('ESTATE_THEME_DIR', get_template_directory());
define('ESTATE_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function estate_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('property-thumbnail', 600, 400, true);
    add_image_size('property-large', 1200, 800, true);
    add_image_size('blog-thumbnail', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'estate-theme'),
        'footer'  => __('Footer Menu', 'estate-theme'),
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => '0a1628',
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for wide alignment
    add_theme_support('align-wide');

    // Add editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Custom color palette for Gutenberg
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Primary Dark', 'estate-theme'),
            'slug'  => 'primary-dark',
            'color' => '#0a1628',
        ),
        array(
            'name'  => __('Accent Gold', 'estate-theme'),
            'slug'  => 'accent-gold',
            'color' => '#d4a853',
        ),
        array(
            'name'  => __('White', 'estate-theme'),
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
    ));
}
add_action('after_setup_theme', 'estate_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function estate_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'estate-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Main stylesheet
    wp_enqueue_style(
        'estate-theme-style',
        get_stylesheet_uri(),
        array(),
        ESTATE_THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'estate-theme-main',
        ESTATE_THEME_URI . '/assets/js/main.js',
        array('jquery'),
        ESTATE_THEME_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('estate-theme-main', 'estateTheme', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('estate_theme_nonce'),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'estate_theme_scripts');

/**
 * Register Widget Areas
 */
function estate_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'estate-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'estate-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'estate-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for first footer column.', 'estate-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'estate-theme'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here for second footer column.', 'estate-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'estate-theme'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here for third footer column.', 'estate-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'estate_theme_widgets_init');

/**
 * Include required files
 */

// Custom Post Types
require_once ESTATE_THEME_DIR . '/inc/custom-post-types.php';

// Custom Taxonomies
require_once ESTATE_THEME_DIR . '/inc/custom-taxonomies.php';

// Custom Meta Boxes
require_once ESTATE_THEME_DIR . '/inc/custom-meta-boxes.php';

// Customizer
require_once ESTATE_THEME_DIR . '/inc/customizer.php';

// SEO Functions
require_once ESTATE_THEME_DIR . '/inc/seo.php';

// Template Functions
require_once ESTATE_THEME_DIR . '/inc/template-functions.php';

/**
 * Custom excerpt length
 */
function estate_theme_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'estate_theme_excerpt_length');

/**
 * Custom excerpt more
 */
function estate_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'estate_theme_excerpt_more');

/**
 * Add custom body classes
 */
function estate_theme_body_classes($classes) {
    // Add class for singular pages
    if (is_singular()) {
        $classes[] = 'singular';
    }

    // Add class for front page
    if (is_front_page()) {
        $classes[] = 'front-page';
    }

    // Add class for property pages
    if (is_singular('property') || is_post_type_archive('property')) {
        $classes[] = 'property-page';
    }

    return $classes;
}
add_filter('body_class', 'estate_theme_body_classes');

/**
 * Flush rewrite rules on theme activation
 */
function estate_theme_activation() {
    estate_register_property_post_type();
    estate_register_property_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'estate_theme_activation');
