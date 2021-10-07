<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

function register_assets(){
    wp_enqueue_style(
        'content-css',
        get_template_directory_uri().'/assets/styles/main.css',
        array(),
        '1.0'
    );



}
add_action('wp_enqueue_scripts', 'register_assets');