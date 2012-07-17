<?php

add_action( 'wp_enqueue_scripts', 'life_is_sweet_enqueue_scripts' );
add_action( 'init', 'register_menus' );

function register_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' ),
      'footer-nav' => __( 'Footer Nav' )
    )
  );
}

if ( ! function_exists( 'life_is_sweet_enqueue_scripts' ) ) :

  /**
   * Add theme styles and scripts here
   */
  function life_is_sweet_enqueue_scripts() {

    if ( ! is_admin() ) {
      wp_enqueue_style('life_is_sweet-style', get_bloginfo( 'stylesheet_url' ));
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js");
      wp_enqueue_script('theme', get_template_directory_uri() . "/javascripts/theme.js");
    }

  }

endif; // life_is_sweet_enqueue_scripts

add_action( 'after_setup_theme', 'life_is_sweet_setup' );

if ( ! function_exists( 'life_is_sweet_setup' ) ) :

  /**
   * Set up your theme here
   */
  function life_is_sweet_setup() {
    add_theme_support( 'post-thumbnails' );
  }

endif; // life_is_sweet_setup

if(function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}
set_post_thumbnail_size(582, 262, true);
add_image_size('recent-post-thumbnail', 55, 55, true);

