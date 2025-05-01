<?php
/* Template Name: About Template */
get_header();
?>

<!-- Who Are We Section -->
<section class="who-we-are">
	<h2><?php the_field('who_we_are_title'); ?></h2>
	<p><?php the_field('who_we_are_text'); ?></p>
</section>

<!-- Latest Events Carousel -->
<section class="latest-events">
	<h2>Latest Events</h2>
	<div class="carousel">
		<?php
        $events = new WP_Query([
            'post_type' => 'event', // Custom Post Type
            'posts_per_page' => 5
        ]);
        if ($events->have_posts()) :
            while ($events->have_posts()) : $events->the_post(); ?>
		<div class="event-card">
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
		<?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
	</div>
</section>

<p><?php get_field('partner_logo_1'); ?></p>


<?php
// Define the number of partner logos you have (you can adjust this as needed)
$partner_count = 10;  // Update this number to match the number of fields

// Loop through the fields dynamically
for( $i = 1; $i <= $partner_count; $i++ ):
    // Get the image field for each logo
    $logo = get_field('partner_logo_' . $i);  // Dynamically fetch the field

    if( $logo ): // Check if the field has a value
?>
<div class="partner-logo">
	<img src="<?php echo esc_url($logo); ?>" alt="photo); ?>" />
</div>
<?php
    endif;  // End check
endfor;
?>



<?php get_footer(); ?>



<!-- <?php
/*
Template Name: Startsida
*/
?>

<?php get_header(); ?>

<main class="main">
	<h1 class="page-heading"><?php the_title(); ?></h1>
	<div class="page-content">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>
</main>

<?php get_footer(); ?>
 -->
