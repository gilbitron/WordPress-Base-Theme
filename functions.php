<?php

add_theme_support('post-thumbnails');
// register_nav_menus(array('primary' => 'Primary Navigation'));

function get_page_id_from_path( $path ) {
	$page = get_page_by_path( $path );
	if( $page ) {
		return $page->ID;
	} else {
		return null;
	};
}

function get_category_id( $cat_name ){
	$term = get_term_by( 'name', $cat_name, 'category' );
	return $term->term_id;
}

function add_slug_to_body_class( $classes ) {
	global $post;
   
	if( is_home() ) {			
		$key = array_search( 'blog', $classes );
		if($key > -1) {
			unset( $classes[$key] );
		};
	} elseif( is_page() ) {
		$classes[] = sanitize_html_class( $post->post_name );
	} elseif(is_singular()) {
		$classes[] = sanitize_html_class( $post->post_name );
	};

	return $classes;
}
add_filter( 'body_class', 'add_slug_to_body_class' );

function script_enqueuer() {
	//wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
	//wp_enqueue_script( 'site' );

	wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );
}	
add_action( 'wp_enqueue_scripts', 'script_enqueuer' );
