{{-- PC --}}

<section class="d-none d-xxl-block">
    <div class="section-slideCocktails">
        <div class="swiper-container swiper-container-slideCocktail animate-on-scroll" data-animation="animate__fadeInUp">
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
                                        <a class="" href="{{ url('/cocktails/' . strtolower(str_replace(' ', '-', $cocktSlide->name))) }}"><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">{{ __('home.slideCocktail.btn') }}</button></a>
                                    </div>
                                    <img src="{{ asset($cocktSlide->imgSlideCocktail) }}" alt="{{$cocktSlide->name}}">
                                </div>
                            </div>
                            <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                                <img class="filter-brightness-slideCocktail" src="{{ asset(($key + 1 < count($cocktails)) ? $cocktails[$key+1]->imgSlideCocktail : $cocktails[0]->imgSlideCocktail) }}" alt="cocktail">
                            </div>
                            <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                                <img class="filter-brightness-slideCocktail"
                                     src="{{ asset(
        ($key + 2 == count($cocktails) + 1)
            ? $cocktails[1]->imgSlideCocktail
            : (($key + 2 < count($cocktails))
                ? $cocktails[$key+2]->imgSlideCocktail
                : $cocktails[0]->imgSlideCocktail)
     ) }}"
                                     alt="cocktail">

                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-cocktail-pc swiper-button-prev-slideCocktail"></div>
                        <div class="swiper-button-next swiper-button-next-cocktail-pc swiper-button-next-slideCocktail"></div>
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

                    @foreach($cocktails as $key => $cocktSlide)

                        <div class="swiper-slide swiper-slide-phone">
                            <div class="row bg-phone-section-slideCocktail">
                                <div class="col-12 col-md-8">
                                    <div class="div-content-info-slideCocktail align-content-center p-4">
                                        <small class="ff-Montserrat">{{ $cocktSlide['category_' . app()->getLocale()] }}</small>
                                        <div class="background-text ff-BarlowCondensedSemiBold">
                                            {{$cocktSlide->name}}
                                        </div>
                                        <h3 class="ff-BarlowCondensedSemiBold py-5">{{ $cocktSlide->name }}</h3>
                                        <div class="ff-Montserrat">
                                            {!! __($cocktSlide['textSlideCocktail_' . app()->getLocale()]) !!}
                                        </div>
                                        <a class="" href="{{ url('/cocktails/' . strtolower(str_replace(' ', '-', $cocktSlide->name))) }}"><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">{{ __('home.slideCocktail.btn') }}</button></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">

                                    <img class="" src="{{ asset($cocktSlide->imgSlideCocktail) }}" alt="{{$cocktSlide->name}}">
                                    <div class="d-flex">
                                        <div class="swiper-button-prev swiper-button-prev-cocktail-phone swiper-button-prev-slideCocktail-phone"></div>
                                        <div class="swiper-button-next swiper-button-next-cocktail-phone swiper-button-next-slideCocktail-phone"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</section>
