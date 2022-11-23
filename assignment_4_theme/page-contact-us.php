<?php
    /*  Template Name: Contact Us Page
        Template Post Type: Page
    */

    get_header(); 
?>
<main class="container contact">
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>

                <div class="contact-text">
                    <div>
                        <p><?php the_content();?></p>
                    </div>
                </div>


            <?php

            }
        }
    ?>
</main>
<?php get_footer(); ?>