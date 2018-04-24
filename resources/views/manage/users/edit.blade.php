@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
			@component('components.card', ['card_title' => 'Edit User'])
                @slot('card_body')

                @endslot
            @endcomponent
        </div>
	</div>
@endsection