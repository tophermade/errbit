<?php
## less css parsing. compiles to style.css
require_once 'gears/less.php/Autoloader.php';
Less_Autoloader::register();
$options = array(
    'output'      => __DIR__ . '/style.css',
    'cache_dir'   => __DIR__ . '/gears/less.php/cached/'
);
$to_cache = array( __DIR__ . '/style.less' => '' );
$css_file_name = Less_Cache::Get( $to_cache, $options );
Less_Cache::CleanCache();



## load up scripts
function load_up_js() {
 	wp_deregister_script( 'jquery' );

 	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', '', '1.7.1', true);
 	wp_enqueue_script('jquery');

 	wp_register_script('script', get_bloginfo('template_url').'/gears/js/script.js', '', '1.0', true );
 	wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_up_js');



## menus
function load_up_menus() {
    register_nav_menus(
        array(
            'main_nav' => 'Main Menu',
            'foot_nav' => "Foot Menu"
        )
    );
}
add_action( 'init', 'load_up_menus' );



## sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' =>           'sidebar',
        'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
        'after_widget' =>   '</div>',
        'before_title' =>   '<h3>',
        'after_title' =>    '</h3>',
    ));
}



## thumbs
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 320, 320, true );
add_image_size( 'instagram', 640, 640, true );



## html5
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );



## misc additions
add_theme_support( 'title-tag' );

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
add_post_type_support( 'post', 'post-formats' );