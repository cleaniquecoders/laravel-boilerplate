@component('layouts.app', ['title' => 'Unauthorized Access Attempt'])
	@slot('body')
		<p class="text-danger text-center">You are not authorized to access this area.</p>
	@endslot
@endcomponent