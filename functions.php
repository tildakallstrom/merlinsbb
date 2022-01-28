<?php 

/* registrera meny */

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Huvudmeny')
    ));
}

/*aktivera stöd för dynamisk header*/

$args = array(
    'width' => 1760,
    'height' => 536,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);

/* aktivera stöd för thumbnails */


/* Custom sizes */
add_image_size( 'notis-thumb', 80, 80, true); 
add_image_size( 'notis-wide', 960, 240, array('center', 'center'));
add_image_size( 'notis-hero', 300, 300, false);
add_theme_support('post-thumbnails');

	
  // aktivera widget-area
 
  function new_sidebar_widget_init() {
    register_sidebar(array(
        'id' => 'LeftFooter',
        'name' => 'LeftFooter',
         'description' => 'Widget area',
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
         'before_title' => '<h2>',
         'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'id' => 'RightFooter',
        'name' => 'RightFooter',
         'description' => 'Widget area',
         'before_widget' => '<div class="widget2">',
         'after_widget' => '</div>',
    ));
    
     register_sidebar(array(
        'id' => 'LeftHeader',
        'name' => 'LeftHeader',
         'description' => 'Widget area',
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
    ));
    
       register_sidebar(array(
        'id' => 'FrontpageWidget',
        'name' => 'FrontpageWidget',
         'description' => 'Widget area',
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
    ));
}
add_action( 'widgets_init', 'new_sidebar_widget_init' );

/* read more link */
function hassels_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link"><a href="%1$s" class="link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hassels' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'hassels_excerpt_more' );
