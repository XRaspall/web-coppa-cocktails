<section class="cocktails-slide">

    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="color-coppa-primary ff-BarlowCondensedSemiBold">Check Out Our Other Cocktails</h2>
        </div>

        <div class="section-slideImage">
            <div class="swiper-container d-flex align-items-center">
                <div class="swiper-button-prev position-relative mt-4 swiper-pagination-brown-line"></div>

                <div class="swiper-wrapper height-slideImage-carrusel">
                    <div class="swiper-slide p-0 bg-transparent text-center">
                        <img class="" src="{{ asset('img/cocktails/mojito.webp') }}" alt="Mojito">
                        <h3 class="color-coppa-primary ff-PragatiNarrowRegular">Mojito</h3>
                    </div>
                    <div class="swiper-slide p-0 bg-transparent text-center">
                        <img class="" src="{{ asset('img/cocktails/piñacolada.webp') }}" alt="Mojito">
                        <h3 class="color-coppa-primary ff-PragatiNarrowRegular">Piña Colada</h3>
                    </div>
                    <div class="swiper-slide p-0 bg-transparent text-center">
                        <img class="" src="{{ asset('img/cocktails/strawberrydakiri.webp') }}" alt="Mojito">
                        <h3 class="color-coppa-primary ff-PragatiNarrowRegular">Strawberry Daiquiri</h3>
                    </div>
                    <div class="swiper-slide p-0 bg-transparent text-center">
                        <img class="" src="{{ asset('img/cocktails/sexonthebeach.webp') }}" alt="Mojito">
                        <h3 class="color-coppa-primary ff-PragatiNarrowRegular">Sex On The Beach</h3>
                    </div>
{{--                    <div class="swiper-slide p-0 bg-transparent text-center">--}}
{{--                        <img class="" src="{{ asset('img/cocktails/maitai.webp') }}" alt="Mojito">--}}
{{--                        <h3 class="color-coppa-primary ff-PragatiNarrowRegular">Mai Tai</h3>--}}
{{--                    </div>--}}
                </div>
                <div class="swiper-button-next position-relative mt-4 swiper-pagination-brown-line"></div>

            </div>
            <div class="d-flex justify-content-between div-slideImages-controllers align-items-center">
                <div class="swiper-pagination position-relative mt-4 swiper-pagination-brown-line"></div>

            </div>
        </div>
    </div>

</section>


<script>
    var swiper = new Swiper('.swiper-container', {
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

</script>

