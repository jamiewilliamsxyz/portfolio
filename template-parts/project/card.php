<?php
$date       = get_field( 'jpt_date' );
$tech_stack = get_the_terms( get_the_ID(), 'jpt_technology' );
?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class( 'jpt-card' ); ?>">
	<div>
		<h5><?php the_title(); ?></h5>

		<?php if ( $date ) : ?>
			<p><?php echo esc_html( $date ); ?></p>
		<?php endif; ?>
	</div>

	<p><?php the_excerpt(); ?></p>

	<?php
	if ( ! is_wp_error( $tech_stack ) && ! empty( $tech_stack ) ) :
		?>
		<ul>
		<?php
		foreach ( $tech_stack as $tech ) :
			?>
			<li><?php echo esc_html( $tech->name ); ?></li>
			<?php
			endforeach;
		?>
		</ul>
		<?php
	endif;
	?>

	<a href="<?php the_permalink(); ?>">View Project ↗</a>
</article>