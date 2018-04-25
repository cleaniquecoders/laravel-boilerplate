@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-default">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
@endsection
