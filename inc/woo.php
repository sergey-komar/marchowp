<?php
//   Подключаем архивную страницу  archive-product.php
add_theme_support( 'woocommerce' );


  // Отключаемхлебные крошки вукомерса
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// Хлебные крошки
add_filter( 'woocommerce_breadcrumb_defaults', function() {

	return array(
		'delimiter' => '',
		'wrap_before' => '<div class="breadcrumbs"><ul class="breadcrumbs__list">',
		'wrap_after' => '</ul></div>',
		'before' => '<li class="breadcrumbs__item">',
		'after' => '</li>',
		'home' => 'ГЛАВНАЯ',

	);

} );

// УБИРАЕМ ЗАГОЛОВОК МАГАЗИН СО СТРАНИЦЫ МАГАЗИНА
add_filter( 'woocommerce_show_page_title', 'est_title_shop_archive' );
function est_title_shop_archive ($hide){
	if(is_shop()){
		$hide = false;
	}
}
// Убираем кнопку в корзину на странице магазина
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');


// ДОБАВЛЯЕМ КЛАСС НА СТРАНИЦЕ МАГАЗИНА У КАРТОЧКИ ТОВАРА ПОСЛЕ ИЗОБРАЖЕНИЯ
add_action('woocommerce_shop_loop_item_title', function(){
    echo '<div class="product-item__wrraper-box">';
}, 5);
add_action('woocommerce_after_shop_loop_item', function(){
    echo '</div>';
}, 15);



// ОБЬЕДЕНЯЕМ РЕЙТИНГ И ЦЕНУ В ОДИН DIV

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_summary_after_title', 15 );
function woocommerce_summary_after_title() {
    echo '<div class="product-one__box">';
		woocommerce_template_single_price();
        woocommerce_template_single_rating();   
    echo '</div>';
}
// ОБЬЕДЕНЯЕМ РЕЙТИНГ И ЦЕНУ В ОДИН DIV


// ОБРАЧИВАЕМ ЦЕНУ НА СТРАНИЦЕ КАРТОЧКИ ОДНОГО ТОВАРА В <div class="product-one__price">
function woocommerce_template_single_price(){
	global $product;
	?>
	<div class="product-one__price">
	<?php echo $product -> get_price_html();?>
	</div>
	<?php
}



// ОПУСКАЕМ КНОПКУ К КОРЗИНУ И quantity В САМЫЙ НИЗ ПОСЛЕ ТЕГОМ И КАТЕГОРИЙ
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart', 50);



// ВЫВОДИМ ПЕРЕД НАЗВАНИЕМ ТОВАРА ЕГО АРТИКУЛ 
function wayup_woo_sku_custom(){ 
    global $product;
    ?>
<div class="product__article">
    Артикул:
    <span class="product__article-value"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span>
</div>

<?php } 
add_action('woocommerce_single_product_summary', 'wayup_woo_sku_custom', 40);
// ВЫВОДИМ ПЕРЕД НАЗВАНИЕМ ТОВАРА ЕГО АРТИКУЛ




//СЛАЙДЕР
add_action('after_setup_theme', 'modist_plagin_setup');
function modist_plagin_setup (){
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');    
}



// ВЫВОДИМ НУЖНОЕ КОЛЛИЧЕСТВО ПОХОЖИХ ТОВАРОВ НА СТРАНИЦЕ ТОВАРА
add_filter( 'woocommerce_output_related_products_args', 'truemisha_rel_products_args', 25 );
function truemisha_rel_products_args( $args ) {
	$args[ 'posts_per_page' ] = 3; // сколько штук отображать
	$args[ 'columns' ] = 3; // сколько штук в одном ряду
	return $args;
}




