<?php
/**
 * @package WordPress
 * @subpackage DFM-Strapit-Theme
 * @since Strapit 1.0
 */
get_header(); ?>

    <div class="row">
        <div class="container">
            <div class="col md-9" role="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article <?php post_class() ?> id="post-&lt;?php the_ID(); ?&gt;">
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-content">
                        <?php the_content(); ?><?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?><?php the_tags( __('Tags: '), ', ', ''); ?><?php posted_on(); ?>
                    </div><?php edit_post_link(__('Edit this entry'),'','.'); ?>
                </article><?php comments_template(); ?><?php endwhile; endif; ?><?php post_navigation(); ?>
            </div><!-- end col-md-9 -->

            <aside class="col md-3">
                <?php get_sidebar(); ?>
            </aside><!-- end col-md-3 -->
        </div><!-- end container -->
    </div>
    <?php get_footer(); ?>
