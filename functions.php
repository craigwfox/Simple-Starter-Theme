<?php
/* *********************************************************
------------------------------------------------------------
  Main WP Functions
------------------------------------------------------------
********************************************************* */

/* -------------------------------------
  Cleaning the WP Head
  For use in production themes
------------------------------------- */
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'feed_links_extra', 3);
  remove_action( 'wp_head', 'feed_links', 2);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');


/* -------------------------------------
  Add in jQuery
------------------------------------- */
  wp_enqueue_script('jquery');


/* -------------------------------------
  Pretty Home Page Title Tag
------------------------------------- */
  add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
  function baw_hack_wp_title_for_home( $title )
  {
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
      return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
    }
    return $title;
  }


/* -------------------------------------
  Set up the content width value based on the theme's design.
------------------------------------- */
if ( ! isset( $content_width ) ) {
  $content_width = 600;
}


/* -------------------------------------
  Theme Customizer
------------------------------------- */
  function themeslug_theme_customizer( $wp_customize ) {
    // Fun code will go here
    $wp_customize->add_section( 'themeslug_logo_section' , array(
      'title'       => __( 'Logo', 'themeslug' ),
      'priority'    => 30,
      'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting( 'themeslug_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
      'label'    => __( 'Logo', 'themeslug' ),
      'section'  => 'themeslug_logo_section',
      'settings' => 'themeslug_logo',
    )));
  }
  add_action('customize_register', 'themeslug_theme_customizer');



/* *********************************************************************
------------------------------------------------------------------------
  Images Functions
------------------------------------------------------------------------
********************************************************************* */
  /* -----------------------
    Enable Post Thumbnails
  ----------------------- */
    if ( function_exists( 'add_theme_support' ) ) { 
      add_theme_support( 'post-thumbnails' ); 
    }

  /* -----------------------
    Enable SVG Images
  ----------------------- */
    function cc_mime_types( $mimes ){
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter( 'upload_mimes', 'cc_mime_types' );



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



/* *********************************************************************
------------------------------------------------------------------------
  Shortcode Functions
------------------------------------------------------------------------
********************************************************************* */

/* ---------------------------------------------------------------------
  Shortcode to Remove AutoP - From css-tricks.com
  To use wrap your content with [raw][/raw]
--------------------------------------------------------------------- */
  function my_formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
    foreach ($pieces as $piece) {
      if (preg_match($pattern_contents, $piece, $matches)) {
        $new_content .= $matches[1];
      } else {
        $new_content .= wptexturize(wpautop($piece));
      }
    }
    return $new_content;
  }


/* ---------------------------------------------------------------------
  Basic Shortcode Format
  function SHORTCODE_NAME($atts, $content = null) {
    return '<div class="CLASS_NAME">'.do_shortcode($content).'</div>';}
  add_shortcode('SHORTCODE_NAME', 'SHORTCODE_NAME');
--------------------------------------------------------------------- */

  /* -----------------
    Basic Shortcodes
  ----------------- */
    function inline_list_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="inline-list '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('inline_list', 'inline_list_shortcode');


    function div_class_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="'.esc_attr($class_name).'">'.do_shortcode($content).'</div>';
    }
    add_shortcode('div_class', 'div_class_shortcode');


  /* -----------------
    Misc Shortcodes
  ----------------- */
    function iframe_wrap_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="iframe-wrap '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('iframe_wrap', 'iframe_wrap_shortcode');


  remove_filter('the_content', 'wpautop');
  remove_filter('the_content', 'wptexturize');
  add_filter('the_content', 'my_formatter', 99);

?>