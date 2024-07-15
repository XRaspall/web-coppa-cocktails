<script src="{{ asset('js/bootstrap.bundle.min.js?version='.config('app.version')) }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.min.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/menu.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/custom.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/modal.js?version='.config('app.version')) }}"></script>

<script>

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
        },
        breakpoints: {
            1399: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 3,
            },
            1000: {
                slidesPerView: 3,
            },
            767: {
                slidesPerView: 2,
            },
            580: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            },
            100: {
                slidesPerView: 1,
            }
        }
    });

</script>
