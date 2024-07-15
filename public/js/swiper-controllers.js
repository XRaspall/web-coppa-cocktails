// CARRULES 4 y 1
var swiper = new Swiper('.swiper-container-fourone', {
    slidesPerView: 4,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
        hide: false,
    },
    breakpoints: {
        1399: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 3,
        },
        1000: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        580: {
            slidesPerView: 2,
        },
        480: {
            slidesPerView: 1,
        },
        100: {
            slidesPerView: 1,
        }
    }
});

// CARROUSEL DE LAS BOTELLAS

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container-cocktails', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            380: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            500: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });
});

