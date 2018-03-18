<?php $back_col = get_sub_field('background_colortest');?>
<?php $text_col = get_sub_field('text_color_test');?>
<div class="uk-block-large uk-block-primary client-testimonials uk-text-center-small" style="background-color:<?php echo $back_col;?>; color:<?php echo $text_col;?>;" id="<?php the_sub_field('section_id_test');?>">
			<div class="uk-container uk-container-center">
				<div class="uk-grid">
		 		<?php if( have_rows('modules') ): ?>
				<?php while( have_rows('modules') ): the_row(); 
				$module_title = get_sub_field('module_title');
				$module_content = get_sub_field('module_content');
				$module_link = get_sub_field('module_link');
				?>
					<div class="uk-width-medium-1-3">
						<div class="uk-width-medium-7-10 uk-container-center tm-cs">
							<p><?php echo $module_content; ?></p>
							<?php if($module_title): ?><h5>-<?php echo $module_title; ?></h5><?php endif; ?>
							<?php if($module_link): ?><a href="<?php echo $module_link; ?>" class="uk-position-cover"></a><?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>          
				</div>
			</div>
		</div>