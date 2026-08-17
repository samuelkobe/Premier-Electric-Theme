<section>
    <div class="bg-brand-dark">
        <div class="contained">

            <div class="w-auto max-w-full mt-8 lg:mt-24 lg:mx-48">
                <p class="flex flex-row items-center justify-start text-sm lg:text-base text-brand-grey font-sans uppercase mb-4 lg:mb-2">
                    <span class="w-4 lg:w-8 h-2px mr-2 lg:mr-4 rinline-block bg-brand-default"></span>
                    <?php the_field( 'services_subtitle' ); ?>
                </p>
                <h1 class="text-lg lg:text-2xl text-brand-bright lg:leading-snug"><?php the_field( 'services_title' ); ?></h1>
            </div>
            
			<div class="w-full relative">
                <?php get_template_part('loop-service-home'); ?>
			</div>
            
        </div>
    </div>
</section>