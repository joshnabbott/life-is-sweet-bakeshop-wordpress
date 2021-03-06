<!DOCTYPE html>
<html <?php language_attributes( 'html' ) ?>>
<head>
  <title><?php wp_title(); ?></title>
  <!-- Basic Meta Data -->
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="description" content="Life is Sweet Bake Shop is a vegan bakeshop" />
  <meta name="keywords" content="vegan, bakery, bakeshop, bake shop, natural" />
  <meta name="Robots" content="index, follow" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- WordPress -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/ie7.css" /><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/ie8.css" /><![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="header">
    <div class="wrap">
      <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></h1>

      <div id="main-navigation">
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary-nav',
            'container'       => 'nav',
            'container_class' => '',
            'menu_class'      => 'dd-menu'
          ));
        ?>
      </div><!-- end main-navigation-->
    </div><!-- end wrap -->
  </div><!-- end header -->
