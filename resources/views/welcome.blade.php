@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center">
                    @logo(['height' => '128px'])
                    <br>
                    @appName()
                </h1>
                <hr>
                <h5 class="text-center">Ready with Bootstrap 4, Font Awesome 5, Select2, Datatable and many more!</h5>
                <hr>
                <div class="links d-flex justify-content-center">
                    <a href="https://getbootstrap.com/">Bootstrap 4</a>&nbsp;&nbsp;
                    <a href="https://fontawesome.com/">Font Awesome 5</a>&nbsp;&nbsp;
                    <a href="https://github.com/spatie">Spatie</a>&nbsp;&nbsp;
                    <a href="https://github.com/cleaniquecoders">Cleanique Coders</a>&nbsp;&nbsp;
                    <a href="https://github.com/cleaniquecoders/laravel-boilerplate/blob/master/README.md">Documentation</a>&nbsp;&nbsp;
                    <a href="https://github.com/cleaniquecoders/laravel-boilerplate">GitHub</a>
                </div>
            </div>
        </div>
    </div>
@endsection
