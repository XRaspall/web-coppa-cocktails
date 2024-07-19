<section id="ourCulture" class="py-5">
    <div class="container-fluid w-100 my-5">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center animate-on-scroll pb-4 pb-md-0" data-animation="animate__fadeInUp">
                <div class="w-585px-custom">
                    <div class="text-end">
                        <img alt="" src="{{ asset('img/aboutus/ourculture/butterfly.webp') }}">
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="mt-4">
                            <h2 class="color-coppa-primary ff-BarlowCondensedSemiBold mb-4">{{ __('aboutus.ourculture.title') }}</h2>
                            <p class="ff-Montserrat color-coppa-primary">{{ __('aboutus.ourculture.text') }}</p>
                            <a href="{{ route('contactPage') }}"><button class="message-button ff-Montserrat text-uppercase mt-4">{{ __('aboutus.ourculture.btn') }}</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 px-0 position-relative animate-on-scroll" data-animation="animate__fadeInRight">
                <div class="swiper-container swiper-container-ourCulture" id="carouselOurCulture" style="max-width: 100%;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/aboutus/ourculture/image1.webp') }}" class="d-block w-100" alt="Imagen 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/aboutus/ourculture/image2.webp') }}" class="d-block w-100" alt="Imagen 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/aboutus/ourculture/image3.webp') }}" class="d-block w-100" alt="Imagen 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/aboutus/ourculture/image4.webp') }}" class="d-block w-100" alt="Imagen 4">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-5">
                    <div class="swiper-button-prev swiper-button-prev-OurCulture position-relative me-5"></div>
                    <div class="swiper-button-next swiper-button-next-OurCulture position-relative"></div>
                </div>

            </div>

        </div>

    </div>
</section>
