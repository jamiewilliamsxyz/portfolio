<?php $past_work = jpt_get_about_data( 'past-work' ); ?>

<div class="jpt-about-subsection">
	<h3>Past Work</h3>

	<?php foreach ( $past_work['items'] as $item ) : ?>
		<div class="jpt-about-subsection-content">
			<p><?php echo esc_html( $item['role'] ); ?></p>
			<p class="jpt-subtext"><?php echo esc_html( $item['dates'] ); ?></p>
		</div>
	<?php endforeach; ?>

	<a href="<?php echo esc_url( $past_work['link']['href'] ); ?>" target="_blank" rel="noopener" >
		<?php echo esc_html( $past_work['link']['text'] ); ?>
	</a>
</div>
