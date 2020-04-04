<?php if (!defined('FW')) {
	die('Forbidden');
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options('general-option'),
	// fw()->theme->get_options('colors'),
	// fw()->theme->get_options('typography'),
	// fw()->theme->get_options('header'),
	// fw()->theme->get_options('page-title'),
	// fw()->theme->get_options('footer'),
	// fw()->theme->get_options('sidebar'),
	// fw()->theme->get_options('blog'),
	// fw()->theme->get_options('portfolio'),
	// fw()->theme->get_options('social-media'),
	// fw()->theme->get_options('lightbox'),
	// fw()->theme->get_options('shop'),
	// fw()->theme->get_options('search'),
	// fw()->theme->get_options('advance'),
	// fw()->theme->get_options('custom-code'),
	// fw()->theme->get_options('import-export'),
	fw()->theme->get_options('demo-box'),
);
