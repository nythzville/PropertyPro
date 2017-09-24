<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="author" content="Ciplex">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.png">

    <!-- Bootstrap core CSS -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <?php wp_head(); ?>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js"></script>

  </head>
  <body <?php body_class() ?>>
    <!-- FIXED NAVBAR
    ================================================== -->
    <header role="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="site-branding">
                        <img id="logo-main" src="<?php echo get_template_directory_uri(); ?>/img/pp_logo.png" width="75" alt="Logo Thing main logo">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>        
                </div>
                <div class="col-lg-6">
                    <div class="header-contact">
                        <h3> JOIN OUR TEAM</h3>
                        <p>+0987654321</p>
                    </div>
                </div>
            </div>
        </div>
    <nav id="navbar-primary" class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php
        if ( function_exists( 'wp_nav_menu' ) ) {
            $primaryNav = wp_nav_menu( array(   'theme_location' => 'primary',
                                                'container_id' => 'primary-menu',
                                                'container_class' => 'collapse navbar-collapse',
                                                'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' ) );
            
        }
        ?>
      </div><!-- /.container-fluid -->
    </nav>
    </header><!-- header role="banner" -->
