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

$social_menu = me_render_social();


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

            <div class="card border-0 mb-4 position-md-absolute pt-lg-0 pt-4">
              <div class="row ms-lg-2 g-0">

                <div class="col">
                  <div class="card-body pt-0 pb-md-4 px-0 mt-5 mt-lg-0">
                    
                    <div class="mrk-gallery position-relative">
                      <div class="mrk-gallery-top mx-auto ">
                        <img class="mrk-gallery-image mx-auto h-100 w-100" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery/baner-home-thumb.jpeg" alt="image">
                        <ul class="mrk-gallery-list position-absolute start-0 top-0 d-none text-primary mt-4">
                        </ul>
                        <div class="mrk-gallery-blur mrk-bg-blur position-absolute start-0 bottom-0">
                          <h1 class="mrk-gallery-blur-title d-inline-block text-uppercase text-primary fw-bold">все для стеклянных козырьков</h1>
                          <a class="mrk-gallery-blur-link btn btn-outline-primary d-flex align-items-center justify-content-center gap-2 text-nowrap mt-2" href="/shop/" type="button">
                            Смотреть готовые решения
                          </a>
                        </div>
                        
                        <div class="mrk-social position-absolute">


                          <?php echo $social_menu; ?>
                          <!-- <div class="d-flex gap-4">
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
                          </div> -->
                        </div>
                      </div>
                      <div class="thumbs">
                        <div class="row mrk-gallery-thumbs flex-md-column flex-nowrap mx-0 mx-md-auto gap-2">
                          <?php
                            $images = get_field('main-banner-slider');
                            
                            if( $images ): ?>
                              <?php foreach( $images as $image ):

                                $size_thumbnail = wp_get_attachment_url( $image['ID'],'thumbnail'); // (thumbnail, medium, large, full or custom size)
                                $size_medium = wp_get_attachment_url( $image['ID'],'medium'); // (thumbnail, medium, large, full or custom size)
                                $size_large = wp_get_attachment_url( $image['ID'],'large'); // (thumbnail, medium, large, full or custom size)
                                $size_full = wp_get_attachment_url( $image['ID'],'full'); // (thumbnail, medium, large, full or custom size)

                                ?>
                                <div class="col-4 col-md-12 thumbnail">
                                  <a class="active" href="#" data-path="<?= $size_thumbnail ?>">
                                    <img class="img-thumbnail border-0 p-0" src="<?= $size_full ?>" alt="vidio-thumb">
                                    <p class="mrk-gallery-thumbs-description visually-hidden"><?= $image['description'] ?></p>
                                    <h1 class="mrk-gallery-thumbs-title d-inline-block text-uppercase text-primary fw-bold visually-hidden" data-title="<?= $image['title'] ?>">все для стеклянных козырьков</h1>
                                    <span class="mrk-gallery-thumbs-link visually-hidden" data-link-text="<?= $image['caption']; ?>">Смотреть готовые решения</span>
                                  </a>
                                </div>
                                
                              <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="<?= bootscore_container_class(); ?> pe-xxl-2 pe-lg-3 px-2">
              <!-- <section>
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
              </section> -->
              <?php
              $arr = me_rendom_category();
              $randomKey = array_rand( $arr, 3) ;
              foreach ($randomKey as  $random_key => $num) {
                $term = $arr[$num];
                $term_id = $term->term_id;
                $term_name = $term->name;
                $term_slug = $term->slug;
                $term_taxonomy = $term->taxonomy;
                $term_parent = $term->parent;
                $term_link = get_category_link($term_id);

                ?>
                  <section class="mt-5 pb-3">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                      <h2 class="text-primary text-uppercase w-100 fw-bold"><?php echo $term_name ?></h2>
                      <a class="fs-4 fw-medium" href="<?php echo $term_link ?>">Смотреть все</a>
                    </div>
                    <div class="mrk-cards-kits mt-3">
                      <div class="row">

                        <?php
                          $random_query = new WC_Product_Query( array(
                            'limit' => 4,
                            'product_category_id' => $term_id,
                            'orderby' => 'rand',
                            'return' => 'objects',
                            'hide_empty' => 1,
                          ) );
                          $random_products = $random_query->get_products();

                          foreach( $random_products as $product ) {
                            $product_id = $product->get_id();
                            $product_url = get_permalink( $product_id );
                            $product_sku = $product->get_sku();
                            $product_name = $product->get_name();
                            $product_slug = $product->get_slug();
                            $product_price = $product->get_price();
                            $product_sale_price = $product->get_sale_price();
                            $product_regular_price = $product->get_regular_price();
                            $product_link = get_permalink($product);
                            $product_attributes = $product->get_attributes();


                            $gallery_attachment_ids = $product->get_gallery_image_ids();
                            $product_thumbnail_id = get_post_thumbnail_id( $product_id );
                            if ( !$gallery_attachment_ids ) {
                              $gallery_attachment_ids = [ $product_thumbnail_id ];
                            }

                        ?>
                          <div class="col-md-4 col-xl-3 px-lg-0">
                            <div class="card border-0 h-100 card h-100 px-lg-0 px-3">
                              <a href="<?php echo $product_url ?>" class="card-kit-img d-block">
                                <div class="swiper swiper-children">
                                  <div class="swiper-wrapper">
                                    <?php
                                      foreach ($gallery_attachment_ids as $key => $gallery_attachment_id) {

                                        $image_src = wp_get_attachment_url( $gallery_attachment_id, 'medium' );
                                        $image_src_full = wp_get_attachment_url( $gallery_attachment_id, 'full' );
                                        if ( !$image_src ) {
                                          $image_src = get_stylesheet_directory_uri() . '/img/placeholder.png';
                                        }
                                        if ( !$image_src_full ) {
                                          $image_src_full = get_stylesheet_directory_uri() . '/img/placeholder.png';
                                        }



                                      ?>
                                        <div class="swiper-slide">
                                          <!-- <div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
                                            <div class="mrk-hit">хит</div>
                                            <div class="mrk-new">новинка</div>
                                          </div> -->
                                          <img class="card-img-top" src="<?php echo $image_src ?>" alt="">
                                        </div>
                                      <?php
                                        }
                                      ?>
                                  </div>

                                  <div class="mrk-card-heart no-active"><?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?></div>

                                  <div class="swiper-button-next next-btn text-white rounded"></div>
                                  <div class="swiper-button-prev prev-btn text-white rounded"></div>
                                  <div class="swiper-pagination"></div>
                                </div>
                              </a>
                              <div class="card-body d-flex flex-column h-100 px-lg-3 px-0">
                                <a href="<?php echo $product_url ?>" class="card-title fw-medium text-dark fs-6 mb-4">
                                <?php echo $product_name ?>
                                </a>
                                <div class="mt-auto">

                                <?php if ( $product_sale_price ) { ?>
                                  <h3 class="text-primary fw-bold text-nowrap d-inline-block"><?php echo $product_sale_price . ' ' . get_woocommerce_currency_symbol(); ?></h3>
                                  <span class="text-decoration-line-through fs-5 ps-2"><?php echo $product_regular_price . ' ' . get_woocommerce_currency_symbol(); ?></span>
                                  <!-- <span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">
                                    <?php
                                      echo round(100 - ($product_sale_price / $product_regular_price * 100));
                                    ?>
                                    %
                                  </span> -->
                                <?php } else { ?>
                                  <h3 class="text-primary fw-bold text-nowrap d-inline-block"><?php echo $product_regular_price . ' ' . get_woocommerce_currency_symbol(); ?></h3>
                                <?php } ?>
                                </div>
                                <div class="mrk-cart">
                                  <div class="mrk-cart-quantity">
                                    <?php
                                      $me_add_to_cart = [
                                        "classes" => "btn btn-primary btn-order-kits w-100 ",
                                        "product_title" => $product_name,
                                        "product_id" => $product_id,
                                        "product_sku" => $product_sku,
                                      ];
                                      get_template_part( 'elements/button-add-to-cart', '', $me_add_to_cart );
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php
                          }
                          wp_reset_postdata();
                        ?>
                      </div>
                    </div>
                  </section>
                <?
                if ( $random_key == 1 ) {
                  ?>

                  <section class="pt-4 mt-4 pb-3">
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

                  <?php
                }
              }
              ?>

              <section>
                <div class="card border-0 mb-4 position-md-absolute">
                  <div class="row g-0">

                    <div class="col">
                      <div class="card-body pt-0 px-0">

                        <div class="mrk-image-full">
                          <div class="mrk-image-top mx-auto"><img class="mrk-form-image mx-auto h-100 w-100" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/form-image.jpg" alt="vidio-image">
                            <div class="form-blur mrk-bg-blur position-absolute start-0 bottom-0">
                              <h1 class="d-inline-block text-uppercase text-dark fw-bold page_home_form__title">оставьте заявку, мы вам перезвоним</h1>
                              <form id="page_home_form" class="row row-gap-3 row-gap-md-0 mb-3 mt-3">
                                <div class="col-md-8">
                                  <label for="inputName" class="visually-hidden-focusable">Имя</label>
                                  <input class="form-control" type="text" id="inputName" placeholder="Имя">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputPhone" class="visually-hidden-focusable">Телефон</label>
                                  <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->
                                  <input class="form-control" type="tel" id="inputPhone" name="phone" placeholder="+7">
                                </div>
                                <div class="col-12 mt-md-4 mt-3">
                                  <button class="btn btn-primary" href="#" type="submit">
                                    Оставить заявку
                                  </button>
                                </div>
                              </form>
                            </div>
                            <div class="mrk-social position-absolute">
                              <?php echo $social_menu; ?>
                              <!-- <div class="d-flex gap-4">
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
                              </div> -->
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
          <?php

          get_sidebar(); ?>
        </div>
        <!-- row -->

      </main><!-- #main -->

    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();
