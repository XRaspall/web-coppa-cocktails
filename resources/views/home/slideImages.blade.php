
<style>
    .section-slideImage {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }
    .section-slideImage .swiper-container {
        width: 100%;
        height: 100%;
        padding: 20px 0;
        box-sizing: border-box;
    }
    .section-slideImage  .swiper-wrapper {
        display: flex;
    }
    .section-slideImage .swiper-slide {
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
    .section-slideImage .swiper-slide img {
        width: calc(50% - 10px);
        margin: 5px;
        height: auto;
        object-fit: cover;
    }
    .section-slideImage .swiper-slide img.full-width {
        width: 100%;
        margin: 5px 0;
    }
    .section-slideImage .swiper-button-next,
    .section-slideImage .swiper-button-prev {
        color: #000;
    }
</style>

<!-- Swiper -->
<section class="container p-0">
    <div class="section-slideImage">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide p-0">
                    <img class="" src="{{ asset('img/home/carrusel/Tequila_ Sunrise_Coppa_Cocktails_8.webp') }}" alt="Image 1">
                    <img class="" src="{{ asset('img/home/carrusel/Strawberry_Daiquiri_Coppa_Cocktails_8.webp') }}" alt="Image 2">
                    <img class="" src="{{ asset('img/home/carrusel/Mai Tai_Coppa_Cocktails_4.webp') }}" alt="Image 3">
                    <img class="" src="{{ asset('img/home/carrusel/SOTB_Coppa_Cocktails_14.webp') }}" alt="Image 4">
                </div>
                <div class="swiper-slide p-0">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Negroni_Coppa_Cocktails_9.webp') }}" alt="Image 5">
                </div>
                <div class="swiper-slide p-0">
                    <img class="" src="{{ asset('img/home/carrusel/Mojito_Coppa_Cocktails_5.webp') }}" alt="Image 6">
                    <img class="" src="{{ asset('img/home/carrusel/Strawberry_Daiquiri_Coppa_Cocktails_11.webp') }}" alt="Image 7">
                    <img class="" src="{{ asset('img/home/carrusel/Mai Tai_Coppa_Cocktails_3.webp') }}" alt="Image 8">
                    <img class="" src="{{ asset('img/home/carrusel/Espresso Martini_Coppa_Cocktails_6.webp') }}" alt="Image 9">
                </div>
                <div class="swiper-slide p-0">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Pina Colada_Coppa_Cocktails_5.webp') }}" alt="Image 10">
                </div>
                <div class="swiper-slide p-0">
                    <img class="" src="{{ asset('img/home/carrusel/Tequila_ Sunrise_Coppa_Cocktails_3.webp') }}" alt="Image 1">
                    <img class="" src="{{ asset('img/home/carrusel/Whiskey Sour_Coppa_Cocktails_2.webp') }}" alt="Image 2">
                    <img class="" src="{{ asset('img/home/carrusel/Mojito_Coppa_Cocktails_3.webp') }}" alt="Image 3">
                    <img class="" src="{{ asset('img/home/carrusel/Tequila_ Sunrise_Coppa_Cocktails_6.webp') }}" alt="Image 4">
                </div>
                <div class="swiper-slide p-0">
                    <img class="full-width" src="{{ asset('img/home/carrusel/Pina Colada_Coppa_Cocktails_15.webp') }}" alt="Image 5">
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>

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
