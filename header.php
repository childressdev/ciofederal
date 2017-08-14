<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">

    <title>CIO Federal IT</title>

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php if(!is_front_page()): ?>
    <nav id="header-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon-white.png" class="img-responsive" alt="CIO Federal IT Icon Logo" /></a>
          <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-small.png" class="img-responsive" alt="CIO Federal IT Icon Logo" /></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php 
          $nav_defaults = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbar',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'ciofederal_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><a href="' . the_field('linkedin', 'option') . '" class="header-social" target="_blank"><i class="fa fa-linkedin"></i></a></li></ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($nav_defaults);

          function ciofederal_fallback_menu(){ ?>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li<?php if(is_page('services')){ echo 'class="active"'; } ?>><a href="<?php echo home_url('services'); ?>">Services</a></li>
                <li<?php if(is_page('clients')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('clients'); ?>">Clients</a></li>
                <li<?php if(is_page('careers')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
                <li<?php if(is_page('news')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('news'); ?>">News</a></li>
                <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
                <li><a href="<?php the_field('linkedin', 'option'); ?>" class="header-social" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
        <?php } ?>
      </div>
    </nav>
  <?php endif; ?>  