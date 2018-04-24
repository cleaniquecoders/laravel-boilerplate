@component('layouts.app', ['title' => 'The page has expired due to inactivity'])
	@slot('body')
		<p class="text-danger text-center">Please <a href="{{ url('/login') }}" class="btn btn-primary ml-2 mr-2">LOGIN</a> to continue.</p>
	@endslot
@endcomponent