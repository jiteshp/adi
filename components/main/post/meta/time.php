<?php
/**
 * Post time template part
 *
 * @package adi
 * @since 1.0.0
 */

if ( get_the_time( 'U' ) != get_the_modified_time( 'U' ) ) : ?>
	<time class="post-time published screen-reader-text" datetime="<?php the_time( 'c' ); ?>">
		<?php the_time( 'F j, Y' ); ?>
	</time>

	<time class="post-time modified" datetime="<?php the_modified_time( 'c' ); ?>">
		<?php the_modified_time( 'F j, Y' ); ?>
	</time>
<?php else : ?>
	<time class="post-time published screen-reader-text" datetime="<?php the_time( 'c' ); ?>">
		<?php the_time( 'F j, Y' ); ?>
	</time>
<?php endif;
