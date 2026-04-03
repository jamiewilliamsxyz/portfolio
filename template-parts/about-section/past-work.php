<?php $past_work = jpt_get_about_data( 'past-work' ); ?>

<div>
	<h4>Past Work</h4>

	<?php foreach ( $past_work['items'] as $item ) : ?>
		<div>
			<p><?php echo esc_html( $item['role'] ); ?></p>
			<p><?php echo esc_html( $item['dates'] ); ?></p>
		</div>
	<?php endforeach; ?>

	<a href="<?php echo esc_url( $past_work['link']['href'] ); ?>">
		<?php echo esc_html( $past_work['link']['text'] ); ?>
	</a>
</div>
