<?php
/**
 * Site title template part
 *
 * Displays the site title in an appropriate tag, depending on the page..
 *
 * @package adi
 * @since 1.0.0
 */

$description = get_bloginfo( 'description', 'display' );

if ( $description || is_customize_preview() ) : ?>
	<p class="site-description"><?php echo $description; ?></p>
<?php endif;
