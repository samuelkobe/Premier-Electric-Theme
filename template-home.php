<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('content/template_parts/hero-slider'); ?>

		<section>
			<?php get_template_part('content/template_parts/fifty-fifty'); ?>
		</section>

		<?php get_template_part('content/template_parts/services-panel'); ?>

		<?php get_template_part('content/content-cta'); ?>

	</main>

<?php get_footer(); ?>
