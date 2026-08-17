<section>
    <div class="contained">
        <div class="w-full flex flex-row items-center justify-center h-16 lg:h-20 border-b-2 border-brand-grey">
            <div class="h-16 lg:h-20 flex flex-row items-center justify-center text-xs lg:text-sm">
                <a id="history-anchor" class="flex items-center h-full border-b-4 border-transparent hover:border-brand-default text-brand-clay hover:text-brand-dark uppercase mx-2 lg:mx-4 pt-2 transition-colors duration-300" href="#history">Our History</a>
                <a id="approach-anchor" class="flex items-center h-full border-b-4 border-transparent hover:border-brand-default text-brand-clay hover:text-brand-dark uppercase mx-2 lg:mx-4 pt-2 transition-colors duration-300" href="#approach">Our Approach</a>
                <a id="people-anchor" class="flex items-center h-full border-b-4 border-transparent hover:border-brand-default text-brand-clay hover:text-brand-dark uppercase mx-2 lg:mx-4 pt-2 transition-colors duration-300" href="#people">Our People</a>
                <?php if ( have_rows( 'testimonials' ) ) : ?>
                    <a id="testimonials-anchor" class="flex items-center h-full border-b-4 border-transparent hover:border-brand-default text-brand-clay hover:text-brand-dark uppercase mx-2 lg:mx-4 pt-2 transition-colors duration-300" href="#people">Our Clients</a>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>        
    </div>
</section>
