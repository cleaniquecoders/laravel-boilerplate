<div class="container mt-5">
    <div class="row">
        <div class="col-1">
            @include('components.navigations.sidebar')
        </div>
        <div class="col-11">
            {{ Breadcrumbs::render() }}
            @yield('content')
        </div>
    </div>
</div><!-- /.container -->
@include('components.footer')
