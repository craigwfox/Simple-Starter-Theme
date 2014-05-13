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


/* -------------------------------------
  Pull in includes for other functions
------------------------------------- */
  include ('functions_includes/menus.php');
  include ('functions_includes/images.php');
  include ('functions_includes/widget_areas.php');
  include ('functions_includes/shortcodes.php');

?>