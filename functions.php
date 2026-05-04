<?php
/**
 * Smart Dentistry Theme Functions
 */

function sd_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => 'Hlavní menu',
    ));
}
add_action('after_setup_theme', 'sd_setup');

add_filter('show_admin_bar', '__return_false');

function sd_enqueue() {
    // Google Fonts
    wp_enqueue_style('sd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&display=swap',
        array(), null
    );
    // Theme style
    $v = filemtime(get_stylesheet_directory() . '/style.css');
    wp_enqueue_style('sd-style', get_stylesheet_uri(), array('sd-google-fonts'), $v);

    // Main JS
    $js_path = get_stylesheet_directory() . '/js/main.js';
    if (file_exists($js_path)) {
        $jv = filemtime($js_path);
        wp_enqueue_script('sd-main', get_stylesheet_directory_uri() . '/js/main.js', array(), $jv, true);
    }
}
add_action('wp_enqueue_scripts', 'sd_enqueue');
