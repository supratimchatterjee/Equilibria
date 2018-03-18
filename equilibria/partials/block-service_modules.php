<div class="uk-block-large uk-margin-small-bottom uk-margin-small-bottom" style="background-color:<?php the_sub_field('background_color_ser');?>; color:<?php the_sub_field('text_color_ser');?>;" id="<?php the_sub_field('section_id_ser');?>">
	<div class="uk-container uk-container-center uk-text-center">
		<div class="uk-width-medium-8-10 uk-container-center uk-margin-large-bottom">
    		<h1 class="uk-margin-large-bottom"><?php the_sub_field('title_ser');?></h1>
    		<div class="uk-text-left uk-margin-large-bottom">
    			<?php the_sub_field('content_ser');?>
    		</div>
            <div class="uk-grid uk-grid-width-medium-1-3 uk-grid-large" data-uk-grid-margin="">
            	<?php if(have_rows('modules_ser')):?>
                <?php while(have_rows('modules_ser')):the_row();?>
            	    <div class="tm-card">
                    <div class="uk-overlay uk-overlay-hover uk-flex uk-flex-middle uk-flex-center">
                       <h4><?php the_sub_field('title_ser');?></h4>
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    <?php the_sub_field('description_ser');?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>
                <?php /*?><div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="http://lorempixel.com/400/400/people/2/" alt="">
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    Natiusape pro que nonsequam adis asperi inctem nientias dolestius et ommolup tasitin estrum litatemque rehenis autas estianda sinulpa voloritibus, offc tecto quate optiani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="http://lorempixel.com/400/400/people/2/" alt="">
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    Natiusape pro que nonsequam adis asperi inctem nientias dolestius et ommolup tasitin estrum litatemque rehenis autas estianda sinulpa voloritibus, offc tecto quate optiani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><?php */?>
            </div>
			<div class="uk-grid uk-grid-width-medium-1-3 uk-grid-large">
                <?php /*?><div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="http://lorempixel.com/400/400/people/2/" alt="">
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    Natiusape pro que nonsequam adis asperi inctem nientias dolestius et ommolup tasitin estrum litatemque rehenis autas estianda sinulpa voloritibus, offc tecto quate optiani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="http://lorempixel.com/400/400/people/2/" alt="">
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    Natiusape pro que nonsequam adis asperi inctem nientias dolestius et ommolup tasitin estrum litatemque rehenis autas estianda sinulpa voloritibus, offc tecto quate optiani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="http://lorempixel.com/400/400/people/2/" alt="">
                        <div class="uk-overlay-panel tm-overlay-background uk-flex uk-flex-middle uk-text-left">
                            <div>
                                <p>
                                    Natiusape pro que nonsequam adis asperi inctem nientias dolestius et ommolup tasitin estrum litatemque rehenis autas estianda sinulpa voloritibus, offc tecto quate optiani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><?php */?>
            </div>
		</div>
	</div>
</div>