<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'jpt_register_taxonomies' );

function jpt_register_taxonomies() {
	register_taxonomy(
		'jpt_technology',
		array(
			0 => 'jpt_project',
		),
		array(
			'labels'            => array(
				'name'                       => 'Technologies',
				'singular_name'              => 'Technology',
				'menu_name'                  => 'Technologies',
				'all_items'                  => 'All Technologies',
				'edit_item'                  => 'Edit Technology',
				'view_item'                  => 'View Technology',
				'update_item'                => 'Update Technology',
				'add_new_item'               => 'Add New Technology',
				'new_item_name'              => 'New Technology Name',
				'search_items'               => 'Search Technologies',
				'popular_items'              => 'Popular Technologies',
				'separate_items_with_commas' => 'Separate technologies with commas',
				'add_or_remove_items'        => 'Add or remove technologies',
				'choose_from_most_used'      => 'Choose from the most used technologies',
				'not_found'                  => 'No technologies found',
				'no_terms'                   => 'No technologies',
				'items_list_navigation'      => 'Technologies list navigation',
				'items_list'                 => 'Technologies list',
				'back_to_items'              => '← Go to technologies',
				'item_link'                  => 'Technology Link',
				'item_link_description'      => 'A link to a technology',
			),
			'description'       => 'Technologies and tools used in a project',
			'public'            => true,
			'show_in_menu'      => true,
			'show_in_nav_menus' => false,
			'show_in_rest'      => true,
			'show_tagcloud'     => false,
			'show_admin_column' => true,
			'rewrite'           => false,
		)
	);
}
