<?php $skills_and_tools = jpt_get_about_data( 'skills-and-tools' ); ?>

<div class="jpt-about-subsection">
	<h3>Skills & Tools</h3>

	<ul class="jpt-skills-and-tools">
		<?php foreach ( $skills_and_tools as $item ) : ?>
			<li><?php echo esc_html( $item ); ?></li>
		<?php endforeach; ?>
	</ul>
</div>