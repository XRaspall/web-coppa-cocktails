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
    <script src="{{ asset('js/readytodrink.js?version='.config('app.version')) }}"></script>
@endsection
