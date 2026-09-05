<?php
if (!defined('ABSPATH')) { exit; }

function cv_ng_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height' => 600,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true,
        'unlink-homepage-logo' => true,
    ]);
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_image_size('cv-ng-card', 900, 506, true);
    register_nav_menus(['primary' => __('Navigation principale', 'cv-ng')]);
}
add_action('after_setup_theme', 'cv_ng_setup');

function cv_ng_assets() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cv-ng-style', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('cv-ng-design', get_template_directory_uri() . '/assets/css/cv-ng.css', ['cv-ng-style'], $version);
}
add_action('wp_enqueue_scripts', 'cv_ng_assets');

function cv_ng_excerpt_length($length) { return 28; }
add_filter('excerpt_length', 'cv_ng_excerpt_length', 20);

function cv_ng_document_title_separator($sep) { return '—'; }
add_filter('document_title_separator', 'cv_ng_document_title_separator');
