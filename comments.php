<?php
/**
 * Comments template
 *
 * Displays a post's or page's comments.
 *
 * @package adi
 * @since 1.0.0
 */

/**
 * Return early if the post is password protected.
 */
if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title"><?php comments_number( '', esc_html__( 'Comments', 'adi' ), esc_html__( '% Comments', 'adi' ) ); ?></h2>

		<ol id="comments-list">
			<?php
			wp_list_comments( array(
				'avatar_size' => 60,
				'style'		  => 'ol',
				'type'		  => 'comment',
			) );
			?>
		</ol>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'adi' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
