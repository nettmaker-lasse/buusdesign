<?php 

// Gutenberg theme support
/**
 * Register support for Gutenberg wide images in your theme
 */
function gutenberg_theme_setup() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'gutenberg_theme_setup' );



// Add Favicon with WordPress Hook 

add_action( 'wp_head', 'add_favicon');
function add_favicon(){
    echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/dist/images/fav-icon-neon.svg' />" . "\n";
}