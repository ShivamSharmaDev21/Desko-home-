<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'cheerful_blog_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'cheerful-blog' ),
		'panel' => 'cheerful_blog_theme_options_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'cheerful_blog_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'cheerful_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Cheerful_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'cheerful_blog_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'cheerful-blog' ),
			'settings' => 'cheerful_blog_pagination_enable',
			'section'  => 'cheerful_blog_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'cheerful_blog_pagination_type',
	array(
		'default'           => 'loadmore',
		'sanitize_callback' => 'cheerful_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'cheerful_blog_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'cheerful-blog' ),
		'section'         => 'cheerful_blog_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default'  => __( 'Default (Older/Newer)', 'cheerful-blog' ),
			'numeric'  => __( 'Numeric', 'cheerful-blog' ),
			'loadmore' => __( 'Load More Button', 'cheerful-blog' ),
		),
		'active_callback' => 'cheerful_blog_pagination_enabled',
	)
);

// Loadmore text label.
$wp_customize->add_setting(
	'cheerful_blog_loadmore_text_label',
	array(
		'default'           => __( 'Load More', 'cheerful-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cheerful_blog_loadmore_text_label',
	array(
		'label'           => esc_html__( 'Load More Button Label', 'cheerful-blog' ),
		'settings'        => 'cheerful_blog_loadmore_text_label',
		'section'         => 'cheerful_blog_pagination',
		'active_callback' => 'cheerful_blog_loadmore_text_label_enabled',
	)
);

/*========================Active Callback==============================*/
function cheerful_blog_pagination_enabled( $control ) {
	return $control->manager->get_setting( 'cheerful_blog_pagination_enable' )->value();
}
function cheerful_blog_loadmore_text_label_enabled( $control ) {
	$pagination = $control->manager->get_setting( 'cheerful_blog_pagination_type' )->value();
	return cheerful_blog_pagination_enabled( $control ) && ( 'loadmore' === $pagination );
}
