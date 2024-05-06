<?php

  // add_filter('admin_footer_text', 'true_change_admin_footer');
  // style and scripts
  add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
  function bootscore_child_enqueue_styles() {

    // style.css
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Compiled main.css
    $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);
    wp_enqueue_style('me-style', get_stylesheet_directory_uri() . '/css/me_style.css');

    // custom.js
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
    wp_enqueue_script('me-sctipts', get_stylesheet_directory_uri() . '/js/me_sctipts.js', false, '', true);
  }


if (!function_exists('bootscore_sidebar_col_class')) {
  function bootscore_sidebar_col_class() {
    return "col-md-4 col-lg-3 order-first";
  }
}

if (!function_exists('bootscore_sidebar_offcanvas_class')) {
  function bootscore_sidebar_offcanvas_class() {
    return "offcanvas-lg offcanvas-end";
  }
}

if (!function_exists('bootscore_sidebar_toggler_class')) {
  function bootscore_sidebar_toggler_class() {
    return "d-md-none btn btn-outline-primary w-100 mb-md-4 mb-2 d-flex justify-content-between align-items-center";
  }
}

if (!function_exists('bootscore_widgets_init')) :

  function bootscore_widgets_init() {

    // Top Nav
    register_sidebar(array(
      'name'          => esc_html__('Top Nav', 'bootscore'),
      'id'            => 'top-nav',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="top-nav-widget ms-1 ms-md-2">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));

    // Top Nav 2
    // Adds a widget next to the Top Nav position but moves to offcanvas on <lg breakpoint
    register_sidebar(array(
      'name'          => esc_html__('Top Nav 2', 'bootscore'),
      'id'            => 'top-nav-2',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="top-nav-widget-2 col d-lg-flex align-items-lg-center mt-2 mt-lg-0">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));

    // Top Nav Search
    register_sidebar(array(
      'name'          => esc_html__('Top Nav Search', 'bootscore'),
      'id'            => 'top-nav-search',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="top-nav-search">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));

    // Sidebar
    register_sidebar(array(
      'name'          => esc_html__('Sidebar', 'bootscore'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 border-0">',
      'after_widget'  => '</section><hr>',
      'before_title'  => '<h2 class="widget-title card-header h5">',
      'after_title'   => '</h2>',
    ));

    // Top Footer
    register_sidebar(array(
      'name'          => esc_html__('Top Footer', 'bootscore'),
      'id'            => 'top-footer',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>'
    ));

    // Footer 1
    register_sidebar(array(
      'name'          => esc_html__('Footer 1', 'bootscore'),
      'id'            => 'footer-1',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h5">',
      'after_title'   => '</h2>'
    ));

    // Footer 2
    register_sidebar(array(
      'name'          => esc_html__('Footer 2', 'bootscore'),
      'id'            => 'footer-2',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h5">',
      'after_title'   => '</h2>'
    ));

    // Footer 3
    register_sidebar(array(
      'name'          => esc_html__('Footer 3', 'bootscore'),
      'id'            => 'footer-3',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h5">',
      'after_title'   => '</h2>'
    ));

    // Footer 4
    register_sidebar(array(
      'name'          => esc_html__('Footer 4', 'bootscore'),
      'id'            => 'footer-4',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h5">',
      'after_title'   => '</h2>'
    ));

    // Footer Info
    register_sidebar(array(
      'name'          => esc_html__('Footer Info', 'bootscore'),
      'id'            => 'footer-info',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));

    // 404 Page
    register_sidebar(array(
      'name'          => esc_html__('404 Page', 'bootscore'),
      'id'            => '404-page',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>'
    ));

  }

  add_action('widgets_init', 'bootscore_widgets_init');

endif;

/**
 * WooCommerce Breadcrumb
 */
if (!function_exists('bs_woocommerce_breadcrumbs')) :
  add_filter('woocommerce_breadcrumb_defaults', 'bs_woocommerce_breadcrumbs');
  function bs_woocommerce_breadcrumbs() {
    return array(
      'delimiter'   => '',
      'wrap_before' => "<nav aria-label='breadcrumb' class='wc-breadcrumb breadcrumb-scroller pb-2 px-xxl-1'>
      <ol class='breadcrumb mb-0'>",
      'wrap_after'  => '</ol>
      </nav>',
      'before'      => '<li class="breadcrumb-item">',
      'after'       => '</li>',
      // Remove "Home" and add Fontawesome house icon (_wc_breadcrumb.scss)
      'home'        => _x('Home', 'breadcrumb', 'woocommerce'),
      // 'home'        => ' ',
    );
  }
endif;

if (!function_exists('bootscore_container_class')) {
  function bootscore_container_class() {
    return "container-xxl";
  }
}

// Пример использования хука pre_get_search_query
add_filter( 'pre_get_search_query', 'custom_search_query' );
function custom_search_query( $search ) {
    // Изменяем содержимое переменной запроса поиска
    $search = 'custom search query';
    return $search;
}

// Выводим текст для главной страницы в хлебных крошках
add_filter('woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text');
function wcc_change_breadcrumb_home_text($defaults) {
  $defaults['home'] = _x('Home', 'breadcrumb', 'woocommerce');

  return $defaults;
}

add_action( 'woocommerce_product_options_advanced', 'rudr_product_field' );
function rudr_product_field(){

	echo '<div class="options_group">';
	woocommerce_wp_text_input(
		array(
			'id'      => 'product_link_video',
			'value'   => get_post_meta( get_the_ID(), 'product_link_video', true ),
			'label'   => 'Сылка видео',
			'desc_tip' => true,
			'description' => 'Вставьте сылку на видео',
		)
	);
	echo '</div>';

}
add_action( 'woocommerce_process_product_meta', 'rudr_save_field' );
function rudr_save_field( $id ){

	$super = isset( $_POST[ 'product_link_video' ] ) ? $_POST[ 'product_link_video' ] : "";
	update_post_meta( $id, 'product_link_video', $super );

}


// ME FUNCTIONS
// Walker Categoris Sidebar
require_once('inc/walker-categories-sidebar.php');

require_once('inc/me-function.php');


// Custom Create Vendor
function me_create_vendor() {
  if ( ! class_exists( 'YITH_Vendors_Frontend_Premium') ) return;

}


// Registration Form

add_action( 'woocommerce_register_form_start', 'truemisha_form_registration_fields', 25 );
function truemisha_form_registration_fields() {

  echo '<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="kind_of_name">Имя<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="billing_first_name" required id="kind_of_name" value="">
      </p>';

  echo '<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="kind_of_l_name">Фамилия<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="billing_last_name" required id="kind_of_l_name" value="">
      </p>';


  echo '<div class="clear"></div>';
  echo 'Стать продавцом';
  echo '<div class="clear"></div>';
  echo '<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
              <label for="vendor_name">Названия вашей компании</label>
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="vendor-name" id="vendor_name" value="">
        </p>';
  echo '<div class="clear"></div>';
  echo '<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
              <label for="vendor-telephone">Телефон</label>
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="vendor-telephone" id="vendor-telephone" value="">
        </p>';
  echo '<div class="clear"></div>';
  echo '<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
              <label for="vendor-location">Телефон</label>
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="vendor-location" id="vendor-location" value="">
        </p>';


	// чтобы всё не съехало, ведь у нас "на флоатах"
	echo '<div class="clear"></div>';

}

add_action( 'woocommerce_created_customer', 'truemisha_save_fields', 25 );

function truemisha_save_fields( $user_id ) {

	// сохраняем Имя
	if ( isset( $_POST[ 'billing_first_name' ] ) ) {
		update_user_meta( $user_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
		update_user_meta( $user_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
	}
	// сохраняем Фамилию
	if ( isset( $_POST[ 'billing_last_name' ] ) ) {
		update_user_meta( $user_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
		update_user_meta( $user_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	}

}
add_action( 'wp_enqueue_scripts', 'add_data_to_scripts' );
function add_data_to_scripts() {
  $userData = wp_get_current_user();
  $user = $userData->ID ? true : false;

	$data = [];
	if ( $userData->ID ) {
		$data['user'] = [
			'user_id' => $userData->ID,
			'user_nickname'=>$userData->nickname
		];
	} else {
		$data['user'] = false;
	}
    wp_add_inline_script('x1team-main', 'window.x1teamMainData = '.wp_json_encode( $data ), 'before');
}
