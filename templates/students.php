<?php
/*
Template Name: Elever
*/
?>

<?php get_header(); ?>

<main>
	<!-- Replace this below when you start working ... -->

<!-- GlimtIn for students -->
<section class="glimti-for-students">
	<h2><?php the_field('hero_title'); ?></h2>
	<p><?php the_field('hero_text'); ?></p>
	<button class="faq-students">Vanliga frågor</Button> <!-- Länka till längre ner på sidan sen-->
</section>

<!-- Student Image and Slogan -->
<section class="student-inspo-pic" style="background-image: url('<?php the_field('elev_bild'); ?>');">
		<p class="student_slogan"><?php the_field('elev_slogan'); ?></p>
</section>

<!-- Filesystem -->
<div class="file-system">    
    <!-- Högstadiet Information -->
    <h3><?php the_field('titel_hogstadiet'); ?></h3>
    <section class="hogstadiet-information">
    	<h3 class="hogstadiet-questions"><?php the_field('hogstadiet_fraga_1'); ?></h3>
    	<p class="hogstadiet-answers"><?php the_field('hogstadiet_svar_1'); ?></p>

    	<h3 class="hogstadiet-questions"><?php the_field('hogstadiet_fraga_2'); ?></h3>
    	<p class="hogstadiet-answers"><?php the_field('hogstadiet_svar_2'); ?></p>

    	<h3 class="hogstadiet-questions"><?php the_field('hogstadiet_fraga_3'); ?></h3>
    	<p class="hogstadiet-answers"><?php the_field('hogstadiet_svar_3'); ?></p>

    	<h3 class="hogstadiet-questions"><?php the_field('hogstadiet_fraga_4'); ?></h3>
    	<p class="hogstadiet-answers"><?php the_field('hogstadiet_svar_4'); ?></p>

      <img src="<?php the_field('hogstadiet_dekoration'); ?>" alt="Kretskort. Dekoration.">
    </section>

    <!-- Gymnasiet Information -->
    <h3><?php the_field('titel_gymnasiet'); ?></h3>
    <section class="gymnasiet-information">      
      <h3 class="gymnasiet-questions"><?php the_field('gymnasiet_fraga_1'); ?></h3>
      <p class="gymnasiet-answers"><?php the_field('gymnasiet_svar_1'); ?></p>

      <h3 class="gymnasiet-questions"><?php the_field('gymnasiet_fraga_2'); ?></h3>
      <p class="gymnasiet-answers"><?php the_field('gymnasiet_svar_2'); ?></p>

      <h3 class="gymnasiet-questions"><?php the_field('gymnasiet_fraga_3'); ?></h3>
      <p class="gymnasiet-answers"><?php the_field('gymnasiet_svar_3'); ?></p>

      <h3 class="gymnasiet-questions"><?php the_field('gymnasiet_fraga_4'); ?></h3>
      <p class="gymnasiet-answers"><?php the_field('gymnasiet_svar_4'); ?></p>

      <img src="<?php the_field('gymnasiet_dekoration'); ?>" alt="Kretskort. Dekoration.">
    </section>
 </div>

<!-- Engineer Inspo Section -->
<section class="engineer-inspo">
  <h2>Vad gör en ingenjör?</h2>
  <hr>

  <!-- Engineer Info 1 -->
  <section class="engineer-info">
    <div class="content">
      <h3><?php the_field('ingenjor_1_namn'); ?></h3>
	  <span class="job-title"><?php the_field('ingenjor_1_sysselsattning'); ?></p>
      <p><?php the_field('ingenjor_1_text'); ?></p>
    </div>
    <div class="image-container">
      <img src="<?php the_field('ingenjor_1_bild'); ?>" alt="Bild på kvinnlig ingenjör som ler.">
	  <a href="<?php echo esc_url(get_field('ingenjor_1_tagg')); ?>" target="_blank">@tagg1</a>
</div>
  </section>

  <!-- Engineer Info 2 -->
  <section class="engineer-info">
    <div class="content">
      <h3><?php the_field('ingenjor_2_namn'); ?></h3>
	  <span class="job-title"><?php the_field('ingenjor_2_sysselsattning'); ?></p>
      <p><?php the_field('ingenjor_2_text'); ?></p>
    </div>
    <div class="image-container">
      <img src="<?php the_field('ingenjor_2_bild'); ?>" alt="Bild på kvinnlig ingenjör som ler.">
	  <a href="<?php echo esc_url(get_field('ingenjor_2_tagg')); ?>" target="_blank">@tagg2</a>
</div>
  </section>

  <!-- Se mer Section -->
  <div class="see-more">
    <h3>Vill du se mer?</h3>
    <p>Kolla vår sida med fler ingenjörer!</p>
    <button class="engineer-archive">Se mer →</button>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="faq-background-shape"></div>
    <div class="faq-content">
        <h2 class="faq-title">Vanliga frågor</h2>
        <hr>

        <p class="faq-question"><?php the_field('fraga_1'); ?></p>
        <p class="faq-answer"><?php the_field('svar_1'); ?></p>

        <p class="faq-question"><?php the_field('fraga_2'); ?></p>
        <p class="faq-answer"><?php the_field('svar_2'); ?></p>

        <p class="faq-question"><?php the_field('fraga_3'); ?></p>
        <p class="faq-answer"><?php the_field('svar_3'); ?></p>
    </div>
</section>

</main>

<?php get_footer(); ?>
