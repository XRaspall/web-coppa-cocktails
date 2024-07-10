
    <style>
        .section-slideImage {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
            padding: 20px 0;
            box-sizing: border-box;
        }
        .swiper-wrapper {
            display: flex;
        }
        .swiper-slide {
            width: auto;
            flex: 0 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            background: #fff;
            padding: 20px;
            margin: 0 10px;
        }
        .swiper-slide img {
            width: calc(50% - 10px);
            margin: 5px;
            height: auto;
            object-fit: cover;
        }
        .swiper-slide img.full-width {
            width: 100%;
            margin: 5px 0;
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
        }
    </style>

<!-- Swiper -->
    <section class="section-slideImage">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 1">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 2">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 3">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 4">
                </div>
                <div class="swiper-slide">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 5">
                </div>
                <div class="swiper-slide">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 6">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 7">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 8">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 9">
                </div>
                <div class="swiper-slide">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 10">
                </div>
                <div class="swiper-slide">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 1">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 2">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 3">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 4">
                </div>
                <div class="swiper-slide">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 5">
                </div>
                <div class="swiper-slide">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 6">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 7">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 8">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 9">
                </div>
                <div class="swiper-slide">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 10">
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>


<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: false,
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
    });
</script>
