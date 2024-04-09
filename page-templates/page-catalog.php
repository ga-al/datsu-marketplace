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
        <?php woocommerce_breadcrumb()?> 
        <!-- Post List -->
        <div class="row">
          <div class="<?= bootscore_main_col_class(); ?>">
            <!-- Grid Layout -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="display-5 fw-bold text-primary">Комплектующие</h2>
              <div class="mrk-number-products">
                <span>349 893</span>
                товаров
              </div>
            </div>
            
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
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
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
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
                    <div class="collapse" id="more-collapse2">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse2" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
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
                  <li>
                    <div class="collapse" id="more-collapse3">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse3" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
                    <div class="collapse" id="more-collapse4">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse4" aria-expanded="false">
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
                  <li>
                    <div class="collapse" id="more-collapse5">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse5" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
              <h2 class="display-5 fw-bold text-primary">Конструкции с монтажем</h2>
              <div class="mrk-number-products">
                <span>349 893</span>
                товаров
              </div>
            </div>
            
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
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
                    <div class="collapse" id="more-collapse6">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse6" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
                    <div class="collapse" id="more-collapse7">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse7" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
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
                  <li>
                    <div class="collapse" id="more-collapse8">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse8" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Зажимной профиль для стекла</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль Т100</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Алюминиевый профиль k601</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">П-образный профиль</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h3 class="fs-6 text-uppercase">Комплектующие для перил</h3>
                <ul class="mrk-list-catalog">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Поручни и ригели для перил</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Готовые стойки и балясины</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Наконечники стоек и кронштейны для поручня</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отводы, повороты, соединители поручней и труб</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стеклодержатели</a></li>
                  <li>
                    <div class="collapse" id="more-collapse9">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse9" aria-expanded="false">
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
                  <li>
                    <div class="collapse" id="more-collapse10">
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
                    <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-end text-primary fs-6" data-bs-toggle="collapse" data-bs-target="#more-collapse10" aria-expanded="false">
                    Ещё
                    </button>
                  </li>
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
