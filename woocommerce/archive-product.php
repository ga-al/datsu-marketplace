<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;


// $_product = wc_get_product( get_the_ID() );

get_header( 'shop' );
do_action( 'woocommerce_before_main_content' );

$term = get_queried_object();
$term_thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
$term_thumbnail_url = wp_get_attachment_url( $term_thumbnail_id );

if ( !$term_thumbnail_url ) {
	$term_thumbnail_url = get_stylesheet_directory_uri() . '/img/placeholder.png';
}


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
						<h1 class="display-5 text-primary fw-bold mt-md-0 my-4"><?php woocommerce_page_title(); ?></h1>

						<!-- если одно изображение -->
							<img src="<?= $term_thumbnail_url ?>" class="img-fluid" alt="...">
							<nav class="d-flex justify-content-between align-items-center my-3">
								<div class="nav nav-tabs orderby custom-select d-flex gap-md-5" id="nav-tab" role="tablist" >
									<!-- СОРТИРОВКА ТОВАРОВ .me_btn_sort_producrs & data-sort & data-term_id !!! -->
									<button data-sort="me_by_popularity" data-term_id="<?php echo $term->term_id ?>" class="nav-link active me_btn_sort_producrs" id="nav-home-tab"  data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false" tabindex="-1">по популярности
									</button>
									<button data-sort="me_by_price" data-term_id="<?php echo $term->term_id ?>" class="nav-link me_btn_sort_producrs" id="nav-profile-tab"  data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1" >по цене
									</button>
									<button data-sort="me_by_name" data-term_id="<?php echo $term->term_id ?>" class="nav-link me_btn_sort_producrs" id="nav-contact-tab"  data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true" >по названию
									</button>
									<!-- СОРТИРОВКА ТОВАРОВ .btn_sort_producrs & data-sort & data-term_id!!! -->
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

						<!-- Loop Products Category -->
									<?php

										if ( woocommerce_product_loop() ) {
											do_action( 'woocommerce_before_shop_loop' );
											woocommerce_product_loop_start();
											if ( wc_get_loop_prop( 'total' ) ) {
												while ( have_posts() ) {
													the_post();
													do_action( 'woocommerce_shop_loop' );
													wc_get_template_part( 'content', 'product' );
												}
											}
											woocommerce_product_loop_end();
											do_action( 'woocommerce_after_shop_loop' );
										} else {
											do_action( 'woocommerce_no_products_found' );
										}

									?>
								</div>
							</div>
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



do_action( 'woocommerce_after_main_content' );
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
