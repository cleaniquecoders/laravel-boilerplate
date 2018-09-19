@component('layouts.app', ['title' => __('Internal Server Error')])
	@section('body')
		<div class="container">
			@card()
				@slot('card_title')
					{{ __('Internal Server Error') }} 
				@endslot
				@slot('card_body')
					<p class="text-center">{{ __('Ops! We are having issues right now. We will be right back. Thank you!') }}</p>
				@endslot
			@endcard
		</div>	
	@endsection
@endcomponent