<?php

$product_name = isset( $args['product_title'] ) && $args['product_title'] ? $args['product_title'] : false ;
$product_id = isset( $args['product_id'] ) && $args['product_id'] ? $args['product_id'] : false;
$product_sku = isset( $args['product_sku'] ) && $args['product_sku'] ? $args['product_sku'] : false;

$classes = isset( $args['classes'] ) && $args['classes'] ? $args['classes'] : false;


?>

<a href="?add-to-cart=<?php echo $product_id; ?>" class="<?php echo $classes?> add_to_cart_button ajax_add_to_cart btn-order" product-title="<?php echo $product_name; ?>" data-product_id="<?php echo $product_id; ?>" data-product_sku="<?php echo $product_sku; ?>">
    <img class="d-inline-block pe-1 mx-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
    В корзину
</a>