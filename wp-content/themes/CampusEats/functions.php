<?php

// Change all instances of CampusEats to your theme name.
if ( ! function_exists( 'CampusEats_setup' ) ) :
 
   function CampusEats_setup() {

	 add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     // THEME SUPPOORT
	 add_theme_support('menus');

     // menus
     register_nav_menus(
		    [
			   'top-menu'=>'Top Menu',
			   'top-social-menu'=>'Top Social Menu',
			   'botttom-left-menu'=>'Bottom Left Menu',
			   'bottom-right-menu'=>'Bottom Right Menu',
		   ]
     );

   }
 
endif;
 
add_action('after_setup_theme', 'CampusEats_setup');

function loadCss(){
	wp_enqueue_style('theme_style', get_stylesheet_uri());
	wp_register_style('fonts','https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700,900&display=swap',['theme_style']);
    wp_register_style('myStyles',get_stylesheet_uri(),["fonts"]);
	wp_enqueue_style( "myStyles" );
}
add_action('wp_enqueue_scripts','loadCss');

function loadJs(){
	wp_register_script('fontawesome','https://kit.fontawesome.com/06a13ba95c.js');
	wp_register_script('myJs',get_template_directory_uri().'/js/main.js',[
		'fontawesome'
	]);
	wp_enqueue_script( "myJs" );
}
add_action('wp_enqueue_scripts','loadJs');
