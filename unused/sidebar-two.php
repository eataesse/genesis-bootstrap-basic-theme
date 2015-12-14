<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Shape
* @since Shape 1.0
*/
?>

<?php if ( is_active_sidebar( 'sidebar-alt' ) ) : ?>
    <div class="sidebar-two">
        <div id="tertiary" class="widget-area" role="supplementary">
            <?php dynamic_sidebar( 'sidebar-alt' ); ?>
        </div><!-- #tertiary .widget-area -->
    </div>
<?php endif; ?>