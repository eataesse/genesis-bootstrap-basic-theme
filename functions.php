<?php

/**
 * Theme Setup
 * @since 1.0.0
 *
 * This setup function attaches all of the site-wide functions
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */
 
add_action( 'genesis_setup','child_theme_setup', 15 );
function child_theme_setup() {

    /****************************************
	Define child theme version
	*****************************************/
	define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) ); 
      
    
    /****************************************
	Include Genesis base functions
	*****************************************/
	include_once( CHILD_DIR . '/lib/genesis.php' );
    
    
    /****************************************
	Include theme helper functions
	*****************************************/
	include_once( CHILD_DIR . '/lib/theme-helpers.php' );
    
    
    
	/****************************************
	Setup child theme functions
	*****************************************/
	include_once( CHILD_DIR . '/lib/theme-functions.php' );
	
    
    
    /****************************************
	Structure set up
	****************************************/
    
    
    // Structure (corresponds to Genesis's lib/structure)
    //include_once( CHILD_DIR . '/lib/structure/archive.php' );
    //include_once( CHILD_DIR . '/lib/structure/breadcrumbs.php' );
    //include_once( CHILD_DIR . '/lib/structure/footer.php' );
    //include_once( CHILD_DIR . '/lib/structure/gallery.php' );
    include_once( CHILD_DIR . '/lib/structure/head.php' );
    //include_once( CHILD_DIR . '/lib/structure/header.php' );
    //include_once( CHILD_DIR . '/lib/structure/loops.php' );
    //include_once( CHILD_DIR . '/lib/structure/menu.php' );
    include_once( CHILD_DIR . '/lib/structure/nav.php' );
    //include_once( CHILD_DIR . '/lib/structure/post.php' );
    //include_once( CHILD_DIR . '/lib/structure/scripts.php' );
    //include_once( CHILD_DIR . '/lib/structure/search.php' );
    //include_once( CHILD_DIR . '/lib/structure/sidebar.php' );
    include_once( CHILD_DIR . '/lib/structure/widgetize.php' );
    
    // Mdl modifications
    //include_once( CHILD_DIR . '/lib/mdl/archive.php' );
    //include_once( CHILD_DIR . '/lib/mdl/footer.php' );
    //include_once( CHILD_DIR . '/lib/mdl/header.php' );
    include_once( CHILD_DIR . '/lib/gb/bootstrap-markup.php' );
    include_once( CHILD_DIR . '/lib/gb/bootstrap-markup-layout-options.php' );
    include_once( CHILD_DIR . '/lib/gb/bootstrap-walker.php' );
    include_once( CHILD_DIR . '/lib/gb/sidebar-secondary-move-inside-content-sidebar-wrap.php' );
    include_once( CHILD_DIR . '/lib/gb/footer-back-to-top.php' );
    //include_once( CHILD_DIR . '/lib/mdl/menu.php' );
    //include_once( CHILD_DIR . '/lib/mdl/pagination.php' );
    //include_once( CHILD_DIR . '/lib/mdl/post.php' );
    //include_once( CHILD_DIR . '/lib/mdl/search.php' );
    
    //include_once( get_stylesheet_directory() . '/inc/template-tags.php' );
    //include_once( get_stylesheet_directory() . '/inc/tweaks.php' );
    ///include_once( get_stylesheet_directory() . '/inc/custom-header.php' );
    
    require_once( CHILD_DIR . '/lib/class-tgm-plugin-activation.php' );
    include_once( CHILD_DIR . '/lib/gb/tgmpa.php' );

    
    
}

add_action('after_setup_theme', 'gb_theme_setup');
function gb_theme_setup(){
    load_theme_textdomain( 'genesisbasic', get_template_directory() . '/languages' );
}


?>    