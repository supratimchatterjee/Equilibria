<?php $bg_col = get_sub_field('background_color_test_slider');?>
<?php $text_col_sli = get_sub_field('text_color_t_slid');?>
<div class="uk-block-large" style="background-color:<?php echo $bg_col;?>;color:<?php echo $text_col_sli;?>;" id="<?php the_sub_field('section_id_t_slider');?>">
    <div class="uk-container uk-container-center uk-slidenav-position">
        <div class="uk-width-medium-8-10 uk-container-center">
            <h2 class="uk-margin-large-bottom uk-text-center"><?php the_sub_field('title_test');?></h2>
            <div class="client-testimonials uk-text-center-small" data-uk-slideset="{small: 1, medium: 3, large: 3}">
                <ul class="uk-grid uk-slideset">
          <?php $post_objects = get_sub_field('testimonial_slider');?>    
        <?php foreach( $post_objects as $post_object): ?>
        <?php $post_id = $post_object->ID; ?>
                    <li class="uk-width-medium-1-3"> 
                        <div class="uk-width-9-10 uk-container-center">
                            <?php echo apply_filters('the_content', $post_object->post_content); ?>
                            <h5><?php echo $post_object ->post_title;?>, <?php the_field('position',$post_id);?></h5>
                        </div>
                    </li>
                <?php endforeach;?>    
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
        </div>
    </div>
</div>