<?php
function wpbootstrap_enqueue_styles() {
	wp_enqueue_style( 'fontAwesome', '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css' );
	wp_enqueue_style(' bootstrap',  get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style(' mdb',  'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' );
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');