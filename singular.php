<?php
/**
 * Singular template
 *
 * Displays a singular post or page.
 *
 * @package adi
 * @since 1.0.0
 */

get_header(); ?>

	<main id="site-main" role="main">
		<?php
		/**
		 * The WordPress loop.
		 */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'components/main/content', 'singular' );
		endwhile;
		?>
	</main>

<?php get_footer();
