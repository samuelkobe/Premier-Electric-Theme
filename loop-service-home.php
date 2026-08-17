<div class="w-full flex flex-row flex-wrap items-start justify-start my-8 lg:my-20">

	<?php $args = array(
		'post_type' => 'service',
		'order' => 'ASC',
	);

	$loop = new WP_Query($args); ?>

  	<?php if ($loop->have_posts()) : 
		while ( $loop->have_posts() ) : 
		$loop->the_post(); 
	?>

  	<div class="w-full md:w-1/2 xl:w-1/3 mb-4">
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<div class="flex flex-col w-full px-2">
			<div class="flex items-center justify-center w-full relative">
				<div class="flex items-center justify-center absolute top-0 left-0 w-full h-full">
					<div class="w-full h-full bg-brand-dark opacity-25 z-0 absolute left-0 top-0"></div>
					<h2 class="text-3xl lg:text-4xl font-title uppercase text-brand-bright z-10"><?php the_title(); ?></h2>
				</div>
				<picture>
					<source srcset="<?php the_post_thumbnail_url('services'); ?>" width="464px" height="309px" media="(min-width: 1920px)">
					<source srcset="<?php the_post_thumbnail_url('services'); ?>" width="464px" height="309px" media="(min-width: 1280px)">
					<source srcset="<?php the_post_thumbnail_url('services'); ?>" width="464px" height="309px" media="(min-width: 768px)">
					<img class="" src="<?php the_post_thumbnail_url('services'); ?>" width="464px" height="309px" alt="<?php the_title(); ?> service" />
				</picture>
			</div>
			<div class="flex flex-col items-center justify-center w-full px-8 py-6 bg-brand-light">
				<div class="flex">
					<a class="button transparent bordered alt small" href="<?php the_permalink(); ?>" title="Learn more about our <?php the_title(); ?> service"><?php the_title(); ?> Info</a>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="flex flex-row items-center justify-items-center p-10 w-full">
			<p class="text-brand-bright font-thin">Services need a featured image. Please return to the Service posts area in the administrative settings and add a featured image to the <span class="font-bold"><?php the_title(); ?> Service</span> post or contact your developer.</p>
		</div>
	<?php endif; ?>
	</div>

	<?php 
		endwhile; 
		else : 
	?>

		<div class="w-full hidden sm:flex flex-row items-center justify-center mb-8 lg:mb-24">
			<div class="flex flex-row items-center justify-center text-xs lg:text-sm">
				<p class="text-xl lg:text-2xl">Oops! Currently there are no Services</p>
			</div>
		</div>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

</div>