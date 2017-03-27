<?php
/**
 * Theme Functions
 *
 * Defines the theme setup function and includes the theme hooks, template tags and other functions.
 *
 * @package adi
 * @since 1.0.0
 */

/**
 * Sets the theme's content width based on the theme's design.
 *
 * @since 1.0.0
 */
function adi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'adi_content_width', 690 );
}

add_action( 'after_setup_theme', 'adi_content_width' );

if ( ! function_exists( 'adi_setup' ) ) :
	/**
	 * Adds support for various theme features.
	 *
	 * Can be overridden in child theme by defining a custom 'adi_setup' function.
	 *
	 * @since 1.0.0
	 */
	function adi_setup() {
		/**
		 * Make theme ready for translation.
		 */
		load_theme_textdomain( 'adi' );

		/**
		 * Add support for various theme features.
		 */
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		) );
		add_theme_support( 'custom-logo', array(
			'width'		 => 300,
			'height'	 => 90,
			'flex-width' => true,
		) );

		/**
		 * Register navigation menus.
		 */
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'adi' ),
		) );

	}
endif;

add_action( 'after_setup_theme', 'adi_setup' );

/**
 * Enqueue theme styles & scripts.
 *
 * @since 1.0.0
 */
function adi_enqueue_scripts() {
	wp_enqueue_style( 'adi-fonts', apply_filters( 'adi_fonts_url', '' ) );
	wp_enqueue_style( 'adi-style', get_stylesheet_uri(), array( 'dashicons' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'adi-script', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'adi_enqueue_scripts' );

/**
 * Register customizer options.
 *
 * @since 1.0.0
 */
function adi_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'adi_accent_color', array(
		'default'			=> '#97CE68',
		'sanitize_callback'	=> 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'adi_accent_color',
		array(
			'label'	   => esc_html__( 'Accent Color', 'adi' ),
			'section'  => 'colors',
		)
	) );
}

add_action( 'customize_register', 'adi_customize_register' );

/**
 * Include theme files.
 */
include_once( get_template_directory() . '/includes/adi-template-tags.php' );
include_once( get_template_directory() . '/includes/adi-hooks.php' );
