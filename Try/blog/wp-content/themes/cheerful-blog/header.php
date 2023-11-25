<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cheerful Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary-content"><?php esc_html_e( 'Skip to content', 'cheerful-blog' ); ?></a>

		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<div class="pre-loader-1"></div>
				</div>
			</div>
		</div><!-- #loader -->

		<header id="masthead" class="site-header">
			<div class="adore-header">
				<div class="theme-wrapper">
					<div class="adore-header-wrapper">
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
								<?php
							}
							if ( get_theme_mod( 'cheerful_blog_header_text_display', true ) === true ) {
								?>
								<div class="site-identity">
									<?php if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php
									else :
										?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php
									endif;

									$cheerful_blog_description = get_bloginfo( 'description', 'display' );
									if ( $cheerful_blog_description || is_customize_preview() ) :
									?>
										<p class="site-description">
											<?php
											echo $cheerful_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?>
										</p>
									<?php endif; ?>
								</div>
							<?php } ?>
						</div><!-- .site-branding -->
						<div class="adore-navigation">
							<div class="header-navigation">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
										<span></span>
										<span></span>
									</button>
									<?php
									$menu_bg_image = get_theme_mod( 'cheerful_blog_menu_background_image', '' );
									$menu_bg_class = empty( $menu_bg_image ) ? '' : 'menu-bg-image';
									?>
									<div class="navigation-container-wrapper <?php echo esc_attr( $menu_bg_class ); ?>" style="background-image: url('<?php echo esc_url( $menu_bg_image ); ?>')">
										<div class="navigation-container-wrapper-inside">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
													'menu_id' => 'primary-menu',
												)
											);
											?>
										</div>
									</div>
								</nav><!-- #site-navigation -->
							</div>
						</div>
						<div class="header-end">
							<div class="navigation-search">
								<div class="navigation-search-wrap">
									<a href="#" title="Search" class="navigation-search-icon">
										<i class="fa fa-search"></i>
									</a>
									<div class="navigation-search-form">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="primary-content" class="primary-site-content">

				<!-- archive page post in front page -->
				<?php if ( is_front_page() && is_home() ) { ?>

					<div class="adore-banner-archive banner-archive-slider adore-navigation">

						<?php

						$i = 1;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							if ( $i <= 1 ) {

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

				<?php } ?>
				<!-- end archive page post in front page -->

				<!-- archive header image -->
				<?php if ( is_archive() || ( is_home() && ! is_front_page() ) ) { ?>
					<div class="page-banner-section" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
						<div class="theme-wrapper">
							<div class="page-banner-inner">
								<header class="page-header">
									<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
									?>
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
									</header><!-- .page-header -->
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php } ?>
				<!-- end archive header image -->

				<!-- search page header image -->
				<?php if ( is_search() ) { ?>
					<div class="page-banner-section" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
						<div class="theme-wrapper">
							<div class="page-banner-inner">
								<header class="page-header">
									<h1 class="page-title">
										<?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'cheerful-blog' ), '<span>' . get_search_query() . '</span>' );
										?>
									</h1>
								</header><!-- .page-header -->
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- end search page header image -->

				<!-- 404 page header image -->
				<?php if ( is_404() ) { ?>
					<div class="page-banner-section" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
						<div class="theme-wrapper">
							<div class="page-banner-inner">
								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cheerful-blog' ); ?></h1>
								</header><!-- .page-header -->
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- end 404 page header image -->

				<?php
				$header_image  = ! empty( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : get_header_image();
				$single_date   = get_theme_mod( 'cheerful_blog_enable_single_date', true );
				$single_author = get_theme_mod( 'cheerful_blog_enable_single_author', true );
				?>

				<!-- single post header image -->
				<?php if ( is_single() ) { ?>
					<div class="page-banner-section post-single" style="background-image: url('<?php echo esc_url( $header_image ); ?>')">
						<div class="page-banner-outer">
							<div class="page-banner-inner">
								<header class="entry-header">
										<?php
										if ( is_singular() ) :
											the_title( '<h1 class="entry-title">', '</h1>' );
										else :
											the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
										endif;
										?>
									<?php
									if ( 'post' === get_post_type() ) :
										setup_postdata( get_post() );
										?>
										<div class="entry-meta">
											<?php
											if ( $single_date === true ) {
												cheerful_blog_posted_on();
											}
											if ( $single_author === true ) {
												cheerful_blog_posted_by();
											}
											?>
										</div><!-- .entry-meta -->
										<?php
									endif;
									?>
								</header><!-- .entry-header -->
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- end single post header image -->

				<!-- single page header image -->
				<?php if ( is_page() && ! is_front_page() ) { ?>
					<div class="page-banner-section" style="background-image: url('<?php echo esc_url( $header_image ); ?>')">
						<div class="theme-wrapper">
							<div class="page-banner-inner">
								<header class="entry-header">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								</header><!-- .entry-header -->
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- end single page header image -->

				<?php

				if ( ! is_front_page() || is_home() ) {

					?>

					<div id="content" class="site-content theme-wrapper">
						<div class="theme-wrap">

							<?php } ?>
