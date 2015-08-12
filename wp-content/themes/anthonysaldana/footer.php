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

	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo" style="background-color: black;">
	<div class="container">
	<div class="row">
	<div class="col-sm-4"><?php get_sidebar('content');?></div>
		<div class="col-sm-4"><header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif;
	
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif;
					?>
				</div><!-- .site-branding -->
			</header><!-- .site-header --></div>
		
	</div>
		<div id="sidebar" class="sidebar">
			
	
			
		</div><!-- .sidebar -->
			<div class="site-info">
				<?php
					/**
					 * Fires before the Twenty Fifteen footer text for footer customization.
					 *
					 * @since Twenty Fifteen 1.0
					 */
					do_action( 'twentyfifteen_credits' );
				?>
				<p style="text-align:center;">Anthony Saldana | Web Developer</p>
			</div><!-- .site-info -->
	</div>
	
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
