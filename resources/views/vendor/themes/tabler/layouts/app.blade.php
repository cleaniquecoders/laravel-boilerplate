<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('vendor.themes.tabler.components.meta')
    @include('components.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- Dashboard Core -->
    <link href="{{ theme('url', 'assets/css/dashboard.css', 'tabler') }}" rel="stylesheet" />
    @stack('styles')
</head>
<body>
    <div id="app">
        @include('vendor.themes.tabler.components.navigations.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ theme('url', 'assets/js/require.min.js', 'tabler') }}"></script>
    <script>
      requirejs.config({
          baseUrl: '{{ config('app.url') }}/tabler'
      });
    </script>
    <script src="{{ asset('js/font-awesome.js') }}"></script>
    @stack('scripts')
</body>
</html>