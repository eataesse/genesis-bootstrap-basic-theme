<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

/** 
 * 
 * Add HTML5 markup structure
 * 
 **/
add_theme_support( 'html5' );


/** 
 * 
 * Add support for structural wraps
 * 
 **/
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'subnav',
	'inner',
	'footer-widgets',
	'footer',
) );


/** 
 * 
 * Add viewport meta tag for mobile browsers
 * 
 **/
add_theme_support( 'genesis-responsive-viewport' );


/** 
 * 
 * Add support for custom background
 * 
 **/
add_theme_support( 'custom-background' );


/**
 *
 * Add new accessibility feats
 *
 **/
add_theme_support( 'genesis-accessibility', array( 
    //'headings', 
    //'drop-down-menu', 
    //'search-form', 
    //'skip-links', 
    //'rems' 
) );

/** 
 *
 * Add support for custom header 
 *
 **/
add_theme_support( 'genesis-custom-header', array( 'width' => 116, 'height' => 116 ) );

/** 
 * 
 * Add support for 3-column footer widgets
 * 
 **/
add_theme_support( 'genesis-footer-widgets', 3 );


/**
 * 
 * Add default posts and comments RSS feed links to head
 * 
 */
add_theme_support( 'automatic-feed-links' );


/**
 * 
 * Enable support for the Aside Post Format
 * 
 */
add_theme_support( 'post-formats', array( 'aside' ) );




/**
 * 
 * Add Genesis theme color scheme selection theme option
 *
 * @since 2.0.11
 */
add_theme_support( 'genesis-style-selector', array( 
	'epik-black' 		=>	__( 'Black', 'epik' ),	
	'epik-blue' 		=>	__( 'Blue', 'epik' ),
	'epik-darkblue'		=>	__( 'Dark Blue', 'epik' ),
	'epik-gray' 		=> 	__( 'Gray', 'epik' ),	
	'epik-green' 		=> 	__( 'Green', 'epik' ),
	'epik-orange' 		=> 	__( 'Orange', 'epik' ), 
	'epik-pink' 		=> 	__( 'Pink', 'epik' ),
	'epik-purple' 		=> 	__( 'Purple', 'epik' ), 
	'epik-red' 			=> 	__( 'Red', 'epik' ),	 
) );


/**
 * Declare WooCommerce support, using Genesis Connect for WooCommerce
 *
 * See: http://wordpress.org/plugins/genesis-connect-woocommerce/
 *
 * @since 2.0.6
 */
add_theme_support( 'genesis-connect-woocommerce' );


/** 
 * 
 * Move secondary nav menu 
 * 
 */
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );


/** 
 * 
 * Unregister the standard primary navigation menu
 * 
 */
//unregister_nav_menu( 'primary' );


//register_nav_menu('top-bar', __('Primary Navigation Menu'));


/** 
 * 
 * Remove default sidebar 
 * 
 */
//remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );


/** 
 * 
 * Remove secondary sidebar 
 * 
 */
//unregister_sidebar( 'header-right' );
//unregister_sidebar( 'sidebar' );
//unregister_sidebar( 'sidebar-alt' );

/**
 * 
 * Unregister content/sidebar layout setting
 * 
 */
//genesis_unregister_layout( 'content-sidebar' );

/**
 * 
 * Unregister sidebar/content layout setting
 * 
 */
//genesis_unregister_layout( 'sidebar-content' );

/**
 * 
 * Unregister content/sidebar/sidebar layout setting
 * 
 */
//genesis_unregister_layout( 'content-sidebar-sidebar' );

/**
 * 
 * Unregister sidebar/sidebar/content layout setting
 * 
 */
//genesis_unregister_layout( 'sidebar-sidebar-content' );

/**
 * 
 * Unregister sidebar/content/sidebar layout setting
 * 
 */
//genesis_unregister_layout( 'sidebar-content-sidebar' );

/**
 * 
 * Unregister full-width content layout setting
 * 
 */
//genesis_unregister_layout( 'full-width-content' );

/**
 * 
 * Remove Edit Link
 * 
 */
add_filter( 'edit_post_link', '__return_false' );

/**
 * 
 *  Remove the site title
 * 
 */
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );

/** 
 *
 * Remove the site description 
 * 
 */
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

/** 
 * 
 * Remove the header right widget area
 * 
 */
unregister_sidebar( 'header-right' );



?>