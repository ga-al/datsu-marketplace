<?php

add_action('wp_ajax_me_arhive_sort_product', 'me_arhive_sort_product');
add_action('wp_ajax_nopriv_me_arhive_sort_product', 'me_arhive_sort_product');

function me_arhive_sort_product() {

    $sort = $_POST['sort'];
    $term_id = $_POST['term_id'];




    echo '';
    wp_die();
}
add_filter( 'wpcss_popup_html', 'misha_filter_function', 10, 2 );
function misha_filter_function($content, $url) {
    // var_dump( $content, $url );
    ob_start();
     ?>
        <span class="share-link d-flex align-items-center ms-3">
            <svg class="me-2" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5003 1.49995C13.1024 1.49995 12.7209 1.65798 12.4396 1.93929C12.1583 2.22059 12.0003 2.60212 12.0003 2.99995C12.0003 3.39777 12.1583 3.7793 12.4396 4.06061C12.7209 4.34191 13.1024 4.49995 13.5003 4.49995C13.8981 4.49995 14.2796 4.34191 14.5609 4.06061C14.8422 3.7793 15.0003 3.39777 15.0003 2.99995C15.0003 2.60212 14.8422 2.22059 14.5609 1.93929C14.2796 1.65798 13.8981 1.49995 13.5003 1.49995ZM11.0003 2.99995C11.0002 2.41338 11.2064 1.84546 11.5827 1.39556C11.9591 0.945654 12.4817 0.642411 13.059 0.538885C13.6364 0.435359 14.2318 0.538141 14.741 0.82925C15.2502 1.12036 15.6409 1.58126 15.8446 2.13131C16.0484 2.68135 16.0522 3.28553 15.8555 3.83812C15.6587 4.39071 15.274 4.85654 14.7685 5.15409C14.263 5.45165 13.669 5.56198 13.0903 5.4658C12.5117 5.36962 11.9853 5.07304 11.6033 4.62795L4.88527 7.74795C5.03971 8.23739 5.03971 8.76251 4.88527 9.25195L11.6033 12.3719C12.0071 11.9023 12.5709 11.5993 13.1855 11.5216C13.8 11.4439 14.4215 11.5972 14.9294 11.9516C15.4374 12.3061 15.7957 12.8365 15.9349 13.4401C16.0741 14.0436 15.9843 14.6774 15.6829 15.2185C15.3814 15.7596 14.8898 16.1696 14.3033 16.3689C13.7169 16.5682 13.0773 16.5427 12.5085 16.2974C11.9398 16.052 11.4824 15.6042 11.225 15.0408C10.9676 14.4774 10.9285 13.8385 11.1153 13.2479L4.39727 10.1279C4.0647 10.5155 3.62142 10.7919 3.12704 10.92C2.63267 11.0481 2.11093 11.0217 1.632 10.8444C1.15308 10.6671 0.739941 10.3474 0.448173 9.92824C0.156404 9.50909 0 9.01064 0 8.49995C0 7.98925 0.156404 7.49081 0.448173 7.07166C0.739941 6.65252 1.15308 6.33278 1.632 6.15547C2.11093 5.97816 2.63267 5.95177 3.12704 6.07986C3.62142 6.20795 4.0647 6.48438 4.39727 6.87195L11.1153 3.75195C11.0388 3.50862 11 3.25501 11.0003 2.99995V2.99995ZM2.50027 6.99995C2.10244 6.99995 1.72091 7.15798 1.43961 7.43929C1.1583 7.72059 1.00027 8.10212 1.00027 8.49995C1.00027 8.89777 1.1583 9.2793 1.43961 9.56061C1.72091 9.84191 2.10244 9.99995 2.50027 9.99995C2.89809 9.99995 3.27962 9.84191 3.56093 9.56061C3.84223 9.2793 4.00027 8.89777 4.00027 8.49995C4.00027 8.10212 3.84223 7.72059 3.56093 7.43929C3.27962 7.15798 2.89809 6.99995 2.50027 6.99995ZM13.5003 12.4999C13.1024 12.4999 12.7209 12.658 12.4396 12.9393C12.1583 13.2206 12.0003 13.6021 12.0003 13.9999C12.0003 14.3978 12.1583 14.7793 12.4396 15.0606C12.7209 15.3419 13.1024 15.4999 13.5003 15.4999C13.8981 15.4999 14.2796 15.3419 14.5609 15.0606C14.8422 14.7793 15.0003 14.3978 15.0003 13.9999C15.0003 13.6021 14.8422 13.2206 14.5609 12.9393C14.2796 12.658 13.8981 12.4999 13.5003 12.4999Z" fill="#262626"/>
            </svg>Поделиться
            <div class="share-buttons">
                <?php
                    $shareButtons = mps_share_buttons( ['type'=>'cart', 'url' => $url] );
                    if ( $shareButtons ) {

                        foreach ($shareButtons as $key => $btn) {
                            echo '<a href="'.$btn['url'].'"></a>';
                        }
                    }
                ?>
                <a href="<?php echo $url ?>" class="copypath"></a>
            </div>
        </span>
     <?php
    $content = ob_get_clean();
    return $content;
}

