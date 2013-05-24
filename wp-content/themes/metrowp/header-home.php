<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="theme author" href="ZHAO Xudong,zxdong@gmail.com" />
<title>
<?php bloginfo('name');$paged = get_query_var('paged'); if($paged>1) printf('|page %s',$paged); ?>
</title>
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="wordpress,<?php bloginfo('name'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<div id="header">
  <div id="logo"  class="fix"> <span class="tool"><a class="blogtitle" href="<?php echo home_url(); ?>"><?php echo bloginfo('name'); ?></a></span> <span class="feed"><span class="social rss"><a href="<?php echo home_url('/feed/'); ?>" title="Subscribe in a reader">RSS</a></span></span> </div>
  <!-- /logo--> 
</div>
<!-- /header -->
<div id="wrapper" class="fix">
<?php get_template_part('nav'); ?>
