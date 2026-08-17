<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KNNGR93');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo('charset'); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta property="og:title" content="<?php the_field( 'open_graph_title', 'option' ); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php if ( get_field( 'open_graph_image', 'option' ) ) { the_field( 'open_graph_image', 'option' ); } ?>" />
		<meta property="og:url" content="<?php the_field( 'open_graph_url', 'option' ); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />

		<meta name="google-site-verification" content="f8GkZmERHfnSyVbnx_smYzG50KeIMB4HNYQjqUOlkVU" />

		<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		<?php wp_head(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198010629-1">
		</script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-198010629-1');
		</script>
		
<script type="text/javascript">
  (function() {
    window.sib = { equeue: [], client_key: "9d6el5uzffcjpwtxlig9dsfe" };
    /* OPTIONAL: email to identify request*/
    // window.sib.email_id = 'example@domain.com';
    /* OPTIONAL: to hide the chat on your script uncomment this line (0 = chat hidden; 1 = display chat) */
    // window.sib.display_chat = 0;
    // window.sib.display_logo = 0;
    /* OPTIONAL: to overwrite the default welcome message uncomment this line*/
    // window.sib.custom_welcome_message = 'Hello, how can we help you?';
    /* OPTIONAL: to overwrite the default offline message uncomment this line*/
    // window.sib.custom_offline_message = 'We are currently offline. In order to answer you, please indicate your email in your messages.';
    window.sendinblue = {}; for (var j = ['track', 'identify', 'trackLink', 'page'], i = 0; i < j.length; i++) { (function(k) { window.sendinblue[k] = function(){ var arg = Array.prototype.slice.call(arguments); (window.sib[k] || function() { var t = {}; t[k] = arg; window.sib.equeue.push(t);})(arg[0], arg[1], arg[2]);};})(j[i]);}var n = document.createElement("script"),i = document.getElementsByTagName("script")[0]; n.type = "text/javascript", n.id = "sendinblue-js", n.async = !0, n.src = "https://sibautomation.com/sa.js?key=" + window.sib.client_key, i.parentNode.insertBefore(n, i), window.sendinblue.page();
  })();
</script>
		
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNNGR93"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<?php if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		} ?>

		<!-- wrapper -->
		<div class="wrapper">

			<header id="header" class="flex flex-row w-full h-auto bg-transparent fixed top-0 z-50 header-onload" role="banner">

				<div class="contained w-full justify-around">
					<div class="flex flex-row items-center w-full h-32 2xl:h-48 justify-between relative">

						<div class="flex flex-row items-center w-24 lg:w-auto py-4 order-1 z-20">
							<?php if (has_custom_logo()) : ?>
								<div class="flex flex-row lg:mr-4 w-24 2xl:w-36"><?php the_custom_logo(); ?></div>
								<div class="hidden lg:inline text-lg xl:text-2xl font-title text-brand-light uppercase"><?php bloginfo('title');?></div>			
							<?php else : ?>
								<p class="text-base"><?php bloginfo('title');?></p>
								<p class="text-xs"><?php bloginfo('description');?></p>
							<?php endif; ?>
						</div>

						<div class="visible lg:invisible block lg:hidden order-2 lg:order-3 w-8 h-4 lg:w-0 justify-center items-center z-20">
							<!-- button -->
							<button id="menu-button" class="hamburger w-8 flex flex-col focus:outline-none" type="button" name="navigation button" aria-label="navigation button">
								<span class="w-8 h-1 bg-brand-bright inline-block mb-2 transition-transform ease-out duration-200 origin-custom"></span>
								<span class="w-8 h-1 bg-brand-bright inline-block transition-transform ease-out duration-200 origin-custom"></span>
							</button>
							<!-- /button -->
						</div>

						<div id="menu" class="fixed lg:relative top-0 right-0 order-3 lg:order-2 w-full lg:w-auto lg:h-auto lg:min-h-0 z-10 lg:z-20 flex flex-col lg:flex-row lg:justify-end shadow-lg lg:shadow-none">
							<nav class="flex flex-row items-center justify-end uppercase text-brand-light" role="navigation">
								<?php webokstarter_nav(); ?>
							</nav>
							<div class="w-auto flex flex-row justify-start lg:justify-end">
								<div class="flex flex-row items-center relative w-auto mt-4 lg:mt-0">
									<a class="button dark small lg:ml-6 xl:ml-12" href="tel:6048166663" aria="Call us today!" title="Call us today!">604.816.6663</a>
								</div>
							</div>
							<div class="w-auto flex flex-row justify-start lg:justify-end">
								<div class="flex flex-row items-center relative w-auto">
									<a class="button dark small lg:ml-4" href="/contact#quote" aria="Get a quote today" title="Get a quote today">Get a quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</header>
