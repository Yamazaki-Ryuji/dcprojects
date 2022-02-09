<?php
/* Support Logo */
function SC_theme_prefix_setup(){
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','SC_theme_prefix_setup');

/* Support Thumbnails */
add_theme_support('post-thumbnails');

/* MENU */
register_nav_menus(['main-menu'=>'Menu Principal']);
register_nav_menus(['main-menu-pro'=>'Menu Principal PRO']);
register_nav_menus(['header-top'=>'Menu Header']);
register_nav_menus(['footer-left'=>'Menu Footer Left']);
register_nav_menus(['footer-middle'=>'Menu Footer Middle']);
register_nav_menus(['footer-right'=>'Menu Footer Right']);
