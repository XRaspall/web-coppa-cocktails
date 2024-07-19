@extends('layouts.app')

@section('title', 'Our Cocktails' )
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/ourcocktails.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('ourcocktails.banner')
    @include('ourcocktails.header')
    @include('ourcocktails.slide')
    @include('ourcocktails.types')
    @include('ourcocktails.details')
@endsection
