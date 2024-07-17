<section id="howitallstarted" class="my-5 py-5">
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="col-12 col-md-6 p-0 animate-on-scroll" data-animation="animate__fadeInRight">
                <video class="w-100 h-100 mt-3 object-fit-cover" playsinline autoplay muted loop>
                    <source src="{{ asset('img/aboutus/howitallstarted.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center px-5">
                <div class="px-0 px-md-5 py-5 w-585px-custom animate-on-scroll" data-animation="animate__slideInUp">
                    <h2 class="ff-BarlowCondensedSemiBold color-coppa-primary">{{ __('aboutus.howitallstarted.title') }}</h2>
                    <p class="ff-Montserrat color-coppa-primary">
                        {{ __('aboutus.howitallstarted.text1') }}
                    </p>
                    <p class="ff-Montserrat color-coppa-primary">
                        {{ __('aboutus.howitallstarted.text2') }}
                    </p>
                    <p class="ff-Montserrat color-coppa-primary">
                        {{ __('aboutus.howitallstarted.text3') }}
                    </p>
                </div>
            </div>
            <img src="{{ asset('img/aboutus/butterfly2.webp') }}" alt="" class="butterfly2-img d-none d-lg-block">
        </div>
    </div>
</section>
