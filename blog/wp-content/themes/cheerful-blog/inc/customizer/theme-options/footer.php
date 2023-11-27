<?php
/**
 * Footer copyright
 */

// Footer copyright
$wp_customize->add_section(
	'cheerful_blog_footer_section',
	array(
		'title' => esc_html__( 'Footer Options', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'cheerful-blog' ), '[the-year]', '[site-link]' );

// Footer copyright setting.
$wp_customize->add_setting(
	'cheerful_blog_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'cheerful_blog_sanitize_html',
	)
);

$wp_customize->add_control(
	'cheerful_blog_copyright_text',
	array(
		'label'   => esc_html__( 'Copyright text', 'cheerful-blog' ),
		'section' => 'cheerful_blog_footer_section',
		'type'    => 'textarea',
	)
);
