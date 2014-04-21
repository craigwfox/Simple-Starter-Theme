<?php
/* *********************************************************************
------------------------------------------------------------------------
  Widgets Functions
------------------------------------------------------------------------
********************************************************************* */

	add_filter('widget_text', 'do_shortcode');
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Site Sidebar',
			'id'   => 'site_sidebar',
			'description'   => 'This is the main sidebar.',
			'before_widget' => '<article id="%1$s" class="sidebar-widget widget %2$s">',
			'after_widget'  => '</article>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
	}

?>