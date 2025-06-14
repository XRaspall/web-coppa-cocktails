<section class="vh-100 position-relative banner-home">
    <img class="h-100 w-100 object-fit-cover brightness07" src="{{ asset('img/home/home.webp?version='.config('app.version')) }}">
    <div class="position-absolute top-50 w-100 px-3 start-50 translate-middle text-center text-white center-banner-div">
        <h2 class="ff-BarlowCondensedMedium">{{ __('home.banner.title') }}</h2>
        <p class="mt-5"><strong>{{ __('home.banner.text') }}</strong></p>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-center text-white mb-5 bottom-banner-div">
        <img class="mb-4" width="28" src="{{ asset('img/icons/mouse.svg?version='.config('app.version')) }}">
        <p>SCROLL DOWN</p>
    </div>
</section>
