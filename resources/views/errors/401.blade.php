@component('layouts.app', ['title' => __('Unauthorized Access Attempt')])
	@slot('body')
		<p class="text-danger text-center">{{ __('You are not authorized to access this area.') }}</p>
	@endslot
@endcomponent