<section id="readyToDrink" class="bg-coppa-secondary py-5 position-relative">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column align-items-end justify-content-center px-0 px-md-5">
                <div class="pt-0 pb-5 px-5 p-md-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h3 class="accordion-header active" id="headingOne" onclick="toggleAccordion('collapseOne', 0)">
                                Top bartender quality
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p>Highly sophisticated cocktails served in an effortless way with a level of quality that you can only expect from your favorite cocktail bar. Fast, premium, easy, and irresistible delicious.</p>
                                    <p>Remember; Just add ice!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0">
                            <h3 class="accordion-header" id="headingTwo" onclick="toggleAccordion('collapseTwo', 1)">
                                Over 15 delicious cocktails
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p>Discover the broadest range of international ready-to-drink cocktails on the planet. Choose between over 15 award-winning Coppa Cocktails and find one favorite for every happy occasion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0">
                            <h3 class="accordion-header" id="headingThree" onclick="toggleAccordion('collapseThree', 2)">
                                Premium Natural Ingredients
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p>Coppa cocktails are made with natural ingredients, certified colors and premium spirits, giving you the best and most natural tasting ready-to-drink cocktails in the world. Just add ice!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0">
                            <h3 class="accordion-header" id="headingFour" onclick="toggleAccordion('collapseFour', 3)">
                                Perfect sip, every time
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p>We have developed a method to ensure our Coppa Cocktails deliver a consistent superior taste every time. Our bottle sleeve helps conserve the ingredients, giving it a prolonged shelf life, perfect for those spontaneous get-togethers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0">
                            <h3 class="accordion-header" id="headingFive" onclick="toggleAccordion('collapseFive', 4)">
                                Easy to serve
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p>Throwing the perfect party or get-together should be easy. No more shaking, stirring, recipe reading and trips to the store. Just choose your favorite Coppa Cocktails and pour over ice!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('img/aboutus/readytodrink/bird.webp') }}" class="img-fluid d-none d-lg-block" alt="Imagen Abajo Derecha">
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 mt-5">
                <div id="carouselReadyToDrink" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/aboutus/readytodrink/image1.webp') }}" class="d-block" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/aboutus/readytodrink/image2.webp') }}" class="d-block" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/aboutus/readytodrink/image3.webp') }}" class="d-block" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/aboutus/readytodrink/image4.webp') }}" class="d-block" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/aboutus/readytodrink/image5.webp') }}" class="d-block" alt="Imagen 2">
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <a class="carousel-control-prev" href="#carouselReadyToDrink" role="button" data-bs-slide="prev">
                            <img alt="" src="{{ asset('img/aboutus/readytodrink/previous.svg') }}">
                        </a>
                        <a class="carousel-control-next" href="#carouselReadyToDrink" role="button" data-bs-slide="next">
                            <img alt="" src="{{ asset('img/aboutus/readytodrink/next.svg') }}">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute start-50 translate-middle" style="z-index: 10;">
        <img src="{{ asset('img/aboutus/readytodrink/readytodrink.webp') }}" class="img-fluid" alt="Ready to Drink">
    </div>
    <img src="{{ asset('img/aboutus/readytodrink/flowers-left.webp') }}" class="position-absolute bottom-0 start-0 flowers-left-custom d-none d-lg-block" alt="Flower Left">
    <img src="{{ asset('img/aboutus/readytodrink/flowers-right.webp') }}" class="position-absolute top-0 end-0 flowers-right-custom d-none d-lg-block" alt="Flower Right">
    <!-- Butterfly image -->
    <img src="{{ asset('img/aboutus/readytodrink/butterfly.webp') }}" class="position-absolute bottom-0 end-70 butterfly-custom d-none d-lg-block" alt="Butterfly">
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carousel = new bootstrap.Carousel(document.getElementById('carouselReadyToDrink'), {
            interval: false
        });

        window.toggleAccordion = function (id, index) {
            var element = document.getElementById(id);
            var currentlyShown = element.classList.contains('show');

            if (currentlyShown) {
                return;
            }

            document.querySelectorAll('.accordion-collapse').forEach((collapse) => {
                collapse.classList.remove('show');
            });

            document.querySelectorAll('.accordion-header').forEach((header) => {
                header.classList.remove('active');
            });

            element.classList.add('show');

            document.querySelectorAll('.accordion-header')[index].classList.add('active');

            carousel.to(index);
        };

        document.getElementById('carouselReadyToDrink').addEventListener('slid.bs.carousel', function (event) {
            var index = event.to;
            document.querySelectorAll('.accordion-collapse').forEach((collapse) => {
                collapse.classList.remove('show');
            });

            document.querySelectorAll('.accordion-header').forEach((header) => {
                header.classList.remove('active');
            });

            document.querySelectorAll('.accordion-header')[index].classList.add('active');
            document.querySelectorAll('.accordion-collapse')[index].classList.add('show');
        });
    });
</script>
