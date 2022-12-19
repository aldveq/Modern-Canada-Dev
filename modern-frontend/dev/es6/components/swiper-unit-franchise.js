import Swiper from 'swiper/bundle';

const swiperUnitFranchiseRigth = () => {

    if (document.querySelector('.swiper-unit-franchise-right')) {
        new Swiper('.swiper-unit-franchise-right', {
            spaceBetween: 30,
            autoHeight: true,
            pagination: {
                el: '.swiper-unit-franchise-pagination',
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-unit-franchise-next',
                prevEl: '.swiper-unit-franchise-prev',
            },
        });
    }

}

export default swiperUnitFranchiseRigth;