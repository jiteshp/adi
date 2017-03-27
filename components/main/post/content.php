<?php
/**
 * Post content template part
 *
 * @package adi
 * @since 1.0.0
 */

if ( is_search() ) : ?>
	<div class="post-summary">
		<?php the_excerpt(); ?>
	</div>
<?php else : ?>
	<div class="post-content">
		<?php the_content( esc_html__( 'Read more', 'adi' ) . '<span class="screen-reader-text">' . esc_html__( ' of ', 'adi' ) . '<a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a>' . '</span>' ); ?>
	</div>
<?php endif;
