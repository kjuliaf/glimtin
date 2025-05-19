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
	wp_enqueue_style('glimtin-fonts', 'https://fonts.googleapis.com/css2?family=Slabo+13px&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
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

/* Remove Regular Post Type */
function remove_default_post_type() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);

function remove_add_new_post_href_in_admin_bar() {
    ?>
<script type="text/javascript">
	function remove_add_new_post_href_in_admin_bar() {
		var add_new = document.getElementById('wp-admin-bar-new-content');
		if (!add_new) return;
		var add_new_a = add_new.getElementsByTagName('a')[0];
		if (add_new_a) add_new_a.setAttribute('href', '#!');
	}
	remove_add_new_post_href_in_admin_bar();

</script>
<?php
}
add_action('admin_footer', 'remove_add_new_post_href_in_admin_bar');

function remove_draft_widget(){
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'remove_draft_widget', 999);

function remove_frontend_post_href(){
    if(is_user_logged_in()) {
        add_action( 'wp_footer', 'remove_add_new_post_href_in_admin_bar' );
    }
}
add_action('init', 'remove_frontend_post_href');

/* Remove Page and Post Content Editor */
add_action('admin_init', function () {
    remove_post_type_support('page', 'editor');
});

add_action('admin_init', function () {
    remove_post_type_support('latest_events', 'editor');
});

add_action('admin_init', function () {
    remove_post_type_support('upcoming_events', 'editor');
});

/* Disabling comments */
add_action('admin_init', function () {
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
        }
    }
    remove_menu_page('edit-comments.php');
});

// Timeline about
function register_timeline_event_cpt() {
    $labels = array(
        'name'               => 'Timeline Events',
        'singular_name'      => 'Timeline Event',
        'menu_name'          => 'Timeline',
        'add_new'            => 'Lägg till ny',
        'add_new_item'       => 'Lägg till ny händelse',
        'edit_item'          => 'Redigera händelse',
        'new_item'           => 'Ny händelse',
        'view_item'          => 'Visa händelse',
        'search_items'       => 'Sök händelser',
        'not_found'          => 'Inga händelser hittades',
        'not_found_in_trash' => 'Inga händelser hittades i papperskorgen',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array('title', 'editor', 'custom-fields'),
        'show_in_rest'       => true, // gör CPT tillgänglig i Gutenberg om du vill
    );

    register_post_type('timeline_event', $args);
}
add_action('init', 'register_timeline_event_cpt');

