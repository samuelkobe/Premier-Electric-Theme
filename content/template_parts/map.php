<section>
    <div class="w-full h-auto bg-brand-dark">
        
        <?php $map = get_field( 'map' ); ?>
        <div class="flex flex-col xl:flex-row h-auto lg:h-50vh relative">

            <div class="contained h-full flex-row z-10 my-8 lg:my-0">
                <div class="flex items-center w-full lg:w-1/2 xl:w-2/5 h-full">
                    <?php if ( have_rows( 'map_info' ) ) : ?>
                        <?php while ( have_rows( 'map_info' ) ) : the_row(); ?>
                        <div class="flex flex-col">
                            <h2 class="text-2xl lg:text-5xl 2xl:text-6xl text-brand-bright font-title uppercase lg:leading-snug 2xl:leading-normal"><?php the_sub_field( 'title' ); ?></h2>
                            <div class="text-brand-grey mt-3 xl:mt-6 text-sm xl:text-base">
                                <?php the_sub_field( 'description' ); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lg:absolute lg:top-0 lg:left-0 w-full h-auto lg:h-full bg-no-repeat bg-contain bg-right-top z-0" style="background-image: url(<?php echo esc_url( $map['url'] ); ?>)">
                <?php $map = get_field( 'map' ); ?>
                <?php if ( $map ) : ?>
                    <picture class="w-full h-auto flex flex-row items-start justify-center">
                        <source srcset="<?php echo esc_url( $map['sizes']['desktop'] ); ?>" width="<?php echo $map['sizes']['desktop-width']; ?>" height="<?php echo $map['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
                        <source srcset="<?php echo esc_url( $map['sizes']['laptop'] ); ?>"  width="<?php echo $map['sizes']['laptop-width']; ?>"  height="<?php echo $map['sizes']['laptop-height']; ?>"  media="(min-width: 1280px)">
                        <source srcset="<?php echo esc_url( $map['sizes']['tablet'] ); ?>"  width="<?php echo $map['sizes']['tablet-width']; ?>"  height="<?php echo $map['sizes']['tablet-height']; ?>"  media="(min-width: 768px)">
                        <img class="lg:hidden" src="<?php echo esc_url( $map['sizes']['mobile'] ); ?>" width="<?php echo $map['sizes']['mobile-width']; ?>" height="<?php echo $map['sizes']['mobile-height']; ?>"  alt="<?php echo esc_attr( $map['alt'] ); ?>" />
                    </picture>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>