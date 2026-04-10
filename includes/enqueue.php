<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'jpt_enqueue_scripts' );

function jpt_enqueue_scripts() {
	$version      = wp_get_theme()->get( 'Version' );
	$template_uri = get_template_directory_uri();

	// Dequeue Gutenberg Styles
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' );

	// CSS Styles
	wp_enqueue_style(
		'jpt-style-css',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-global-css',
		$template_uri . '/assets/css/base/global.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-variables-css',
		$template_uri . '/assets/css/base/variables.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-typography-css',
		$template_uri . '/assets/css/base/typography.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-animations-css',
		$template_uri . '/assets/css/base/animations.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-header-css',
		$template_uri . '/assets/css/layout/header.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-footer-css',
		$template_uri . '/assets/css/layout/footer.css',
		array(),
		$version
	);

	// Page Styles
	if ( is_front_page() ) {
		wp_enqueue_style(
			'jpt-front-page-css',
			$template_uri . '/assets/css/pages/front-page.css',
			array(),
			$version
		);
	}

	if ( is_singular() ) {
		wp_enqueue_style(
			'jpt-single-css',
			$template_uri . '/assets/css/pages/single.css',
			array(),
			$version
		);
	}

	if ( is_404() ) {
		wp_enqueue_style(
			'jpt-404-css',
			$template_uri . '/assets/css/pages/404.css',
			array(),
			$version
		);
	}

	// JavaScript
	wp_enqueue_script(
		'jpt-animate-js',
		$template_uri . '/assets/js/animate.js',
		array(),
		$version,
		true // Remove if animations are delayed on page load
	);
}
