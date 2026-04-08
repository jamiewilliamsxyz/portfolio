<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="top">
		<?php if ( has_custom_logo() ) : ?>
			<div class="jpt-header-img-container"><?php the_custom_logo(); ?></div>
		<?php endif; ?>

		<div class="jpt-header-col">
			<?php if ( is_front_page() ) : ?>
				<h1>Jamie Williams <span class="jpt-heading-emoji">💻</span></h1>
			<?php else : ?>
				<p class="jpt-header-title">Jamie Williams <span class="jpt-heading-emoji">💻</span></p>
			<?php endif; ?>

			<p>WordPress & frontend developer</p>

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
		</div>
	</header>
	<hr />
