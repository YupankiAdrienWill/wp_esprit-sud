<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_post_type_support( 'page', 'excerpt' );

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
    if (is_post_type_archive('plante')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/styles/catalogue.css',
            array(),
            '1.0'
        );
    }
    if (is_singular('plante')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/styles/catalogue.css',
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
    if (is_singular('catalogue')){
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


function espritSud_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    
	
        // CPT Plantes
        $labels = array(
            'name' => 'Plante',
            'all_items' => 'Toutes les plantes',  // affiché dans le sous menu
            'singular_name' => 'Plante',
            'add_new_item' => 'Ajouter une plante',
            'edit_item' => 'Modifier la plante',
            'menu_name' => 'Plantes'
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-palmtree',
        );
    
        register_post_type( 'plante', $args );
          // CPT Catalogue
          $labels = array(
            'name' => 'Catalogue',
            'all_items' => 'Tous le catalogue',  // affiché dans le sous menu
            'singular_name' => 'Catalogue',
            'add_new_item' => 'Ajouter un catalogue',
            'edit_item' => 'Modifier le catalogue',
            'menu_name' => 'Catalogue'
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-category',
        );
    
        register_post_type( 'catalogue', $args );
    
}
add_action( 'init', 'espritSud_register_post_types' );

    
	
      




