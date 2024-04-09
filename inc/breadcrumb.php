<?php

/**
 * Breadcrumb
 *
 * @package Bootscore
 * @version 5.3.3
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Breadcrumb
 */
if (!function_exists('the_breadcrumb')) :
  function the_breadcrumb() {

    if (!is_home()) {
      echo '<nav aria-label="breadcrumb" class="breadcrumb-scroller mb-4 mt-2 py-2 px-3">';
      echo '<ol class="breadcrumb mb-0">';
      echo '<li class="breadcrumb-item"><a href="' . home_url() . '">' . get_the_title() . '</a></li>';
      // display parent category names with links
      if (is_category() || is_single()) {
        $cat_IDs = wp_get_post_categories(get_the_ID());
        foreach ($cat_IDs as $cat_ID) {
          $cat = get_category($cat_ID);
          echo '<li class="breadcrumb-item"><a href="' . get_term_link($cat->term_id) . '">' . $cat->name . '</a></li>';
        }
      }
      // display current page name
      if (is_page() || is_single()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
      }
      echo '</ol>';
      echo '</nav>';
    }
  }

  add_filter('breadcrumbs', 'breadcrumbs');
endif;