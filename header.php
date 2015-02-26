<!doctype html>
<!-- ********************************************************************
   _____            __                                    
  / __(_)_ _  ___  / /__                                  
 _\ \/ /  ' \/ _ \/ / -_)                                 
/___/_/_/_/_/ .__/_/\__/          ________                
  / __/ /__/_/_____/ /____ ____  /_  __/ /  ___ __ _  ___ 
 _\ \/ __/ _ `/ __/ __/ -_) __/   / / / _ \/ -_)  ' \/ -_)
/___/\__/\_,_/_/  \__/\__/_/     /_/ /_//_/\__/_/_/_/\__/ 
                                                                        
By Craig Fox @ craigwfox.com
https://github.com/craigwfox/Simple-Starter-Theme.git
******************************************************************** -->
<!--[if IE 7]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]><script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script><![endif]-->
  </head>
  <body <?php body_class( $class ); ?>>
    <header class="site-header">
      <div class="site-header__top-bar">
        <ul class="grid-1-2 site-header__contact">
          <li>555 Some Street, Cool City US</li>
          <li>(555) 555-5555</li>
        </ul>
        <ul class="grid-1-2 site-header__social">
          <li><a href="#0" class="icon--facebook">Facebook</a></li>
          <li><a href="#0" class="icon--twitter">Twitter</a></li>
          <li><a href="#0" class="icon--instagram">Instagram</a></li>
        </ul>
      </div>

      <div class="grid-row">
        <div class="grid-1-2 site-header__logo">
        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
            <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
          </a>
        <?php else : ?>
          <a href="<?php echo get_site_url(); ?>">
            <h1 class="site-header__logo__title"><?php bloginfo( 'name' ); ?></h1>
            <h2 class="site-header__logo__description"><?php bloginfo( 'description' ); ?></h2>
          </a>
        <?php endif; ?>
        </div>
      </div>

      <nav class="site-header__nav">
        <ul class="site-header__nav__list">
          <?php $menuParameters = array(
            'theme_location' => 'main_nav',
            'container'       => false,
            'echo'            => true,
            'items_wrap'      => '%3$s',
            'depth'           => 0,
          );
          echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
          ?>
        </ul>
      </nav>
    </header><?php // Site Header ?>