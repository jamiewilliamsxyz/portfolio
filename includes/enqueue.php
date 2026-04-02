<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'jpt_enqueue_scripts' );

function jpt_enqueue_scripts() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'jpt-style-css',
		get_stylesheet_uri(),
		array(),
		$version
	);
}
