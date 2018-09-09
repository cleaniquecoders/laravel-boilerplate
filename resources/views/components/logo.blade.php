<img height="{{ $height ?? '32px' }}" 
	src="{{ $src ?? asset('images/logo.svg') }}" 
	class="pr-2" 
	alt="{{ $alt ?? config('app.name') }}">
	
@if(!isset($src))
	{{-- <div>
		Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
	</div> --}}
@endif