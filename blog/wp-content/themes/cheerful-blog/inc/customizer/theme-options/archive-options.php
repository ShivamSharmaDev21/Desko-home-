<?php

/**
 * Blog / Archive Options
 */

$wp_customize->add_section(
	'cheerful_blog_archive_page_options',
	array(
		'title' => esc_html__( 'Blog / Archive Pages Options', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'cheerful_blog_excerpt_length',
	array(
		'default'           => 15,
		'sanitize_callback' => 'cheerful_blog_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'cheerful_blog_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'cheerful-blog' ),
		'section'     => 'cheerful_blog_archive_page_options',
		'settings'    => 'cheerful_blog_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 200,
			'step' => 1,
		),
	)
);

// Grid Column layout options.
$wp_customize->add_setting(
	'cheerful_blog_archive_grid_column_layout',
	array(
		'default'           => 'grid-column-2',
		'sanitize_callback' => 'cheerful_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'cheerful_blog_archive_grid_column_layout',
	array(
		'label'   => esc_html__( 'Grid Column Layout', 'cheerful-blog' ),
		'section' => 'cheerful_blog_archive_page_options',
		'type'    => 'select',
		'choices' => array(
			'grid-column-2' => __( 'Column 2', 'cheerful-blog' ),
			'grid-column-3' => __( 'Column 3', 'cheerful-blog' ),
		),
	)
);

// Enable archive page read more button.
$wp_customize->add_setting(
	'cheerful_blog_archive_page_readmore_button',
	array(
		'default'           => __( 'Read More', 'cheerful-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cheerful_blog_archive_page_readmore_button',
	array(
		'label'    => esc_html__( 'Read More Button Label', 'cheerful-blog' ),
		'section'  => 'cheerful_blog_archive_page_options',
		'settings' => 'cheerful_blog_archive_page_readmore_button',
		'type'     => 'text',
	)
);

// Enable archive page category setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_archive_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_archive_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_archive_category',
			'section'  => 'cheerful_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page author setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_archive_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_archive_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_archive_author',
			'section'  => 'cheerful_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page date setting.
$wp_customize->add_setting(
	'cheerful_blog_enable_archive_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_enable_archive_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_enable_archive_date',
			'section'  => 'cheerful_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);
