<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package Genesis Basic
* @since Genesis Basic 1.0
*/
?>
 
    </div><!-- .container -->
</div><!-- .container-fluid -->
<!-- sub footer with 4 widget areas -->
<div class="container-fluid" id="footer-widgets">
    <div class="container">
        <div id="footer-1" class="col-lg-3 col-sm-12">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div id="footer-2" class="col-lg-3 col-sm-12">
            <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div id="footer-3" class="col-lg-3 col-sm-12">
            <?php dynamic_sidebar('footer-3'); ?>
        </div>
        <div id="footer-4" class="col-lg-3 col-sm-12">
            <?php dynamic_sidebar('footer-4'); ?>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="site-info">
            <?php do_action( 'genesisbasic_credits' ); ?>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>
 
</body>
</html>