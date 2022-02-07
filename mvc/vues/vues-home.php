<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		?>
		<div class="titre">
			<h1 class="titre-1"><?php the_title();?></h1>
		</div>
		<div class="apropos-photo-text">
			<div class="apropos-photo">
				<div class="image1"><?php the_post_thumbnail('medium');?></div>
				<div class="image3" style="background-image:url(<?php SC_the_field('image_page_home');?>)"></div>
				<!-- <img class="image2" src="img/a-propos2.jpg" alt=""> -->
				<img class="decoration-x" src="img/Décoration.svg" alt="">
			</div>
			<div class="wp-content">
				<?php the_content();?>
			</div>
		</div>
		<!-- partie vues-membre.php -->
		<?php
		include __VUES_DIR__.'/vues-equipe.php';
		?>
		<!-- partie vues-membre.php -->
		<div class="apropos-lgp">
			<div class="description-lgp">
				<h3>LES GRANDS PROJETS</h3>
				<p>En mode agence !
					Depuis la création de l’école en 2011, chaque mardi d’octobre à mars, les étudiants du Bachelor, de l’année
					Prépa et du Mastère de l’ensemble du réseau Digital Campus se transforment en véritables professionnels
					experts du web.
					Comme dans une agence digitale, en équipes de 4 à 10 personnes (de tous niveaux confondus), chacun tient
					son rôle et travaille en collaboration sur un projet grandeur nature, porté par un partenaire de l’école : une
					grande entreprise, une start-up, une association ou une institution de renommée.
					A travers ces projets réels, accompagnés de coordinateurs professionnels, les étudiants apprennent à gérer
					un projet dans son ensemble, développer des réflexes professionnels, s’organiser, travailler en équipe et en
					autonomie et à savoir présenter devant un client.
					Cette année plus de 80 projets ont été menés sur toute la France. Venez assister aux présentations finales !</p>
			</div>
		</div>

		<?php
	endwhile;
endif;
