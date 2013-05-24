<div class="left-meta">
  <div class="date2"><span class="social day2"><a  href="<?php the_permalink(); ?>">
    <?php the_time('j'); ?>
    </a></span>
    <div class="year2">
      <?php the_time('Y,M'); ?>
    </div>
  </div>
  <div class="post-footer fix">
    <div> <span>
      <?php comments_number(0, 1, '%'); ?>
      </span> <a href="<?php the_permalink(); ?>#comments" title="<?php _e('View Comments', 'MetroWP');?>">
      <?php _e('Comments','MetroWP');?>
      </a> </div>
    <div> <span> <a href="<?php the_permalink(); ?>#respond">
      <?php _e('Respond', 'MetroWP');?>
      </a> </span> </div>
  </div>
</div>
