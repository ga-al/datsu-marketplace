<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

  <header id="masthead" class="site-header">
  
    <div class="fixed-top bg-white">
      <nav class="navbar navbar-expand-lg d-lg-flex d-none py-2 py-lg-0">
        <div class="<?= bootscore_container_class(); ?> pe-md-2">
          <a class="fs-6 " href="#">
            <svg class="mb-1 me-2" width="16" height="16" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1674_1112)">
              <path d="M12.166 9.44C11.642 10.502 10.932 11.56 10.206 12.51C9.5173 13.4056 8.7809 14.2635 8 15.08C7.21908 14.2635 6.48268 13.4056 5.794 12.51C5.068 11.56 4.358 10.502 3.834 9.44C3.304 8.367 3 7.362 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5C13 7.362 12.695 8.367 12.166 9.44ZM8 16.5C8 16.5 14 10.814 14 6.5C14 4.9087 13.3679 3.38258 12.2426 2.25736C11.1174 1.13214 9.5913 0.5 8 0.5C6.4087 0.5 4.88258 1.13214 3.75736 2.25736C2.63214 3.38258 2 4.9087 2 6.5C2 10.814 8 16.5 8 16.5Z" fill="#6D6D6D"/>
              <path d="M8 8.5C7.46957 8.5 6.96086 8.28929 6.58579 7.91421C6.21071 7.53914 6 7.03043 6 6.5C6 5.96957 6.21071 5.46086 6.58579 5.08579C6.96086 4.71071 7.46957 4.5 8 4.5C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5C10 7.03043 9.78929 7.53914 9.41421 7.91421C9.03914 8.28929 8.53043 8.5 8 8.5ZM8 9.5C8.79565 9.5 9.55871 9.18393 10.1213 8.62132C10.6839 8.05871 11 7.29565 11 6.5C11 5.70435 10.6839 4.94129 10.1213 4.37868C9.55871 3.81607 8.79565 3.5 8 3.5C7.20435 3.5 6.44129 3.81607 5.87868 4.37868C5.31607 4.94129 5 5.70435 5 6.5C5 7.29565 5.31607 8.05871 5.87868 8.62132C6.44129 9.18393 7.20435 9.5 8 9.5Z" fill="#6D6D6D"/>
              </g>
              <defs>
              <clipPath id="clip0_1674_1112">
              <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
              </clipPath>
              </defs>
            </svg>Москва, ID 485883
          </a>
          <!-- Bootstrap 5 Nav Walker Main Menu -->
          <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
        </div>
      </nav>

      <nav id="nav-main" class="navbar navbar-expand-lg py-0">

        <div class="<?= bootscore_container_class(); ?> ps-xxl-2">
          <div class="row align-items-center w-100">
            <div class="col-11 col-md-4 col-xl-3">
              <!-- Navbar Brand -->
              <div class="mrk-logo my-lg-0 my-2">
                <a class="navbar-brand xs d-md-none ms-md-3" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-sm.svg" alt="logo" class="logo xs"></a>
                <a class="navbar-brand md d-none d-md-block" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo" class="logo md"></a>
                <a class="btn btn-primary d-flex align-items-center justify-content-center gap-2 text-nowrap" href="#" role="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"></path>
                  </svg>
                  Каталог
                </a>
              </div>
            </div>
            <div class="col-md-8 col-xl-9 pe-0">
              <div class="d-flex justify-content-end gap-3">
                <!-- Offcanvas Navbar -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
                  <div class="offcanvas-header">
                    <span class="h5 offcanvas-title text-primary"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body row flex-grow-0 gap-3">
                    
                    <a class="fs-6 d-lg-none" href="#">
                      <svg class="mb-1 me-2" width="16" height="16" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1674_1112)">
                        <path d="M12.166 9.44C11.642 10.502 10.932 11.56 10.206 12.51C9.5173 13.4056 8.7809 14.2635 8 15.08C7.21908 14.2635 6.48268 13.4056 5.794 12.51C5.068 11.56 4.358 10.502 3.834 9.44C3.304 8.367 3 7.362 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5C13 7.362 12.695 8.367 12.166 9.44ZM8 16.5C8 16.5 14 10.814 14 6.5C14 4.9087 13.3679 3.38258 12.2426 2.25736C11.1174 1.13214 9.5913 0.5 8 0.5C6.4087 0.5 4.88258 1.13214 3.75736 2.25736C2.63214 3.38258 2 4.9087 2 6.5C2 10.814 8 16.5 8 16.5Z" fill="#6D6D6D"/>
                        <path d="M8 8.5C7.46957 8.5 6.96086 8.28929 6.58579 7.91421C6.21071 7.53914 6 7.03043 6 6.5C6 5.96957 6.21071 5.46086 6.58579 5.08579C6.96086 4.71071 7.46957 4.5 8 4.5C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5C10 7.03043 9.78929 7.53914 9.41421 7.91421C9.03914 8.28929 8.53043 8.5 8 8.5ZM8 9.5C8.79565 9.5 9.55871 9.18393 10.1213 8.62132C10.6839 8.05871 11 7.29565 11 6.5C11 5.70435 10.6839 4.94129 10.1213 4.37868C9.55871 3.81607 8.79565 3.5 8 3.5C7.20435 3.5 6.44129 3.81607 5.87868 4.37868C5.31607 4.94129 5 5.70435 5 6.5C5 7.29565 5.31607 8.05871 5.87868 8.62132C6.44129 9.18393 7.20435 9.5 8 9.5Z" fill="#6D6D6D"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1674_1112">
                        <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                        </defs>
                      </svg>Москва, ID 485883
                    </a>
                    <!-- Top Nav 2 Widget -->
                    <?php if (is_active_sidebar('top-nav-2')) : ?>
                      <?php dynamic_sidebar('top-nav-2'); ?>
                    <?php endif; ?>

                    <!-- Bootstrap 5 Nav Walker Main Menu -->
                    <?php
                    wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container'      => false,
                      'menu_class'     => '',
                      'fallback_cb'    => '__return_false',
                      'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav d-lg-none px-3 %2$s">%3$s</ul>',
                      'depth'          => 2,
                      'walker'         => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                  </div>
                </div>
              
                <div class="header-actions d-md-flex d-none align-items-center gap-4 " style="margin-right: -7px;">

                  <!-- Top Nav Widget -->
                  <?php if (is_active_sidebar('top-nav')) : ?>
                    <?php dynamic_sidebar('top-nav'); ?>
                  <?php endif; ?>

                  <?php
                  if (class_exists('WooCommerce')) :
                    get_template_part('template-parts/header/actions', 'woocommerce');
                  else :
                    get_template_part('template-parts/header/actions');
                  endif;
                  ?>

                  <!-- Navbar Toggler -->
                  <button class="btn btn-outline-primary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                    <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
                  </button>

                </div><!-- .header-actions -->
              </div>
            </div> 
          </div>

        </div><!-- bootscore_container_class(); -->
          
      </nav><!-- .navbar -->

          

      <div class="container-xxl position-fixed bottom-0 d-block d-md-none bg-white py-3 px-2">
        <div class="header-actions d-flex align-items-center justify-content-between">

          <!-- Top Nav Widget -->
          <?php if (is_active_sidebar('top-nav')) : ?>
            <?php dynamic_sidebar('top-nav'); ?>
          <?php endif; ?>

          <?php
          if (class_exists('WooCommerce')) :
            get_template_part('template-parts/header/actions', 'woocommerce');
          else :
            get_template_part('template-parts/header/actions');
          endif;
          ?>

          <!-- Navbar Toggler -->
          <button class="btn btn-outline-primary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
            <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
          </button>

        </div><!-- .header-actions-fixed-bottom -->
      </div>
      <?php
      if (class_exists('WooCommerce')) :
        get_template_part('template-parts/header/top-nav-search-collapse', 'woocommerce');
      else :
        get_template_part('template-parts/header/top-nav-search-collapse');
      endif;
      ?>

    </div><!-- .fixed-top .bg-light -->

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->
