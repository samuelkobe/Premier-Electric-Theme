<section class="flex flex-row items-center justify-center bg-brand-dark relative" id="cta">
<?php $image_url = get_field( 'call_to_action_background_image', 'option' ); ?>

    <div class="w-full h-full absolute top-0 left-0 opacity-10 bg-cover bg-center" style="background-image: url('<?php echo esc_url( $image_url['url'] ); ?>');"></div>
    <div class="w-full h-64 lg:h-108 contained items-center justify-center z-10">
        <h3 class="text-brand-light text-xl sm:text-2xl lg:text-5xl leading-7 uppercase text-center font-title mt-8 lg:mt-12"><?php the_field( 'call_to_action_title', 'option' ); ?></h3>
        <div class="flex flex-row relative">
            <?php $call_to_action_button_link = get_field( 'call_to_action_button_link', 'option' ); ?>
            <?php if ( $call_to_action_button_link ) : ?>
                <a class="button transparent bordered xs:small sm:small md:small" href="<?php echo esc_url( $call_to_action_button_link); ?>"><?php the_field( 'call_to_action_button_text', 'option' ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>