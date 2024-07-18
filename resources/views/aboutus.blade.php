@extends('layouts.app')

@section('title', 'About Coppa Cocktails' )
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('aboutus.banner')
    @include('aboutus.aboutcoppa')
    @include('aboutus.readytodrink')
    @include('aboutus.howitallstarted')
    @include('aboutus.imagecocktail')
    @include('aboutus.ourculture')
    @include('aboutus.video')
    @include('aboutus.slideImages')
    @include('aboutus.details')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function initObserver(animationClass, element) {
                let options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.5
                };

                let observer = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('hidden-before-scroll');
                            entry.target.classList.add('animate__animated', animationClass);
                            observer.unobserve(entry.target);
                        }
                    });
                }, options);

                observer.observe(element);
            }

            let elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(el => {
                el.classList.add('hidden-before-scroll');
                let animationClass = el.getAttribute('data-animation');
                initObserver(animationClass, el);
            });
        });

    </script>
@endsection
