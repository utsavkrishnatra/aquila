<?php

/**
 * 
 *Theme Functions.
 * 
 * @package Aquila
 */
// Enqueue theme stylesheet
// function my_theme_enqueue_styles() {
//     wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


if(!defined('AQUILA_DIR_PATH'))
{
    define('AQUILA_DIR_PATH',untrailingslashit(get_template_directory()));
     
}

if(!defined('AQUILA_DIR_URI'))
{
    define('AQUILA_DIR_URI',untrailingslashit(get_template_directory_uri()));
     
}



// echo AQUILA_DIR_PATH;

require_once AQUILA_DIR_PATH.'/inc/helpers/autoloader.php';


// use \AQUILA_THEME\Inc\AQUILA_THEME;
// new AQUILA_THEME();
// echo "I am here";
function get_aquila_instance_theme()
{
    
     
    \AQUILA_THEME\Inc\AQUILA_THEME::getInstance();
}



get_aquila_instance_theme();

// wp-content/themes/aquila/functions.php



?>
