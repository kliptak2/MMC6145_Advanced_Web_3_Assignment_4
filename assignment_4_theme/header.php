<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

        <title><?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 logo-container">
                        <?php
                            //Display the logo if it's set, if not, display the site title
                            if(get_header_image() == ''){ ?>
                                <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name');?></a></h1>
                            <?php    
                            }else{ ?>
                                <a href="<?php echo get_home_url();?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="Company Logo"/></a>
                            <?php
                            }
                            ?>
                        
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'main-menu',
                            ));
                        ?>

                    </div>
                </nav>
            </div>

                    </div>
                </div>
            </div>
        </header>