<?php

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'second-menu' => 'Second menu',
    'footer-menu' => 'menu footer',
    'footer-middle' => 'middle fotter'
));

function wpdocs_theme_name_scripts()
{
    wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
    wp_enqueue_style('main-style');
    wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

$the_query = new WP_Query('cat=1&showposts=3&orderby=rand');


function notux_widgets_init() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'Nom de ma zone de widgets', 'dossierdevotretheme' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'Description de la zone de widgets.', 'dossierdevotretheme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_init' );


/*lastest post*/

function count_post_visits() {
	if( is_single() ) {
	global $post;
	$views = get_post_meta( $post->ID, 'my_post_viewed', true );
	if( $views == '' ) {
	update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
	} else {
	$views_no = intval( $views );
	update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
	}
	}
   }
   add_action( 'wp_head', 'count_post_visits' );