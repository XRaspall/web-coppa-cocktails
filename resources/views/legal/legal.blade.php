@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/legal.css?version='.config('app.version')) }}"/>
@endsection

@section('content')

    <section class="position-relative banner-legal">
        <img class="h-100 w-100 object-fit-cover brightness07" src="{{ asset('img/legal/header-green.jpg?version='.config('app.version')) }}">
        <div class="position-absolute top-50 w-100 px-3 start-50 translate-middle text-center text-white center-banner-div">
            <p class="mt-5 ff-Montserrat"><strong>{!!  $header_subtitle  !!} </strong></p>
            <h1 class="ff-BarlowCondensedSemiBold">{!! $header_title  !!} </h1>
        </div>
    </section>


    <section class="legal-section">
        <div class="container py-5">
            <h3 class="text-center py-5 ff-PragatiNarrowRegular">{!! $legalTitle  !!}</h3>
            <div class="ff-Montserrat">
                {!! $legalText  !!}
            </div>
        </div>

    </section>

    @include('contact.details')
@endsection

