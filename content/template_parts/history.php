<section>
    <div class="contained">
        <div class="w-full flex items-center justify-center">
            <h2 class="text-xs lg:text-sm text-brand-clay uppercase mb-4 lg:mb-8"><?php the_field( 'history_title' ); ?></h2>
        </div>
        <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-8 lg:mb-32">
            <p class="text-brand-dark text-base lg:text-lg mb-6"><?php the_field( 'history_snapshot' ); ?></p>
            <div class="text-brand-clay text-sm lg:text-base paragraphs"><?php the_field( 'history_content' ); ?></div>
        </div>
    </div>
</section>