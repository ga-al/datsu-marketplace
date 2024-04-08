<?php

/**
 * 
 * Template Name: Catalog Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-4">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <main id="main" class="site-main">

        <!-- Post List -->
        <div class="row">
          <div class="<?= bootscore_main_col_class(); ?> px-0">
            <!-- Grid Layout -->
                
            <h2 class="text-primary">Комплектующие</h2>
            <div class="row">
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul>
                  <li>Круглые трубы</li>
                  <li>Уплотнители для поручня с пазом</li>
                  <li>Поручень с пазом под стекло</li>
                  <li>Профильные трубы</li>
                  <li>Перфорированные трубы</li>
                </ul>
              </div>
            </div>

          </div>
          <!-- col -->
          <?php get_sidebar(); ?>
        </div>
        <!-- row -->
        
      </main><!-- #main -->

    </div><!-- #primary -->
  </div><!-- #content -->

<?php
get_footer();
