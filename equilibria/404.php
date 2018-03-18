<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Equilibria_Finance
 */

get_header(); ?>

	<div id="primary" class="tm-intro-block uk-block-large uk-block-muted" style="background-color: #49c2a2; color: #fff;">
		<main id="main" class="uk-container uk-container-center uk-text-center" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 style="font-size: 40px; font-weight: 700; color: #fff" class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'equilibria' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'equilibria' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
