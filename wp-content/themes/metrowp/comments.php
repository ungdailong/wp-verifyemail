<?php
/**
 * The template for displaying Comments.
 */
?>

<div class="comments-text fix">
  <?php
// Do not delete these lines
        if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
		if ( post_password_required() ) { ?>
  <p class="nocomments">
    <?php _e('This post is password protected. Enter the password to view comments.', 'MetroWP');?>
  </p>
</div>
<?php
                return;
		}
?>
<?php if ( have_comments() ) : ?>
<h3 id="comments">
  <?php comments_number(__('No Response &#187;', 'MetroWP'), __('1 Responses &#187;', 'MetroWP'),__('% Responses &#187;', 'MetroWP'));?>
  <?php _e('to &#8220;','MetroWP');?>
  <?php if(!the_title('','',false)) echo 'untitled post';?>
  <?php the_title(); ?>
  &#8221;</h3>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
<div class="navigation">
  <div class="nav-previous">
    <?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'MetroWP' ) ); ?>
  </div>
  <div class="nav-next">
    <?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'MetroWP' ) ); ?>
  </div>
</div>
<!-- .navigation -->
<?php endif; // check for comment navigation ?>
<ol class="commentlist">
  <?php wp_list_comments(array('style' => 'ol')); ?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
<div class="navigation">
  <div class="nav-previous">
    <?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'MetroWP' ) ); ?>
  </div>
  <div class="nav-next">
    <?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'MetroWP' ) ); ?>
  </div>
</div>
<!-- .navigation -->
<?php endif; // check for comment navigation ?>
<?php else : // or, if we don't have comments:
	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
        if ( ! comments_open() ) :
?>
<?php endif; // end ! comments_open() ?>
<?php endif; // end have_comments() ?>
<?php comment_form(); ?>
</div>
