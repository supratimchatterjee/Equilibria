<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Equilibria_Finance
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="site-blog">
		<div class="uk-block uk-block-secondary uk-padding-remove">
			<div class="uk-grid uk-grid-collapse">
				<div class="uk-width-large-4-10 uk-contrast">
					<div class="offset-caption uk-height-1-1">
						<div class="uk-width-medium-7-10 uk-block">
							<h3><?php the_title(); ?>
							<span class="subtitle"><?php the_field('subtitle'); ?></span></h3>
							<ul class="uk-list">
								<li><a href="<?php bloginfo('url') ?>/blog/">Blog Home</a></li>
							</ul>
							<span>CATEGORIES:</span>
							<ul class="uk-list">
							<?php  $terms = get_terms('category'); ?>
				          	<?php foreach ($terms as $term) :?>
				              <li><a href="<?php echo get_term_link( $term ); ?>" title=""><?php echo $term->name; ?></a></li>
				          	<?php endforeach;?>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="uk-width-large-6-10 tm-banner-text">
					<div class="">
						<?php /* ?><img class="uk-width-5-6" src="<?php echo get_template_directory_uri(); ?>/asset/images/blog-image1.png" alt=""> <?php */ ?>
						<?php if(has_post_thumbnail()) : ?>
		                <?php the_post_thumbnail('large', array('class' => 'uk-width-1-1'));?>
		                <?php else: ?>
		                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=134&h=129">
		                <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="tm-intro-block uk-block-large uk-padding-bottom-remove uk-block-muted tm-two-column">
			<div class="uk-container uk-container-center uk-text-center">
				<div class="uk-width-medium-6-10 uk-container-center uk-text-left uk-margin-large-bottom">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile;?>
<?php endif;?>

<?php get_footer();
