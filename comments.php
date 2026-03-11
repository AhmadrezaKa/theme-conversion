<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( '1' === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'ahmadreza-portfolio' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'ahmadreza-portfolio' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 50,
					'callback'    => 'ahmadreza_portfolio_comment_callback',
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ahmadreza-portfolio' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form(
		array(
			'title_reply'          => __( 'Leave a Comment', 'ahmadreza-portfolio' ),
			'title_reply_to'       => __( 'Reply to %s', 'ahmadreza-portfolio' ),
			'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
			'title_reply_after'    => '</h3>',
			'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.', 'ahmadreza-portfolio' ) . '</p>',
			'comment_field'        => '<div class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun', 'ahmadreza-portfolio' ) . '</label><textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea></div>',
			'fields'               => array(
				'author' => '<div class="comment-form-author"><label for="author">' . __( 'Name', 'ahmadreza-portfolio' ) . ' <span class="required">*</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required="required"></div>',
				'email'  => '<div class="comment-form-email"><label for="email">' . __( 'Email', 'ahmadreza-portfolio' ) . ' <span class="required">*</span></label><input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" required="required"></div>',
				'url'    => '<div class="comment-form-url"><label for="url">' . __( 'Website', 'ahmadreza-portfolio' ) . '</label><input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200"></div>',
			),
			'class_submit'         => 'btn btn-primary',
			'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
			'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
		)
	);
	?>
</div><!-- #comments -->

<?php
/**
 * Custom callback for displaying individual comments
 */
function ahmadreza_portfolio_comment_callback( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( '', $comment, null, false ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
					if ( 0 != $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
					<?php
					/* translators: %s: comment author link */
					printf( __( '%s <span class="says">says:</span>', 'ahmadreza-portfolio' ),
						sprintf( '<b class="fn">%s</b>', get_comment_author_link( $comment ) )
					);
					?>
				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<time datetime="<?php comment_time( 'c' ); ?>">
						<?php
							/* translators: 1: date, 2: time */
							printf( __( '%1$s at %2$s', 'ahmadreza-portfolio' ), get_comment_date(), get_comment_time() );
						?>
					</time>
					<?php edit_comment_link( __( 'Edit', 'ahmadreza-portfolio' ), ' <span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-metadata -->

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'ahmadreza-portfolio' ); ?></p>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div class="comment-content">
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'before'    => '<div class="reply">',
						'after'     => '</div>',
					)
				)
			);
			?>
		</article><!-- .comment-body -->
	<?php
}
