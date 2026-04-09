<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get About Section Data
function jpt_get_about_data( $key ) {
	static $data = null;

	if ( null === $data ) {
		$data = include get_template_directory() . '/includes/about-data.php';
	}

	return $data[ $key ] ?? null;
}

// Get project posts
function jpt_get_projects() {
	return new WP_Query(
		array(
			'post_type'      => 'jpt_project',
			'posts_per_page' => -1,
			'no_found_rows'  => true,
		)
	);
}
