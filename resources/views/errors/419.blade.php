@component('layouts.app', ['title' => __('The page has expired due to inactivity')])
	@slot('body')
		<p class="text-danger text-center">{{ __('Please login to continue') }} <a href="{{ url('/login') }}" class="btn btn-primary ml-2 mr-2">{{ __('Login') }}</a></p>
	@endslot
@endcomponent