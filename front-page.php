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

	<hr />

	<section>
		<h3>Projects ✨</h3>

		<div>
			<?php
			$projects = new WP_Query(
				array(
					'post_type'      => 'jpt_project',
					'posts_per_page' => -1,
				)
			);

			if ( $projects->have_posts() ) :
				while ( $projects->have_posts() ) :
					$projects->the_post();
					get_template_part( 'template-parts/project/card' );
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>