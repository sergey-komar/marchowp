<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */
// КАРТОЧКА ТОВАРА ИМЕННО НА СТРАНИЦЕ МАГАЗИНА



defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( 'product-item', $product ); ?>>
<div class="product-item__link-box">
                    <a href="#" class="product-item__link">
                      <svg 
                      width="19px" height="20px">
                     <path fill-rule="evenodd"  fill="rgb(41, 40, 45)"
                      d="M18.709,18.219 L14.028,13.269 C15.231,11.813 15.891,9.982 15.891,8.075 C15.891,3.622 12.328,-0.002 7.947,-0.002 C3.568,-0.002 0.005,3.622 0.005,8.075 C0.005,12.529 3.568,16.153 7.947,16.153 C9.591,16.153 11.160,15.649 12.498,14.690 L17.216,19.680 C17.414,19.890 17.678,20.004 17.964,20.004 C18.232,20.004 18.486,19.899 18.680,19.710 C19.093,19.307 19.105,18.639 18.709,18.219 L18.709,18.219 ZM7.947,2.106 C11.185,2.106 13.819,4.785 13.819,8.075 C13.819,11.367 11.185,14.046 7.947,14.046 C4.711,14.046 2.078,11.367 2.078,8.075 C2.078,4.785 4.711,2.106 7.947,2.106 L7.947,2.106 Z"/>
                     </svg>
                    </a>
                    <a href="#" class="product-item__link  product-item__link--line">
                      <svg 
                      width="16px" height="20px">
                     <path fill-rule="evenodd"  fill="rgb(41, 40, 45)"
                      d="M15.999,17.294 L14.854,4.396 C14.830,4.109 14.589,3.892 14.307,3.892 L11.953,3.892 C11.920,1.740 10.163,0.002 8.005,0.002 C5.847,0.002 4.090,1.740 4.057,3.892 L1.703,3.892 C1.417,3.892 1.180,4.109 1.156,4.396 L0.011,17.294 C0.011,17.311 0.007,17.327 0.007,17.343 C0.007,18.812 1.352,20.006 3.007,20.006 L13.003,20.006 C14.658,20.006 16.003,18.812 16.003,17.343 C16.003,17.327 16.003,17.311 15.999,17.294 L15.999,17.294 ZM8.005,1.106 C9.554,1.106 10.817,2.350 10.849,3.892 L5.161,3.892 C5.193,2.350 6.456,1.106 8.005,1.106 L8.005,1.106 ZM13.003,18.902 L3.007,18.902 C1.969,18.902 1.127,18.215 1.111,17.368 L2.206,5.001 L4.053,5.001 L4.053,6.678 C4.053,6.985 4.298,7.230 4.605,7.230 C4.911,7.230 5.157,6.985 5.157,6.678 L5.157,5.001 L10.849,5.001 L10.849,6.678 C10.849,6.985 11.095,7.230 11.401,7.230 C11.708,7.230 11.953,6.985 11.953,6.678 L11.953,5.001 L13.800,5.001 L14.899,17.368 C14.883,18.215 14.037,18.902 13.003,18.902 L13.003,18.902 Z"/>
                     </svg>
                    </a>
                    <a href="#" class="product-item__link">
                      <svg 
                      width="23px" height="20px">
                     <path fill-rule="evenodd"  fill="rgb(41, 40, 45)"
                      d="M16.894,-0.001 C14.470,-0.001 12.935,1.423 12.074,2.618 C11.851,2.929 11.661,3.239 11.501,3.532 C11.342,3.239 11.152,2.929 10.928,2.618 C10.068,1.423 8.533,-0.001 6.108,-0.001 C4.384,-0.001 2.810,0.697 1.675,1.964 C0.593,3.172 -0.004,4.791 -0.004,6.521 C-0.004,8.405 0.744,10.157 2.349,12.034 C3.783,13.713 5.847,15.443 8.236,17.447 C9.127,18.193 10.047,18.965 11.028,19.809 L11.057,19.834 C11.184,19.944 11.343,19.999 11.501,19.999 C11.660,19.999 11.818,19.944 11.945,19.834 L11.975,19.809 C12.955,18.965 13.876,18.193 14.766,17.447 C17.156,15.443 19.219,13.713 20.653,12.034 C22.258,10.157 23.006,8.405 23.006,6.521 C23.006,4.791 22.410,3.172 21.327,1.964 C20.192,0.696 18.618,-0.001 16.894,-0.001 ZM13.892,16.437 C13.124,17.080 12.334,17.743 11.501,18.455 C10.668,17.743 9.878,17.081 9.111,16.437 C4.434,12.516 1.345,9.926 1.345,6.521 C1.345,5.114 1.821,3.806 2.687,2.840 C3.562,1.863 4.777,1.325 6.108,1.325 C7.957,1.325 9.151,2.445 9.828,3.385 C10.435,4.228 10.752,5.078 10.860,5.404 C10.951,5.677 11.209,5.862 11.501,5.862 C11.793,5.862 12.052,5.677 12.142,5.404 C12.250,5.078 12.567,4.228 13.174,3.385 C13.851,2.445 15.046,1.325 16.894,1.325 C18.225,1.325 19.440,1.863 20.316,2.840 C21.181,3.806 21.658,5.114 21.658,6.521 C21.658,9.926 18.568,12.516 13.892,16.437 Z"/>
                     </svg>
                    </a>
                  </div>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	
</div>
