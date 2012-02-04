<?php
/**
 * Left Sidebar Page
 *
 * @package MetaSpexet
 */
?>
<ul id="widget-area-left" class="widget-area">
    <li id="magazines" class="widget-container widget_text">
        <div class="textwidget">
            <nav>
                <ul id="nav_ul">
                    <li>
                        <a id="aktuellt" href="/" title="Aktuellt"></a>
                    </li>
                    <li>
                        <a id="tack_till" href="#" title="Tack Till"></a>
                    </li>
                    <li>
                        <a id="om_oss" href="#" title="Om Oss"></a>
                    </li>
                    <li>
                        <a id="spexet" href="#" title="Spexet"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </li>
    <li id="latest_news" class="widget-container widget_text">
        <div class="textwidget">
            <ul id="latest_news_list">
                <?php
                global $post;
                $args = array( 'numberposts' => 5 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :	setup_postdata($post); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </li>
</ul>
