<?php
function b2h_scripts() {
	wp_enqueue_style( 'b2h-css-3', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'b2h-css-4', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'b2h-css-5', get_template_directory_uri() . '/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'b2h-css-6', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'b2h-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'b2h-css-2', get_template_directory_uri() . '/css/media.css' );

	wp_enqueue_script( 'b2h-main-1', get_template_directory_uri() . '/js/jquery.min.js',array(), false, true );
	wp_enqueue_script( 'b2h-main-2', get_template_directory_uri() . '/js/jquery.mask.js',array(), false, true  );
	wp_enqueue_script( 'b2h-main-3', get_template_directory_uri() . '/owl-carousel/owl.carousel.js',array(), false, true );
	wp_enqueue_script( 'b2h-main-4', get_template_directory_uri() . '/js/jquery.fancybox.min.js',array(), false, true );
	wp_enqueue_script( 'b2h-main', get_template_directory_uri() . '/js/script.js',array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'b2h_scripts' );

add_action('after_setup_theme', function(){
	register_nav_menus( array('header_menu' => 'menu') );
});

if (function_exists('add_theme_support')){
		add_theme_support('post-thumbnails');
}

function wph_restore_buttons($buttons) {	
	$buttons[] = 'underline';
	$buttons[] = 'alignjustify';
	return $buttons;
}
add_filter('mce_buttons_2', 'wph_restore_buttons');


function wp_corenavi(){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = 'Назад'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = 'Вперед;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="pagination-block">';
	if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo $pages . paginate_links($a);
	if ($max > 1) echo '</div>';
}



?>