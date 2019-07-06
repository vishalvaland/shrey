<?php
/**
 * Shrey enqueue scripts
 *
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!function_exists('understrap_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function shrey_scripts() {
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get('Version');

		wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array(), '4.3.1');

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.css');
		wp_enqueue_style('shrey-theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), $css_version);

		wp_enqueue_style('shrey-style', get_stylesheet_uri());

		wp_enqueue_script('shrey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

		wp_enqueue_script('shrey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

		wp_enqueue_script('jquery');

		wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array(), '4.3.1', true);

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.js');
		wp_enqueue_script('shrey-scripts', get_template_directory_uri() . '/js/theme.js', array(), $js_version, true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // endif function_exists( 'shrey_scripts' ).

add_action('wp_enqueue_scripts', 'shrey_scripts');

/**
 * For Admin panel styles and scripts
 */
if (!function_exists('shrey_admin_scripts') && is_admin() && isset($_GET['page']) && $_GET['page'] == 'fw-settings'):

	function shrey_admin_scripts() {
		wp_enqueue_style('jevelin-theme-options', get_template_directory_uri() . '/css/admin/theme-options.css');
	}
	add_action('admin_enqueue_scripts', 'shrey_admin_scripts');

endif;
