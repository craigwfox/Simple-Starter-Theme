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
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name') ?> | <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]><script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Oswald:400,300,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css" type="text/css" />
  </head>
  <body>
    <header class="master-head">
      <div class="grid-row">        
        <a href="<?php echo get_site_url(); ?>" class="site-logo grid-1-2">
          <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </a>
        <div class="social grid-1-2">
          <a href="#0" class="fb">Facebook</a>
          <a href="#0" class="twit">Twitter</a>
          <a href="#0" class="gplus">Google Plus</a>
        </div>
      </div>
      <nav class="site-nav">
        <ul class="dropdown">
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
    </header><!-- Site Header -->