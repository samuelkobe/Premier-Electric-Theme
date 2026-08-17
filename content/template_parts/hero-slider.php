<section>
    <div class="swiper-container swiper-hero">
        <?php if ( have_rows( 'hero_slider' ) ) : ?>
            <div id="home-hero-gallery" class="swiper-wrapper w-full bg-brand-dark">
                <?php while ( have_rows( 'hero_slider' ) ) : the_row(); ?>

                <?php 
                    $title = get_sub_field( 'slide_title' ); 
                    $content = get_sub_field( 'slide_content' ); 
                    $content_2 = get_sub_field( 'slide_content_two' ); 
                ?>

                    <div class="swiper-slide w-full bg-brand-dark relative">

                        <div class="flex items-end md:items-center relative w-full custom-h-screen custom-h-screen-half min-h-144">

                            <?php if ( have_rows( 'media_options' ) ) : ?>
                                <div class="bg-brand-dark opacity-75 absolute top-0 left-0 w-full h-full pointer-events-none z-10"></div>
                                <?php while ( have_rows( 'media_options' ) ) : the_row(); ?>
                                    <?php if ( get_sub_field( 'media_type' ) == 1 ) : ?>
                                        
                                        <?php if ( get_sub_field( 'slide_video' ) ) : ?>
                                            <?php 
                                            $video = get_sub_field( 'slide_video' );
                                            $video_element = '<video
                                                                class="absolute top-0 left-0 w-full h-full object-cover"
                                                                preload="metadata"
                                                                muted
                                                                autoplay
                                                                loop
                                                                playsinline
                                                                src="' . $video . '"
                                                                type="video/mp4">
                                                                Sorry, your browser doesn\'t support embedded videos.
                                                                </video>';
                                            ?>

                                            <?php echo $video_element;?>
                                        <?php endif; ?>

                                    <?php else : ?>

                                        <?php $slide_image = get_sub_field('slide_image'); ?>
                                        <?php if ( get_sub_field( 'slide_image' ) ) : ?>
                                            <picture>
                                                <source class="absolute top-0 left-0 w-full h-full object-cover"  srcset="<?php echo $slide_image['sizes']['desktop']; ?>" width="<?php echo $slide_image['sizes']['desktop-width']; ?>" height="<?php echo $slide_image['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
                                                <source class="absolute top-0 left-0 w-full h-full object-cover"  srcset="<?php echo $slide_image['sizes']['laptop']; ?>"  width="<?php echo $slide_image['sizes']['laptop-width']; ?>"  height="<?php echo $slide_image['sizes']['laptop-height']; ?>"  media="(min-width: 1280px)">
                                                <source class="absolute top-0 left-0 w-full h-full object-cover"  srcset="<?php echo $slide_image['sizes']['tablet']; ?>"  width="<?php echo $slide_image['sizes']['tablet-width']; ?>"  height="<?php echo $slide_image['sizes']['tablet-height']; ?>"  media="(min-width: 768px)">
                                                <img class="absolute top-0 left-0 w-full h-full object-cover"     src="<?php echo $slide_image['sizes']['mobile']; ?>"     width="<?php echo $slide_image['sizes']['mobile-width']; ?>"  height="<?php echo $slide_image['sizes']['mobile-height']; ?>"  alt="<?php echo $slide_image['alt']; ?>" />
                                            </picture>
                                        <?php endif ?>

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <div class="w-full flex-col items-center justify-center mt-40 2xl:mt-32 z-10">

                                <div class="contained w-full relative py-12 md:pb-4">
                                    <p class="flex flex-row items-center justify-start text-sm lg:text-base text-brand-grey font-sans uppercase mb-4 lg:mb-2">
                                        <span class="w-4 lg:w-8 h-2px mr-2 lg:mr-4 rinline-block bg-brand-default"></span>
                                        <?php echo $title; ?>
                                    </p>
                                    <h1 class="text-2xl sm:text-3xl lg:text-6xl 2xl:text-7xl text-brand-bright font-title uppercase lg:leading-snug 2xl:leading-tight"><?php echo $content; ?></h1>
                                    <p class="inline text-base lg:text-xl text-brand-grey font-sans mt-4 lg:mt-2">
                                        <?php echo $content_2; ?>
                                    </p>
                                </div>

                                <div class="contained w-full">

                                    <div class="w-full h-auto md:h-16 flex flex-col md:flex-row items-center md:items-end">

                                        <div class="w-full md:w-1/2 flex flex-row relative mb-8 md:mb-0">
                                            <?php $call_to_action_button_link = get_sub_field( 'call_to_action_button_link' ); ?>
                                            <?php if ( $call_to_action_button_link ) : ?>
                                                <a class="button dark small no-margin" href="<?php echo esc_url( $call_to_action_button_link); ?>"><?php the_sub_field( 'call_to_action_button_text' ); ?></a>
                                            <?php endif; ?>
                                        </div>

                                        <div class="w-full flex flex-row md:items-end md:justify-end md:absolute md:left-0 md:bottom-16">
                                            <div class="md:contained md:items-end">
                                                <div class="swiper-pagination text-secondary relative"></div>
                                            </div>
                                        </div>

                                    </div>
                                <div class="w-full h-16"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>

</section>