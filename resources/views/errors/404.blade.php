@extends('layouts.app')


@section('content')
    <section class="d-flex flex-column align-items-center position-relative">
        <img class="w-100 img-404" alt="404" title="404" src="{{ asset('img/404.webp') }}">
        <a href="{{ route('home') }}" class="btn-404-backhome text-uppercase ff-Montserrat color-coppa-primary text-decoration-none position-absolute" style="bottom: 20px;">BACK TO HOMEPAGE</a>
    </section>
@endsection
