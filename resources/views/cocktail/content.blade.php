<section class="cocktail-content">
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
            <div class="col-12 col-md-6 p-0">
                <div class="h-100 d-flex justify-content-center align-items-start mt-5">
                    <div class="cocktail-text-container">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ url('/') }}" class="back-link ff-Montserrat">BACK TO OVERVIEW</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h1 class="ff-BarlowCondensedSemiBold fw-bold color-coppa-primary">{{ $cocktail->name }}</h1>
                            <img width="150" alt="" src="{{ asset('img/cocktail/bird.webp') }}">
                        </div>
                        <div class="d-flex flex-column ff-Montserrat color-coppa-primary">
                            {!! $cocktail->text1_en !!}
                        </div>
                        <a href="https://www.coppacocktails.com/store-locator" target="_blank"><button class="message-button ff-Montserrat">WHERE TO BUY</button></a>
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
