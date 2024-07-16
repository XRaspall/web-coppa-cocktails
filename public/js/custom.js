$(document).ready(function() {

    function initializeSwiperEffects() {
        var timeout;

        $('.swiper-slide-cocktails').mouseenter(function() {
            var $thisSlide = $(this);
            var $imgs = $thisSlide.find('.appear1-carrusel, .appear2-carrusel, .appear3-carrusel, .appear4-carrusel');

            $imgs.addClass('d-none');

            showSequentially($thisSlide, $imgs, 0);
        });

        $('.swiper-slide-cocktails').mouseleave(function() {
            clearTimeout(timeout);
            var $imgs = $(this).find('.appear1-carrusel, .appear2-carrusel, .appear3-carrusel, .appear4-carrusel');
            $imgs.addClass('d-none');
        });

        function showSequentially($slide, $elements, index) {
            if (index < $elements.length) {
                $($elements[index]).removeClass('d-none').fadeIn(50, function() {
                    timeout = setTimeout(function() {
                        showSequentially($slide, $elements, index + 1);
                    }, 50);
                });
            }
        }
    }

    if ($(window).width() > 575) {
        initializeSwiperEffects();
    }

    $(window).resize(function() {
        if ($(window).width() > 575) {
            initializeSwiperEffects();
        }
    });
});
