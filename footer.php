<?php
/**
 * Footer template
 *
 * Displays the site footer and output the theme/plugin scripts.
 *
 * @package adi
 * @since 1.0.0
 */

			do_action( 'adi_after_main' ); ?>
		</div> <!-- .container -->
	</div> <!-- #site-content -->

	<?php do_action( 'adi_before_footer' ); ?>

	<footer id="site-footer">
		<div class="container">
			<?php
			/**
			 * Functions hooked into 'adi_footer' action.
			 *
			 * @hooked adi_copyright - 10
			 * @hooked adi_credits - 20
			 */
			do_action( 'adi_footer' ); ?>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
