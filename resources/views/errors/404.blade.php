@component('layouts.app', ['title' => 'Page Not Found'])
	@slot('body')
		<p class="text-danger text-center">Sorry, the page you are looking for could not be found.</p>
	@endslot
@endcomponent