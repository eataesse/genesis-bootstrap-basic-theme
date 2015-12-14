<?php
/**
 * This file adds the Home Page to the Outreach Pro Theme.
 *
 * @author StudioPress
 * @package Outreach Pro
 * @subpackage Customizations
 */

add_action( 'get_header', 'prefix_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function prefix_home_genesis_meta() {

    if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-middle' ) || is_active_sidebar( 'home-bottom' ) ) {
    
    	//* Force full-width-content layout setting
    	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
    	
    	//* Remove breadcrumbs
    	remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
    
    	//* Remove the default Genesis loop
    	remove_action( 'genesis_loop', 'genesis_do_loop' );
        
        //* Remove .site-inner
		add_filter( 'genesis_markup_site-inner', '__return_null' );
		add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
		add_filter( 'genesis_markup_content', '__return_null' );
    	
    	//* Add home widget areas
		add_action( 'genesis_after_header', 'prefix_home_widget_areas' );
    
    }

}

function prefix_home_widget_areas() {
    
    genesis_widget_area( 'home-top', array(
		'before' => '<div class="home-top home-widget-area widget-area">',
		'after'  => '</div>',
	) );
    
    genesis_widget_area( 'home-middle', array(
		'before' => '<div class="home-middle home-widget-area widget-area">',
		'after'  => '</div>',
	) );
    
    genesis_widget_area( 'home-bottom', array(
		'before' => '<div class="home-bottom home-widget-area widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

genesis();
