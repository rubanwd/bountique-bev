<?php get_header("blog"); ?>
    <section class="blog-content">
        <div class="blog-content--wrap">
            <h1>Blog</h1>
            <?php if ( have_posts() ) : ?>

            <div class="search-blog">
                <input class="form-control search-blog-input" id="blogSearchInput" type="text" placeholder="Search..">
            </div>

            <div class="blog-posts" id="blogDIV">
                
                <?php while ( have_posts() ) : the_post(); ?>
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
        </div>
    </section>
    
<?php get_footer("blog"); ?>  

<script>
    jQuery(document).ready(function($){
      $("#blogSearchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#blogDIV a").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

