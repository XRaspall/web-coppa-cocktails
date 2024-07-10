<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('layouts.head')

    <body class="">

        @include('layouts.alert')

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.scripts')

        @yield('scripts')

    </body>

</html>
