<?php
$class = $args['class'] ?? '';

if ( has_post_thumbnail() ) :
	the_post_thumbnail(
		'full',
		array(
			'class'         => $class,
			'loading'       => 'eager',
			'fetchpriority' => 'high',
			'decoding'      => 'sync',
		)
	);
endif;
