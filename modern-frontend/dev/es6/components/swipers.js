import Swiper from 'swiper/bundle';

const swiperServiceCleaning = () => {

    if (document.querySelector('.gallery-services-thumb') && document.querySelector('.gallery-services-top')) {
         const galleryThumbs = new Swiper('.gallery-services-thumb', {
            slidesPerView:6,
            spaceBetween: 0,
            loop: false,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });


        new Swiper('.gallery-services-top', {
            spaceBetween: 25,
            thumbs: {
                swiper: galleryThumbs
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

}

export default swiperServiceCleaning;