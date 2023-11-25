<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cheerful Blog
 */

$single_category = get_theme_mod( 'cheerful_blog_enable_single_category', true );
$single_tag      = get_theme_mod( 'cheerful_blog_enable_single_tag', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cheerful-blog' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cheerful-blog' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php
		if ( $single_category === true ) {
			cheerful_blog_categories_list();
		}
		if ( $single_tag === true ) {
			cheerful_blog_entry_footer();
		}
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
