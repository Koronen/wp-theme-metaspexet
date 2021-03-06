<?php
/**
 * Right Sidebar Page
 *
 * @package MetaSpexet
 */
?>
<ul id="widget-area-right" class="widget-area">
    <li id="biljetter" class="widget-container widget_text">
        <div class="textwidget">
            <nav>
                <ul id="biljetter_ul">
                    <li>
                        <a id="kop_biljetter" href="/biljett/" title="Köp Biljetter"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </li>
    <li id="tv_books" class="widget-container widget_text">
        <a id="facebook" href="https://www.facebook.com/metaspexet" target="_blank"></a>
        <div class="textwidget">
            <img src="<?php bloginfo('template_directory'); ?>/img/right_shelves.jpg" alt="Tv och Böcker" title="Tv och Böcker" />
        </div>
    </li>
    <li id="poster1" class="widget-container widget_text poster">
        <div class="textwidget">
            <img src="<?php bloginfo('template_directory'); ?>/img/right_poster1.jpg" alt="Se så det gnistrar" title="Se så det gnistrar" />
        </div>
    </li>
    <li id="poster2" class="widget-container widget_text poster">
        <div class="textwidget">
            <img src="<?php bloginfo('template_directory'); ?>/img/right_poster2.jpg" alt="O-oh-h DAD! ...It's a SCHWINN!" title="O-oh-h DAD! ...It's a SCHWINN!" />
        </div>
    </li>
    <?php if ( !dynamic_sidebar('right-widget-area') ) : // begin right widget area ?>
    <?php endif; // end right widget area ?>
</ul>
