<section class="cocktail-content d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 media-container d-flex flex-column align-items-center">
                <img class="cocktail-image" alt="" src="{{ asset($cocktail->imgroute) }}">
                <video class="w-75 mt-3"  playsinline autoplay muted loop>
                    <source src="{{ asset($cocktail->video) }}" type="video/mp4">
                </video>
                <div class="w-75 row py-4">
                    @foreach($cocktail->images as $image)
                        <div class="col-12 col-md-4 p-0">
                            <img class="img-fluid" alt="{{ $image->alt }}" src="{{ asset($image->imgroute) }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-6 px-5 p-md-0">
                <div class="h-100 d-flex justify-content-center align-items-start mt-5">
                    <div class="cocktail-text-container">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <a href="{{ url('/') }}" class="back-link ff-Montserrat">BACK TO OVERVIEW</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-5 mb-4">
                            <h1 class="ff-BarlowCondensedSemiBold fw-bold color-coppa-primary">{{ $cocktail->name }}</h1>
                            <img width="150" height="150" alt="" src="{{ asset('img/cocktail/bird.webp') }}">
                        </div>
                        <div class="d-flex flex-column ff-Montserrat color-coppa-primary">
                            {!! $cocktail->text1_en !!}
                        </div>
                        <div class="d-flex flex-column ff-Montserrat color-coppa-primary mt-5">
                            {!! $cocktail->text2_en !!}
                        </div>
                        <div class="d-flex mt-5">
                            <button class="option-button ff-BarlowCondensedSemiBold">0.7L</button>
                            <button class="option-button ff-BarlowCondensedSemiBold">100ML</button>
                        </div>
                        <div class="d-flex flex-column ff-Montserrat color-coppa-primary my-5">
                            {!! $cocktail->text3_en !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cocktail-content d-block d-md-none">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 text-center media-container">
                <img class="cocktail-image" alt="" src="{{ asset($cocktail->imgroute) }}">
            </div>
            <div class="col-12 d-flex justify-content-between pt-5">
                <div>
                    <a href="{{ url('/') }}" class="back-link ff-Montserrat">BACK TO OVERVIEW</a>
                </div>
                <img width="100" height="100" alt="" src="{{ asset('img/cocktail/bird.webp') }}">
            </div>
            <div class="col-12">
                <h1 class="ff-BarlowCondensedSemiBold fw-bold color-coppa-primary">{{ $cocktail->name }}</h1>
                <div class="d-flex flex-column ff-Montserrat color-coppa-primary cocktail-text1-container">
                    {!! $cocktail->text1_en !!}
                </div>
                <a href="https://www.coppacocktails.com/store-locator" target="_blank"><button class="wheretobuy-button ff-Montserrat mt-2">WHERE TO BUY</button></a>
            </div>
            <div class="col-12 row">
                <div class="col-12">
                    <video class="mt-3 w-100" playsinline autoplay muted loop>
                        <source src="{{ asset($cocktail->video) }}" type="video/mp4">
                    </video>
                </div>
                <div class="col-12">
                    <div class="row py-4">
                        @foreach($cocktail->images as $image)
                            <div class="col-4 p-0">
                                <img class="img-fluid" alt="{{ $image->alt }}" src="{{ asset($image->imgroute) }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 d-flex flex-column ff-Montserrat color-coppa-primary mt-5 cocktail-text2-container">
                    {!! $cocktail->text2_en !!}
                </div>

                <div class="d-flex mt-5">
                    <button class="option-button ff-BarlowCondensedSemiBold">0.7L</button>
                    <button class="option-button ff-BarlowCondensedSemiBold">100ML</button>
                </div>
                <div class="d-flex flex-column ff-Montserrat color-coppa-primary my-5">
                    {!! $cocktail->text3_en !!}
                </div>

            </div>
        </div>
    </div>
</section>
