<?php 

function starting_theme_functions() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menu('nav_menu','Main navigation menu',);
    register_nav_menu('footer_menu','Footer navigation',);
    register_nav_menu('social_menu', 'Social networks menu');

}

add_action( 'after_setup_theme', 'starting_theme_functions' );

require_once get_template_directory() . '/parts_functions/script.php' ; 
require_once get_template_directory() . '/parts_functions/custom_post_type_functions.php' ; 



if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Administration');	
}



// A SUPPRIMER AVANT MISE EN PROD -> SUPPRIME UNE ERREUR LIEE AU DEBUGGER

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

