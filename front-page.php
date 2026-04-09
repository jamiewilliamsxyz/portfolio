<?php
get_header();

$projects = jpt_get_projects() ?? null;
?>

<main class="jpt-front-page">
	<section>
		<h2>About Me <span class="jpt-heading-emoji">👨‍💻</span></h2>

		<div class="jpt-about-container">
			<?php get_template_part( 'template-parts/about-section/my-story' ); ?>
			<hr class="jpt-divider-mobile" />
			<div class="jpt-about-col">
				<?php
				get_template_part( 'template-parts/about-section/past-work' );
				get_template_part( 'template-parts/about-section/certifications' );
				get_template_part( 'template-parts/about-section/education' );
				get_template_part( 'template-parts/about-section/skills-and-tools' );
				?>
			</div>
		</div>
	</section>

	<?php if ( $projects->have_posts() ) : ?>
		<hr />
		<section>
			<h2>Projects <span class="jpt-heading-emoji">📂</span></h2>

			<div>
				<?php
				while ( $projects->have_posts() ) :
					$projects->the_post();
					get_template_part( 'template-parts/project/card' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>