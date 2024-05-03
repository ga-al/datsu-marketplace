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

  $taxonomy     = 'product_cat';
  $orderby      = 'name';
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 0;      // 1 for yes, 0 for no
  $title        = '';
  $empty        = 0;

//   $args = array(
//         'taxonomy'     => $taxonomy,
//         'orderby'      => $orderby,
//         'show_count'   => $show_count,
//         'pad_counts'   => $pad_counts,
//         'hierarchical' => $hierarchical,
//         'title_li'     => $title,
//         'parent' => 0,
//         'hide_empty'   => $empty
//   );
//  $parent_categories = get_categories( $args );

 $list_categories = array(
	'orderby'            => 'name',
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
	'hide_title_if_empty' => false,
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
        ?>
      </div>
    </div>

    <br><br>
    <br><br>
    <div class="offcanvas-header">
        <span class="h5 offcanvas-title text-primary">Фильтр товаров</span>
      </div>
    <?php
      if (  is_product_category() ) {
        // echo do_shortcode('[wcpf_filters id="130"]');
        echo do_shortcode('[wcpf_filters id="258"]');
      }

      if ( is_archive() || is_category() || is_product_category() ) {
        // echo do_shortcode('[wcpf_filters id="130"]');
        echo do_shortcode('[wcpf_filters id="258"]');
      }
    ?>

  </aside><!-- #secondary -->
</div>
