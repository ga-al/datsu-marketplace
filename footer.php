<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer class="mt-auto mb-md-0 pb-md-0 mb-5 pb-5">

  <div class="bootscore-footer bg-dark text-light py-md-5 pb-5 pt-4">
    <div class="<?= bootscore_container_class(); ?>">

      <div class="row gap-md-0 gap-3">

        <!-- Footer 1 Widget -->
        <div class="col-lg-3 d-flex align-items-center order-lg-0 order-1">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <a class="footer-brand xs d-md-none ms-md-3 pe-md-2" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-footer-sm.svg" alt="logo" class="logo xs"></a>
            <a class="footer-brand md d-none d-md-block pe-2" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-footer.svg" alt="logo" class="logo md"></a>
            <div class="bootscore-info d-none text-secondary py-2 mt-md-3">
              <?php if (is_active_sidebar('footer-info')) : ?>
                <?php dynamic_sidebar('footer-info'); ?>
              <?php endif; ?>
              <small class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> <?php bloginfo('name'); ?> — модный интернет-магазин одежды, обуви и аксессуаров. Все права защищены. Доставка по всей России.На Торговой площадке wildberries.ru применяются рекомендательные технологии. Адрес для направления юридически значимых сообщений: sales@wildberries.ru</small>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-12 col-lg-9 d-flex justify-content-md-around justify-content-between flex-wrap row-gap-3 order-0">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <div class="col-6 col-md-3">
              <h5 class="fw-medium">О компании</h5>
              <ul>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer-about',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="footer-about" class="">%3$s</ul>',
                    'depth'          => 1,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                  ));

                ?>

                <!-- <li><a class="text-opacity-50 text-decoration-none" href="#">О компании</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Новости</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Вакансии</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Реквизиты</a></li> -->
              </ul>
            </div>
            <div class="col-6 col-md-3">
              <h5 class="fw-medium">Покупателям</h5>
              <ul>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer-buyers',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="footer-buyers" class="">%3$s</ul>',
                    'depth'          => 1,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                  ));

                ?>
                <!-- <li><a class="text-opacity-50 text-decoration-none" href="#">Условия продажи</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Доставка</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Оплата</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Возврат</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Вопрос-ответ</a></li> -->
              </ul>
            </div>
            <div class="col-6 col-md-3">
              <h5 class="fw-medium">Партнерам</h5>
              <ul>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer-partners',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="footer-partners" class="">%3$s</ul>',
                    'depth'          => 1,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                  ));

                ?>
                <!-- <li><a class="text-opacity-50 text-decoration-none" href="#">Сотрудничество</a></li> -->
                <!-- <li><a class="text-opacity-50 text-decoration-none" href="#">Логистика</a></li>
                <li><a class="text-opacity-50 text-decoration-none" href="#">Условия партнерства</a></li> -->
              </ul>
            </div>
          <?php endif; ?>
          <!-- Footer 3 Widget -->
          <div class="col-6 col-md-3">
            <?php if (is_active_sidebar('footer-3')) : ?>
              <h5 class="text-white">Соц.сети</h5>
              <ul class="d-md-block d-flex gap-4">

                <?php
                    $as = wp_nav_menu(array(
                      'theme_location' => 'footer-social',
                      'container'      => false,
                      'menu_class'     => '',
                      'fallback_cb'    => '__return_false',
                      'items_wrap'     => '<ul id="footer-social" class="">%3$s</ul>',
                      'depth'          => 1,
                      'walker'         => new bootstrap_5_wp_nav_menu_walker()
                    ));

                  ?>

                <!-- <li><a class="text-white text-decoration-underline" href="#">Телеграм</a></li>
                <li><a class="text-white text-decoration-underline" href="#">WhatsApp</a></li>
                <li><a class="text-white text-decoration-underline" href="#">Wechat</a></li> -->
              </ul>
            <?php endif; ?>
          </div>
        </div>

      </div>

    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
