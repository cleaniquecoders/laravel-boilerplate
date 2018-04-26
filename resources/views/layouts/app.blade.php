@extends('layouts.base')

@section('body')
    @include('components.navigations.navbar')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                @yield('content')
            </div>
        </div>
    </div><!-- /.container -->
@endsection