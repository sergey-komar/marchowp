<?php
function marcho_scripts(){
    wp_enqueue_style('marcho_style', get_stylesheet_uri());
    wp_enqueue_style('marcho_main', get_template_directory_uri() . '/assets/css/style.min.css');


    wp_enqueue_script('marcho_js', get_template_directory_uri() . '/assets/js/main.min.js');
}

add_action('wp_enqueue_scripts', 'marcho_scripts');



register_nav_menus(
    array(
        'menu-header' => esc_html__( 'Шапка', 'wayup' ),
        'menu-footer-1' => esc_html__( 'Подвал-1', 'wayup' ),
    )
);
add_filter( 'nav_menu_css_class', 'avoa_filter', 10, 4 );
  function avoa_filter(){
  $newClasses = ['menu__list-item']; 
  
  return $newClasses;
  }
  add_filter( 'nav_menu_item_id', 'filter_function_name_471', 10, 4 );
  function filter_function_name_471( $menu_id, $item, $args, $depth ){
  return '';
  }
  add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){

$atts ['class'] = 'menu__list-link';
if($atts['aria-current'] === 'page'){
    $atts ['class'] .= ' menu__list-link--active';
}
return $atts;
}





add_action('after_setup_theme', 'sokirka_setup');
  function sokirka_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background' ); 
   
  }

  //    Цепляемся к событию для выода виджетов
  add_action('widgets_init', 'marcho_widgets_init');

  function marcho_widgets_init(){
	register_sidebar([
		'name'          => esc_html__('Сайдбар-магазина'), 
		'id'            => 'woocommerce',
		'before_widget' => '<section id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
		'after_widget'  => "</section>\n",
		'before_title'  => '<h3 class="single-sidebar-widget__title">',
		'after_title'   => "</h3>\n",
		
	]);
}

//УБИРАЕМ СТАРЫЙ САЙДБАР И ЗАМЕНЯЕМ ЕГО ПЕРСОНАЛЬНЫМ
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_sidebar', function(){
    get_sidebar('woocommerce');
});








require get_template_directory(). './inc/woo.php';