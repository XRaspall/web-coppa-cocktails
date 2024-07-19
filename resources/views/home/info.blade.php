<section class="section-info-home">
    <div class="container-fluid w-100">
        <div class="row">
            <div class="col-12 col-md-6 p-0 animate-on-scroll" data-animation="animate__fadeInLeft">
                <img class="w-100 h-100 object-fit-cover" alt="" src="{{ asset('img/home/info.jpg?version='.config('app.version')) }}">
            </div>
            <div class="col-12 col-md-6 p-5">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <div class="width-info-text">
                        <h2 class="ff-BarlowCondensedSemiBold color-coppa-primary animate-on-scroll" data-animation="animate__fadeInUp">{{ __('home.info.title') }}</h2>
                        <div class="animate-on-scroll" data-animation="animate__fadeInUp">
                            <p class="ff-Montserrat color-coppa-primary">{{ __('home.info.text1') }}</p>
                            <p class="ff-Montserrat color-coppa-primary mb-0">{{ __('home.info.text2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
