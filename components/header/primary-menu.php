<?php
/**
 * Primary menu template part
 *
 * Displays the site's primary menu, if available.
 *
 * @package adi
 * @since 1.0.0
 */

if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="primary-menu" role="navigation">
		<a href="#" id="primary-menu-toggle"><span class="dashicons dashicons-menu"></span></a>

		<?php
		wp_nav_menu( array(
			'container' 	 => false,
			'depth' 	 	 => 1,
			'theme_location' => 'primary',
		) ); ?>
	</nav>
<?php endif;
