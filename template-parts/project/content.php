<?php
$tech_stack   = get_the_terms( get_the_ID(), 'jpt_technology' );
$date         = get_field( 'jpt_date' );
$github_url   = get_field( 'jpt_github_url' );
$github_url_2 = get_field( 'jpt_github_url_2' );
$live_url     = get_field( 'jpt_live_url' );
$content      = get_field( 'jpt_content' );
$thumb_id     = get_post_thumbnail_id();
$thumb_url    = get_the_post_thumbnail_url( $thumb_id, 'full' );
$thumb_alt    = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class( 'jpt-post' ); ?>">
	<section>
		<div>
			<h3><?php the_title(); ?></h3>

			<?php if ( $date ) : ?>
				<p><?php echo esc_html( $date ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( $thumb_url ) : ?>
			<img
			class="jpt-project-thumb-mobile"
			src="<?php echo esc_url( $thumb_url ); ?>"
			alt="<?php echo esc_attr( $thumb_alt ); ?>"
			/>
		<?php endif; ?>

		<div>
			<div>
				<h4>Description</h4>
				<p><?php the_excerpt(); ?></p>
			</div>

			<?php
			if ( ! is_wp_error( $tech_stack ) && ! empty( $tech_stack ) ) :
				?>
				<div>
					<h4>Tech Stack</h4>

					<ul>
						<?php foreach ( $tech_stack as $tech ) : ?>
							<li><?php echo esc_html( $tech->name ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php
			endif;
			?>

			<div>
				<h4>Links</h4>
				<?php if ( $live_url ) : ?>
					<a href="<?php echo esc_url( $live_url ); ?>" target="_blank" rel="noopener">
						Live Site ↗
					</a>
				<?php endif; ?>
				
				<!-- Required field. No need to conditionally render link or links section -->
				<a href="<?php echo esc_url( $github_url ); ?>" target="_blank" rel="noopener">
					GitHub ↗
				</a>
				
				<?php if ( $github_url_2 ) : ?>
					<a href="<?php echo esc_url( $github_url_2 ); ?>" target="_blank" rel="noopener">
						GitHub 2 ↗
					</a>
				<?php endif; ?>
			</div>
		</div>

		<?php if ( $thumb_url ) : ?>
			<img
			class="jpt-project-thumb-desktop"
			src="<?php echo esc_url( $thumb_url ); ?>"
			alt="<?php echo esc_attr( $thumb_alt ); ?>"
			/>
		<?php endif; ?>
	</section>

	<hr />

	<section>
		<div><?php echo wp_kses_post( $content ); ?></div>
	</section>
</article>