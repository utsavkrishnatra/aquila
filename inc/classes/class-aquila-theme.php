<?php

namespace AQUILA_THEME\Inc;

// this will be loaded by the autoloader
use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME{

  use Singleton;

  public function __construct() {

    // load classes
    //wp_die("hello world");
    Menus::getInstance();
    $this->setup_hooks();

  }

  protected function setup_hooks() {
   // wp_die("Hello in setup!");
    add_action('wp_enqueue_scripts',[$this,'register_styles' ]);

    add_action('wp_enqueue_scripts',[$this,'register_scripts' ]);

    add_action('after_setup_theme',[$this,'setup_theme']);
   
 //actions and filters
  }

  public function register_styles(){
    // wp_die("Hello in style!");
    wp_register_style('bootstrap-css',AQUILA_DIR_URI.'/assets/src/library/css/bootstrap.min.css',[],false,'all');

  
    wp_enqueue_style('bootstrap-css');
    
  }

  public function register_scripts(){

    //wp_die("Hello in script!");
    wp_register_script('bootstrap-js',AQUILA_DIR_URI.'/assets/src/library/js/bootstrap.min.js',['jquery'],false,true);
    wp_enqueue_script('bootstrap-js');
  }
  
  public function setup_theme() {

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );


  }


}