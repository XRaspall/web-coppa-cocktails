@extends('layouts.app')

@section('title', 'Contact Coppa cocktails' )
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css?version='.config('app.version')) }}"/>
@endsection

@section('content')
    @include('contact.banner')
    @include('contact.info')
    @include('contact.details')
    @include('contact.slideImages')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.open-send-message').click(function() {
                var email = $(this).data('email');
                $('input[name="contactEmail"]').val(email);
            });

            @if(session('mailSuccess'))
            $('#successModal').modal('show');
            @endif

            $('[data-dismiss="modal"]').click(function() {
                $('#successModal').modal('hide');
            });
        });
    </script>
@endsection
