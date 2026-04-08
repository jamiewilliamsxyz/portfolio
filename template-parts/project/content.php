<?php
$tech_stack   = get_the_terms( get_the_ID(), 'jpt_technology' );
$date         = get_field( 'jpt_date' );
$github_url   = get_field( 'jpt_github_url' );
$github_url_2 = get_field( 'jpt_github_url_2' );
$live_url     = get_field( 'jpt_live_url' );
$content      = get_field( 'jpt_content' );

function jpt_project_link( $url, $text ) {
	if ( ! $url ) {
		return;
	}
	?>
	<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener">
		<?php echo esc_html( $text ); ?>
	</a>
	<?php
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jpt-post' ); ?>>
	<section class="jpt-post-hero">
		<div>
			<h1><?php the_title(); ?></h1>

			<?php if ( $date ) : ?>
				<p class="jpt-subtext"><?php echo esc_html( $date ); ?></p>
			<?php endif; ?>
		</div>

		<?php
		get_template_part(
			'template-parts/project/thumbnail',
			null,
			array(
				'class' => 'jpt-project-thumb-mobile',
			)
		);
		?>

		<div class="jpt-project-info">
			<div class="jpt-project-info-block jpt-fade-in-up">
				<h3>Description</h3>
				<p><?php the_excerpt(); ?></p>
			</div>

			<?php
			if ( ! is_wp_error( $tech_stack ) && ! empty( $tech_stack ) ) :
				?>
				<div class="jpt-project-info-block jpt-fade-in-up">
					<h3>Tech Stack</h3>

					<ul class="jpt-project-tech">
						<?php foreach ( $tech_stack as $tech ) : ?>
							<li><?php echo esc_html( $tech->name ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php
			endif;
			?>

			<div class="jpt-project-info-block jpt-fade-in-up">
				<h3>Links</h3>
				<?php
				jpt_project_link( $live_url, 'Live Site ↗' );
				jpt_project_link( $github_url, 'GitHub ↗' );
				jpt_project_link( $github_url_2, 'GitHub 2 ↗' );
				?>
			</div>
		</div>
	</section>

	<?php
	get_template_part(
		'template-parts/project/thumbnail',
		null,
		array(
			'class' => 'jpt-project-thumb-desktop',
		)
	);
	?>

	<hr />

	<section class="jpt-project-content">
		<div><?php echo wp_kses_post( $content ); ?></div>
	</section>
</article>