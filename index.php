<?php
/**
 * Index page.
 *
 * @package Metaspexet
 */

get_header(); ?>

<div id="content" class="content">
<?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

    <div class="<?php echo get_post_type(); ?>_container">
                <div class="<?php echo get_post_type(); ?>_top"></div>
                <article <?php post_class() ?> id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>">
<!--                        <div class="<?php echo get_post_type(); ?>-date">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to' , 'metaspexet' ) ?> <?php the_title_attribute(); ?>">
                                <span class="post-month"><?php the_time('M'); ?></span>
                                <span class="post-day"><?php the_time('j'); ?></span>
                                <span class="post-year"><?php the_time('Y'); ?></span>
                                </a>
                        </div>-->
                        <?php if ( has_post_thumbnail() ) {
                                echo "<div class='post-thumbnail'>";
                                        echo "<a href=\"" . get_permalink() . "\">";
                                        the_post_thumbnail();
                                        echo "</a>";
                                echo "</div>";
                        } ?>
                        <h1 class="page_title">
<!--                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to' , 'metaspexet' ) ?> <?php the_title_attribute(); ?>">-->
                                    <?php the_title(); ?>
<!--                                </a>-->
                        </h1>
<!--                        <small><?php _e( 'by' , 'metaspexet' ); ?> <?php the_author() ?></small>-->
                        <div class="entry">
                                <?php the_content( __( 'Read the rest of this entry' , 'metaspexet' ) . ' &raquo;'); ?>
                                <?php wp_link_pages(array('before' => '<p class="clear">' . __( 'Pages:' , 'metaspexet' ) . ' ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<!--                                <p class="postmetadata clear">
                                        <?php _e( 'Categories:' , 'metaspexet' ) ?> <?php the_category(', ') ?> |
                                        <?php comments_popup_link( __( 'No Comments' , 'metaspexet' ) . ' &#187;', '1 ' . __( 'Comment' , 'metaspexet' ) . ' &#187;', '% ' . __( 'Comments' , 'metaspexet' ) . ' &#187;'); ?>
                                </p>-->

                        </div>
                </article>
                <div class="<?php echo get_post_type(); ?>_bottom"></div>
    </div>

                <?php endwhile; ?>

<?php else : ?>

        <h2 class="page_title"><?php _e( 'Not Found' , 'metaspexet' ) ?></h2>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'metaspexet' ) ?></p>
        <?php get_search_form(); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>
