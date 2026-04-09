<?php
get_header();

$projects = jpt_get_projects() ?? null;
?>

<main>
	<?php if ( $projects->have_posts() ) : ?>
		<section>
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