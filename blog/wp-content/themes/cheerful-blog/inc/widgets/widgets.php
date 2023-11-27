<?php

// Author Info Widget.
require get_template_directory() . '/inc/widgets/info-author-widget.php';

// Featured Posts Widget.
require get_template_directory() . '/inc/widgets/featured-posts-widget.php';

// Social Widget.
require get_template_directory() . '/inc/widgets/social-widget.php';

/**
 * Register Widgets
 */
function cheerful_blog_register_widgets() {

	register_widget( 'Cheerful_Blog_Author_Info_Widget' );

	register_widget( 'Cheerful_Blog_Featured_Posts_Widget' );

	register_widget( 'Cheerful_Blog_Social_Widget' );

}
add_action( 'widgets_init', 'cheerful_blog_register_widgets' );
