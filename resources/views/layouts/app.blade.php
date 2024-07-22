<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('layouts.head')

    <body class="">

        @include('layouts.alert')

        @if(!request()->routeIs('infoGlobal'))
            @include('layouts.header')
        @endif

        @yield('content')

        @if(!request()->routeIs('infoGlobal'))
            @include('layouts.footer')
        @endif

        @include('layouts.scripts')

        @yield('scripts')

    </body>

</html>
