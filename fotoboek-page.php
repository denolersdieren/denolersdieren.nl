<?php
/*
Template Name: Fotoboek
*/
?>

<?php get_header(); ?>
			
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

				<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
						<h1 class="entry-title grid_16"><?php the_title(); ?></h1>
						<div class="clear">&nbsp;</div>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						
					</div><!-- .entry-content -->
				</div><div class="clear"></div><!-- #post-## -->



<?php endwhile; ?>


<?php get_footer(); ?>