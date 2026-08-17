<?php $order_style = true; ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="flex flex-col lg:flex-row bg-brand-light mb-12 lg:mb-20">
		<div class="flex items-center justify-center w-full h-96 lg:h-108 lg:w-1/2 order-1 <?php if($order_style == true): ?>lg:order-1<?php else: ?>lg:order-3<?php endif; ?>">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<picture class="w-full h-full flex items-center justify-center relative">
					<source class="w-full h-full object-cover absolute left-0 top-0"  srcset="<?php the_post_thumbnail_url('services-card'); // Declare specific WP sized thumbnail here ?>" width="720px" height="432px" media="(min-width: 1920px)">
					<source class="w-full h-full object-cover absolute left-0 top-0"  srcset="<?php the_post_thumbnail_url('services-card'); // Declare specific WP sized thumbnail here ?>" width="720px" height="432px" media="(min-width: 1280px)">
					<source class="w-full h-full object-cover absolute left-0 top-0"  srcset="<?php the_post_thumbnail_url('services-card'); // Declare specific WP sized thumbnail here ?>" width="720px" height="432px" media="(min-width: 768px)">
					<img class="w-full h-full object-cover absolute left-0 top-0"     src="<?php the_post_thumbnail_url('services'); // Declare specific WP sized thumbnail here ?>" 	width="464px" height="309px" alt="<?php the_title(); ?> service" />
				</picture>
			<?php else : ?>
				<div class="flex flex-row items-center justify-items-center p-10 w-full">
					<p class="text-brand-dark font-thin">Services need a featured image. Please return to the Service posts area in the administrative settings and add a featured image to the <span class="font-bold"><?php the_title(); ?> Service</span> post or contact your developer.</p>
				</div>
			<?php endif; ?>
		</div>
		<div class="flex flex-col items-start justify-center w-full h-auto lg:h-108 lg:w-1/2 p-8 lg:px-32 lg:py-12 order-2 lg:order-2">
			<h2 class="text-xl lg:text-3xl text-brand-dark font-title uppercase lg:leading-snug"><?php the_title(); ?></h2>
			<p class="text-sm 2xl:text-base mt-3 lg:mt-6 text-brand-clay"><?php the_field( 'service_snapshot' ); ?></p>
			<div class="flex mt-3">
				<a class="button small transparent alt bordered" href="<?php the_permalink(); ?>" title="Learn more about <?php the_title(); ?>"><?php the_title(); ?> Info</a>
			</div>
		</div>
	</div>

	<?php
	if(!$order_style): 
		$order_style = true;
	else:
		$order_style = false;
	endif;	
	?>
	

<?php endwhile; ?>

<?php else: ?>
	<h2><?php _e( 'Currently there are no services posted.', 'web-ok-starter' ); ?></h2>
<?php endif; ?>
