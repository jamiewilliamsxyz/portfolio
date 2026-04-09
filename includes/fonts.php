<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', 'jpt_setup_fonts', 1 );

function jpt_setup_fonts() {
	$template_uri = get_template_directory_uri();

	// Inline Fonts
	?>
	<style>
		/* Playfair Display */
		@font-face {
			font-family: "Playfair Display";
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/playfair-display/PlayfairDisplay-Medium.woff2") format("woff2");
		}

		@font-face {
			font-family: "Playfair Display";
			font-style: italic;
			font-weight: 500;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/playfair-display/PlayfairDisplay-MediumItalic.woff2") format("woff2");
		}

		@font-face {
			font-family: "Playfair Display";
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/playfair-display/PlayfairDisplay-SemiBold.woff2") format("woff2");
		}

		@font-face {
			font-family: "Playfair Display";
			font-style: italic;
			font-weight: 600;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/playfair-display/PlayfairDisplay-SemiBoldItalic.woff2") format("woff2");
		}

		/* Source Sans 3 */
		@font-face {
			font-family: "Source Sans 3";
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-Regular.woff2") format("woff2");
		}

		@font-face {
			font-family: "Source Sans 3";
			font-style: italic;
			font-weight: 400;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-Italic.woff2") format("woff2");
		}

		@font-face {
			font-family: "Source Sans 3";
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-Medium.woff2") format("woff2");
		}

		@font-face {
			font-family: "Source Sans 3";
			font-style: italic;
			font-weight: 500;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-MediumItalic.woff2") format("woff2");
		}

		@font-face {
			font-family: "Source Sans 3";
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-SemiBold.woff2") format("woff2");
		}

		@font-face {
			font-family: "Source Sans 3";
			font-style: italic;
			font-weight: 600;
			font-display: swap;
			src: url("<?php echo $template_uri; ?>/assets/fonts/source-sans-3/SourceSans3-SemiBoldItalic.woff2") format("woff2");
		}
	</style>
	<?php

	if ( is_singular() ) {
		?>
		<style>
			/* Source Code Pro */
			@font-face {
				font-family: "Source Code Pro";
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-Regular.woff2") format("woff2");
			}

			@font-face {
				font-family: "Source Code Pro";
				font-style: italic;
				font-weight: 400;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-Italic.woff2") format("woff2");
			}

			@font-face {
				font-family: "Source Code Pro";
				font-style: normal;
				font-weight: 500;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-Medium.woff2") format("woff2");
			}

			@font-face {
				font-family: "Source Code Pro";
				font-style: italic;
				font-weight: 500;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-MediumItalic.woff2") format("woff2");
			}

			@font-face {
				font-family: "Source Code Pro";
				font-style: normal;
				font-weight: 600;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-SemiBold.woff2") format("woff2");
			}

			@font-face {
				font-family: "Source Code Pro";
				font-style: italic;
				font-weight: 600;
				font-display: swap;
				src: url("<?php echo $template_uri; ?>/assets/fonts/source-code-pro/SourceCodePro-SemiBoldItalic.woff2") format("woff2");
			}
		</style>
		<?php
	}

	// Preload Important Fonts
	$fonts = array(
		'/assets/fonts/source-sans-3/SourceSans3-Regular.woff2',
		'/assets/fonts/source-sans-3/SourceSans3-Medium.woff2',
		'/assets/fonts/source-sans-3/SourceSans3-SemiBold.woff2',
		'/assets/fonts/playfair-display/PlayfairDisplay-Medium.woff2',
		'/assets/fonts/playfair-display/PlayfairDisplay-SemiBold.woff2',
	);

	foreach ( $fonts as $font ) {
		echo '<link rel="preload" href="' . $template_uri . $font . '" as="font" type="font/woff2" crossorigin>';
	}
}