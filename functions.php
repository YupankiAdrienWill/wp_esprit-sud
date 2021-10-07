<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

function register_assets(){
    wp_enqueue_script(
		'script-burger',
		get_template_directory_uri().'/assets/scripts/burger.js',
		 array(),
		'1.0');
/* 	wp_enqueue_script(
		'script-contact',
		get_template_directory_uri().'/assets/scripts/contact.js',
		 array(),
		'1.0');
	wp_enqueue_script(
		'script-dropdown',
		get_template_directory_uri().'/assets/scripts/dropdown.js',
		 array(),
		'1.0');
	wp_enqueue_script(
		'script-gallery',
		get_template_directory_uri().'/assets/scripts/gallery.js',
		 array(),
		'1.0');
	wp_enqueue_script(
		'script-slideshow',
		get_template_directory_uri().'/assets/scripts/slideshow.js',
		 array(),
		'1.0');
	wp_enqueue_script(
		'script-top',
		get_template_directory_uri().'/assets/scripts/top.js',
		 array(),
		'1.0'); */

    wp_enqueue_style(
        'content-css',
        get_template_directory_uri().'/assets/styles/main.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'header-css',
        get_template_directory_uri().'/assets/styles/header.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'footer-css',
        get_template_directory_uri().'/assets/styles/footer.css',
        array(),
        '1.0'
    );


}
add_action('wp_enqueue_scripts', 'register_assets');

add_theme_support( 'custom-header' );
function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '',
        // Display the header text along with the image
        'header-text'           => true,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'flex-width'    => true,
        'width'             => 1080,
        // Header image height (in pixels)
        'flex-height'   => true,
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}