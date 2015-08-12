<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'Er is &eacute;&eacute;n reactie', 'Er zijn %1$s reacties', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ));
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Oudere reacties', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Nieuwere reacties <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'twentyten_comment' ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Oudere reacties', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Nieuwere reacties <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Het is niet mogelijk om bij dit artikel een reactie te plaatsen.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<a name="comment_form"></a>
<script type="text/javascript" charset="utf-8">
	//for the sake of simplicity - inline code.
	$j(document).ready(function(){
		$j('textarea#comment').focus(function() {
	  		$j('.commenttextareatop').addClass('commenttextareatophl');
	  		$j('.commenttextareabottom').addClass('commenttextareabothl');

		});
		$j('textarea#comment').focusout(function(){
			$j('.commenttextareatop').removeClass('commenttextareatophl');
	  		$j('.commenttextareabottom').removeClass('commenttextareabothl');
		});
	});
</script>
	<?php 
	$comment_formsettings = array(
									'title_reply'          => __( 'Laat hier je bericht achter' ),
									'title_reply_to'       => __( 'Laat een bericht achter voor %s'),
									'comment_field'        => '<div class="clear"></div><p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><span class="commenttextareatop"></span><textarea id="comment" name="comment" cols="60" rows="14" aria-required="true"></textarea><span class="commenttextareabottom"></span></p>'
									 );
	comment_form($comment_formsettings); ?>
</div>
<div style="height: 1px" class="clear"></div>


