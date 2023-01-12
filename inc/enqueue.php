<?php

/**
 * Enqueue scripts and styles.
 */
function movies_theme_scripts() {
	wp_enqueue_style( 'movies_theme-style', get_stylesheet_uri(), array(), MOVIES_THEME_VERSION );
	wp_style_add_data( 'movies_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'movies_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), MOVIES_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_register_script( 'custom-javascript', get_template_directory_uri() . '/js/custom-javascript.js', array('jquery'), MOVIES_THEME_VERSION, true );
    wp_enqueue_script( 'custom-javascript' );
}
add_action( 'wp_enqueue_scripts', 'movies_theme_scripts' );

function register_bootstrap_styles_and_scripts() {
    wp_register_style( 'custom-style', get_template_directory_uri() . '/css/custom-style.css' );
    wp_enqueue_style( 'custom-style' );

    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), MOVIES_THEME_VERSION, true );
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'register_bootstrap_styles_and_scripts' );
