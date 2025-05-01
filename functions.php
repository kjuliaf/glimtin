<?php

/* Title Tag */
function glimtin_setup() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'glimtin_setup');

/* Reset CSS Styles */
function glimtin_enqueue_reset_styles() {
	wp_enqueue_style('glimtin-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), null);
}
add_action('wp_enqueue_scripts', 'glimtin_enqueue_reset_styles');	

/* CSS Global Styles and Fonts */
function glimtin_enqueue_styles() {
	wp_enqueue_style('glimtin-style', get_stylesheet_uri());
	wp_enqueue_style('glimtin-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Karla:ital,wght@0,200..800;1,200..800&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'glimtin_enqueue_styles');	

/* CSS Styles for Header and Footer */
function glimtin_enqueue_header_footer_styles() {
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css', array(), null);
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', array(), null);
}
add_action('wp_enqueue_scripts', 'glimtin_enqueue_header_footer_styles');

/* CSS Styles for Pages */
function glimtin_enqueue_page_styles() {
    if (is_page('Startsida')) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/assets/css/front-page.css');
    }
	if (is_page('Elever')) {
        wp_enqueue_style('students-style', get_template_directory_uri() . '/assets/css/students.css');
    }
	if (is_page('Företag')) {
        wp_enqueue_style('organizations-style', get_template_directory_uri() . '/assets/css/organizations.css');
    }
	if (is_page('Om oss')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css');
    }
    if (is_page('Event')) {
        wp_enqueue_style('event-style', get_template_directory_uri() . '/assets/css/events.css');
    }
}
add_action('wp_enqueue_scripts', 'glimtin_enqueue_page_styles');

/* JavaScript */
function glimtin_enqueue_scripts() {
	wp_enqueue_script('glimtin-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'glimtin_enqueue_scripts');	
