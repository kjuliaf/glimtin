<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

	<body>
		<header class="header">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Glimtins logga" class="header__logo"></a>

			<nav>
				<!-- Navigation for desktop -->
				<ul class="header__nav">
					<li class="header__nav-item <?php if (is_page('elever')) echo 'active'; ?>"><a href="<?php echo home_url('/elever'); ?>">För elever</a></li>
					<li class="header__nav-item <?php if (is_page('foretag')) echo 'active'; ?>"><a href="<?php echo home_url('/foretag'); ?>">För företag</a></li>
					<li class="header__nav-item <?php if (is_page('om-oss')) echo 'active'; ?>"><a href="<?php echo home_url('/om-oss'); ?>">Om oss</a></li>
					<li><a class="header__nav-btn <?php if (is_page('event')) echo 'active'; ?>" href="<?php echo home_url('/event'); ?>">Event</a></li>
				</ul>

				<!-- Navigation for mobile -->
				<ul id="header__nav-mobile">
					<li class="header__nav-item <?php if (is_page('elever')) echo 'active'; ?>"><a href="<?php echo home_url('/elever'); ?>">För elever</a></li>
					<li class="header__nav-item <?php if (is_page('foretag')) echo 'active'; ?>"><a href="<?php echo home_url('/foretag'); ?>">För företag</a></li>
					<li class="header__nav-item <?php if (is_page('om-oss')) echo 'active'; ?>"><a href="<?php echo home_url('/om-oss'); ?>">Om oss</a></li>
					<li><a class="header__nav-btn <?php if (is_page('event')) echo 'active'; ?>" href="<?php echo home_url('/event'); ?>">Event</a></li>
				</ul>

				<!-- Hamburger menu open/close icons for mobile -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-icon.svg" alt="Öppna meny" id="header__menu-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg" alt="Stäng meny" id="header__close-icon">
			</nav>
		</header>
