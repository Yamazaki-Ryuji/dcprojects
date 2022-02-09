<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		?>
		<div class="titre">
			<h1 class="titre-1"><?php the_title();?></h1>
		</div>
		<div class="apropos-photo-text">
			<div class="wp-content">
				<?php the_content();?>
			</div>
		</div>
		<?php
	endwhile;
endif;
