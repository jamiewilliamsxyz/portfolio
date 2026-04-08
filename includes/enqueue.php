<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'jpt_enqueue_scripts' );

function jpt_enqueue_scripts() {
	// Deregister jQuery
	wp_deregister_script( 'jquery' );

	$version      = wp_get_theme()->get( 'Version' );
	$template_uri = get_template_directory_uri();

	wp_enqueue_style(
		'jpt-style-css',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-main-css',
		$template_uri . '/assets/css/main.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'jpt-google-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap',
		array(),
		null
	);

	if ( is_front_page() ) {
		wp_enqueue_style(
			'jpt-front-page-css',
			$template_uri . '/assets/css/pages/front-page.css',
			array(),
			$version
		);
	}

	if ( is_single() ) {
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

	wp_enqueue_script(
		'jpt-animate-css',
		$template_uri . '/assets/js/animate.js',
		array(),
		$version,
		true // Remove if animations are delayed on page load
	);
}
