@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('contact.banner')
    @include('contact.info')
    @include('contact.details')
@endsection

@section('scripts')
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
