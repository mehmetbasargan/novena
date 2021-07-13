<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('İçeriğe Atla', 'novena'); ?></a>

		<header id="masthead" class="site-header">

			<!-- Top Bar -->
			<?php if (true == get_theme_mod('header_switch', true)) : ?>
				<?php echo get_template_part('template-parts/content', 'topbar'); ?>
			<?php endif; ?>

			<nav class="navbar navbar-expand-lg navigation" id="navbar">
				<div class="container">
					<!-- Logo -->
					<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
						<?php
						$logo_image_id = get_theme_mod('custom_logo');
						echo wp_get_attachment_image($logo_image_id, 'full');
						?>
					</a>

					<!-- Menu -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icofont-navigation-menu"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarmain">
						<?php $menu_args = array(
							'menu'        => 'main-menu',
							'menu_class'  => 'navbar-nav ml-auto',
							'container'   => 'ul',
							'add_a_class' => 'box-link text-dark',
						);
						wp_nav_menu($menu_args); ?>
					</div>
				</div>
			</nav>

		</header>