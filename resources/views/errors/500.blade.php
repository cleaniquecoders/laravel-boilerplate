@component('layouts.app', ['title' => __('Internal Server Error')])
	@slot('body')
		<p class="text-danger text-center">{{ __('Ops! We are having issues right now. We will be right back. Thank you!') }}</p>
	@endslot
@endcomponent