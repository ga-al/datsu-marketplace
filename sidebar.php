<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 5.3.3
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>
<div class="<?= bootscore_sidebar_col_class(); ?>">
  <aside id="secondary" class="widget-area ps-xxl-1">



  <?php

add_filter('get_terms', 'filter_hidden_categories', 10, 3);

function filter_hidden_categories($terms, $taxonomies, $args) {
    // Check if this is the desired taxonomy
    if (in_array('product_cat', (array) $taxonomies)) {
        // Filter terms where the ACF field 'hidden' is set to true
        $terms = array_filter($terms, function ($term) {
            $hidden = get_field('hide_cat', "product_cat_{$term->term_id}");
            return $hidden == 0; // Exclude terms where 'hide_cat' is true
        });
    }
    return $terms;
}


 $list_categories = array(

  'orderby'            => 'meta_value_num',
  'meta_key'           => 'order',
  'order'              => 'ASC',

	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'use_desc_for_title' => 0,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => false,
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'product_cat',
	'walker'             => new Custom_Walker_Category(),
	'hide_title_if_empty'=> false,
	'separator'          => '<br />',
);


  ?>

    <button class="<?= bootscore_sidebar_toggler_class(); ?>" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <?php esc_html_e('Открыть категории', 'bootscore'); ?> <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <div class="<?= bootscore_sidebar_offcanvas_class(); ?>" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
      <div class="offcanvas-header">
        <span class="h5 offcanvas-title text-primary" id="sidebarLabel"><?php esc_html_e('Категории', 'bootscore'); ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body flex-column">
        <!-- <?php dynamic_sidebar('sidebar-1'); ?> -->
        <?php
          wp_list_categories( $list_categories );
          remove_filter('get_terms', 'filter_hidden_categories');
        ?>
      </div>
    </div>

    <?php

      if ( is_archive() || is_category() || is_product_category() ) {
        // echo do_shortcode('[wcpf_filters id="130"]');


        ?>

        <div class="offcanvas-header filter-products">
          <span class="h5 offcanvas-title text-primary">Фильтр товаров</span>
        </div>
        <?php

        echo do_shortcode('[wcpf_filters id="258"]');
      }
    ?>

  </aside><!-- #secondary -->
</div>
