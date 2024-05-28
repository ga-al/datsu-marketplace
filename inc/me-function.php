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
        <span class="share-link d-flex align-items-center">
            <div class="share-buttons">
                <?php
                    $shareButtons = mps_share_buttons( ['type'=>'cart', 'url' => $url] );
                    if ( $shareButtons ) {

                        foreach ($shareButtons as $key => $btn) {
                            echo '<a class="mps-btn-'.$btn['slug'].'" href="'.$btn['btn']['url'].'" target="_blank"></a>';

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



add_filter( 'wpcss_list_shortcode', function($content){
    $WPCleverWpcss = new WPCleverWpcss();


    if ( ! ( $key = get_query_var( 'wpcss_id' ) ) ) {
        return '';
    }

    $url_raw = $WPCleverWpcss->get_url( $key );
    $url     = urlencode( $url_raw );
    $cart    = $WPCleverWpcss->get_setting( 'cart_' . $key );

    if ( empty( $cart ) || ! isset( $cart['cart'] ) ) {
        return '';
    }

    ob_start();
    ?>
    <form method="post" action="">
        <table class="wpcss-products shop_table shop_table_responsive cart woocommerce-cart-form__contents">
            <thead>
            <tr>
                <?php if ( $WPCleverWpcss->get_setting( 'add_selected', 'yes' ) === 'yes' ) { ?>
                    <th class="product-checkbox">
                        <input type="checkbox" class="wpcss-checkbox-all" checked/>
                    </th>
                <?php } ?>
                <th class="product-thumbnail">&nbsp;</th>
                <th class="product-name"><?php echo $WPCleverWpcss->localization( 'column_product', esc_html__( 'Product', 'wpc-share-cart' ) ); ?></th>
                <th class="product-price"><?php echo $WPCleverWpcss->localization( 'column_price', esc_html__( 'Price', 'wpc-share-cart' ) ); ?></th>
                <th class="product-quantity"><?php echo $WPCleverWpcss->localization( 'column_quantity', esc_html__( 'Quantity', 'wpc-share-cart' ) ); ?></th>
                <th class="product-subtotal"><?php echo $WPCleverWpcss->localization( 'column_subtotal', esc_html__( 'Subtotal', 'wpc-share-cart' ) ); ?></th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ( $cart['cart'] as $cart_item_key => $cart_item ) {
                $product_id = $cart_item['product_id'];
                $_product   = wc_get_product( $product_id );
                $link       = $WPCleverWpcss->get_setting( 'link', 'yes' );

                if ( $_product && $_product->exists() && ( $cart_item['quantity'] > 0 ) && apply_filters( 'wpcss_item_visible', true, $cart_item ) ) {
                    $product_permalink = $_product->is_visible() ? $_product->get_permalink() : ''; ?>
                    <tr class="woocommerce-cart-form__cart-item">
                        <?php if ( $WPCleverWpcss->get_setting( 'add_selected', 'yes' ) === 'yes' ) { ?>
                            <td class="product-checkbox">
                                <?php
                                if ( isset( $cart_item['woosb_parent_id'] ) || isset( $cart_item['wooco_parent_id'] ) || isset( $cart_item['woofs_parent_id'] ) || isset( $cart_item['woobt_parent_id'] ) ) {
                                    // don't add these special products
                                    echo '';
                                } else {
                                    echo '<input type="checkbox" class="wpcss-checkbox" name="wpcss-products[]" value="' . esc_attr( $cart_item_key ) . '" checked/>';
                                }
                                ?>
                            </td>
                        <?php } ?>
                        <td class="product-thumbnail">
                            <?php
                            $thumbnail = apply_filters( 'wpcss_cart_item_thumbnail', apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key ), $cart_item, $cart_item_key );

                            if ( ! $product_permalink || $link === 'no' ) {
                                echo $thumbnail;
                            } else {
                                printf( '<a href="%s" ' . ( $link === 'yes_popup' ? 'class="woosq-btn" data-id="' . $product_id . '"' : '' ) . ' ' . ( $link === 'yes_blank' ? 'target="_blank"' : '' ) . '>%s</a>', esc_url( $product_permalink ), $thumbnail );
                            }
                            ?>
                        </td>
                        <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'wpc-share-cart' ); ?>">
                            <?php
                            if ( ! $product_permalink || $link === 'no' ) {
                                echo wp_kses_post( apply_filters( 'wpcss_cart_item_name', apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ), $cart_item, $cart_item_key ) . '&nbsp;' );
                            } else {
                                echo wp_kses_post( apply_filters( 'wpcss_cart_item_name', apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" ' . ( $link === 'yes_popup' ? 'class="woosq-btn" data-id="' . $product_id . '"' : '' ) . ' ' . ( $link === 'yes_blank' ? 'target="_blank"' : '' ) . '>%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ), $cart_item, $cart_item_key ) );
                            }

                            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
                            do_action( 'wpcss_after_cart_item_name', $cart_item, $cart_item_key );

                            // Meta data.
                            echo wc_get_formatted_cart_item_data( $cart_item );

                            // Backorder notification.
                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'wpc-share-cart' ) . '</p>', $product_id ) );
                            }
                            ?>
                        </td>
                        <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'wpc-share-cart' ); ?>">
                            <?php echo apply_filters( 'wpcss_cart_item_price', apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $cart_item['data'] ), $cart_item, $cart_item_key ), $cart_item, $cart_item_key ); ?>
                        </td>
                        <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'wpc-share-cart' ); ?>">
                            <?php echo apply_filters( 'wpcss_cart_item_quantity', $cart_item['quantity'], $cart_item, $cart_item_key ); ?>
                        </td>
                        <td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'wpc-share-cart' ); ?>">
                            <?php echo apply_filters( 'wpcss_cart_item_subtotal', apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $cart_item['data'], $cart_item['quantity'] ), $cart_item, $cart_item_key ), $cart_item, $cart_item_key ); ?>
                        </td>
                    </tr>
                    <?php
                }
            } ?>
            <tr>
                <?php if ( $WPCleverWpcss->get_setting( 'add_selected', 'yes' ) === 'yes' ) { ?>
                    <td class="product-checkbox">
                        <input type="checkbox" class="wpcss-checkbox-all" checked/>
                    </td>
                <?php } ?>
                <td colspan="5">
                    <div class="wpcss-actions">
                        <?php wp_nonce_field( 'wpcss_add_products', 'wpcss-security' ); ?>
                        <input type="hidden" name="wpcss-key" value="<?php echo esc_attr( $key ); ?>"/>
                        <?php if ( $WPCleverWpcss->get_setting( 'add_selected', 'yes' ) === 'yes' ) { ?>
                            <button type="submit" class="button wpcss-add-selected" name="wpcss-action" value="selected"><?php echo $WPCleverWpcss->localization( 'selected', esc_html__( 'Add selected products to cart', 'wpc-share-cart' ) ); ?></button>
                        <?php }

                        if ( $WPCleverWpcss->get_setting( 'add_all', 'yes' ) === 'yes' ) { ?>
                            <button type="submit" class="button wpcss-add-all" name="wpcss-action" value="all"><?php echo $WPCleverWpcss->localization( 'restore', esc_html__( 'Restore cart', 'wpc-share-cart' ) ); ?></button>
                        <?php } ?>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <div class="wpcss-share-actions">
        <?php
        echo $WPCleverWpcss->share_links( $url );

        if ( $WPCleverWpcss->get_setting( 'page_copy', 'yes' ) === 'yes' ) {
            echo '<div class="wpcss-copy">';
            echo '<span class="wpcss-copy-label">' . $WPCleverWpcss->localization( 'share_link', esc_html__( 'Share link:', 'wpc-share-cart' ) ) . '</span>';
            echo '<span class="wpcss-copy-url"><input id="wpcss_copy_url" type="url" value="' . $url_raw . '" readonly/></span>';
            echo '<span class="wpcss-copy-btn"><input id="wpcss_copy_btn" type="button" value="' . $WPCleverWpcss->localization( 'copy_button', esc_html__( 'Copy', 'wpc-share-cart' ) ) . '"/></span>';
            echo '</div>';
        }
        ?>
    </div>

    <?php

    $content = ob_get_contents();
    ob_get_clean();
    return $content;
});