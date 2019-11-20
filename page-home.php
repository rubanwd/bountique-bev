<?php get_header(); ?>
    <section class="our-story" >
        <div class="our-story__content" id="our-story">
            <div class="our-story__content--image">
                <img src="<?php the_field('story_photo'); ?>">
            </div>
            <div class="our-story__content--text" >
                <h2><?php the_field('story_title'); ?></h2>
                <?php the_field('story_description'); ?>
            </div>
        </div>
    </section>
    <section class="our-wines" id="our-wines">
        <?php the_field('our_wines'); ?>
    </section>  
    <section class="our-services" id="our-services">
        <div class="wrap-container">
            <?php the_field('our_services_content'); ?>
        </div>
    </section>
    <section class="blog-content-home" id="blog">
        <div class="blog-content--wrap">
            <h1>Blog</h1>
            <?php 
                $args = array(
                    'posts_per_page' => '3',
                    'post_type' => 'post',
                    'order'   => 'DESC'
                    
                );
                $posts = new WP_Query( $args ); 
            ?>
            <?php if ( $posts->have_posts() ) : ?>
            <div class="blog-posts" id="blogDIV">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="box-post">
                        <div class="box-post__wrap"></div>
                        <?php the_post_thumbnail(); ?>
                        <span class="box-post-title">
                            <h2><?php the_title(); ?></h2>
                        </span>
                    </a>
                <?php endwhile; else: ?>
            </div>
            <p>Posts not found.</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="bev-button">
            <a href="<?php echo home_url( '/blog/' ) ?>">Read All</a>
        </div>
    </section>

    <section class="contact-us" id="contact-us">
        <div class="wrap-container">
            <?php the_field('contact_us'); ?>
        </div>
    </section>

<?php get_footer(); ?>  

