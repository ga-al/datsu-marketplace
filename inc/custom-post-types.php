<?php


function create_custom_post_type() {
    $labels = array(
        'name'               => _x( 'Инструкция', 'post type general name' ),
        'singular_name'      => _x( 'Инструкция', 'post type singular name' ),
        'menu_name'          => _x( 'Инструкции', 'admin menu' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'manual' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'manual', $args );
}
add_action( 'init', 'create_custom_post_type' );
