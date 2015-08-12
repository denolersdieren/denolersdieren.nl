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
	/* The sidebar widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sponsor'  ) 
		// && ! is_active_sidebar( 'second-footer-widget-area' )
		// && ! is_active_sidebar( 'third-footer-widget-area'  )
		// && ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return ;
	// If we get this far, we have widgets. Let do this.
?> 

			<div id="post_sidebar" class="sidebar grid_5" role="complementary">

<?php if ( is_active_sidebar( 'sponsor' ) ) : ?>
				<div class="widget-area sponser_post">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'sponsor' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

		<div id="socialmedia_post">

		</div>
		<?php $meta_values = get_post_meta($post->ID, 'fotoalbum', true); 
		if (!empty($meta_values)) : ?>
		<div id="fotoboek_post">
<?php   printf('<a title="Neem een kijkje in het fotoboek" href="/fotoboek/?gallery=%s">Bekijk het fotoalbum &gt;&gt;</a>', $meta_values);	?> 
		</div>
<?php endif; ?>
		
		<?php
		if ('open' == $post->comment_status) : ?>
		<div id="reageer_post">
<?php   printf('<a title="Reageer op dit bericht." href="#comment_form">Reageer op dit bericht &gt;&gt;</a>', $meta_values);	?> 
		</div>
<?php endif; ?>

</div> <!-- #post_sidebar .sidebar -->



