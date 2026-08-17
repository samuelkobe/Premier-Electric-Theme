<?php get_header(); ?>

<main role="main">
    <section>
        <div class="flex flex-col items-center justify-center w-full h-80 lg:h-128 bg-brand-dim text-brand-light overflow-hidden z-0">
            <h1 class="text-2xl lg:text-6xl text-brand-bright font-title uppercase lg:leading-snug"><?php the_title(); ?></h1>
        </div>
        <div class="contained z-10 -mt-20 lg:-mt-28 mb-8 sm:mb-16 lg:mb-24">
            <picture>
                <source srcset="<?php the_post_thumbnail_url('services-large'); ?>" width="1400px" media="(min-width: 1920px)">
                <source srcset="<?php the_post_thumbnail_url('tablet'); ?>" width="1280px" media="(min-width: 1280px)">
                <source srcset="<?php the_post_thumbnail_url('mobile'); ?>" width="768px" media="(min-width: 768px)">
                <img class="w-full h-80 md:h-108 lg:h-128 2xl:h-192 object-cover" src="<?php the_post_thumbnail_url('services'); ?>" width="464px" alt="<?php the_title(); ?> project hero image" />
            </picture>
        </div>
    </section>
    <section>
        <div class="contained">
            <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-8 lg:mb-16 details">
                <?php if ( have_rows( 'project_details' ) ) : ?>
                    <?php while ( have_rows( 'project_details' ) ) : the_row(); ?>
                    <div class="w-full flex flex-col lg:flex-row items-center border-t-2 border-b-2 border-brand-grey py-2 lg:py-6">
                        <p class="text-brand-clay text-base lg:text-lg w-full lg:w-1/4"><?php the_sub_field( 'detail_title' ); ?></p>
                        <p class="text-brand-dark text-base lg:text-lg w-full lg:w-3/4"><?php the_sub_field( 'detail_information' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="contained">
            <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-8 lg:mb-32">
                <p class="text-brand-dark text-base lg:text-lg mb-6"><?php the_field( 'project_snapshot' ); ?></p>
                <div class="text-brand-clay text-sm lg:text-base paragraphs"><?php the_field( 'about_project' ); ?></div>
            </div>
        </div>
    </section>
    <section>
        <?php if ( have_rows( 'project_content' ) ): ?>
            <?php while ( have_rows( 'project_content' ) ) : the_row(); ?>
                <?php if ( get_row_layout() == 'gallery' ) : ?>
                    <div class="w-full relative">
                        <div id="post-type-gallery" class="swiper-container swiper-post-type mb-12 lg:mb-32">
                            <?php $gallery_images = get_sub_field( 'gallery' ); ?>
                            <?php if ( $gallery_images ) :  ?>
                                <div class="swiper-wrapper">
                                    <?php foreach ( $gallery_images as $gallery_image ): ?>
                                        <div class="swiper-slide h-64 md:h-96 lg:h-108 2xl:h-112 overflow-hidden">
                                            <picture>
                                                <source srcset="<?php echo esc_url( $gallery_image['sizes']['tablet'] ); ?>" width="1280px" media="(min-width: 1920px)">
                                                <source srcset="<?php echo esc_url( $gallery_image['sizes']['tablet'] ); ?>" width="1280px" media="(min-width: 1280px)">
                                                <source srcset="<?php echo esc_url( $gallery_image['sizes']['mobile'] ); ?>" width="768px" media="(min-width: 768px)">
                                                <img class="w-full h-full object-cover" src="<?php echo esc_url( $gallery_image['sizes']['services'] ); ?>" width="464px" alt="Jobsite image from the project <?php the_title(); ?>." />
                                            </picture>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="hidden sm:flex custom-swiper-navigation w-full h-full items-center justify-center absolute top-0 2xl:-top-4">
                            <div class="swiper-button-prev flex items-center justify-center w-12 h-12 2xl:w-24 2xl:h-24 text-brand-light bg-brand-default rounded-full ml-6 2xl:ml-32"></div>
                            <div class="swiper-button-next flex items-center justify-center w-12 h-12 2xl:w-24 2xl:h-24 text-brand-light bg-brand-default rounded-full mr-6 2xl:mr-32"></div>
                        </div>
                    </div>
                <?php elseif ( get_row_layout() == 'additional_information' ) : ?>
                    <div class="contained">
                        <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-6 lg:mb-16">
                            <div class="text-brand-clay text-sm lg:text-base paragraphs"><?php the_sub_field( 'content' ); ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else: ?>
            <?php // no layouts found ?>
        <?php endif; ?>
    </section>

    <section>
        <div class="contained items-center justify-center mb-12 lg:mb-24">
            <a class="button transparent bordered alt" href="/projects">Back to Projects</a>
        </div>
    </section>    

    <?php get_template_part('content/content-cta'); ?>

</main>

<?php get_footer(); ?>

