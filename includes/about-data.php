<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_front_page() ) {
	return;
}

return array(
	'my-story'         => array(
		"Hi, I'm Jamie - a WordPress and frontend developer from Rugby, England. I began learning web development through self-taught projects while studying Computing at college. After finishing college, I chose to continue developing my skills independently while building practical projects. Over time, I shifted my focus from React development to WordPress, where I found my niche.",
		"I mainly focus on <strong>maintaining, managing and developing WordPress sites, themes and plugins</strong>. I have experience creating themes, plugins and custom Gutenberg blocks from scratch. I'm also familiar with key WordPress plugins, including Advanced Custom Fields (ACF) and WooCommerce.",
		"I've supported and maintained a live website, built landing pages for marketing campaigns and worked with Google Analytics. This has given me practical experience contributing to real-world projects. At the moment, I'm focused on improving and expanding my WordPress developer skills and securing a full-time role where I can contribute to production-level websites.",
	),

	'past-work'        => array(
		'items' => array(
			array(
				'role'  => 'Website Support - Nokomis',
				'dates' => 'Jan 2024 - Present',
			),
			array(
				'role'  => 'Business Development Specialist - IntellPipe',
				'dates' => 'Aug 2023 - Jan 2024',
			),
		),

		'link'  => array(
			'text' => 'Download CV ↗',
			'href' => '',
		),
	),

	'certifications'   => array(
		'items' => array(
			array(
				'title'  => 'Frontend Developer Career Path',
				'issued' => 'Oct 2025',
				'link'   => 'https://scrimba.com/cert24zAwPPowRyTPtj4uekMN1WivxHdsgBCknbPW',
			),
			array(
				'title'  => 'Learn JavaScript',
				'issued' => 'Sep 2025',
				'link'   => 'https://scrimba.com/certificate-cert24zAwPPowRyTPtj4uekMN1ZhXCriD9hknsbPi',
			),
			array(
				'title'  => 'Learn Accessible Web Design',
				'issued' => 'Sep 2025',
				'link'   => 'https://scrimba.com/certificate-cert2JbLs3qgBFEBW3JgFPdxzLjtRA8Wfehzbi5j4o',
			),
		),


		'link'  => array(
			'text' => 'View all 16 certifications ↗ ',
			'href' => 'https://www.linkedin.com/in/jamiewilliamsxyz/details/certifications',
		),
	),

	'education'        => array(
		array(
			'title' => 'Level 3 Extended Diploma in Computing - WCG Rugby College',
			'dates' => 'Sep 2023 - Jun 2025',
			'link'  => '',
		),
	),

	'skills-and-tools' => array(
		'WordPress',
		'JavaScript',
		'HTML/CSS',
		'Tailwind',
		'ACF',
		'WooCommerce',
		'React',
		'Git/GitHub',
		'Figma',
	),
);
