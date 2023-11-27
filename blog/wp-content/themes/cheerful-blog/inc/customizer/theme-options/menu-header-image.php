<?php

// Menu Header Image section.
$wp_customize->add_section(
	'cheerful_blog_menu_header_image',
	array(
		'title'       => esc_html__( 'Menu Background Image', 'cheerful-blog' ),
		'description' => esc_html__( 'Add menu background image', 'cheerful-blog' ),
		'panel'       => 'nav_menus',
	)
);

// Menu Header Image setting.
	$wp_customize->add_setting(
		'cheerful_blog_menu_background_image',
		array(
			'default'           => '',
			'sanitize_callback' => 'cheerful_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'cheerful_blog_menu_background_image',
			array(
				'label'    => esc_html__( 'Menu Background Image', 'cheerful-blog' ),
				'section'  => 'cheerful_blog_menu_header_image',
				'settings' => 'cheerful_blog_menu_background_image',
			)
		)
	);
