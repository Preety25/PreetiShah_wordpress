<?php

function wbp_add_google_fonts(){

	wp_enqueue_style( 'wbp-google-fonts', 'https://fonts.googleapis.com/css?family=BioRhyme+Expanded', false);
}
	add_action( 'wp_enqueue_scripts', 'wbp_add_google_fonts');


function my_theme_enqueue_styles() {
	$parent_style = 'twentyseventeen-style';
	//This is the stylesheet for twentyseventeen-style for the Twenty Seventeen theme.
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style),
		wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');