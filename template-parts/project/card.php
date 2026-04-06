<?php
$date       = get_field( 'jpt_date' );
$tech_stack = get_the_terms( get_the_ID(), 'jpt_technology' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jpt-card' ); ?>>
	<div class="jpt-card-title-date-container">
		<h3><?php the_title(); ?></h3>

		<?php if ( $date ) : ?>
			<p class="jpt-subtext"><?php echo esc_html( $date ); ?></p>
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
			<li class="jpt-subtext"><?php echo esc_html( $tech->name ); ?></li>
			<?php
			endforeach;
		?>
		</ul>
		<?php
	endif;
	?>

	<a href="<?php the_permalink(); ?>">View Project ↗</a>
</article>