<div class="grid_6 alpha">
    <div class="footer_widget first">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('About Setting Footer', 'infoway'); ?></h4>
            <p>
                <?php _e('You can setup this footer area from the Widgets Section. Go to Appearance Widgets and drag and drop your required widget in footer.', 'infoway'); ?> </p>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget second">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h4><?php _e('Archives Widget', 'infoway'); ?></h4>
            <ul>
                <li><a href="#"><?php _e('January 2010', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('December 2009', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('November 2009', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('October 2009', 'infoway'); ?></a></li>
            </ul>
        <?php endif; ?>  
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget third">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Categories', 'infoway'); ?></h4>
            <ul >
                <li><a href="#"><?php _e('Entertainment', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('Technology', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('Template Design', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('Sports & Recreation', 'infoway'); ?></a></li>
                <li><a href="#"><?php _e('Jobs & Lifestyle', 'infoway'); ?></a></li>
            </ul>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6 omega">
    <div class="footer_widget last">
        <?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
            <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
        <?php else : ?>
            <h4>Search Site</h4>
            <form class="searchform" action="#" method="get">
                <input onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}"  value="Search" type="text" value="" name="s" id="s" />
                <input type="submit" value="" name="submit"/>
            </form>
        <?php endif; ?>
    </div>
</div>
