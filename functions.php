<?php
/**
 * Aphelion Lite Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aphelion_Lite
 */

/**
 * Enqueue scripts and styles.
 */
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-frontend-style', get_stylesheet_directory_uri() . '/assets/css/frontend.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 100 );

/**
 * Languages
 */
function aphelion_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'aphelion', $lang );
}
add_action( 'after_setup_theme', 'aphelion_lang_setup', 100 );

/**
 * Constants. See parent themes /inc/theme-constants.php file
 */
if ( ! defined( '_SHOW_TOP_HEADER' ) ) {
	define( '_SHOW_TOP_HEADER', true );
}