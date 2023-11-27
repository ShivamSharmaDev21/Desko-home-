<?php
if ( ! class_exists( 'Cheerful_Blog_Social_Widget' ) ) {
	/**
	 * Adds Cheerful Blog Social Widget.
	 */
	class Cheerful_Blog_Social_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$cheerful_blog_social_widget = array(
				'classname'   => 'widget adore-widget social-widget style-2',
				'description' => __( 'Retrive Social Widget', 'cheerful-blog' ),
			);
			parent::__construct(
				'cheerful_blog_social_widget',
				__( 'Adore Widget: Social Widget', 'cheerful-blog' ),
				$cheerful_blog_social_widget
			);
		}

		/**
		 * Front-end display of widget.

		 * @see WP_Widget::widget()

		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$section_title     = ! empty( $instance['title'] ) ? $instance['title'] : '';
			$section_title     = apply_filters( 'widget_title', $section_title, $instance, $this->id_base );
			$open_link_new_tab = ! empty( $instance['open_link_new_tab'] ) ? true : false;
			$target            = empty( $open_link_new_tab ) ? '' : 'target="_blank"';

			echo $args['before_widget'];
			if ( ! empty( $section_title ) ) {
				echo $args['before_title'] . esc_html( $section_title ) . $args['after_title'];
			}
			?>

			<div class="adore-widget-body">
				<div class="social-widgets-wrap author-social-contacts">
					<?php
					for ( $i = 1; $i <= 4; $i++ ) {
						$social_icon_label = ( ! empty( $instance[ 'social_icon_label' . '-' . $i ] ) ) ? $instance[ 'social_icon_label' . '-' . $i ] : '';
						$link              = ( ! empty( $instance[ 'link' . '-' . $i ] ) ) ? $instance[ 'link' . '-' . $i ] : '';
						if ( ! empty( $link ) ) :
							?>
							<a href="<?php echo esc_url( $link ) . '" ' . esc_attr( $target ); ?>">
								<?php if ( ! empty( $social_icon_label ) ) : ?>
									<span class="screen-reader-text"><?php echo esc_html( $social_icon_label ); ?></span>
								<?php endif; ?>
							</a>
							<?php
						endif;
					}
					?>
				</div>
			</div>

			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.

		 * @see WP_Widget::form()

		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$section_title     = isset( $instance['title'] ) ? $instance['title'] : '';
			$open_link_new_tab = isset( $instance['open_link_new_tab'] ) ? $instance['open_link_new_tab'] : false;
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'cheerful-blog' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $section_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'open_link_new_tab' ) ); ?>"><?php esc_html_e( 'Open Social link in New Tab', 'cheerful-blog' ); ?>:</label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'open_link_new_tab' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'open_link_new_tab' ), 'cheerful-blog' ); ?>"  <?php checked( $open_link_new_tab, true ); ?> />
			</p>
			<?php
			for ( $i = 1; $i <= 4; $i++ ) {
				$social_icon_label = isset( $instance[ 'social_icon_label' . '-' . $i ] ) ? $instance[ 'social_icon_label' . '-' . $i ] : '';
				$link              = isset( $instance[ 'link' . '-' . $i ] ) ? $instance[ 'link' . '-' . $i ] : '';
				?>
				<p>
					<label for="<?php echo esc_attr( $this->get_field_id( 'social_icon_label' . '-' . $i ) ); ?>"><?php echo sprintf( esc_html__( 'Social Icon Label %d :', 'cheerful-blog' ), $i ); ?></label>
					<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social_icon_label' . '-' . $i ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social_icon_label' . '-' . $i ) ); ?>" value="<?php echo esc_html( $social_icon_label ); ?>"/>
				</p>
				<p>
					<label for="<?php echo esc_attr( $this->get_field_id( 'link' . '-' . $i ) ); ?>"><?php echo sprintf( esc_html__( 'Link %d :', 'cheerful-blog' ), $i ); ?></label>
					<input type="url" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' . '-' . $i ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' . '-' . $i ) ); ?>" value="<?php echo esc_url( $link ); ?>"/>
				</p>
			<?php } ?>

			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.

		 * @see WP_Widget::update()

		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.

		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {

			$instance                      = $old_instance;
			$instance['title']             = sanitize_text_field( $new_instance['title'] );
			$instance['open_link_new_tab'] = cheerful_blog_sanitize_checkbox( $new_instance['open_link_new_tab'] );
			for ( $i = 1; $i <= 4; $i++ ) {
				$instance[ 'social_icon_label' . '-' . $i ] = sanitize_text_field( $new_instance[ 'social_icon_label' . '-' . $i ] );
				$instance[ 'link' . '-' . $i ]              = esc_url_raw( $new_instance[ 'link' . '-' . $i ] );
			}
			return $instance;
		}

	}
}