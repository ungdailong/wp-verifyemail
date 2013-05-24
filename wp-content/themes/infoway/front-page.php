<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  
<!--Start Slider Wrapper-->
<div class="slider_wrapper">
    <div id="featured">
        <!-- First Content -->
        <div id="fragment-1" class="ui-tabs-panel" style=""> 
            <?php if (infoway_get_option('infoway_slideimage1') != '') { ?>
                <a href="<?php echo infoway_get_option('infoway_slidelink1'); ?>" >
                    <img src="<?php echo infoway_get_option('infoway_slideimage1'); ?>"  alt="Slide 1"/>
                </a>
            <?php } else { ?>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt=""></a> 
            <?php } ?> 
        </div>
    </div>
    <div class="slider_shadow"></div>
    <div class="infotag"> 
        <?php if (infoway_get_option('infoway_main_heading') != '') { ?>
            <?php echo stripslashes(infoway_get_option('infoway_main_heading')); ?>
        <?php } else { ?>
            <p><?php _e('No Cost, Free To Use & With Single Click Installation. Use Infoway Now & Make beautiful Website &amp; Astonish Everyone.', 'infoway'); ?></p>
        <?php } ?>
    </div>
</div>
<!--End Slider wrapper-->
<div class="clear"></div>
<div class="contentbox">
    <div class="grid_16 alpha">
        <div class="feturebox">
            <div class="featurebox_inner">
                <!-- <div class="grid_5 alpha">-->
                <div class="featurebox_desc first">
                    <?php if (infoway_get_option('infoway_firsthead') != '') { ?>
                        <h2><a href="<?php echo infoway_get_option('infoway_link1'); ?>"><?php echo stripslashes(infoway_get_option('infoway_firsthead')); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="#"><?php _e('Easy to Customize', 'infoway'); ?></a></h2>
                    <?php } ?>
                    <?php if (infoway_get_option('infoway_firstdesc') != '') { ?>
                        <p><?php echo stripslashes(infoway_get_option('infoway_firstdesc')); ?></p>
                    <?php } else { ?>
                        <p><?php _e('An Infoway is a WordPress theme which is easily customizable. You can customize the theme as per your requirement. The theme provides an exiting benefit to your websites. It also features a clean design and sure you will be more happier to use it', 'infoway'); ?></p>
                    <?php } ?>      

                    <a href="<?php echo infoway_get_option('infoway_link1'); ?>" class="readmore"><?php _e('Read More', 'infoway'); ?>&nbsp;<span class="button-tip"></span></a></div>
                <!--   </div>-->
                <!-- <div class="grid_5">-->
                <div class="featurebox_desc second">
                    <?php if (infoway_get_option('infoway_secondhead') != '') { ?>
                        <h2><a href="<?php echo infoway_get_option('infoway_link2'); ?>"><?php echo stripslashes(infoway_get_option('infoway_secondhead')); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="<?php echo infoway_get_option('infoway_link2'); ?>"><?php _e('Build Site Quickly', 'infoway'); ?></a></h2>
                    <?php } ?>
                    <?php if (infoway_get_option('infoway_seconddesc') != '') { ?>
                        <p><?php echo stripslashes(infoway_get_option('infoway_seconddesc')); ?></p>
                    <?php } else { ?>
                        <p><?php _e('The Infoway Wordpress Theme is highly optimized for speed, so that your website loads faster as compared to others. The themes is compatible with all major browsers. Also it provides eye captivating appearance to your website.', 'infoway'); ?></p>
                    <?php } ?>      

                    <a href="<?php echo infoway_get_option('infoway_link2'); ?>" class="readmore"><?php _e('Read More', 'infoway'); ?>&nbsp;<span class="button-tip"></span></a></div>
                <!-- </div>-->
                <!-- <div class="grid_5 omega">-->
                <div class="featurebox_desc third">
                    <?php if (infoway_get_option('infoway_thirdhead') != '') { ?>
                        <h2><a href="<?php echo infoway_get_option('infoway_link3'); ?>"><?php echo stripslashes(infoway_get_option('infoway_thirdhead')); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="<?php echo infoway_get_option('infoway_link3'); ?>"><?php _e('Search Optimized', 'infoway'); ?></a></h2>
                    <?php } ?>
                    <?php if (infoway_get_option('infoway_thirddesc') != '') { ?>
                        <p><?php echo stripslashes(infoway_get_option('infoway_thirddesc')); ?></p>
                    <?php } else { ?>
                        <p><?php _e('A Premium WordPress Theme with single click installation. Just a click and your website is ready to use. Infoway theme is better suitable for any business or personal website. The theme is compatible with various niches.', 'infoway'); ?></p>
                    <?php } ?>      

                    <a href="<?php echo infoway_get_option('infoway_link3'); ?>" class="readmore"><?php _e('Read More', 'infoway'); ?>&nbsp;<span class="button-tip"></span></a></div>
                <!--</div>-->
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="grid_8 omega">
        <div class="signinwidgetarea">
            <?php if (is_active_sidebar('home-page-right-feature-widget-area')) : ?>
                <div class="signinformbox1 widget">
                    <?php dynamic_sidebar('home-page-right-feature-widget-area'); ?>
                </div>
            </div>
        <?php else : ?>
            <div class="signinformbox1">
                <div class="signupForm">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/widgit-area.png" />
                </div>
            </div>
        </div>	
    <?php endif; ?>
</div>	D				
</div>
<div class="testimonial">
    <div class="grid_24">
        <?php if (infoway_get_option('infoway_testimonial_head') != '') { ?>
            <h2><?php echo stripslashes(infoway_get_option('infoway_testimonial_head')); ?></h2>
        <?php } else { ?>
            <h2><?php _e('What Our Clients Say', 'infoway'); ?></h2>
        <?php } ?>  	
        <?php if (infoway_get_option('infoway_testimonial_desc') != '') { ?>
            <p><?php echo stripslashes(infoway_get_option('infoway_testimonial_desc')); ?></p>
        <?php } else { ?>
            <p><?php _e('Infoway was one of the most easiest theme to work with. My Clients loved their websites built using Infoway Theme. I highly recommend it to anyone want to build a business site.', 'infoway'); ?></p> 
        <?php } ?>          
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>