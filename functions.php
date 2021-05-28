<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css' );
	wp_enqueue_style('templatemo-sixteen', get_template_directory_uri() . '/assets/css/templatemo-sixteen.css' );
	wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css' );
}

function scripts_theme(){	
	wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js' );
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js' );
	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js' );
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js' );
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js' );
	wp_enqueue_script('accordions', get_template_directory_uri() . '/assets/js/accordions.js' );
}