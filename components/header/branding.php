<?php
/**
 * Site branding template part
 *
 * Displays the site custom logo, title & description.
 *
 * @package adi
 * @since 1.0.0
 */
?>

<div id="site-branding">
	<?php
	the_custom_logo();
	get_template_part( 'components/header/branding/name' );
	get_template_part( 'components/header/branding/description' );
	?>
</div>
