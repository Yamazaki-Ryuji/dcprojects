<?php
echo
'<!DOCTYPE html>'.
'<html ';language_attributes();echo '>'.
'<head>'.
	'<meta charset="';bloginfo('charset');echo '">'.
	'<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">'.
	'<title>';
		wp_title('');
		echo
	'</title>';
 	wp_head();
	echo
'</head>'.
'<body ';body_class();echo '>'.
	'<header id="header" class="header">'.
		'<div class="header-inner main-col">'.
			'<div class="header-inner-img">';
				the_custom_logo($blog_id=0);
				echo
			'</div>'.
			'<div class="header-menus">';
				echo
				'<nav class="main-menu" role="navigation">';
					wp_nav_menu([
						'theme_location'=>'main-menu',
						'menu_class'=>'main-menu'
					]);
					echo
				'</nav>';
				echo
				'<nav class="header-top-nav">';
					wp_nav_menu([
						'theme_location'=>'header-top',
						'menu_class'=>'header-menu-top'
					]);
					echo
				'</nav>'.
			'</div>'.
		'</div>'.
		'<div class="menu-fond"></div>'.
	'</header>'.
	'<div class="main-footer">';
