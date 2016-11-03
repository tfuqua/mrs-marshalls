<?php
function mrsmarshalls_enqueue_styles() {

    $parent_style = 'parent-style'; // This is for general Ukrops theme styling

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );

    wp_enqueue_style( 'google-font-kalam', 'https://fonts.googleapis.com/css?family=Kalam', false);
  	wp_enqueue_style( 'ukrops-style', get_stylesheet_directory_uri() . '/style.min.css');
}

add_action( 'wp_enqueue_scripts', 'mrsmarshalls_enqueue_styles' );

function my_remove_page_template( $pages_templates ) {

    unset( $pages_templates['templates/page-products.php'] );
    unset( $pages_templates['templates/page-product.php'] );

    return $pages_templates;
}
add_filter( 'theme_page_templates', 'my_remove_page_template' );


function my_gallery_style() {
    return "
";
}
add_filter( 'gallery_style', 'my_gallery_style', 99 );
add_filter( 'use_default_gallery_style', '__return_false' );

?>
