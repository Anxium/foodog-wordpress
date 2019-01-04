<?php

// Ajoute les menus WP
register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'second-menu' => 'Second menu',
));

// Gère les css
function wpdocs_theme_name_scripts()
{
    wp_register_style('main-style', get_template_directory_uri().'/style.css', array(), true);
    wp_enqueue_style('main-style');
    wp_register_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

// Ajoute les thumbnails
add_theme_support('post-thumbnails');
add_image_size( 'single-post-thumbnail', 356, 250);