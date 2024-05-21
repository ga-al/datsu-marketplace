<?php

/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.7.0
 */

if (!defined('ABSPATH')) {
  exit;
}
?>

<div class="row align-items-center mb-3">
  <!-- End in orderby.php -->
  <div class="col-8 col-md-7 col-xl-8">
    <p class="woocommerce-result-count">
      <?php
      if (1 === $total) {
        echo '1 товар';
      } elseif ($total <= $per_page || -1 === $per_page) {

        if ( $total < 5 ) {

          echo $total . ' товара';
        }

        if ( $total >= 5 ) {

          echo $total . ' товаров';
        }

      } else {
        $first = ($per_page * $current) - $per_page + 1;
        $last  = min($total, $per_page * $current);
        /* translators: 1: first result 2: last result 3: total results */
        printf(_nx('Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce'), $first, $last, $total);
      }
      ?>
    </p>

  </div><!-- col -->