<?php

add_action('wp_ajax_me_arhive_sort_product', 'me_arhive_sort_product');
add_action('wp_ajax_nopriv_me_arhive_sort_product', 'me_arhive_sort_product');

function me_arhive_sort_product() {

    $sort = $_POST['sort'];
    $term_id = $_POST['term_id'];




    echo '';
    wp_die();
}