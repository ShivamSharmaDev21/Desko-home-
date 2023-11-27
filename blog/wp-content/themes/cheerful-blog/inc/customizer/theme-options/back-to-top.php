<?php
/**
 * Back To Top settings
 */

$wp_customize->add_section(
	'cheerful_blog_back_to_top_section',
	array(
		'title' => esc_html__( 'Scroll Up ( Back To Top )', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Scroll to top enable setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_scroll_to_top',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_scroll_to_top',
		array(
			'label'    => esc_html__( 'Enable scroll to top.', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_scroll_to_top',
			'section'  => 'cheerful_blog_back_to_top_section',
			'type'     => 'checkbox',
		)
	)
);
