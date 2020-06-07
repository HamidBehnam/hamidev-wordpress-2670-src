<?php

function load_resources()
{
    wp_enqueue_style('global_styles', get_theme_file_uri('/resources/dist/global.bundle.css'));
    wp_enqueue_script('global_scripts', get_theme_file_uri('/resources/dist/global.bundle.js'));
}

add_action('wp_enqueue_scripts', 'load_resources');

function show_page_title() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'show_page_title');

