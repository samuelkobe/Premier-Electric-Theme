<?php get_header(); ?>

	<main class="text-brand-dim bg-brand-light" role="main">

		<section class="h-64 lg:h-128 w-full bg-brand-dim text-brand-light flex flex-row items-center justify-center overflow-hidden">
            <div class="flex items-center justify-center w-full h-full relative">
                <h1 class="w-full text-center text-2xl lg:text-6xl text-brand-bright font-title uppercase lg:leading-snug absolute left-0 z-10 pointer-events-none">Projects</h1>
				<?php $projects_hero_image = get_field( 'projects_hero_image', 'option' ); ?>
				<?php if ( $projects_hero_image ) : ?>
					<picture class="w-full h-auto flex flex-row items-start justify-center">
						<source srcset="<?php echo esc_url( $projects_hero_image['sizes']['desktop'] ); ?>" width="<?php echo $projects_hero_image['sizes']['desktop-width']; ?>" height="<?php echo $projects_hero_image['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
						<source srcset="<?php echo esc_url( $projects_hero_image['sizes']['laptop'] ); ?>"  width="<?php echo $projects_hero_image['sizes']['laptop-width']; ?>" height="<?php echo $projects_hero_image['sizes']['laptop-height']; ?>"  media="(min-width: 1280px)">
						<source srcset="<?php echo esc_url( $projects_hero_image['sizes']['tablet'] ); ?>"  width="<?php echo $projects_hero_image['sizes']['tablet-width']; ?>" height="<?php echo $projects_hero_image['sizes']['tablet-height']; ?>"  media="(min-width: 768px)">
						<img class="w-full opacity-25" src="<?php echo esc_url( $projects_hero_image['sizes']['mobile'] ); ?>" width="<?php echo $projects_hero_image['sizes']['mobile-width']; ?>"  height="<?php echo $projects_hero_image['sizes']['mobile-height']; ?>" alt="All projects hero image" />
					</picture>
				<?php endif; ?>
            </div>
		</section>

		<section class="object-reveal bg-brand-bright">
			<div class="w-full contained relative">
                <?php get_template_part('loop-project'); ?>
                <?php get_template_part('pagination'); ?>
			</div>
		</section>

		<?php get_template_part('content/content-cta'); ?>

	</main>

<?php get_footer(); ?>