<?php $skills = jpt_get_about_data( 'skills-and-tools' ); ?>

<div>
	<h4>Skills & Tools</h4>

	<div>
		<?php foreach ( $skills as $skill ) : ?>
			<span><?php echo esc_html( $skill ); ?></span>
		<?php endforeach; ?>
	</div>
</div>