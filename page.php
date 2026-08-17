<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<?php $header_image_title = get_the_title();
			if(has_post_thumbnail()) :  // If feature image has been set use it. Will override the custom theme header image.
				$header_image_src = get_the_post_thumbnail_url();
				$header_image_html ="<img src='" . $header_image_src . "' alt='" . $header_image_title . "' class='header-image'>";
				elseif(!has_post_thumbnail() && has_custom_header()) : // If no featured image has been set use the custom theme header image.
					$header_image_src = get_header_image();
					$header_image_html ="<img src='" . $header_image_src . "' alt='" . $header_image_title . "' class='header-image'>";
				else :
					$header_image_html = ""; // if no featured image and no custom theme header image have been set, then display nothing.
				endif; 
			print "$header_image_html"; ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'web-ok-starter' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
