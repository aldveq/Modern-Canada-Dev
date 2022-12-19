import Swiper from 'swiper/bundle';

const TextHeroCTASlider = () => {
    if (document.querySelector('.text-hero-cta-slider-container')) {

        new Swiper('.text-hero-cta-slider-container', {
            autoplay: {
                delay: 7500,
                disableOnInteraction: false,
            },
            pagination: {
              el: '.text-hero-cta-slider-pagination',
            },
        });

    }
}

export default TextHeroCTASlider;