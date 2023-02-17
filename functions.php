<?php

function avto_script(){
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css', [], 2023);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', [], 2023, true);
}

add_action('wp_enqueue_scripts', 'avto_script');

register_nav_menus([
    'header-menu' => 'Меню в шапке',
    'footer-menu' => 'Меню в подвале'
]);

function avto_setup() {
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'avto_setup');

require_once get_template_directory() . '/inc/breadcrumbs.php';