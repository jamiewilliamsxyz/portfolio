<?php $certifications = jpt_get_about_data( 'certifications' ); ?>

<div>
	<h4>Certifications</h4>

	<?php foreach ( $certifications['items'] as $certification ) : ?>
		<div>
			<a href="<?php echo esc_url( $certification['link'] ); ?>">
				<p><?php echo esc_html( $certification['title'] ); ?></p>
			</a>

			<p><?php echo esc_html( $certification['issued'] ); ?></p>
		</div>
	<?php endforeach; ?>

	<a href="<?php echo esc_url( $certifications['link']['href'] ); ?>">
		<?php echo esc_html( $certifications['link']['text'] ); ?>
	</a>
</div>