<?php
/**
 * Post header template part
 *
 * @package adi
 * @since 1.0.0
 */

if ( is_singular() ) :
	the_title( '<header class="post-header"><h1 class="post-title">', '</h1></header>' );
else :
	the_title(
		sprintf(
			'<header class="post-header"><h2 class="post-title h1"><a href="%s" rel="bookmark">',
			esc_url( get_permalink() )
		),
		'</a></h2></header>'
	);
endif;