add_action('wp_ajax_me_FORM_page_home', 'me_FORM_page_home');
add_action('wp_ajax_nopriv_me_FORM_page_home', 'me_FORM_page_home');

function me_FORM_page_home() {
    $to = 'mixalev10a@gmail.com';
    $subj = 'Перезвонить';

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    $message = "Перезвонить \n Имя: $name \n Телефон: $phone";
    $res = wp_mail($to, $subj, $message, [
        'From: ME <mixalev10a@gmail.com>',
        'content-type: text/html',
    ]);

    // echo var_dump($res);
    wp_die();

}
add_action( 'wp_mail_failed',  'mail_failed' );

function mail_failed( $wp_error ) {
	error_log( print_r( $wp_error, true ) );
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


add_filter( 'woocommerce_before_checkout_billing_form', 'aaa' );
function aaa() {
    // echo '<style> #customer_details .col-2 {display: none;}</style>';

    // var_dump( wc_get_order( 178 ) );
}


// add_action( 'wp_footer', 'bbloomer_cart_refresh_update_qty' );
// function bbloomer_cart_refresh_update_qty() {
//    if ( is_cart() || ( is_cart() && is_checkout() ) ) {
//       wc_enqueue_js( "
//          $('div.woocommerce').on('change', 'input.qty', function(){
//             $('[name=\'update_cart\']').trigger('click');
//          });
//       " );
//    }
// }

add_filter( 'woocommerce_checkout_fields', 'me_del_fields_checkout' );
function me_del_fields_checkout( $fields ) {

    // foreach ($fields[ 'billing' ] as $key => $value) {
    //     $fields[ 'billing' ][$key][ 'required' ] = false;
    // }
    // foreach ($fields[ 'shipping' ] as $key => $value) {
    //     $fields[ 'shipping' ][$key][ 'required' ] = false;
    // }

    // var_dump('qqqq');
    // оставляем эти поля
    // unset( $fields[ 'billing' ][ 'billing_first_name' ] ); // имя
    // unset( $fields[ 'billing' ][ 'billing_last_name' ] ); // фамилия
    // unset( $fields[ 'billing' ][ 'billing_email' ] ); // емайл
    // удаляем все эти поля
    // $fields[ 'billing' ][ 'billing_email' ][ 'required' ] = false; // телефон
    $fields[ 'billing' ][ 'billing_phone' ][ 'required' ] = false; // емайл
    $fields[ 'billing' ][ 'billing_last_name' ][ 'required' ] = false; // емайл
    unset( $fields[ 'billing' ][ 'billing_company' ] ); // компания
    unset( $fields[ 'billing' ][ 'billing_country' ] ); // страна
    unset( $fields[ 'billing' ][ 'billing_address_1' ] ); // адрес 1
    unset( $fields[ 'billing' ][ 'billing_address_2' ] ); // адрес 2
    unset( $fields[ 'billing' ][ 'billing_city' ] ); // город
    unset( $fields[ 'billing' ][ 'billing_state' ] ); // регион, штат
    unset( $fields[ 'billing' ][ 'billing_postcode' ] ); // почтовый индекс
    unset( $fields[ 'order' ][ 'order_comments' ] ); // заметки к заказу

    // $fields[ 'billing' ]['billing_phone'][ 'required' ] = false;

    return $fields;

}




function me_rendom_category( $count = 1 ) {
    $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'show_count'   => 0,
        'pad_counts'   => 0,
        'hierarchical' => 1,
        'hide_empty'   => 1
    );
    $all_categories = get_categories( $args );

    return $all_categories;
}


function me_render_social() {
    $soc =  wp_nav_menu(array(
        'theme_location' => 'footer-social',
        'container'      => false,
        'menu_class'     => '',
        'echo'           => false,
        // 'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="block-social-link__list" class="nav %2$s">%3$s</ul>',
    ));
    return $soc;
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}