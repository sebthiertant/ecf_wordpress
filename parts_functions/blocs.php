<?php function seb_register_acf_block_types() {

acf_register_block_type( array(
    'name'              => 'porfotlio project',
    'title'             => 'project',
    'description'       => 'Un projet dans le portfolio',
    'render_template'   => 'blocks/porfotlio.php',
    'icon'              => 'admin-plugins', 
    'enqueue_assets'    => function() {
        wp_enqueue_style( 'blocs_style', get_template_directory_uri().'/blocs.css' );
    }
) );
}

add_action( 'acf/init', 'seb_register_acf_block_types' );