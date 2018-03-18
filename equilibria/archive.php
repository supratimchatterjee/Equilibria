<?php
/**
 * The template for displaying archive pages
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
				<div class="uk-width-medium-4-10 uk-contrast">
					<div class="offset-caption uk-height-1-1">
						<div class="uk-width-7-10 uk-block">
							<?php the_archive_title( '<h2>', '</h2>' ); ?>
							<span>CATEGORIES:</span>
							<ul>
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
				<div class="uk-width-medium-6-10 ">
					<div class="offset-caption blog-parts uk-block-muted uk-block">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="uk-grid uk-grid-collapse uk-margin-bottom uk-position-relative">
							<div class="uk-width-medium-1-4 uk-padding-remove">
								<?php /* ?><img class="uk-width-5-6" src="<?php echo get_template_directory_uri(); ?>/asset/images/blog-image1.png" alt=""> <?php */ ?>
								<?php if(has_post_thumbnail()) : ?>
				                <?php the_post_thumbnail('thumbnail', array('class' => 'uk-width-5-6'));?>
				                <?php else: ?>
				                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Placeholder&w=134&h=129">
				                <?php endif; ?>
							</div>
							<div class="uk-width-medium-2-4">
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
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
