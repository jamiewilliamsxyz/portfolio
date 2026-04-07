<?php
$tech_stack   = get_the_terms( get_the_ID(), 'jpt_technology' );
$date         = get_field( 'jpt_date' );
$github_url   = get_field( 'jpt_github_url' );
$github_url_2 = get_field( 'jpt_github_url_2' );
$live_url     = get_field( 'jpt_live_url' );
$content      = get_field( 'jpt_content' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jpt-post' ); ?>>
	<section>
		<div class="jpt-post-title-date-container">
			<h1><?php the_title(); ?></h1>

			<?php if ( $date ) : ?>
				<p class="jpt-subtext"><?php echo esc_html( $date ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php
			the_post_thumbnail(
				'full',
				array(
					'class' => 'jpt-project-thumb-mobile',
				)
			);
			?>
		<?php endif; ?>

		<div>
			<div>
				<h2>Description</h2>
				<p><?php the_excerpt(); ?></p>
			</div>


			<?php
			if ( ! is_wp_error( $tech_stack ) && ! empty( $tech_stack ) ) :
				?>
				<div>
					<h2>Tech Stack</h2>

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
				<h2>Links</h2>
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

		<?php if ( has_post_thumbnail() ) : ?>
			<?php
			the_post_thumbnail(
				'full',
				array(
					'class' => 'jpt-project-thumb-desktop',
				)
			);
			?>
		<?php endif; ?>
	</section>

	<hr />

	<section>
		<div><?php echo wp_kses_post( $content ); ?></div>
	</section>
</article>