@component('layouts.app', ['title' => __('Unauthorized Access Attempt')])
	@section('body')
		<div class="container">
			@card()
				@slot('card_title')
					{{ __('Unauthorized Access Attempt') }} 
				@endslot
				@slot('card_body')
					<p class="text-center">{{ __('You are not authorized to access this area.') }}</p>
				@endslot
			@endcard
		</div>	
	@endsection
@endcomponent