<?php
/**
 * @from Twenty Ten 1.0
 */
?>
<div id="primary" class="widget-area" role="complementary">
  <?php
        if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
  <div id="archives" class="widget-container">
    <h3 class="widget-title">
      <?php _e( 'Archives', 'MetroWP' ); ?>
    </h3>
    <ul>
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ul>
  </div>
  <div id="meta" class="widget-container">
    <h3 class="widget-title">
      <?php _e( 'Meta', 'MetroWP' ); ?>
    </h3>
    <ul>
      <?php wp_register(); ?>
      <li>
        <?php wp_loginout(); ?>
      </li>
      <?php wp_meta(); ?>
    </ul>
  </div>
  <?php endif; // end primary widget area ?>
</div>
<!-- #primary .widget-area -->