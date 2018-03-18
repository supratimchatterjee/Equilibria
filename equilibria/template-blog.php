<?php
/**
 * Template Name: Blog
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

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

	<section class="site-blog">
		<div class="uk-block uk-block-secondary uk-padding-remove">
			<div class="uk-grid uk-grid-collapse">
				<div class="uk-width-large-4-10 uk-contrast uk-position-fixed">
					<div class="offset-caption uk-height-1-1" data-uk-sticky="{media: 959}">
						<div class="uk-width-medium-7-10 uk-block">
							<?php the_field('page_title'); ?>
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
				<?php
					$args = array('post_type'=>'post', 'posts_per_page'=>-1 );
					$query = new WP_Query($args);
				?>
				<?php if ($query->have_posts()) : ?>
				<div class="uk-width-large-6-10 uk-block-muted">
					<div class="blog-parts uk-block uk-width-large-8-10 uk-container-center">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="uk-grid uk-grid-collapse uk-margin-bottom uk-position-relative" data-uk-margin="{cls:'uk-margin-top'}">
							<div class="uk-width-medium-1-4 uk-padding-remove">
								<?php /* ?><img class="uk-width-5-6" src="<?php echo get_template_directory_uri(); ?>/asset/images/blog-image1.png" alt=""> <?php */ ?>
								<?php if(has_post_thumbnail()) : ?>
				                <?php the_post_thumbnail('thumbnail', array('class' => 'uk-width-medium-5-6'));?>
				                <?php else: ?>
				                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=134&h=129">
				                <?php endif; ?>
							</div>
							<div class="uk-width-medium-2-4">
								<h4><?php the_title(); ?></h4>
							<?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 18, $more = '… ' );?>
                                <?php echo '<p>' . $shortexcerpt . '</p>';?>
							</div>
							<a class="uk-position-cover" href="<?php the_permalink(); ?>" title=""></a>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>

<?php endwhile;?>
<?php endif; ?>

<?php
get_footer();
