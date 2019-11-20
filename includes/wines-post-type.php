<?php
add_action( 'init', 'wines_init' );

function wines_init() {
    $labels = array(
        'name'               => _x( 'Wines', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Wine', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Wines', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Wines', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'product', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Wine', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Wine', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Wine', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Wine', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Wines', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Wines', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Wines:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Wines found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Wines found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'wines' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title' ),
    );

    register_post_type( 'wines', $args );
}