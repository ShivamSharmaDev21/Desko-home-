<?php

/**
 * Color Options
 */

// Site tagline color setting.
$wp_customize->add_setting(
	'cheerful_blog_header_tagline',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'cheerful_blog_sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cheerful_blog_header_tagline',
		array(
			'label'   => esc_html__( 'Site tagline Color', 'cheerful-blog' ),
			'section' => 'colors',
		)
	)
);
