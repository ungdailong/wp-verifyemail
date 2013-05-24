<?php
/**
 * The Template for displaying all single posts.
 * 
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
  <div class="grid_16 alpha">
    <div class="content-bar">
      <!-- Start the Loop. -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!--post start-->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h1>          
           <ul class="post_meta">
              <li class="post_date"><span></span>&nbsp;&nbsp;
                <?php the_date('Y-m-d'); ?>
              </li>
              <li class="posted_by">&nbsp;&nbsp;<span><?php _e( 'By', 'infoway' ); ?></span>&nbsp;&nbsp;
                <?php the_author_posts_link(); ?>
              </li>
              <li class="post_category">&nbsp;&nbsp;<span><?php _e( 'Posted in', 'infoway' ); ?></span>&nbsp;&nbsp;
                <?php the_category(', '); ?>
              </li>
            </ul>
          
        <div class="post_content single">
          <div class="singleimgbox">
            <?php the_content(); ?>
           
          </div>
          <div class="clear"></div>
		  <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'infoway' ) . '</span>', 'after' => '</div>' ) ); ?>
          <?php if (has_tag()) { ?>
          <div class="tag">
            <?php the_tags('Post Tagged with ', ', ', ''); ?>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php endwhile;
else: ?>
      <div class="post">
        <p>
          <?php _e('Sorry, no posts matched your criteria.', 'infoway'); ?>
        </p>
      </div>
      <?php endif; ?>
      <!--End Loop-->
	  <nav id="nav-single"> <span class="nav-previous">
                            <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post ', 'local-business')); ?>
                        </span> <span class="nav-next">
                            <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'local-business')); ?>
                        </span> </nav>
      <!--Start Comment box-->
      <?php comments_template(); ?>
      <!--End Comment box-->
    </div>
  </div>
  <div class="grid_8 omega">
      <?php get_sidebar(); ?>
      <div class="clear"></div>
  </div>
</div>
</div>
</div>
<?php get_footer(); ?>
