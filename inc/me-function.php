<?php

add_action('wp_ajax_me_arhive_sort_product', 'me_arhive_sort_product');
add_action('wp_ajax_nopriv_me_arhive_sort_product', 'me_arhive_sort_product');

function me_arhive_sort_product() {

    $sort = $_POST['sort'];
    $term_id = $_POST['term_id'];




    echo '';
    wp_die();
}


if (!function_exists('me_register_menu')) {
    function me_register_menu() {
    //   require_once('inc/class-bootstrap-5-navwalker.php');
      // Register Menus
      register_nav_menu('main-menu', 'Main menu');
      register_nav_menu('footer-about', 'О компании');
      register_nav_menu('footer-buyers', 'Покупателям');
      register_nav_menu('footer-partners', 'Партнерам');
      register_nav_menu('footer-social', 'Соц.сети');
    }
}
add_action('after_setup_theme', 'me_register_menu');



add_action('after_setup_theme', 'me_auto_create_pages');
function me_auto_create_pages() {
    $pages_create = get_option('me_auto_create_pages');
    $page_not_exists = [
        [
            'title' => 'О компании',
        ],
        [
            'title' => 'Новости',
        ],
        [
            'title' => 'Вакансии',
        ],
        [
            'title' => 'Реквизиты',
        ],
        [
            'title' => 'Условия продажи',
        ],
        [
            'title' => 'Доставка',
        ],
        [
            'title' => 'Оплата',
        ],
        [
            'title' => 'Возврат',
        ],
        [
            'title' => 'Вопрос-ответ',
        ],
        [
            'title' => 'Сотрудничество',
        ],
        [
            'title' => 'Логистика',
        ],
        [
            'title' => 'Условия партнерства',
        ],

    ];

    if ( ! $pages_create ) {

        foreach ($page_not_exists as $index => $pageData ) {
            $new_post = array(
                'post_title' => $pageData['title'],
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_type' => 'page',
            );
            wp_insert_post($new_post);
        }
        update_option( 'me_auto_create_pages', 1 );
    }


}

function get_current_vendor_id() {
    $product_vendor = yith_get_vendor(false, 'user');
    $product_vendor_id = $product_vendor ? $product_vendor->id : '-';
    return $product_vendor_id;
}


add_filter( 'woocommerce_checkout_fields', 'me_del_fields_checkout' );
function me_del_fields_checkout( $fields ) {

    foreach ($fields[ 'billing' ] as $key => $value) {
        $fields[ 'billing' ][$key][ 'required' ] = false;
    }
    foreach ($fields[ 'shipping' ] as $key => $value) {
        $fields[ 'shipping' ][$key][ 'required' ] = false;
    }

    // оставляем эти поля
    // unset( $fields[ 'billing' ][ 'billing_first_name' ] ); // имя
    // unset( $fields[ 'billing' ][ 'billing_last_name' ] ); // фамилия
    // unset( $fields[ 'billing' ][ 'billing_email' ] ); // емайл
    var_dump(';12321321');
    // удаляем все эти поля
    unset( $fields[ 'billing' ][ 'billing_phone' ] ); // телефон
    unset( $fields[ 'billing' ][ 'billing_company' ] ); // компания
    unset( $fields[ 'billing' ][ 'billing_country' ] ); // страна
    unset( $fields[ 'billing' ][ 'billing_address_1' ] ); // адрес 1
    unset( $fields[ 'billing' ][ 'billing_address_2' ] ); // адрес 2
    unset( $fields[ 'billing' ][ 'billing_city' ] ); // город
    unset( $fields[ 'billing' ][ 'billing_state' ] ); // регион, штат
    unset( $fields[ 'billing' ][ 'billing_postcode' ] ); // почтовый индекс
    unset( $fields[ 'order' ][ 'order_comments' ] ); // заметки к заказу

    return $fields;

}




function me_rendom_category( $count = 1 ) {

    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;

    $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'show_count'   => 0,
        'pad_counts'   => 0,
        'hierarchical' => 1,
        'hide_empty'   => 0
    );
    $all_categories = get_categories( $args );

    return $all_categories;
}