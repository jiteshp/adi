<?php
/**
 * Post time template part
 *
 * @package adi
 * @since 1.0.0
 */
?>

<span class="post-author">
	<?php esc_html_e( 'by', 'adi' ); ?>
	<a href="<?php echo esc_url( get_the_author_meta( 'url' ) ); ?>"><?php the_author(); ?></a>
</span>
