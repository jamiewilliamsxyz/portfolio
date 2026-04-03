<?php get_header(); ?>

<main>
	<section>
		<h3>About Me 👨‍💻</h3>
		<div>
			<?php get_template_part( 'template-parts/about-section/my-story' ); ?>
			<div>
				<?php
				get_template_part( 'template-parts/about-section/past-work' );
				get_template_part( 'template-parts/about-section/certifications' );
				get_template_part( 'template-parts/about-section/education' );
				get_template_part( 'template-parts/about-section/skills-and-tools' );
				?>
			</div>
		</div>
	</section>

	<section>

	</section>
</main>

<?php get_footer(); ?>