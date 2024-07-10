<section>

    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img height="500" class="d-block mx-auto" src="{{asset('img/cocktails/piñacolada.webp')}}"></div>
            <div class="swiper-slide"><img height="500" class="d-block mx-auto" src="{{asset('img/cocktails/mojito.webp')}}"></div>
            <div class="swiper-slide"><img height="500" class="d-block mx-auto" src="{{asset('img/cocktails/margarita.webp')}}"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</section>

<script>
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 1, // Mostrar 1 imagen por slide en móvil
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
            768: {
                slidesPerView: 2, // Mostrar 2 imágenes por slide en tablet
            }
        }
    });
</script>
