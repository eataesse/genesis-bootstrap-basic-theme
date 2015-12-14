<?php

/**
 * add Bootstrap Classes
 */
// Main layouts - Genesis attr class related
//add_filter( 'genesis_attr_body',         'gmdl_off_canvas_body_class');
// modify genesis classes based on genesis_site_layout on material design lite
add_filter('gmdl-classes-to-add', 'gmdl_modify_classes_based_on_template', 10, 3);
//add_filter( 'genesis_register_sidebar_defaults', 'gmdl_widget_add_markup_class');
// Comments - section
add_filter( 'comment_form_defaults', 'gmdl_change_comments_button_class' );


function gmdl_add_markup_class( $attr, $context ) {
    // default classes to add
    $classes_to_add = apply_filters ('gmdl-classes-to-add',
        array(
                'content'   => ' content-area content-block ',
                'sidebar-primary'   => ' content-area content-block ',
                'sidebar-secondary'   => ' content-area content-block ',
        ),
        $context,
        $attr
    );
    // populate $classes_array based on $classes_to_add
    $value = isset( $classes_to_add[ $context ] ) ? $classes_to_add[ $context ] : array();
    if ( is_array( $value ) ) {
        $classes_array = $value;
    } else {
        $classes_array = explode( ' ', (string) $value );
    }
    // apply any filters to modify the class
    $classes_array = apply_filters( 'gmdl-add-class', $classes_array, $context, $attr );
    $classes_array = array_map( 'sanitize_html_class', $classes_array );
    // append the class(es) string (e.g. 'span9 custom-class1 custom-class2')
    $attr['class'] .= ' ' . implode( ' ', $classes_array );
    return $attr;
}

function gmdl_widget_add_markup_class($params){
    $params['before_widget'] = genesis_markup( array(
            'html5' => '<section id="%1$s" class="widget mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet  %2$s"><div class="widget-wrap">',
            'xhtml' => '<div id="%1$s" class="widget mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet  %2$s"><div class="widget-wrap">',
            'echo'  => false,
        ) );
    return $params;
}
function gmdl_change_comments_button_class( $arg ) {
    $arg['class_submit'] = 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast';
    // return the modified array
    return $arg;
}



add_filter('genesis_footer_widget_areas', 'genesis_footer_widget_areas_bootstrap', 10, 2);
function genesis_footer_widget_areas_bootstrap($output, $footer_widgets) {
	$classes = '';
	switch ($footer_widgets) {
		case 1: $classes .= 'col-lg-12'; //custom class - NOT bootstrap
		break;
		case 2: $classes .= 'col-lg-6';
		break;
		case 3: $classes .= 'col-lg-4';
		break;
		case 4: $classes .= 'col-lg-3';
		break;
	}
	//$output = str_replace('footer-widgets-1 widget-area', 'footer-widgets-1 widget-area first', $output);
	$output = str_replace('widget-area', 'widget-area '.$classes, $output);
	return $output;
}


remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
add_action(    'genesis_after_content',              'genesis_get_sidebar_alt' );


// add bootstrap classes
add_filter( 'genesis_attr_nav-primary',         'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_nav-secondary',       'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_site-header',         'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_site-inner',          'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_content-sidebar-wrap','bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_content',             'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_sidebar-primary',     'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_sidebar-secondary',   'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_archive-pagination',  'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_entry-content',       'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_entry-pagination',    'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_site-footer',         'bsg_add_markup_class', 10, 2 );
add_filter( 'genesis_attr_footer-widgets',      'bsg_add_markup_class', 10, 2 );

function bsg_add_markup_class( $attr, $context ) {
    // default classes to add
    $classes_to_add = apply_filters ('bsg-classes-to-add',
        // default bootstrap markup values
        array(
            'nav-primary'               => 'navbar navbar-default navbar-fixed-top navbar-dark bg-primary',
            'nav-secondary'             => 'navbar navbar-inverse navbar-static-top',
            'site-header'               => 'container-fluid',
            'site-inner'                => 'container-fluid',
            'site-footer'               => 'container-fluid',
            'content-sidebar-wrap'      => 'container',
            'content'                   => 'content-area content-block',
            'sidebar-primary'           => 'content-area content-block',
            'sidebar-secondary'         => 'content-area content-block',
            'archive-pagination'        => 'clearfix',
            'entry-content'             => 'clearfix',
            'entry-pagination'          => 'clearfix bsg-pagination-numeric',
            'footer-widgets'            => 'container-fluid',
        ),
        $context,
        $attr
    );
    // populate $classes_array based on $classes_to_add
    $value = isset( $classes_to_add[ $context ] ) ? $classes_to_add[ $context ] : array();
    if ( is_array( $value ) ) {
        $classes_array = $value;
    } else {
        $classes_array = explode( ' ', (string) $value );
    }
    // apply any filters to modify the class
    $classes_array = apply_filters( 'bsg-add-class', $classes_array, $context, $attr );
    $classes_array = array_map( 'sanitize_html_class', $classes_array );
    // append the class(es) string (e.g. 'span9 custom-class1 custom-class2')
    $attr['class'] .= ' ' . implode( ' ', $classes_array );
    return $attr;
}

?>