<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/include_fields', 'jpt_add_fields' );

function jpt_add_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_69d108680eeef',
			'title'                 => 'Project Details',
			'fields'                => array(
				array(
					'key'               => 'field_69d1244adc70b',
					'label'             => 'Date',
					'name'              => 'jpt_date',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => 'The date of release for the project',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => 30,
					'allow_in_bindings' => 0,
					'placeholder'       => 'Enter date here...',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_69d10c7d76919',
					'label'             => 'Live URL',
					'name'              => 'jpt_live_url',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => 'The URL to the live site/demo for this project',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'placeholder'       => 'Enter URL here...',
				),
				array(
					'key'               => 'field_69d10b2c76917',
					'label'             => 'GitHub URL',
					'name'              => 'jpt_github_url',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => 'The URL to the primary GitHub repository for this project',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'placeholder'       => 'Enter URL here...',
				),
				array(
					'key'               => 'field_69d10c5576918',
					'label'             => 'GitHub URL 2',
					'name'              => 'jpt_github_url_2',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => 'The URL to a secondary GitHub repository, if the project has more than one repo',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'placeholder'       => 'Enter URL here...',
				),
				array(
					'key'               => 'field_69d1086876916',
					'label'             => 'Content',
					'name'              => 'jpt_content',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => 'The main content for the project page',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'tabs'              => 'all',
					'toolbar'           => 'full',
					'media_upload'      => 1,
					'delay'             => 0,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => 'ACF fields for project links, screenshots and content',
			'show_in_rest'          => 0,
			'display_title'         => 'Project Details',
			'allow_ai_access'       => false,
			'ai_description'        => '',
		)
	);
}
