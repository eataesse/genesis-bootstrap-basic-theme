<?php
/* Modify the Bootstrap Classes being applied
 * based on the Genesis template chosen
 */
// modify bootstrap classes based on genesis_site_layout
add_filter('bsg-classes-to-add', 'gb_modify_classes_based_on_template', 10, 3);

function gb_layout_options_modify_classes_to_add( $classes_to_add ) {
    
    $layout = genesis_site_layout();
    
    // content-sidebar          // default
    if ( 'content-sidebar' === $layout ) {
    	$classes_to_add['content'] .= ' col-sm-9';
    	$classes_to_add['sidebar-primary'] .= ' col-sm-3';
    }
    
    // sidebar-content
    if ( 'sidebar-content' === $layout ) {
    	$classes_to_add['content'] .= ' col-sm-9 col-sm-push-3';
    	$classes_to_add['sidebar-primary'] .= ' col-sm-3 col-sm-pull-9';
    }
    
    // content-sidebar-sidebar
     if ( 'content-sidebar-sidebar' === $layout ) {
    	$classes_to_add['content'] .= ' col-sm-7';
    	$classes_to_add['sidebar-primary'] .= ' col-sm-3';
    	$classes_to_add['sidebar-secondary'] .= ' col-sm-2';
    }
    
    // sidebar-sidebar-content  // not yet supported
     if ( 'sidebar-sidebar-content' === $layout ) {
    	$classes_to_add['content'] .= ' col-sm-7 col-sm-push-5';
    	$classes_to_add['sidebar-primary'] .= ' col-sm-3 col-sm-pull-5';
    	$classes_to_add['sidebar-secondary'] .= ' col-sm-2 col-sm-pull-10';
    }
    
    // sidebar-content-sidebar
     if ( 'sidebar-content-sidebar' === $layout ) {
    	$classes_to_add['content'] .= ' col-sm-7 col-sm-push-2';
    	$classes_to_add['sidebar-primary'] .= ' col-sm-3 col-sm-push-2';
    	$classes_to_add['sidebar-secondary'] .= ' col-sm-2 col-sm-pull-10';
    }
    
    // full-width-content       // supported
    if('full-width-content' === $layout){
        $classes_to_add['content'] .= ' col-lg-12';
    }
    return $classes_to_add;
}

function gb_modify_classes_based_on_template( $classes_to_add, $context, $attr ) {
    $classes_to_add = gb_layout_options_modify_classes_to_add( $classes_to_add );
    return $classes_to_add;
}


?>