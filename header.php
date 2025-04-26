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
				<ul class="header__nav">
					<li><a href="<?php echo home_url('/elever'); ?>">Elever</a></li>
					<li><a href="<?php echo home_url('/foretag'); ?>">Företag</a></li>
					<li><a href="<?php echo home_url('/om-oss'); ?>">Om oss</a></li>
					<li class="header__nav--btn"><a href="<?php echo home_url('/event'); ?>">Event</a></li>
				</ul>
			</nav>
		</header>
