<?php get_header();?>

<div id="container">
  <div id="content">
    <div class="page-header">
      <h1>
        <?php wp_title(''); ?>
      </h1>
    </div>
    <div class="box fix">
      <div class="left-meta">
        <div class="left date2">
          <div class="social day2"><a href="#">404</a></div>
          <div class="year2">not found</div>
        </div>
      </div>
      <div class="text round-corner fix">
        <div class="post hentry">
          <h2 class="center">
            <?php _e('page not found here','MetroWP');?>
          </h2>
          <p>
            <?php _e('looking for something?just search it!', 'MetroWP');?>
          </p>
          <div class="center">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/content -->
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
  <!-- sidebar--> 
</div>
<!--/container -->
<?php	get_footer(); ?>
