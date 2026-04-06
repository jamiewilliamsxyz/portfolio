<?php $my_story = jpt_get_about_data( 'my-story' ); ?>

<div class="jpt-about-subsection">
	<h3>My Story</h3>
	
	<div class="jpt-my-story-content">
		<?php foreach ( $my_story as $paragraph ) : ?>
			<p><?php echo wp_kses_post( $paragraph ); ?></p>
		<?php endforeach; ?>
	</div>
</div>
