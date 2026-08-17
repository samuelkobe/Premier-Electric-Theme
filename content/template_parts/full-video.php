<section class="bg-brand-dim">
    <div class="flex items-center w-full min-h-25vh md:min-h-50vh xl:h-75vh relative">

        <div class="bg-brand-dark opacity-75 absolute top-0 left-0 w-full h-25vh md:h-50vh xl:h-full pointer-events-none z-10"></div>

        <?php if ( get_field( 'full_video' ) ) : ?>
            <?php 
            $video = get_field( 'full_video' );
            $video_element = '<video
                                class="absolute top-0 left-0 w-full h-25vh md:h-50vh xl:h-full object-cover"
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

    </div>
</section>