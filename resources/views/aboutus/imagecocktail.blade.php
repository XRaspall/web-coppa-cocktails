<section id="image-cocktail" class="vh-100 position-relative d-flex align-items-center" style="background-image: url('{{ asset('img/aboutus/imagecocktail.jpg?version='.config('app.version')) }}');background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;height: 100%;position: relative;">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="ff-BarlowCondensedSemiBold mb-4">
                    {!! __('aboutus.imagecocktail.text') !!}
                </h2>
                <a href="{{ route('ourCocktailsPage') }}"><button class="ff-Montserrat text-uppercase">{{ __('aboutus.imagecocktail.btn') }}</button></a>
            </div>
        </div>
    </div>
</section>
