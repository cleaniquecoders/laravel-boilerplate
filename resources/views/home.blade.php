@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col">
                @component('components.card', ['card_title' => 'Dashboard'])
                    @slot('card_body')
                        You are logged in!
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
