<?php  get_header('single');?>
<div id="container">
  <div id="content">
    <?php get_template_part('page-nav'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="box fix">
      <?php get_template_part ('left-meta'); ?>
      <div class="text round-corner fix">
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div>
            <div class="post-title fix">
              <h1>
                <?php the_title(); ?>
              </h1>
            </div>
            <div class="fix"><span class="meta-info">
              <?php _e('in','MetroWP');?>
              <?php the_category(', ') ?>
              ,
              <?php _e('by','MetroWP');?>
              <?php the_author(); ?>
              </span></div>
          </div>
          <div class="post-content fix">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'MetroWP' ), 'after' => '</div>' ) ); ?>
            <footer class="tags fix">
              <?php the_tags(__('Tagged with: ', 'MetroWP'),' &bull; ',''); ?>
              &nbsp; </footer>
            <!--/tag--> 
          </div>
          <!--/post-content--> 
        </div>
        <!--/post-->
        <?php get_template_part ('post_footer'); ?>
        <?php comments_template(); ?>
      </div>
      <!--/text -->
      <?php endwhile; endif; ?>
    </div>
    <div class="clear"></div>
    <?php get_template_part('page-nav'); ?>
  </div>
  <!--/content -->
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
  <!-- sidebar--> 
</div>
<!--/container -->
<?php	get_footer(); ?>
