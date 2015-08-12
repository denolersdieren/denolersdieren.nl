<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Nolers Saturnalia
 * @since Nolers Saturnalia 0.8
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	// if (   ! is_active_sidebar( 'first-footer-widget-area'  )
	// 	&& ! is_active_sidebar( 'second-footer-widget-area' )
	// 	&& ! is_active_sidebar( 'third-footer-widget-area'  )
	// 	&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	// )
	// 	return;
	// // If we get this far, we have widgets. Let do this.
?> 

			<div id="footer-widget-area" role="complementary">

<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				<div class="widget-area grid_4">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				<div class="widget-area grid_5">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</ul>
				</div><!-- #second .widget-area -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				<div class="widget-area grid_5">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</ul>
				</div><!-- #third .widget-area -->
<?php endif; ?>

				<div class="grid_2">
					<p style="text-align:center;">		<img src="<?php echo get_bloginfo(template_directory); ?>/img/nolerlogo_footer.png" />
</p>
				</div><!-- #fourth .widget-area -->

			<div class="clear">&nbsp;</div>
			</div><!-- #footer-widget-area -->
