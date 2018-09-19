@component('layouts.app', ['title' => __('The page has expired due to inactivity')])
	@section('body')
		<div class="container">
			@card()
				@slot('card_title')
					{{ __('The page has expired due to inactivity') }} 
				@endslot
				@slot('card_body')
					<p class="text-danger">{{ __('Please login to continue') }} <a href="{{ url('/login') }}" class="btn btn-primary ml-2 mr-2">{{ __('Login') }}</a></p>
				@endslot
			@endcard
		</div>	
	@endsection
@endcomponent