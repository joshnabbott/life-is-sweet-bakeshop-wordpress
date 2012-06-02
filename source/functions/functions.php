<?php

add_action( 'wp_enqueue_scripts', 'life_is_sweet_enqueue_scripts' );

if ( ! function_exists( 'life_is_sweet_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function life_is_sweet_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'life_is_sweet-style',
			get_bloginfo( 'stylesheet_url' )
		);
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
