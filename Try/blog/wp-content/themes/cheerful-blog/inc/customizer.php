<?php
/**
 * Cheerful Blog Theme Customizer
 *
 * @package Cheerful Blog
 */

// upgrade to pro.
require get_template_directory() . '/inc/customizer/upgrade-to-pro/class-customize.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cheerful_blog_customize_register( $wp_customize ) {

	// Custom Controls.
	require get_template_directory() . '/inc/customizer/custom-controller.php';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'cheerful_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'cheerful_blog_customize_partial_blogdescription',
			)
		);
	}

	// Header text display setting.
	$wp_customize->add_setting(
		'cheerful_blog_header_text_display',
		array(
			'default'           => true,
			'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cheerful_blog_header_text_display',
		array(
			'section' => 'title_tagline',
			'type'    => 'checkbox',
			'label'   => esc_html__( 'Display Site Title and Tagline', 'cheerful-blog' ),
		)
	);

	// Color Customizer Setting.
	require get_template_directory() . '/inc/customizer/color.php';

	// theme options customizer section.
	require get_template_directory() . '/inc/customizer/theme-options/theme-options-sections.php';

}
add_action( 'customize_register', 'cheerful_blog_customize_register' );

// Sanitize callback.
require get_template_directory() . '/inc/customizer/sanitize-callback.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cheerful_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cheerful_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cheerful_blog_customize_preview_js() {
	wp_enqueue_script( 'cheerful-blog-customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'customize-preview' ), CHEERFUL_BLOG_VERSION, true );
}
add_action( 'customize_preview_init', 'cheerful_blog_customize_preview_js' );

/**
 * Binds JS handlers for Customizer controls.
 */
function cheerful_blog_customize_control_js() {
	wp_enqueue_style( 'cheerful-blog-customize-style', get_template_directory_uri() . '/assets/css/customize-controls.min.css', array(), '20151215' );
	wp_enqueue_script( 'cheerful-blog-customize-control', get_template_directory_uri() . '/assets/js/customize-control.min.js', array( 'jquery', 'customize-controls' ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'cheerful_blog_customize_control_js' );
