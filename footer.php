<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	<div class="clear"></div>
	</div><!-- #content -->
	</div><!-- #nolerscontent -->
	<div id="nolersfooter">
	<div id="footer" role="contentinfo" class="container_16">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
		</div><!-- #colophon -->
	</div><!-- #footer -->
	<div id="site-info-container">
		<div id="site-info">
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div><!-- #site-info -->

		<div id="site-generator">
			<?php do_action( 'twentyten_credits' ); ?>
			<a href="<?php echo esc_url( __('http://wordpress.org/', 'twentyten') ); ?>"
					title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentyten'); ?>" rel="generator">
				<?php printf( __('Made with %s,', 'twentyten'), 'WordPress' ); ?>
			</a>
			<span class="sowhat"><a href="<?php echo esc_url( __('http://en.wikipedia.org/wiki/So_What_(composition)', 'twentyten') ); ?>"
					title="<?php esc_attr_e('Or was it Freddie Freeloader!?', 'twentyten'); ?>" rel="inspiration">
				 so what
			</a>theme.</span>
		</div><!-- #site-generator-->
	</div><!--#site-info-container-->
	</div><!-- #nolersfooter -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20500812-1']);
  _gaq.push(['_setDomainName', '.denolersdieren.nl']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = 1;
    ga.src = '//www.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
