<?php

/**
 * NoonPost functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('noonpost_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function noonpost_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on NoonPost, use a find and replace
		 * to change 'noonpost' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('noonpost', get_template_directory() . '/languages');

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__('Primary', 'noonpost'),
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
				'noonpost_custom_background_args',
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
add_action('after_setup_theme', 'noonpost_setup');


function noonpost_excerpt_more($more)
{
	if (!is_single()) {
		$more = sprintf(
			__('...', 'noonpost')
		);
	}
	return $more;
}
add_action('excerpt_more', 'noonpost_excerpt_more');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function noonpost_content_width()
{
	$GLOBALS['content_width'] = apply_filters('noonpost_content_width', 640);
}
add_action('after_setup_theme', 'noonpost_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function noonpost_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'noonpost'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'noonpost'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="section-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Copyright Text', 'noonpost'),
			'id'            => 'copyright',
			'description'   => esc_html__('Add copyright text here.', 'noonpost'),
			'before_widget' => '<div id="%1$s" class="copyright  %2$s">',
			'after_widget'  => '</div>',
		)
	);
}
add_action('widgets_init', 'noonpost_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function noonpost_scripts()
{
	wp_enqueue_style('noonpost-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('noonpost-style', 'rtl', 'replace');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.css', [], _S_VERSION, 'all');
	wp_enqueue_style('elegant-font-icons', get_template_directory_uri() . '/assets/css/elegant-font-icons.css', [], _S_VERSION, 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], _S_VERSION, 'all');
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css//custom.css', [], _S_VERSION, 'all');


	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('switch', get_template_directory_uri() . '/assets/js/switch.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'noonpost_scripts');


// Plugin Activation
require get_template_directory() . '/inc/plugin-activation.php';


// Category list
if (!function_exists('categories_list')) {
	get_template_part('/template-parts/categories');
}

// tag list
if (!function_exists('tags_list')) {
	get_template_part('/template-parts/tags');
}
