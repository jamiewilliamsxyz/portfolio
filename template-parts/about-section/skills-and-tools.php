<?php $skills = jpt_get_about_data( 'skills-and-tools' ); ?>

<div>
	<h3>Skills & Tools</h3>

	<div>
		<?php foreach ( $skills as $skill ) : ?>
			<span><?php echo esc_html( $skill ); ?></span>
		<?php endforeach; ?>
	</div>
</div>