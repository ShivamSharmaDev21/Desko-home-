<?php
/**
 * Sidebar settings
 */

$wp_customize->add_section(
	'cheerful_blog_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'cheerful_blog_sidebar_position',
	array(
		'sanitize_callback' => 'cheerful_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'cheerful_blog_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'cheerful-blog' ),
		'section' => 'cheerful_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'cheerful-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'cheerful-blog' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'cheerful_blog_post_sidebar_position',
	array(
		'sanitize_callback' => 'cheerful_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'cheerful_blog_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'cheerful-blog' ),
		'section' => 'cheerful_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'cheerful-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'cheerful-blog' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'cheerful_blog_page_sidebar_position',
	array(
		'sanitize_callback' => 'cheerful_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'cheerful_blog_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'cheerful-blog' ),
		'section' => 'cheerful_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'cheerful-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'cheerful-blog' ),
		),
	)
);
