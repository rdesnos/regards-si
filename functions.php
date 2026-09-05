<?php
if (!defined('ABSPATH')) { exit; }

function regards_si_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Navigation principale', 'regards-si'),
    ]);
}
add_action('after_setup_theme', 'regards_si_setup');

function regards_si_assets() {
    wp_enqueue_style('regards-si-style', get_stylesheet_uri(), [], '0.1.0');
    wp_enqueue_style('regards-si-theme', get_template_directory_uri() . '/assets/css/theme.css', [], '0.1.0');
}
add_action('wp_enqueue_scripts', 'regards_si_assets');
