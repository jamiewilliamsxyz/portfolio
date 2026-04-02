<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', 'jpt_setup_theme' );

function jpt_setup_theme() {
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 102,
			'width'                => 102,
			'flex-width'           => true,
			'unlink-homepage-logo' => true,
		)
	);
}
