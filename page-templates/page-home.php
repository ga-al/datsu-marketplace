<?php

/**
 * 
 * Template Name: Home Page
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

      <main id="main" class="site-main position-relative mt-lg-5 mt-4 pt-lg-3">

        <!-- Post List -->
        <div class="row">
          <div class="<?= bootscore_main_col_class(); ?> px-0">
            <!-- Grid Layout -->
                
            <div class="card border-0 mb-4 position-md-absolute">
              <div class="row ms-lg-2 g-0">

                <div class="col">
                  <div class="card-body pt-0 px-0">

                    <div class="mrk-gallery"> 
                      <div class="mrk-gallery-top mx-auto position-relative"><img class="mrk-gallery-image mx-auto h-100 w-100" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-1.jpg" alt="vidio-image">
                      <div class="mrk-gallery-blur mrk-bg-blur position-absolute start-0 bottom-0">
                        <h1 class="d-inline-block text-uppercase text-white fw-bold">все для стеклянных козырьков</h1>
                        <button class="btn btn-primary d-flex align-items-center justify-content-center gap-2 text-nowrap mt-2" href="#" type="button">
                          Смотреть готовые решения
                        </button>
                      </div>
                      <div class="mrk-social position-absolute">
                        <div class="d-flex gap-4">
                          <a class="mrk-social-item" href="#" role="button">
                            <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/skype-outline.svg" alt="">
                          </a>
                          <a class="mrk-social-item" href="#" role="button">
                            <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/whatsapp.svg" alt="">
                          </a>
                          <a class="mrk-social-item" href="#" role="button">
                            <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/discord.svg" alt="">
                          </a>
                          <a class="mrk-social-item" href="#" role="button">
                            <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/telegram.svg" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                      <div class="row thumbs mrk-gallery-thumbs mx-auto flex-nowrap gap-2"> 
                        <div class="col-4 thumbnail p-0"><a class="active" href="#" data-path="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-1.jpg"><img class="img-thumbnail border-0 p-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-1.jpg" alt="vidio-thumb"></a></div>
                        <div class="col-4 thumbnail p-0"><a href="#" data-path="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-2.jpg"><img class="img-thumbnail border-0 p-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-2.jpg" alt="vidio-thumb"></a></div>
                        <div class="col-4 thumbnail p-0"><a href="#" data-path="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-3.jpg"><img class="img-thumbnail border-0 p-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/image-3.jpg" alt="vidio-thumb"></a></div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> 
            <div class="<?= bootscore_container_class(); ?> pe-xxl-2 pe-md-3 px-2">
              <section>
                <h2 class="text-primary text-uppercase fw-bold">Все для профессионалов</h2>
                <form class="row g-3 mt-3">
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg1" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg1" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">3D модель</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg2" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg2" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">Инструкция</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg3" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg3" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">PDF чертежи</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg4" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg4" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">Протокол испытаний</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg5" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg5" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">Сертификаты</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative">
                      <label for="formFileLg6" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
                      <input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg6" type="file">
                      <div class="mrk-download d-flex p-2">
                        <div class="fw-medium">Полный каталог</div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="mrk-cards-info">
                  <div class="row">
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">3D модель</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">Инструкция</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/2.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">PDF чертежи</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/3.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">Протокол испытаний</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/4.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">Сертификаты</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/5.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                      <div class="card border-0 pt-4">
                        <div class="card-header border-0 bg-white px-0">
                          <h5 class="card-title text-center mb-0">Полный каталог</р>
                        </div> 
                        <div class="card-body pt-0 px-0">
                          <img class="bd-placeholder-img card-img-top w-100 rounded-0" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/cards-info/6.jpg" alt="">
                        </div>
                      </div>
                    </div>
                </div>
              </section>
              <section class="mt-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h2 class="text-primary text-uppercase fw-bold">готовые комплекты</h2>
                  <a class="fs-3 fw-medium" href="#">Смотреть все</a>
                </div>
                <div class="mrk-cards-kits mt-3">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/ready-kits/1.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Стеклянный козырек на вантах
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">48 000 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/ready-kits/2.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Стеклянный козырек на консоли из листа
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">91 300 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/ready-kits/3.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Козырек на треугольном скате на спайдерах
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mt-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h2 class="text-primary text-uppercase fw-bold">рутели и крепления</h2>
                  <a class="fs-3 fw-medium" href="#">Смотреть все</a>
                </div>
                <div class="mrk-cards-kits mt-3">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/1.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Шарнирный рутель без зенковки для скрытого монтажа, М14 шаг Р=2 d=58.0, стекло 16.0-24.0 мм, AISI 316, GRIT 320
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">2 211 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/2.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Шарнирный рутель без зенковки, М14 шаг Р=2 d=50.0, стекло 16.0-24.0 мм, AISI 304, GRIT 320
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">2 956 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/3.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Крепление рутеля двойное на алюминиевый фасад, AISI 304, GRIT 600
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">6 059 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="pt-4 pb-5">
                <div class="row g-3">
                  <div class="col-md-6 col-lg-3">
                    <div class="mrk-advantages">
                      <h4 class="text-uppercase fw-medium">Большой ассортимент</h4>
                      <p class="fw-light">козырьков всегда в наличии</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="mrk-advantages">
                      <h4 class="text-uppercase fw-medium">Простой возврат</h4>
                      <p class="fw-light">товары можно вернуть в течении 360 дней</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="mrk-advantages">
                      <h4 class="text-uppercase fw-medium">доставка козырьков</h4>
                      <p class="fw-light">в ближайший пункт выдачи заказов</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="mrk-advantages">
                      <h4 class="text-uppercase fw-medium">управление качеством</h4>
                      <p class="fw-light">многоуровневая система по стандарту ISO 9001</p>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mt-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h2 class="text-primary text-uppercase fw-bold">ванты и крепления</h2>
                  <a class="fs-3 fw-medium" href="#">Смотреть все</a>
                </div>
                <div class="mrk-cards-kits mt-3">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/4.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Наконечник для крепления тяги правый, M14 шаг Р=2, AISI 316, GRIT 320
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">2 257 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/5.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Крепление тяги к стене вертикальное, AISI 316, GRIT 320
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">2 671 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                      <div class="card border-0 h-100"> 
                        <div class="card-kit-img">
                          <div class="mrk-card-heart no-active"></div>
                          <img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/fasteners/6.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                          <p class="card-title fw-medium text-dark fs-6 mb-4">
                            Наконечник для крепления тяги левый, М14 шаг Р=2, AISI 316, GRIT 600
                          </p>
                          <div class="mt-auto">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">2 391 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart">
                            <a href="#" class="btn btn-primary btn-order w-100">
                              <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                              В корзину
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="card border-0 mb-4 position-md-absolute">
                  <div class="row g-0">

                    <div class="col">
                      <div class="card-body pt-0 px-0">

                        <div class="mrk-image-full"> 
                          <div class="mrk-image-top mx-auto position-relative"><img class="mrk-form-image mx-auto h-100 w-100" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/form-image.jpg" alt="vidio-image">
                            <div class="form-blur mrk-bg-blur position-absolute start-0 bottom-0">
                              <h1 class="d-inline-block text-uppercase text-dark fw-bold">оставьте заявку, мы вам перезвоним</h1>
                              <form class="row row-gap-3 row-gap-md-0 mt-3">
                                <div class="col-md-8">
                                  <label for="inputName" class="visually-hidden-focusable">Имя</label>
                                  <input class="form-control" type="text" id="inputName" placeholder="Имя">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputPhone" class="visually-hidden-focusable">Телефон</label>
                                  <input class="form-control" type="tel" id="inputPhone" name="phone" placeholder="+7" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                                </div>
                                <div class="col-12 mt-md-4 mt-3">
                                  <button class="btn btn-primary" href="#" type="button">
                                    Оставить заявку
                                  </button>
                                </div>
                              </form>
                            </div>
                            <div class="mrk-social position-absolute">
                              <div class="d-flex gap-4">
                              <a class="mrk-social-item" href="#" role="button">
                                  <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/skype-outline.svg" alt="">
                              </a>
                              <a class="mrk-social-item" href="#" role="button">
                                  <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/whatsapp.svg" alt="">
                              </a>
                              <a class="mrk-social-item" href="#" role="button">
                                  <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/discord.svg" alt="">
                              </a>
                              <a class="mrk-social-item" href="#" role="button">
                                  <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/telegram.svg" alt="">
                              </a>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
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
