

<?php 
/* Template Name: Event */
get_header(); 
?>

<main>
    <!-- Titelsektion -->
    <section class="intro">
		<h1 class="intro_title"><?php the_field('intro_title'); ?></h1>
        <p class="intro_text"><?php the_field('intro_text'); ?></p>
    </section>
    
    <!-- Eventsektion med flexbox för kort -->
    <section class="event_cards">

	<?php
		// Query för alla event-poster
		$event_query = new WP_Query(array(
			'post_type' => 'event',
			// 'posts_per_page' => 10, // Hämta alla event
		));

		if ($event_query->have_posts()) :
			while ($event_query->have_posts()) : $event_query->the_post(); 
	?>

	<div class="event_card">
		<div class="overlay_event_card" style="background-color:<?php the_field('overlay_event_card_color'); ?>;">
			<div class="circle_date_event_card">
				<p class="month_date_event_card"><?php the_field('event_card_date_month'); ?></p>
				<p class="number_date_event_card"><?php the_field('event_card_date_number'); ?></p>
			</div>
		</div>
		<p class="event_card_title"><?php the_field('event_card_title'); ?></p>
		<p class="event_card_text"><?php the_field('event_card_text'); ?></p>
	
			<div class="hidden_card">
				<div class="close_button">×</div>
				<div class="overlay_hidden_card_title" style="background-color:<?php the_field('overlay_event_card_color'); ?>;">
					<p class="hidden_card_title"><?php the_field('event_card_title'); ?></p>
				</div>
				<div class="overlay_hidden_card" style="background-color:<?php the_field('overlay_event_card_color'); ?>;">
					<p class="hidden_card_text"><strong>Plats: </strong><?php the_field('hidden_card_text_place'); ?></p>
					<p class="hidden_card_text"><strong>Datum: </strong><?php the_field('hidden_card_text_date'); ?></p>
					<p class="hidden_card_text"><strong>Tid: </strong><?php the_field('hidden_card_text_time'); ?></p>
					<p class="hidden_card_text"><strong>Deltagare: </strong><?php the_field('hidden_card_text_users'); ?></p>
					<p class="hidden_card_text"><strong>Övrig info: </strong><?php the_field('hidden_card_text_extra_info'); ?></p>
				</div>
				<p class="hidden_card_egraved_company"><?php the_field('hidden_card_company'); ?></p>
			</div>
		</div>
	</div>

	<?php
		endwhile;
			wp_reset_postdata();
		else :
			echo '<p class="info_about_event_site_styling">' . get_field('info_about_event_site') . '</p>';
		endif;
	?>

    </section>

	<!-- <section class="end">
		<h1 class="end_title"><?php the_field('end_title'); ?></h1>
		<p class="end_text"><?php the_field('end_text'); ?></p>
		<div class="end_button">
			<a href="<?php the_field('event_sign_up_link'); ?>" class="end_button_text" target="_blank" rel="noopener noreferrer"><?php the_field('end_button_text'); ?></p>
		</div>
	</section> -->

</main>

<?php get_footer(); ?>



