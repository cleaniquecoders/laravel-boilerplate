@extends('layouts.app')

@section('content')
<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Laravel Boilerplate
        </div>
        <hr>
        <h4>Ready with Bootstrap 4, Font Awesome 5</h4>
        <hr>
        <div class="links">
            <a href="https://getbootstrap.com/">Bootstrap 4</a>
            <a href="https://fontawesome.com/">Font Awesome 5</a>
            <a href="https://github.com/spatie">Spatie</a>
            <a href="https://github.com/cleaniquecoders">Cleanique Coders</a>
            <a href="https://github.com/cleaniquecoders/laravel-boilerplate/blob/master/README.md">Documentation</a>
            <a href="https://github.com/cleaniquecoders/laravel-boilerplate">GitHub</a>
        </div>
    </div>
</div>
@endsection
