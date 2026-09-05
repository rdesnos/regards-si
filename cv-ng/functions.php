<?php
if (!defined('ABSPATH')) { exit; }

function cv_ng_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    register_nav_menus(['primary' => __('Navigation principale', 'cv-ng')]);
}
add_action('after_setup_theme', 'cv_ng_setup');

function cv_ng_assets() {
    wp_enqueue_style('cv-ng-style', get_stylesheet_uri(), [], '0.1.0');
    wp_enqueue_style('cv-ng-design', get_template_directory_uri() . '/assets/css/cv-ng.css', ['cv-ng-style'], '0.1.0');
}
add_action('wp_enqueue_scripts', 'cv_ng_assets');
