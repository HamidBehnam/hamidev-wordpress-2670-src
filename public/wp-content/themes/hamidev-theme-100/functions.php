<?php

function load_resources()
{
    wp_enqueue_style('global_styles', get_theme_file_uri('/resources/dist/global.bundle.css'));
    wp_enqueue_script('global_scripts', get_theme_file_uri('/resources/dist/global.bundle.js'));

    $bodyClasses = get_body_class();

    if (in_array('post-template-default', $bodyClasses)) {
        wp_enqueue_style('single_styles', get_theme_file_uri('/resources/dist/single.bundle.css'));
        wp_enqueue_script('single_scripts', get_theme_file_uri('/resources/dist/single.bundle.js'));
    }

    if (in_array('page-template-default', $bodyClasses)) {
        wp_enqueue_style('page_styles', get_theme_file_uri('/resources/dist/page.bundle.css'));
        wp_enqueue_script('page_scripts', get_theme_file_uri('/resources/dist/page.bundle.js'));
    }
}

add_action('wp_enqueue_scripts', 'load_resources');

function show_page_title() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'show_page_title');

