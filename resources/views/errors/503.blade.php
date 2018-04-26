@component('layouts.app', ['title' => __('Maintenance')])
	@slot('body')
		<p class="text-danger text-center">{{ __('Ops! We are currently under maintenance. We will be right back. Thank you!') }}</p>
	@endslot
@endcomponent