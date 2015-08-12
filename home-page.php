<?php
/*
Template Name: Home
*/
?>
<?php
wp_enqueue_script('cycle');
wp_enqueue_script(	"nolers-home", 
					 	get_template_directory_uri() . "/code/home.js",
					 	array( 'jquery' ) );

get_header(); ?>

	
			
			<div id="featured">
				<div id="featuredimg" class="grid_10">
				<?php
				// featured php zone ... @TODO fix this so it takes img for certain catogory's. Also so it doesn't show concepts messages. 
				
				$count = 0; #id'ing the images.
				$args = array('numberposts' => 4,
							  'post_status' => 'publish');
				
				$recent_posts = wp_get_recent_posts($args);
				// echo '<code>';
				// print_r($recent_posts);
				// echo '</code>';
				foreach ($recent_posts as $post){
					if (has_post_thumbnail( $post['ID'] )){
						echo '<a id="'.$count.'" href="' . get_permalink($post["ID"]) . '" title="Lees '.$post["post_title"].'" >'. get_the_post_thumbnail( $post['ID'], 'featured-post-image') . 
							'<h3 class="overlay">' . $post['post_title'] . '</h3>' .'</a>';
					}	else {
						echo '<a id="'.$count.'" href="' . get_permalink($post["ID"]) . '" title="Lees '.$post["post_title"].'" ><img src="'.get_bloginfo(template_directory) . '/img/nonewsimage.png" alt="Helaas is er geen afbeelding gevonden." title="Geen afbeelding."/></a>';
					}
					$count++;
				}
				
				?>

				</div>
				<div id="featuredcontainer" class="grid_6">	
				<?php
					dynamic_sidebar( 'welkomtekst' );
				?>
				<h2 id="laatstenieuws">Het laatste nieuws</h2>
				
			    <ul id="laatstenieuwslinks">
			    <?php
				foreach($recent_posts as $post){
					echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Lees '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
			      } ?>
			    </ul>
				</div><!--featuredcontainer -->

					<div class="clear"></div>	
			</div>					
		<?php 	get_sidebar( 'home' ); ?>
<?php get_footer(); ?>