<?php
/*
Template Name: Om oss
*/
?>

<?php get_header(); ?>

<main>
	<!-- Replace this below when you start working ... -->
	<section class="ceo-info-section">
		<div>
			<img src="<?php the_field('profile'); ?>" alt="Bild på ägaren johanna" class="ceo-info-image"/>
		</div>
		<div class="ceo-info-text">
			<div><h1>Johanna Birgersdotter</h1></div>
			<div>
				<p><?php the_field('ceoInfoText'); ?></p>
			</div>
			<div>
				<h2>Kontakt</h2>
				<p><?php the_field('ceoInfoContact'); ?></p>
			</div>
		</div>
	</section>

	<section class="why-glimtin-section">
		<div class="why-glimtin-text">
			<div><h1><?php the_field('whyGlimtinTitle'); ?></h1></div>
			<div>
				<p><?php the_field('whyGlimtinText'); ?></p>
			</div>
		</div>
		<div>
			<img src="<?php the_field('image'); ?>" alt="Kort statistik" class="why-glimtin-image"/>
		</div>

	</section>

	<section class="timeline-section">
		Timeline
	</section>

	<section class="critical-section">
		<div>
			<img src="<?php the_field('image2'); ?>" alt="Kort statistik" class="critical-image"/>
		</div>
		<div class="critical-text">
			<div>
				<h1><?php the_field('criticalTitle'); ?></h1>
			</div>
			<div>
				<p><?php the_field('criticalText'); ?></p>
			</div>
			<div>
				<a href="<?php the_field('criticalLink'); ?>" class="critical-link">
					<span class="link">Läs mer</span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Pil" />
				</a>
			</div>
		</div>
	</section>
	
	<div></div>

</main>
