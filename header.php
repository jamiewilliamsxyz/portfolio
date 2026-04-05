<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="top">
		<div>
			<?php if ( has_custom_logo() ) : ?>
				<div><?php the_custom_logo(); ?></div>
			<?php endif; ?>

			<?php if ( is_front_page() ) : ?>
				<h1><?php bloginfo( 'name' ); ?></h1>
			<?php else : ?>
				<p><?php bloginfo( 'name' ); ?></p>
			<?php endif; ?>
		</div>

		<h2><?php bloginfo( 'description' ); ?></h2>

		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'jpt-header-menu',
					'menu_class'     => 'jpt-header-menu',
					'fallback_cb'    => false,
					'container'      => false,
				)
			)
			?>
		</nav>
	</header>
	<hr />
