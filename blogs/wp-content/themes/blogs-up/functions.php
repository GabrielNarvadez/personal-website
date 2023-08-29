<?php

/**
 * Theme functions and definitions
 *
 * @package Blogs Up
 */
if (!function_exists('blogsup_enqueue_styles')) :
	/**
	 * @since 1.0
	 */
	function blogsup_enqueue_styles()
	{
		wp_enqueue_style('silkblog-style-parent', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('blogsup-style', get_stylesheet_directory_uri() . '/style.css', array('silkblog-style-parent'), '1.2.0');
	}

endif;
add_action('wp_enqueue_scripts', 'blogsup_enqueue_styles', 9999);

/* Remove parent theme page templates */

function blogsup_remove_page_templates($page_templates)
{
	unset($page_templates['index.php']);
	return $page_templates;
}
add_filter('theme_page_templates', 'blogsup_remove_page_templates');

/** call widgets */

require get_theme_file_path('/widgets/recent-posts-single.php');
