<?php
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
?>