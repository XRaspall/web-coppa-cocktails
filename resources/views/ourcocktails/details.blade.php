<section class="section py-5 details-container" style="background-image: url( {{ asset('img/contact/bg-details.webp') }}); background-repeat: no-repeat; background-size: cover">
    <div class="container py-5">
        <div class="row w-100">
            <div class="col-12 col-md-4 d-flex align-items-center">
                <div class="">
                    <h2 class="animate-on-scroll color-coppa-primary ff-BarlowCondensedMedium fw-bolder" data-animation="animate__fadeInUp">{{ $details['title'] }}</h2>
                    <div class="animate-on-scroll d-flex flex-column my-3 ff-Montserrat" data-animation="animate__fadeInUp">{!! $details['text'] !!}</div>
                    <div class="animate-on-scroll d-flex justify-content-between my-3" data-animation="animate__slideInUp">
                        <a href="{{ $details['link1'] }}"><button class="message-button ff-Montserrat">{{ $details['text1'] }}</button></a>
                        <a href="{{ $details['link2'] }}" class="secondary-link ff-Montserrat">{{ $details['text2'] }}</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <img src="{{ asset($details['image']) }}" alt="" class="img-fluid animate-on-scroll" data-animation="animate__fadeInRight">
            </div>
        </div>
    </div>
</section>
