<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>
<div class="heading_wrapper">
  <div class="heading_container">
    <div class="page-heading">
      <h1>
        <?php the_title(); ?>
        &nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png"  alt="arrow"/></h1>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="page-content">
  <div class="grid_16 alpha">
    <div class="content-bar sample">
      <!--post start-->
      <?php if (have_posts()) :  the_post(); ?>
      <?php the_content(); ?>
	  <div class="clear"></div>
	  <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'infoway' ) . '</span>', 'after' => '</div>' ) ); ?>
      <?php endif; ?>
      <!--End Post-->
    </div>
	<!--Start Comment box-->
	<?php comments_template(); ?>
	<!--End Comment box-->
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
