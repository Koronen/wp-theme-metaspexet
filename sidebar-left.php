<?php
/**
 * Left Sidebar Page
 *
 * @package MetaSpexet
 * @subpackage MetaSpexet
 */
?>
<ul id="widget-area-left" class="widget-area">
    <li id="magazines" class="widget-container widget_text">
        <div class="textwidget">
            <nav>
                <ul id="nav_ul">
                    <li>
                        <a id="aktuellt" href="/aktuellt/" title="Aktuellt"></a>
                    </li>
                    <li>
                        <a id="tack_till" href="/tack_till/" title="Tack Till"></a>
                    </li>
                    <li>
                        <a id="om_oss" href="/om_oss/" title="Om Oss"></a>
                    </li>
                    <li>
                        <a id="spexet" href="/spexet/" title="Spexet"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </li>
    <?php if ( !dynamic_sidebar('left-widget-area') ) : // begin left widget area ?>
    <li id="archives" class="widget-container">
            <h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
            <ul>
                    <?php wp_get_archives( 'type=monthly' ); ?>
            </ul>
    </li>
    <?php endif; // end left widget area ?>
</ul>
