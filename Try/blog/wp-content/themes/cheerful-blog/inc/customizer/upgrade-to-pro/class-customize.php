<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  Cheerful Blog 1.0.0
 * @access public
 */
final class Cheerful_Blog_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since Cheerful Blog 1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since Cheerful Blog 1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since Cheerful Blog 1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since Cheerful Blog 1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require trailingslashit( get_template_directory() ) . 'inc/customizer/upgrade-to-pro/section-pro.php' ;

		// Register custom section types.
		$manager->register_section_type( 'Cheerful_Blog_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Cheerful_Blog_Customize_Section_Pro(
				$manager,
				'cheerful-blog',
				array(
					'title'    => esc_html__( 'Cheerful Blog Pro','cheerful-blog' ),
					'pro_text' => esc_html__( 'Go Pro','cheerful-blog' ),
					'pro_url'  => esc_url( 'https://adorethemes.com/downloads/cheerful-blog-pro/' )
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since Cheerful Blog 1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'cheerful-blog-go-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'cheerful-blog-go-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/upgrade-to-pro/customize-controls.css' );
	}
}

// Doing this customizer thang!
Cheerful_Blog_Customize::get_instance();