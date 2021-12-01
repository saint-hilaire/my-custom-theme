<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	</head>

		<body <?php body_class( 'wide-template blue-bg'); ?>>

	<header class="site-header">
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</p>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</header><!-- .site-header -->

	<div class="site-content">
		<?php
		if ( have_posts() ):
			while ( have_posts() ):
				the_post();
				?>
				<article <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>

					<div class="entry-content">
						<?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
					</div>

				</article>

				<?php
					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
			endwhile;
		else:
		?>
			<article class="no-results">
				<header class="entry-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'my-custom-theme' ); ?></h1>
				</header>

				<div class="entry-content">
				<p><?php esc_html_e( 'It looks like nothing was found.', 'my-custom-theme' ); ?></p>
				</div>
			</article>
		<?php
		endif;
		?>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>
