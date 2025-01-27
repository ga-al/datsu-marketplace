<?php

/**
 * Template part for displaying the header-actions if WooCommerce if installed
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 5.3.4
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>


<!-- Search toggler -->
<?php if (is_active_sidebar('top-nav-search')) : ?>
  <button class="btn btn-primary ms-md-2 top-nav-search-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1674_1146)">
      <path d="M11.7429 10.3434C12.7112 9.02206 13.1449 7.38386 12.9572 5.75652C12.7695 4.12918 11.9743 2.63271 10.7307 1.5665C9.48701 0.500289 7.88665 -0.0570284 6.24973 0.00604479C4.61282 0.0691179 3.06008 0.74793 1.90217 1.90668C0.744249 3.06542 0.0665484 4.61864 0.00464653 6.2556C-0.0572553 7.89256 0.501207 9.49253 1.56831 10.7354C2.6354 11.9783 4.13244 12.7724 5.75992 12.959C7.38739 13.1455 9.02528 12.7106 10.3459 11.7414H10.3449C10.3749 11.7814 10.4069 11.8194 10.4429 11.8564L14.2929 15.7064C14.4804 15.894 14.7348 15.9995 15 15.9996C15.2653 15.9997 15.5198 15.8944 15.7074 15.7069C15.895 15.5194 16.0005 15.265 16.0006 14.9997C16.0007 14.7345 15.8954 14.48 15.7079 14.2924L11.8579 10.4424C11.8221 10.4062 11.7837 10.3727 11.7429 10.3424V10.3434ZM12.0009 6.49937C12.0009 7.22164 11.8586 7.93684 11.5822 8.60413C11.3058 9.27142 10.9007 9.87773 10.39 10.3885C9.87926 10.8992 9.27295 11.3043 8.60566 11.5807C7.93837 11.8571 7.22317 11.9994 6.5009 11.9994C5.77863 11.9994 5.06343 11.8571 4.39614 11.5807C3.72885 11.3043 3.12253 10.8992 2.61181 10.3885C2.10109 9.87773 1.69596 9.27142 1.41956 8.60413C1.14316 7.93684 1.0009 7.22164 1.0009 6.49937C1.0009 5.04068 1.58036 3.64173 2.61181 2.61028C3.64326 1.57883 5.04221 0.999368 6.5009 0.999368C7.95959 0.999368 9.35853 1.57883 10.39 2.61028C11.4214 3.64173 12.0009 5.04068 12.0009 6.49937Z" fill="white"/>
      </g>
      <defs>
      <clipPath id="clip0_1674_1146">
      <rect width="16" height="16" fill="white"/>
      </clipPath>
      </defs>
    </svg>
    <span class="visually-hidden-focusable">Search</span>
  </button>
<?php endif; ?>

<!-- User toggler -->
<?php
if ( is_account_page() ) {
 // Do nothing
} else {


  if ( is_user_logged_in() ) {
    ?>
      <a href="" class="ms-md-2 border-0" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-user" aria-controls="offcanvas-user">
        <img class="d-block mx-auto mb-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/person-circle.svg" alt="">
        <span class="visually-focusable fw-medium text-nowrap">Аккаунт</span>
      </a>
    <?php
  } else {
    ?>
      <a href="" class="ms-md-2 border-0" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-user" aria-controls="offcanvas-user">
        <img class="d-block mx-auto mb-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/person-circle.svg" alt="">
        <span class="visually-focusable fw-medium text-nowrap">Войти</span>
      </a>
    <?php
  }
} ?>


<a href="/wishlist/" class="ms-md-2 border-0" >
  <img class="d-block mx-auto mb-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/heart.svg" alt="">
  <span class="visually-focusable fw-medium text-nowrap">Избранное</span>
</a>

<a href="/my-account/orders/" class="ms-md-2 border-0" >
  <img class="d-block mx-auto mb-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/handbag.svg" alt="">
  <span class="visually-focusable fw-medium text-nowrap">Заказы</span>
</a>

<!-- Mini cart toggler -->
<?php
if ( is_cart() ) {
 // Do nothing
} elseif ( is_checkout() ) { ?>
  <!-- Add a back-to-cart button -->
  <a class="btn btn-outline-secondary ms-1 ms-md-2 d-flex align-items-center" href="<?= wc_get_cart_url() ?>">
    <i class="fa-solid fa-arrow-left d-none d-md-inline me-2"></i><i class="fa-solid fa-bag-shopping"></i><span class="visually-hidden-focusable">Вернуться в корзину</span>
  </a>
  <?php
} else { ?>
  <!-- Add mini-cart toggler -->
  <a href="" class="ms-md-2 position-relative" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart">
  <img class="d-block mx-auto mb-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4.svg" alt="корзина"><span class="visually-focusable fw-medium text-nowrap">Корзина</span><br>
    <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
      $count = WC()->cart->cart_contents_count;
      ?>
      <span class="cart-content">
        <?php if ($count > 0) { ?>
          <?= esc_html($count); ?>
          <?php
        }
        ?></span>
    <?php } ?>
    </a>
<?php } ?>
