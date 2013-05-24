<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;
            wp_title('|', true, 'right');
            // Add the blog name.
            bloginfo('name');
            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'infoway'), max($paged, $page));
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?> id="regal_body" style="<?php if (infoway_get_option('infoway_bodybg') != '') { ?> background: fixed url('<?php echo infoway_get_option('infoway_bodybg'); ?>') <?php } ?>">
        <div class="wrapper">
            <div class="body_wrapper">
                <div class="topmain_wrapper">
                    <div class="topinfobar" id="topinfobox">
                        <div class="container_24">
                            <div class="grid_24">
                                <div class="grid_5 alpha">
                                    <div class="socialicon">
                                        <ul class="social_logos">
                                            <?php if (infoway_get_option('infoway_twitter') != '') { ?>
                                                <li class="sl-1"><a title="Tweet this" href="<?php echo infoway_get_option('infoway_twitter'); ?>"><span></span></a></li>
                                            <?php } ?>
                                            <?php if (infoway_get_option('infoway_facebook') != '') { ?>
                                                <li class="sl-2"><a title="Share on Facebook" href="<?php echo infoway_get_option('infoway_facebook'); ?>"><span></span></a></li>
                                            <?php } ?>
                                            <?php if (infoway_get_option('infoway_google') != '') { ?>
                                                <li class="sl-3"><a title="Google Plus" href="<?php echo infoway_get_option('infoway_google'); ?>"> <span></span></a></li>
                                            <?php } ?>
                                            <?php if (infoway_get_option('infoway_link') != '') { ?>
                                                <li class="sl-5"><a title="Share on Linkedin" href="<?php echo infoway_get_option('infoway_link'); ?>"><span></span></a></li>
                                            <?php } ?>
                                            <?php if (infoway_get_option('infoway_youtube') != '') { ?>
                                                <li class="sl-6"><a title="Share on Youtube" href="<?php echo infoway_get_option('infoway_youtube'); ?>"><span></span></a></li>
                                            <?php } ?>
                                            <?php if (infoway_get_option('infoway_pin') != '') { ?>
                                                <li class="sl-7"><a title="Pinterest" href="<?php echo infoway_get_option('infoway_pin'); ?>"><span></span></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid_15"> <span class="info">
                                        <?php if (infoway_get_option('infoway_topinfobar_text') != '') { ?>
                                            <p><?php echo stripslashes(infoway_get_option('infoway_topinfobar_text')); ?></p>
                                        <?php } else { ?>
                                            <p>
                                                <?php _e('Your most important notice information for site visitors with a link can come here.', 'infoway'); ?>
                                            </p>
                                        <?php } ?>
                                    </span></div>
                                <div class="grid_2">
                                    <div class="siteinfourl"><a href="<?php echo infoway_get_option('infoway_topinfobar_url'); ?>">
                                            <?php if (infoway_get_option('infoway_topinfobar_sitename') != '') { ?>
                                                <p><?php echo stripslashes(infoway_get_option('infoway_topinfobar_sitename')); ?></p>
                                            <?php } else { ?>
                                                <p>
                                                    <?php _e('Click Here', 'infoway'); ?>
                                                </p>
                                            <?php } ?>
                                        </a></div>
                                </div>
                                <div class="grid_2 omega">
                                    <div class="closeicon"><a href="javascript:hide_all();"><img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.png"  /></a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="toptip"></div>
                        </div>
                    </div>
                </div>
                <div class="container_24">
                    <div class="grid_24">
                        <div class="header" id="#top">
                            <div class="grid_12 alpha">
                                <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php if (infoway_get_option('infoway_logo') != '') { ?><?php echo infoway_get_option('infoway_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
                            </div>
                            <div class="grid_12 omega">&nbsp;&nbsp;&nbsp;
                                <div class="contactinfo"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile-icon.png" />&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if ('' != infoway_get_option('infoway_topright')) { ?>
                                        <span class="calldetails"> <?php echo stripslashes(infoway_get_option('infoway_topright')); ?> </span> <br/>
                                        <a class="btn" href="tel:<?php echo stripslashes(infoway_get_option('infoway_contact_number')); ?>"><span><?php _e('Tap To Call', 'infoway'); ?></span></a>
                                    <?php } else {
                                        ?>
                                        <span class="calldetails"><?php _e('Call 24 Hours: 1.888.222.5847', 'infoway'); ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="wrapper_menu">
                            <div class="menu_container">
                                <div class="menu_bar">
                                    <div id="MainNav"> <a href="#" class="mobile_nav closed"><?php _e('Pages Navigation Menu', 'infoway'); ?><span></span></a>
                                        <?php infoway_nav(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>