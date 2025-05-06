
<?php get_header(); ?>

<main>
    <!-- Titelsektion -->
    <section class="intro">
		<h1 class="intro_title"><?php the_field('intro_title'); ?></h1>
        <p class="intro_text"><?php the_field('intro_text'); ?></p>
    </section>
    
    <!-- Eventsektion med flexbox för kort -->
    <section class="event_cards">
        <!-- Här kan du skapa dynamiska eventkort med en loop -->
        <div class="event_card">
			<div class="overlay_event_card">
				<div class="circle_date_event_card">
					<p class="month_date_event_card"><?php the_field('event_date_month_1'); ?></p>
					<p class="number_date_event_card"><?php the_field('event_date_number_1'); ?></p>
				</div>
			</div>
			<p class="event_card_title"><?php the_field('event_title_1'); ?></p>
			<p class="event_card_text"><?php the_field('event_text_1'); ?></p>
			
			<div class="hidden_card">
				<p><?php the_field('event_date_number_1'); ?></p>
			</div>
		</div>

		<div class="event_card">
			<div class="overlay_event_card">
				<div class="circle_date_event_card">
					<p class="month_date_event_card"><?php the_field('event_date_month_2'); ?></p>
					<p class="number_date_event_card"><?php the_field('event_date_number_2'); ?></p>
				</div>
			</div>
			<p class="event_card_title"><?php the_field('event_title_2'); ?></p>
			<p class="event_card_text"><?php the_field('event_text_2'); ?></p>
		</div>

        <!-- Exempel på kort, du kan använda en loop för att hämta dynamiskt innehåll här -->
    </section>


	<section class="end">
		<h1 class="end_title"><?php the_field('end_title'); ?></h1>
		<p class="end_text"><?php the_field('end_text'); ?></p>
		<div class="end_button">
			<p class="end_button_text"><?php the_field('end_button_text'); ?></p>
		</div>
	</section>

</main>

<?php get_footer(); ?>
