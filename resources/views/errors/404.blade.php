@component('layouts.app', ['title' => __('Page Not Found')])
	@slot('body')
		<p class="text-danger text-center">{{ __('Sorry, the page you are looking for could not be found.') }}</p>
	@endslot
@endcomponent