<?php

/**
 * Register widgetized area
 *
 * @since Genesis Basic 1.0
 */
function genesisbasic_widgets_init() {
    
    register_sidebar( array(
        'id' => 'home-top',
        'name' => __( 'Home Top', 'genesisbasic' ),
        'description' => __( 'This is the top section of the Home page.', 'genesisbasic' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'id' => 'home-middle',
        'name' => __( 'Home Middle', 'genesisbasic' ),
        'description' => __( 'This is the top section of the Home page.', 'genesisbasic' ),
        'before_widget' => '<div class="container-fluid"><div class="container"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div></div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'id' => 'home-bottom',
        'name' => __( 'Home Bottom', 'genesisbasic' ),
        'description' => __( 'This is the bottom section of the Home page.', 'genesisbasic' ),
        'before_widget' => '<div class="container-fluid"><div class="container"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div></div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
}
add_action( 'widgets_init', 'genesisbasic_widgets_init' );

?>