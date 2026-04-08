<?php $certifications = jpt_get_about_data( 'certifications' ); ?>

<div class="jpt-about-subsection jpt-fade-in-left">
	<h3>Certifications</h3>

	<?php foreach ( $certifications['items'] as $certification ) : ?>
		<div class="jpt-about-subsection-content">
			<a href="<?php echo esc_url( $certification['link'] ); ?>" target="_blank" rel="noopener">
				<p><?php echo esc_html( $certification['title'] ); ?></p>
			</a>

			<p class="jpt-subtext"><?php echo esc_html( $certification['issued'] ); ?></p>
		</div>
	<?php endforeach; ?>

	<a href="<?php echo esc_url( $certifications['link']['href'] ); ?>" target="_blank" rel="noopener" >
		<?php echo esc_html( $certifications['link']['text'] ); ?>
	</a>
</div>