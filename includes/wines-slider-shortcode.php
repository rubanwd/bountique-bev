<?php

function wine_slider(){
	ob_start(); ?>
		<div class="slider-container wrap-container-slider">

            <img src="<?php bloginfo('template_url'); ?>/img/logo-bg.png" alt="" class="logo-bg">
            <?php 
                $args = array(
                    'posts_per_page' => '-1',
                    'post_type' => 'wines',
                    'order'   => 'DESC'
                );
                $wines = new WP_Query( $args ); 
            ?>
            <?php if ( $wines->have_posts() ) : ?>
                <img class="preloader" src="<?php bloginfo('template_url'); ?>/img/upload.gif" alt="Please Wait...">

                <div class="home-slider">
                    
                    <div class="controllers controllers-ex-bev">
                        <span class="prev"><img src="<?php bloginfo('template_url'); ?>/img/arrow-left.png"></span>
                        <span class="next"><img src="<?php bloginfo('template_url'); ?>/img/arrow-right.png"></span>
                    </div>

                    
                    <ul class="slider-bout-bev">
                        
                        <?php while ( $wines->have_posts() ) : $wines->the_post(); ?>
                        
                            <li class="product-item item">
                                <div>
                                    <?php if ( get_field('wine_photo') ) : ?>
                                        <img class="wine-photo" src="<?php the_field('wine_photo'); ?>">
                                        <img class="wine-shedow" src="<?php bloginfo('template_url'); ?>/img/shadow-botle.png">
                                    <?php else: ?>
                                        <img style="width: 150px;height: auto; margin-left: auto;margin-right: auto; opacity: 0.5; margin-top: 50px;" src="<?php bloginfo('template_url'); ?>/img/blank.jpg" alt="<?php the_title() ?>">
                                    <?php endif; ?>

                                    <?php if ( get_the_title() ) : ?>
                                        <h4><?php the_title() ?></h4>
                                    <?php else: ?>
                                        <h4>No title</h4>
                                    <?php endif; ?>
                                </div>
                            </li>
                            
                        <?php endwhile; ?>

                    <ul/>

                </div>

                

            <?php else: ?>
                <h4>Wines not founded...</h4>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div> <?php
	return ob_get_clean();
}
function wines_shortcode_init(){
	add_shortcode( 'wine_slider', 'wine_slider' );
}
add_action('init', 'wines_shortcode_init');