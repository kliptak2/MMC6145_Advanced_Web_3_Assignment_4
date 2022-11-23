<?php get_header(); ?>
    <main class="container">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>


                    <div class="row">
                            <p><?php echo get_the_content();?></p>
                    </div>

                <?php

                }
            }
        ?>
    </main>
<?php get_footer(); ?>