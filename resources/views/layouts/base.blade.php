<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('components.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/balloon.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @yield('body')
    @include('components.preloader')
    @include('components.footer')

    @include('components.scripts')
    @stack('scripts')
</body>
</html>
