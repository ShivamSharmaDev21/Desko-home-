<?php
/**
 * Breadcrumb settings
 */

$wp_customize->add_section(
	'cheerful_blog_breadcrumb_section',
	array(
		'title' => esc_html__( 'Breadcrumb Options', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Breadcrumb enable setting.
$wp_customize->add_setting(
	'cheerful_blog_breadcrumb_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_breadcrumb_enable',
		array(
			'label'    => esc_html__( 'Enable breadcrumb.', 'cheerful-blog' ),
			'type'     => 'checkbox',
			'settings' => 'cheerful_blog_breadcrumb_enable',
			'section'  => 'cheerful_blog_breadcrumb_section',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'cheerful_blog_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'cheerful_blog_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'cheerful-blog' ),
		'section'         => 'cheerful_blog_breadcrumb_section',
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'cheerful_blog_breadcrumb_enable' )->value() );
		},
	)
);
