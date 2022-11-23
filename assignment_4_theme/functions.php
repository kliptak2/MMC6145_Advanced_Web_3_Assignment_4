<?php

//Adding stylesheets and javascript files

function custom_theme_scripts(){
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    //Can add additional bootstrap stylesheets. Look in css folder for options. See example below.
    //wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css');

    //Main CSS
    wp_enqueue_style ('main-styles', get_stylesheet_uri());

    //Javascript Files
    wp_enqueue_script ('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script ('custom-js' , get_stylesheet_directory_uri() , '/js/scripts.js');
}

add_action('wp_enqueue_scripts' , 'custom_theme_scripts');

//Adds Feature Images
add_theme_support('post-thumbnails');




//Custom Header Image
$custom_image_header = array(
    'width' => 500,
    'height' => 500,
    'uploads' => true
); //Can change these dimensions to match the size of your logo file

add_theme_support('custom-header', $custom_image_header);



//Featured Images
add_theme_support('post-thumbnails');



//Post Data Information
function post_data(){
    $archive_year  = get_the_time('Y');
    $archive_month = get_the_time('m');
    $archive_day   = get_the_time('d');
?>
    <p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a> | Published on: <a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
    <?php
}


//Add menus to our theme
function register_my_menus(){
    register_nav_menus(array(
        'main-menu'     => _('Main Menu'),
        'footer-middle' => _('Middle Footer Menu'),
    ));
}

add_action('init', 'register_my_menus');



/*===============================
  Pagination Links
=====================================*/
function pagination(){ //Can name function whatever you want
    global $wp_query;
  
    $big = 999999999; // need an unlikely integer
    $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
  
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
    ) );
}

/*===============================
  Creating Widget Areas
=====================================*/
function blank_widgets_init(){
    register_sidebar(array(
        'name'          => ('Sidebar Widget'),
        'id'            => 'sidebar-widget',
        'description'   => 'Area in the sidebar for content',
        'before_widget' => '<div class="sidebar-widget-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name'          => ('Footer Widget'),
        'id'            => 'footer-widget',
        'description'   => 'Area in footer for content',
        'before_widget' => '<div class="footer-widget-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
}

add_action('widgets_init', 'blank_widgets_init');

//For Assignment #4 - code to hide MAMP admin error message (or ignore bc it doesn't show on user end)
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

/*===============================
  Page Template ID
=====================================*/
function which_template_is_loaded(){
    if(is_super_admin()){
        global $template;
        print_r($template);
    }
}

?>