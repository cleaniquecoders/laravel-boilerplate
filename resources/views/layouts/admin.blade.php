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

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    @stack('styles')
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                @include('components.navigations.sidebar')
            </nav>
            <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @include('components.navigations.navbar')
                @yield('content')
            </div>
        </div>
    </div><!-- /.container -->

    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
    @stack('scripts')
</body>
</html>
