<?php

/**
 * 
 * Template Name: Catalog Image Page
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
            
            <div class="entry-content">
              <h1 class="display-5 text-primary fw-bold mb-4">Комплектующие для козырьков на ваннах</h1>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/dlya-vann.jpg" class="img-fluid" alt="...">
              <nav class="d-flex justify-content-between align-items-center my-3">
                <div class="nav nav-tabs orderby custom-select d-flex gap-md-5" id="nav-tab" role="tablist" > 
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false" tabindex="-1">по популярности
                  </button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">по цене
                  </button> 
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">по названию
                  </button>
                </div>
                <div class="d-flex gap-2">
                  <a href="#" role="tablist">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.5 3.75C1.5 3.15326 1.73705 2.58097 2.15901 2.15901C2.58097 1.73705 3.15326 1.5 3.75 1.5H8.25C8.84674 1.5 9.41903 1.73705 9.84099 2.15901C10.2629 2.58097 10.5 3.15326 10.5 3.75V8.25C10.5 8.84674 10.2629 9.41903 9.84099 9.84099C9.41903 10.2629 8.84674 10.5 8.25 10.5H3.75C3.15326 10.5 2.58097 10.2629 2.15901 9.84099C1.73705 9.41903 1.5 8.84674 1.5 8.25V3.75ZM13.5 3.75C13.5 3.15326 13.7371 2.58097 14.159 2.15901C14.581 1.73705 15.1533 1.5 15.75 1.5H20.25C20.8467 1.5 21.419 1.73705 21.841 2.15901C22.2629 2.58097 22.5 3.15326 22.5 3.75V8.25C22.5 8.84674 22.2629 9.41903 21.841 9.84099C21.419 10.2629 20.8467 10.5 20.25 10.5H15.75C15.1533 10.5 14.581 10.2629 14.159 9.84099C13.7371 9.41903 13.5 8.84674 13.5 8.25V3.75ZM1.5 15.75C1.5 15.1533 1.73705 14.581 2.15901 14.159C2.58097 13.7371 3.15326 13.5 3.75 13.5H8.25C8.84674 13.5 9.41903 13.7371 9.84099 14.159C10.2629 14.581 10.5 15.1533 10.5 15.75V20.25C10.5 20.8467 10.2629 21.419 9.84099 21.841C9.41903 22.2629 8.84674 22.5 8.25 22.5H3.75C3.15326 22.5 2.58097 22.2629 2.15901 21.841C1.73705 21.419 1.5 20.8467 1.5 20.25V15.75ZM13.5 15.75C13.5 15.1533 13.7371 14.581 14.159 14.159C14.581 13.7371 15.1533 13.5 15.75 13.5H20.25C20.8467 13.5 21.419 13.7371 21.841 14.159C22.2629 14.581 22.5 15.1533 22.5 15.75V20.25C22.5 20.8467 22.2629 21.419 21.841 21.841C21.419 22.2629 20.8467 22.5 20.25 22.5H15.75C15.1533 22.5 14.581 22.2629 14.159 21.841C13.7371 21.419 13.5 20.8467 13.5 20.25V15.75Z" fill="#C8CBE5"/>
                    </svg>
                  </a>
                  <a href="#" role="tablist">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.50356 5.11755H1.50744C1.50752 5.31091 1.5839 5.49644 1.71998 5.63381C1.85607 5.77117 2.04087 5.84928 2.23421 5.85116V5.85181H21.7655V5.85148C21.9596 5.85063 22.1454 5.77293 22.2824 5.6354C22.4194 5.49786 22.4964 5.31167 22.4964 5.11755H22.4997V1.73296C22.4993 1.53845 22.4218 1.35202 22.2842 1.2146C22.1465 1.07718 21.96 1 21.7655 1H2.23421C2.03951 1.00009 1.85281 1.07747 1.71514 1.21515C1.57747 1.35284 1.50009 1.53955 1.5 1.73426C1.5 1.74688 1.50324 1.75885 1.50388 1.77147L1.50356 5.11755ZM21.7651 9.07426H2.23421C2.03951 9.07435 1.85281 9.15173 1.71514 9.28942C1.57747 9.4271 1.50009 9.61381 1.5 9.80852C1.5 9.82114 1.50324 9.83311 1.50388 9.84573V13.1918H1.50777C1.50784 13.3852 1.58422 13.5707 1.72031 13.7081C1.85639 13.8454 2.04119 13.9235 2.23454 13.9254V13.9261H21.7658V13.9257C21.9599 13.9249 22.1458 13.8472 22.2827 13.7097C22.4197 13.5721 22.4967 13.3859 22.4968 13.1918H22.5V9.80723C22.4994 9.61268 22.4217 9.4263 22.284 9.28892C22.1462 9.15153 21.9597 9.07435 21.7651 9.07426ZM21.7651 17.1482H2.23421C2.03951 17.1483 1.85281 17.2257 1.71514 17.3634C1.57747 17.501 1.50009 17.6877 1.5 17.8825C1.5 17.8951 1.50324 17.907 1.50388 17.9197V21.2657H1.50777C1.50784 21.4591 1.58422 21.6446 1.72031 21.782C1.85639 21.9194 2.04119 21.9975 2.23454 21.9994V22H21.7658C21.9599 21.9991 22.1458 21.921 22.2828 21.7834C22.4197 21.6458 22.4967 21.4596 22.4968 21.2654H22.5V17.8808C22.4993 17.6863 22.4216 17.5001 22.2839 17.3627C22.1461 17.2254 21.9596 17.1483 21.7651 17.1482Z" fill="#262626"/>
                    </svg>
                  </a>
                </div>
              </nav>
              <div class="tab-content pt-4" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/1.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Крепление стеклодержателя (рутеля) к ванте (серьга)</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/2.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/3.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/2.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/3.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/2.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/1.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Крепление стеклодержателя (рутеля) к ванте (серьга)</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/2.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-5">
                    <div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/3.png" alt="" style="width: 70px;"></div>
                    <div class="flex-grow-1 py-0">
                      <div class="row g-3"> 
                        <div class="col-xl-9 col-lg-7">
                          <a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
                        </div>
                        <div class="col-xl-3 col-lg-5">
                          <div class="mt-auto text-lg-center">
                            <h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
                            <span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
                          </div> 
                          <div class="mrk-cart d-flex align-items-center justify-content-lg-end">
                            <div class="mrk-cart-quantity w-75">
                              <a href="#" class="btn btn-primary btn-order w-100">
                                <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
                                В корзину
                              </a>
                            </div>
                            <div class="mrk-card-heart no-active ms-2"></div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
