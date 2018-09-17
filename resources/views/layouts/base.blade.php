<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('components.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    
    <link href="{{ asset('themes/tabler/assets/css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/balloon.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        @include('components.navigations.nav')

        <main class="py-4">
            @yield('body')
        </main>
    </div>
    @include('components.scripts')
</body>
</html>