<?php
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-ui' );
      
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'wp_enqueue_scripts', 'gmdl_load_stylesheets' );
/**
 * Overrides the default Genesis stylesheet with child theme specific.
 *
 * Only load these styles on the front-end.
 *
 * @since 2.0.0
 */
function gmdl_load_stylesheets() {
    if( !is_admin() ) {
		// Main theme stylesheet
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6' );
        wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style( 'custom-bootstrap-contact-form-7', get_stylesheet_directory_uri() . '/custom-bootstrap-contact-form-7.css' );
        // Add google mdl font and icon font from google fonts
        wp_enqueue_style( 'prefix-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0' );
        
        wp_enqueue_script( 'bootstrap-jquery', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), '3.3.6' );
	}
}