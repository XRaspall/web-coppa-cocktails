<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css?version='.config('app.version')) }}" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css?version='.config('app.version')) }}"/>
<link rel="stylesheet" href="{{ asset('css/fonts.css?version='.config('app.version')) }}"/>
<link rel="stylesheet" href="{{ asset('css/theme.css?version='.config('app.version')) }}"/>
<link rel="stylesheet" href="{{ asset('css/custom.css?version='.config('app.version')) }}"/>
<link rel="stylesheet" href="{{ asset('css/custom-mediaquery.css?version='.config('app.version')) }}"/>
<link rel="stylesheet" href="{{ asset('css/animate.min.css?version='.config('app.version')) }}"/>
@yield('styles')

{{-- DECLARO EL SWIPPER ANTES PARA QUE LO DETECTE PARA LOS SLIDES --}}
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
