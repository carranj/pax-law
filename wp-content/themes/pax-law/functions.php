<?php

function theme_styles()
{
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');


function theme_js()
{

	global $wp_scripts;
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('bootstrap_js'), '', true);
}

function wpdocs_excerpt_more($more)
{
	if (!is_single()) {
		$more = sprintf(
			' <a class="read-more" href="%1$s">%2$s</a>',
			get_permalink(get_the_ID()),
			__('Read More', 'textdomain')
		);
	}

	return $more;
}

add_action('wp_enqueue_scripts', 'theme_js');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_filter('excerpt_more', 'wpdocs_excerpt_more');
