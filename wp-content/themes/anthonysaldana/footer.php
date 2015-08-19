<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

1.	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo" style="background-color: white; padding:5px;">
	<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h2 class="centered">Here's how to reach me</h2>
				<hr>
				<div class="col-sm-4">
					<h2>Anthony Saldana</h2>
					<p style="font-size: 1.2em;">I'm Anthony Saldana, a Web Developer located in Whittier, CA. 
					I passionately build code to create clean and user-friendly websites. 
					My current technologies of choice are php and MySql for my back-end work 
					and simply HTML, bootstrap, javascript and jquery for my front-end work. 
					With skill as an engineer as well as a designer, I offer a view on technology that few possess. </p>
				</div>
				<div class="col-lg-4" style="text-align:center;" >
                                        <p style="max-width:90%; margin:0px;">
                                            <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important;"><span id="li_ui_li_gen_1439938263664_0" class="li-connect-widget"><a id="li_ui_li_gen_1439938263664_0-link" class="li-connect-link" href="javascript:void(0);"><span id="li_ui_li_gen_1439938263664_0-mark" class="li-connect-mark"></span></a> <a class="li-connect-link" href="javascript:void(0);"><span id="li_ui_li_gen_1439938263664_0-text" class="li-connect-text">anthony saldana jr</span></a></span></span></span><script type="IN/MemberProfile+init" data-id="https://www.linkedin.com/pub/anthony-saldana-jr/64/b07/542" data-format="hover" data-related="false" data-text="anthony saldana jr"></script>
                                        </p>
                                        <p>
                                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.bd0320cab493e168513c7173184c1d5c.en.html#_=1439938263490&amp;count=horizontal&amp;dnt=false&amp;hashtags=AnthonySaldana&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fanthonysaldana.com%2F&amp;size=l&amp;text=Anthony%20Saldana%20-%20Web%20Developer%20Portfolio&amp;url=http%3A%2F%2Fanthonysaldana.com%2F&amp;via=anthonysaldana3" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="position: static; visibility: visible; width: 100px; height: 28px;"></iframe>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>    
                                            <br>
                                            <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.a64cf823bcb784855b86e2970134bd2a.en.html#_=1439938263493&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=anthonysaldana3&amp;show_count=false&amp;show_screen_name=true&amp;size=l" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="position: static; visibility: visible; width: 202px; height: 28px;"></iframe>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                        </p>
				</div><!-- col -->
				<div class="col-lg-4" style="text-align:left;">
					<h3>Portfolio</h3>
					<p>View Anthony's Development Portfolio</p>
					
					<h3>About</h3>
					<p>Learn About Anthony, his philosophy, and his abiility.</p>
				</div><!-- col -->
			

			</div><!-- row -->
		
		</div>
		<hr/>
		<div id="footerwrap">
			<div class="container">
				<h4><a href="http://www.twitter.com/anthonysaldana3">Anthony Saldana</a> © Copyright 2014</h4>
			</div>
		</div>
	<div class="container">
			<div class="site-info">
				<?php
					/**
					 * Fires before the Twenty Fifteen footer text for footer customization.
					 *
					 * @since Twenty Fifteen 1.0
					 */
					do_action( 'twentyfifteen_credits' );
				?>
				<p style="text-align:center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			</div><!-- .site-info -->
	</div>
	
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
