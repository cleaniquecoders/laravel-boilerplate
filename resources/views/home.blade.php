@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
	<div class="col">
		@component('components.card', [
			'card_title' => __('Dashboard'),
		])
			@slot('card_body')
				<p class="text-center">{{ __('You are logged in! Welcome back!') }}</p>
			@endslot
		@endcomponent
    </div>
</div>
@endsection
