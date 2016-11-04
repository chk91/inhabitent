<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">

					<div class="footy">
						<div class ="contact">
							<h2>Contact Info</h2>
							<a href = "mailto:info@inhabitent.com"><i class="fa fa-envelope" aria-hidden="true"></i>info@inhabitent.com</a>
							<p>778-456-7891</p>
						</div>

						<div class="hours">
							<h2>Business Hours</h2>
							<p>Monday-Friday: 9am to 5pm</p>
							<p>Saturday: 10am to 2pm</p>
							<p>Sunday: Closed</p>
						</div>

						<div class="footyLogo">
							<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg">
						</div>

							<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'copyright 2016 %s' ), 'Inhabitent' ); ?></a>
				</div><!-- .site-info -->

					<div>
				

				</footer><!-- #colophon -->
			
			</div><!-- #page -->

			
		<?php wp_footer(); ?>

	</body>
</html>
