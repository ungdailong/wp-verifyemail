<?php if(function_exists('wp_pagenavi')):wp_pagenavi();
elseif ($wp_query->max_num_pages > 1) :?>
	<div class="page-nav fix">
		<span class="previous-entries"><?php next_posts_link(__('Previous Entries', 'MetroWP')) ?></span>
		<span class="next-entries"><?php previous_posts_link(__('Next Entries', 'MetroWP')) ?></span>
	</div><!-- page nav -->
<?php endif;?>