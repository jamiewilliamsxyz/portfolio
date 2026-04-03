<?php

$template_dir = get_template_directory();

require_once $template_dir . '/includes/theme-setup.php';
require_once $template_dir . '/includes/enqueue.php';

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );

// Get About Section Data
function jpt_get_about_data( $key ) {
	static $data = null;

	if ( null === $data ) {
		$data = include get_template_directory() . '/includes/about-data.php';
	}

	return $data[ $key ] ?? null;
}
