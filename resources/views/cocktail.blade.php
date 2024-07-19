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
    <script>
        const containers = document.querySelectorAll('.volume-values-container');

        containers.forEach(container => {
            const buttons = container.querySelectorAll('.option-button');

            buttons[0].classList.add('active');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    buttons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                });
            });
        });

    </script>
@endsection
