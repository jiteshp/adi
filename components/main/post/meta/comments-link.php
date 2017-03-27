<?php
/**
 * Post time template part
 *
 * @package adi
 * @since 1.0.0
 */
?>

<span class="post-comments-link">
	<a href="<?php echo esc_url( get_permalink() ); ?>#comments"><?php comments_number(); ?></a>
</span>
