<?php
// AJOUTER CSS ET JS SUR LE SITE
if(!function_exists('SC_css_js_import')){
	function SC_css_js_import(){
		wp_enqueue_style('css-sylvain',get_template_directory_uri().'/css/sylvain.css');
		wp_enqueue_style('css-laura',get_template_directory_uri().'/css/laura.css');

		//wp_enqueue_script('jquery');
		//wp_enqueue_script('sc_js',get_template_directory_uri().'/js/script.js',array('jquery'));


	}
	add_action('wp_enqueue_scripts','SC_css_js_import');
}
