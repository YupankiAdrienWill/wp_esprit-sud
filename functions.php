<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

function register_assets(){
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
    if (is_front_page()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'front-page-css',
            get_template_directory_uri() . '/assets/styles/index.css',
            array(),
            '1.0'
        );
        }
    if (is_home()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'home-css',
            get_template_directory_uri() . '/assets/styles/catalogue.css',
            array(),
            '1.0'
        );
        }
    if (is_page()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'page-css',
            get_template_directory_uri() . '/assets/styles/page.css',
            array(),
            '1.0'
        );
        }
    if (is_post_type_archive('catalogue')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/styles/catalogue.css',
            array(),
            '1.0'
        );
    }

}
add_action('wp_enqueue_scripts', 'register_assets');

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
    'container' => 'ul', // afin d'éviter d'avoir une div autour 
    'menu_class' => 'navbar', // ma classe personnalisée 
) );





// register a new menu
register_nav_menu('main-menu', 'Main menu');





