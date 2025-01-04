<?php

/**
 *
 * Template Name: Manual List Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-5">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">
      <div class="row">
        <div class="<?= bootscore_main_col_class(); ?>">

          <header class="entry-header">
            <?php the_post(); ?>
            <h1 class="mb-2 mb-md-4"><?php the_title(); ?></h1>
            <?php bootscore_post_thumbnail(); ?>
          </header>

          <div class="container">
            <form method="GET" action="" class="row mb-4">
              <div class="col-md-4">
                <label for="file_type">Тип файла:</label>
                <select name="file_type" id="file_type">
                  <option value="">Все</option>
                  <?php
                  $file_types = get_terms([
                    'taxonomy' => 'file_type',
                    'hide_empty' => false,
                  ]);
                  foreach ($file_types as $file_type) {
                    $selected = (isset($_GET['file_type']) && $_GET['file_type'] === $file_type->slug) ? 'selected' : '';
                    echo '<option value="' . $file_type->slug . '" ' . $selected . '>' . $file_type->name . '</option>';
                  }              
                  ?>
                </select>
              </div>
              <div class="col-md-4">
                <label for="file_category">Категория:</label>
                <select name="file_category" id="file_category">
                  <option value="">Все</option>
                  <?php
                  $file_categories = get_terms([
                    'taxonomy' => 'file_category',
                    'hide_empty' => false,
                  ]);
                  foreach ($file_categories as $file_category) {
                    $selected = (isset($_GET['file_category']) && $_GET['file_category'] === $file_category->slug) ? 'selected' : '';
                    echo '<option value="' . $file_category->slug . '" ' . $selected . '>' . $file_category->name . '</option>';
                  }              
                  ?>
                </select>
              </div>
              <div class="col-md-4 d-flex">
                <button class="btn btn-primary mt-3" type="submit">Найти</button>
              </div>
            </form>

            <?php
            $args = [
              'post_type' => 'manual',
              'posts_per_page' => -1,
            ];


            if (isset($_GET['file_type']) && !empty($_GET['file_type'])) {
              $args['tax_query'][] = [
                'taxonomy' => 'file_type',
                'field'    => 'slug',
                'terms'    => $_GET['file_type'],
              ];
            }

            if (isset($_GET['file_category']) && !empty($_GET['file_category'])) {
              $args['tax_query'][] = [
                'taxonomy' => 'file_category',
                'field'    => 'slug',
                'terms'    => $_GET['file_category'],
              ];
            }

            $manuals = get_posts($args);

            if($manuals){
              foreach ($manuals as $manual) { ?>
                <div class="doc-rounded-card border p-4 mb-4">
                  <div class="row">
                    <div class="col-md-3">
                      <p class="fs-2 mb-2 fw-bold d-block d-md-none"><?= $manual->post_title; ?></p>
                      <img src="<?= get_the_post_thumbnail_url($manual->ID); ?>" alt="">
                    </div>
                    <div class="col-md-9">
                      <p class="fs-3 fw-bold mb-2 d-none d-md-block"><?= $manual->post_title; ?></p>
                      <p class="mb-2"><?= $manual->post_content; ?></p>
                      <?php foreach(get_field('file', $manual->ID) as $file) {
                          if($file['file_src']['url']){
                          $file_size_mb = $file['file_src']['filesize'] / 1048576;
                          $file_size_mb = number_format($file_size_mb, 2);
                      ?>
                          <div class="d-md-flex align-items-sm-center gap-4 pt-3 mb-3 doc-inner-element justify-content-between">
                            <span class="d-block fs-4 mb-2 mb-md-0"><?= $file['title']; ?></span>
                            <a href="<?= $file['file_src']['url']; ?>" download class="btn h-100 btn-primary text-nowrap">
                                <!-- icon666.com - MILLIONS vector ICONS FREE --><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve"><g><g fill="#FFFFFF" id="Download"><path d="M372.939,264.667c-6.641,0-12.03,5.39-12.03,12.03v84.212H24.061v-84.212c0-6.641-5.39-12.03-12.03-12.03 S0,270.056,0,276.697v96.242c0,6.641,5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03v-96.242 C384.97,270.056,379.58,264.667,372.939,264.667z"/><path d="M183.703,285.202c4.68,4.632,12.512,4.68,17.191,0l84.2-83.009c4.752-4.704,4.74-12.319,0-17.011 c-4.74-4.704-12.439-4.704-17.179,0l-63.46,62.558V12.03c0-6.641-5.438-12.03-12.151-12.03s-12.151,5.39-12.151,12.03v235.71 l-63.46-62.558c-4.752-4.704-12.439-4.704-17.179,0c-4.752,4.704-4.752,12.319,0,17.011L183.703,285.202z"/></g></g></svg>  
                              <span>(<?= $file_size_mb; ?>MB)</span></a>
                          </div>
                      <?php }
                      }; ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php } else {?>
              <div class="row">
                <div class="col-md-12">
                  <p class="fs-3 fw-bold mb-2 d-none d-md-block">Ничего не найдено</p>
                </div>
              </div>
            <?php } ?>

          </div>



          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="entry-footer">
            <?php comments_template(); ?>
          </footer>

        </div>
        <?php get_sidebar(); ?>
      </div>
    </main>
  </div>
</div>

<?php
get_footer();
