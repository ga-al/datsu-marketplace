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
                
            <h2 class="display-5 fw-bold text-primary">Комплектующие</h2>
            <div class="row">
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Труба нержавеющая</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Круглые трубы</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Уплотнители для поручня с пазом</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручень с пазом под стекло</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Профильные трубы</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Перфорированные трубы</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3>Труба нержавеющая</h3>
                <ul class="mrk-list-catalog">
                  <li class="mb-2"><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Круглые трубы</a></li>
                  <li class="mb-2"><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Уплотнители для поручня с пазом</a></li>
                  <li class="mb-2"><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручень с пазом под стекло</a></li>
                  <li class="mb-2"><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Профильные трубы</a></li>
                  <li class="mb-2"><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Перфорированные трубы</a></li>
                  <li class="mb-2">
                    <div class="collapse" id="more-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Рутели (стеклодержатели)</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Комплектующие для козырьков на ваннах</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Тяга для козырьков</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стекло для навеса</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Комплекты готовых козырьков</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Расходные материалы для монтажа козырьков</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Расчет стоимости стеклянных козырьков</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Труба нержавеющая</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Круглые трубы</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Уплотнители для поручня с пазом</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручень с пазом под стекло</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Профильные трубы</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Перфорированные трубы</a></li>
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
