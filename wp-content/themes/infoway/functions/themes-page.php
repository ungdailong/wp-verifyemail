<?php
// Add scripts and stylesheet
function enqueue_styles() {
    global $themename, $themeslug, $options;
    wp_register_style($themeslug . 'storecss', get_template_directory_uri() . '/functions/theme-page-style.css');
    wp_enqueue_style($themeslug . 'storecss');
}
// Add page to the menu
function inkthemes_add_menu() {
    $page = add_theme_page('InkThemes Themes Page', 'InkThemes Themes', 'administrator', 'themes', 'inkthemes_page_init');
    add_action('admin_print_styles-' . $page, 'enqueue_styles');
}
add_action('admin_menu', 'inkthemes_add_menu');
// Create the page
function inkthemes_page_init() {
    $root = get_template_directory_uri();
    ?>
        <div id="contain">
        <div id="themesheader">
            <a href="http://www.inkthemes.com/" target="_blank"><img src="<?php echo $root; ?>/functions/images/inkthemes-logo.png" /></a>
            <br />
            <div class="menu">	   
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.inkthemes.com" data-text="Check out the Professional Premium WordPress Themes at InkThemes">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <iframe src="http://www.facebook.com/plugins/like.php?app_id=153286811409231&href=www.inkthemes.com&send=false&layout=button_count&width=90&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
                <g:plusone size="medium" href="http://www.inkthemes.com"></g:plusone>
                <script type="text/javascript">
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br/>
                <hr/>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div id="container">
            <div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/colorway-wp-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/colorway.jpg" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/colorway-wp-theme/" target="_blank">Colorway Theme</a></div>
                <br />
                The best thing about Colorway Theme is the ease with the help of which you can convert your Website in various different Niches. “Your Clients Would Love Their Site & You Would smile in the back thinking about the Time That You Spend Building their Sites.”
                <br /><br />
                Colorway   Theme is perfect for quick and easy blogging with a clean and modern interface and tons of features. The layout does not distract from your content, which is vital for a site devoted to business & blogging. <br /><br />
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/colorway-wp-theme/" target="_blank">Buy Colorway Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://wordpress.org/extend/themes/colorway" target="_blank">Try Colorway Lite for FREE</a></div>

            </div>

            <div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/local-business-wordpress-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/Big-thames-Local-Business-theme-1.png" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/local-business-wordpress-theme/" target="_blank">Local Business Theme</a></div>
                <br />
                Local business theme is important for businesses to generate more leads. It captures visitor’s details so that business owners can convert them into their customers later.   This theme is suitable for all types of local businesses, I would really like to see your leads to grow manifold by using it.
                <br /><br />
				Single Click Theme Installation. It’s extremely easy to setup.Lead form guard with anti spam check method. You will get a true list of your customer.Responsive to all kind of Mobile & Tablet devices.
				20 Professional designed logo for different niches. (Both PSD and PNG format) You can edit as per your need.50 Professional Images to turn your website to any different niche.You can easily put your contact detail on the top right corner of the page.
                <br /><br />
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/local-business-wordpress-theme/" target="_blank">Buy Local business Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://wordpress.org/extend/themes/local-business" target="_blank">Try Local business for FREE</a></div>
            </div>

            <div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/blackbird-responsive-wordpress-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/blackbird-thumb.png" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/blackbird-responsive-wordpress-theme/" target="_blank">Black Bird Theme</a></div>
                <br/>
                Blackbird Theme is a very clean and elegantly designed Responsive WordPress Theme. Its created with the aim to make your business website look professional to your visitors. 
                <br/>
                <br/>
              Starting from the top header area, the Blackbird WordPress Theme allows you to upload your own Custom Logo and had a space on the top right to enter your contact details. This details are useful for the first time visitors as they can clearly see your contact details right on top.  
				<br/>
                <br/>
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/blackbird-responsive-wordpress-theme/" target="_blank">Buy Black Bird Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://wordpress.org/extend/themes/bizway" target="_blank">Try Black Bird Lite for FREE</a></div>
            </div><br />

            <div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/andrina-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/andrina.png" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/andrina-theme/" target="_blank">Andrina Theme</a></div>
                <br />
                The Andrina Theme allows the user to show his blogposts on the frontpage. Hence the main Home Page is always updated on the release of new blogposts. Hence the site is more Search Engine friendly.
                <br/>
                <br/>
                The Theme had a simple layout which attracts the Client to the Website. Also, the professional and Clean design always suites the requirements of almost any kind of business Website. Andrina Theme is very simple to built and you don’t even need to be a code junkie to start using the Andrina Theme and get your website ready.
                <br /> <br />
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/andrina-theme/" target="_blank">Buy Andrina Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://wordpress.org/extend/themes/andrina-lite" target="_blank">Try Andrina Lite for FREE</a></div>
            </div>
            <div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/figero-wordpress-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/figero-bigthumbnail.png" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/figero-wordpress-theme/" target="_blank">Figero Theme</a></div>
                <br />
                Business website designs are best powered by Premium Ecommerce WordPress themes.  WordPress will become a boon if you are developing a website for your business. It will be really powerful and an affordable website design technique.  Building entrepreneurs are especially benefited from the most of this. 
                <br/><br/>
                There are several hundreds and thousands of customizable eCommerce wordpress themes available to download from various websites. Figero is one of the best eCommerce wordpress theme, It’s easy to use and simple to maintain. If you want to sell your digital items using paypal, It’s one of the easiest and the quickest way to go online.  Just put your few steps and you are ready to sell your item using paypal.
                <br /> <br />
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/figero-wordpress-theme/" target="_blank">Buy Figero Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://wordpress.org/extend/themes/figero">Try Figero Lite for FREE</a></div>
            </div>
			<div class="theme-image">
                <a href="http://www.inkthemes.com/wp-themes/poloray-responsive-wordpress-theme/" target="_blank"><img src="<?php echo $root; ?>/functions/images/Poloray-thumbe2013.png" /></a>
            </div>
            <div class="theme-desc">
                <div class="theme-title"><a href="http://www.inkthemes.com/wp-themes/poloray-responsive-wordpress-theme/" target="_blank">Poloray Theme</a></div>
                <br />
                Poloray is a unique fully responsive wordpress theme, perfect for creative people and business agencies. By emphasizing your photos and content, it showcases your work in an amazing way. Easy to manage using Themes Options Panel, it comes also with a gallery, blog, Contact Page and other custom page templates to spice up your website.
                <br /><br />
                Poloray  Theme is a responsive theme and is perfect for quick and easy site with a clean and modern interface and tons of features. The layout does not distract from your content, which is vital for a site devoted to business & blogging. <br /><br />
                <div class="buy"><a href="http://www.inkthemes.com/wp-themes/poloray-responsive-wordpress-theme/" target="_blank">Buy Poloray Theme</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://wordpress.org/extend/themes/poloray" target="_blank">Try Poloray Theme Lite for FREE</a></div>
            </div>
        </div>
    </div>

    <?php
}
