<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">


<div class="container">

	<div class="row no-margin-padding text-white">
		<div class="col-xs-12 col-md-3 no-margin-padding">
			<img src="images/logo.png">
		</div>
		<div class="col-xs-12 col-md-4 col-md-offset-3 middle-xs">
			<nav class="footer-nav">
				<?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?>
			</nav>
		</div>
		<div class="col-xs-12 col-md-2 middle-xs">social</div>
	</div>

	<div class="row text-white" style="margin: 0; padding: .5rem 0">
		<div class="col-xs-12 col-md-6">
			<p class="rc no-margin-padding">The Official Media Library of the U.S. Department of Defense</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<p class="rc no-margin-padding" style="float: right">1.800.444.3333  •  support@imagesoffreedom.com</p>
		</div>
	</div>

	<div class="row">
		<div class="footer-email-container">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-md-6 text-white">
						<h3 class="uc">Subscribe to our mailing list</h3>
						<p class="rc no-margin-padding">Get archive news delivered directly to your inbox.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row text-white">
		<div class="col-xs-12">
			<p style="font-size: 12px">Privacy Policy   |   Terms of Use   |   ©2015 DIMOC</p>
		</div>
	</div>

</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
