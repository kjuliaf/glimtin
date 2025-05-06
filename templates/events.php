<?php
/*
Template Name: Event
*/
?>

<?php get_header(); ?>

<main>
    <!-- Titelsektion -->
    <section class="intro_title">
		<h1 class="h1"><?php the_field('title_title'); ?></h1>
        <p><?php the_field('intro_text'); ?></p>
    </section>
    
    <!-- Eventsektion med flexbox för kort -->
    <section class="event_cards">
        <!-- Här kan du skapa dynamiska eventkort med en loop -->
        <div class="event_card">

			<div class="overlay_event_card"></div>
			<p class="event_card_title"><?php the_field('event_title'); ?></p>
		</div>
        <div class="event_card">Event 2</div>
        <div class="event_card">Event 3</div>
        <!-- Exempel på kort, du kan använda en loop för att hämta dynamiskt innehåll här -->
    </section>
</main>

<?php get_footer(); ?>
