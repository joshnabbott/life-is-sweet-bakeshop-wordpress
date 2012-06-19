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
      <h1 class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="122" height="101" title="Life is Sweet Bake Shop" alt="Life is Sweet Bake Shop" />
        </a>
      </h1>

      <a href="reservation.html" title="Book A Table" class="book-a-table">Get in touch</a>

      <div id="main-navigation">
        <ul class="dd-menu">
          <li class="current-menu-item">
            <a title="" href="home.html">Home</a>
          </li>
          <li>
            <a title="" href="page-styles.html" class="dd-submenu-title">Features<span class="dd-arrow"></span></a>
            <ul>
              <li class="arrow"></li>
              <li><a title="" href="about.html">About</a></li>
              <li><a title="" href="about-full.html">About Full</a></li>
              <li><a title="" href="price-page.html">Price Page</a></li>
              <li><a title="" href="reservation.html">Reservation Page</a></li>
              <li><a title="" href="page-styles.html">Page Styles</a></li>
              <li><a title="" href="columns.html">Columns</a></li>
              <li><a title="" href="page404.html">404 Page</a></li>
            </ul>
          </li>
          <li>
            <a title="" href="portfolio-medium-list.html" class="dd-submenu-title">Menu<span class="dd-arrow"></span></a>
            <ul>
              <li class="arrow"></li>
              <li><a title="" href="portfolio-2col.html">Two Columns</a></li>
              <li><a title="" href="portfolio-3col.html">Three Columns</a></li>
              <li><a title="" href="portfolio-4col.html">Four Columns</a></li>
              <li><a title="" href="portfolio-small-list.html">Small List</a></li>
              <li><a title="" href="portfolio-medium-list.html">Medium List</a></li>
              <li><a title="" href="portfolio-big-list.html">Big List</a></li>
            </ul>
          </li>
          <li>
            <a title="" href="about-full.html" >Special Offers</a>
          </li>
          <li>
            <a title="" href="review.html" >Review</a>
          </li>
          <li>
            <a title="" href="events.html" >Events</a>
          </li>
          <li>
            <a title="" href="blog-posts.html" class="dd-submenu-title">Blog</a>
            <ul>
              <li class="arrow"></li>
              <li><a title="" href="blog-posts.html">Blog Posts</a></li>
              <li><a title="" href="single-post.html">Single Post</a></li>
            </ul>
          </li>
          <li>
            <a title="" href="contact.html" >Contact</a>
          </li>
        </ul><!-- end dd-menu -->
      </div><!-- end main-navigation-->
    </div><!-- end wrap -->
  </div><!-- end header -->
