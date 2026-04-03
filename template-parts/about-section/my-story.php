<?php $my_story = jpt_get_about_data( 'my-story' ); ?>

<div>
	<h4>My Story</h4>
	
	<div>
		<?php foreach ( $my_story as $paragraph ) : ?>
			<p><?php echo wp_kses_post( $paragraph ); ?></p>
		<?php endforeach; ?>
	</div>
</div>
