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
        nextEl: '.swiper-button-next-fourone',
        prevEl: '.swiper-button-prev-fourone',
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

const swiper2 = new Swiper('.swiper-container-contact', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next-contact',
        prevEl: '.swiper-button-prev-contact',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
    },
});


// CARROUSEL DE LAS BOTELLAS

var swiper3 = new Swiper('.swiper-container-cocktails', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next-cocktails',
            prevEl: '.swiper-button-prev-cocktails',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            430: {
                slidesPerView: 1,
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

// SLIDER DE COCKTAILS DE LA HOME
var swiperSlideCocktail = new Swiper('.swiper-container-slideCocktail', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    navigation: {
        nextEl: '.swiper-button-next-cocktail-pc',
        prevEl: '.swiper-button-prev-cocktail-pc',
    },
    allowTouchMove: false
});

var swiperSlideCocktailPhone = new Swiper('.swiper-container-slideCocktail-phone', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: false,
    navigation: {
        nextEl: '.swiper-button-next-cocktail-phone',
        prevEl: '.swiper-button-prev-cocktail-phone',
    },
    allowTouchMove: false

});
