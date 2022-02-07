<?php
echo
'<footer class="footer">'.
	'<div class="footer-top">'.
		'<div class="footer-top-inner flex flex-start-start flex-wrap">'.
			'<div class="footer-logo">';
				the_custom_logo($blog_id=0);
				echo
			'</div>'.
			'<nav class="footer-menu">'.
				'<span class="footer-title">'.get_option('footer_titre_1_'.$CurrentLang).'</span>';
				wp_nav_menu([
					'theme_location'=>'footer-left',
					'menu_class'=>'footer-menu-ul'
				]);
				echo
			'</nav>'.
			'<nav class="footer-menu">'.
			'<span class="footer-title">'.get_option('footer_titre_2_'.$CurrentLang).'</span>';
				wp_nav_menu([
					'theme_location'=>'footer-middle',
					'menu_class'=>'footer-menu-ul'
				]);
				echo
			'</nav>'.
			'<nav class="footer-menu">'.
			'<span class="footer-title">'.get_option('footer_titre_3_'.$CurrentLang).'</span>';
				wp_nav_menu([
					'theme_location'=>'footer-right',
					'menu_class'=>'footer-menu-ul'
				]);
				echo
			'</nav>'.
			'<div class="footer-copyright">'.
			'</div>'.
		'</div>'.
	'</div>'.
	'<div class="footer-bottom">'.
		'<div class="footer-bottom-inner flex flex-start-center">'.
			'&copy; mon site.fr'.
		'</div>'.
	'</div>'.
'</footer>';
wp_footer();
echo
'</body>'.
'</html>';
