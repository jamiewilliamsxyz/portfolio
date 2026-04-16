<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_front_page() ) {
	return;
}

return array(
	'my-story'         => array(
		"Hi, I'm Jamie - a <strong>Junior WordPress Developer</strong> based in Warwickshire, England, specialising in <strong>developing custom themes and plugins from scratch</strong>.",
		"I got into web development while studying Computing at college, learning through self-directed projects. Over time, I moved from React web development into a WordPress-focused stack, where I've been building custom themes, plugins and Gutenberg blocks using PHP, JavaScript, HTML and CSS.",
		'I have experience with <strong>ACF, WooCommerce, RankMath</strong> and other key plugins used in real-world projects. I also have practical experience building and managing sites on platforms such as GoHighLevel and Framer, including setting up Google Analytics for tracking and reporting.',
		'I design my projects in Figma and enjoy the problem-solving side of development, particularly <strong>performance and SEO optimisation</strong>.',
		"I'm currently looking for a Junior WordPress Developer role where I can contribute to real client work and continue developing my skills.",
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
			'link'  => 'https://jamiewilliams.me/wp-content/uploads/2026/04/Computing-Certificate.pdf',
		),
	),

	'skills-and-tools' => array(
		'WordPress',
		'JavaScript',
		'PHP',
		'HTML/CSS',
		'Tailwind',
		'ACF',
		'WooCommerce',
		'React',
		'Git/GitHub',
		'Figma',
	),
);
