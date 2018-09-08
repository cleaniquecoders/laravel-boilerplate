@extends('layouts.admin')

@section('content')
	<div class="my-3 my-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xs-12 col-6">
					@component('components.card')
						@slot('card_header')

						@endslot
						@slot('card_body')

						@endslot
					@endcomponent
				</div>
			</div>
		</div>
	</div>
@endsection

