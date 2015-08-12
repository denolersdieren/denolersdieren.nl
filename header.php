<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Nolers Saturnalia
 * @since Nolers 0.8
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo(template_directory); ?>/code/fancybox/jquery.fancybox-1.3.4.css" />
<!--[if IE]>       
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo(template_directory); ?>/css/ie.css" />
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">
/* <![CDATA[ */
		var $j = jQuery.noConflict();

	
	$j(document).ready(function() { 
		$j('a.fancygallery').fancybox();
		$j('div.gallery a').fancybox();
});
/* ]]> */
</script>

</head>

<body <?php body_class(); ?>>
	<div id="nolersheader">
		<div id="header" class="container_16">
			<a id="logo" title="Klik hier om terug te gaan naar het begin van deze website." class= "grid_4" href="http://www.denolersdieren.nl/">
			Carnavalsvereniging de N&#246;lers
			</a>
			<div id="navbar" class="grid_12">
				<?php 
				//telling wordpress to echo the featured headers
				wp_nav_menu(array(
									'container'		=> '', #echo empty for no container
									'menu'			=> 'hoofdmenu',
									'menu_class'	=> 'ot-menu sf-js-enabled sf-shadow', 
									'echo'			=> true,
									'fallback_cb'	=> 'wp_page_menu'));
				?>
				<div id="navbar2"> </div>	
		</div>
					<div class="clear"></div>
		<img class="nolerschild" src="<?php echo get_bloginfo(template_directory); ?>/img/nolerlogo_footer.png" />
		</div><!--#header -->
	</div> <!--#nolersheader -->	
	<div id="nolerscontent">
	<div id="content" class="container_16" role="main">
