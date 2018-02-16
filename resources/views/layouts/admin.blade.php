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
    <link href="{{ asset('css/balloon.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @include('components.navigations.navbar')
    <div class="container">
        <div class="row">
            <div class="col">
                {{ Breadcrumbs::render() }}
                @yield('content')
            </div>
        </div>
    </div><!-- /.container -->
    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/font-awesome.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @include('vendor.sweetalert.view')
    @stack('scripts')
</body>
</html>
