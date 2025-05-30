		<footer class="footer">
			<hr class="footer__line">
			<div class="footer__content">
				<div class="footer__info--container">
					<div class="footer__info">
						<h2 class="footer__title">Vanliga frågor</h2>
						<a href="<?php echo home_url('/elever/#faq-section'); ?>" class="footer__link">Elever</a>
						<a href="<?php echo home_url('/foretag/#faq-section'); ?>" class="footer__link">Företag</a>
					</div>
					<div class="footer__info">
						<h2 class="footer__title">Kontakt</h2>
						<a href="mailto:glimtin@mail.se" class="footer__link">glimtin@mail.se</a>
						<a href="tel:+46090" class="footer__link">090 - 000 00</a>
					</div>
				</div>

				<div>
					<a href="https://www.linkedin.com/company/glimtin/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LinkedIn.svg" alt="Glimtins LinkedIn" class="footer__social-link"></a>
					<a href="https://www.instagram.com/glimtin/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram.svg" alt="Glimtins Instagram" class="footer__social-link"></a>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
