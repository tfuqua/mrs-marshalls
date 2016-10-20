<?php
function mrsmarshalls_enqueue_styles() {

    $parent_style = 'parent-style'; // This is for general Ukrops theme styling

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );

    wp_enqueue_style( 'google-font-kalam', 'https://fonts.googleapis.com/css?family=Kalam', false);
  	wp_enqueue_style( 'ukrops-style', get_stylesheet_directory_uri() . '/style.min.css');
}

add_action( 'wp_enqueue_scripts', 'mrsmarshalls_enqueue_styles' );

?>
