<?php $skills_and_tools = jpt_get_about_data( 'skills-and-tools' ); ?>

<div>
	<h4>Skills & Tools</h4>

	<ul>
		<?php foreach ( $skills_and_tools as $item ) : ?>
			<li><?php echo esc_html( $item ); ?></li>
		<?php endforeach; ?>
	</ul>
</div>