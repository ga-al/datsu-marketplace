<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

<div class="d-flex mb-5">
  <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?php echo $image ?>" alt="" style="width: 70px;"></div>
  <div class="flex-grow-1 py-0">
  <div class="row g-3">
    <div class="col-xl-8 col-lg-7">
    <a class="d-block fw-semibold fs-4" href="<?php echo $product_link; ?>"><?php echo $product_name; ?></a>5555
    </div>
    <div class="col-xl-4 col-lg-5">
    <div class="mt-auto text-lg-center">
      <h3 class="text-primary fw-bold text-nowrap d-inline-block"><?php echo $product_price; ?> ₽</h3>
      <?php if ( $product_sale_price ) { ?>
        <span class="text-decoration-line-through fs-5 ps-2"><?php echo $product_regular_price; ?> ₽</span>
      <?php } ?>
    </div>
    <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
      <div class="mrk-cart-quantity w-75">
        <?php
          $add_to_cart = [
            "classes" => "btn btn-primary btn-order d-flex justify-content-center w-100 ",
            "product_title" => $product_name,
            "product_id" => $product_id,
            "product_sku" => $product_sku,
          ];
          get_template_part( 'elements/button-add-to-cart', '', $add_to_cart );
        ?>
      </div>
      <!-- <div class="mrk-card-heart no-active ms-2"></div> -->
      <?php echo do_shortcode("[yith_wcwl_add_to_wishlist]")?>
    </div>
    </div>
  </div>
  </div>
</div>