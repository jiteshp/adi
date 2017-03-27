<?php
/**
 * Content template part
 *
 * Displays the post content in an index, archive or search template.
 *
 * @package adi
 * @since 1.0.0
 */
?>

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
