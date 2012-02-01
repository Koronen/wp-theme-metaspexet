<?php
/**
 * Left Sidebar Page
 *
 * @package MetaSpexet
 * @subpackage MetaSpexet
 */
?>

<?php if ( !dynamic_sidebar('primary-widget-area') ) : // begin left widget area ?>
<li id="archives" class="widget-container">
        <h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
        <ul>
                <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>
</li>
<?php endif; // end left widget area ?>
