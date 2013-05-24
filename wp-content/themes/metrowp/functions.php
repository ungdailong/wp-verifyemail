<?php
    if ( ! isset( $content_width ) ){
		        $content_width = 600;
		} 
		        add_theme_support( 'post-thumbnails' ); // Add it for posts
		        add_theme_support('automatic-feed-links'); 

    register_nav_menus( array(
		        'primary' => __( 'Primary Navigation', 'MetroWP' ),)
		);

//widget function,from twentyten theme
    function MetroWP_widgets_init() {
	// Area 1, located at the top of the sidebar.
                register_sidebar( array(
				        'name' => __( 'Primary Widget Area', 'MetroWP' ),
						'id' => 'primary-widget-area',
						'description' => __( 'The primary widget area', 'MetroWP' ),
						'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
						'after_widget' => '</div>',
						'before_title' => '<div class="sidebartitle"><h3 class="widget-title">',
						'after_title' => '</h3></div>',
						) 
				);
		}
    add_action( 'widgets_init', 'MetroWP_widgets_init' );
/** Register sidebars by running MetroWP_widgets_init() on the widgets_init hook. */
       
/**some function modified */
        if ( !is_admin() ) {
// add google analytics to footer
		            function MetroWP_init_method() {
                                        wp_register_script( 'MetroWP', get_template_directory_uri().'/js/MetroWP.js' ,array('jquery'),'0.1',true); 
				                        wp_enqueue_script( 'MetroWP');
				                        wp_deregister_script( 'jquery' );
				                        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js' ,false,'1.6.1',true); 
				                        wp_enqueue_script( 'jquery');
				       }
				       add_action('init', 'MetroWP_init_method'); 
		}
		function MetroWP_browser_body_class($classes) {
		        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
				if($is_lynx) $classes[] = 'lynx';
				elseif($is_gecko) $classes[] = 'gecko';
				elseif($is_opera) $classes[] = 'opera';
				elseif($is_NS4) $classes[] = 'ns4';
				elseif($is_safari) $classes[] = 'safari';
				elseif($is_chrome) $classes[] = 'chrome';
				elseif($is_IE){
				        $classes[] = 'ie';
						//if the browser is IE6
						if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6') !== false){
						        $classes[] = 'ie6'; //add 'ie6' class to the body class array
						}
				}
				else $classes[] = 'unknown';
				if($is_iphone) $classes[] = 'iphone';
				return $classes;
		}
		add_filter('body_class','MetroWP_browser_body_class'); 
                function MetroWP_post_expander_show_post (  ) {
                         if ( have_posts() ) {
                              while ( have_posts() ) {
                               the_post();
                               the_content();
                               }
                         }
                         die();
                 }
function MetroWP_post_expander_activate ( ) {
  if ( isset( $_POST["post_expander"] ) ) {
    add_action( 'wp', 'MetroWP_post_expander_show_post' );
  }
}
add_action('init', 'MetroWP_post_expander_activate');
class zxdRoboCheck{
	function zxd_robokiller_fields($fields) {
		$rnum1 =rand(1,10);
		$rnum2 = rand(2,8);
		$rnum = $rnum1 + $rnum2;
		$fields['robo'] = '<p class="comment-form-robo"><label for="robo">'.$rnum1.'+'.$rnum2.'=?'.__('(robot check)').'</label> <span class="required">*</span><input id="robo" name="robo" type="text" value="" size="30" aria-required="true" /><input id="rnum" name="rnum" type="hidden" value="'.$rnum.'" size="0" aria-required="true" class="hide" /></p> ';
		return $fields;
	}
	function roboCheck($comment){
                $user_id=get_current_user_id( );
                if($user_id !=0) return($comment);
		if (empty($_POST['robo']) || trim($_POST['robo']) == '' ) {
			wp_die( __('Error: you are not robot,are you?do the math,fill the blank '));
		}
		$robo_num1 = (int)$_POST['robo'];
		$robo_num2 = (int)$_POST['rnum'];
		if ( $robo_num2 == $robo_num1) {
			return($comment);
		} 
		else {
			wp_die( __('Error: you are not robot,are you?'));
		}
	}
}
if (class_exists("zxdRoboCheck")) {
  $aRoboCheck = new zxdRoboCheck();
  add_action('comment_form_default_fields', array(&$aRoboCheck, 'zxd_robokiller_fields'),1);
  add_filter('preprocess_comment', array($aRoboCheck, 'roboCheck'), 1);
}
?>