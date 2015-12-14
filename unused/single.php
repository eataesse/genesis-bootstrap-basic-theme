<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Genesis Basic
 * @since Genesis Basic 1.0
 */
 
$body_classes = get_body_class();

if(in_array('content-sidebar', $body_classes)) {
    require('layouts/content-sidebar--header.php');
    genesisbasic_single_comment();
    require('layouts/content-sidebar--footer.php');
} elseif(in_array('content-sidebar-sidebar', $body_classes)) {
    require('layouts/content-sidebar-sidebar--header.php');
    genesisbasic_single_comment();
    require('layouts/content-sidebar-sidebar--footer.php');
} elseif(in_array('full-width-content', $body_classes)) {
    require('layouts/full-width-content--header.php');
    genesisbasic_single_comment();
    require('layouts/full-width-content--footer.php');
} elseif(in_array('sidebar-content', $body_classes)) {
    require('layouts/sidebar-content--header.php');
    genesisbasic_single_comment();
    require('layouts/sidebar-content--footer.php');
} elseif(in_array('sidebar-content-sidebar', $body_classes)) {
    require('layouts/sidebar-content-sidebar--header.php');
    genesisbasic_single_comment();
    require('layouts/sidebar-content-sidebar--footer.php');
} elseif(in_array('sidebar-sidebar-content', $body_classes)) {
    require('layouts/sidebar-sidebar-content--header.php');
    genesisbasic_single_comment();
    require('layouts/sidebar-sidebar-content--footer.php');
} else {
    require('layouts/content-sidebar--header.php');
    genesisbasic_page_comment();
    require('layouts/content-sidebar--footer.php');
}

exit;