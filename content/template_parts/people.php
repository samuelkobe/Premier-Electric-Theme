<div class="contained">
    <div class="w-full flex items-center justify-center">
        <h2 class="text-xs lg:text-sm text-brand-clay uppercase mb-4 lg:mb-8"><?php the_field( 'people_title' ); ?></h2>
    </div>
    <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-8 lg:mb-16">
        <p class="text-brand-dark text-base lg:text-lg mb-6"><?php the_field( 'people_snapshot' ); ?></p>
        <div class="text-brand-clay text-sm lg:text-base paragraphs"><?php the_field( 'people_content' ); ?></div>
    </div>
    <?php if ( get_field( 'team_toggle' ) == 1 ) : ?>
    <div class="w-full flex flex-row flex-wrap items-start justify-start mb-8 lg:mb-32">
    <?php if ( have_rows( 'team_members' ) ) : ?>
        <?php while ( have_rows( 'team_members' ) ) : the_row(); ?>
        <div class="w-full md:w-1/2 xl:w-1/3 mb-8">
            <div class="flex flex-col w-full px-2">
                <div class="flex items-center justify-center w-full order-1 lg:order-1">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <picture class="flex flex-col w-full h-full object-cover">
                            <source srcset="<?php echo $image['sizes']['desktop']; ?>" width="<?php echo $image['sizes']['desktop-width']; ?>" height="<?php echo $image['sizes']['desktop-height']; ?>" media="(min-width: 1920px)">
                            <source srcset="<?php echo $image['sizes']['laptop']; ?>" width="<?php echo $image['sizes']['laptop-width']; ?>" height="<?php echo $image['sizes']['laptop-height']; ?>" media="(min-width: 1280px)">
                            <source srcset="<?php echo $image['sizes']['tablet']; ?>" width="<?php echo $image['sizes']['tablet-width']; ?>" height="<?php echo $image['sizes']['tablet-height']; ?>" media="(min-width: 768px)">
                            <img class="w-full h-80 xl:h-96 object-cover order-1" src="<?php echo $image['sizes']['mobile']; ?>"     width="<?php echo $image['sizes']['mobile-width']; ?>"  height="<?php echo $image['sizes']['mobile-height']; ?>"  alt="<?php echo $image['alt']; ?>" />
                        </picture>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col items-center justify-center w-full px-8 py-6 order-2 lg:order-2 bg-brand-light">
                    <h3 class="text-lg lg:text-2xl text-brand-dark font-title uppercase lg:leading-snug"><?php the_sub_field( 'name' ); ?></h3>
                        
                    <div class="w-full flex flex-row items-center justify-center mt-1 lg:mt-3">
                        <p class="text-xs text-brand-clay uppercase p-1 mr-2"><?php the_sub_field( 'position' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
    </div>
    <?php else : ?>
        <?php // Don't add team members comp ?>
    <?php endif; ?>
</div>


