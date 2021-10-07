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

