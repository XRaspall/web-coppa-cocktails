@extends('layouts.app')

@section('title', $cocktail->name )
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cocktail.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('cocktail.content')
    @include('ourcocktails.slide')
@endsection

@section('scripts')
    <script src="{{ asset('js/cocktail.js?version='.config('app.version')) }}"></script>
@endsection
