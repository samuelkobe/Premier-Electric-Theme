<?php /* Template Name: About Page Template */ get_header(); ?>

	<main id="about-main" role="main">

		<?php get_template_part('content/template_parts/half-banner'); ?>

		<?php get_template_part('content/template_parts/anchor-links'); ?>

		<section id="history" class="pt-12 lg:pt-20">
			<?php get_template_part('content/template_parts/history'); ?>
		</section>

		<?php get_template_part('content/template_parts/full-video'); ?>
		
		<section id="approach">
			<?php get_template_part('content/template_parts/fifty-fifty'); ?>
		</section>
		
		<section id="people" class="pt-12 lg:pt-32">
			<?php get_template_part('content/template_parts/people'); ?>
		</section>

		<?php get_template_part('content/template_parts/testimonials'); ?>

		<?php get_template_part('content/content-cta'); ?>

	</main>

<?php get_footer(); ?>
