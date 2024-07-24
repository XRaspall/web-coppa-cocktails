<section id="videoSection" class="vh-100 position-relative">
    <video autoplay muted loop class="position-absolute top-0 start-50 translate-middle-x w-100 h-100 object-fit-cover">
        <source src="{{ asset('video/infoglobal/infoglobal.mp4') }}" type="video/mp4">
    </video>
    <div class="position-absolute top-0 start-50 translate-middle-x text-center">
        <img alt="" src="{{ asset('img/logo.webp?version='.config('app.version')) }}" width="270" class="">
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-center mb-5">
        <a id="enterLink" class="ff-Montserrat">ENTER OUR WORLD</a>
    </div>
</section>

<section id="navSection" class="vh-100 d-flex align-items-center d-none">
    <img alt="" src="{{ asset('img/infoglobal/topright.webp?version='.config('app.version')) }}" class="position-absolute top-0 end-0">
    <div class="container d-flex justify-content-center">
        <div class="content-container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <a href="{{ route('home') }}"><img alt="" src="{{ asset('img/logo.webp?version='.config('app.version')) }}" class=""></a>
                </div>
                <div class="col-12 d-flex flex-column py-5">
                    <a href="{{ route('home') }}" class="rounded-link ff-Montserrat">HOW IT IS MADE</a>
                    <a href="{{ route('aboutusPage') }}#aboutCoppa" class="rounded-link ff-Montserrat">HOW TO SERVE</a>
                    <a href="{{ route('aboutusPage') }}#readyToDrink" class="rounded-link ff-Montserrat">WHY WE ARE THE BEST</a>
                    <a href="https://www.instagram.com/coppacocktails/" target="_blank" class="rounded-link ff-Montserrat">FOLLOW US ON INSTAGRAM</a>
                </div>
                <div class="col-12 text-center">
                    <img alt="" src="{{ asset('img/infoglobal/coins.webp') }}" class="img-fluid">
                </div>
                <div class="col-12 text-end py-3">
                    <img alt="" src="{{ asset('img/infoglobal/butterfly.webp') }}" class="">
                </div>
                <div class="col-12 text-center">
                    <p class="ff-Montserrat">Copyright © 2020 - Coppa Cocktails B.V.R</p>
                </div>
            </div>
        </div>
    </div>
    <img alt="" src="{{ asset('img/infoglobal/bottomleft.webp?version='.config('app.version')) }}" class="position-absolute bottom-0 start-0">
</section>
