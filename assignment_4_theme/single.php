<?php get_header(); ?>
    <main class="container">
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


                            <p class="body-content"><?php echo get_the_content();?></p>

                        </div>
                    </div>

                <?php

                }
            }
        ?>
    </main>

    <aside clas="container">
        <h2>Animals</h2>
        <p>Read animal specific stories from our authors.</p>
        <div class="row">
        <?php
            $args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => 3,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'category_name'  => 'animals'
            );

            $query = new WP_Query($args);

            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post(); ?>

                    <div class="individual-post col-md-4">
                        <div class="featured image">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>

                        <div class="text-container">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php echo get_the_excerpt();?></p>
                        </div>
                    </div>
                <?php }
            }
        ?>
        </div>
    </aside>
<?php get_footer(); ?>