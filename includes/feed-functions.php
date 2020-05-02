<?php

add_action('init', 'feed_manager_init');
function feed_manager_init(){
    wp_enqueue_style('feed-manager-css', plugin_dir_url(__DIR__) . 'assets/css/feed-manager.css', array(), '1.0.0');
    wp_enqueue_script('feed-manager-js',plugin_dir_url(__DIR__) . 'assets/js/feed-manager.js', array(), '1.0.0', 'true');
}


// Хук событие 'Admin-menu', запускает функцию 'add_sync_product_site_link()'
add_action( 'admin_menu', 'add_feed_manager_site_link');

function add_feed_manager_site_link(){
    add_submenu_page(
        'tools.php',
        'Feed Manager by Lama Studio',
        'Feed Manager',
        'manage_options',
        'wc-feed-manager-lamastudio/includes/feed-page.php'
    );
}