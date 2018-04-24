<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('components.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        @include('components.navigations.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('components.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('vendor.sweetalert.view')
    @stack('scripts')
</body>
</html>
