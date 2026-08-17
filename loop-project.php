<div class="w-full hidden sm:flex flex-row items-center justify-center h-20 border-b-2 border-brand-grey mb-8 lg:mb-24">
	<div class="h-20 flex flex-row items-center justify-center text-xs lg:text-sm">
		<?php echo get_field( 'projects_filter', 'option' ); ?>
	</div>
</div>

<div class="flex sm:hidden mb-12 lg:mb-24"></div>

<div id="projects" class="w-full flex flex-row flex-wrap items-start justify-start mb-8 lg:mb-20">

	<?php $args = array(
		'post_type' => 'project',
		'search_filter_id' => 200,
		'order' => 'ASC',
	);

	$loop = new WP_Query($args); ?>

  	<?php if ($loop->have_posts()) : 
		while ( $loop->have_posts() ) : 
		$loop->the_post(); 
	?>

  	<a class="w-full md:w-1/2 xl:w-1/3 mb-8 lg:mb-20" href="<?php the_permalink(); ?>" title="Learn more about <?php the_title(); ?>">
		<div class="flex flex-col w-full px-2">
			<div class="flex items-center justify-center w-full h-64 lg:h-96 order-1 lg:order-1">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<picture class="w-full h-full flex items-center justify-center relative">
						<source srcset="<?php the_post_thumbnail_url('services-card'); ?>" width="720px" height="432px" media="(min-width: 1920px)">
						<source srcset="<?php the_post_thumbnail_url('services-card'); ?>" width="720px" height="432px" media="(min-width: 1280px)">
						<source srcset="<?php the_post_thumbnail_url('services-card'); ?>" width="720px" height="432px" media="(min-width: 768px)">
						<img class="w-full h-full object-cover absolute left-0 top-0" src="<?php the_post_thumbnail_url('services'); ?>" width="464px" height="309px" alt="<?php the_title(); ?> service" />
					</picture>
				<?php else : ?>
					<div class="flex flex-row items-center justify-items-center p-10 w-full h-80">
						<p class="text-brand-dark font-thin">Projects need a featured image. Please return to the Project posts area in the administrative settings and add a featured image to the <span class="font-bold"><?php the_title(); ?> Project</span> post or contact your developer.</p>
					</div>
				<?php endif; ?>
			</div>
			<div class="flex flex-col items-center justify-start w-full md:min-h-44 px-8 py-6 order-2 lg:order-2 bg-brand-light">
				<h2 class="text-lg lg:text-2xl text-brand-dark font-title uppercase lg:leading-snug"><?php the_title(); ?></h2>
					
				<div class="w-full max-w-full flex flex-row flex-wrap text-center items-center justify-center mt-1 lg:mt-3">
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
								echo '<span class="text-base inline-flex text-brand-lightgrey bg-brand-bright p-1 mr-1 my-1">' .$tag->name. '</span>'; 
							}
						}
					?>
				</div>
			</div>
		</div>
	</a>

	<?php 
		endwhile; 
		else : 
	?>

		<div class="w-full hidden sm:flex flex-row items-center justify-center mb-8 lg:mb-24">

			<div class="flex flex-row items-center justify-center text-xs lg:text-sm">
				<p class="text-xl lg:text-2xl">Oops! Currently there are no projects under that category</p>
			</div>

		</div>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

</div>