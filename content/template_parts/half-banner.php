<section class="h-64 lg:h-128 w-full bg-brand-dim text-brand-light flex flex-row items-center justify-center overflow-hidden">
    <div class="flex items-center justify-center w-full h-full relative">
        <h1 class="w-full text-center text-2xl lg:text-6xl text-brand-bright font-title uppercase lg:leading-snug absolute left-0 z-10 pointer-events-none"><?php the_title() ; ?>
        </h1>
        <?php $half_banner_image = get_field('half_banner_image'); ?>
        <?php if ( $half_banner_image ) : ?>
            <picture class="w-full h-auto flex flex-row items-start justify-center">
                <source srcset="<?php echo esc_url( $half_banner_image['sizes']['desktop'] ); ?>" width="<?php echo $half_banner_image['sizes']['desktop-width']; ?>" height="<?php echo $half_banner_image['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
                <source srcset="<?php echo esc_url( $half_banner_image['sizes']['laptop'] ); ?>"  width="<?php echo $half_banner_image['sizes']['laptop-width']; ?>"  height="<?php echo $half_banner_image['sizes']['laptop-height']; ?>"  media="(min-width: 1280px)">
                <source srcset="<?php echo esc_url( $half_banner_image['sizes']['tablet'] ); ?>"  width="<?php echo $half_banner_image['sizes']['tablet-width']; ?>"  height="<?php echo $half_banner_image['sizes']['tablet-height']; ?>"  media="(min-width: 768px)">
                <img class="w-full opacity-25"     src="<?php echo esc_url( $half_banner_image['sizes']['mobile'] ); ?>"     width="<?php echo $half_banner_image['sizes']['mobile-width']; ?>"  height="<?php echo $half_banner_image['sizes']['mobile-height']; ?>"  alt="<?php echo esc_attr( $half_banner_image['alt'] ); ?>" />
            </picture>
        <?php endif ?>
    </div>
</section>