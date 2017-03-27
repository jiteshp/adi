<?php
/**
 * Theme template tags
 *
 * Defines the template tags used in the theme.
 *
 * @package adi
 * @since 1.0.0
 */

/**
 * Displays site branding
 *
 * @since 1.0.0
 */
function adi_branding() {
	get_template_part( 'components/header/branding' );
}

/**
 * Displays the site's primary menu.
 *
 * @since 1.0.0
 */
function adi_primary_menu() {
	get_template_part( 'components/header/primary-menu' );
}

/**
 * Displays the site's hero area.
 *
 * @since 1.0.0
 */
function adi_hero() {
	if ( is_front_page() ) {
		get_template_part( 'components/header/hero' );
	}
}

/**
 * Displays the site's copyright.
 *
 * @since 1.0.0
 */
function adi_copyright() {
	get_template_part( 'components/footer/copyright' );
}

/**
 * Displays the site's credits.
 *
 * @since 1.0.0
 */
function adi_credits() {
	get_template_part( 'components/footer/credits' );
}

/**
 * Displays the page header on index, archive or search template.
 *
 * @since 1.0.0
 */
function adi_page_header() {
	if ( is_home() && ! is_front_page() ) {
		get_template_part( 'components/main/header' );
	} elseif ( is_archive() ) {
		get_template_part( 'components/main/header', 'archive' );
	} elseif ( is_search() ) {
		get_template_part( 'components/main/header', 'search' );
	}
}

/**
 * Displays the pagination on index, archive or search template.
 *
 * @since 1.0.0
 */
function adi_pagination() {
	the_posts_pagination();
}

/**
 * Displays a post's header.
 *
 * @since 1.0.0
 */
function adi_post_header() {
	get_template_part( 'components/main/post/header' );
}

/**
 * Displays a post's meta.
 *
 * @since 1.0.0
 */
function adi_post_meta() {
	if ( is_page() ) {
		return;
	}

	get_template_part( 'components/main/post/meta' );
}

/**
 * Displays a post's content.
 *
 * @since 1.0.0
 */
function adi_post_content() {
	get_template_part( 'components/main/post/content' );
}

/**
 * Displays a post's next/previous navigation.
 *
 * @since 1.0.0
 */
function adi_post_navigation() {
	if ( is_single() ) {
		echo '<nav id="post-nav" role="navigation">' . the_post_navigation() . '</nav>';
	}
}

/**
 * Displays a post's comments.
 *
 * @since 1.0.0
 */
function adi_post_comments() {
	if ( comments_open() || get_comments() ) {
		comments_template();
	}
}
