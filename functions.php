<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'aphelion-stylesheet' ) );
    wp_enqueue_style( 'child-frontend-style', get_stylesheet_directory_uri() . '/assets/css/frontend.min.css', array( 'aphelion-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function aphelion_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'aphelion', $lang );
}
add_action( 'after_setup_theme', 'aphelion_lang_setup' );