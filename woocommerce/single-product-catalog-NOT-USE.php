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
			<!-- Post List -->
			<div class="row px-2">
				<div class="<?= bootscore_main_col_class(); ?> px-0">
					<!-- Grid Layout -->

					<div class="entry-content">
						<h1 class="display-5 text-primary fw-bold mt-md-0 my-4"><?php echo $_product->get_name() ?></h1>

						<!-- если несколько изображений или есть видео -->
						<?php
							if ( $product_video || $gallery_attachment_ids) {
						?>

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
							<div class="row">
								<!-- слайдер с табами изображениями - НАЧАЛО -->
								<div class="col-xl-8">
									<div class="row justify-content-center">
									<?php if ( $product_video) { ?>
									<div class="slider">
									<? } else { ?>
										<div class="slider slider-vertical">
										<? } ?>
											<div class="swiper slider__images order-2 slider__images--main slider__images-cotalog">
												<div class="swiper-wrapper">
													<?php if ( $product_video) {
														if ($total_count > 1) {
														?>
														<div class="swiper-slide" data-slider="1" data-bs-toggle="modal" data-bs-target="#backdrop-1" data-bs-gallery="<?php echo $product_video; ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0">
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
								<div class="col-xl-4">
									<div class="card card-body border-0 mt-xl-0 mt-5">
										<div class="row g-3">
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
													<div class="mrk-card-heart no-active ms-auto"></div>
												</div>
											</div>
											<div class="col-12">
												<div class="mrk-box-bonus px-3 py-2 rounded">
													<div>За этот заказ вы получите:</div>
													<div class="text-primary fs-3 fw-bold mb-4">+ 75 баллов</div>
													<a href="" role="button" class="text-decoration-underline">Подробнее</a>
												</div>
											</div>
											<div class="col-12">
												<div class="mrk-cart-quantity">
													<a href="#" class="btn btn-primary btn-order w-100">
														<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
														В корзину
													</a>
												</div>
											</div>
											<div class="col-12">
												<div class="d-flex pt-3">
													<div class="mrk-services" >
														<a href="#" role="button">Условия оплаты</a>
														<a href="#" role="button">Доставка</a>
														<a href="#" role="button">Возврат</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- слайдер с табами изображениями -  КОНЕЦ -->
							</div>
							<div class="tab-content pt-4" id="nav-tabContent">
								<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="mrk-cards-kits mt-3">
										<div class="row">
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/1.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к ванте (серьга)
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/2.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к стене под резьбу М14
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/3.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление ванты(тяги) козырька к стойке алюминиевого фасада, AISI 304
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/4.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">2 100 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/5.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Пистолет для хим.анкера Bit Ф-1103
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">7 300 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/6.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														I-спайдер-200мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/7.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление тяги к стене двойное
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">16 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/8.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Фланец для трубы Ø50.8 мм, литой, полированный под 3 самореза 4.8 мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">6 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<img src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/dlya-vann.jpg" class="img-fluid" alt="...">
										<div class="row mb-4">
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/1.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к ванте (серьга)
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/2.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к стене под резьбу М14
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/3.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление ванты(тяги) козырька к стойке алюминиевого фасада, AISI 304
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/4.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">2 100 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/5.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Пистолет для хим.анкера Bit Ф-1103
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">7 300 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/6.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														I-спайдер-200мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/7.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление тяги к стене двойное
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">16 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/8.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Фланец для трубы Ø50.8 мм, литой, полированный под 3 самореза 4.8 мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">6 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-5">
											<span class="me-4">Показать:
											<span class="input-current px-3">
												<input class="ps-1" type="number" value="10">
												<button role="button"><svg class="mb-1" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0L5 5L10 0H0Z" fill="#666666"/>
												</svg></button>
											</span>
										</span>

											1-5 из 13
											<span class="ms-4" class="collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse-card-kits" aria-expanded="false">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 3px; margin-right: 15px;">
													<path d="M11.8467 2.5135L10.6667 1.3335L4 8.00016L10.6667 14.6668L11.8467 13.4868L6.36 8.00016L11.8467 2.5135Z" fill="#70708A"/>
												</svg>

												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 3px;">
													<path d="M4.15234 13.4868L5.33234 14.6668L11.999 8.00016L5.33234 1.3335L4.15234 2.5135L9.63901 8.00016L4.15234 13.4868Z" fill="#70708A"/>
												</svg>
											</span>
											<div class="collapse" id="account-collapse-card-kits">
												<div class="row mt-4">
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/1.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Крепление стеклодержателя (рутеля) к ванте (серьга)
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/2.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Крепление стеклодержателя (рутеля) к стене под резьбу М14
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/3.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Крепление ванты(тяги) козырька к стойке алюминиевого фасада, AISI 304
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 059 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/4.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">2 100 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/5.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Пистолет для хим.анкера Bit Ф-1103
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">7 300 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/6.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																I-спайдер-200мм
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/7.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Крепление тяги к стене двойное
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">16 059 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
														<div class="card border-0 h-100">
															<div class="card-kit-img">
																<div class="mrk-card-heart no-active"></div>
																<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/8.png" alt="">
															</div>
															<div class="card-body d-flex flex-column h-100">
																<p class="card-title fw-medium text-dark fs-6 mb-4">
																Фланец для трубы Ø50.8 мм, литой, полированный под 3 самореза 4.8 мм
																</p>
																<div class="d-flex flex-wrap mt-auto">
																	<h3 class="text-primary fw-bold text-nowrap d-inline-block">6 059 ₽</h3>
																	<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
																</div>
																<div class="mrk-cart-quantity">
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
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="mrk-cards-kits mt-3">
										<div class="row">
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/1.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Стеклянный козырек на вантах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">48 000 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/2.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Стеклянный козырек на консоли из листа
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">91 300 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/3.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Козырек на треугольном скате на спайдерах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/4.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Стеклянный козырек на вантах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">48 000 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/5.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Стеклянный козырек на консоли из листа
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">91 300 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/6.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Козырек на треугольном скате на спайдерах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/7.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Козырек на треугольном скате на спайдерах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/8.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
															Козырек на треугольном скате на спайдерах
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
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
								</div>
								<div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="mrk-cards-kits mt-3">
										<div class="row">
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/1.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к ванте (серьга)
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/2.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление стеклодержателя (рутеля) к стене под резьбу М14
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 721 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/3.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление ванты(тяги) козырька к стойке алюминиевого фасада, AISI 304
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/4.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">2 100 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">51 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/5.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Пистолет для хим.анкера Bit Ф-1103
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">7 300 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">671 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/6.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														I-спайдер-200мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">46 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/7.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Крепление тяги к стене двойное
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">16 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
															<a href="#" class="btn btn-primary btn-order w-100">
																<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																В корзину
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
												<div class="card border-0 h-100">
													<div class="card-kit-img">
														<div class="mrk-card-heart no-active"></div>
														<img class="card-img-top" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/catalogs/cards-slider/8.png" alt="">
													</div>
													<div class="card-body d-flex flex-column h-100">
														<p class="card-title fw-medium text-dark fs-6 mb-4">
														Фланец для трубы Ø50.8 мм, литой, полированный под 3 самореза 4.8 мм
														</p>
														<div class="d-flex flex-wrap mt-auto">
															<h3 class="text-primary fw-bold text-nowrap d-inline-block">6 059 ₽</h3>
															<span class="text-decoration-line-through fs-5 ps-2">111 721 ₽</span>
														</div>
														<div class="mrk-cart-quantity">
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
								</div>
							</div>
							<!--Блок Готовые решения -->
							<div class="ready-made-solutions mt-4">
								<h2 class="display-5 text-primary fw-bold mt-md-0 my-4">Готовые решения</h2>
								<nav aria-label="breadcrumb" class="wc-breadcrumb breadcrumb-scroller pb-2">
									<ol class="breadcrumb mb-0"><li class="breadcrumb-item"><a href="http://datsu-marketplace">Главная</a></li><li class="breadcrumb-item"><a href="http://datsu-marketplace/shop/">Проектчат</a></li><li class="breadcrumb-item"><a href="http://datsu-marketplace/product-category/truba-ne-rjavejushaya/">Установка стеклянного козырька за 30 минут</a></li></ol>
								</nav>

								<div class="d-flex justify-content-between align-items-start mb-2" style=
								"height: 44px;">
									<span class="text-secondary">Открытый канал</span>
									<div class="d-flex align-items-start gap-3">


										<div class="mrk-chat-menu">
											<div class="text-end">
												<a href="" role="button" class="ms-1 ms-md-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
													<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_1556_3291)">
														<path d="M14.6786 12.9291C15.889 11.2775 16.4311 9.22976 16.1965 7.19559C15.9619 5.16141 14.9679 3.29082 13.4133 1.95806C11.8588 0.6253 9.85831 -0.0713465 7.81217 0.00749495C5.76603 0.0863364 3.8251 0.934852 2.37771 2.38328C0.930312 3.83172 0.0831854 5.77325 0.00580817 7.81944C-0.0715691 9.86564 0.626509 11.8656 1.96038 13.4192C3.29425 14.9728 5.16555 15.9655 7.1999 16.1986C9.23424 16.4318 11.2816 15.8882 12.9324 14.6766H12.9311C12.9686 14.7266 13.0086 14.7742 13.0536 14.8204L17.8661 19.6329C18.1005 19.8675 18.4185 19.9993 18.7501 19.9994C19.0816 19.9995 19.3997 19.8679 19.6342 19.6335C19.8688 19.3991 20.0006 19.0812 20.0007 18.7496C20.0009 18.418 19.8693 18.1 19.6349 17.8654L14.8224 13.0529C14.7777 13.0077 14.7296 12.9659 14.6786 12.9279V12.9291ZM15.0011 8.12415C15.0011 9.02699 14.8233 9.92099 14.4778 10.7551C14.1323 11.5892 13.6259 12.3471 12.9875 12.9855C12.3491 13.6239 11.5912 14.1303 10.7571 14.4758C9.92296 14.8213 9.02896 14.9992 8.12612 14.9992C7.22328 14.9992 6.32929 14.8213 5.49517 14.4758C4.66106 14.1303 3.90317 13.6239 3.26476 12.9855C2.62636 12.3471 2.11995 11.5892 1.77445 10.7551C1.42895 9.92099 1.25112 9.02699 1.25112 8.12415C1.25112 6.30079 1.97545 4.5521 3.26476 3.26279C4.55408 1.97348 6.30276 1.24915 8.12612 1.24915C9.94948 1.24915 11.6982 1.97348 12.9875 3.26279C14.2768 4.5521 15.0011 6.30079 15.0011 8.12415Z" fill="#262626"/>
														</g>
														<defs>
														<clipPath id="clip0_1556_3291">
														<rect width="20" height="20" fill="white"/>
														</clipPath>
														</defs>
													</svg>
													<span class="visually-hidden-focusable">Search</span>
												</a>

												<a class="collapsed ps-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
													<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 15C3.125 14.8342 3.19085 14.6753 3.30806 14.5581C3.42527 14.4408 3.58424 14.375 3.75 14.375H16.25C16.4158 14.375 16.5747 14.4408 16.6919 14.5581C16.8092 14.6753 16.875 14.8342 16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15ZM3.125 10C3.125 9.83424 3.19085 9.67527 3.30806 9.55806C3.42527 9.44085 3.58424 9.375 3.75 9.375H16.25C16.4158 9.375 16.5747 9.44085 16.6919 9.55806C16.8092 9.67527 16.875 9.83424 16.875 10C16.875 10.1658 16.8092 10.3247 16.6919 10.4419C16.5747 10.5592 16.4158 10.625 16.25 10.625H3.75C3.58424 10.625 3.42527 10.5592 3.30806 10.4419C3.19085 10.3247 3.125 10.1658 3.125 10ZM3.125 5C3.125 4.83424 3.19085 4.67527 3.30806 4.55806C3.42527 4.44085 3.58424 4.375 3.75 4.375H16.25C16.4158 4.375 16.5747 4.44085 16.6919 4.55806C16.8092 4.67527 16.875 4.83424 16.875 5C16.875 5.16576 16.8092 5.32473 16.6919 5.44194C16.5747 5.55915 16.4158 5.625 16.25 5.625H3.75C3.58424 5.625 3.42527 5.55915 3.30806 5.44194C3.19085 5.32473 3.125 5.16576 3.125 5Z" fill="#262626"/>
													</svg>
												</a>
											</div>
											<div class="collapse" id="collapseExample" style="">
												<div class="card card-body px-0">
													<ul class="mb-0">
														<li>
															<a class="" href="#">Action</a>
														</li>
														<li>
															<a class="" href="#">Another action</a>
														</li>
													</ul>
													<div class="mrk-project-chat d-lg-none d-block px-0">
														<div class="border-top my-3"></div>
														<h3 class="text-uppercase fs-4 px-3">проектчат</h3>
														<ul class="list ps-0">
															<li class="mb-2">
															<button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#home-collapse22" aria-expanded="false">
															стеклянные перегородки для коттеджей
															</button>
															<div class="collapse" id="home-collapse22">
																<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
																</ul>
															</div>
															</li>
															<li class="mb-2">
															<button class="btn btn-toggle d-inline-flex align-items-center border-0 collapsed text-uppercase text-start fs-6" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse23" aria-expanded="false">
															стеклянные перегородки для бань и саун
															</button>
															<div class="collapse" id="dashboard-collapse23">
																<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
																<li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
																</ul>
															</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<input class="search-field field form-control collapse" type="search" id="collapse-search" placeholder="Поиск…" value="" name="s" class="collapse">
										</div>
									</div>
								</div>
								<!-- Проект Чат -->
								<div class="mrk-chat">
									<div class="mb-4">
										<div class="d-flex justify-content-between align-items-end">
											<div>
												<p class="text-secondary mb-2">@Константин Комков</p>
												<p class="text-secondary mb-0">03.07.2022</p>
											</div>
											<div class="dropdown">
												<button class="btn btn-secondary dropdown-toggle me-1 mb-1" type="button" id="dropdownRightMenuButtonDots" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M5 10C5.53043 10 6.03914 10.2107 6.41421 10.5858C6.78929 10.9609 7 11.4696 7 12C7 12.5304 6.78929 13.0391 6.41421 13.4142C6.03914 13.7893 5.53043 14 5 14C4.46957 14 3.96086 13.7893 3.58579 13.4142C3.21071 13.0391 3 12.5304 3 12C3 11.4696 3.21071 10.9609 3.58579 10.5858C3.96086 10.2107 4.46957 10 5 10ZM12 10C12.5304 10 13.0391 10.2107 13.4142 10.5858C13.7893 10.9609 14 11.4696 14 12C14 12.5304 13.7893 13.0391 13.4142 13.4142C13.0391 13.7893 12.5304 14 12 14C11.4696 14 10.9609 13.7893 10.5858 13.4142C10.2107 13.0391 10 12.5304 10 12C10 11.4696 10.2107 10.9609 10.5858 10.5858C10.9609 10.2107 11.4696 10 12 10ZM19 10C19.5304 10 20.0391 10.2107 20.4142 10.5858C20.7893 10.9609 21 11.4696 21 12C21 12.5304 20.7893 13.0391 20.4142 13.4142C20.0391 13.7893 19.5304 14 19 14C18.4696 14 17.9609 13.7893 17.5858 13.4142C17.2107 13.0391 17 12.5304 17 12C17 11.4696 17.2107 10.9609 17.5858 10.5858C17.9609 10.2107 18.4696 10 19 10Z" fill="black"/>
													</svg>
												</button>
												<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownRightMenuButtonDots" style="">
													<li>
														<a class="dropdown-item" href="#">Action</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Another action</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="mrk-chat-gallery">
													<div class="row w-100 mx-auto">
														<div class="col-6 px-0">
															<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery-chat/1.jpg" alt="">
														</div>
														<div class="col-6 px-0">
															<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery-chat/2.jpg" alt="">
														</div>
														<div class="col-6 px-0">
															<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery-chat/3.jpg" alt="">
														</div>
														<div class="col-6 px-0">
															<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/gallery-chat/4.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<p class="fw-bold mt-md-0 mt-5 mb-4">Друзья, всем привет!</p>
												<p class="mb-4">В сентябре 2024 года мы проводим конференцию Datsu.</p>
												<p class="mb-4">В этом чате мы приглашаем игроков, гостей и  предпринимателей принять в ней участие. </p>
												<p class="mb-4">Ставьте лайки, делитесь идеями и откликайтесь предложениями на заказы организаторов</p>
											</div>
										</div>
									</div>

									<div class="mb-4">
										<div class="d-flex justify-content-between align-items-end">
											<div>
												<p class="text-secondary mb-2">@Константин Комков</p>
												<p class="text-secondary mb-0">03.07.2022</p>
											</div>
											<div class="dropdown">
												<button class="btn btn-secondary dropdown-toggle me-1 mb-1" type="button" id="dropdownRightMenuButtonDots" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M5 10C5.53043 10 6.03914 10.2107 6.41421 10.5858C6.78929 10.9609 7 11.4696 7 12C7 12.5304 6.78929 13.0391 6.41421 13.4142C6.03914 13.7893 5.53043 14 5 14C4.46957 14 3.96086 13.7893 3.58579 13.4142C3.21071 13.0391 3 12.5304 3 12C3 11.4696 3.21071 10.9609 3.58579 10.5858C3.96086 10.2107 4.46957 10 5 10ZM12 10C12.5304 10 13.0391 10.2107 13.4142 10.5858C13.7893 10.9609 14 11.4696 14 12C14 12.5304 13.7893 13.0391 13.4142 13.4142C13.0391 13.7893 12.5304 14 12 14C11.4696 14 10.9609 13.7893 10.5858 13.4142C10.2107 13.0391 10 12.5304 10 12C10 11.4696 10.2107 10.9609 10.5858 10.5858C10.9609 10.2107 11.4696 10 12 10ZM19 10C19.5304 10 20.0391 10.2107 20.4142 10.5858C20.7893 10.9609 21 11.4696 21 12C21 12.5304 20.7893 13.0391 20.4142 13.4142C20.0391 13.7893 19.5304 14 19 14C18.4696 14 17.9609 13.7893 17.5858 13.4142C17.2107 13.0391 17 12.5304 17 12C17 11.4696 17.2107 10.9609 17.5858 10.5858C17.9609 10.2107 18.4696 10 19 10Z" fill="black"/>
													</svg>
												</button>
												<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownRightMenuButtonDots" style="">
													<li>
														<a class="dropdown-item" href="#">Action</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Another action</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="mrk-chat-image">
											<img class="img-fluid" src="<?= get_stylesheet_directory_uri(); ?>/img/gallery-chat/big-img.jpg" alt="">
										</div>
										<div class="mrk-chat-descr mt-4">
											<p class="mrk-chat-title fw-bold">Гостям праздника:</p>
											<p>Узнать полезную информацию, обсудить и предложить идеи, принять участие в конкурсах или даже стать ведущим!!!</p>
											<p>Ниже мы составили список групп по тематикам. Если будут вопросы, не стесняйтесь их задавать нашей группе поддержки и конечно нашему чат боту <span class="text-primary">@Kudabot</span></p>
											<ul>
												<li>
													<a class="mrk-chat-item" href="#">Расписание и программа</a>
													<span class="mrk-chat-group">открытая группа</span>
												</li>
												<li>
													<a class="mrk-chat-item" href="#">Еда</a>
													<span class="mrk-chat-group">открытая группа</span>
												</li>
												<li>
													<a class="mrk-chat-item" href="#">Хочу заработать</a>
													<span class="mrk-chat-group">открытая группа</span>
												</li>
											</ul>
										</div>
										<div class="mt-5">
											<div class="d-flex flex-md-nowrap flex-wrap gap-md-0 gap-4 mb-5">
												<div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/gallery-chat/card-img1.jpg" alt="" style="width: 122px;"></div>
												<div class="flex-grow-1 py-0">
													<div class="row g-3">
														<div class="col-xl-8 col-lg-7">
															<a class="d-block fw-semibold fs-6 mb-3" href="">Купить билет на главное вечернее шоу фестиваля</a>
															<p>Скидка 50% за 3 месяца до начала праздника и VIP обслуживание  ...</p>
														</div>
														<div class="col-xl-4 col-lg-5">
															<div class="mt-auto text-lg-center">
																<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
																<span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
															</div>
															<div class="mrk-cart d-flex align-items-center justify-content-lg-end">
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																		В корзину
																	</a>
																</div>
																<div class="mrk-card-heart no-active ms-xl-3 ms-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex flex-md-nowrap flex-wrap gap-md-0 gap-4 mb-5">
												<div class="flex-shrink-0"><img class="object-fit-contain me-4" src="<?= get_stylesheet_directory_uri(); ?>/img/gallery-chat/card-img2.jpg" alt="" style="width: 122px;"></div>
												<div class="flex-grow-1 py-0">
													<div class="row g-3">
														<div class="col-xl-8 col-lg-7">
															<a class="d-block fw-semibold fs-6 mb-3" href="">Купить билет на главное вечернее шоу фестиваля</a>
															<p>Скидка 50% за 3 месяца до начала праздника и VIP обслуживание  ...</p>
														</div>
														<div class="col-xl-4 col-lg-5">
															<div class="mt-auto text-lg-center">
																<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
																<span class="text-decoration-line-through fs-5 ps-2">1 721 ₽</span>
															</div>
															<div class="mrk-cart d-flex align-items-center justify-content-lg-end">
																<div class="mrk-cart-quantity">
																	<a href="#" class="btn btn-primary btn-order w-100">
																		<img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
																	В корзину
																	</a>
																</div>
																<div class="mrk-card-heart no-active ms-xl-3 ms-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php }
							else  {
						?>
						<!-- если одно изображение -->
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Крепление стеклодержателя (рутеля) к ванте (серьга)</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
									<div class="d-flex mb-5 me-4">
										<div class="flex-shrink-0"><img class="mrk-card-img-descript object-fit-contain me-3" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/4.png" alt="" style="width: 197px;"></div>
										<div class="flex-grow-1 py-0">
											<div class="row g-3">
												<div class="col-xl-8 col-lg-7">
													<a class="d-block fw-semibold fs-4 mb-3" href="">Крепление стеклодержателя (рутеля) к ванте (серьга)</a>
													<div class="mb-3">
														<p class="mkr-label">Тип: </p>
														<p>Вантовые крепления для козырьков</p>
													</div>
													<div class="mb-3">
														<p class="mkr-label">Материал: </p>
														<p>AISI 304 (08Х18Н10)</p>
													</div>
													<div class="mb-3">
														<p class="mkr-label">Описание:</p>
														<p>Крепление рутеля к тяге (серьга). Состоит из костяка с резьбой M14 и техническим отверстием 16,5 мм.</p>
													</div>
													<div class="mb-3">
														<p class="mkr-label">Назначение:</p>
														<p>Применяется при монтаже козырьков из стекла, козырьков из поликарбоната, навесов над входом в магазин, козырьков над входом в подвал или над местом курения</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-5 ps-xl-4">
												<div class="mt-auto">
													<h3 class="text-primary fw-bold text-nowrap d-inline-block">1 777 ₽</h3>
												</div>
												<div class="mrk-cart d-flex flex-column">
													<div class="mrk-cart-quantity mb-3">
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
												<div class="col-xl-8 col-lg-7">
												<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
												</div>
												<div class="col-xl-4 col-lg-5">
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Крепление стеклодержателя (рутеля) к ванте (серьга)</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
										<div class="flex-shrink-0"><img class="object-fit-contain me-4" width="70" src="<?= get_stylesheet_directory_uri(); ?>/img/catalogs/cards-image/2.png" alt="" style="width: 70px;"></div>
										<div class="flex-grow-1 py-0">
										<div class="row g-3">
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
											<div class="col-xl-8 col-lg-7">
											<a class="d-block fw-semibold fs-4" href="">Рутель под стекло 10-26 мм, шпилька М14, регулируемый, разборный</a>
											</div>
											<div class="col-xl-4 col-lg-5">
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
						<?php } ?>
					</div>
				</div>

				<!-- col -->
				<?php get_sidebar(); ?>
			</div>
			<!-- row -->
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



