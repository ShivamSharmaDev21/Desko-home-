<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Cheerful Blog
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'cheerful-blog' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->

		<?php $grid_column = get_theme_mod( 'cheerful_blog_archive_grid_column_layout', 'grid-column-2' ); ?>

		<div class="theme-archive-layout grid-layout style-1 <?php echo esc_attr( $grid_column ); ?>">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			?>

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
