<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cheerful Blog
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<?php if ( cheerful_blog_is_frontpage_blog() ) { ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			$breadcrumb_enable = get_theme_mod( 'cheerful_blog_breadcrumb_enable', true );
			if ( $breadcrumb_enable ) :
				?>
				<div id="breadcrumb-list">
					<?php
					echo cheerful_blog_breadcrumb(
						array(
							'show_on_front' => false,
							'show_browse'   => false,
						)
					);
					?>
				</div><!-- #breadcrumb-list -->
				<?php
			endif;
		}
		$grid_column = get_theme_mod( 'cheerful_blog_archive_grid_column_layout', 'grid-column-2' );
		?>
		<div class="theme-archives">
			<div class="theme-archive-layout grid-layout style-1 <?php echo esc_attr( $grid_column ); ?>">
				<?php
				$i = 1;
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					if ( $i != 1 ) {
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );
					}
					$i++;
				endwhile;
				?>
			</div>
		</div>
		<?php

		$postsPerPage = get_option( 'posts_per_page' );
		$totalPosts   = $wp_query->found_posts;
		if ( $totalPosts > $postsPerPage ) {

			$loadmore        = get_theme_mod( 'cheerful_blog_loadmore_text_label', __( 'Load More', 'cheerful-blog' ) );
			$pagination_type = get_theme_mod( 'cheerful_blog_pagination_type', 'loadmore' );
			$pagination      = get_theme_mod( 'cheerful_blog_pagination_enable', true );
			if ( ! empty( $loadmore ) && $pagination_type === 'loadmore' && $pagination === true ) {
				?>
			<div class="loadmore-wrapper">
				<button class="adore-load-more-posts"><?php echo esc_html( $loadmore ); ?></button>
			</div>
				<?php
			}
		}
		?>
		<?php

		do_action( 'cheerful_blog_posts_pagination' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- #main -->

<?php

if ( cheerful_blog_is_sidebar_enabled() ) {
	get_sidebar();
}

get_footer();
