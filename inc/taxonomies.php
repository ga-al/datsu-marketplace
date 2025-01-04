<?php


/*************  ✨ Codeium Command ⭐  *************/
/**
 * Registers custom taxonomies for the manual post type.
 *
 * Registers the file_type and file_category taxonomies for use with the manual post type.
 *
 * @since 1.0.0
 */
function register_manual_taxonomies() {
    // Register File Type Taxonomy
    $labels = array(
        'name' => 'Тип файла',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'file_type'),
    );

    register_taxonomy('file_type', array('manual'), $args);

    // Register File Category Taxonomy
    $labels = array(
        'name' => 'Категория файла',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'file_category'),
    );

    register_taxonomy('file_category', array('manual'), $args);
}
add_action('init', 'register_manual_taxonomies');
