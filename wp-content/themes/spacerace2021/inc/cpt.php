<?php
/**
* spacerace2021 Theme Custom Post Types
*
* @package spacerace2021
*/

function spacerace2021_cpt_init() {

    // Case Studies Post Type
    $careers_labels = array(
        'name'               => _x( 'Work', 'post type general name', 'spacerace2021' ),
        'singular_name'      => _x( 'Work', 'post type singular name', 'spacerace2021' ),
        'not_found'          => __( 'No work found.', 'spacerace2021' ),
        'not_found_in_trash' => __( 'No work found in Trash', 'spacerace2021' )
    );
    $careers_args = array(
        'labels'                => $careers_labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'work' ),
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 35,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-list-view',
        'taxonomies'            => array('category'),
        'supports'              => array( 'title', 'thumbnail', 'excerpt'),
    );
    register_post_type( 'Work', $careers_args );
}
add_action( 'init', 'spacerace2021_cpt_init' );
