		<?php if ( have_rows( 'footer_settings', 'option' ) ) : ?>
			<?php while ( have_rows( 'footer_settings', 'option' ) ) : the_row(); ?>
				<!-- footer -->
				<footer class="bg-brand-dark text-brand-bright" role="contentinfo">

					<div class="contained mx-auto">

						<div class="flex flex-row flex-wrap items-center justify-between py-16 lg:py-32">

							<div class="flex justify-center md:justify-start w-full md:w-1/5 lg:w-1/4 px-8 sm:px-4 lg:px-0">
								<a href="<?php echo home_url(); ?>" class="flex items-start">
									<?php if ( get_sub_field( 'footer_logo', 'option' ) ) : ?>
										<img src="<?php the_sub_field( 'footer_logo' ); ?>" width="144px" height="144px" alt="<?php bloginfo('name'); ?>" class="h-36" />
									<?php endif ?>
								</a>
							</div>

							<div class="hidden md:visible md:flex flex-col md:flex-row justify-center md:justify-start w-full md:w-2/5 lg:w-1/4 text-base md:text-lg text-brand-bright">
								<div class="flex flex-col items-center md:items-start w-full md:w-40 md:border-brand-dim md:border-l-2 md:pl-6">
									<?php footer_nav_left(); ?>
								</div>
								<div class="flex flex-col items-center md:items-start w-full md:w-40 md:border-brand-dim md:border-l-2 md:pl-6">
									<?php footer_nav_right(); ?>
								</div>
							</div>

							<div class="flex flex-col w-full md:w-2/5 lg:w-1/2 text-brand-bright px-8 sm:px-4 lg:px-0 mt-8 md:mt-0">
								<div class="flex justify-center md:justify-end">
									<?php $call_to_action_button_link = get_sub_field( 'call_to_action_button_link' ); ?>
									<?php if ( $call_to_action_button_link ) : ?>
										<a class="button small transparent bordered" href="<?php echo esc_url( $call_to_action_button_link); ?>"><?php the_sub_field( 'call_to_action_button_text' ); ?></a>
									<?php endif; ?>
								</div>
							</div>

						</div>
					</div>


					<!-- copyright -->
					<div class="flex flex-col md:flex-row items-start md:items-center justify-start md:justify-between w-full bg-brand-dim text-sm text-brand-bright p-7">
						<p class="py-2 text-lg md:text-base">&copy; <?php echo date('Y'); ?> Premier Electric</p>
						<p class="py-2"> All Rights Reserved. <?php if ( get_field( 'copyright_text', 'option' ) ) { the_field( 'copyright_text', 'option' ); } ?> 
						<?php _e('Powered by', 'web-ok-starter'); ?> <a href="https://webok.ca" target="_blank" class="text-xs hover:text-brand-default transition-colors duration-200">Web Ok Solutions Inc.</a>
						</p>
						<span class="text-lg md:text-base flex flex-row text-brand-bright items-center justify-start md:justify-between w-full md:w-32 py-2">
							<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/privacy">Privacy</a>
							<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/terms">Terms</a>
						</span>
					</div>
					<!-- /copyright -->

				</footer>
				<!-- /footer -->

			<?php endwhile; ?>
		<?php endif; ?>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
