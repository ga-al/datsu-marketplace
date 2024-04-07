<?php

/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
  exit;
}

?>
<form role="search" method="get" class="searchform woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="input-group">
    <input class="search-field field form-control" type="search" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" placeholder="<?php echo esc_attr__( 'Искать товары или категории&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <label class="visually-hidden-focusable" for="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>"><?php esc_html_e('Search for:', 'woocommerce'); ?></label>
    <input type="hidden" name="post_type" value="product" />
    <button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" class="input-group-text btn btn-primary <?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ); ?>">
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
    <span class="visually-hidden-focusable">Search</span></button>
  </div>
</form>