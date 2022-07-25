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
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

// ОБЩАЯ СТРАНИЦА МАГАЗИНА



defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>
 <section class="top">
      <div class="top__container">
        <div class="container">
			<!-- Заголовок на странице магазина -->
          <h2 class="top__title title"><?php woocommerce_page_title();?></h2>
         <!-- Хлебные крошки -->
			  <?php woocommerce_breadcrumb();?>
        
        </div>
      </div>
    </section>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<section class="shop">
	<div class="container">
		<div class="shop__inner">
		
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>

<div class="shop-content">
	
<div class="shop-content__filter">
              <div class="shop-content__filter-buttons">
                <span>View</span>
                <button class="shop-content__filter-btn shop-content__filter-btn--active button-grid">
                  <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="15px" height="15px">
                    <path fill-rule="evenodd"  fill="rgb(141, 141, 141)"
                    d="M-0.000,3.750 L3.750,3.750 L3.750,-0.000 L-0.000,-0.000 L-0.000,3.750 ZM5.625,15.000 L9.375,15.000 L9.375,11.250 L5.625,11.250 L5.625,15.000 ZM-0.000,15.000 L3.750,15.000 L3.750,11.250 L-0.000,11.250 L-0.000,15.000 ZM-0.000,9.375 L3.750,9.375 L3.750,5.625 L-0.000,5.625 L-0.000,9.375 ZM5.625,9.375 L9.375,9.375 L9.375,5.625 L5.625,5.625 L5.625,9.375 ZM11.250,-0.000 L11.250,3.750 L15.000,3.750 L15.000,-0.000 L11.250,-0.000 ZM5.625,3.750 L9.375,3.750 L9.375,-0.000 L5.625,-0.000 L5.625,3.750 ZM11.250,9.375 L15.000,9.375 L15.000,5.625 L11.250,5.625 L11.250,9.375 ZM11.250,15.000 L15.000,15.000 L15.000,11.250 L11.250,11.250 L11.250,15.000 Z"/>
                    </svg>
                </button>
                <button class="shop-content__filter-btn button-list">
                    <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px" height="15px">
                  <path fill-rule="evenodd"  fill="rgb(141, 141, 141)"
                    d="M5.835,14.998 L5.835,10.827 L19.994,10.827 L19.994,14.998 L5.835,14.998 ZM5.835,5.413 L19.994,5.413 L19.994,9.585 L5.835,9.585 L5.835,5.413 ZM5.835,0.000 L19.994,0.000 L19.994,4.172 L5.835,4.172 L5.835,0.000 ZM0.007,10.827 L4.429,10.827 L4.429,14.998 L0.007,14.998 L0.007,10.827 ZM0.007,5.413 L4.429,5.413 L4.429,9.585 L0.007,9.585 L0.007,5.413 ZM0.007,0.000 L4.429,0.000 L4.429,4.172 L0.007,4.172 L0.007,0.000 Z"/>
                  </svg>
                </button>
              </div>

              <div class="shop-content__filter-select">
                <form action="#">
                  <select  class="shop-content__filter-sort select-style">
                    <option value="">Sort By Default</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                  <select  class="shop-content__filter-show select-style">
                    <option value="">Show 9</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                </form>
              
              </div>
            </div>
<?php


if ( woocommerce_product_loop() ) {
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	?>

		
<?php
	do_action( 'woocommerce_before_shop_loop' );
	
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );

	?>
		
		
		
	<?php
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

?>			
			</div>	
		</div>
	</div>
</section>		
<?php
get_footer( 'shop' );


