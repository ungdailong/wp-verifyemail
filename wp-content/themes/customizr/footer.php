<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main-wrapper element.
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
</div><!--/#main-wrapper"-->
<!-- FOOTER -->
<footer id="footer">
	<?php get_sidebar('footer'); ?>
	<div class="colophon">
		<div class="container">
			<div class="row-fluid">
				<div class="span4 social-block pull-left"><?php echo tc_get_social('tc_social_in_footer'); ?></div>
				<?php
				printf( '<div class="span4 credits"><p> &middot; &copy; %1$s <a href="%2$s" title="%3$s" rel="bookmark">%3$s</a> &middot; '.__('Designed by ','customizr').'<a href="http://www.themesandco.com" title="Themes WordPress">Themes &amp; Co</a> &middot;</p></div>',
					esc_attr( date('Y') ),
					esc_url( home_url() ),
					esc_attr(get_bloginfo()),
					esc_html( get_the_date() )
					);
			        //printf($credits);
					?>
					<div class="span4 backtop"><p class="pull-right"><a href="#"><?php _e('Back to top','customizr') ?></a></p></div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script>
	function check_email(){
		$('.resultbox').hide('slow');
		$('#loading').showLoading();
		var email = $('#txt_email').val();
		$.ajax({
			url : "check_email.php",
			type : "GET",
			
			data:{
				'txt_email' : email,
			},
			dataType : "JSON",
			success : function(html){
				$('#loading').hideLoading();
				$('.resultbox div h3').text(html.message);
				$('.resultbox').show('slow');
			}
		});
	}
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40579919-3', 'emailverify.info');
  ga('send', 'pageview');

</script>
</body>
</html>