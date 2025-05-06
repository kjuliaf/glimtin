<?php
/*
Template Name: Företag
*/
?>

<?php get_header(); ?>

<main>
	<!-- Hero Section -->
	<section class="hero overlay" style="background-image: url('<?php the_field('hero_image'); ?>');">
		<p class="hero__title"><?php the_field('hero_title'); ?></p>
		<p class="hero__text"><?php the_field('hero_text'); ?></p>
	</section>
</main>

<?php get_footer(); ?>
