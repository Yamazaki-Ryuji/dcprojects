<?php
// AJOUTER CSS ET JS SUR LE SITE
if(!function_exists('SC_css_js_import')){
	function SC_css_js_import(){
		wp_enqueue_style('css-swiper','https://unpkg.com/swiper/swiper-bundle.min.css');
		wp_enqueue_style('css-root',get_template_directory_uri().'/css/root.css');
		wp_enqueue_style('css-sylvain',get_template_directory_uri().'/css/sylvain.css');
		wp_enqueue_style('css-laura',get_template_directory_uri().'/css/laura.css');
		wp_enqueue_style('css-mamadou',get_template_directory_uri().'/css/mamadou.css');
		wp_enqueue_style('css-carlos',get_template_directory_uri().'/css/carlos.css');
		wp_enqueue_style('css-charles',get_template_directory_uri().'/css/charles.css');
		wp_enqueue_style('css-cyril',get_template_directory_uri().'/css/cyril.css');
		wp_enqueue_style('css-felix',get_template_directory_uri().'/css/felix.css');
		wp_enqueue_style('css-gregoire',get_template_directory_uri().'/css/gregoire.css');
		wp_enqueue_style('css-liticia',get_template_directory_uri().'/css/liticia.css');
		wp_enqueue_style('css-michel',get_template_directory_uri().'/css/michel.css');

		//wp_enqueue_script('jquery');
		//wp_enqueue_script('sc_js',get_template_directory_uri().'/js/script.js',array('jquery'));
		wp_enqueue_script('js-swiper','https://unpkg.com/swiper/swiper-bundle.min.js');
		wp_enqueue_script('js-sylvain',get_template_directory_uri().'/js/sylvain.js');
		wp_enqueue_script('js-laura',get_template_directory_uri().'/js/laura.js');
		wp_enqueue_script('js-mamadou',get_template_directory_uri().'/js/mamadou.js');
		wp_enqueue_script('js-carlos',get_template_directory_uri().'/js/carlos.js');
		wp_enqueue_script('js-charles',get_template_directory_uri().'/js/charles.js');
		wp_enqueue_script('js-cyril',get_template_directory_uri().'/js/cyril.js');
		wp_enqueue_script('js-felix',get_template_directory_uri().'/js/felix.js');
		wp_enqueue_script('js-gregoire',get_template_directory_uri().'/js/gregoire.js');
		wp_enqueue_script('js-liticia',get_template_directory_uri().'/js/liticia.js');
		wp_enqueue_script('js-michel',get_template_directory_uri().'/js/michel.js');

	}
	add_action('wp_enqueue_scripts','SC_css_js_import');
}
