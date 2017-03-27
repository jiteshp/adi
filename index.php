<?php
/**
 * Index template
 *
 * Displays a list of blog posts. The default template used by the theme.
 *
 * @package adi
 * @since 1.0.0
 */

get_header(); ?>

	<main id="site-main" role="main">
		<?php
		if ( have_posts() ) :
			/**
			 * Functions hooked into 'adi_before_loop' action.
			 *
			 * @hooked adi_page_header - 10
			 */
			do_action( 'adi_before_loop' );

			/**
			 * The WordPress loop.
			 */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'components/main/content', get_post_format() );
			endwhile;

			/**
			 * Functions hooked into 'adi_after_loop' action.
			 *
			 * @hooked adi_pagination - 10
			 */
			do_action( 'adi_after_loop' );
		else :
			get_template_part( 'components/main/content', 'none' );
		endif;
		?>
	</main>

<?php get_footer();
