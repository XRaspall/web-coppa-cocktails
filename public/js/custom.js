$(document).ready(function() {
    var timeout;

    $('.swiper-slide-cocktails').mouseenter(function() {
        var $thisSlide = $(this);
        var $imgs = $thisSlide.find('.appear1-carrusel, .appear2-carrusel, .appear3-carrusel, .appear4-carrusel');

        console.log($thisSlide);
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
            console.log($elements[index]);

            $($elements[index]).removeClass('d-none').fadeIn(50, function() {
                timeout = setTimeout(function() {
                    showSequentially($slide, $elements, index + 1);
                }, 50);
            });
        }
    }
});
