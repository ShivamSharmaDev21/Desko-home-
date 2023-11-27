<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cheerful Blog
 */

get_header();

// Call home.php if Homepage setting is set to latest posts.
if ( cheerful_blog_is_latest_posts() ) {

	require get_home_template();

} elseif ( cheerful_blog_is_frontpage() ) {

	$header_image = ! empty( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : get_header_image();

	?>
	<div id="content" class="site-content theme-wrapper">
		<div class="theme-wrap">
			<main id="primary" class="site-main">

				<div class="page-banner-section" style="background-image: url('<?php echo esc_url( $header_image ); ?>')">
					<div class="theme-wrapper">
						<div class="page-banner-inner">
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->
						</div>
					</div>
				</div>

				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cheerful-blog' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->
						<?php if ( get_edit_post_link() ) : ?>
							<footer class="entry-footer">
								<?php
								edit_post_link(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Edit <span class="screen-reader-text">%s</span>', 'cheerful-blog' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									),
									'<span class="edit-link">',
									'</span>'
								);
								?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-<?php the_ID(); ?> -->
					<?php

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<?php

			if ( cheerful_blog_is_sidebar_enabled() ) {
				get_sidebar();
			}
			?>
		</div>
	</div>

	<?php
}

get_footer();
