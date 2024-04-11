<?php
  
  add_filter('admin_footer_text', 'true_change_admin_footer');
  // style and scripts
  add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
  function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

if (!function_exists('bootscore_sidebar_col_class')) {
  function bootscore_sidebar_col_class() {
    return "col-md-4 col-lg-3 order-first";
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

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 10);
