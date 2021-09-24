<?php

function novena_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'novena_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function novena_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'novena_pingback_header');


// TGMPA
function novena_register_required_plugins()
{
	$plugins = array(

		// Kirki Customizer Framework
		array(
			'name'      => 'Kirki Customizer Framework',
			'slug'      => 'kirki',
			'required'  => false,
		),

		// Contact Form 7
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		// Mail SMTP by WPForms
		array(
			'name'      => 'WP Mail SMTP by WPForms',
			'slug'      => 'wp-mail-smtp',
			'required'  => false,
		),

		// Klasic Editor
		array(
			'name'      => 'Klasik düzenleyici',
			'slug'      => 'classic-editor',
			'required'  => false,
		),

		// One Click Demo Import
		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),

	);


	$config = array(
		'id'           => 'novena',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'novena_register_required_plugins');
