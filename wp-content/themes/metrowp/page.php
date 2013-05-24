<?php get_header();?>
<div id="container">
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="box fix">
      <?php get_template_part ('left-meta'); ?>
      <div class="text fix">
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div id="post-title" class="fix">
            <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link to','MetroWP');?> <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a></h1>
          </div>
          <div class="fix"><span class="meta-info">
            <?php _e('in','MetroWP');?>
            <?php the_category(', ') ?>
            ,
            <?php _e('by','MetroWP');?>
            <?php the_author(); ?>
            </span></div>
          <div class="post-content fix">
            <?php the_content(); ?>
            <ul class="page-tree">
              <?php if(count($post->ancestors)>=2){
										        $reverse_ancestors = array_reverse($post->ancestors);
												$children = wp_list_pages("title_li=&depth=3&child_of=".$reverse_ancestors[0]."&echo=0&sort_column=menu_order");
									    }
										elseif($post->post_parent){ 
										        $children = wp_list_pages("title_li=&depth=3&child_of=".$post->post_parent."&echo=0&sort_column=menu_order");
										}
										else{	
										        $children = wp_list_pages("title_li=&depth=3&child_of=".$post->ID."&echo=0&sort_column=menu_order");
										}
                                        if ($children) { echo $children;}?>
            </ul>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'MetroWP' ), 'after' => '</div>' ) ); ?>
          </div>
          <!--/post-content-->
          <div class="tags fix">
            <?php the_tags(__('Tagged with: ', 'MetroWP'),' &bull; ',''); ?>
            &nbsp; </div>
          <!--/tag--> 
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
<?php	get_footer('single'); ?>
