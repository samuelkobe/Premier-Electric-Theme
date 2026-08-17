//HERO SWIPER Initialized
if (document.getElementById("home-hero-gallery")) {
    const heroSwiper = new Swiper('.swiper-hero', {
        slidesPerView: 1,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });
}

//ABOUT TESTIMONIALS SWIPER Initialized
if (document.getElementById("testimonials-anchor")) {
    const testimonialSwiper = new Swiper('.swiper-testimonial', {
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

}

//SERVICE SWIPER Initialized
if (document.getElementById("post-type-gallery")) {
    const flatdeckSwiper = new Swiper('.swiper-post-type', {
        slidesPerView: 1.25,
        spaceBetween: 16,
        centeredSlides: true,
        centeredSlidesBounds: false,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
                spaceBetween: 32,
            },
            1280: {
                slidesPerView: 2.5,
                spaceBetween: 32,
            },
            1536: {
                slidesPerView: 2.5,
                spaceBetween: 64,
            }
        },
    });
}
