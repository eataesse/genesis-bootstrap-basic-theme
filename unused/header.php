<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Genesis Basic
 * @author Richard de Jong
 * @since Genesis Basic 1.0
 */
?>
<!DOCTYPE html><!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;
 
wp_title( '|', true, 'right' );
 
// Add the blog name.
bloginfo( 'name' );
 
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
 
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'genesisbasic' ), max( $paged, $page ) );
 
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <hgroup></hgroup>
        <nav role="navigation" class="site-navigation main-navigation navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <?php
                    //wp_nav_menu( array( 'theme_location' => 'secondary' ));
                    ?>
                    <aside class="widget-area header-widget-area">
                        <?php
                        //dynamic_sidebar('header-right');
                        ?>
                    </aside>
                
                    <?php 
                    $header_image = get_header_image();
                        if ( ! empty( $header_image ) ) { ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"class="navbar-brand">
                                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                            </a>
                    <?php 
                    } else { ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"class="navbar-brand">
                                <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>  
                            </a>
                    <?php
                    } // if ( ! empty( $header_image ) )
                    ?>
                
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <?php 
                 
                 wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'top-bar',
                            'depth'             => 0,
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'walker'            => new BootstrapNavMenuWalker() )
                 );?>
                 </div>
            </div>
        </nav><!-- .site-navigation .main-navigation -->
    </header><!-- #masthead .site-header -->
    <div class="container-fluid">
        <div class="container">