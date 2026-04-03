<?php $education = jpt_get_about_data( 'education' ); ?>

<div>
	<h4>Certifications</h4>

	<?php foreach ( $education as $item ) : ?>
		<div>
			<a href="<?php echo esc_url( $item['link'] ); ?>">
				<p><?php echo esc_html( $item['title'] ); ?></p>
			</a>

			<p><?php echo esc_html( $item['dates'] ); ?></p>
		</div>
	<?php endforeach; ?>
</div>