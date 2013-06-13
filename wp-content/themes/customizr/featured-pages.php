<?php
/**
 * The template displaying the front page widget areas.
 *
 *
 * @package Customizr
 * @since Customizr 1.0
 */

//set the global customizr options array
global $tc_theme_options;

//set the areas array
$areas = array ('one','two','three');
?>
<div align="center">
	<form method="POST" action="check_email.php" onsubmit = "check_email();return false;">
	<input type="email" id='txt_email' name='txt_email' style='border-radius: 10px 10px 10px 10px;width:425px;height:30px;background-color:beige' required="required">

	<button style='height:33px'>Verify</button>
	</form>
</div>
<div id='loading'></div>
<div align="center" class='resultbox' style='display:none'>
	<div class='alert box' style='width:500px;background-color:#D9EDF7;border: 0px solid #FBEED5;border-radius: 10px 10px 10px 10px;border-color: #BCE8F1;'>
		<a class="close" href="#" data-dismiss="alert">×</a>
		<p></p>
		<h3 style='font-size:18px'></h3>
		<p></p>
	</div>
	<pre style='display:none;width:500px;height:200px;text-align:left'>MX record about yahoo.com exists.<br>Connection succeeded to mta5.am0.yahoodns.net SMTP.<br>220 mta1428.mail.ne1.yahoo.com ESMTP YSmtpProxy service ready<br>HELO verify-email.org <br>250 mta1428.mail.ne1.yahoo.com<br>&gt; MAIL FROM: &lt;check@verify-email.org&gt;<br>=250 sender &lt;check@verify-email.org&gt; ok<br>&gt; RCPT TO: &lt;ungdailong@yahoo.com&gt;<br>=250 ok dirdel<br>
		<br>
	</pre>
</div>
<?php if ($tc_theme_options['tc_show_featured_pages'] != 0) : ?>
	<div class="container marketing">
		<div class="row widget-area" role="complementary">
			<?php foreach ($areas as $area) : ?>
				<div class="span4">
					<?php 
						if ( !empty( $tc_theme_options['tc_featured_page_'.$area] ) )  {
							tc_get_featured_pages($area);
						}
						else {
							tc_get_featured_pages('not-set');
						}
					 ?>
				</div>
			<?php endforeach; ?>
		</div><!-- .row widget-area -->
	</div><!-- .container -->
	<hr class="featurette-divider">
<?php endif; ?>