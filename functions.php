<?php
/* ********************
-----------------------
	Main WP Functions
-----------------------
******************** */

/* -----------------------------
	Cleaning the WP Head
	For use in production themes
----------------------------- */
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'feed_links_extra', 3);
	remove_action( 'wp_head', 'feed_links', 2);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');


/* --------------
	Add in jQuery
-------------- */
	function add_google_jquery() {
	 if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false);
		wp_enqueue_script('jquery');
	 }
	}
	add_action('wp_print_scripts ', 'add_google_jquery');


/* -----------------------
	Enable Post Thumbnails
----------------------- */
	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' ); 
	}


/* -------------------------------------
	Pull in includes for other functions
------------------------------------- */
	include ('functions_includes/menus.php');
	include ('functions_includes/widget_areas.php');
	include ('functions_includes/shortcodes.php');

?>