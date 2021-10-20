<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_post_type_support( 'page', 'excerpt' );

function register_assets(){
    wp_enqueue_script(
		'script-top',
		get_template_directory_uri().'/assets/scripts/top.js',
		 array(),
		'1.0'); 
        
    wp_enqueue_script(
		'script-menu',
		get_template_directory_uri().'/assets/scripts/dropdown.js',
		 array(),
		'1.0');
   
   

    wp_enqueue_style(
        'content-css',
        get_template_directory_uri().'/assets/css/main.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'header-css',
        get_template_directory_uri().'/assets/css/header.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'navbar-css',
        get_template_directory_uri().'/assets/css/navbar.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'footer-css',
        get_template_directory_uri().'/assets/css/footer.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'slider-css',
        get_template_directory_uri().'/assets/css/slider.css',
        array(),
        '1.0'
    );
    
    wp_enqueue_style(
        'cmtp-css',
        get_template_directory_uri().'/assets/css/cmtp.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'form-css',
        get_template_directory_uri().'/assets/css/form.css',
        array(),
        '1.0'
    );
    if (is_front_page()) {
        wp_enqueue_style( //fonctions pour charger un feuille de style css personalisé sur une page en particulier avec la fonction if(is_front_page)
            'front-page-css',
            get_template_directory_uri() . '/assets/css/front-page.css',
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
            get_template_directory_uri() . '/assets/css/page.css',
            array(),
            '1.0'
        );
        }



    if (is_post_type_archive('catalogue')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/css/catalogue.css',
            array(),
            '1.0'
        );
    }
    if (is_post_type_archive('activites_CMTP')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/css/page.css',
            array(),
            '1.0'
        );
    }
    if (is_singular('catalogue')){
        wp_enqueue_style(
            'catalogue',
            get_template_directory_uri() .'/assets/css/produits.css',
            array(),
            '1.0'
        );
    }
    if (is_singular('activites_CMTP')){
        wp_enqueue_style(
            'cmtp-css',
            get_template_directory_uri() .'/assets/css/page.css',
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
            'has_archive' => true,
            'supports' => array( 'title', 'excerpt','editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-category',
        );
    
        register_post_type( 'catalogue', $args );
          // CPT Réalisations
          $labels = array(
            'name' => 'réalisation',
            'all_items' => 'Toutes les réalisations',  // affiché dans le sous menu
            'singular_name' => 'Réalisation',
            'add_new_item' => 'Ajouter une réalisation',
            'edit_item' => 'Modifier les réalisations',
            'menu_name' => 'Réalisations'
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-portfolio',
        );
    
        register_post_type( 'réalisation', $args );
          // CPT Showroom
          $labels = array(
            'name' => 'showroom',
            'all_items' => 'Tout le showroom',  // affiché dans le sous menu
            'singular_name' => 'Showroom',
            'add_new_item' => 'Ajouter une image',
            'edit_item' => 'Modifier les images',
            'menu_name' => 'Showroom'
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-format-gallery',
        );
    
        register_post_type( 'showroom', $args );

                // CPT horaires
     $labels = array(
        'name' => 'horaires',
        'singular_name' => 'horaire',
        'add_new_item' => 'Ajouter un horaires',
        'edit_item' => 'Modifier l\'horaires',
        'menu_name' => 'horaires'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-clock',
    );

    register_post_type('horaires', $args);

             // CPT adresse
     $labels = array(
        'name' => 'adresse',
        'singular_name' => 'adresse',
        'add_new_item' => 'Ajouter une adresse',
        'edit_item' => 'Modifier l\'adresse',
        'menu_name' => 'adresse'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-admin-home',
    );

    register_post_type('adresse', $args);

             // CPT CMTP
     $labels = array(
        'name' => 'CMTP',
        'singular_name' => 'CMTP',
        'add_new_item' => 'Ajouter une activité',
        'edit_item' => 'Modifier les activité',
        'menu_name' => 'CMTP'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-car',
    );

    register_post_type('activites_CMTP', $args);
}
    

add_action( 'init', 'espritSud_register_post_types' );

    
/**
 * Just adds a column without content
 *
 * @param array $columns Array of all the current columns IDs and titles
 */
function espritSud_add_column( $columns ){
	$columns['espritSud_post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'espritSud_add_column', 5);
//add_filter('manage_pages_columns', 'espritSud_add_column', 5); // for Pages


/**
 * Fills the column content
 *
 * @param string $column ID of the column
 * @param integer $id Post ID
 */
function espritSud_column_content( $column, $id ){
	if( $column === 'espritSud_post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'espritSud_column_content', 5, 2);
//add_action('manage_pages_custom_column', 'espritSud_column_content', 5, 2); // for Pages
      




