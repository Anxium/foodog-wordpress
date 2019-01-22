<?php
// Fonction Axel

// Ajoute les menus WP
register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'header-social-menu' => 'HEADER Social Menu',
));

// Gère les css
function wpdocs_theme_name_scripts()
{
    wp_register_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
    wp_register_style('fontawesome-icons', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), true);
    wp_enqueue_style('fontawesome-icons');
    wp_register_style('main-style', get_template_directory_uri().'/style.css', array(), true);
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

// Ajoute les thumbnails
add_theme_support('post-thumbnails');
add_image_size( 'single-post-thumbnail', 356, 250);
add_image_size( 'single-post-hero', 520, 320);
add_image_size( 'post-hero', 150, 150);

// Gère affichage des boucles
$hero_one = new WP_query(array(
    'tag' => 'hero-one',
    'posts_per_page' => 1,
));

$hero = new WP_query(array(
    'tag' => 'hero',
    'posts_per_page' => 4,
));

$featured = new WP_query(array(
    'tag' => 'features',
    'posts_per_page' => 3,
));

// Gère les résumés des articles
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Widgets
function notux_widgets_init() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'Recherche', 'RASH' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'Widget destiné à la fonction de recherche par mot clé.', 'RASH' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
        ) );
        
		register_sidebar( array(
			'name'			=> __( 'Sidebar', 'RASH' ),
			'id'			=> 'zone-widgets-2',
			'description'	=> __( 'Widget destiné à la sidebar.', 'RASH' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_init' );

// Hadri fonction

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
