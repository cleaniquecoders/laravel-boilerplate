@component('layouts.app', ['title' => __('Page Not Found')])
	@section('body')
		<div class="container">
			@card()
				@slot('card_title')
					{{ __('Page Not Found') }} 
				@endslot
				@slot('card_body')
					<p class="text-center">{{ __('Sorry, the page you are looking for could not be found.') }}</p>
				@endslot
			@endcard
		</div>	
	@endsection
@endcomponent