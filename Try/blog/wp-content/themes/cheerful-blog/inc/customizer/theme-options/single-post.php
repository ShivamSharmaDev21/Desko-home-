<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'cheerful_blog_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Enable single post category setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_single_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_single_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_single_category',
			'section'  => 'cheerful_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post author setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_single_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_single_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_single_author',
			'section'  => 'cheerful_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post date setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_single_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_single_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_single_date',
			'section'  => 'cheerful_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post tag setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_single_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_single_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_single_tag',
			'section'  => 'cheerful_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'cheerful_blog_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'cheerful-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cheerful_blog_related_posts_title',
	array(
		'label'    => esc_html__( 'Related Posts Title', 'cheerful-blog' ),
		'section'  => 'cheerful_blog_single_page_options',
		'settings' => 'cheerful_blog_related_posts_title',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'cheerful_blog_related_posts_title',
		array(
			'selector'            => '.site-content div.related-posts h2.related-title',
			'settings'            => 'cheerful_blog_related_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}
