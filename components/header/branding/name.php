<?php
/**
 * Site title template part
 *
 * Displays the site title in an appropriate tag, depending on the page..
 *
 * @package adi
 * @since 1.0.0
 */

if ( is_home() && is_front_page() ) : ?>
	<h1 class="site-title"><?php get_template_part( 'components/header/branding/link' ); ?></h1>
<?php else : ?>
	<p class="site-title"><?php get_template_part( 'components/header/branding/link' ); ?></p>
<?php endif;
