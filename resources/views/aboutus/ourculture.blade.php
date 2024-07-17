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
                            <h2 class="color-coppa-primary ff-BarlowCondensedSemiBold mb-4">Our Culture</h2>
                            <p class="ff-Montserrat color-coppa-primary">At Coppa Cocktails we aim to inspire real connections through social, high-quality experiences. We are more than a cocktail. We are an instigator for cocktail change. Through our global community of cocktail curious people, we come together to celebrate life, love and friends. We embrace diversity, authenticity, quality, and ease, turning any occasion into a celebration.</p>
                            <button class="message-button ff-Montserrat text-uppercase mt-4">Become part of our community</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 px-0 position-relative animate-on-scroll" data-animation="animate__fadeInRight">
                <div class="swiper-container" id="carouselOurCulture" style="max-width: 100%;">
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
                <div class="swiper-navigation-container d-flex justify-content-between align-items-center mt-3">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #carouselOurCulture {
        overflow: hidden;
    }
    .swiper-container {
        width: 100%;
    }
    .swiper-navigation-container {
        width: 100%;
        text-align: center;
    }
    .swiper-button-prev, .swiper-button-next {
        color: #000;
        width: 44px;
        height: 44px;
        background-size: 44px 44px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('#carouselOurCulture', {
            slidesPerView: 1.5,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
        });
    });
</script>
