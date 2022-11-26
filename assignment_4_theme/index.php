<?php get_header(); ?>
<div class="row blog">
    <main class="container col-md-9">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="individual-post">
                        <div class="featured image">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>

                        <div class="text-container">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php echo get_the_excerpt();?></p>
                        </div>
                    </div>

                <?php

                }//End while

                //Pagination
                pagination();
            }
        ?>
    </main>

    <aside class="col-md-3">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>