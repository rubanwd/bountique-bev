<?php get_header("single"); ?>
    <section class="single-content">
        <div class="single-content--wrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h4><?php echo get_the_date(); ?></h4>
                <p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer("single"); ?>  

