<?php if ( have_rows( 'testimonials' ) ) : ?>
    <section id="testimonials" class="py-12 lg:py-32 bg-brand-light">
        
        <div class="contained">
            <div class="w-full flex items-center justify-center">
                <h2 class="text-xs lg:text-sm text-brand-clay uppercase mb-4 lg:mb-8">Our Clients</h2>
            </div>
        </div>

        <div class="w-full swiper-container swiper-testimonial flex items-center justify-center">

            <div class="w-full swiper-wrapper">
                <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                <div class="w-full swiper-slide h-auto flex items-center justify-center">
                    <div class="flex flex-col text-center items-center justify-center mx-auto pb-4">
                        <div class="max-w-3xl px-8 lg:px-0">
                            <h4 class="text-2xl lg:text-4xl font-bold mb-6 md:mb-12"><?php the_sub_field( 'testimonial_title' ); ?></h4>
                            <p class="text-lg lg:text-2xl font-medium leading-snug lg:leading-relaxed">“<?php the_sub_field( 'testimonial_paragraph' ); ?>”</p>
                            <h5 class="text-base lg:text-2xl font-bold mt-8"><?php the_sub_field( 'testimonial_author' ); ?></h4>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <!-- Add Arrows -->
            <div class="container swiper-button-custom-arrow flex justify-between absolute mx-auto h-full lg:px-8 xl:px-4">
                <div class="swiper-button-prev swiper-button-black invisible lg:visible"></div>
                <div class="swiper-button-next swiper-button-black invisible lg:visible"></div>
            </div>

        </div>

    </section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
