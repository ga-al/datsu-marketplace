<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$_product = wc_get_product( get_the_ID() );
$_product_url = get_permalink( $_product->get_id() );
?>

<?php
/**
 * Template Name: Single Page Product
 *
 * @package Bootscore
 */

 get_header( 'shop' ); // Вставляем заголовок сайта

?>

<?php

$gallery_attachment_ids = $_product->get_gallery_image_ids();
$product_video = get_post_meta( $_product->get_id(), 'product_link_video', true );
$total_count = count( $gallery_attachment_ids );

?>

<div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-4">
    <div id="primary" class="content-area">

		<!-- Hook to add something nice -->
		<?php bs_after_primary(); ?>
		<main id="main" class="site-main">
			<?php woocommerce_breadcrumb()?> 
					
			<div class="entry-content">
				<h1 class="fs-1 fw-normal mt-md-0 mt-4"><?php echo $_product->get_name() ?></h1>
				<p class="mb-3 ps-lg-1">
					<span class="text-secondary me-3" style="font-size: 12px;">Артикул: 12345678</span>
					<span class="text-secondary" style="font-size: 12px;">Код покупателя: 12345678</span>
				</p>
				
				<div class="row">
					<!-- слайдер с табами изображениями - НАЧАЛО -->
					<div class="col-xl-7">
						<div class="row justify-content-xl-start justify-content-center">
							<?php if ( $product_video) { ?> 
							<div class="slider">
							<? } else { ?> 
								<div class="slider slider-vertical slider-card px-xxl-0">
								<? } ?>
									<div class="swiper slider__images order-2 slider__images--main slider__images-cotalog">
										<div class="swiper-wrapper">
											<?php if ( $product_video) {
												if ($total_count > 1) {
												?>
												<div class="swiper-slide" data-slider="1" data-bs-toggle="modal" data-bs-target="#backdrop-1" data-bs-gallery="<?php echo $product_video; ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0">
													<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
														<div class="mrk-hit">хит</div>
														<div class="mrk-new">новинка</div>
													</div>
													<div class="youtube ratio ratio-16x9 h-100">
														<iframe class="iframe object-fit-cover" src="<?php echo $product_video; ?>" frameborder="0" allowfullscreen></iframe>
													</div>
													<div class="fullscrin" data-slider="1" data-bs-toggle="modal" data-bs-target="#backdrop-1" data-bs-gallery="<?php echo $product_video; ?>?rel=0&amp;autoplay=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="увеличить окно просмотра" frameborder="0">
														<svg class="bi bi-aspect-ratio bg-opacity-75 text-bg-secondary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
														<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
														<path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path>
														</svg>
													</div>
												</div>
												<?php
												} else {?>
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<div class="swiper-slide" data-slider="1" data-bs-toggle="modal" data-bs-target="#backdrop-video" data-bs-gallery="<?php echo $product_video; ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0">
													<div class="youtube ratio ratio-16x9 video-one h-100">
														<iframe class="iframe object-fit-cover" src="<?php echo $product_video; ?>" frameborder="0" allowfullscreen></iframe>
													</div>
													<div class="fullscrin" data-slider="1" data-bs-toggle="modal" data-bs-target="#backdrop-video" data-bs-gallery="<?php echo $product_video; ?>?rel=0&amp;autoplay=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="увеличить окно просмотра" frameborder="0">
														<svg class="bi bi-aspect-ratio bg-opacity-75 text-bg-secondary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
														<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
														<path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path>
														</svg>
													</div>
												</div>
											<? }
											}
											if ( $gallery_attachment_ids) {
												foreach ($gallery_attachment_ids as $gallery_attachment_id) {
													if ($total_count > 1) {
													?>
													<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
														<div class="mrk-hit">хит</div>
														<div class="mrk-new">новинка</div>
													</div>
													<div class="swiper-slide" data-slider="2" data-bs-toggle="modal" data-bs-target="#backdrop-1" data-bs-gallery="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" title="увеличить окно просмотра">
														<div class="image-4x3"><img src="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" alt="image">
															<div class="fullscrin" data-slider="2" data-bs-toggle="modal" data-bs-target="#backdrop-1" data-bs-gallery="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" title="увеличить окно просмотра">
																<svg class="bi bi-aspect-ratio bg-opacity-75 text-bg-secondary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
																<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
																<path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path>
																</svg>
															</div>
														</div>
													</div>
													<?php
													} else {
													?>
													<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
														<div class="mrk-hit">хит</div>
														<div class="mrk-new">новинка</div>
													</div>
													<div class="swiper-slide" data-slider="2" data-bs-toggle="modal" data-bs-target="#backdrop-image" data-bs-gallery="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" title="увеличить окно просмотра">
														<div class="image-4x3 image-one">
															<img src="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" alt="image">
															<div class="fullscrin" data-slider="2" data-bs-toggle="modal" data-bs-target="#backdrop-image" data-bs-gallery="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" title="увеличить окно просмотра">
																<svg class="bi bi-aspect-ratio bg-opacity-75 text-bg-secondary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
																	<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
																	<path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path>
																</svg>
															</div>
														</div>
													</div>
													<?php }
												}
											} ?>

										</div>
										<div class="swiper-button-prev text-white rounded"> </div>
										<div class="swiper-button-next text-white rounded"></div>
									</div>
									<div class="slider-thumb order-1 d-flex px-md-0 px-2 mt-lg-0 mt-1">
										<div class="swiper slider-thumb__images slider-thumb__images--main" thumbsSlider="" style="--swiper-navigation-color:#000;--swiper-pagination-color:#000">
											<div class="swiper-wrapper">
												<?php
												if ( $product_video) {
													if ($total_count > 1) {
													?>
													<div class="swiper-slide youtube ratio slide-horizontal">
														<iframe class="iframe" width="560" height="315" src="<?php echo $product_video; ?>" title="YouTube video" frameborder="0"></iframe>
														<!-- <video class="iframe object-fit-cover" autoplay muted loop poster="<?= get_stylesheet_directory_uri(); ?>/img/video-thumb.png">
														<source src="<?= get_stylesheet_directory_uri(); ?>/assets/video-thumb.webm" type="video/webm">
														<source src="<?= get_stylesheet_directory_uri(); ?>/assets/video-thumb.mp4" type="video/mp4">
														</video> -->
														<!-- <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/WAl60Fn--SQ?si=fDU1jMa6qKpuCmjg" title="YouTube video" frameborder="0"></iframe> -->
													</div>

													<?php }
													else { ?>
													<div class="swiper-slide youtube ratio slide-horizontal"></div>
													<?php }
												}

												if ( $gallery_attachment_ids) {
													foreach ($gallery_attachment_ids as $gallery_attachment_id) {
													if ($total_count > 1) {
													?>
														<div class="swiper-slide swiper-item"><img src="<?= wp_get_attachment_url( $gallery_attachment_id, 'thumb' ); ?>" alt="thumb"></div>

													<?php
													} else {  
													?>
														<div class="swiper-slide swiper-item"></div>
														
													<?php
													}}
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="col-xl-5 mt-xl-0 mt-5">
						<div>
							<a href="" role="button">Вопрос-ответ</a>
							<a href="" role="button" class="ms-3">
								<svg class="me-2" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.5003 1.49995C13.1024 1.49995 12.7209 1.65798 12.4396 1.93929C12.1583 2.22059 12.0003 2.60212 12.0003 2.99995C12.0003 3.39777 12.1583 3.7793 12.4396 4.06061C12.7209 4.34191 13.1024 4.49995 13.5003 4.49995C13.8981 4.49995 14.2796 4.34191 14.5609 4.06061C14.8422 3.7793 15.0003 3.39777 15.0003 2.99995C15.0003 2.60212 14.8422 2.22059 14.5609 1.93929C14.2796 1.65798 13.8981 1.49995 13.5003 1.49995ZM11.0003 2.99995C11.0002 2.41338 11.2064 1.84546 11.5827 1.39556C11.9591 0.945654 12.4817 0.642411 13.059 0.538885C13.6364 0.435359 14.2318 0.538141 14.741 0.82925C15.2502 1.12036 15.6409 1.58126 15.8446 2.13131C16.0484 2.68135 16.0522 3.28553 15.8555 3.83812C15.6587 4.39071 15.274 4.85654 14.7685 5.15409C14.263 5.45165 13.669 5.56198 13.0903 5.4658C12.5117 5.36962 11.9853 5.07304 11.6033 4.62795L4.88527 7.74795C5.03971 8.23739 5.03971 8.76251 4.88527 9.25195L11.6033 12.3719C12.0071 11.9023 12.5709 11.5993 13.1855 11.5216C13.8 11.4439 14.4215 11.5972 14.9294 11.9516C15.4374 12.3061 15.7957 12.8365 15.9349 13.4401C16.0741 14.0436 15.9843 14.6774 15.6829 15.2185C15.3814 15.7596 14.8898 16.1696 14.3033 16.3689C13.7169 16.5682 13.0773 16.5427 12.5085 16.2974C11.9398 16.052 11.4824 15.6042 11.225 15.0408C10.9676 14.4774 10.9285 13.8385 11.1153 13.2479L4.39727 10.1279C4.0647 10.5155 3.62142 10.7919 3.12704 10.92C2.63267 11.0481 2.11093 11.0217 1.632 10.8444C1.15308 10.6671 0.739941 10.3474 0.448173 9.92824C0.156404 9.50909 0 9.01064 0 8.49995C0 7.98925 0.156404 7.49081 0.448173 7.07166C0.739941 6.65252 1.15308 6.33278 1.632 6.15547C2.11093 5.97816 2.63267 5.95177 3.12704 6.07986C3.62142 6.20795 4.0647 6.48438 4.39727 6.87195L11.1153 3.75195C11.0388 3.50862 11 3.25501 11.0003 2.99995V2.99995ZM2.50027 6.99995C2.10244 6.99995 1.72091 7.15798 1.43961 7.43929C1.1583 7.72059 1.00027 8.10212 1.00027 8.49995C1.00027 8.89777 1.1583 9.2793 1.43961 9.56061C1.72091 9.84191 2.10244 9.99995 2.50027 9.99995C2.89809 9.99995 3.27962 9.84191 3.56093 9.56061C3.84223 9.2793 4.00027 8.89777 4.00027 8.49995C4.00027 8.10212 3.84223 7.72059 3.56093 7.43929C3.27962 7.15798 2.89809 6.99995 2.50027 6.99995ZM13.5003 12.4999C13.1024 12.4999 12.7209 12.658 12.4396 12.9393C12.1583 13.2206 12.0003 13.6021 12.0003 13.9999C12.0003 14.3978 12.1583 14.7793 12.4396 15.0606C12.7209 15.3419 13.1024 15.4999 13.5003 15.4999C13.8981 15.4999 14.2796 15.3419 14.5609 15.0606C14.8422 14.7793 15.0003 14.3978 15.0003 13.9999C15.0003 13.6021 14.8422 13.2206 14.5609 12.9393C14.2796 12.658 13.8981 12.4999 13.5003 12.4999Z" fill="#262626"/>
								</svg>Поделиться
							</a>
						</div>
						<div class="card card-body border-0 mt-xl-0 mt-5 px-0 bg-light">
							<div class="row g-3 px-4">
								<div class="col-12">
									<div class="d-flex justify-content-xl-start justify-content-md-center justify-content-start align-items-center mb-3">
										<h2 class="text-danger text-nowrap m-0 display-5" style="font-weight: 800;">
											<?php
											if ( $_product->get_price() ) {
												echo $_product->get_price() . ' ' . get_woocommerce_currency_symbol();
											}
											?>
										</h2>
										<br>
										<?php if ( $_product->get_regular_price() ) { ?>
											<span class="text-decoration-line-through text-secondary fs-4 ps-2"><?php echo $_product->get_regular_price() . ' ' . get_woocommerce_currency_symbol() ?></span>
										<?php }?>
										<div class="mrk-card-heart no-active ms-auto"><?php echo do_shortcode("[yith_wcwl_add_to_wishlist]")?></div>
									</div>
								</div>
								<div class="col-12">
									<div class="mrk-box-bonus d-flex align-items-center justify-content-between px-3 py-2 rounded" style="min-height: 0;">
										<div>За этот заказ вы получите:
											<div class="text-primary fs-3 fw-bold">+ 75 баллов</div>
										</div>
										<a href="" role="button" class="text-decoration-underline fw-medium">Подробнее</a>
									</div>
								</div>
								<div class="col-12">
									<div class="row align-items-center mx-auto w-100 gap-2">
										<div class="col px-0">
											<div class="quantity quantity-product-card">
												<budton type="button" class="minus input-group-text flex-grow-1 justify-content-center">&minus;</budton><label class="screen-reader-text" for="quantity_661bd21d11c6d">Количество товара blockly is a ROS package</label>
												<input type="number" id="quantity_661bd21d11c6d" class="input-text qty text flex-grow-1" name="cart[9778d5d219c5080b9a6a17bef029331c][qty]" value="1" aria-label="Количество товара" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
												<button type="button" class="plus input-group-text flex-grow-1 justify-content-center">&plus;</button>
											</div>
										</div>
										<div class="col px-0">
											<div class="mrk-card-quantity-kit">
												<a href="#" class="btn btn-primary btn-order-kits w-100">
													<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
													В корзину
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="d-flex pt-3">
									<div class="mrk-services d-flex justify-content-between d-flex flex-wrap w-100">
										<div><a href="#" role="button">Условия оплаты</a></div>
										<div><a href="#" role="button">Доставка</a></div>
										<div><a href="#" role="button">Возврат</a></div>
									</div>
								</div>
							</div>
						</div>
						<p class="fw-bold fs-5 mt-3 mb-2">Скачать документацию: </p>
						<form class="row g-2">
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg1" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg1" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Инструкция</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg2" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg2" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Каталог</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg3" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg3" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Протокол испытаний</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg4" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg4" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Прайс лист</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg5" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg5" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">IFC модель 3D</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg6" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg6" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Revit модель 3D</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg7" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg7" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">PDF чертежи</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg8" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg8" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Протокол испытаний</div>
								</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative">
								<label for="formFileLg9" class="form-label visually-hidden-focusable">Пример большого ввода файла</label>
								<input class="form-control form-control-lg opacity-0 position-absolute" id="formFileLg9" type="file">
								<div class="mrk-download d-flex p-2">
									<div class="fw-medium">Сертификаты</div>
								</div>
								</div>
							</div>
						</form>
					</div>
					<!-- слайдер с табами изображениями -  КОНЕЦ -->
				</div>
				<div class="col-12 ">
					<div class="mrk-description card card-body border-0 px-md-0 mt-5">
						<div class="row px-md-3">
							<div class="col-md-6 pe-md-3 px-0">
								<h2 class="mrk-block-title text-nowrap fw-medium pb-2">Описание</h2>
								<?php the_content() ?>
							</div>
							<div class="col-md-6 ps-md-3 px-0">
								<h2 class="mrk-block-title text-nowrap fw-medium pb-2">Характеристики</h2>
								<ul class="mrk-list-group list-group-flush mb-4 ps-0">
									<li class="mrk-list-group-item d-flex pt-1 pb-2"><span class="text-nowrap">Название</span><span class="mrk-line mx-2"></span><span class="text-nowrap">Название</span></li>
									<li class="mrk-list-group-item d-flex pt-1 pb-2"><span class="text-nowrap">Название</span><span class="mrk-line mx-2"></span><span class="text-nowrap">Название</span></li>
									<?php
										if ( $_product->get_attributes() ) {

											foreach ( $_product->get_attributes() as $key => $value) {
											?>
												<li class="mrk-list-group-item d-flex pt-1 pb-2"><span class="text-nowrap"><?php echo $value['name'] ?></span><span class="mrk-line mx-2"></span><span class="text-nowrap"><?php echo $value['options'][0] ?></span></li>
											<?php
											}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Swiper -->
				<div class="swiper swiper-general">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 py-3">
						<h2 class="display-4 fw-bold mb-0">Покупают вместе</h2>
						<div class="position-relative" style="height:1rem;width:74px;">
							<div class="swiper-button-prev uploaded-in-prev text-white rounded position-absolute top-0 bottom-0 start-0"></div>
							<div class="swiper-button-next uploaded-in-next text-white rounded position-absolute top-0 bottom-0 end-0"></div>
						</div>
					</div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body d-flex flex-column h-100 px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper swiper-general my-5">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 py-3">
						<h2 class="display-4 fw-bold mb-0">Похожие товары</h2>
						<div class="position-relative" style="height:1rem;width:74px;">
							<div class="swiper-button-prev uploaded-in-prev text-white rounded position-absolute top-0 bottom-0 start-0"></div>
							<div class="swiper-button-next uploaded-in-next text-white rounded position-absolute top-0 bottom-0 end-0"></div>
						</div>
					</div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body d-flex flex-column h-100 px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card border-0"> 
								<div class="card-kit-img">
									<div class="swiper swiper-children">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-2.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
											<div class="swiper-slide">
												<div class="position-absolute start-0 top-0 mt-2 ms-2 text-start">
													<div class="mrk-hit">хит</div>
													<div class="mrk-new">новинка</div>
												</div>
												<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/slider/image-thumb-slider-1.jpg" alt="">
											</div>
										</div>
										<div class="swiper-button-next next-btn text-white rounded"></div>
										<div class="swiper-button-prev prev-btn text-white rounded"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
								<div class="card-body px-0">
									<div class="d-flex align-items-end flex-wrap mt-auto mb-2">
										<h3 class="text-danger text-nowrap d-inline-block mb-0" style="font-size: 2rem;font-weight: 800;">1 721 ₽</h3>
										<span class="text-decoration-line-through text-secondary fs-4 fw-medium ps-2">51 721 ₽</span>
										<span class="text-danger fw-bold pb-1 ps-2" style="font-size: 1rem;">-5%</span>
									</div>
									<p class="card-title fw-medium text-dark text-start fs-6 mb-3">
									Труба круглая AISI 304, ASTM A554, Ø50.8×1.35×6000 мм, GRIT 600
									</p>
									<div class="mrk-bonus text-start">
										<span class="text-primary py-1 px-2 me-2">+75 баллов</span>
										<p class="d-inline-block mb-0">4.5
											<svg class="mb-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1152_2371)">
												<path d="M5.35399 5.619L7.53799 1.292C7.57993 1.20495 7.64547 1.13143 7.72715 1.07981C7.80883 1.02819 7.90336 1.00053 7.99999 1C8.18299 1 8.36599 1.097 8.46499 1.292L10.649 5.619L15.547 6.315C15.6691 6.33419 15.7808 6.39491 15.8633 6.48691C15.9459 6.57891 15.9941 6.69655 16 6.82C16.007 6.90219 15.9953 6.98489 15.9659 7.06194C15.9364 7.13899 15.89 7.2084 15.83 7.265L12.307 10.621L13.137 15.351C13.215 15.794 12.777 16.141 12.391 15.943L7.99999 13.687L3.61099 15.943C3.56508 15.9668 3.51587 15.9837 3.46499 15.993C3.12299 16.053 2.79699 15.739 2.86499 15.351L3.69499 10.621L0.172988 7.265C0.118233 7.2132 0.0747109 7.15069 0.0451227 7.08137C0.0155346 7.01204 0.000511966 6.93737 0.00098751 6.862C0.00103952 6.75544 0.0304489 6.65095 0.0859875 6.56C0.125386 6.49407 0.179086 6.43783 0.243125 6.39542C0.307164 6.35302 0.379908 6.32553 0.455988 6.315L5.35399 5.619ZM7.99999 12.527C8.08071 12.5267 8.16031 12.5459 8.23199 12.583L11.918 14.477L11.224 10.52C11.2076 10.429 11.2138 10.3354 11.2421 10.2473C11.2703 10.1593 11.3197 10.0795 11.386 10.015L14.293 7.245L10.241 6.669C10.1571 6.65633 10.0775 6.62351 10.0091 6.57335C9.94061 6.52319 9.88534 6.45719 9.84799 6.381L8.00099 2.723L7.99999 2.726V12.526V12.527Z" fill="#FFA800"/>
												</g>
												<defs>
												<clipPath id="clip0_1152_2371">
												<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
												</clipPath>
												</defs>
											</svg>
										</p>
									</div>
								</div>
								<div class="card-footer border-0 p-0 mt-auto">
									<div class="mrk-card-quantity-kits">
										<a href="#" class="d-flex justify-content-center btn btn-primary btn-order-kits w-100">
											<img class="pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
											В корзину
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="modal fade" id="backdrop-1" tabindex="-1" role="dialog" aria-labelledby="backdrop-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-fullscreen">
				<div class="modal-content position-relative">
					<div class="modal-header position-absolute top-0 end-0 border-0 z-3">
						<button class="btn-close bg-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body p-0">
						<div class="carousel slide slider__images--modal carousel-fade h-100" id="carouselButtons-1">
						<div class="carousel-inner">
							<?php
							if ( $product_video) {
							?>
							<div class="carousel-item bg-white active">
								<div class="youtube ratio ratio-16x9">
								<iframe class="iframe object-fit-cover" src="<?php echo $product_video; ?>" allow="autoplay;" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<?php }
								if ( $gallery_attachment_ids ) {
									foreach ($gallery_attachment_ids as $gallery_attachment_id) {
									?>
										<div class="carousel-item d-flex justify-content-center align-items-center bg-white">
										<div class="image-4x3"><img class="img-fluid py-md-3" src="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" alt="..."></div>
										</div>
									<?php }
								}
							?>

						</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselButtons-1" data-bs-slide="prev"><span class="carousel-control-prev-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Предыдущий</span></button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselButtons-1" data-bs-slide="next"><span class="carousel-control-next-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Следующий</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="backdrop-video" tabindex="-1" role="dialog" aria-labelledby="backdrop-video" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-fullscreen">
				<div class="modal-content position-relative">
				<div class="modal-header position-absolute top-0 end-0 border-0 z-3">
					<button class="btn-close bg-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-0">
					<div class="carousel slide slider__images--modal carousel-fade h-100" id="carouselButtons-2">
					<div class="carousel-inner">
						<?php
						if ( $product_video) {
						?>
						<div class="carousel-item bg-white active">
							<div class="youtube ratio ratio-16x9">
							<iframe class="iframe object-fit-cover" src="<?php echo $product_video; ?>" allow="autoplay;" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<?php }?>
					</div>
					<button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselButtons-2" data-bs-slide="prev"><span class="carousel-control-prev-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Предыдущий</span></button>
					<button class="carousel-control-next d-none" type="button" data-bs-target="#carouselButtons-2" data-bs-slide="next"><span class="carousel-control-next-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Следующий</span></button>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="backdrop-image" tabindex="-1" role="dialog" aria-labelledby="backdrop-image" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-fullscreen">
				<div class="modal-content position-relative">
				<div class="modal-header position-absolute top-0 end-0 border-0 z-3">
					<button class="btn-close bg-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-0">
					<div class="carousel slide slider__images--modal carousel-fade h-100" id="imageButtons">
					<div class="carousel-inner">
						<?php
						if ( $product_video) {
						?>
						<div class="carousel-item bg-white active">
							<div class="youtube ratio ratio-16x9">
							<iframe class="iframe object-fit-cover" src="<?php echo $product_video; ?>" allow="autoplay;" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<?php }
						if ( $gallery_attachment_ids ) {
							foreach ($gallery_attachment_ids as $gallery_attachment_id) {
							?>
							<div class="carousel-item d-flex justify-content-center align-items-center bg-white">
							<div class="image-4x3"><img class="img-fluid py-md-3" src="<?= wp_get_attachment_url( $gallery_attachment_id, 'full' ); ?>" alt="..."></div>
							</div>
						<?php }
						}
							
						?>
					</div>
					<button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselButtons-1" data-bs-slide="prev"><span class="carousel-control-prev-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Предыдущий</span></button>
					<button class="carousel-control-next d-none" type="button" data-bs-target="#carouselButtons-1" data-bs-slide="next"><span class="carousel-control-next-icon text-bg-dark rounded" aria-hidden="true"></span><span class="visually-hidden">Следующий</span></button>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- modal -->
	</div>
</div>
<?php

get_footer( 'shop' );



