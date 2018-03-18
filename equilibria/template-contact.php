<?php
/**
Template Name: Contact
 */

get_header(); ?>
<div class="uk-block-large tm-contact">
    <div class="uk-container uk-container-center">
	    <div class="uk-width-medium-3-10 uk-container-center text_style uk-clearfix">
	        <div class="uk-width-large-7-10">
		        <h1 class="contact_title"><?php the_field('title_con');?></h1>
		        <p>PH:&nbsp;&nbsp;&nbsp;   <?php the_field('phone_number_con');?><br>
		            E:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <?php the_field('email_con');?><br>
		            M:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <?php the_field('mobile_con');?></p>
		        <div class="form-desc"><?php the_field('form_description_con');?></div>
		        <?php echo apply_filters('the_content', get_field('form_shortcode') ); ?>
	    	</div>
	    </div>
    </div>

    
</div>    
<?php
get_footer();
