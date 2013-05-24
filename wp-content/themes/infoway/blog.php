<?php
/*
  Template Name: Blog Page
 */
?>
<?php get_header(); ?>

<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <?php
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts('showposts=' . $limit . '&paged=' . $paged);
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
            ?>
            <!--post start-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!--post start-->
                    <div class="post">
                        <div class="box">
                            <div class="postimgbox">
                                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php } else {
                                    
                                }
                                ?>
                            </div>
                            <ul class="post_meta">
                                <li class="post_date">&nbsp;&nbsp;<?php echo get_the_time('M, d, Y') ?></li>
                                <li class="post_comment">&nbsp;&nbsp;
                                <?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?>
                                </li>
                                <br />
                                <li class="posted_by">&nbsp;&nbsp;
                                <?php the_author_posts_link(); ?>
                                </li>
                                <br />
                                <li class="post_category">&nbsp;&nbsp;
                                <?php the_category(', '); ?>
                                </li>
                                <br />
                            </ul>
                        </div>
                        <div class="post_content">
                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                                </a></h1>
                    <?php the_excerpt(); ?>
                            <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Read More', 'infoway'); ?>&nbsp;<span class="button-tip"></span></a> </div>
                    </div>
                    <!--End Post-->
                <?php endwhile;
            else:
                ?>
                <div class="post">
                    <p>
                <?php _e('Sorry, no posts matched your criteria.', 'infoway'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <!--End Post-->

            <div class="clear"></div>
            <nav id="nav-single"> <span class="nav-previous">
                <?php next_posts_link(__('&larr; Older posts', 'infoway')); ?>
                </span> <span class="nav-next">
                <?php previous_posts_link(__('Newer posts &rarr;', 'infoway')); ?>
                </span> </nav> 
        </div>
    </div>
    <div class="grid_8 omega">
        <!--Start Sidebar-->
<?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>
