<?php
/*
Template Name: Elever
*/
?>

<?php get_header(); ?>

<main>
<!-- GlimtIn for students -->
<section class="glimti-for-students">
	<h2><?php the_field('hero_title'); ?></h2>
	<p><?php the_field('hero_text'); ?></p>
    <a href="#faq-section" class="faq-students button">Vanliga frågor</a> <!-- Ändrat från knapp till länk med knapp-styling -->
</section>

<!-- Student Image and Slogan -->
<section class="student-inspo-pic" style="background-image: url('<?php the_field('elev_bild'); ?>');">
		<p class="student_slogan"><?php the_field('elev_slogan'); ?></p>
</section>

<!-- Högstadiet / Gymnasiet - File system -->
<div class="tabset">
  <!-- Tab 1 - Högstadiet -->
  <input type="radio" name="tabset" id="tab1" aria-controls="hogstadiet" checked>
  <label for="tab1">Högstadiet</label>

  <!-- Tab 2 - Gymnasiet -->
  <input type="radio" name="tabset" id="tab2" aria-controls="gymnasiet">
  <label for="tab2">Gymnasiet</label>
  
  <div class="tab-panels">
    <!-- Högstadiet contebt -->
    <section id="hogstadiet" class="tab-panel">
      <div class="tab-content">
        <!-- Left column -->
        <div class="column left">
		<h3 class="question"><?php the_field('hogstadiet_fraga_1'); ?></p>
		<p class="answer"><?php the_field('hogstadiet_svar_1'); ?></p>
          
		<h3 class="question"><?php the_field('hogstadiet_fraga_2'); ?></p>
		<p class="answer"><?php the_field('hogstadiet_svar_2'); ?></p>
        </div>
        
        <!-- Middle column - picture -->
        <div class="column middle">
          <img class="decoration-img" src="<?php the_field('hogstadiet_dekoration'); ?>" alt="Kretskort. Dekoration.">
        </div>
        
        <!-- Right column -->
        <div class="column right">
		  <h3 class="question"><?php the_field('hogstadiet_fraga_3'); ?></p>
          <p class="answer"><?php the_field('hogstadiet_svar_3'); ?></p>
          
		  <h3 class="question"><?php the_field('hogstadiet_fraga_4'); ?></p>
          <p class="answer"><?php the_field('hogstadiet_svar_4'); ?></p>
        </div>
      </div>
    </section>
    
    <!-- Gymnasiet content -->
    <section id="gymnasiet" class="tab-panel">
      <div class="tab-content">
        <!-- Left column -->
        <div class="column left">
			<h3 class="question"><?php the_field('gymnasiet_fraga_1'); ?></p>
			<p class="answer"><?php the_field('gymnasiet_svar_1'); ?></p>
          
			<h3 class="question"><?php the_field('gymnasiet_fraga_2'); ?></p>
          <p class="answer"><?php the_field('gymnasiet_svar_2'); ?></p>
        </div>
        
        <!-- Mittenkolumn med diagram/bild -->
        <div class="column middle">
          <img class="decoration-img" src="<?php the_field('gymnasiet_dekoration'); ?>" alt="Kretskort. Dekoration.">
        </div>
        
        <!-- Höger kolumn -->
        <div class="column right">
			<h3 class="question"><?php the_field('gymnasiet_fraga_3'); ?></p>
			<p class="answer"><?php the_field('gymnasiet_svar_3'); ?></p>
			
			<h3 class="question"><?php the_field('gymnasiet_fraga_4'); ?></p>
			<p class="answer"><?php the_field('gymnasiet_svar_4'); ?></p>
        </div>
      </div>
    </section>
  </div>
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
<section id="faq-section" class="faq-section">
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
	<div class="slanted-shape-bottom"></div>
</section>

</main>

<?php get_footer(); ?>
