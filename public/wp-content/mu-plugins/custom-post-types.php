<?php

function init_handler() {
    register_post_type('organization', [
        'public' => true,
        'labels' => [
            'name' => 'Organizations',
            'add_new_item' => 'Add New Organization',
            'edit_item' => 'Edit Organization',
            'all_items' => 'All Organizations',
            'singular' => 'Organization'
        ],
        'menu_icon' => 'dashicons-grid-view'
    ]);
}

add_action('init', 'init_handler');
