<?php $post_bg = get_sub_field('background_color-p_sli');?>
<?php $post_text_col = get_sub_field('text_color_p_lider');?>
<div class="uk-block-large uk-block-primary case-study" style="background-color:<?php echo $post_bg;?>; color:<?php echo $post_text_col;?>;" id="<?php the_sub_field('section_id_po');?>">
    <div class="uk-container uk-container-center uk-slidenav-position">
        <div class="uk-width-medium-8-10 uk-container-center">
            <h1 class="uk-margin-large-bottom uk-text-center"><?php the_sub_field('title_post');?></h1>
            <div class="uk-text-center-small" data-uk-slideset="{small: 1, medium: 3, large: 3}">
                <ul class="uk-grid uk-slideset">
                <?php $post_objs = get_sub_field('post_sl');?>
                <?php foreach ($post_objs as $post_obj):?>
                    <li class="uk-width-medium-1-3">
                        <div class="uk-width-9-10 uk-container-center">
                            <h4><?php echo $post_obj ->post_title; ?></h4>
                            <?php $trimcontent = apply_filters('the_content', $post_obj->post_content);
						   $shortcontent = wp_trim_words( $trimcontent, $num_words = 28, $more = '' );
						   echo '<p>' . $shortcontent . '</p>'; ?>
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