<?php 

function starting_theme_functions() {
  
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menu('nav_menu','Main navigation menu');
    register_nav_menu('footer_menu','Footer navigation');
    register_nav_menu('social_menu', 'Social networks menu');
}



function register_post_types() {
    // Custom Post Type : Portfolio 
    
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Portfolio',  
        'singular_name' => 'Portfolio',
        'add_new_item' => 'Ajouter une réalisation',
        'edit_item' => "Modifier une réalisation",
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'excerpt', 'ID'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-cover-image',
	);

	register_post_type( 'portfolio', $args );

// TAXONOMIE

// Taxonomy technology

    $labels = array(
        'name' => "Technologie",
        'new_item_name' => 'Nouvelle technologie',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, );
    
        register_taxonomy( 'technologie', 'portfolio', $args );

// Taxonomy skills

        $labels = array(
            'name' => "Compétences",
            'new_item_name' => 'Nouvelle Compétences',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, );
        
            register_taxonomy( 'competence', 'portfolio', $args );
}



function sebtheme_hook_launch() {


    wp_enqueue_script(' jquery ', null, true);

    wp_enqueue_script('app', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/form-validation.js', array('jquery'), null, true);

    wp_enqueue_style('base', get_template_directory_uri().'/css/base.css'); 
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', ['base']);

}



add_action( 'after_setup_theme', 'starting_theme_functions' );
add_action( 'after_setup_theme', 'register_post_types' );
add_action( 'wp_enqueue_scripts', 'sebtheme_hook_launch' );




if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Administration');	
}



