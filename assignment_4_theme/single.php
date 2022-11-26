<?php get_header(); ?>
    <main class="container single">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="single-post">
                        <div class="featured image">
                            <?php
                                the_post_thumbnail('large');

                                //Display Author and Publish Date Links
                                post_data();
                            ?>
                        </div>

                        <div class="text-container">
                            <h2><?php the_title(); ?></h2>


                            <p class="body-content"><?php echo get_the_excerpt();?></p>

                        </div>
                    </div>

                <?php

                }
            }
        ?>
    </main>


<?php get_footer(); ?>