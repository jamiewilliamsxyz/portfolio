<?php $education = jpt_get_about_data( 'education' ); ?>

<div class="jpt-observe">
	<div class="jpt-about-subsection jpt-fade-in-left">
		<h3>Education</h3>

		<?php foreach ( $education as $item ) : ?>
			<div class="jpt-about-subsection-content">
				<a href="<?php echo esc_url( $item['link'] ); ?>" target="_blank" rel="noopener" >
					<p><?php echo esc_html( $item['title'] ); ?></p>
				</a>

				<p class="jpt-subtext"><?php echo esc_html( $item['dates'] ); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>