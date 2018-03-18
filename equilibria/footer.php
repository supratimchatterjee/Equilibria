<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Equilibria_Finance
 */

?>
<?php $logo_footer = get_field('logo_footer','option');?>
<?php $copyright = get_field('copyright','option');?>
<?php $contact_title = get_field('contact_title','option');?>
<?php $phone_number = get_field('phone_number','option');?>
<?php $email = get_field('email','option');?>
<?php $mail = get_field('mail_address','option');?>
<?php $linkedin_link = get_field ('linkedin_url','option'); ?>
<footer class="site-footer">
    <div class="uk-block">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-large uk-contrast">
                <div class="uk-width-medium-3-10">
                    <a title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>" href="<?php bloginfo('url') ?>/" class="tm-logo uk-text-left">
                    	<?php if($logo_footer): ?>
                        	<img alt="<?php bloginfo('name') ?>" src="<?php echo $logo_footer; ?>" data-uk-svg>
                    	<?php else: ?>
                    		<img alt="<?php bloginfo('name') ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/logo.svg" data-uk-svg>
                    	<?php endif; ?>
                    </a>
                </div>
                <div class="uk-width-medium-3-10 uk-margin-top">
                    <div class="uk-width-medium-9-10">
                        <?php if($contact_title): ?><h6 class="uk-margin-bottom uk-margin-small-top"><?php echo $contact_title; ?></h6><?php endif; ?>

                        <p>
                        	<?php if($email): ?>
                            EMAIL:<a class="uk-contrast" href="mailto:<?php echo $email; ?>"><span><?php echo $email; ?></span></a>
                            <br>
                            <?php endif; ?>
                             <?php if($phone_number): ?>
                           		 PHONE:<span><?php echo $phone_number; ?></span>
                            <br>
                        	<?php endif; ?>
                            <?php if($mail): ?>
                            MAIL:<span><?php echo $mail; ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="uk-width-medium-4-10 uk-margin-top tm-policy">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'menu_class' => 'footer_menu' ) ); ?>
                     <div class="social-icon-panel">
                            <a href="<?php echo $linkedin_link; ?>">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                </div>
                <div class="uk-width-medium-1-1 uk-margin-top uk-text-center copy-right"><?php if($copyright): ?><p><?php echo $copyright; ?></p><?php endif; ?></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
