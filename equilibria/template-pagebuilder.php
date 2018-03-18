<?php
/**
 * Template Name: Pagebuilder
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Equilibria_Finance
 */

get_header(); ?>

<?php if( have_rows('flexible_content') ): ?>
	<?php  while ( have_rows('flexible_content') ) : the_row(); ?>
		<?php get_template_part('partials/block',get_row_layout()); ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
