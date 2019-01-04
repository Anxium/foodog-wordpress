<?php

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'second-menu' => 'Second menu',
));

function wpdocs_theme_name_scripts()
{
    wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
    wp_enqueue_style('main-style');
    wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );