@extends('layouts.app')

@section('title', 'Info Coppa cocktails' )
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/infoglobal.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('infoglobal.content')
@endsection

@section('scripts')
    <script>
        document.getElementById('enterLink').addEventListener('click', function() {
            document.getElementById('videoSection').classList.add('d-none');
            document.getElementById('navSection').classList.remove('d-none');
        });
    </script>
@endsection
