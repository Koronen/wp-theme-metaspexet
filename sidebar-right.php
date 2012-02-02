<?php
/**
 * Right Sidebar Page
 *
 * @package MetaSpexet
 * @subpackage MetaSpexet
 */
?>
<ul id="widget-area-right" class="widget-area">
    <li id="biljetter" class="widget-container widget_text">
        <div class="textwidget">
            <nav>
                <ul id="biljetter_ul">
                    <li>
                        <a id="kop_biljetter" href="/kop_biljetter/" title="Köp Biljetter"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </li>
    <li id="tv_books" class="widget-container widget_text">
        <div class="textwidget">
            <img src="<?php bloginfo('template_directory'); ?>/img/tv_bocker.png" alt="Tv och Böcker" title="Tv och Böcker" />
        </div>
    </li>
    <li id="poster" class="widget-container widget_text">
        <div class="textwidget">
            <img src="<?php bloginfo('template_directory'); ?>/img/poster.png" alt="Se så det gnistrar" title="Se så det gnistrar" />
        </div>
    </li>
    <?php if ( !dynamic_sidebar('right-widget-area') ) : // begin right widget area ?>
    <?php endif; // end right widget area ?>
</ul>