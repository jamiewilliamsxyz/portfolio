<?php get_header(); ?>

<main>
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/project/content' );
	endwhile;
	?>
</main>

<?php get_footer(); ?>