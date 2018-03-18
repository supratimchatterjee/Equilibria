<section class="site-banner" id="<?php the_sub_field('section_id_bans');?>">
    <div class="uk-block uk-block-secondary uk-padding-remove">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-large-4-10 uk-contrast">
                <div class="offset-caption uk-height-1-1 uk-flex uk-flex-middle">
                    <div class="uk-width-medium-7-10">
                        <h1><?php the_sub_field('left_title');?></h1>
                        <p><?php the_sub_field('left_description_bbi');?></p>
                        <?php if(have_rows('label_with_link_fin')):?>
                        <div class="">
                        <?php while(have_rows('label_with_link_fin')): the_row();?>
                            <a href="<?php the_sub_field('link_fin');?>" class="uk-display-block tm-banner-link uk-margin-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/logo-small.svg" data-uk-svg=""><span class="uk-text-middle uk-display-inline-block uk-width-4-5"><?php the_sub_field('label_fin');?></span></a>
                            <?php endwhile;?>
                        </div>  
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="uk-width-large-6-10 tm-banner-text" style="background:url('<?php the_sub_field('right_image');?>') no-repeat 0 0/ cover">
            <?php $overlay = get_sub_field('to_show_hover');?>
            <?php if ($overlay):?>
                        <div class="uk-overlay uk-text-center">
                            <img src="<?php the_sub_field('right_image');?>" alt="">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center uk-height-1-1">
                                <div class="uk-width-medium-6-10 uk-margin-large-bottom">
                                    <h1 class="uk-margin-large-bottom"><?php the_sub_field('heading_overlay');?></h1>
                                    <h4 class="uk-margin-large-bottom"><?php the_sub_field('subheading_overlay');?></h4>
                                    <div class="uk-text-left">
                                       <?php the_sub_field('hover_text_check');?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    
            <?php else:?>
                <img src="<?php the_sub_field('right_image');?>" alt="">
            <?php endif;?>
            </div>
        </div>
    </div>
</section>
