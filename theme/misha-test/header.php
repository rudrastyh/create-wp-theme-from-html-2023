<!DOCTYPE HTML>
<html>
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<?php wp_head() ?>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="<?php echo site_url() ?>">Great theme <span>for WordPress</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'head_menu',
						'container' => 'nav',
						'container_id'=> 'menu',
						'menu_class' => 'links',
					)
				);
			?>
