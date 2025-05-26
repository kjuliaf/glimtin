<?php
/*
Template Name: Företag
*/
?>

<?php get_header(); ?>

<main>
	<!-- Intro Section -->
	<section class="hero_area" style="background-image: url('<?php the_field('hero_image');?>');" >
		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p class="hero_text"><?php the_field('hero_text'); ?></p>
	</section>
		
	<!-- Statistics Section -->
	<section class="statistics_area">
		<h1 class="stat_title"><?php the_field('stat_title'); ?></h1>

		<div class="stat_row">
			<div class="stat_group">
				<a href= "<?php the_field('stat_link1'); ?>"><img src="<?php the_field('stat_image1');?>" alt="Statistik" class="stat_image"/></a>
				<p class="figure_text"><?php the_field('stat1_text'); ?></p>
			</div>
			<div class="stat_group">
				<a href= "<?php the_field('stat_link2'); ?>"><img src="<?php the_field('stat_image2');?>" alt="Statistik" class="stat_image"/></a>
				<p class="figure_text"><?php the_field('stat2_text'); ?></p>
			</div>
			<div class="stat_group">
				<a href= "<?php the_field('stat_link3'); ?>"><img src="<?php the_field('stat_image3');?>" alt="Statistik" class="stat_image"/></a>
				<p class="figure_text"><?php the_field('stat3_text'); ?></p>
			</div>
		</div>

		<a href="<?php the_field('read_more'); ?>" class="read_more">
			Läs mer <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Pil" class="arrow_icon" />
		</a>
	</section>

	<!-- Info Block Section -->
	<section class="info_area">
		<div class="info_grid">
			<div class="info_block">
				<h1 class="info_title"><img src="<?php the_field('ikon1');?>" class="icon"/><?php the_field('info_title1'); ?></h1>
				<p class="info_text"><?php the_field('info_text1'); ?></p>
			</div>
			<div class="info_block">
				<h1 class="info_title"><img src="<?php the_field('ikon2');?>" class="icon"/><?php the_field('info_title2'); ?></h1>
				<p class="info_text"><?php the_field('info_text2'); ?></p>
			</div>
			<div class="info_block">
				<h1 class="info_title"><img src="<?php the_field('ikon3');?>" class="icon"/><?php the_field('info_title3'); ?></h1>
				<p class="info_text"><?php the_field('info_text3'); ?></p>
			</div>
			<div class="info_block">
				<h1 class="info_title"><img src="<?php the_field('ikon4');?>" class="icon"/><?php the_field('info_title4'); ?></h1>
				<p class="info_text"><?php the_field('info_text4'); ?></p>
			</div>
		</div>
	</section>

	<!-- Contact info Section -->
	<section>
		<h1 class="contact_title"><?php the_field('contact_title'); ?></h1>
		<p class="contact_text"><?php the_field('contact_text'); ?></p>
		<div class="contact_box">
			<img src="<?php the_field('profile');?>" class="profile_picture"/>

			<div class="contact_info_group">
				<p class="contact_info"><?php the_field('contact_name'); ?></p>
				<p class="contact_info"><?php the_field('contact_job_title'); ?></p>
				<p class="contact_info"><?php the_field('contact_phone_number'); ?></p>
				<p class="contact_info"><?php the_field('contact_email'); ?></p>
			</div>
		</div>
		<hr>
	</section>

	<!-- Companies Section -->

	<!-- FAQ Section -->
	<section id="faq-section" class="faq-section">
		<div class="faq-background-shape"></div>
		<div class="faq-content">
			<h2 class="faq-title">Vanliga Frågor</h2>
			<hr>

			<p class="faq-question"><?php the_field('question_1'); ?></p>
			<p class="faq-answer"><?php the_field('answer_1'); ?></p>

			<p class="faq-question"><?php the_field('question_2'); ?></p>
			<p class="faq-answer"><?php the_field('answer_2'); ?></p>

			<p class="faq-question"><?php the_field('question_3'); ?></p>
			<p class="faq-answer"><?php the_field('answer_3'); ?></p>
		</div>
		<div class="slanted-shape-bottom"></div>
	</section>
</main>

<?php get_footer(); ?>