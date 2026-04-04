<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'jpt_register_post_types' );

function jpt_register_post_types() {
	register_post_type(
		'jpt_project',
		array(
			'labels'              => array(
				'name'                     => 'Projects',
				'singular_name'            => 'Project',
				'menu_name'                => 'Projects',
				'all_items'                => 'All Projects',
				'edit_item'                => 'Edit Project',
				'view_item'                => 'View Project',
				'view_items'               => 'View Projects',
				'add_new_item'             => 'Add New Project',
				'add_new'                  => 'Add New Project',
				'new_item'                 => 'New Project',
				'parent_item_colon'        => 'Parent Project:',
				'search_items'             => 'Search Projects',
				'not_found'                => 'No projects found',
				'not_found_in_trash'       => 'No projects found in the bin',
				'archives'                 => 'Project Archives',
				'attributes'               => 'Project Attributes',
				'insert_into_item'         => 'Insert into project',
				'uploaded_to_this_item'    => 'Uploaded to this project',
				'filter_items_list'        => 'Filter projects list',
				'filter_by_date'           => 'Filter projects by date',
				'items_list_navigation'    => 'Projects list navigation',
				'items_list'               => 'Projects list',
				'item_published'           => 'Project published.',
				'item_published_privately' => 'Project published privately.',
				'item_reverted_to_draft'   => 'Project reverted to draft.',
				'item_scheduled'           => 'Project scheduled.',
				'item_updated'             => 'Project updated.',
				'item_link'                => 'Project Link',
				'item_link_description'    => 'A link to a project.',
			),
			'description'         => 'Portfolio projects showcasing my web development work',
			'public'              => true,
			'exclude_from_search' => true,
			'show_in_nav_menus'   => false,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-portfolio',
			'supports'            => array(
				0 => 'title',
				1 => 'thumbnail',
				2 => 'custom-fields',
				3 => 'excerpt',
			),
			'rewrite'             => array(
				'slug'       => 'projects',
				'with_front' => false,
				'pages'      => false,
			),
			'delete_with_user'    => false,
		)
	);
}
