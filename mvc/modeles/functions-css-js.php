<?php
// AJOUTER CSS ET JS SUR LE SITE
if(!function_exists('SC_css_js_import')){
	function SC_css_js_import(){
		wp_enqueue_style('css-swiper','https://unpkg.com/swiper/swiper-bundle.min.css');
		wp_enqueue_style('css-root',get_template_directory_uri().'/css/root.css');
		wp_enqueue_style('css-sylvain',get_template_directory_uri().'/css/sylvain.css');
		wp_enqueue_style('css-laura',get_template_directory_uri().'/css/laura.css');
		wp_enqueue_style('css-mamadou',get_template_directory_uri().'/css/mamadou.css');

		//wp_enqueue_script('jquery');
		//wp_enqueue_script('sc_js',get_template_directory_uri().'/js/script.js',array('jquery'));
		wp_enqueue_script('js-swiper','https://unpkg.com/swiper/swiper-bundle.min.js');
		wp_enqueue_script('js-sylvain',get_template_directory_uri().'/js/sylvain.js');

	}
	add_action('wp_enqueue_scripts','SC_css_js_import');
}
