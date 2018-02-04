<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    @include('components.navigations.navbar')

    <main role="main" class="container">
        <div class="starter-template">
            @yield('content')
        </div>
    </main><!-- /.container -->

    <nav class="navbar navbar-light bg-light fixed-bottom text-center text-muted">
        <span>{{ date('Y') }} Laravel Boilerplate by Cleanique Coders</span>
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
    @stack('scripts')
</body>
</html>
