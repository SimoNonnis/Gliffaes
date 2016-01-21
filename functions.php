<?php

add_action('after_setup_theme','ignite_setup', 16); 

function ignite_setup() {

	add_action('init', 'ignite_head_cleanup');
	add_filter('the_generator', 'ignite_rss_version');
	add_filter('gallery_style', 'ignite_gallery_style');
	add_filter( 'style_loader_src', 'ignite_remove_wp_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'ignite_remove_wp_ver_css_js', 9999 );

	add_action('wp_enqueue_scripts', 'ignite_scripts_and_styles', 999);

	ignite_theme_support();


    function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Continue Reading ></a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	function custom_excerpt_length( $length ) {
	return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
   	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   	return $html;
	}

	

}



function ignite_head_cleanup() {
	// category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
  // remove WP version from css
  add_filter( 'style_loader_src', 'ignite_remove_wp_ver_css_js', 9999 );

}

function ignite_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

function ignite_rss_version() { return ''; }

function ignite_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

function ignite_scripts_and_styles() {
  
  if (!is_admin()) {

    // register main stylesheet
    wp_register_style( 'ignite-stylesheet', get_stylesheet_directory_uri() . '/main.css', array(), '', 'all' );

	//adding scripts file in the footer
	wp_deregister_script('jquery');
    
    

	
	// enqueue styles and scripts
	wp_enqueue_style( 'ignite-stylesheet' );
    


    wp_enqueue_script( 'jquery', '/wp-includes/js/jquery/jquery.js', '', '1.8.3', true );
    wp_enqueue_script( 'jquery' );
    
   

  }
}

function ignite_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support('post-thumbnails');

	// default thumb size
	set_post_thumbnail_size(125, 125, true);
	add_image_size( 'ignite-thumb-1700', 986, 430, true );
	add_image_size( 'ignite-thumb-400', 400, 400, true );
	add_image_size( 'ignite-thumb-400-110', 400, 110, true );
	add_image_size( 'ignite-thumb-210', 210, 210, true );

	// adding post format support
	add_theme_support( 'post-formats',
		array('aside', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio')
	);

	// registering wp3+ menus
	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 'ignitetheme' ),   		 // main nav in header
			'footer-links' => __( 'Footer Links', 'ignitetheme' ), 		 // secondary nav in footer
			'offers-sidebar' => __( 'Offers Sidebar', 'ignitetheme' ), // offers sidebar menu
			'weddings-sidebar' => __( 'Weddings Sidebar', 'ignitetheme' )  // weddings sidebar menu
		)
	);
}

function ignite_main_nav() {
    wp_nav_menu(array(
    	'container' => '',                           
    	'menu' => __( 'The Main Menu', 'ignitetheme' ), 
    	'menu_class' => 'ul-top-nav clearfix',         
    	'theme_location' => 'main-nav',                 
	));
} 

function ignite_footer_links() {
    wp_nav_menu(array(
    	'container' => '',                              
    	'menu' => __( 'Footer Links', 'ignitetheme' ),  
    	'menu_class' => 'ul-footer-nav clearfix',      
    	'theme_location' => 'footer-links',             
	));
} 

function ignite_offers_sidebar() {
    wp_nav_menu(array(
    	'container' => '',                              
    	'menu' => __( 'Offers Sidebar', 'ignitetheme' ),  
    	'menu_class' => 'sidebar-menu clearfix',      
    	'theme_location' => 'offers-sidebar',             
	));
}

function ignite_weddings_sidebar() {
    wp_nav_menu(array(
    	'container' => '',                              
    	'menu' => __( 'Weddings Sidebar', 'ignitetheme' ),  
    	'menu_class' => 'sidebar-menu clearfix',      
    	'theme_location' => 'weddings-sidebar',             
	));
}  

function fp_boxes(){
	ob_start();
    get_template_part('partials/boxes');
    return ob_get_clean();
}
add_shortcode( 'fp_boxes', 'fp_boxes' );


?>