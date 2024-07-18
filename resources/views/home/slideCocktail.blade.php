<style>
    .section-slideCocktails {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 90vh;
        overflow: hidden;
    }

    .section-slideCocktails .swiper-container {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    .section-slideCocktails .swiper-wrapper {
        display: flex;
        height: 100%;
    }

    .section-slideCocktails .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .row-container-swiper-slideCocktail{
        height: 90vh;
    }

    .filter-brightness-slideCocktail{
        filter: brightness(0.5);
        user-select: none;
    }

    .bg-div-secondary-slideCocktail-img{
        background-color: #0000007d;
    }
    .bg-div-secondary-slideCocktail-img img{
         width: 100%;
         height: 100%;
         object-fit: cover;
     }

    .section-slideCocktails h3{
        color: #392A27;
        font-size: 60px;
        font-style: normal;
        font-weight: 600;
        letter-spacing: -1.25px;
        line-height: 68px;
        transform: translateY(10px);
    }

    .section-slideCocktails p{
         font-size: 16px;
         font-style: normal;
         font-weight: 400;
         line-height: 32px;
         color: #392A27;
    }

    .section-slideCocktails small{
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        letter-spacing: 1.71429px;
        line-height: 15px;
        color: #392A27;
        margin-top: 4.375rem;
        text-transform: uppercase;
    }

    .section-slideCocktails .div-content-info-slideCocktail{
        padding: 1rem 9rem ;
    }

    .section-slideCocktails .bg-div-primary-slideCocktail-img{
         background-color: #F6F4EF;
     }

    .section-slideCocktails .bg-div-primary-slideCocktail-img img{
        z-index: 99;

    }

    .section-slideCocktails .background-text{
        color: #392A27;
        font-size: 160px;
        font-style: normal;
        font-weight: 600;
        letter-spacing: -4px;
        line-height: 192px;
        opacity: .1;
        position: absolute;
        text-transform: uppercase;
        top: 140px;
        left: 89px;
        white-space: nowrap;
    }

    .swiper-button-prev-slideCocktail{
        top: 80px;
        right: 30%;
        left: unset;
        background: #F6F4EF;
        width: 63px;
        height: 121px;
        color: #000000;
    }

    .swiper-button-next-slideCocktail{
        top: 200px;
        right: 30%;
        left: unset;
        background: #F6F4EF;
        width: 63px;
        height: 121px;
        color: #000000;
    }

    .swiper-button-next-slideCocktail:after, .swiper-button-prev-slideCocktail:after{
        font-size: 23px;
        font-weight: 500;
    }

</style>

{{-- PC --}}

<section class="d-none d-xxl-block">
    <div class="section-slideCocktails">
        <div class="swiper-container swiper-container-slideCocktail">
            <div class="swiper-wrapper height-slideImage-carrusel">

                @foreach($cocktails as $key => $cocktSlide)

                    <div class="swiper-slide p-0 bg-transparent">
                        <div class="row w-100 row-container-swiper-slideCocktail">
                            <div class="col-8 p-0">
                                <div class="bg-div-primary-slideCocktail-img d-flex h-100">
                                    <div class="div-content-info-slideCocktail align-content-center">
                                        <small class="ff-Montserrat">{{ $cocktSlide['category_' . app()->getLocale()] }}</small>
                                        <div class="background-text ff-BarlowCondensedSemiBold">
                                            {{$cocktSlide->name}}
                                        </div>
                                        <h3 class="ff-BarlowCondensedSemiBold py-5">{{ $cocktSlide->name }}</h3>
                                        <div class="ff-Montserrat">
                                            {!! __($cocktSlide['textSlideCocktail_' . app()->getLocale()]) !!}
                                        </div>
                                        <a class="" href="{{ url('/cocktails/' . strtolower(str_replace(' ', '-', $cocktSlide->name))) }}"><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">EXPLORE FLAVOR</button></a>
                                    </div>
                                    <img src="{{ asset($cocktSlide->imgSlideCocktail) }}" alt="{{$cocktSlide->name}}">
                                </div>
                            </div>
                            <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                                <img class="filter-brightness-slideCocktail" src="{{ asset(($key + 1 < count($cocktails)) ? $cocktails[$key+1]->imgSlideCocktail : $cocktails[0]->imgSlideCocktail) }}" alt="cocktail">
                            </div>
                            <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                                <img class="filter-brightness-slideCocktail" src="{{ asset(($key + 1 && $key + 2  < count($cocktails)) ? $cocktails[$key+2]->imgSlideCocktail : $cocktails[1]->imgSlideCocktail) }}" alt="cocktail">
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-slideCocktail"></div>
                        <div class="swiper-button-next swiper-button-next-slideCocktail"></div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
</section>


{{-- LAPTOP AND PHONE --}}
<section class="d-xxl-none">
    <div class="section-slideCocktails-phone">
        <div class="swiper-container swiper-container-slideCocktail-phone">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <!-- Agrega más slides según sea necesario -->
            </div>
        </div>

    </div>
</section>

<script>
    var swiper = new Swiper('.swiper-container-slideCocktail', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        allowTouchMove: false,
        grabCursor: false,
    });

    var swiper2 = new Swiper('.swiper-container-slideCocktail-phone', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
