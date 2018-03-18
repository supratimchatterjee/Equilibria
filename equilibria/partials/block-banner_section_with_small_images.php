
<?php $left_heading = get_sub_field('left_section_heading');?>
<?php $left_description = get_sub_field('left_section_description');?>
<section class="site-banner" id="<?php the_sub_field('section_id_ban');?>">
	<div class="uk-block uk-block-secondary uk-padding-remove">
		<div class="uk-grid uk-grid-collapse">
			<div class="uk-width-large-4-10 uk-contrast">
				<div class="offset-caption uk-height-1-1 uk-flex uk-flex-middle">
					<div class="uk-width-medium-7-10 uk-width-9-10 tm-large-text">
						<?php if(!empty($left_heading)):?><h1 class="uk-text-large"><?php echo $left_heading;?></h1><?php endif;?>
						<?php if(!empty($left_description)):?><p><?php echo $left_description;?></p><?php endif;?>
						<?php if(have_rows('label_with_links_ho')):?>
                        <div class="">
                        <?php while(have_rows('label_with_links_ho')):the_row();?>
							<a href="<?php the_sub_field('link_ho');?>" class="uk-display-block tm-banner-link uk-margin-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/logo-small.svg" data-uk-svg=""><span class="uk-text-middle uk-display-inline-block uk-width-4-5"><?php the_sub_field('label_ho');?></span></a>
    					<?php endwhile;?>
						</div>	
                        <?php endif;?>
					</div>
				</div>
			</div>
			<div class="uk-width-large-6-10">
				<div class="uk-grid uk-grid-width-medium-1-3 uk-grid-collapse">
                <?php if(have_rows('small_images_with_hover_text')):?>
                <?php while(have_rows('small_images_with_hover_text')): the_row();?>
                <?php $before_image = get_sub_field('image_hom');?>
                <?php $before_image = wp_get_attachment_image_src($before_image, array(571, 575));
					$before_image = $before_image[0];?>
					<div class="uk-overlay uk-overlay-hover tm-overlay">
						<img src="<?php echo $before_image;?>" >
						<div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle">
							<div class="uk-width-medium-1-1">
								<h4><?php the_sub_field('hover_text_ho');?></h4>
								<?php the_sub_field('hover_text_description');?>
							</div>
						</div>
					</div>
				<?php endwhile;?>
                <?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>