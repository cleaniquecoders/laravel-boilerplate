@component('layouts.app', ['title' => __('Maintenance')])
	@section('body')
		<div class="container">
			@card()
				@slot('card_title')
					{{ __('Maintenance') }} 
				@endslot
				@slot('card_body')
					<p class="text-center">{{ __('Ops! We are currently under maintenance. We will be right back. Thank you!') }}</p>
				@endslot
			@endcard
		</div>	
	@endsection
@endcomponent