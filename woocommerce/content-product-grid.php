<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product-grid.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

// global $product;

$product_id = get_the_ID();
$product = wc_get_product( $product_id );
$product_sku = $product->get_sku();
$product_name = $product->get_name();
$product_slug = $product->get_slug();
$product_price = $product->get_price();
$product_sale_price = $product->get_sale_price();
$product_regular_price = $product->get_regular_price();
$product_link = get_permalink($product_id);
$image = wp_get_attachment_image_url( $product_id, 'medium'  );
if ( !$image ) {
	$image = get_stylesheet_directory_uri() . '/img/placeholder.png';
}
// $image = '';
// $product_name = $product->name;
// $product_name = $product->name;

// echo '<pre>';
// var_dump($product);
// echo '</pre>';
// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
  return;
}
?>

<div class="col-md-4 col-xl-3 mb-4">
  <div class="card border-0 h-100">
    <div class="card-kit-img">
      <div class="mrk-card-heart no-active"><?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?></div>
      <a href="<?php echo $product_url ?>"><img class="card-img-top" src="<?php echo $image; ?>" alt=""></a>
    </div>
    <div class="card-body d-flex flex-column h-100 px-lg-3 px-0">
      <a href="<?php echo $product_url ?>" class="card-title fw-medium text-dark fs-6 mb-4">
      <?php echo $product_name ?>
      </a>
      <div class="mt-auto">

      <?php if ( $product_sale_price ) { ?>
        <h3 class="text-primary fw-bold text-nowrap d-inline-block"><?php echo $product_sale_price . ' ' . get_woocommerce_currency_symbol(); ?></h3>
        <span class="text-decoration-line-through fs-5 ps-2"><?php echo $product_regular_price . ' ' . get_woocommerce_currency_symbol(); ?></span>
        <span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">
          <?php
            echo round(100 - ($product_sale_price / $product_regular_price * 100));
          ?>
          %
        </span>
      <?php } else { ?>
        <h3 class="text-primary fw-bold text-nowrap d-inline-block"><?php echo $product_regular_price . ' ' . get_woocommerce_currency_symbol(); ?></h3>
      <?php } ?>
      </div>
      <div class="mrk-cart">
        <div class="mrk-cart-quantity">
          <?php
            $me_add_to_cart = [
              "classes" => "btn btn-primary btn-order-kits w-100 ",
              "product_title" => $product_name,
              "product_id" => $product_id,
              "product_sku" => $product_sku,
            ];
            get_template_part( 'elements/button-add-to-cart', '', $me_add_to_cart );
          ?>
        </div>
      </div>
    </div>
  </div>
</div>