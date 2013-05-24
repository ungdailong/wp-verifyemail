<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="theme author" href="ZHAO Xudong,zxdong@gmail.com" />
<title>
<?php wp_title(''); ?>
|
<?php $paged = get_query_var('paged'); if($paged>1) printf('page %s',$paged); ?>
<?php if(is_tag()) printf('tag-'); ?>
<?php if(is_category()) printf('category-'); ?>
<?php bloginfo('name'); ?>
</title>
<?php if (is_front_page()):?>
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="wordpress,<?php bloginfo('name'); ?>" />
<?php elseif (is_tag()):?>
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="<?php single_tag_title() ?> related content posted by <?php bloginfo('name'); ?>,enjoy reading <?php single_tag_title() ?><?php $paged = get_query_var('paged'); if($paged>1) printf('page %s',$paged); ?>" />
<meta name="keywords" content="<?php single_tag_title() ?>" />
<?php elseif (is_category()):?>
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="<?php wp_title('') ?> related content <?php $paged = get_query_var('paged'); if($paged>1) printf('page %s',$paged); ?> posted by <?php bloginfo('name'); ?>,enjoy reading <?php wp_title('') ?> related content." />
<meta name="keywords" content="<?php wp_title('') ?>" />
<?php endif;?>
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
