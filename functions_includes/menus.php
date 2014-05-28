<?php
/* *********************************************************************
------------------------------------------------------------------------
  Menus Functions
------------------------------------------------------------------------
********************************************************************* */

  add_theme_support( 'menus' );

  /* --- Creating the Nav Menus --- */
    if ( function_exists( 'register_nav_menus' ) ) {
      register_nav_menus(
        array(
          'main_nav' => 'Main Nav',
          'footer_nav' => 'Foot Nav'
        )
      );
    }

  /* --- Clean Up menus --- */
    add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
    add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
    add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
    function my_css_attributes_filter($var) {
      return is_array($var) ? array() : '';
    }
    // remove ul wp_nav_menu
    function remove_ul ( $menu ){
        return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
    }
    add_filter( 'wp_nav_menu', 'remove_ul' );
    add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
    function prefix_nav_menu_args($args = ''){
        $args['container'] = false;
        return $args;
    }
?>