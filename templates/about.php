<?php
/*
Template Name: Om oss
*/
?>

<?php get_header(); ?>

<main>
	<!-- Replace this below when you start working ... -->
	<section class="ceo-info-section">
		<div class="ceo-info-image-container">
			<img src="<?php the_field('profile'); ?>" alt="Bild på ägaren johanna" class="ceo-info-image"/>
		</div>
		<div class="ceo-info-text">
			<div><h1>Johanna Birgersdotter</h1></div>
			<div>
				<p><?php the_field('ceoInfoText'); ?></p>
			</div>
			<br>
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
		<div class="why-glimtin-image-container">
			<img src="<?php the_field('image'); ?>" alt="Kort statistik" class="why-glimtin-image"/>
		</div>

	</section>

	<div class="timeline" id="timeline">
		  

		<?php
		// Hämta timeline events sorterade på datum (antag att event_date är i format YYYY-MM-DD)
		$args = array(
			'post_type' => 'timeline_event',
			'posts_per_page' => -1,
			'meta_key' => 'event_date',
			'orderby' => 'meta_value',
			'order' => 'ASC',
		);

		$query = new WP_Query($args);

		if($query->have_posts()) :
			while($query->have_posts()) : $query->the_post();
				$date = get_field('event_date');
				$title = get_the_title();
				$content = get_the_content();
		?>
			<div class="timeline-item">
				<div></div>
				<div class="timeline-date"><?php the_field('dateTitle'); ?></div>
				<div class="timeline-marker"></div> <!-- pricken -->
				<div class="timeline-title"><?php echo esc_html($title); ?></div>

				<!-- Popup som är dold som standard -->
				<div class="timeline-popup">
					<?php echo esc_html($date); ?>
					<br><br>
					<?php echo wp_kses_post(wpautop($content)); ?>
				</div>
			</div>  
		<?php
			endwhile;
			wp_reset_postdata();
		else:
			echo '<p>Inga händelser hittades.</p>';
		endif;
		?>
	</div>
	
	<div></div>


	<script>
		document.querySelectorAll('.timeline-item').forEach(item => {
		item.addEventListener('click', () => {
			const isActive = item.classList.contains('active');

			// Stäng alla öppna popup:ar
			document.querySelectorAll('.timeline-item.active').forEach(activeItem => {
			activeItem.classList.remove('active');
			});

			// Öppna popup på den klickade om den inte var öppen
			if (!isActive) {
			item.classList.add('active');
			}
		});
		});

	</script>

</main>

<?php get_footer(); ?>