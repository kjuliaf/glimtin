<?php
/* Template Name: About Template */
get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero overlay" style="background-image: url('<?php the_field('hero_image'); ?>');">
		<p class="hero__text"><?php the_field('hero_text'); ?></p>
	</section>

	<!-- Partners Section -->
	<section class="partners">
		<div class="partners__title">
			<h2 class="partners__title-text"><?php the_field('partners_title'); ?></h2>
			<hr class="line" />
		</div>
		<!-- Import Partners Logos -->
		<div class="partners__logos">
			<?php
			$partner_count = 10;
			for( $i = 1; $i <= $partner_count; $i++ ):
				$logo = get_field('partner_logo_' . $i);
				if( $logo ):
			?>
			<img src="<?php echo esc_url($logo); ?>" alt="photo); ?>" class="partners__logos-img" />
			<?php
				endif;
			endfor;
			?>
		</div>
	</section>

	<!-- Who Are We Section -->
	<section class="who-are-we">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circuit-left.png" alt="Kretskort figur vänster" class="who-are-we__img-left" />
		<div class="who-are-we__box">
			<h2 class="who-are-we__box-title"><?php the_field('who_are_we_title'); ?></h2>
			<p class="who-are-we__box-text"><?php the_field('who_are_we_text'); ?></p>
			<a href="/om-oss" class="who-are-we__box-link">
				<span class="link">Läs mer</span>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Pil" />
			</a>
		</div>
		<div class="who-are-we__img-right">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circuit-right-1.png" alt="Kretskort figur höger" class="who-are-we__img-right-1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circuit-right-2.png" alt="Kretskort figur höger" class="who-are-we__img-right-2">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circuit-right-3.png" alt="Kretskort figur höger" class="who-are-we__img-right-3">
		</div>
	</section>

	<!-- Want To Know More Section -->
	<div class="want-to-know-more">
		<div class="want-to-know-more__box">
			<hr class="line">
			<h2 class="want-to-know-more__box-title">Vill du veta mer?</h2>
			<div class="want-to-know-more__box-btns">
				<a href="/elever" class="want-to-know-more__box-btn">Studenter</a>
				<a href="/foretag" class="want-to-know-more__box-btn">Företag</a>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
