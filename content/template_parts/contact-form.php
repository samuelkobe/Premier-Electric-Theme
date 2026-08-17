<section id="quote">
    <div class="w-full min-h-50vh bg-brand-bright">
        <div class="contained items-center lg:px-48 mt-12 lg:mt-32">
            <div class="w-full flex items-center justify-center">
                <div class="flex flex-col items-center justify-center mb-4 lg:mb-8">
                    <h2 class="text-brand-dark text-xl lg:text-2xl font-title uppercase">Get in touch</h2>
                    <a class="button dark mt-8" href="tel:<?php echo get_field( 'phone_number' ); ?>" title="Call Premier Electric"><?php echo get_field( 'phone_number_text' ); ?></a>
                </div>
            </div>
            <div class="w-full mb-12 lg:mb-32">
                <?php echo get_field( 'contact_form_embed' ); ?>
            </div>
        </div>
    </div>
</section>