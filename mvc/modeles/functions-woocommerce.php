<?php
add_theme_support('wc-product-gallery-zoom' );
add_theme_support('wc-product-gallery-lightbox' );
add_theme_support('wc-product-gallery-slider' );

function sc_add_woocommerce_support() {
    add_theme_support('woocommerce' );
}
add_action('after_setup_theme', 'sc_add_woocommerce_support' );


add_action( 'woocommerce_single_product_summary','SC_woocommerce_single_product_summary',100 );
function SC_woocommerce_single_product_summary(){
	echo '<h1>HELLO</h1>';
}

remove_action( 'woocommerce_single_product_summary', 'SC_woocommerce_single_product_summary' ,100);


add_action( 'woocommerce_after_cart_item_name', 'SC_woocommerce_after_cart_item_name', 10, 2 );


function SC_woocommerce_after_cart_item_name( $cart_item, $cart_item_key ){
	echo 'TROP TOP';
}
