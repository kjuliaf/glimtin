<?php
/* Template Name: About Template */
get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero overlay" style="background-image: url('<?php the_field('hero_image'); ?>');">
		<h1 class="hero__heading"><?php the_field('hero_heading'); ?></h1>
		<p class="hero__subheading"><?php the_field('hero_subheading'); ?></p>
	</section>

	<!-- Who Are We Section -->
	<section class="who-are-we">
		<div class="who-are-we__box">
			<h2 class="who-are-we__box-title"><?php the_field('who_are_we_title'); ?></h2>
			<div class="who-are-we__box-text">
				<p><?php the_field('who_are_we_text'); ?></p>
				<a href="/om-oss" class="who-are-we__box-link">
					<span class="link">Läs mer</span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Pil" />
				</a>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circuit.png" alt="Kretskort figur" class="who-are-we__img">
	</section>

	<!-- Partners Section -->
	<section class="partners">
		<div class="partners__title">
			<h2 class="partners__title-text"><?php the_field('partners_title'); ?></h2>
			<hr class="line" />
		</div>
		<!-- Import Partners Logos -->
		<div class="partners__logos-outer">
			<div class="partners__logos partners__logos--animate">
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
		</div>
	</section>

	<!-- Upcoming Events Section -->
	<section class="events">
		<h2 class="events__title">Kommande event</h2>
		<div>
			<div class="events__container">
				<button class="events__arrow events__arrow--left" aria-label="Föregående event">&#8592;</button>
				<div class="events__slider">

					<?php
						// Query for the upcoming_events custom post type
						$upcoming_events_query = new WP_Query(array(
							'post_type' => 'upcoming_events', // Custom post type key
							'posts_per_page' => 3, // Number of posts to display
						));
				
						// Loop through the posts
						if ($upcoming_events_query->have_posts()) :
							while ($upcoming_events_query->have_posts()) : $upcoming_events_query->the_post();
								// Get ACF fields
								$description = get_field('description'); // ACF field: description
								$image = get_field('image'); // ACF field: image
						?>
					<div class="events__item events__item--upcoming">
						<?php if ($image) : ?>
						<div class="events__image--container">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="events__image">
							<div class="shape--upcoming"></div>
						</div>
						<?php endif; ?>
						<div class="events__content">
							<div class="events__item-title">
								<h3><?php the_title(); ?></h3>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/glitter-icon.svg" alt="Glitter ikon">
							</div>
							<p class="events__description"><?php echo esc_html($description); ?></p>
							<a href="/event" class="events__upcoming-more--btn">Se fler</a>
						</div>
					</div>
					<?php
							endwhile;
							wp_reset_postdata(); // Reset the query
						endif;
						?>
				</div>
				<button class="events__arrow events__arrow--right" aria-label="Nästa event">&#8594;</button>
			</div>
		</div>
	</section>

	<!-- Latest Events Section -->
	<section class="events events--latest">
		<h2 class="events__title">Senaste event</h2>
		<div class="events__container">
			<button class="events__arrow events__arrow--left" aria-label="Föregående event">&#8592;</button>
			<div class="events__slider">
				<?php
				// Query for the latest_events custom post type
				$latest_events_query = new WP_Query(array(
					'post_type' => 'latest_events', // Custom post type key
					'posts_per_page' => 3, // Number of posts to display
				));
		
				// Loop through the posts
				if ($latest_events_query->have_posts()) :
					while ($latest_events_query->have_posts()) : $latest_events_query->the_post();
						// Get ACF fields
						$description = get_field('description'); // ACF field: description
						$image = get_field('image'); // ACF field: image
				?>
				<div class="events__item">
					<?php if ($image) : ?>
					<div class="events__image--container">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="events__image">
						<div class="shape-left--latest"></div>
						<div class="shape-right--latest"></div>

					</div>
					<?php endif; ?>
					<div class="events__content">
						<div class="events__item-title">
							<h3><?php the_title(); ?></h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/glitter-icon.svg" alt="Glitter ikon">
						</div>
						<p class="events__description"><?php echo esc_html($description); ?></p>
					</div>
				</div>
				<?php
					endwhile;
					wp_reset_postdata(); // Reset the query
				endif;
				?>
			</div>
			<button class="events__arrow events__arrow--right" aria-label="Nästa event">&#8594;</button>
		</div>
	</section>

	<!-- Want To Know More Section -->
	<section class="want-to-know-more">
		<div class="want-to-know-more__box">
			<hr class="line">
			<h2 class="want-to-know-more__box-title">Vill du veta mer?</h2>
			<div class="want-to-know-more__box-btns">
				<a href="/elever" class="want-to-know-more__box-btn">För elever</a>
				<a href="/foretag" class="want-to-know-more__box-btn">För företag</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
