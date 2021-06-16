
<?php function register_post_types() {
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

add_action( 'init', 'register_post_types' );

