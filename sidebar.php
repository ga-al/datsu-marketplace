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
        
        <h3 class="text-uppercase">Комплектующие</h3>
        <ul class="list ps-0">
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
              Труба нержавеющая
            </button>
            <div class="collapse" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Комплектующие для перил
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Зажимной профиль для стекла
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Фурнитура для козырьков и навесов из стекла
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Рутели (стеклодержатели)</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded active">Комплектующие для козырьков на ваннах</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Тяга для козырьков</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Стекло для навеса</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Комплекты готовых козырьков</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Расходные материалы для монтажа козырьков</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Расчет стоимости стеклянных козырьков</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse2" aria-expanded="false">
            Комплектующие для стеклянных перегородок
            </button>
            <div class="collapse" id="account-collapse2">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse3" aria-expanded="false">
            Комплектующие для душевых перегородок
            </button>
            <div class="collapse" id="account-collapse3">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse4" aria-expanded="false">
            инструменты и расходники для монтажа
            </button>
            <div class="collapse" id="account-collapse4">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse5" aria-expanded="false">
            Комплектующие для ограждений с подсветкой
            </button>
            <div class="collapse" id="account-collapse5">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse6" aria-expanded="false">
            новинки
            </button>
            <div class="collapse" id="account-collapse6">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse7" aria-expanded="false">
            уценка
            </button>
            <div class="collapse" id="account-collapse7">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <div class="border-top my-3"></div>
        <h3 class="text-uppercase">конструкции с монтажем</h3>
        <ul class="list ps-0">
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#home-collapse2" aria-expanded="false">
              Труба нержавеющая
            </button>
            <div class="collapse" id="home-collapse2">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse2" aria-expanded="false">
              Комплектующие для перил
            </button>
            <div class="collapse" id="dashboard-collapse2">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#orders-collapse2" aria-expanded="false">
              Зажимной профиль для стекла
            </button>
            <div class="collapse" id="orders-collapse2">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse2" aria-expanded="false">
            Фурнитура для козырьков и навесов из стекла
            </button>
            <div class="collapse" id="account-collapse2">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse11" aria-expanded="false">
            Комплектующие для стеклянных перегородок
            </button>
            <div class="collapse" id="account-collapse11">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse12" aria-expanded="false">
            Комплектующие для душевых перегородок
            </button>
            <div class="collapse" id="account-collapse12">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#account-collapse13" aria-expanded="false">
            инструменты и расходники для монтажа
            </button>
            <div class="collapse" id="account-collapse13">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 text-uppercase text-start fs-6">
            Комплектующие для ограждений с подсветкой
            </button>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 text-uppercase text-start fs-6">
            новинки
            </button>
          </li>
          <li class="mb-2">
            <button class="btn btn-toggle d-inline-flex align-items-center border-0 text-uppercase text-start fs-6">
            уценка
            </button>
          </li>
        </ul>
      </div>
    </div>

  </aside><!-- #secondary -->
</div>
