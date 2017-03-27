<?php
/**
 * Theme hooks
 *
 * Defines the hooks used in the theme.
 * The corresponding functions are defined in 'includes/adi-template-tags.php'.
 *
 * @package adi
 * @since 1.0.0
 */

/**
 * Site header hooks
 */
add_action( 'adi_header', 'adi_branding', 10 );
add_action( 'adi_header', 'adi_primary_menu', 20 );
add_action( 'adi_header', 'adi_hero', 30 );

/**
 * Site footer hooks
 */
add_action( 'adi_footer', 'adi_copyright', 10 );
add_action( 'adi_footer', 'adi_credits', 20 );

/**
 * Loop hooks
 */
add_action( 'adi_before_loop', 'adi_page_header', 10 );
add_action( 'adi_after_loop', 'adi_pagination', 10 );

/**
 * Index post hooks
 */
add_action( 'adi_post', 'adi_post_header', 10 );
add_action( 'adi_post', 'adi_post_content', 20 );
add_action( 'adi_post', 'adi_post_meta', 30 );

/**
 * Singular post hooks
 */
add_action( 'adi_after_singular_post', 'adi_post_navigation', 10 );
add_action( 'adi_after_singular_post', 'adi_post_comments', 20 );
