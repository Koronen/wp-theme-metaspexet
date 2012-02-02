<?php
/**
 * Right Sidebar Page
 *
 * @package MetaSpexet
 * @subpackage MetaSpexet
 */
?>
<ul id="widget-area-right" class="widget-area">
    <?php if ( !dynamic_sidebar('right-widget-area') ) : // begin right widget area ?>
        This is the right sidebar... Should be widgets here!
    <?php endif; // end right widget area ?>
</ul>