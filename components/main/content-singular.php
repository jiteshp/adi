<?php
/**
 * Content template part
 *
 * Displays the post content in an index, archive or search template.
 *
 * @package adi
 * @since 1.0.0
 */

do_action( 'adi_before_singular_post' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked into 'adi_post' action.
	 *
	 * @hooked adi_post_header - 10
	 * @hooked adi_post_content - 20
	 * @hooked adi_post_meta - 30
	 */
	do_action( 'adi_post' ); ?>
</article>

<?php
/**
 * Functions hooked into 'adi_after_singular_post' action.
 *
 * @hooked adi_post_navigation - 10
 * @hooked adi_comments - 20
 */
do_action( 'adi_after_singular_post' ); ?>
