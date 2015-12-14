<?php

/**
 * 
 * 
 * 
 */
add_shortcode( 'footer_custombacktotop', 'set_footer_custombacktotop' );
function set_footer_custombacktotop($atts) {
    return '
            <a href="#" class="top">Return to top of page</a>
    ';
}

//* Add smooth scrolling for any link having the class of "top"
add_action('wp_footer', 'go_to_top');
 
function go_to_top() { ?>
    <script>
        jQuery(function($) {
            $('a.top').click(function() {
                $('html, body').animate({scrollTop:0}, 'slow');
            return false;
            });
        });
    </script>
<?php }

?>