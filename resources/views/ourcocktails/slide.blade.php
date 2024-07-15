<section class="cocktails-slide">
    <div class="container py-5">
        <div class="section-slideImage d-flex">
            <div class="swiper-button-prev position-relative mt-4 swiper-pagination-brown-line align-self-center"></div>
            <div class="swiper-container swiper-container-cocktails d-flex align-items-center">

                <div class="swiper-wrapper height-slideImage-carrusel">
                    @foreach($cocktails as $index => $cocktail)
                        <div class="swiper-slide swiper-slide-cocktails p-0 bg-transparent text-center" >
                            <img src="{{ asset($cocktail->originalImage) }}" class="coppa-img" alt="{{ $cocktail->name }}">
                            <img src="{{ asset($cocktail->appear1) }}" class="appear1-carrusel d-none animate__animated animate__rotateInDownRight" alt="Appear1">
                            <img src="{{ asset($cocktail->appear2) }}" class="appear2-carrusel d-none animate__animated animate__rotateInUpLeft" alt="Appear2">
                            <img src="{{ asset($cocktail->appear3) }}" class="appear3-carrusel d-none animate__animated animate__rotateInUpRight" alt="Appear3">
                            <img src="{{ asset($cocktail->appear4) }}" class="appear4-carrusel d-none animate__animated animate__rotateInDownLeft" alt="Appear4">
                            <h3 class="color-coppa-primary ff-PragatiNarrowRegular">{{ $cocktail->name }}</h3>
                            <a class="center-button message-button ff-Montserrat animate-on-scroll" data-animation="animate__fadeIn" href="{{ url('/cocktails/' . strtolower(str_replace(' ', '-', $cocktail->name))) }}">MORE INFO</a>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="swiper-button-next position-relative mt-4 swiper-pagination-brown-line align-self-center"></div>

        </div>
        <div class="d-flex justify-content-between div-slideImages-controllers align-items-center">
            <div class="swiper-pagination position-relative mt-4 swiper-pagination-brown-line"></div>
        </div>
    </div>
</section>

