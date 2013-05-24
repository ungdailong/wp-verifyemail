<div class="clear"></div>
<!--Start Footer-->
<div class="footer-wrapper">
    <div class="footer">
        <div class="container_24">
            <div class="grid_24">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>

            </div>
            <div class="clear"></div>
        </div>
        <div class="footersep"></div>
        <div class="clear"></div>
        <div class="footer-bottom-wrapper">
            <div class="footer-bottom">
                <div class="container_24">
                    <div class="grid_24">
                        <div class="copyrightinfo">
                            <div class="grid_12 alpha">
                            <p class="blogdes">  <span class="blog-desc">				
                                    <?php echo get_bloginfo('title'); ?>
                                    -
                                    <?php echo get_bloginfo('description'); ?>
                                </span></p>
                            </div>
                            <div class="grid_12 omega">
                            <?php if (infoway_get_option('infoway_footertext') != '') { ?>
                                <p class="copyright"><?php echo infoway_get_option('infoway_footertext'); ?> </p>
                            <?php } else { ?>
                                <p class="copyright"> <?php _e('<a href="http://www.inkthemes.com">Infoway Theme</a> powered by <a href="http://www.wordpress.org">WordPress</a>','infoway'); ?></p>
                            <?php } ?>
                                </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- container -->
<?php wp_footer(); ?>
</body>
</html>