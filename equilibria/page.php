<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Equilibria_Finance
 */

get_header(); ?>

	<div id="primary" class="tm-intro-block uk-block-large uk-block-muted">
		<main id="main" class="uk-container uk-container-center" role="main">
			<div class="uk-width-medium-6-10 uk-container-center uk-margin-large-bottom uk-text-left">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
