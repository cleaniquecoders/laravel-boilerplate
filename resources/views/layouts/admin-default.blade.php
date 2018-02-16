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