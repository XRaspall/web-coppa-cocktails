@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css?version='.config('app.version')) }}"/>
@endsection


@section('content')

    @include('home.banner')
    @include('home.info')
    @include('home.video')
    @include('home.slideCoppa')
    @include('home.slideImages')
    @include('home.cocktailsSlide')

@endsection


@section('scripts')
@endsection
