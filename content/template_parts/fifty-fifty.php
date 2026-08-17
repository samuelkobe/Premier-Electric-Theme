<?php if ( have_rows( 'content_5050' ) ) : 
    while ( have_rows( 'content_5050' ) ) : the_row();
        if ( get_sub_field( 'background_icon' ) ) : 
            $bg_url = get_sub_field( 'background_icon' ); // setting variable for background image url to use inline
        endif;
    endwhile;
endif; ?>

<div class="flex flex-col lg:flex-row items-center justify-start w-full lg:custom-h-screen min-h-192 bg-brand-dim relative bg-no-repeat bg-contain bg-left-center-65" style="background-image: url(<?php echo $bg_url; ?>">
    <?php if ( have_rows( 'content_5050' ) ) : ?>
        <?php while ( have_rows( 'content_5050' ) ) : the_row(); ?>

            <div class="flex flex-col lg:flex-row items-center lg:h-75vh contained">
                <div class="w-full lg:w-3/5 order-2 lg:order-1 pb-6 lg:pb-0 lg:pr-12 2xl:pr-40 text-brand-bright">

                    <p class="flex flex-row items-center justify-start text-sm lg:text-base text-brand-grey font-sans uppercase mb-4 lg:mb-2">
                        <span class="w-4 lg:w-8 h-2px mr-2 lg:mr-4 rinline-block bg-brand-default"></span>
                        <?php the_sub_field( 'subtitle' ); ?>
                    </p>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl 2xl:text-6xl text-brand-bright font-title uppercase lg:leading-snug 2xl:leading-normal"><?php the_sub_field( 'title' ); ?></h1>
                    <p class="text-brand-grey lg:text-brand-clay mt-3 lg:mt-6 text-sm 2xl:text-base"><?php the_sub_field( 'content' ); ?></p>
                    <?php $call_to_action_button_link = get_sub_field( 'call_to_action_button_link' ); ?>
                    <div class="flex mt-2 lg:mt-6">
                        <?php if ( $call_to_action_button_link ) : ?>
                            <a class="button transparent bordered" href="<?php echo esc_url( $call_to_action_button_link); ?>"><?php the_sub_field( 'call_to_action_button_text' ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

        <?php endwhile; ?>
    <?php endif; ?>

                <div class="flex w-full sm:w-3/4 h-50vh my-8 lg:my-0 lg:h-75vh lg:w-2/5 lg:absolute lg:right-0 order-1 lg:order-2 overflow-hidden">
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <picture class="flex flex-col w-full h-full object-cover">
                            <source class="w-full h-full object-cover"  srcset="<?php echo $image['sizes']['desktop']; ?>" width="<?php echo $image['sizes']['desktop-width']; ?>" height="<?php echo $image['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
                            <source class="w-full h-full object-cover"  srcset="<?php echo $image['sizes']['laptop']; ?>"  width="<?php echo $image['sizes']['laptop-width']; ?>"  height="<?php echo $image['sizes']['laptop-height']; ?>"  media="(min-width: 1280px)">
                            <source class="w-full h-full object-cover"  srcset="<?php echo $image['sizes']['tablet']; ?>"  width="<?php echo $image['sizes']['tablet-width']; ?>"  height="<?php echo $image['sizes']['tablet-height']; ?>"  media="(min-width: 768px)">
                            <img class="w-full h-full object-cover order-1"     src="<?php echo $image['sizes']['mobile']; ?>"     width="<?php echo $image['sizes']['mobile-width']; ?>"  height="<?php echo $image['sizes']['mobile-height']; ?>"  alt="<?php echo $image['alt']; ?>" />
                        </picture>
                    <?php endif; ?>
                    
                </div>
            </div>
</div>
