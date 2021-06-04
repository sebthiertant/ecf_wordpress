<?php

function sebtheme_hook_launch() {


    wp_enqueue_script(' jquery ', null, true);

    wp_enqueue_script('app', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/form-validation.js', array('jquery'), null, true);

    wp_enqueue_style('base', get_template_directory_uri().'/css/base.css'); 
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', ['base']);

}

add_action( 'wp_enqueue_scripts', 'sebtheme_hook_launch' );
