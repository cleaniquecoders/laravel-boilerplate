<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('components.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/balloon.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @include('layouts.admin-' . config('layouts.admin'))

    @include('components.scripts')
    @stack('scripts')
</body>
</html>
