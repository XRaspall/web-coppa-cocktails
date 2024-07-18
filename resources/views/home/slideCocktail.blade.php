<style>
    .section-slideCocktails {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 80vh;
        overflow: hidden;
        background-color: #F9F8F5;
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
        height: 80vh;
    }

    .filter-brightness-slideCocktail{
        filter: brightness(0.5);
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

</style>

<section>
    <div class="section-slideCocktails">
        <div class="swiper-container swiper-container-slideCocktail">
            <div class="swiper-wrapper height-slideImage-carrusel">
                <div class="swiper-slide p-0 bg-transparent animate__animated animate__fadeInRight">
                    <div class="row w-100 row-container-swiper-slideCocktail">
                        <div class="col-8 p-0">
                            <div class="bg-div-primary-slideCocktail-img d-flex">
                                <div class="div-content-info-slideCocktail align-content-center">
                                    <small class="ff-Montserrat">CATEGORY / REFRESHING</small>
                                    <h3 class="ff-BarlowCondensedSemiBold">Mojito</h3>
                                    <p class="ff-Montserrat">The world-famous Mojito takes you on a Caribbean-tasting adventure down the streets of Havana. The rich flavor of the Caribbean rum mixed with the breezy notes of mint and lime makes for a perfectly refreshing cocktail.</p>
                                    <p class="ff-Montserrat">Made with natural flavors and premium ingredients, the Coppa Cocktails Mojito is best enjoyed with crushed ice and in the company of great friends.</p>
                                    <a class=""><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">EXPLORE FLAVOR</button></a>

                                </div>
                                <img class="" src="{{ asset('/storage/cocktails/1/Mojito.webp') }}" alt="Image 5">
                            </div>
                        </div>
                        <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                            <img class="filter-brightness-slideCocktail" src="{{ asset('/storage/cocktails/2/Pinacolada.webp') }}" alt="Image 5">
                        </div>
                        <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                            <img class="filter-brightness-slideCocktail" src="{{ asset('/storage/cocktails/3/Strawberry_Daiquiri_Slider.webp') }}" alt="Image 5">
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-0 bg-transparent animate__animated animate__fadeInRight">
                    <div class="row w-100 row-container-swiper-slideCocktail">
                        <div class="col-8 p-0">
                            <div class="bg-div-primary-slideCocktail-img d-flex">
                                <div class="">
                                    <h3>MOJITO</h3>
                                    <p>The world-famous Mojito takes you on a Caribbean-tasting adventure down the streets of Havana. The rich flavor of the Caribbean rum mixed with the breezy notes of mint and lime makes for a perfectly refreshing cocktail.</p>
                                    <p>Made with natural flavors and premium ingredients, the Coppa Cocktails Mojito is best enjoyed with crushed ice and in the company of great friends.</p>
                                </div>
                                <img class="" src="{{ asset('/storage/cocktails/2/Pinacolada.webp') }}" alt="Image 5">
                            </div>
                        </div>
                        <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                            <img class="filter-brightness-slideCocktail" src="{{ asset('/storage/cocktails/3/Strawberry_Daiquiri_Slider.webp') }}" alt="Image 5">
                        </div>
                        <div class="col-2 bg-div-secondary-slideCocktail-img p-0">
                            <img class="filter-brightness-slideCocktail" src="{{ asset('/storage/cocktails/4/SOTB_Slider.png') }}" alt="Image 5">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<script>
    var swiper = new Swiper('.swiper-container-slideCocktail', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
