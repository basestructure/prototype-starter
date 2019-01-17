<?php
/**
 * Gutenberg theme support.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

//add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_gutenberg_frontend_styles' );
/**
 * Enqueues Gutenberg front-end styles.
 *
 * @since 2.7.0
 */
function genesis_sample_enqueue_gutenberg_frontend_styles() {

	$child_theme_slug = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'genesis-sample';

	wp_enqueue_style(
		'genesis-sample-gutenberg',
		get_stylesheet_directory_uri() . '/lib/gutenberg/front-end.css',
		array( $child_theme_slug ),
		CHILD_THEME_VERSION
	);

}

add_action( 'enqueue_block_editor_assets', 'genesis_sample_block_editor_styles' );
/**
 * Enqueues Gutenberg admin editor fonts and styles.
 *
 * @since 2.7.0
 */
function genesis_sample_block_editor_styles() {

	wp_enqueue_style(
		'genesis-sample-gutenberg-fonts',
		'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
		array(),
		CHILD_THEME_VERSION
	);

}

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue editor styles.
add_editor_style( '/lib/gutenberg/style-editor.css' );

// Adds support for block alignments.
add_theme_support( 'align-wide' );

// Make media embeds responsive.
add_theme_support( 'responsive-embeds' );

// Adds support for editor font sizes.
add_theme_support(
	'editor-font-sizes',
	array(
		array(
			'name'      => __( 'Tiny', 'setup-2721' ),
			'shortName' => __( 'T', 'setup-2721' ),
			'size'      => 12,
			'slug'      => 'tiny',
		),
		array(
			'name'      => __( 'XXXSmall', 'setup-2721' ),
			'shortName' => __( 'XXXS', 'setup-2721' ),
			'size'      => 14,
			'slug'      => 'xxxsmall',
		),
		array(
			'name'      => __( 'XXSmall', 'setup-2721' ),
			'shortName' => __( 'XXS', 'setup-2721' ),
			'size'      => 16,
			'slug'      => 'xxsmall',
		),
		array(
			'name'      => __( 'XSmall', 'setup-2721' ),
			'shortName' => __( 'XS', 'setup-2721' ),
			'size'      => 20,
			'slug'      => 'xsmall',
		),
		array(
			'name'      => __( 'Small', 'setup-2721' ),
			'shortName' => __( 'S', 'setup-2721' ),
			'size'      => 24,
			'slug'      => 'small',
		),
		array(
			'name'      => __( 'Medium', 'setup-2721' ),
			'shortName' => __( 'M', 'setup-2721' ),
			'size'      => 34,
			'slug'      => 'medium',
		),
		array(
			'name'      => __( 'Large', 'setup-2721' ),
			'shortName' => __( 'L', 'setup-2721' ),
			'size'      => 48,
			'slug'      => 'large',
		),
		array(
			'name'      => __( 'XLarge', 'setup-2721' ),
			'shortName' => __( 'XL', 'setup-2721' ),
			'size'      => 64,
			'slug'      => 'xlarge',
		),
	)
);

// Adds support for editor color palette.
add_theme_support(
	'editor-color-palette',
	array(
		array(
			'name'  => __( 'White', 'setup-2721' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Light gray', 'setup-2721' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		),
		array(
			'name'  => __( 'Medium gray', 'setup-2721' ),
			'slug'  => 'medium-gray',
			'color' => '#999',
		),
		array(
			'name'  => __( 'Dark gray', 'setup-2721' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		),
		array(
			'name'  => __( 'Black', 'setup-2721' ),
			'slug'  => 'black',
			'color' => '#000000',
		),
		array(
			'name'  => __( 'Red', 'setup-2721' ),
			'slug'  => 'red',
			'color' => '#cc0000',
		),
		array(
			'name'  => __( 'Orange', 'setup-2721' ),
			'slug'  => 'orange',
			'color' => '#ff7b00',
		),
		array(
			'name'  => __( 'Yellow', 'setup-2721' ),
			'slug'  => 'yellow',
			'color' => '#ffbb00',
		),
		array(
			'name'  => __( 'Green', 'setup-2721' ),
			'slug'  => 'green',
			'color' => '#66cc00',
		),
		array(
			'name'  => __( 'Violet', 'setup-2721' ),
			'slug'  => 'violet',
			'color' => '#b882ee',
		),
		array(
			'name'  => __( 'Blue', 'setup-2721' ),
			'slug'  => 'blue',
			'color' => '#0066cc',
		),
	)
);

add_action( 'after_setup_theme', 'genesis_sample_content_width', 0 );
/**
 * Set content width to match the “wide” Gutenberg block width.
 */
function genesis_sample_content_width() {

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound -- See https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/924
	$GLOBALS['content_width'] = apply_filters( 'genesis_sample_content_width', 1062 );

}
