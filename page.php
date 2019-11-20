<?php get_header("blog"); ?>
    <section class="page-content">
        <div class="page-content--wrap">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div><?php the_content(); ?></div>
                <?php endwhile; else: ?>
        <?php endif; ?>
        </div>
    </section>
<?php get_footer("blog"); ?>