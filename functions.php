<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('novena_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function novena_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Novena, use a find and replace
		 * to change 'novena' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('novena', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Add Images Size
		 */
		add_image_size('about_image_1', 510, 455, true);
		add_image_size('about_image_2', 510, 728, true);
		add_image_size('testimonial_image', 140, 140, true);
		add_image_size('blog_image', 730, 487, true);
		add_image_size('widget_blog_image', 70, 70, true);
		add_image_size('doctors_image', 270, 270, true);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu'     => esc_html__('Primary', 'novena'),
				'footer-menu-1' => esc_html__('Footer Menu 1', 'novena'),
				'footer-menu-2' => esc_html__('Footer Menu 2', 'novena'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'novena_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'novena_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function novena_content_width()
{
	$GLOBALS['content_width'] = apply_filters('novena_content_width', 1140);
}
add_action('after_setup_theme', 'novena_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function novena_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'novena'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'novena'),
			'before_widget' => '<div id="%1$s" class="sidebar-wrap sidebar-widget pl-lg-4 mt-5 mt-lg-0 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class=" widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action('widgets_init', 'novena_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function novena_scripts()
{
	wp_enqueue_style('novena-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('novena-style', 'rtl', 'replace');

	// Theme CSS
	wp_enqueue_style('bootstrap',        get_template_directory_uri() . "/assets/plugins/bootstrap/css/bootstrap.min.css", array(), _S_VERSION);
	wp_enqueue_style('icofont',          get_template_directory_uri() . "/assets/plugins/icofont/icofont.min.css", array(), _S_VERSION);
	wp_enqueue_style('slick-carousel',   get_template_directory_uri() . "/assets/plugins/slick-carousel/slick/slick.css", array(), _S_VERSION);
	wp_enqueue_style('slick-carousel-t', get_template_directory_uri() . "/assets/plugins/slick-carousel/slick/slick-theme.css", array(), _S_VERSION);
	wp_enqueue_style('style-css',        get_template_directory_uri() . "/assets/css/style.css", array(), _S_VERSION);

	// Theme JS
	wp_enqueue_script('jquery',     get_template_directory_uri() . '/assets/plugins/jquery/jquery.js', array(), _S_VERSION, true);
	wp_enqueue_script('popper',     get_template_directory_uri() . '/assets/plugins/bootstrap/js/popper.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('mixitup',    get_template_directory_uri() . '/assets/js/mixitup.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('jquery.e',   get_template_directory_uri() . '/assets/plugins/counterup/jquery.easing.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('slick',      get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('waypoints',  get_template_directory_uri() . '/assets/plugins/counterup/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('scrollUp',   get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('counterup',  get_template_directory_uri() . '/assets/plugins/counterup/jquery.counterup.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('script-js',  get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('novena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'novena_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Demo Import.
 */
require get_template_directory() . '/inc/demo-import.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * TGMPA.
 */
require get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

/**
 * Theme Options ( Kirki ).
 */
require get_template_directory() . '/inc/theme_options.php';

/**
 * Custom Post Type
 */
require get_template_directory() . '/inc/custom-post-type-branches.php';
require get_template_directory() . '/inc/custom-post-type-doctors.php';

/**
 * Custom Witgets
 */
require get_template_directory() . '/inc/widgets/novena-son-yazilar.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Add Li Class
function add_classes_on_li($classes, $item, $args)
{
	$classes[] = 'nav-item dropdown';
	return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

// Add A Class
function add_specific_menu_location_atts($atts, $item, $args)
{
	if ($args->menu == 'main-menu') {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);

// Add Dropdown Class
function my_nav_menu_submenu_css_class($classes)
{
	$classes[] = 'dropdown-menu';
	return $classes;
}
add_filter('nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class');

// Yazıyı Kısaltma
add_filter('excerpt_length', function () {
	return 20;
});

add_filter('excerpt_more', function ($more) {
	return '...';
});

// Numbered Pagination
function blog_post_queries($query)
{
	if (!is_admin() && $query->is_main_query()) {

		if (is_home()) {
			$query->set('posts_per_page', 1);
		}

		if (is_category()) {
			$query->set('posts_per_page', 1);
		}
	}
}
add_action('pre_get_posts', 'blog_post_queries');

// Commnets Number
add_filter('comments_number', 'wporg_com_num', 10, 2);
function wporg_com_num($out, $num)
{ // Two parameter as in filter described
	if (0 === $num) {
		$out = '0'; // If No comments
	} elseif (1 === $num) {
		$out = '1'; // If 1 comment
	} else {
		$out = $num . ' '; // More than 1 comment
	}
	return $out;
}
