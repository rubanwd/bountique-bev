<?php

function exec_bev_scripts() {

	wp_enqueue_style('slick-style', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style('theme-style', get_template_directory_uri().'/css/main.css');

    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', '', '', true );
    wp_enqueue_script( 'il', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', '', '', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'exec_bev_scripts' );


function mytheme_logo() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_logo');


if (function_exists('add_theme_support')){
	add_theme_support('menus');
}

register_nav_menus ([
   'main-menu' => 'Main Menu'
]);

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Logo footer',
        'id' => 'logo_footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => 'Menu footer',
        'id' => 'menu_footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => 'Copyright footer',
        'id' => 'copyright_footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );



add_theme_support( 'post-thumbnails', array( 'post' ) );          



require_once( __DIR__ . '/includes/wines-post-type.php');
require_once( __DIR__ . '/includes/wines-slider-shortcode.php');