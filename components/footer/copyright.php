<?php
/**
 * Copyright template part
 *
 * @package adi
 * @since 1.0.0
 */
?>

<p id="copyright">
	<?php
	esc_html_e( 'Copyright &copy;', 'adi' ) . ' ' . date_i18n( 'Y' );
	get_template_part( 'components/header/branding/link' );
	?>
</p>
